<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<div>
    @foreach($posts['posts'] as $post)
        <div   style="background-color: #fcfbf5; border: solid; border-radius: 5px;width: 400px">
            <label for="content"><?= $post->article ?></label>

            <div id="content" style="background-color: #c7c7c7; border-radius: 5px">
                <?= $post->content?>
            </div>
            <div>
                <p>Автор: <?= $post->name ?></p>
            </div>
        </div><br>
    @endforeach
    <button type="button" onclick="window.location='{{ url("/") }}'">Return to homepage</button>
    <hr>

</div>
</body>
</html>
<script>
    function sayHo() {
        var varvar = $("#supaButton").val();
        alert(varvar);
    }
</script>
