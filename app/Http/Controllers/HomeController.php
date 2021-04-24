<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use YouTube\YouTubeDownloader;
use YouTube\Exception\YouTubeException;

class HomeController extends Controller
{
    public function Index(Request $request) {
        return view('home');
    }


    public function getListFormatVideo(Request $request) {
        $youtube = new YouTubeDownloader();

        try {
            $downloadOptions = $youtube->getDownloadLinks($request->get('url'));
            return view('render.result_list_video', ['listVideo' => $downloadOptions->getAllFormats()])->render();
        } catch (YouTubeException $e) {
            return view('render.result_list_video', ['listVideo' => []])->render();
        }
    }

    public function downloadVideo(Request $request) {
        $youtube = new \YouTube\YouTubeStreamer();
        $youtube->stream($request->get('url'));
    }
}
