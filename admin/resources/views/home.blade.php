@extends('layouts.app') @section('content')
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Dashboard</h2>
    </div>
</header>
<!-- Dashboard Counts Section-->
<section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
        <div class="row bg-white has-shadow">
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-violet">
                        <i class="icon-user"></i>
                    </div>
                    <div class="title">
                        <span>Clientes</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                        </div>
                    </div>
                    <div class="number">
                        <strong>25</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
