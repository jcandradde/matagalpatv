<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use PDF;
use Illuminate\Support\Facades\Session;

class EquipoController extends Controller
{
    //
    
    public function index()
    {
        $equipos= Equipo::paginate();
        $title = 'Listado de equipos';
        
        /*return view('equipos',[
            'equipos => $equipos'
        ]);*/
        
        return view('equipos', compact('title', 'equipos'));
        
    }
    
    public function show(Equipo $Equipo)
    {
        return view('equipos.show',compact('Equipo'));
    }
    
    public function edit(Equipo $Equipo)
    {
        return view('equipos.edit',compact('Equipo'));
    }
    
    public function create()
    {
        return view('equipos.create');
    }
    
    public function store()
    {
        $data=request()->validate([
            'modelo'=> ['nullable','alpha'],
            'numero_serie'=> ['nullable','alpha'],
            'estado_fisico'=> ['required', 'alpha'],
            'id_marca' => [''],
            'id_categoria' => [''],
            'id_ubicacion' => ['']
        ],[

            // 'p_nombre.required'=>'El campo primer nombre es obligatorio',
            // 'p_nombre.alpha'=>'El primer nombre solo puede llevar letras',
            // #'s_nombre.alpha'=>'El segundo nombre solo puede llevar letras',
            // 'p_apellido.required'=>'El campo primer apellido es obligatorio',
            // 'p_apellido.alpha'=>'El primer apellido solo puede llevar letras',
            // #'s_apellido.alpha'=>'El segundo apellido solo puede llevar letras',
            // 'fecha_nac.required'=>'El campo de la fecha de nacimiento es obligatorio',
            // 'fecha_nac.date'=>'El campo fecha es inválido',
            // 'cedula.unique'=>'Ya existe un Equipo con este número de cédula',
            // 'telefono.required'=>'El campo teléfono es obligatorio',
            // 'correo.required'=>'El campo correo electrónico es obligatorio',
            // 'correo.email'=>'El campo correo electrónico debe estar en formato de correo',
            // 'correo.unique'=>'Ya existe un Equipo con este correo',
            // 'sexo.required'=>'Debe elegir un sexo obligatoriamente',
            // 'inss.required'=>'El campo correo electrónico debe estar en formato de correo',
        ]);
        
        Equipo::create([
            'modelo'=>$data['modelo'],
            'numero_serie'=>$data['numero_serie'],
            'estado_fisico'=>$data['estado_fisico'],
            'id_marca'=>$data['id_marca'],
            'id_categoria'=>$data['id_categoria'],
            'id_ubicacion'=>$data['id_ubicacion']
        ]);
        
        return redirect()->route('equipos.index');
    }
    
    public function update(Equipo $Equipo)
    {
        $data=request()->validate([

            // 'p_nombre'=> ['required','alpha'],
            // 's_nombre'=> 'nullable|alpha',
            // 'p_apellido'=> ['required','alpha'],
            // 's_apellido'=> '',
            // 'fecha_nac' => ['required','date'],
            // 'cedula'=>'nullable',
            // 'telefono'=>'required',
            // 'correo'=>['required','email'],
            // 'sexo'=>'required',
            // 'inss'=>'required',

            'modelo'=> ['nullable','alpha'],
            'numero_serie'=> ['nullable','alpha'],
            'estado_fisico'=> ['required', 'alpha'],
            'id_marca' => [''],
            'id_categoria' => [''],
            'id_ubicacion' => ['']
        ],[
            // 'p_nombre.required'=>'El campo primer nombre es obligatorio',
            // 'p_nombre.alpha'=>'El primer nombre solo puede llevar letras',
            // 's_nombre.alpha'=>'El segundo nombre solo puede llevar letras',
            // 'p_apellido.required'=>'El campo primer apellido es obligatorio',
            // 'p_apellido.alpha'=>'El primer apellido solo puede llevar letras',
            // #'s_apellido.alpha'=>'El segundo apellido solo puede llevar letras',
            // 'fecha_nac.required'=>'El campo de la fecha de nacimiento es obligatorio',
            // 'fecha_nac.date'=>'El campo fecha es inválido',
            // #'cedula.unique'=>'Ya existe un Equipo con este número de cédula',
            // 'telefono.required'=>'El campo teléfono es obligatorio',
            // 'correo.required'=>'El campo correo electrónico es obligatorio',
            // 'correo.email'=>'El campo correo electrónico debe estar en formato de correo',
            // #'correo.unique'=>'Ya existe un Equipo con este correo',
            // 'sexo.required'=>'Debe elegir un sexo obligatoriamente',
            // 'inss.required'=>'El campo correo electrónico debe estar en formato de correo',
        ]);
        
        $Equipo->update($data);
        
        return redirect()->route('equipos.show',['Equipo'=>$Equipo]);
    }
    
    function destroy(Equipo $Equipo)
    {
        $Equipo->delete();
        Session::flash('message','El registro fue eliminado');
        return redirect()->route('equipos.index');
    }
    
    function generatePDF()
    {
        $equipos = Equipo::all();
        $pdf = PDF::loadView('equipos\pdf',compact('equipos'));
        return $pdf->download('equipos.pdf');
    }
    
}
