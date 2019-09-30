<html>
    <head>
        <title>Post Add:</title>
    </head>
    <body>
        <form method="post" action="{{ route('submit-post')}}" >
            @csrf
        Title:<input type="text" name="title" value="title">
        Description:<input type="text" name="description" value="description">
        <button class="btn btn-success">Submit</button>
        </form>
    </body>
</html>