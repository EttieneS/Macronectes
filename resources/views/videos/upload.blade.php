@extends('layouts.app')

<title>Upload Video</title>

@section('content')
    <div>
        <form action="../upload" method="post" enctype="multipart/form-data">            
            <div>
                <label>Upload your mp4 :)</label>
                <input type="file" id="video" name="video">
            </div>
            </hr>
            <div>
                <button class="button" type="submit" id="submit">Upload</button>
            </div>
        </form>
    </div>
@stop