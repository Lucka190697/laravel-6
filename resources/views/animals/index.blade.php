@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    <layout-header
            background-img="{{asset('img/cards/agricultura-animal-area-4222118.jpg')}}"
            description="Cuide de suas mimosas"
            title="@lang("labels.$title")"
            breadcrumb-header="Rebanho"
            breadcrumb-label="@lang('headings._home')">
    </layout-header>
    <div class="container-fluid index-card-procriare">

        <data-list
                page-title="{{$title}}"
                create-url="{{ route('animals.create') }}"
                thumbnailUrl="{{ asset('animals/') }}"
                data-source="{{ route('pagination.animals') }}">
        </data-list>

        <template id="main-data-list" slot-scope="modelScope">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0 pt-1 pb-0">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-sm-12">
                                    <h3 class="mb-0">Animais</h3>
                                </div>
                                <div class="col-lg-6 col-12 m-sm-2">
                                    @include('shared.partials._search-field')
                                </div>
                                <div class="col-lg-3 col-sm-12 float-right">
                                    <a :href="createUrl"
                                       class="btn btn-primary btn-block float-right">
                                        <i class="fa fa-plus mr-2"></i>Novo Animal</a>
                                </div>
                            </div>
                        </div>
                        <div class="card align-items-center">
                            <div class="justify-content-center col-12">
                                <table class="table">
                                    <thead class="thead-light">
                                    <td>sdfg</td>
{{--                                    @include('users.partials._head')--}}
                                    </thead>
                                    <tbody class="list">
                                    <tr v-if="emptyResult">
                                        <td class="text-center text-muted" colspan="6">
                                            Nenhum animal encontrado!
                                        </td>
                                    </tr>
                                    <tr v-else class="text-center" v-for="item in items" :key="item.id">
{{--                                        @include('users.partials._body')--}}
                                        <td>@{{ item }}</td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                            @include('shared.partials._pagination')
                        </div>
                    </div>
                    @include('layouts.footers.auth')
                </div>
            </div>
        </template>
    </div>
@endsection