@extends('layouts.app')

@section('title', 'Adicionar Reserva')

@section('contents')
    <h1 class="mb-0">Características da Reserva</h1>
    <hr />
    <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateDates()">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="total" class="form-control" placeholder="Total da Hospedagem">
            </div>
            <div class="col">
                <input type="text" name="hospede_name" class="form-control" placeholder="Nome do Hóspede">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
<<<<<<< HEAD
                 <p>Tipo Quarto</p>
                <select name="quarto_name" class="form-control">
                    <option value="suite">Suite Simples</option>
                    <option value="suite_duplo">Suite Dupla</option>
                    <option value="deluxe">Deluxe</option>
                    <option value="presidencial">Presidencial</option>
                    <option value="presidencial_duplo">Presidencial Duplo</option>
                </select>
=======
                <input type="text" name="room_id" class="form-control" placeholder="Quarto da Reserva">
            </div>
            <div class="col">
                <label class="form-label">Data do Check-in</label>
                <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in">
>>>>>>> b3f2f5bcdaf46a8f2fab82e619e27f5d42c3ad9d
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
<<<<<<< HEAD
                <p>Data do Check-In</p>
                <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in" id="checkInDate" onchange="validateDates()">
=======
                <label class="form-label">Data do Check-out</label>
                <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out">
>>>>>>> b3f2f5bcdaf46a8f2fab82e619e27f5d42c3ad9d
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <p>Data do Check-out</p>
                <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out" id="checkOutDate" onchange="validateDates()">
            </div>
        </div>
        <div class="row mb-3">
<<<<<<< HEAD
            <div class="col">
                <p>Status</p>
                <select name="status" class="form-control">
                    <option value="ativo">Ativo</option>
                    <option value="inativo">Inativo</option>
                </select>
            </div>
=======
    <div class="col">
        <select name="status" class="form-control">
            <option value=" ">Status da Reserva</option>
            <option value="Confirmada">Confirmada</option>
            <option value="Pré-Reservada">Pré-Reservada</option>
            <option value="Check-in">Check-in</option>
            <option value="Check-out">Check-out</option>
            <option value="No Show">No Show</option>
            <option value="Cancelada">Cancelada</option>
        </select>
    </div>
>>>>>>> b3f2f5bcdaf46a8f2fab82e619e27f5d42c3ad9d
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>

    <script>
        function validateDates() {
            var checkInDate = new Date(document.getElementById('checkInDate').value);
            var checkOutDate = new Date(document.getElementById('checkOutDate').value);

            if (checkInDate > checkOutDate) {
                alert('A data de check-in não pode ser maior que a data de check-out.');
                return false;
            }

            return true;
        }
    </script>
@endsection
