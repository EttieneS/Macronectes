@extends ('layout')

@section('content')
    @foreach ($videos as $video)
        <x-slot>
            <h1>
                <audio controls>
                    <source src="horse.ogg" type="audio/ogg">
                    <source src="horse.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </h1>
        <x-slot>
@endsection