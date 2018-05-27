@extends('layouts.app') @section('content')
<!-- Dashboard Counts Section-->
<section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
        <div class="row bg-white has-shadow">
            <div class="col-12 text-right">
                <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Novo</a>
            </div>

            @foreach ($clientes as $cliente)
            <div class="col">
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="statistic d-flex align-items-center has-shadow mb-3">
                    <div class="icon bg-dark">
                        <i class="fa fa-user-tie"></i>
                    </div>
                    <div class="text">
                        {{ $cliente->nome }}
                        <!-- <br>
                        <small>Applications</small> -->
                    </div>
                </a>
            </div>

            @endforeach

        </div>
    </div>
    </div>
</section>
@endsection
