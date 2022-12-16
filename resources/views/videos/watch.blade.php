<!doctype html>

<title>Watch Video</title>
<link rel="stylesheet" href="../../app.css">
<script src="../../app.js"></script>

<body>
    <div>
        <video width='600' height='480' controls>
            <source src='{{ $link }}' type='video/mp4'>            
            Your browser does not support the video tag.
        </video>        
    </div>
</body>