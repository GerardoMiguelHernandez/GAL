<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Categoria;
use Carbon\Carbon;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


   public function __construct()
    {
     Carbon::setlocale('es');   
    } 

    public function index()
    {
        //

      $categorias = Categoria::orderBy('created_at','DES')->get();
      return view('admin.categorias.index')->with('categorias',$categorias);

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


        //dd($request->all());
  



$category= new Categoria();
$category->nombre = $request->nombre;
$category->descripcion = $request->descripcion;
$category->save();
 return redirect()->action('WelcomeController@index');  


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


        $categoria=Categoria::find($id);
        //dd($categoria);


        return view('admin.categorias.edit')->with('categoria',$categoria);
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

  
      $categoria = Categoria::find($id);
      $categoria->nombre=$request->nombre;
      $categoria->descripcion=$request->descripcion;
      $categoria->save();
      return redirect()->action('CategoriasController@index');


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

        $categoria = Categoria::find($id);
      $categoria->delete();
        return redirect()->action('CategoriasController@index');

    }
}
