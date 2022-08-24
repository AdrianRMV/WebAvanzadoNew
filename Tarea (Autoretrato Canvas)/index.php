<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoretrato canvas</title>
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

    <canvas id="canvas" width="1000" height="1000">
        Tu navegador no admite el elemento &lt;canvas&gt;.
    </canvas>

    <img id="animal" src="./img/nadal.png" width="300" height="227" style="display:none">
    <img id="hb" src="./img/hugo-boss.png" width="300" height="227" style="display:none">
    <img id="dasc" src="./img/DASC.png" width="300" height="227" style="display:none">


    <script type="text/javascript">
        let skinColor = "#f6d7b0";
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        canvas.style.background = "#ff8";

        // ! Cuello !
        ctx.beginPath();
        ctx.moveTo(515, 338);
        ctx.lineTo(515, 365);
        ctx.lineTo(485, 365);
        ctx.lineTo(485, 338);
        ctx.fillStyle = skinColor;
        ctx.fill();
        ctx.stroke();

        // ! Cabeza !
        ctx.beginPath();
        ctx.arc(500, 300, 50, 0, 2 * Math.PI);
        ctx.fillStyle = skinColor;
        ctx.fill();
        ctx.stroke();

        // ! Boca !
        ctx.beginPath();
        ctx.arc(500, 319, 10, 0, 0.7 * Math.PI);
        ctx.fillStyle = "#000";
        ctx.fill();
        ctx.stroke();

        // ! Ojo izquierdo !
        ctx.beginPath();
        ctx.arc(480, 286, 10, 0, 2 * Math.PI);
        ctx.fillStyle = "#000";
        ctx.fill();
        ctx.strokeStyle = "#d2d2d2";
        ctx.stroke();
        ctx.strokeStyle = "#000";


        ctx.beginPath();
        ctx.arc(482, 288, 3, 0, 2 * Math.PI);
        ctx.fillStyle = "#fff";
        ctx.fill();
        ctx.strokeStyle = "#fff";
        ctx.stroke();
        ctx.strokeStyle = "#000";


        // ! Ojo derecho !
        ctx.beginPath();
        ctx.arc(519, 286, 10, 0, 2 * Math.PI);
        ctx.fillStyle = "#000";
        ctx.fill();
        ctx.strokeStyle = "#d2d2d2";
        ctx.stroke();
        ctx.strokeStyle = "#000";

        ctx.beginPath();
        ctx.arc(522, 288, 3, 0, 2 * Math.PI);
        ctx.fillStyle = "#fff";
        ctx.fill();
        ctx.strokeStyle = "#fff";
        ctx.stroke();
        ctx.strokeStyle = "#000";



        // ! Cartel DASC !
        ctx.beginPath();
        ctx.moveTo(616, 366);
        ctx.lineTo(623, 374);
        ctx.lineTo(680, 332);
        ctx.lineTo(670, 323);
        ctx.lineTo(616, 366);
        ctx.fillStyle = "red";
        ctx.fill();
        ctx.stroke();


        ctx.beginPath();
        ctx.moveTo(630, 281);
        ctx.lineTo(724, 430);
        ctx.lineTo(791, 361);
        ctx.lineTo(685, 240);
        ctx.lineTo(630, 281);
        ctx.fillStyle = "red";
        ctx.fill();
        ctx.stroke();

        

        // ! Brazo derecho !
        ctx.beginPath();
        ctx.moveTo(546, 401);
        ctx.lineTo(575, 430);
        ctx.lineTo(620, 383);
        ctx.lineTo(606, 375);
        ctx.lineTo(578, 404);
        ctx.lineTo(562, 395);
        ctx.fillStyle = skinColor;
        ctx.fill();
        ctx.stroke();

        ctx.beginPath();
        ctx.arc(619, 372, 15, 0, 2 * Math.PI);
        ctx.fillStyle = skinColor;
        ctx.fill();
        ctx.stroke();





        // ! Brazo izquierdo !
        ctx.beginPath();
        ctx.moveTo(440, 397);
        ctx.lineTo(425, 418);
        ctx.lineTo(470, 443);
        ctx.lineTo(470, 426);
        ctx.lineTo(447, 415);
        ctx.lineTo(454, 403);
        ctx.fillStyle = skinColor;
        ctx.fill();
        ctx.stroke();


        // ! Pantalon !
        ctx.beginPath();
        ctx.moveTo(472, 499);
        ctx.lineTo(471, 563);
        ctx.lineTo(494, 563);
        ctx.lineTo(500, 530);
        ctx.lineTo(512, 563);
        ctx.lineTo(527, 563);
        ctx.lineTo(528, 499);
        ctx.fillStyle = "#4169e1";
        ctx.fill();
        ctx.stroke();

        // ! Tenis derecho !
        ctx.beginPath();
        ctx.moveTo(526, 562);
        ctx.lineTo(526, 571);
        ctx.lineTo(542, 571);
        ctx.lineTo(542, 585);
        ctx.lineTo(512, 585);
        ctx.lineTo(512, 563);
        ctx.fillStyle = "#000";
        ctx.fill();
        ctx.stroke();

        // ! Tenis izquierdo !
        ctx.beginPath();
        ctx.moveTo(493, 562);
        ctx.lineTo(493, 585);
        ctx.lineTo(460, 585);
        ctx.lineTo(460, 573);
        ctx.lineTo(474, 573);
        ctx.lineTo(474, 562);
        ctx.fillStyle = "#000";
        ctx.fill();
        ctx.stroke();


        // ! Cuerpo (camisa) !
        // * Lado derecho
        ctx.beginPath();
        ctx.moveTo(495, 365);
        ctx.lineTo(538, 365);
        ctx.lineTo(565, 395);
        ctx.lineTo(542, 405);
        ctx.lineTo(528, 390);
        ctx.lineTo(528, 500);

        // * Lado izquierdo
        ctx.lineTo(472, 500);
        ctx.lineTo(472, 390);
        ctx.lineTo(458, 405);
        ctx.lineTo(435, 395);
        ctx.lineTo(462, 365);
        ctx.lineTo(495, 365);
        ctx.fillStyle = "#d2d2d2";
        ctx.fill();
        ctx.stroke();


        // ! Imagen gorra RF !
        var gorra = document.getElementById('animal');
        ctx.drawImage(gorra, 420,200,150,120);
        
        //  ! Imagen logo HB !
        var hb = document.getElementById('hb');
        ctx.drawImage(hb, 490,400,20,15);

        
        //  ! Imagen logo DASC
        var dasc = document.getElementById('dasc');
        ctx.rotate( (Math.PI / 180) * 50);
        ctx.drawImage(dasc, 630,-370,150,60);

        

    </script>

</body>

</html>