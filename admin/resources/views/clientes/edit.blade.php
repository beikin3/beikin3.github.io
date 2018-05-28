@extends('layouts.app') @section('content')
<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">{{ $cliente->nome }}</h2>
    </div>
</header>

<!-- Dashboard Counts Section-->
<section class="no-padding-bottom">
    <div class="container-fluid">
        <div class="row bg-white has-shadow">
            <!-- <a href="" class="btn btn-primary float-right mb-3">Novo</a> -->
            <div class="col">

                @php ($route = $cliente->id ? 'clientes.update' : 'clientes.store' ) @php ($param = $cliente->id ? $cliente->id : null )

                <form method="POST" action="{{ route($route, $param) }}" class="py-5">
                    @if (session('status'))
                    <div class="alert alert-{{ session('status') }}" role="alert">{{ session('msg') }}</div>
                    @endif @csrf {{ method_field($cliente->id ? 'PUT' : 'POST')}} {{--
                    <div class="row mb-3">
                        <div class="col-md-4 text-right">
                            <h1>Info</h1>
                        </div>
                    </div> --}}
                    <div class="form-group-material">
                        <input id="nome" type="text" class="input-material {{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome', $cliente->nome) }}"
                            required autofocus> @if ($errors->has('nome'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('nome') }}</strong>
                        </span>
                        @endif
                        <label for="name" class="label-material">Nome</label>
                    </div>

                    <div class="form-group-material">
                        <input id="email" type="text" class="input-material {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email', $cliente->email) }}"
                            required autofocus> @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                        <label for="name" class="label-material">Email</label>
                    </div>

                    <div class="form-group-material">
                        <input id="razao_social" type="text" class="input-material {{ $errors->has('razao_social') ? ' is-invalid' : '' }}" name="razao_social"
                            value="{{ old('razao_social', $cliente->razao_social) }}"> @if ($errors->has('razao_social'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('razao_social') }}</strong>
                        </span>
                        @endif
                        <label for="razao_social" class="label-material">Razão Social</label>
                    </div>

                    <div class="form-group-material">
                        <label for="name" class="label-material">Acessos</label>
                        <textarea id="acessos" type="text" class="input-material {{ $errors->has('acessos') ? ' is-invalid' : '' }}" name="acessos">{{ old('acessos', $cliente->acessos) }}</textarea>
                        @if ($errors->has('acessos'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('acessos') }}</strong>
                        </span>
                        @endif
                    </div>


                    <h1 class="my-4">Site</h1>
                    <div class="form-group-material">
                        <input id="site" type="text" class="input-material {{ $errors->has('site') ? ' is-invalid' : '' }}" name="site" value="{{ old('site', $cliente->site) }}"> @if ($errors->has('site'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('site') }}</strong>
                        </span>
                        @endif
                        <label for="name" class="label-material">URL</label>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group-material">
                                <input id="site_login" type="text" class="input-material {{ $errors->has('site_login') ? ' is-invalid' : '' }}" name="site_login"
                                    value="{{ old('site_login', $cliente->site_login) }}"> @if ($errors->has('site_login'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('site_login') }}</strong>
                                </span>
                                @endif
                                <label for="name" class="label-material">Login</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group-material">
                                <input id="site_senha" type="text" class="input-material {{ $errors->has('site_senha') ? ' is-invalid' : '' }}" name="site_senha"
                                    value="{{ old('site_senha', $cliente->site_senha) }}"> @if ($errors->has('site_senha'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('site_senha') }}</strong>
                                </span>
                                @endif
                                <label for="name" class="label-material">Senha</label>
                            </div>
                        </div>



                    </div>



                    <h1 class="my-4">Hospedagem</h1>

                    <div class="form-group-material">
                            <input id="hospedagem" type="text" class="input-material {{ $errors->has('hospedagem') ? ' is-invalid' : '' }}" name="hospedagem" value="{{ old('hospedagem', $cliente->hospedagem) }}"> @if ($errors->has('hospedagem'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('hospedagem') }}</strong>
                            </span>
                            @endif
                            <label for="name" class="label-material">URL</label>
                        </div>

                    <div class="row">
                            <div class="col-md-4">
                                <div class="form-group-material">
                                    <input id="hospedagem_login" type="text" class="input-material {{ $errors->has('hospedagem_login') ? ' is-invalid' : '' }}"
                                        name="hospedagem_login" value="{{ old('hospedagem_login', $cliente->hospedagem_login) }}"> @if ($errors->has('hospedagem_login'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hospedagem_login') }}</strong>
                                    </span>
                                    @endif
                                    <label for="name" class="label-material">Login/Senha</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                    <input id="hospedagem_senha" type="text" class="input-material {{ $errors->has('hospedagem_senha') ? ' is-invalid' : '' }}"
                                        name="hospedagem_senha" value="{{ old('hospedagem_senha', $cliente->hospedagem_senha) }}"> @if ($errors->has('hospedagem_senha'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hospedagem_senha') }}</strong>
                                    </span>
                                    @endif
                                </div>
                        
                    </div>




                    <div class="form-group text-right">
                        <input type="submit" value="Salvar" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
</section>
@endsection
