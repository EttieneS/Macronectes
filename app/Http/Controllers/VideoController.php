<?php
    namespace App\Http\Controllers;
    
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Http\Request;
    use App\Models\Video;

    class VideoController extends Controller
    {        
        public function index()
        {            
            $videos = Video::all(); 
            return view('videos/index', compact('videos')); 
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
            $folder = "Videos/". date('d-m-Y');
                        
            $this->createvideorecord($filename);

            Storage::disk('unicinctus')->putFileAs($folder, $file, $filename);
            return view('videos/upload');            
        }

        public function createvideorecord($filename)
        {
            $userid = 1;             

            Video::create([
                'filename' => $filename, 
                'created_at' => date('d-m-Y H:i:s'), 
                'user_id' => $userid,
            ]);
        }
    }
?>