<?php

namespace App\Http\Controllers\Frontend;
use \App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class MainController extends Controller
{
    public function index(Request $request){
        $dataContent = File::get(storage_path('app/data.json'));
        $contentJson = json_decode($dataContent, true);
        return view('content/home',$contentJson);
    }
}
