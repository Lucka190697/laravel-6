@extends('layouts.app')

@section('content')
    <layout-header
        background-img="{{asset('img/cards/farm1.jpg')}}"
        description="{{$description}}"
        title="@lang("labels.$title")"
        breadcrumb-header="Criar Fazenda"
        breadcrumb-label="@lang('headings._home')">
    </layout-header>
    <div class="container-fluid card-procriare">
        <div class="row">
            <div class="col" style="margin-top: 30%">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-sm-12 float-center m-sm-2">
                                <h3 class="mb-0">Sua propriedade no Procriare</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="col-md-6 float-left">
                                        <div class="card p-3">
                                            <h2 class="text-justify">Todo seu rebanho aqui</h2>
                                            <h4>Mais uma etapa</h4>
                                            <p>
                                                Cadastre sua fazenda com os dados solicitados.
                                            </p>
                                            <p>
                                                A partir daí, você pode adicionar um
                                                funcionário para te auxiliar no gerenciamento dos animais e
                                                poderá ter acesso total ao sistema
                                            </p>
                                            <h4> É o olho do dono que engorda o boi né?</h4>
                                            <p>
                                                Ter o controle de seus animais, a atenção e o cuidado é
                                                o que te faz criador.
                                                Então no <strong>Procriare</strong> você tem seu rebanho na sua mão
                                                e você ele vai te auxiliar pra tomar a melhor decisão para seu rebanho.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 float-right">
                                        <form class="form-horizontal" method="POST"
                                              action="{{ route('admin.farm.store') }}">
                                            @include('farm.partials._form')
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
@endsection
