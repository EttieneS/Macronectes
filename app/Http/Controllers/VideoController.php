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

        public function watch($filename)
        {   
            $filename = "Maandag.mp4";
            $this->uploadweb($filename);

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

        public function uploadweb($filename)
        {   
            //get file location from db            
            $filelocation = "test/Maandag.mp4";

            //dl file from ftp
            $ftpfile = Storage::disk('unicinctus')->get($filelocation);
            // $filename = $ftpfile->getClientOriginalName();
            // dd($filename);
            $result = Storage::disk('videos')->put('test.mp4', $ftpfile);
            dd($result);

            //save to videos
            // $downloadlocation = 

            //upload to webserver

        }
    }
?>