<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        return view('admin.eventos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
return view('admin.eventos.portada');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $file =$request->file('imagen');

    
   $path = public_path().'/uploads/';
   //$image->save($path.$file->getClientOriginalName());
   $image = Image::make($file)->resize(506,295);
    //$image = Image::make($file);
   $image->save($path.'event_'.$file->getClientOriginalName());
   $event= new Evento();
   $event->nombre = $request->nombre;
   $event->fecha = $request->fecha;
   $event->lugar= $request->lugar;
   $event->descripcion =$request->descripcion;
   $event->imagen= $file->getClientOriginalName();
   $event->categoria_id= $request->category_id;
   $event->centroOrganizador= $request->centroOrganizador;
   $event->encargado=$request->encargado;
   $event->save();
//return redirect()->action('Events@index'); 
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
