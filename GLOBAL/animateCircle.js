	// animateCircle

        var canvas, context, step, steps, frames, delay;
        var centerX, centerY, radius, direction;
        var counter;
 
        function init() {
                canvas = document.getElementById("canvas1");
                context = canvas.getContext("2d");
                centerX = canvas.width / 2;
                centerY = canvas.height / 2;
                context.fillStyle = "white";
                context.lineWidth = 5;
                context.strokeStyle = "#FFF";
                counter = 0;
                radius = 90;
                frames = 60;
                step = 2.0 * Math.PI / frames;
                delay = 25;
                direction = 1;
                animateNext();
        }

        function animateNext() {
                counter++;
                context.clearRect(0, 0, canvas.width, canvas.height);
                var thisStep = (counter % frames) * step * direction;
                context.beginPath();
                context.arc(centerX, centerY, radius, 0, thisStep, false);
                context.stroke();
                var t = setTimeout('animateNext()', delay);
        }

