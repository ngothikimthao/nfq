<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Update Post</title>
</head>
<body>
    <div class="container" style="width:30%">
        <h2>NFQ Course</h2>
        <h3>Update Post</h3>
        <form action="{{url('update',$post['id'])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="myEmail">Title</label>
                <input type="text" id = "title" name = "title" class="form-control" placeholder="Title"
                    value="{!! old ('title',isset($post)?$post['title']:NULL) !!}">
                <label for="link">Link</label>
                <input type="text" id="link"  name = "link" class="form-control" placeholder="Link"
                    value="{!! old ('link',isset($post)?$post['link']:NULL) !!}">
                <label for="category">Category</label>
                <input type="text" id="category"  name = "category" class="form-control" placeholder="Category"
                    value="{!! old ('category',isset($post)?$post['category']:NULL) !!}"><br>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</body>
</html>