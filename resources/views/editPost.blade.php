<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<div>
    <div style="background-color: #fcfbf5; border: solid; border-radius: 5px;width: 400px">
        <h1>hui hui</h1>
    </div><br>
    <button type="button" onclick="window.location='{{ url("/") }}'">Return to homepage</button>
    <button type="button" onclick="window.location='{{ url("allPosts") }}'">Back</button>
    <hr>

</div>
</body>
</html>
