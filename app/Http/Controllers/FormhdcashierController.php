<?php

namespace App\Http\Controllers;

use App\Hdcashier;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;


class FormhdcashierController extends Controller
{
    // mostrar vista
    public function index(){
        return view('formhdcashier.index');
    }

    
    
    // send formhdcashier 
    public function send(Request $request) {

        $datos = $request->all();
    
        // validar datos
        $camps = Validator::make($request->all(), [
            'name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:hdcashiers,email',
            'phone' => 'required|string',
            'city' => 'required|string',
        ],[
            'name.required' => 'El campo nombre es requerido',
            'last_name.required' => 'El campo nombre es requerido',
            'email.required' => 'El campo correo electrónico es requerido',
            'email.unique' => 'Ya existe un usuario con esta dirección de correo electrónico',
            'phone.required' => 'El campo Telefono es requerido',
            'city.required' => 'El campo ciudad es requerido',
            'email.email' => 'El Email debe ser un email Valido',
        ]);

        if ($camps->fails()) {
            return response()->json(['errors' => $camps->errors()]);
        }
        // crear variable para enviar los datos
        $dataCreate = [
            'name' => trim($request->name),
            'last_name' => trim($request->last_name),
            'email' => trim($request->email),
            'phone' => trim($request->phone),
            'city' => trim($request->city),
            'theyre_new' => trim($request->theyre_new)
        ];
            
        // crea los nuevos datos
        $datos = Hdcashier::create($dataCreate);
    
    
        // respuesta del formulario y devolver json
        return response()->json([
            'success' => true
         ]);
    }
}

