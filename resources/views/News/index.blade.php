<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News</title>
    </head>
    <body>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1 style="color:blue">RACING BIKES MODELS</h1>
        <table border="1" cellspacing="0" cellpadding="0">
            <thead style="text-align:center", >
                <tr>
                    <td>News Id</td>
                    <td>News Title</td>
                    <td>News Description</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($news as $nsw)
                    <tr>
                        <th>{{ $nsw->id}}</th>
                        <th>{{ $nsw->title}}</th>
                        <th>{{ $nsw->description}}</th>
                        <th><img width="100" src={{$nsw->image_url}} /></th>
                        <th>
                            <a href="#">View</a>
                            <a href="/news/{{$nsw->id}}/edit">Edit</a>
                            <a href="#">Delete</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>