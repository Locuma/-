<?php
/*foreach ($onePost['onePost'] as $key => $value){
    echo 'key: ' . $key . ' and value: ' . $value;
} */

echo $onePost['onePost'];

exit; ?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<div>
        <div style="background-color: #fcfbf5; border: solid; border-radius: 5px;width: 400px">
            <label for="content"><?= $onePost->article ?></label>

            <div id="content" style="background-color: #c7c7c7; border-radius: 5px">
                <?= $onePost->content?>
            </div>
            <div>
                <p>Автор: <?= $onePost->name ?></p>
            </div>
        </div><br>
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
