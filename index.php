<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMU Alcoólatras Anônimos Tecnológicos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
            margin-bottom: 10px;
        }

        input:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            background: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <form action="getdrink.php" method="post">
        <h2>Só pra quem é do drink</h2>
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="quantidade">Quantidade que bebe (em litros):</label>
        <input type="number" id="quantidade" name="quantidade" min="0" step="0.1" required>

        <label for="bebida">Escolha sua bebida preferida:</label>
        <select id="bebida" name="bebida" required>
            <option value="">Selecione uma bebida</option>
            <option value="cerveja">Cerveja</option>
            <option value="vinho">Vinho</option>
            <option value="vodka">Vodka</option>
            <option value="whisky">Whisky</option>
            <option value="rum">Rum</option>
            <option value="tequila">Tequila</option>
            <option value="conhaque">Conhaque</option>
            <option value="licor">Licor</option>
            <option value="sake">Sakê</option>
            <option value="champagne">Champagne</option>
            <option value="outro">Outro</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
