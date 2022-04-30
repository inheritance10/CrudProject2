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

<div class="container mt-5">
    <h1>Kurs Ekle</h1>
    @if($errors->any())
        <ul>
            @foreach($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <br>
    @if(session()->has('status'))
    <div class="alert bg-success">
         <p>
             {{session('status')}}
         </p>
    </div>
    @endif
    <div align="right">
        <a href="{{route("course")}}"><button class="btn btn-primary">Geri</button></a>
    </div>
    <form class="mt-5 w-50" action="{{route('courseInsertPost')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Course Title</label>
            <input type="text" class="form-control" id="course_title" name="courseTitle" placeholder="Enter course title">
            <small class="form-text text-muted">We'll never share your course title with anyone else.</small>
        </div>
        <div class="form-group">
            <label>Coure Content</label>
            <input type="text" class="form-control" id="course_content" name="courseName" placeholder="Course Content">
        </div>
        <div class="form-group">
            <label>Coure Must</label>
            <input type="text" class="form-control" id="course_must" name="courseContent" placeholder="Course Must">
        </div>
        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
</div>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
