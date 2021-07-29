<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function getHome($module){
        $cats = Category::where('module', $module)->orderBy('name', 'Asc')->get();
        $data = ['cats' => $cats];
        return view('admin.categories.home', $data);
    }

    public function postCategoryAdd(Request $request){
        $rules = [
            'name' => 'required',
            'icon' => 'required',
        ];

        $messages = [
            'name.required' => 'Se requiere el nombre de la categoria.',
            'icon.required' => 'Se requiere el icono de la categoria.'
        ];

        $validator = Validator::make( $request->all(), $rules, $messages);

        if($validator->fails()){

            return back()->withErrors($validator)->with('message', 'Se ha producido un error')
                ->with('typealert', 'danger');

        }else{

            $category = new Category;
            $category->module = $request->input('module'); 
            $category->name = e($request->input('name'));
            $category->slug = Str::slug($request->input('name'));
            $category->icon = e($request->input('icon'));

            if($category->save()){

            return back()->with('message', 'Guardado con exito')->with('typealert', 'success');

            }
        }
    }

}
