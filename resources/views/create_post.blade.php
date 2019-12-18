<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<div>
    <form action="/createPost" method="post">
        {{ csrf_field() }}
        <div id="createPost">
            <div>
                <label for="postTitle"> Post title: </label><br>
                <input name="article" type="text" placeholder="enter title">
                @error('article')
                <p style="color:darkred">{{ $message }}</p>
                <hr>
                @enderror
            </div>
            <div>
                <label for="postContent"> Content: </label> <br>
                <textarea name="content" id="postContent" placeholder="say what you want"
                          style="width: 400px; height: 200px"></textarea>
                @error('content')
                <p style="color:darkred">{{ $message }}</p>
                <hr>
                @enderror
            </div>
        </div>
        <input type="submit" value="Save Post" alt="pgnali">
        <hr>
    </form>
    <button type="button" onclick="window.location='{{ url("/") }}'">Return to homepage</button>

</div>
</body>
</html>
<script>

</script>
