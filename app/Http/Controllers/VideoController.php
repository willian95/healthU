<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoStoreRequest;
use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{

    function upload(){

        return view('upload');
        
    }

    function userVideos($page = 1){

        try{

            $skip = ($page-1) * 20;

            $videos = Video::where('user_id', \Auth::user()->id)->where('status_id', 3)->skip($skip)->take(20)->get();
            $videosCount = Video::where('user_id', \Auth::user()->id)->count();

            return response()->json(["success" => true, "videos" => $videos, "videosCount" => $videosCount]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function store(VideoStoreRequest $request){

        try{

            $video = new Video;
            $video->title = $request->title;
            $video->link = $request->link;
            $video->description = $request->description;
            $video->language = $request->language;
            $video->user_id = \Auth::user()->id;
            $video->save();

            return response()->json(["success" => true, "msg" => "Video anunciado"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function adminIndex(){
        return view('admin.video.index');
    }

    function fetch($page = 1){

        try{

            $skip = ($page-1) * 20;

            $videos = Video::with('user')->skip($skip)->take(20)->get();
            $videosCount = Video::count();

            return response()->json(["success" => true, "videos" => $videos, "videosCount" => $videosCount]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function approve(Request $request){

        try{

            $video = Video::findOrFail($request->id);
            $video->status_id = 3;
            $video->update();

            return response()->json(["success" => true, "msg" => "Video aprobado"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function reject(Request $request){

        try{

            $video = Video::findOrFail($request->id);
            $video->status_id = 2;
            $video->update();

            return response()->json(["success" => true, "msg" => "Video rechazado"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

}
