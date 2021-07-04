<nav aria-label="Page navigation example" v-if="shouldShowPagination">
    <ul class="pagination">
        <li class="page-item" :class="{'disabled': !enabledPrevPageButton}"
            @click.prevent="fetchPrevPage">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item" v-for="button in paginationButtons" @click.prevent="changePage(button.page)"
            :class="{'active': button.active, 'disabled': button.disabled}" :ref="'paginationButton' + button.page">
            <a class="page-link">
                @{{button.text}}
            </a>
        </li>
        <li class="page-item" :class="{'disabled': !enabledNextPageButton}"
            @click.prevent="fetchNextPage">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>