<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .card {
        width: 300px;
        height: 150px;
        margin: 10px;
        border: 1px solid black;
        border-radius: 10px;
        padding: 10px;

    }
</style>

<body>
    @foreach($proposals as $proposal)
        <div class="card">
            <p>{{$proposal->title}}</p>
            <p>{{$proposal->department}}</p>
            <p>{{$proposal->status}}</p>
            <p>{{$proposal->content}}</p>
        </div>
    @endforeach

</body>

</html>