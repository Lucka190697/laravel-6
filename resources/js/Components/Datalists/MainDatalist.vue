<script>
import SearchItem from "./SearchItem";
import UserTable from "./Tables/UserTable/UserTable";
import SortIcon from "./SortIcon";

export default {
  name: "MainDatalist",

  template: "#main-data-list",

  props: {
    pageTitle: {type: String, required: true},
    mainTitle: {type: String, required: false},
    createUrl: {type: String, default: '#'},
    thumbnailUrl: {type: String, default: 'default.jpg'},
    // data: {type: Object, required: false},
    dataSource: {type: String, required: false},
  },

  watch: {
    query: _.debounce(function (text) {
      this.currentPage = 1;
    }, 300),

    fetch_url: _.debounce(function (text) {
      console.log(this.fetchData());
    }, 200)
  },

  computed: {
    queryFilters() {
      let query_filters = "";
      for (var filterName in this.filters) {
        if (this.filters.hasOwnProperty(filterName)) {
          query_filters +=
              "&" + filterName + "=" + this.filters[filterName];
        }
      }
      return query_filters;
    },

    fetch_url() {
      let query_params = "";
      query_params = "?query=" + this.query;
      query_params += "&field=" + this.field;
      query_params += "&order=" + this.sortIcon.order;

      _.forEach(this.filterType, function (value, key) {
        if (
            value !== "undefined" &&
            value !== null &&
            typeof value === "object"
        ) {
          query_params += "&" + key + "=" + value.id;
        } else if (value !== "undefined" && value !== null) {
          query_params += "&" + key + "=" + value;
        }
      });

      if (this.currentPage !== 1) {
        query_params += "&page=" + this.currentPage;
      }

      query_params += this.queryFilters;

      return this.dataSource + query_params;
    },

    emptyResult() {
      return typeof this.items == "undefined" || this.items.length === 0;
    },

    enabledNextPageButton() {
      return this.currentPage < this.totalPages;
    },

    enabledPrevPageButton() {
      return this.currentPage > 1;
    },

    shouldShowPagination() {
      return this.totalPages > 1;
    },
  },

  data() {
    return {
      items: [],
      filters: {
        perPage: 10
      },
      query: "",
      field: "",
      filterType: {},
      isLoading: true,
      sortIcon: new SortIcon(),
      totalPages: 1,
      currentPage: 1,
      itemsPerPage: 10,
      paginationButtons: [],
      count: {
        totalRegistries: 0
      }
    }
  },

  mounted() {
    this.sortIcon.setArrow();
    this.listenFilters();
    this.fetchData().then(() => {
      // if (!!window.__FILTER__) {
      //   this.filterType = window.__FILTER__;
      // }
    });

    this.listenLoadingEvents();
  },

  methods: {
    getRef(ref) {
      return this.$refs[ref];
    },

    orderBy(field, event) {
      this.field = field;
      this.sortIcon.change(event);
    },

    setPagination(fetched_data) {
      if (typeof fetched_data !== "undefined") {
        this.totalPages = fetched_data.last_page;
        this.currentPage = fetched_data.current_page;
        this.itemsPerPage = fetched_data.per_page;
      }
    },

    async fetchData() {
      this.$root.$emit("start-loading");
      const response = await axios.get(this.fetch_url);
      console.log(window.innerWidth);

      this.items = response.data.data;
      this.setPagination(response.data.meta);
      this.definePaginationButtons();
      this.updateTotal(response.data);
      this.$root.$emit("stop-loading");
      // this.$nextTick().then(function () {
      //   $('[data-toggle="popover"]').popover();
      // });
    },

    listenFilters() {
      this.$on("setFilter", payload => {
        this.setFilter(payload.urlKey, payload.value);
      });
    },

    fetchPrevPage() {
      if (this.enabledPrevPageButton) {
        this.currentPage = this.currentPage - 1;
        this.fetchData();
      }
    },

    fetchNextPage() {
      if (this.enabledNextPageButton) {
        this.currentPage = this.currentPage + 1;
        this.fetchData();
      }
    },

    setFilter(name, value) {
      if (value) {
        this.$set(this.filters, name, value);
      } else {
        delete this.filters[name];
        this.filters = _.assign({}, this.filters);
      }
    },

    definePaginationButtons() {
      const totalPages = this.totalPages;
      let startPage = this.currentPage - 2;
      let endPage = this.currentPage + 2;
      let buttons = [];

      if (startPage <= 0) {
        endPage -= startPage - 1;
        startPage = 1;
      }

      if (endPage > totalPages) endPage = totalPages;

      if (startPage > 1) {
        buttons.push({disabled: false, page: 1, text: "1"});
        buttons.push({disabled: true, page: 0, text: "..."});
      }

      for (let i = startPage; i <= endPage; i++) {
        const active = i === this.currentPage;
        buttons.push({
          disabled: false,
          page: i,
          text: i,
          active: active
        });
      }

      if (endPage < totalPages) {
        buttons.push({disabled: true, page: 0, text: "..."});
        buttons.push({
          disabled: false,
          page: totalPages,
          text: totalPages
        });
      }

      this.paginationButtons = buttons;
    },

    changePage(page) {
      this.currentPage = page;
      this.fetchData();
    },

    handleDelete(link) {
      axios.delete(link).then(response => {
        const status = response.data;
        if (status.type) {
          this.$snotify[status.type](status.message);
          this.fetchData();
        } else {
          this.$snotify.error("Action undefined");
        }
      });
    },

    showConfirmDelete() {
      console.log('iuii')
      this.$snotify.confirm('Tem certeza que quer excluir?', {
        timeout: 5000,
        showProgressBar: true,
        closeOnClick: false,
        pauseOnHover: true,
        buttons: [
          {text: 'Yes', action: () => console.log('Clicked: Yes'), bold: false},
          {text: 'No', action: () => console.log('Clicked: No')},
          // {text: 'Later', action: (toast) => {console.log('Clicked: Later'); vm.$snotify.remove(toast.id); } },
          // {text: 'Close', action: (toast) => {console.log('Clicked: No'); vm.$snotify.remove(toast.id); }, bold: true},
        ]
      })
    },

    confirmDelete(link, title = undefined, message = undefined) {
      if (title === undefined) {
        title = this.deleteTitle;
      }

      if (message === undefined) {
        message = this.deleteMessage;
      }

      this.$snotify.confirm(message, title, {
        timeout: 5000,
        showProgressBar: false,
        closeOnClick: true,
        pauseOnHover: false,
        buttons: [
          {
            text: 'Sim',
            action: (toast) => {
              this.handleDelete(link);
              this.$snotify.remove(toast.id);
            },
            bold: false
          },
          {text: 'Não'},
        ]
      });
    },

    updateTotal(data) {
      this.count.totalRegistries = data.meta.total;
    },

    listenLoadingEvents() {
      this.$root.$on("start-loading", () => {
        this.isLoading = true;
      });

      this.$root.$on("stop-loading", () => {
        this.isLoading = false;
      });
    },

    formatDate(date){
      var d = new Date(date);
      return d.toLocaleDateString()
    },
  },

  components: {
    UserTable,
  },
}
</script>

<style scoped>
.col {
  margin-top: 30% !important;
}

@media(max-width: 1920px) {
  .col{
    margin-top: 19% !important;
  }
}

@media(max-width: 1366px) {
  .col{
    margin-top: 29% !important;
  }
}
</style>