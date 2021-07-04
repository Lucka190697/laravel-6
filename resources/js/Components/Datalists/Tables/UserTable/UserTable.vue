<template>
<div>
  <table class="table align-items-center table-responsive">
    <thead class="thead-light">
    <tr class="text-center">
      <td> <i class="fa fa-eye"></i> Detahes</td>
      <td @click="orderBy">Nome</td>
      <td>Email</td>
      <td>Telefone</td>
      <td>Criado em</td>
      <td></td>
    </tr>
    </thead>
    <tbody class="list">
    <tr class="text-center" v-for="item in data" :key="item.id">
      <td>
        <a :href="'/admin/user/' + item.id">
          <img
              :src="`/users/${item.thumbnail}`"
              alt="image"
              class="img-center rounded-circle" width="80" height="80"
              data-toggle="tooltip" data-placement="top">
        </a>
      </td>
      <td>{{item.name}}</td>
      <td>{{item.email}}</td>
      <td>{{item.phone ? item.phone : '-'}}</td>
      <td>{{ formatDate(item.created_at) }}</td>
      <td>
        <div class="btn-group">
          <a class="btn btn-white" :href="'/admin/user/' + item.id + '/edit/'">
            <i class="fa fa-pencil-alt text-success"></i>
          </a>
          <a class="btn btn-white" :href="'/admin/user/' + item.id + '/destroy'">
            <i class="fa fa-eraser text-danger"></i>
          </a>
        </div>
      </td>
    </tr>
    </tbody>

  </table>
</div>
</template>

<script>
// import moment from 'vue-moment';
export default {
  name: "UserTable",

  props: {
    data: {
      type: Array,
      required: false,
    },
    thumbnailUrl:{type: String, default: 'default.jpg'}
  },

  mounted(){
    //
  },

  computed: {
    fetch_url() {
      let query_params = "";
      query_params = "?query=" + this.query;
      query_params += "&field=" + this.field;
      // query_params += "&order=" + this.sortIcon.order;

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

      if (this.currentPage != 1) {
        query_params += "&page=" + this.currentPage;
      }

      query_params += this.queryFilters;

      const url = this.dataSource + query_params;
      return url;
    },

  },

  data() {
    return {
      query: '',
      field: '',
      filterType: {},
      currentPage: 1,
      itemsPerPage: 10,
      paginationButtons: [],

    }
  },

  methods:{
    formatDate(date){
      var d = new Date(date);
      return d.toLocaleDateString()
    },

    async fetchData() {
      const response = await axios.get(this.fetch_url);
      console.log(response);
    },
  }
}
</script>

<style scoped>

</style>