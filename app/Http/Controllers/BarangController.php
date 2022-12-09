<?php

namespace App\Http\Controllers;


use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){

        $data = Barang::all();
       
        return view('datauser',compact('data'));
    }

    public function viewcreatedata() {
        return view('createdata');
    }
    
    public function createdata(Request $request){ 

        Barang::create($request->all());

        return redirect()->route('readuser');    
        //dd($request->all());
    }

    public function viewupdatedata($id){

        $data = Barang::find($id);

        return view('updatedata', compact('data'));
        //dd($data);
    }

    public function updatedata(Request $request, $id){

        $data = Barang::find($id);

        $data = $data->update($request->all());

        return redirect()->route('readuser');
    }

    public function delete(Request $request, $id){

        $data = Barang::find($id);

        $data = $data->delete($request->all());

        return redirect()->route('readuser');

    }

    public function read(){

        $data = Barang::all();
       
        return view('pengiriman',compact('data'));
    }

   
}
