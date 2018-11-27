<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use PDF;
use Illuminate\Support\Facades\Session;

class EmpleadoController extends Controller
{
    //
    
    public function index()
    {
        $empleados= Empleado::paginate();
        $title = 'Listado de equipos';
        
        /*return view('empleados',[
            'empleados => $empleados'
        ]);*/
        
        return view('empleados', compact('title', 'empleados'));
        
    }
    
    public function show(Empleado $empleado)
    {
        return view('empleados.show',compact('empleado'));
    }
    
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit',compact('empleado'));
    }
    
    public function create()
    {
        return view('empleados.create');
    }
    
    public function store()
    {
        $data=request()->validate([
            'p_nombre'=> ['required','alpha'],
            's_nombre'=> '',
            'p_apellido'=> ['required','alpha'],
            's_apellido'=> '',
            'fecha_nac' => ['required','date'],
            'cedula'=>'unique:empleado,cedula',
            'telefono'=>'required',
            'correo'=>['required','email','unique:empleado,correo_e'],
            'sexo'=>'required',
            'inss'=>'required',
        ],[
            'p_nombre.required'=>'El campo primer nombre es obligatorio',
            'p_nombre.alpha'=>'El primer nombre solo puede llevar letras',
            #'s_nombre.alpha'=>'El segundo nombre solo puede llevar letras',
            'p_apellido.required'=>'El campo primer apellido es obligatorio',
            'p_apellido.alpha'=>'El primer apellido solo puede llevar letras',
            #'s_apellido.alpha'=>'El segundo apellido solo puede llevar letras',
            'fecha_nac.required'=>'El campo de la fecha de nacimiento es obligatorio',
            'fecha_nac.date'=>'El campo fecha es inválido',
            'cedula.unique'=>'Ya existe un empleado con este número de cédula',
            'telefono.required'=>'El campo teléfono es obligatorio',
            'correo.required'=>'El campo correo electrónico es obligatorio',
            'correo.email'=>'El campo correo electrónico debe estar en formato de correo',
            'correo.unique'=>'Ya existe un empleado con este correo',
            'sexo.required'=>'Debe elegir un sexo obligatoriamente',
            'inss.required'=>'El campo correo electrónico debe estar en formato de correo',
        ]);
        
        Empleado::create([
            'p_nombre'=>$data['p_nombre'],
            's_nombre'=>$data['s_nombre'],
            'p_apellido'=>$data['p_apellido'],
            's_apellido'=>$data['s_apellido'],
            'fecha_nacimiento'=>$data['fecha_nac'],
            'cedula'=>$data['cedula'],
            'telefono'=>$data['telefono'],
            'correo_e'=>$data['correo'],
            'sexo'=>$data['sexo'],
            'num_inss'=>$data['inss']
        ]);
        
        return redirect()->route('empleados.index');

    }
    
    public function update(Empleado $empleado)
    {
        $data=request()->validate([
            'p_nombre'=> ['required','alpha'],
            's_nombre'=> 'nullable|alpha',
            'p_apellido'=> ['required','alpha'],
            's_apellido'=> '',
            'fecha_nac' => ['required','date'],
            'cedula'=>'nullable',
            'telefono'=>'required',
            'correo'=>['required','email'],
            'sexo'=>'required',
            'inss'=>'required',
        ],[
            'p_nombre.required'=>'El campo primer nombre es obligatorio',
            'p_nombre.alpha'=>'El primer nombre solo puede llevar letras',
            's_nombre.alpha'=>'El segundo nombre solo puede llevar letras',
            'p_apellido.required'=>'El campo primer apellido es obligatorio',
            'p_apellido.alpha'=>'El primer apellido solo puede llevar letras',
            #'s_apellido.alpha'=>'El segundo apellido solo puede llevar letras',
            'fecha_nac.required'=>'El campo de la fecha de nacimiento es obligatorio',
            'fecha_nac.date'=>'El campo fecha es inválido',
            #'cedula.unique'=>'Ya existe un empleado con este número de cédula',
            'telefono.required'=>'El campo teléfono es obligatorio',
            'correo.required'=>'El campo correo electrónico es obligatorio',
            'correo.email'=>'El campo correo electrónico debe estar en formato de correo',
            #'correo.unique'=>'Ya existe un empleado con este correo',
            'sexo.required'=>'Debe elegir un sexo obligatoriamente',
            'inss.required'=>'El campo correo electrónico debe estar en formato de correo',
        ]);
        
        $empleado->update($data);
        
        return redirect()->route('empleados.show',['empleado'=>$empleado]);
    }
    
    function destroy(Empleado $empleado)
    {
        $empleado->delete();
        Session::flash('message','El registro fue eliminado');
        return redirect()->route('empleados.index');
    }
    
    function generatePDF()
    {
        $empleados = Empleado::all();
        $pdf = PDF::loadView('empleados\pdf',compact('empleados'));
        return $pdf->download('empleados.pdf');
    }
    
}
