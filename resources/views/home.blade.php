@extends('layouts.app')

@section('content')
    <layout-header
        background-img="{{asset('img/cards/home.jpg')}}"
        title="@lang("labels.$title")"
        breadcrumb-header=""
        breadcrumb-label="@lang('headings._home')">
    </layout-header>
    <div class="container-fluid card-procriare">
        <div class="row">
            <div class="col" style="margin-top: 30%">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-sm-12 float-center m-sm-2">
                                <h3 class="mb-0">@lang('labels.Home')</h3>
                            </div>
                            <div class="col-lg-6 col-12 m-sm-2">
                                <!-- -->
                            </div>
                            <div class="col-lg-3 col-sm-12 float-right">
                                @if($title == 'search')
                                    <a href="{{ URL::previous() }}" class="btn btn-danger btn-block">
                                        <i class="fa fa-arrow-left"></i>@lang('labels.Back')</a>
                                @endif
                                @if($title == 'Home')
                                    <a href="#" class="btn btn-primary btn-block">
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
                            Ações
                        </div>
                        <div class="card-body">
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
