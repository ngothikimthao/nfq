<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>NFQ Course</title>
</head>
<body>
    <div class="container">
    <h2>NFQ Course</h2>
    <h4>Management Post </h4>
    <div>
        <a href=" {!! url('add')!!}"><button class="btn btn-success">Add</button></a>
        <select>
            <option value="contenManagement">Content Management</option>
        </select>
    </div>
    
    <br><br>
    <table class="table table-striped">
        <thead>
        <tr class="info">
            <th>Title</th>
            <th>Link</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="success">
                <td>{{$post->title}}</td>
                <td>{{$post->link}}</td>
                <td>{{$post->category}}</td>
                <td>
                    <a href=" {!! url('update',$post->id) !!}"><button class="btn btn-primary">Update</i></button></a>
                    <a href=" {!! url('delete',$post->id) !!}"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>