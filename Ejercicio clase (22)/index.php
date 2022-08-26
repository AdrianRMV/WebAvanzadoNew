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

    <canvas id="canvas" width="1000" height="600">
        Tu navegador no admite el elemento &lt;canvas&gt;.
    </canvas>


    <script type="text/javascript">
        //  * Actividad 7 *

        let canvas = null;
        let context = null;
        let player1 = null;
        let player2 = null;
        let arregloParedes = [];

        let score = 0;
        let speed = 5;
        let dead = false;
        let pause = false;


        // Imagenes 
        let zombie = new Image();
        let carne = new Image();
        let wall = new Image();

        // Audio
        let sonido1 = new Audio();

        let color = 'red';
        let figura = 'circulo';
        let isPress = false;

        let x = 240;
        let y = 240;
        let direction = 'up';



        function start() {


            canvas = document.getElementById('canvas');
            context = canvas.getContext('2d');
            canvas.style.background = "#ff8";

            player1 = new Jugador(x, y, 40, 40, 'red', 3);
            player2 = new Cuadrado(getRandomInt(900), getRandomInt(540), 40, 40, 'red');

            // * Generador de obstaculos
            for (let i = 0; i <= 4; i++) {
                let obstaculo = new Cuadrado(getRandomInt(900), getRandomInt(540), 40, 100, '#808080');
                arregloParedes.push(obstaculo);
            }
            zombie.src = "zombie.png";
            carne.src = "carne.png";
            wall.src = "wall.jpg";

            sonido1.src = "sonido_zombie.mp3";
            paint();
        }




        //  Funcion de pintar
        const paint = () => {

            window.requestAnimationFrame(paint);

            // Rellenar el canvas y hacer como que borra el trayecto
            context.fillStyle = "#ff8";
            context.fillRect(0, 0, 1000, 600);

            context.fillStyle = "#000";
            context.font = "25px Arial";
            context.fillText("Score: " + score + "                                   " + "Speed: " + speed + "                                                " + "Lifes: " + player1.lifes + " ", 20, 40);

            // Creando el rectangulo que se pinta conforme la tecla
            player1.color = getRandomColor();

            // * Se dibujan el jugador y el bono
            // player1.dibujar(context);
            // player2.dibujar(context);

            // * Creando los obstaculos
            arregloParedes.map((obstaculo) => {
                obstaculo.dibujar(context);
            })

            //  * Se dibuja la imagen del zombie en el jugador *
            context.drawImage(zombie, player1.x, player1.y);

            //  * Se dibuja la imagen del carne al bono*
            context.drawImage(carne, player2.x, player2.y);

            //  * Se dibuja la imagen del carne al bono*
            arregloParedes.map((obstaculo) => {
                context.drawImage(wall, obstaculo.x, obstaculo.y, 40, 100);
            });


            if (!pause && !dead) {
                update();
            } else if (dead) {
                context.fillStyle = "rgba(0,0,0,0.5)";
                context.fillRect(0, 0, 1000, 600);
                context.fillStyle = "#fff";
                context.font = "35px Arial";
                context.fillText("DEAD", 425, 300);
            } else {
                context.fillStyle = "rgba(0,0,0,0.5)";
                context.fillRect(0, 0, 1000, 600);
                context.fillStyle = "#fff";
                context.font = "35px Arial";
                context.fillText("Pause", 425, 300);
            }
        }

        const update = () => {

            if (direction === 'down') {
                player1.y += speed;
                if (player1.y > 600) {
                    player1.y = 0
                }
            }
            if (direction === 'up') {
                player1.y -= speed;
                if (player1.y < 0) {
                    player1.y = 600;
                }
            }
            if (direction === 'right') {
                player1.x += speed;
                if (player1.x > 1000) {
                    player1.x = 0;
                }
            }
            if (direction === 'left') {
                player1.x -= speed;
                if (player1.x < 0) {
                    player1.x = 1000;
                }
            }


            /*
             *   Condicional para saber si nuestro player a tocado la recompensa para subir velocidad y dar mas score
             */
            if (player1.se_tocan(player2)) {
                player2.x = getRandomInt(900);
                player2.y = getRandomInt(500);
                score += 10;
                speed += 5;
                sonido1.play();

            }

            /*
             *   Buscar que nuestro player no toque ninguno de los obstaculos o se detendra el juego
             */
            arregloParedes.map((obstaculo) => {
                if (player1.se_tocan(obstaculo)) {
                    if (player1.lifes <= 1) {
                        dead = true;
                        speed = 0;
                    } else {
                        player1.lifes = player1.lifes - 1;
                        player1.x = getRandomInt(900);
                        player1.y = getRandomInt(500);
                    }
                }
            })
        };


        // * Clase Cuadrado que es nuestra clase molde para todo los objetos
        class Cuadrado {
            constructor(x, y, w, h, color) {
                this.x = x;
                this.y = y;
                this.w = w;
                this.h = h;
                this.color = color;
            }

            dibujar = function(context) {
                context.fillStyle = this.color;
                context.fillRect(this.x, this.y, this.w, this.h);
                context.strokeRect(this.x, this.y, this.w, this.h);
            }

            se_tocan = function(target) {
                if (this.x < target.x + target.w &&

                    this.x + this.w > target.x &&

                    this.y < target.y + target.h &&

                    this.y + this.h > target.y) {
                    return true;
                }
            };
        }

        // * Clase jugador para poder diferenciarlo de las clase de obstaculos
        class Jugador {
            constructor(x, y, w, h, color, lifes) {
                this.x = x;
                this.y = y;
                this.w = h;
                this.h = h;
                this.color = color;
                this.lifes = lifes;
            }

            dibujar = function(context) {
                context.fillStyle = this.color;
                context.fillRect(this.x, this.y, this.w, this.h);
                context.strokeRect(this.x, this.y, this.w, this.h);
            }

            se_tocan = function(target) {
                if (this.x < target.x + target.w &&

                    this.x + this.w > target.x &&

                    this.y < target.y + target.h &&

                    this.y + this.h > target.y) {
                    return true;
                }
            };
        }



        // ! Funcion para cambiar de color !
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }


        //  ! Generar numero random !
        function getRandomInt(max) {
            return Math.floor(Math.random() * max);
        }

        // * Movimiento con tecla y flechas
        document.addEventListener('keydown', ({
            keyCode
        }) => {
            // arriba
            if (keyCode == 87 || keyCode == 38) {
                direction = 'up';
            }
            // derecha
            if (keyCode == 68 || keyCode == 39) {
                direction = 'right';
            }

            // abajo
            if (keyCode == 83 || keyCode == 40) {
                direction = 'down';

            }

            // izquierda
            if (keyCode == 65 || keyCode == 37) {
                direction = 'left';
            }

            // Pause
            if (keyCode == 32) {
                pause = (pause) ? false : true;
            }
        })

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