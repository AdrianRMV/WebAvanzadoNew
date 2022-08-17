<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>


    <style>
        body {
            padding: 0px;
            margin: 0px;
            background: #f1f1f1;
        }
    </style>

    <canvas id="canvas" width="300" height="300">
        Tu navegador no admite el elemento &lt;canvas&gt;.
    </canvas>

    <img id="source" src="./img/react.png" width="300" height="227" style="display:none">


    <script type="text/javascript">
        //  * Actividad 7 *

        let canvas = document.getElementById('canvas');
        canvas.style.background = "#ff8";
        let context = canvas.getContext('2d');
        let color = 'red';
        let figura = 'circulo';


        // Linear Gradient Drawing

        // let linear = context.createLinearGradient(10, 10, 10, 190);
        // linear.addColorStop(0, "red");
        // linear.addColorStop(0.5, "green");
        // linear.addColorStop(1, "blue");

        // context.fillStyle = linear;
        // context.fillRect(10, 10, 200, 200);

        // Radial gradient

        // let grd = context.createRadialGradient(75, 50, 5, 90, 60, 100);
        // grd.addColorStop(0, "red");
        // grd.addColorStop(1, "white");

        // Fill with gradient
        // context.fillStyle = grd;
        // context.fillRect(10, 10, 150, 80);


        // var image = document.getElementById('source');
        // context.drawImage(image, 0,0,100,100);



        canvas.addEventListener('click', ({
            offsetX,
            offsetY
        }) => {

            context.fillStyle = color;
            context.strokeStyle = "red";

            if (figura == 'rectangulo') {
                context.beginPath();
                context.fillRect(offsetX - 20, offsetY - 20, 40, 40);
                context.stroke();
                context.fill();
                context.closePath();

            } else if (figura == 'circulo') {
                // arc = Circulo
                context.beginPath();
                context.arc(offsetX, offsetY, 50, 0, 2 * Math.PI); // x,y,diametro,angulo inicial, el calculo para el redondeo;
                context.stroke();
                context.fill()
                context.closePath();
            }


        });

        canvas.addEventListener('mouseover', () => {
            color = getRandomColor();
        });


        canvas.addEventListener('mouseout', () => {
            figura = (figura == 'circulo') ? 'rectangulo' : 'circulo';
        });


        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>
</body>

</html>