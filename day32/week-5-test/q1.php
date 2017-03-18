<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two buttons</title>
</head>
<body>

    <button id="red" onclick="set_background('red');">red</button>
    <button id="blue">blue</button>

    <script>

function set_background(color) {
    document.body.style.backgroundColor = color;
}

document.getElementById('blue').addEventListener('click', function(){
    set_background('blue');
});

    </script>
    
</body>
</html>
