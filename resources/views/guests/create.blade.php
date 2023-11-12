@extends('layouts.app')
  
@section('title', 'Adicionar Hóspede')
  
@section('contents')
    <h1 class="mb-0">Caracteristicas do Hóspede</h1>
    <hr />
    <form action="{{ route('guests.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
    <div class="col">
        <input type="text" name="name" class="form-control" placeholder="Nome do Hóspede">
    </div>
    <div class="col">
        <input type="text" name="last_name" class="form-control" placeholder="Sobrenome do Hóspede">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <input type="text" name="cpf" class="form-control" placeholder="CPF do Hóspede">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <label for="birthday" class="form-label">Data de Nascimento</label>
        <input type="date" name="birthday" class="form-control" placeholder="Data de Nascimento">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <select name="sex" class="form-control">
            <option value=" ">Sexo do Hóspede</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            <option value="O">Outro</option>
        </select>
    </div>
    <div class="col">
        <input type="text" name="cep" class="form-control" placeholder="CEP" id="cep">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <input type="text" name="street" class="form-control" placeholder="Endereço" id="street">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <input type="text" name="city" class="form-control" placeholder="Cidade" id="city">
    </div>
    <div class="col">
        <input type="text" name="state" class="form-control" placeholder="Estado" id="state">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <input type="email" name="email" class="form-control" placeholder="Email do Hóspede">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <input type="tel" name="phone" class="form-control" placeholder="Telefone do Hóspede" maxlength="11">
    </div>
</div>


        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>

    <!-- Script JavaScript para preencher automaticamente os campos do endereço -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#cep').on('input', function () {
                var cep = $(this).val().replace(/[^0-9]/, '');

                if (cep.length === 8) {
                    $.getJSON(`https://viacep.com.br/ws/${cep}/json/`, function (data) {
                        if (!data.erro) {
                            // Preencha os campos de endereço automaticamente
                            console.log(data);  // Verifique os dados no console para diagnóstico
                            $('#street').val(data.logradouro);
                            $('#city').val(data.localidade);
                            $('#state').val(data.uf);
                        } else {
                            console.log('Erro ao obter dados do CEP.');
                        }
                    });
                }
            });
        });
    </script>
@endsection