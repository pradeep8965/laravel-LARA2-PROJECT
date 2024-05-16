<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bikes</title>
</head>
<body>
    <h1>BIKES UPDATE FORM</h1>
    <form method="POST" action ="/news">
        @csrf
        <label for="title">Bikes Title </label>
        <input type="text" name="title" id="title" color="red";/><br/>
        <label for="desc">Bikes Description </label>
        <textarea name="description" id="desc"></textarea><br/>
        <label for="img_url">Bikes image</label>
        <input type="text" name="image_url" id="img_url" size="50"/><br/>
        <input type="submit"/>
    </form>
</body>
</html>