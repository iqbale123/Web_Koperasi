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

        $validator  =   Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            "thumbnail" => "file|max:3072",
            'ukuran' => 'required'
        ]);


        if($validator->fails()){
            $error = $validator->errors()->first();

            return response()->json([
                "message" => $error
            ]);

        } else  {
        $crud= new Product();
        $crud->name=$request->name;
        $crud->price=$request->price;
        $crud->ukuran=$request->ukuran;

        $filename = "";
        $crud->thumbnail = $filename;
        if ($request->hasFile('thumbnail')) {
            // dd("suge")
            $filename = $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->storeAs('/galeri', $filename);

            $crud->thumbnail = url('storage/galeri/' . $filename);
        }

        $crud->save();

        return response()->json([
            'data' => $crud
        ]);
        }

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
