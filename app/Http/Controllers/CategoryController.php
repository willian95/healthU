<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    function index(){
        return view('admin.category.index');
    }

    function indexUser(){
        return view('categories');
    }

    function create(){
        return view('admin.category.create');
    }

    function store(CategoryStoreRequest $request){

        try{

            $imageData = $request->get('image');
            $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
            $imagePath = '/images/categories/' . $fileName;
            Image::make($request->image)->save(public_path($imagePath));

        }catch(\exception $e){

            return response()->json(["success" => false, "msg" => "Hubo un error al cargar la imagen", "err" =>$e->getMessage(), "ln" => $e->getLine()]);

        }

        try{
            
            $slug = str_replace(" ", "-", $request->title);

            if(Category::where('slug', $slug)->count() > 0){
                $slug = $slug."-".Carbon::now()->timestamp;
            }

            $category = new Category;
            $category->name = $request->name;
            $category->image = $imagePath;
            $category->slug = $slug;
            $category->save();

            return response()->json(["success" => true, "msg" => "Categoría creada"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function fetch($page = 1){

        try{

            $skip = ($page-1) * 20;

            $categories = Category::skip($skip)->take(20)->get();
            $categoriesCount = Category::count();

            return response()->json(["success" => true, "categories" => $categories, "categoriesCount" => $categoriesCount]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function fetchAll(){

        $categories = Category::all();
        //return response()->json($categories);
        return response()->json(["success" => true, "categories" => $categories]);
    }

    function delete(Request $request){

        try{

            $category = Category::find($request->id);
            $category->delete();

            return response()->json(["success" => true, "msg" => "Categoría eliminada"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "error en el servidor", "err" =>$e->getMessage(), "ln" => $e->getLine()]);

        }

    }
}
