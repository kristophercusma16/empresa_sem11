<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;
class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::orderBy('nPerCodigo','asc')->paginate(3);
        return view('personas',compact('personas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create',[
            'persona'=>new Persona
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePersonaRequest $request)
    {
        Persona::create($request->validated());
        return redirect()->route('personas.index')->with('estado','La persona fue creada correctamente');
     

    }

    /**
     * Display the specified resource.
     */
    public function show(string $nPerCodigo)
    {
        return view('show', [
            'persona' => Persona::find($nPerCodigo)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        return view('editar',[
            'persona'=>$persona
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Persona $persona, CreatePersonaRequest $request)
    {
        $persona->update($request->validated());
        return redirect()->route('personas.show', $persona)->with('estado','La persona fue actualizada correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('estado','La persona fue eliminada correctamente');
    }
    
    public function __construct(){
        // $this->middleware('auth')->only('create','edit');
        $this->middleware('auth')->except('index','show');

    }
   
}
