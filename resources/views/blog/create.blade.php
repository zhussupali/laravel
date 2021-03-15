<!DOCTYPE html>
<html>
    <head>
        <title>create new blog</title>
    </head>
    <body>
    
    <form method = "POST" action="{{ route('add-blog') }}">

    @csrf

    <input type="text" name = "title" placeholder = "title">
    <input type="text" name = "body" placeholder = "body">
    <button type="submit">create</button>
    </form>
    </body>
</html>