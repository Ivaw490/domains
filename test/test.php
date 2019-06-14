<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <title>Test</title>
</head>
<body>
<button id="hi">Привет</button>
<button id="bye">Пока</button>
<br><br>
<div id="msg"></div>
</body>
</html>

<script>
    $("button").on("click", e = function (e) {
        let msg = e.target.id;
        $.ajax({
            url: "/ajax.php",
            type: "POST",
            data: {
                msg: msg,
            },
            success: function (response) {
                $("#msg").text("User say: " + response);
            }
        })
    });

</script>