@extends('layouts.app')
  
@section('title', 'Edicao')
  
@section('contents')
    <h1 class="mb-0">Edicao do hospede</h1>
    <hr />
    <form action="{{ route('bookings.update', $bookings->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Hospede Name</label>
                <input type="text" name="hospede_name" class="form-control" placeholder="Nome do Hospede" value="{{ $bookings->hospede_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nome do Quarto</label>
                <input type="text" name="quarto_name" class="form-control" placeholder="Nome do Quarto" value="{{ $bookings->quarto_name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Check In</label>
                <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-In " value="{{ $bookings->check_in_date }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Check Out</label>
                <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-Out" value="{{ $bookings->check_out_date }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Total da Reserva</label>
                <input type="decimal" name="total_reserva" class="form-control" placeholder="Total da Reserva" value="{{ $bookings->total_reserva }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Custo Total</label>
                <input type="number" name="total" class="form-control" placeholder="Custo Total" value="{{ $bookings->total }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control" value="{{ $bookings->status }}">
                    <option value="ativo">Ativo</option>
                    <option value="inativo">Inativo</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection