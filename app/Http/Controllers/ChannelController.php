<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChannelStoreRequest;
use Intervention\Image\Facades\Image;
use App\Channel;
use Carbon\Carbon;
use App\Video;

class ChannelController extends Controller
{
    
    function index(){
        return view("createChannel");
    }

    function fetchByUser(){
        $channels = Channel::with('category')->where('user_id', \Auth::user()->id)->get();
        return response()->json($channels);
    }

    function store(ChannelStoreRequest $request){

        try{

            $imageData = $request->get('image');
            $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
            $imagePath = '/images/channels/' . $fileName;
            Image::make($request->image)->save(public_path($imagePath));

        }catch(\exception $e){

            return response()->json(["success" => false, "msg" => "Hubo un error al cargar la imagen", "err" =>$e->getMessage(), "ln" => $e->getLine()]);

        }

        try{
            
            $slug = str_replace(" ", "-", $request->name);

            if(Channel::where('slug', $slug)->count() > 0){
                $slug = $slug."-".Carbon::now()->timestamp;
            }

            $channel = new Channel;
            $channel->name = $request->name;
            $channel->image = $fileName;
            $channel->category_id = $request->categoryId;
            $channel->slug = $slug;
            $channel->user_id = \Auth::user()->id;
            $channel->save();

            return response()->json(["success" => true, "msg" => "Canal creado"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function slug($slug){

        $channel = Channel::where('slug', $slug)->first();
        return view('channelSlug', ["channel" => $channel]);

    }

    function fetchChannelByUser(){
        $channels = Channel::where('user_id', \Auth::user()->id)->get();
        return response()->json($channels);
    }

    function fetchVideosByChannel($channelId, $page = 1){

        try{

            $skip = ($page-1) * 20;

            $videos = Video::where('channel_id', $channelId)->skip($skip)->take(20)->get();
            $videosCount = Video::count();

            return response()->json(["success" => true, "videos" => $videos, "videosCount" => $videosCount]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

        //$videos = Video::where('channel_id', $channelId)->get();
        //return response()->json($videos);
    }

}
