<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\v1\Paciente; 

class PacienteController extends Controller
{
    function getAll()
    {
        $response= new \stdClass();
        $paciente= Paciente::all();
        $response->success=true;
        $response->data = $paciente;
        return response()->json($response,200);
    }

    function getItem($id)
    {
        $response= new \stdClass();
        $paciente= Paciente::find($id);
        $response->success=true;
        $response->data = $paciente;
        return response()->json($response,200);   
    }

    function store(Request $request)
    {
        $response = new \stdClass();
        $paciente = new Paciente();
        $paciente->apellido = $request->apellido;
        $paciente->nombre = $request->nombre;
        $paciente->sexo = $request->sexo;
        $paciente->edad = $request->edad;
        $paciente->fech_nac = $request->fech_nac;
        $paciente->estado_civil = $request->estado_civil;
        $paciente->tipo_documento = $request->tipo_documento;
        $paciente->dni = $request->dni;
        $paciente->celular = $request->celular;
        $paciente->domicilio = $request->domicilio;
        $paciente->correo = $request->correo;
        $paciente->ocupacion = $request->ocupacion;
        $paciente->alergias = $request->alergias;
        $paciente->intervencion_quirurgicas = $request->intervencion_quirurgicas;
        $paciente->vacunas = $request->vacunas;
        $paciente->save();
        $response->success = true; 
        $response->data = $paciente;
        return response()->json($response,200);   
    }

    function putUpdate(Request $request)
    {
        $response = new \stdClass();
        $paciente = Paciente::find($request->id);

        if($paciente){
            $paciente->apellido = $request->apellido;
            $paciente->nombre = $request->nombre;
            $paciente->sexo = $request->sexo;
            $paciente->edad = $request->edad;
            $paciente->fech_nac = $request->fech_nac;
            $paciente->estado_civil = $request->estado_civil;
            $paciente->tipo_documento = $request->tipo_documento;
            $paciente->dni = $request->dni;
            $paciente->celular = $request->celular;
            $paciente->domicilio = $request->domicilio;
            $paciente->correo = $request->correo;
            $paciente->ocupacion = $request->ocupacion;
            $paciente->alergias = $request->alergias;
            $paciente->intervencion_quirurgicas = $request->intervencion_quirurgicas;
            $paciente->vacunas = $request->vacunas;
          
            $paciente->save();
            $response->success = true;
            $response->data = $paciente;
        }
        else{
            $response->success = false;
            $response->errors = ["el paciente con el id ".$request->id."no existe"];
        }

        return response()->json($response, ($response->success?200:401));   
    }
    
    function patchUpdate(Request $request)
    {
        $response = new \stdClass();
        $paciente = Paciente::find($request->id);

        if($paciente){
            if($request->apellido)
            $paciente->apellido = $request->apellido;
            if($request->nombre)
            $paciente->nombre = $request->nombre;
            if($request->sexo)
            $paciente->sexo = $request->sexo;
            if($request->edad)
            $paciente->edad = $request->edad;
            if($request->fech_nac)
            $paciente->fech_nac = $request->fech_nac;
            if($request->estado_civil)
            $paciente->estado_civil = $request->estado_civil;
            if($request->tipo_documento)
            $paciente->tipo_documento = $request->tipo_documento;
            if($request->dni)
            $paciente->dni = $request->dni;
            if($request->celular)
            $paciente->celular = $request->celular;
            if($request->domicilio)
            $paciente->domicilio = $request->domicilio;
            if($request->correo)
            $paciente->correo = $request->correo;
            if($request->ocupacion)
            $paciente->ocupacion = $request->ocupacion;
            if($request->alergias)
            $paciente->alergias = $request->alergias;
            if($request->intervencion_quirurgicas)
            $paciente->intervencion_quirurgicas = $request->intervencion_quirurgicas;
            if($request->vacunas)
            $paciente->vacunas = $request->vacunas;

            $response->success = true;
            $response->data = $paciente;
        }
        else{
            $response->success = false;
            $response->errors = ["el paciente con el id ".$request->id." no existe"];
        }

        return response()->json($response, ($response->success?200:401));   
    }
    
    function delete($id)
    {
        $response = new \stdClass();
        $paciente = Paciente::find($id); 
        if($paciente){
            $paciente->delete();
            $response->success = true;

        }
        else{
            $response->success = false;
            $response->errors = ["el paciente con el id ".$id." no existe"];
        }
        return response()->json($response, ($response->success?200:401));

    }
}

