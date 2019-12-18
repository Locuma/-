<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<div>
        <div style="background-color: #fcfbf5; border: solid; border-radius: 5px;width: 400px">
            <label for="content"><?= $article ?></label>

            <div id="content" style="background-color: #c7c7c7; border-radius: 5px">
                <?= $content?>
            </div>
            <div>
                <p>Автор: <?= $creatorName ?></p>
            </div>
        </div><br>
    <button type="button" onclick="window.location='{{ url("/") }}'">Return to homepage</button>
    <button type="button" onclick="window.location='{{ url("allPosts") }}'">Back</button>
    <hr>

</div>
</body>
</html>
