<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News</title>
    </head>
    <body>
        <h1>Todays News</h1>
        @foreach ($news as $nsw)
            <h1>{{ $nsw->title}}</h1>
            <p>{{ $nsw->description}}</p>
            <img src={{$nsw->image_url}} />
            <hr />
        @endforeach
    </body>
</html>