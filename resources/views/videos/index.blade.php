@extends('layouts.app')

<title>My Videos</title>

 @section('content')
<div>
    <table>
        <thead>
            <tr>
                <th>filename</th>
                <th>watch</th>
            </tr>
        </thead> 
        <tbody>
            @foreach($videos as $video)
            <tr> 
                <td>{{ $video->filename }}</td>
                <td><a href='watch/{{$video->filename}}'>{{ $video->filename }}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
