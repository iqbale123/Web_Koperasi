<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use Illuminate\Support\Facades\Validator;
class CrudController extends Controller
{
    public function index(){

        $crud=Product::all();

        $data=['product'=>$crud];

        return $data;
    }

    public function create(Request $request){

        $crud=new Product();
        $crud->name=$request->name;
        $crud->price=$request->price;
        $crud->thumbnail=$request->thumbnail;
        $crud->ukuran=$request->ukuran;
        $crud->save();

        return "Data Tersimpan";
    }

    public function update(Request $request, $id){

        $crud=Product::find($id);
        $crud->name=$request->name;
        $crud->price=$request->price;
        $crud->thumbnail=$request->thumbnail;
        $crud->ukuran=$request->ukuran;
        $crud->save();

        return " Data Terupdate";
    }

    public function delete($id){

        $crud=Product::find($id);
        $crud->delete();

        return " Data Terhapus ";
    }

    public function detail($id){

        $crud=Product::find($id);

        return $crud;
    }
}
