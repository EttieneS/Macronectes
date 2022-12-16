<?php
    namespace App\Http\Controllers;
            
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
        
        public function upload()
        {                      
            $vidname = "bonobo";//$_POST['videoname'];
            $uploaddir = 'C:/uploads/';

            $uploadfile = $uploaddir . basename($_FILES['video']['name']);
            // dd($uploadfile);
            echo '<pre>';
            if (move_uploaded_file($_FILES['video']['tmp_name'], $uploadfile)) {
                //echo "File is valid, and was successfully uploaded.\n";
                header('Location: http://mimusvideo.test/uploadview');
            } else {
                echo "Possible file upload attack!\n";
            }
            
            echo 'Here is some more debugging info:';
            print_r($_FILES);
            
            print "</pre>";
        }
    }
?>