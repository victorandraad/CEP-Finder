<?php

namespace App\Http\Controllers;

use App\Cep;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $cep): View
    {
        $cep = preg_replace('/\D/', '', $cep);
        $response = Http::withoutVerifying()->get("https://viacep.com.br/ws/{$cep}/json/");
        $address = $response->object();
        $status = $response->status();
        $error = null;

        if($status != 200){

            $error = "O CEP deve conter 8 caracteres numéricos.";
        }

        if(isset($address->erro)){
            $error = "CEP não encontrado.";
        }

        return view('address',[
            'error' => $error,
            'address' => $address,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cep $cep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cep $cep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cep $cep)
    {
        //
    }
}
