<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<div>
    @foreach($mamals as $index=>$mamal)
    <h1>Create post and variable value from controller is: <?= $mamal->created_at ?></h1>
    @endforeach
    <button type="button" onclick="window.location='{{ url("/") }}'">Return to homepage</button>
    <input type="button" onclick="sayHo()" value="saySmth" id="supaButton"><br><hr>

    <form action="/testo" method="post">
        {{ csrf_field() }}
        <table border="1">
            <tbody>
            <th>One</th>
            <th>Two</th>
            <th>Three</th>
            <tr>
                <td><input name="abra" type="text" placeholder="type anything"></td>
                <td><input name="kadabra" type="text" placeholder="aga"></td>
                <td><input name="alakazam" type="text" placeholder="one more"></td>
            </tr>
            </tbody>
        </table>
        <input type="submit" value="poehali" alt="pgnali">
    </form>

</div>
</body>
</html>
<script>
    function sayHo() {
        var varvar = $("#supaButton").val();
        alert(varvar);
    }
</script>
