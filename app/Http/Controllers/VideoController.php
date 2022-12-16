<?php
    namespace App\Http\Controllers;
    
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Http\Request;

    class VideoController extends Controller
    {        
        public function index()
        {            
            return view('videos/index', [
                'videos/index' => file_get_contents('C:\laragon\www\mimusvideo\resources\metadata\firstvideo.html')                
            ]);
        }

        public function watch($link)
        {   
            $link = "http://127.0.0.1:8887/OpenUpYourHeart.mp4";            
            return view('videos/watch', array('link' => $link));
        }
        
        public function uploadview()
        {               
            return view('videos/upload');
        }
        
        public function upload(Request $request)
        {                      
            $file = $request->file('video');
            $filename = $file->getClientOriginalName();
            $folder = "Videos";
            

            Storage::disk('unicinctus')->putFileAs($folder, $file, $filename);
            return view('videos/upload');            
        }
    }
?>