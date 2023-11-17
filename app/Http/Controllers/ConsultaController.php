<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function consulta()
    {
        // Suponha que você queira consultar uma tabela chamada "usuarios"
        // e retornar apenas os campos 'nome' e 'email'
        $tabelaEspecifica = "reserva";
        $resultados = DB::table($tabelaEspecifica)->select('hospede_name')->get();

        return view('dadsboard.dashboard', compact('resultados'));
    }
}
