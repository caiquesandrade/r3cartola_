@extends('layouts.padrao')

@section('content')

<div>
<h1>Busque seu time aqui !</h1>

<form method="GET" action="{{ route('buscarTime') }}">

    <input type="text" name="name" placeholder="Nome do Time">

    <button id="btn-buscar" type="submit">Enviar</button>


</form>

<div class="col-md-6 col-lg-4">
    <div class="card mb-3 widget-chart text-left">
        <div class="icon-wrapper rounded-circle">
            <div class="icon-wrapper-bg bg-primary"></div>
            <i class="lnr-cog text-primary"></i>
        </div>
        <div class="widget-chart-content">
            <div class="widget-subheading">Total Views</div>
            <div class="widget-numbers">45.8k</div>
            <div class="widget-description text-success">
                <i class="fa fa-angle-up ">

                </i>
                <span class="pl-1">175.5%</span></div>
        </div>
    </div>
</div>

</div>
@stop



