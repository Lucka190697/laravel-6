@extends('layouts.app')

@section('content')
    <layout-header
        background-img="{{asset('img/cards/cows-954002_19220.jpg')}}"
        description="{{$description}}"
        title="@lang("labels.$title")"
        breadcrumb-header="Registrar novo animal"
        breadcrumb-label="@lang('headings._home')">
    </layout-header>
    <div class="container-fluid card-procriare">
        <div class="row">
            <div class="col" style="margin-top: 25%">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-sm-12">
                                <div class="col-md-9 float-left">
                                    <h3>@lang('headings.animals.create')</h3>
                                </div>
                                <div class="col-md-3 float-right">
                                    <a href="{{route('animals.index')}}" class="btn btn-block btn-primary">
                                        <i class="fa fa-arrow-left mr-2"></i>Voltar
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="col-12">
                                            <form class="form-horizontal p-0" method="POST" action="{{ route('animals.store') }}" enctype="multipart/form-data">
                                                @csrf
                                                <animal-form
                                                :old='@json(old())'
                                                :errors="{{$errors}}">
                                                </animal-form>
                                                <div class="form-group col-sm-12 col-md-6">
                                                    <button class="btn btn-block btn-primary" type="submit">
                                                        <i class="fa fa-check"></i> @lang('links._create')
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footers.auth')
                </div>
            </div>
        </div>
    </div>
@endsection