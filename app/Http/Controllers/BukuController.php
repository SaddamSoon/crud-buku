<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Buku;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = M_Buku::paginate(5);
        return view('index')->with([
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    
    /**
    * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=> 'required|max:255',
            'pengarang'=>'required',
            'penerbit' => 'required',
            'isbn' => 'required|max:13|min:13',
            'thterbit' => 'required'

        ]);
        $data = $request->except(['_token']);
        M_Buku::create($data);
        return redirect('/');
    }

    /**
     * Store2 a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
       
       
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = M_Buku::findOrFail($id);
        return view('show')->with([
            'data'=>$data
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $request->validate([
            'judul'=> 'required|max:255',
            'pengarang'=>'required',
            'penerbit' => 'required',
            'isbn' => 'required|max:13|min:13',
            'thterbit' => 'required'

        ]);

        $data = $request->except(['_token']);
        $item = M_Buku::findOrFail($id);
        $item->update($data);
        return redirect('/');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     
    public function destroy($id)
    {
        $item = M_Buku::findOrFail($id);
        $item->delete();
        return redirect('/');
    }
}
