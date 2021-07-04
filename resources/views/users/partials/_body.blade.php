<td>
    <a :href="'/admin/user/' + item.id">
        <img
           :src="item.thumbnail"
           alt="image"
           class="img-center rounded-circle" width="80" height="80"
           data-toggle="tooltip" data-placement="top">
    </a>
</td>
<td>@{{item.name}}</td>
<td>@{{item.email}}</td>
<td>@{{item.phone ? item.phone : '-'}}</td>
<td>@{{ formatDate(item.created_at) }}</td>
<td>
    <div class="btn-group">
        <a v-if="item.links.edit"
           class="btn btn-white"
           :href="item.links.edit">
            <i class="fa fa-pencil-alt text-success"></i>
        </a>
        <a
           v-if="item.links.destroy"
           @click="showConfirmDelete()"
           id="delete-button"
           class="btn btn-white">
            <i class="fa fa-eraser text-danger"></i>
        </a>
    </div>
</td>
{{--<td>@include('shared.partials._buttons_actions')</td>--}}