@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Dashboard - Gráficos e Relatórios</h5>
                </div>
                <div class="card-body">
                    @php
                        $tabelaEspecifica = "reservas";
                        $quantidadeIds = DB::table($tabelaEspecifica)->count();
                    @endphp
                    <p class="lead">Quantidade de Reservas: <span class="font-weight-bold">{{ $quantidadeIds }}</span></p>
                </div>
                <div class="card-body">
                    @php
                        $tabelaEspecifica = "room_types";
                        $quantidadeIds = DB::table($tabelaEspecifica)->count();
                    @endphp
                    <p class="lead">Quantidade de Quartos: <span class="font-weight-bold">{{ $quantidadeIds }}</span></p>
                </div>
                <div class="card-body">
                    @php
                        $tabelaEspecifica = "users";
                        $quantidadeIds = DB::table($tabelaEspecifica)->count();
                    @endphp
                    <p class="lead">Quantidade de Usuarios: <span class="font-weight-bold">{{ $quantidadeIds }}</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
