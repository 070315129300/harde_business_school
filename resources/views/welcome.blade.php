<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>harde B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2>List Of All Books</h2>
<table class="table ">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Book Name</th>
        <th scope="col">ISBN</th>
        <th scope="col">Authors</th>
        <th scope="col">NUMBER OF PAGES</th>
        <th scope="col">PUBLISHER</th>
        <th scope="col">COUNTRY</th>
        <th scope="col">RELEASE DATE</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $book)
    <tr>
       <td>{{$book->id}}</td>
        <td>{{$book->name}}</td>
        <td>{{$book->isbn}}</td>
        <td>{{$book->authors}}</td>
        <td>{{$book->number_of_pages}}</td>
        <td>{{$book->publisher}}</td>
        <td>{{$book->country}}</td>
        <td>{{$book->release_date}}</td>
        <td><a class="btn btn-primary"  onclick="return confirm('are you sure you want to update this book')" style="color:black" href="{{url('editbook', $book->id)}}">EDIT</a></td>
        <td> <a class="btn btn-danger"  onclick="return confirm('are you sure you want to delete this book')" style="color:black" href="{{url('deletebook', $book->id)}}">DELETE</a></td>


    </tr>
    @endforeach
    </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
