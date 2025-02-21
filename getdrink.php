<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parabéns, Alcoder!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #282c34;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .container {
            text-align: center;
            animation: fadeIn 2s;
        }

        h1 {
            font-size: 3em;
            color: #ffcc00;
            text-shadow: 2px 2px #333;
        }

        p {
            font-size: 1.2em;
            color: #ddd;
        }

        @keyframes confetti {
            0% { transform: translateY(0); }
            100% { transform: translateY(100vh); }
        }

        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #ffcc00;
            animation: confetti 5s linear infinite;
            opacity: 0.7;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $nome = $_POST['nome'];
            $quantidade = $_POST['quantidade'];
            $bebida = $_POST['bebida'];

            echo "<h1>Parabéns, $nome!</h1>";
            echo "<p>Você bebeu $quantidade litros de $bebida.</p>";
            echo "<p>Você é um grande Alcoder do curso de ADS na FMU, grande sucesso!</p>";
        ?>
    </div>

    <script>
        function createConfetti() {
            const confetti = document.createElement('div');
            confetti.classList.add('confetti');
            confetti.style.left = Math.random() * 100 + 'vw';
            confetti.style.backgroundColor = '#' + Math.floor(Math.random()*16777215).toString(16);
            confetti.style.animationDuration = Math.random() * 3 + 2 + 's';
            document.body.appendChild(confetti);
            setTimeout(() => {
                confetti.remove();
            }, 5000);
        }

        setInterval(createConfetti, 200);
    </script>
</body>
</html>
