@extends('layouts.app')
  
@section('title', 'Editar')
  
@section('contents')
    <h1 class="mb-0">Editar Quartos</h1>
    <hr />
    <form action="{{ route('rooms.update', $rooms->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">ID</label>
                <input type="text" name="id" class="form-control" placeholder="ID do Hóspede" value="{{ $rooms->id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Hotel</label>
                <input type="text" name="hotel_id" class="form-control" placeholder="Hotel" value="{{ $rooms->hotel_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Hóspede</label>
                <input type="text" name="guests_id" class="form-control" placeholder="Nome do Hóspede" value="{{ $rooms->guests_id }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Quarto</label>
                <input type="text" name="room_id" class="form-control" placeholder="Quarto da Reserva" value="{{ $rooms->room_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Check-in</label>
                <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in" value="{{ $rooms->check_in_date }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out" value="{{ $rooms->check_out_date }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Total</label>
                <input type="number" name="total" class="form-control" placeholder="Total da Reserva" value="{{ $rooms->total }}" >
            </div>
        </div>
        <div class="col mb-3">
                <label class="form-label">Funcionário</label>
                <input type="text" name="registered_by" class="form-control" placeholder="Funcionário" value="{{ $rooms->registered_by }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <input type="text" name="status" class="form-control" placeholder="Status da Reserva" value="{{ $rooms->status }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection