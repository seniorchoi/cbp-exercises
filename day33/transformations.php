<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS transformations</title>

    <style>
#wrapper {
    position: relative;
    height: 400px;
    background: lightblue;
}
#box, #box2 {
    border: 1px solid red;
    padding: 1em;
    width: 200px;
    background-color: darkred;
    color: #ffffff;
    opacity: 0.7;
}
#box2 {
    background-color: darkblue;
}

#box, #box2 {

    position: absolute;
    top: 0;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
    /*transform: perspective(500px) translateZ(99px);*/
}

#box {
    transform-origin: 50% 50%;
    backface-visibility: hidden;
    transform: perspective(1000px) translateY(-50%) translateX(-50%);

    transition: all 3s ease;
}

#box.changed {
    top: 50%;
    background-color: yellow;
    transform: rotateZ(360deg)
}

    </style>
</head>
<body>

    <button id="start">Start transition</button>

    <div id="wrapper">
        <div id="box2">
            This is the original.
        </div>
        <div id="box">
            This is the content of the box.
        </div>

    </div>

    <script>
document.getElementById('start').addEventListener('click', function() {
    var box = document.getElementById('box');
    if(box.className == 'changed') {
        box.className = '';
    } else {
        box.className = 'changed';
    }
});
    </script>
    
</body>
</html>