@extends('layouts.app')
  
@section('title', 'Adicionar Reserva')
  
@section('contents')
    <h1 class="mb-0">Características da Reserva</h1>
    <hr />
    <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
         <input type="hidden" name="id" value="{{ Illuminate\Support\Str::uuid() }}">
        <input type="hidden" name="hotel_id" value="{{ rand(100, 999) }}">
        <input type="hidden" name="guests_id" value="{{ rand(100, 999) }}">
        <input type="hidden" name="room_id" value="{{ rand(100, 999) }}">
        <div class="row mb-6">
            <div class="col">
                <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in">
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out">
            </div>
            <div class="col">
                <input type="number" name="total" class="form-control" placeholder="Total da Reserva">
            </div>
        </div>
        <div class="row mb-6">
            <div class="col">
                <input type="text" name="registered_by" class="form-control" placeholder="Registrado por">
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="status" class="form-control" placeholder="Status da Reserva">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection