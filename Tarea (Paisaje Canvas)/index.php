<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paisaje canvas</title>
</head>

<body>

    <style>
        html,
        body {
            padding: 0px;
            margin: 0px;
            background: #f1f1f1;
        }
    </style>

    <canvas id="canvas" width="1920" height="700">
        Tu navegador no admite el elemento &lt;canvas&gt;.
    </canvas>

    <script type="text/javascript">
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        canvas.style.background = "#ff8";

        //  ! Pasto !
        ctx.beginPath();
        ctx.fillStyle = "#008013";
        ctx.fillRect(0, 595, 1920, 105);
        ctx.fill();
        ctx.closePath();

        //  ! Casa Abajo !
        ctx.beginPath();
        ctx.moveTo(719, 629);
        ctx.lineTo(1001, 629);
        ctx.lineTo(1001, 462);
        ctx.lineTo(719, 462);
        ctx.lineTo(719, 629);
        ctx.fillStyle = "#C46200";
        ctx.fill();
        ctx.stroke();


        //  ! Techo !
        ctx.beginPath();
        ctx.moveTo(582, 484);
        ctx.lineTo(1136, 484);
        ctx.lineTo(858, 309);
        ctx.lineTo(582, 484);
        ctx.fillStyle = "#9b0000";
        ctx.fill();
        ctx.stroke();

        //  ! Puerta !
        ctx.beginPath();
        ctx.moveTo(832, 628);
        ctx.lineTo(832, 562);
        ctx.lineTo(889, 562);
        ctx.lineTo(889, 628);
        ctx.lineTo(832, 628);
        ctx.fillStyle = "#804000";
        ctx.fill();
        ctx.stroke();

        // * Linea divisora
        ctx.beginPath();
        ctx.moveTo(861, 628);
        ctx.lineTo(861, 562);
        ctx.fillStyle = "#000";
        ctx.fill();
        ctx.stroke();


        //  * Manija izq
        ctx.beginPath();
        ctx.arc(854, 598, 3, 0, 2 * Math.PI);
        ctx.fillStyle = "#000";
        ctx.fill();
        ctx.closePath();

        //  * Manija izq
        ctx.beginPath();
        ctx.arc(867.5, 598, 3, 0, 2 * Math.PI);
        ctx.fillStyle = "#000";
        ctx.fill();
        ctx.closePath();

        // ! Ventana izq
        ctx.beginPath();
        ctx.fillStyle = "#87CEEB";
        ctx.fillRect(745, 505, 30, 30);
        ctx.fill();
        ctx.stroke();
        ctx.closePath();
        
        ctx.beginPath();
        ctx.fillStyle = "#87CEEB";
        ctx.fillRect(745, 542, 30, 30);
        ctx.fill();
        ctx.stroke();
        ctx.closePath();
        
        ctx.beginPath();
        ctx.fillStyle = "#87CEEB";
        ctx.fillRect(783, 505, 30, 30);
        ctx.fill();
        ctx.stroke();
        ctx.closePath();
        
        ctx.beginPath();
        ctx.fillStyle = "#87CEEB";
        ctx.fillRect(783, 542, 30, 30);
        ctx.fill();
        ctx.stroke();
        ctx.closePath();

        // ! Arbol !

        // * Tronco *
        ctx.beginPath();
        ctx.moveTo(1433, 629);
        ctx.lineTo(1433, 483);
        ctx.lineTo(1483, 483);
        ctx.lineTo(1483, 629);
        ctx.lineTo(1433, 629);
        ctx.fillStyle = "#804000";
        ctx.fill();
        ctx.stroke();


        // * Hojas *
        ctx.beginPath();
        ctx.arc(1458, 420, 90, 0, 2 * Math.PI);
        ctx.fillStyle = "#008013";
        ctx.fill();
        ctx.closePath();
        
        ctx.beginPath();
        ctx.arc(1407, 382, 8, 0, 2 * Math.PI);
        ctx.fillStyle = "#9F021E";
        ctx.fill();
        ctx.closePath();
        
        // * Manzanas *
        ctx.beginPath();
        ctx.arc(1488, 350, 8, 0, 2 * Math.PI);
        ctx.fillStyle = "#9F021E";
        ctx.fill();
        ctx.closePath();
        
        ctx.beginPath();
        ctx.arc(1491, 400, 8, 0, 2 * Math.PI);
        ctx.fillStyle = "#9F021E";
        ctx.fill();
        ctx.closePath();
        
        ctx.beginPath();
        ctx.arc(1490, 455, 8, 0, 2 * Math.PI);
        ctx.fillStyle = "#9F021E";
        ctx.fill();
        ctx.closePath();
        
        ctx.beginPath();
        ctx.arc(1399, 459, 8, 0, 2 * Math.PI);
        ctx.fillStyle = "#9F021E";
        ctx.fill();
        ctx.closePath();
        
        ctx.beginPath();
        ctx.arc(1451, 380, 8, 0, 2 * Math.PI);
        ctx.fillStyle = "#9F021E";
        ctx.fill();
        ctx.closePath();
        



    </script>

</body>

</html>