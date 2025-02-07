<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminBrandApiController extends Controller
{
    public function index(){
        return Brands::all();
    }

    public function show($id){
        return Brands::findOrFail($id);
    }

    public function create(Request $request){
        $data = Validator::make($request->all(),[
            'Title' => 'required',
            'Image' => 'required'
        ], ['required' => 'Wrong!']);

        if ($data->errors()->any()){
            return $data->errors();
        }

        return Brands::create($request->all());
    }

    public function update($id, Request $request){
        $brand = Brands::findOrFail($id);
        return $brand->update($request->all());
    }

    public function delete($id){
        $brand = Brands::findOrFail($id)->delete();
    }
}
