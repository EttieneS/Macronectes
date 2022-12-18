@extends('layouts.app')

<title>My Videos</title>

 @section('content')
<div>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead> 
        <tbody>
            @foreach($videos as $video)
            <tr> 
                <td>{{ $video->filename }}</td>
                <td><a href='watch/{{$video->id}}'>Watch Video</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
