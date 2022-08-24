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

        let canvas = null;
        let context = null;
        let player1 = null;



        let color = 'red';
        let figura = 'circulo';
        let isPress = false;
        let x = 240;
        let y = 240;



        function start() {
            canvas = document.getElementById('canvas');
            context = canvas.getContext('2d');
            canvas.style.background = "#ff8";

            player1 = new Cuadrado(x,y,40,40,'red');

            paint();
        }
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


        /*
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

        // Mouse move event
        canvas.addEventListener('mousemove', ({
            offsetX,
            offsetY
        }) => {

            if(isPress == true){
                context.fillStyle = getRandomColor();
                context.fillRect(offsetX - 5, offsetY - 5, 10, 10);
            }

        });

        canvas.addEventListener('mousedown', () => {
            isPress = true;

        });
        
        canvas.addEventListener('mouseup', () => {
            isPress = false;

        });


        

        */


        // Movimiento con tecla y flechas

        // document.addEventListener('keydown', ({
        //     keyCode
        // }) => {
        //     // arriba
        //     if (keyCode == 87 || keyCode == 38) {
        //         y -= 10;
        //     }
        //     // derecha
        //     if (keyCode == 68 || keyCode == 39) {
        //         x += 10;
        //     }

        //     // abajo
        //     if (keyCode == 83 || keyCode == 40) {
        //         y += 10;

        //     }

        //     // izquierda
        //     if (keyCode == 65 || keyCode == 37) {
        //         x -= 10;
        //     }

        //     paint();

        // })

        //  Funcion de pintar
        const paint = () => {

            window.requestAnimationFrame(paint);

            // Rellenar el canvas y hacer como que borra el trayecto
            context.fillStyle = "#ff8";
            context.fillRect(0, 0, 300, 300);

            // Creando el rectangulo que se pinta conforme la tecla
            player1.color = getRandomColor();
            player1.dibujar(context);

            update();
        }

        const update = () => {
            player1.x += 5;
            player1.y = 150;

            if (player1.x > 300) {
                player1.x = 0;
            }
        };


        class Cuadrado {
            constructor(x, y, w, h, color) {
                this.x = x;
                this.y = y;
                this.w = h;
                this.h = h;
                this.color = color;
            }

            dibujar = function(context) {
                context.fillStyle = this.color;
                context.fillRect(this.x, this.y, this.w, this.h);
                context.strokeRect(this.x, this.y, this.w, this.h);
            }
        }

        // Funcion para cambiar de color 
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        window.addEventListener("load", start);

        window.requestAnimationFrame = (function() {
            return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function(callback) {
                    window.setTimeout(callback, 17);
                };
        }());
        
    </script>
</body>

</html>