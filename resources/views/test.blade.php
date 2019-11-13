<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<div>
    <h1>Create post and variable value from controller is: <?= $mamal[0]->created_at ?></h1>
    <button type="button" onclick="window.location='{{ url("/") }}'">Return to homepage</button>
    <input type="button" onclick="sayHo()" value="saySmth" id="supaButton">
</div>
</body>
</html>
<script>
    function sayHo() {
        var varvar = $("#supaButton").val();
        alert(varvar);
    }
</script>
