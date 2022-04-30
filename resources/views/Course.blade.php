<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1>KURSLAR</h1>
    <div align="right">
        <a href="{{route('courseInsert')}}">
            <button class="btn btn-success">Yeni Ekle</button>
        </a>
    </div>
    <BR>
    <HR>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Name</th>
            <th scope="col">Content</th>
        </tr>
        </thead>
        <tbody>
        @foreach($course as $key)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$key->courseTitle}}</td>s
                <td>{{$key->courseName}}</td>
                <td>{{$key->courseContent}}</td>
                <td width="10"><a href="{{route('courseUpdate',['id'=>$key->id])}}"><button class="btn btn-primary">Düzenle</button></a></td>
                <td width="10"><a href="{{route('courseDelete',['id'=>$key->id])}}"><button class="btn btn-primary">Sil</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <HR>
</div>






<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
