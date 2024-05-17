
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News</title>
    </head>
    <body>
        <h1>Edit News  FORM</h1>
        <form method="POST" action="/news/{{$news->id}}">
            @csrf
            @method('PUT')
            <label for="ttl">News Title</label>
            <input type="text" name="title" value="{{$news->title}}" size="100" id="ttl"/><br />
            <label for="desc">News Description</label>
            <textarea name="description" rows="10" cols="60" id="desc" >{{$news->description}}</textarea><br />
            <label for="img_url">News Image URL</label>
            <input type="text" name="image_url" value="{{$news->image_url}}" id="img_url" /><br />
            <input type="submit" value="Update News">
        </form>
    </body>
</html>
