<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Album;
use App\Imagen;
use Intervention\Image\ImageManagerStatic as Image;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
   $album= new Album();
   $album->nombre = $request->nombre;
   $album->descripcion =$request->descripcion;
   $album->imagen= $file->getClientOriginalName();
   $album->evento_id=$request->evento_id;
   $album->save();


$id = Album::orderBy('created_at','DES')->first();
$codigo=$id->id;


$files = $request->file('file');
//dd($files);

foreach($files as $fil){

$imagen = new Imagen();
                $image1 = Image::make($fil)->resize(506,295);
               // $fileName = $file->getClientOriginalName();
                $image1->save($path.'imagen_'.$fil->getClientOriginalName());
                $imagen->imagen=$fil->getClientOriginalName();
                $imagen->album_id=$codigo;
                $imagen->save();
                //$file->move($path, $fileName);


            }  
 


       // dd($request->all());
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
