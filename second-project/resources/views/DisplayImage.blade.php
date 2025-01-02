<!DOCTYPE html>
<html lang="en">
<head>
    <title>Image Gallery</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .gallery-item{
            width:200px;
            margin:10px;
        }
    </style>
</head>
<body>
        <h1>Image Gallery</h1>
            @foreach($images as $img)
                <img class="gallery-item" src="{{url('storage/images/'.$img->path)}}" alt="Image 1">
            @endforeach
            <br>
            <a href="/upload">Upload More Images</a>
</body>
</html>
