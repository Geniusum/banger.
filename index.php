<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2; URL=./home.php">
    <title>banger.</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:wght@100..900&display=swap');

        body {
            background-color: black;
            color: white;
            font-family: 'Inter';
            margin: 0;
            padding: 0;
        }

        .centered_logo {
            user-select: none;
            width: min(300px, 60vw);
            height: auto;
            margin: auto;
            display: flex;
            margin-top: calc(50vh - 39px);
            animation: rotation_dup 5s 0.5s infinite;
        }

        .bottom_textinfo {
            position: absolute;
            width: 100vw;
            padding: 0 20px 0 20px;
            box-sizing: border-box;
            text-align: center;
            color: #FFFFFFCC;
            bottom: 30px;
            font-size: 20px;
        }

        @keyframes rotation_dup {
            0% {
                filter: drop-shadow(0px 0px 0px #43A447);
            }

            50% {
                margin-top: calc(50vh - 39px - 30px);
                filter: drop-shadow(0px 80px 0px #62EE68);
                transform: perspective(9cm) rotate3d(0, 1, 0, 3.142rad);
            }
            
            80% {
                filter: drop-shadow(0px 0px 0px #43A447);
                transform: perspective(9cm) rotate3d(0, 1, 0, 6.284rad);
            }

            80.001% {
                transform: perspective(9cm) rotate3d(0, 1, 0, 0rad);
            }
        }
    </style>
</head>
<body>
    <img src="assets/banger.svg" alt="banger. logo" class="centered_logo" draggable="false">
    <div class="bottom_textinfo">Redirection in 2 seconds...</div>
</body>
</html>