@extends('layouts.app')

@section('title', 'Adicionar Reserva')

@section('contents')
    <h1 class="mb-0">Características da Reserva</h1>
    <hr />
    <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="decimal" name="total" class="form-control" placeholder="Custo Total">
            </div>
            <div class="col">
                <input type="text" name="hospede_name" class="form-control" placeholder="Nome do Hospede">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="quarto_name" class="form-control" placeholder="Nome do Quarto">
            </div>

        </div>
        <div class="row mb-6">
            <div class="col">
                <p>Data do Check-In</p>
                <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in">
            </div>
        </div>
        <div class="row mb-6">
            <div class="col">
                <p>Data do Check-out</p>
                <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out">
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="total_reserva" class="form-control" placeholder="Total da Reserva">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="status" class="form-control">
                    <option value="ativo">Ativo</option>
                    <option value="inativo">Inativo</option>
                </select>
            </div>

        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>
@endsection
