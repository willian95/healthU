<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NoticeStoreRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Notice;
use Carbon\Carbon;

class NoticeController extends Controller
{
    function index(){
        return view('admin.notice.index');
    }

    function create(){
        return view('admin.notice.create');
    }

    function store(NoticeStoreRequest $request){

        try{

            $imageData = $request->get('image');
            $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
            $imagePath = '/images/notices/' . $fileName;
            Image::make($request->image)->save(public_path($imagePath));

        }catch(\exception $e){

            return response()->json(["success" => false, "msg" => "Hubo un error al cargar la imagen", "err" =>$e->getMessage(), "ln" => $e->getLine()]);

        }

        try{
            
            $slug = str_replace(" ", "-", $request->title);

            if(Notice::where('slug', $slug)->count() > 0){
                $slug = $slug."-".Carbon::now()->timestamp;
            }

            $notice = new Notice;
            $notice->title = $request->title;
            $notice->body = $request->body;
            $notice->image = $imagePath;
            $notice->slug = $slug;
            $notice->save();

            return response()->json(["success" => true, "msg" => "noticia creada"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function fetch($page = 1){

        try{

            $skip = ($page-1) * 20;

            $notices = Notice::skip($skip)->take(20)->get();
            $noticesCount = Notice::count();

            return response()->json(["success" => true, "notices" => $notices, "noticesCount" => $noticesCount]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function delete(Request $request){

        try{

            $notice = Notice::find($request->id);
            $notice->delete();

            return response()->json(["success" => true, "msg" => "Noticia eliminada"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "error en el servidor", "err" =>$e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function slug($slug){

        try{

            $notice = Notice::where('slug', $slug)->firstOrFail();
            return view("noticeShow", ["notice" => $notice]);

        }catch(\Exception $e){
            abort(403);
        }

    }

}
