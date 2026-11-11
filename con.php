<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moving Finger Animation</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            font-family: sans-serif;
        }

        .container {
            text-align: center;
        }

        /* The Hand Base */
        .hand {
            position: relative;
            width: 150px;
            height: 140px;
            background-color: #ffdbac; /* Skin tone base */
            border-radius: 30px 30px 40px 40px;
            box-shadow: inset -10px -10px 0px rgba(0,0,0,0.1), 0 20px 30px rgba(0,0,0,0.5);
            border: 4px solid #222;
        }

        /* Folded side fingers & thumb details */
        .hand::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 10px;
            width: 122px;
            height: 50px;
            background-color: #e0b683; /* Shadow/crease color */
            border-radius: 10px;
            border: 4px solid #222;
        }

        /* The Animated Middle Finger */
        .middle-finger {
            position: absolute;
            top: -90px; /* Starting position */
            left: 53px;
            width: 36px;
            height: 110px;
            background-color: #ffdbac;
            border-radius: 20px 20px 0 0;
            border: 4px solid #222;
            border-bottom: none;
            z-index: -1;
            
            /* CSS Animation for smooth bouncing/moving */
            animation: extendFinger 1.2s ease-in-out infinite alternate;
        }

        /* Finger nail detail */
        .middle-finger::after {
            content: '';
            position: absolute;
            top: 10px;
            left: 7px;
            width: 16px;
            height: 20px;
            background-color: rgba(255,255,255,0.4);
            border-radius: 5px 5px 2px 2px;
            border: 2px solid rgba(0,0,0,0.1);
        }

        /* Wrist/Arm link */
        .wrist {
            width: 80px;
            height: 60px;
            background-color: #ffdbac;
            margin: -4px auto 0 auto;
            border-left: 4px solid #222;
            border-right: 4px solid #222;
        }

        /* The Animation Keyframes */
        @keyframes extendFinger {
            0% {
                transform: translateY(40px); /* Tucked down lower */
            }
            100% {
                transform: translateY(-20px); /* Extended high up */
            }
        }

        /* Interactive Speed Controls */
        .controls {
            margin-top: 40px;
        }

        button {
            background-color: #ff4757;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.2s;
            margin: 0 5px;
        }

        button:hover {
            background-color: #ff6b81;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- The Visual Hand structure -->
        <div class="hand">
            <div class="middle-finger" id="finger"></div>
        </div>
        <div class="wrist"></div>

        <!-- JavaScript Controls -->
        <div class="controls">
            <button onclick="changeSpeed('0.3s')">Fast</button>
            <button onclick="changeSpeed('1.2s')">Normal</button>
            <button onclick="changeSpeed('3s')">Slow</button>
        </div>
    </div>

    <script>
        // Simple JavaScript function to dynamically change the CSS animation duration
        function changeSpeed(speed) {
            document.getElementById('finger').style.animationDuration = speed;
        }
    </script>

</body>
</html>

