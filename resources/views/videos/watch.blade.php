@extends('layouts.app')
    <title>Watch Video</title>
@section('content')
    <body>
        <div>
            <video width='600' height='480' controls>
                <source src='{{ $link }}' type='video/mp4'>            
                Your browser does not support the video tag.
            </video>        
        </div>
    </body>
@stop