<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<div>
    @foreach($mamals as $index=>$mamal)
        <h1>Create post and variable value from controller is: <?= $mamal->article ?></h1>
    @endforeach
    <button type="button" onclick="window.location='{{ url("/") }}'">Return to homepage</button>
    <input type="button" onclick="sayHo()" value="saySmth" id="supaButton"><br>
    <hr>

    <form action="/createPost" method="post">
        {{ csrf_field() }}
        <div id="createPost">
            <div>
                <label for="postTitle"> Post title: </label>
                <input name="article" type="text" placeholder="type anything">
                @error('article')
                <p style="color:darkred">{{ $message }}</p> <hr>
                @enderror
            </div>
            <div>
                <label for="postContent"> Content: </label>
                <input name="content" id="postContent" type="text" placeholder="aga">
                @error('content')
                <p style="color:darkred">{{ $message }}</p> <hr>
                @enderror
            </div>
            <div>
                <label for="postUserId"> User ID: </label>
                <input name="userId" id="postUserId" type="text" placeholder="one more">
                @error('userId')
                <p style="color:darkred">{{ $message }}</p> <hr>
                @enderror
            </div>
        </div>


        <input type="submit" value="poehali" alt="pgnali">
    </form>
    {{--    @error('userId')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif--}}

</div>
</body>
</html>
<script>
    function sayHo() {
        var varvar = $("#supaButton").val();
        alert(varvar);
    }
</script>
