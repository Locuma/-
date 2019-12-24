<?php
use Illuminate\Support\Facades\Auth;
?>
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
            <div class="postData">
                <p>Автор: <?= $post->name ?></p>
                <input type="hidden" class="postId" value="{{$post->id}}">
                <input type="hidden" class="userId" value="{{$post->user_id}}">
            </div>
            <div>
                <input type="button" name="currentPost" value="Open this post" onclick="window.location='{{url("currentPost/$post->id")}}'">
            </div>
            @if($post->user_id == Auth::id())
                <div>
                    <input type="button" value="Edit post" onclick="window.location='{{url("editPost/$post->id")}}'">
                </div>
            @endif
            <button type="button" onclick="showData(this)">Show data</button>
        </div><br>
    @endforeach
    <button type="button" onclick="window.location='{{ url("/") }}'">Return to homepage</button>
    <hr>

</div>
</body>
</html>
<script>
    function showData(element) {
        var userId = $(element).siblings(".postData").find(".userId").val();
        var postId = $(element).siblings(".postData").find(".postId").val();
        alert("user ID is: " + userId + ". And post ID is: " + postId);
    }
</script>
