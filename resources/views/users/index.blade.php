@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    <layout-header
        background-img="{{asset('img/cards/user.jpg')}}"
        description="Gerencie seus colaboradores"
        title="@lang("labels.$title")"
        breadcrumb-header="Usuarios"
        breadcrumb-label="@lang('headings._home')">
    </layout-header>
    <div class="container-fluid mt--7 index-card-procriare">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-sm-12">
                                <h3 class="mb-0">@lang('labels.Users')</h3>
                            </div>
                            <div class="col-lg-6 col-12 m-sm-2">
                                <form action="#" method="post" role="search">
                                    {{ csrf_field() }}
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                               name="search" id="user-search" placeholder="Pesquisar...">
                                        <span class="input-group-btn">
                                        <button type="submit" class="btn btn-outline-light">
                                            <span class="fa fa-search"></span>
                                         </button>
                                    </span>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3 col-sm-12 float-right">
                                @if($title == 'search')
                                    <a href="{{ URL::previous() }}" class="btn btn-danger btn-block">
                                        <i class="fa fa-arrow-left"></i>@lang('labels.Back')</a>
                                @endif
                                @if($title == 'User Management')
                                    <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-block">
                                        <i class="fa fa-plus mr-2"></i>@lang('labels.Add User')</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        {{--                        @include('layouts.flash-message')--}}
                    </div>
                    <!-- Farms table -->
                    {{--                    @include('farm.index')--}}
                    <div class="card">
                        <div class="card-header">
                            Usuários
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-bordered">
                                <tr>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                </tr><tr>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                </tr><tr>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                </tr><tr>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                </tr><tr>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                </tr><tr>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                </tr><tr>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                </tr><tr>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                </tr><tr>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                </tr><tr>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                    <td>gfdns</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            @if($title == 'search')
                                <a href="{{ URL::previous() }}" class="btn btn-sm btn-danger">
                                    <i class="fa fa-arrow-left"></i>@lang('labels.Back')
                                </a>
                            @endif
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection