<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danceflow</title>
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/app.js"></script>
</head>
<body>

<canvas id="canvas" width="640" height="360"></canvas>
<video id="video" width="640" height="360" style="display:none" autoplay></video>

<!-- you can add style="display: none" to the video tag -->

<div id="message">Loading...</div>

<div id="fullscreen">
    <button id="button" onclick="fullscreen();">Toggle fullscreen</button>
</div>

</body>
</html>