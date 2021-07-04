<div v-if="item.links" class="btn-group">
    <a v-if="item.links.show" :href="item.links.show">
        <button type="button" class="btn btn-sm btn-primary">
            <i class="fa fa-eye"></i>
        </button>
    </a>

    <a v-if="item.links.edit" :href="item.links.edit">
        <button type="button" class="btn btn-sm btn-success">
            <i class="fa fa-pencil"></i>
        </button>
    </a>
    <a v-if="item.links.destroy"
       slot-scope="{confirm}"
       @click="confirm($event, handleDelete)">
       <button type="button" class="btn btn-sm btn-danger">
       <i class="fa fa-trash"></i>
       </button>
       </a>
    @if((isset($title)) && ($title == 'book'))
        <a v-if="item.links.reserve" :href="item.links.reserve">
            <button type="button" class="btn btn-sm btn-warning">
                <i class="fa fa-list"></i>
            </button>
        </a>
    @endif
{{--    @yield('button-actions')--}}
</div>
