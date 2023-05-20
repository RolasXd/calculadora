

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            width: 50%;
            margin: 0 auto;
            background: linear-gradient( #A7FFF8, #9DF3FF, #45E8FF);
        }
        .calculator {
            display: inline-block;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        .calculator input[type="button"] {
            width: 50px;
            height: 50px;
            font-size: 24px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .calculator input[type="button"]:hover {
            background-color: #ccc;
        }
        .calculator input[type="text"] {
            width: 100%;
            margin-bottom: 10px;
            font-size: 24px;
            text-align: right;
            border: none;
            border-radius: 5px;
            padding: 10px;
        }
        .calculator .row {
            display: flex;
            justify-content: space-between;
        }
        .calculator .row:last-child {
            margin-top: 10px;
        }
        .calculator .row:last-child input[type="button"] {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <input type="text" id="result" readonly>
        <div class="row">
            <input type="button" value="7" onclick="addToResult('7')">
            <input type="button" value="8" onclick="addToResult('8')">
            <input type="button" value="9" onclick="addToResult('9')">
            <input type="button" value="/" onclick="addToResult('/')" class="disabled" disabled>
        </div>
        <div class="row">
            <input type="button" value="4" onclick="addToResult('4')">
            <input type="button" value="5" onclick="addToResult('5')">
            <input type="button" value="6" onclick="addToResult('6')">
            <input type="button" value="*" onclick="addToResult('*')" class="disabled" disabled>
        </div>
        <div class="row">
            <input type="button" value="1" onclick="addToResult('1')">
            <input type="button" value="2" onclick="addToResult('2')">
            <input type="button" value="3" onclick="addToResult('3')">
            <input type="button" value="-" onclick="addToResult('-')" class="disabled" disabled>
        </div>
        <div class="row">
            <input type="button" value="0" onclick="addToResult('0')">
            <input type="button" value="." onclick="addToResult('.')">
            <input type="button" value="+" onclick="addToResult('+')" class="disabled" disabled>
            <input type="button" value="C" onclick="clearResult()">
        </div>
        <div class="row">
            <input type="button" value="=" onclick="calculateResult()">
        </div>
    </div>
    <script>
        function addToResult(value) {
            document.getElementById('result').value += value;
        }

        function clearResult() {
            document.getElementById('result').value = '';
        }

        function calculateResult() {
            var result = eval(document.getElementById('result').value);
            if (result === Infinity || result === -Infinity) {
                alert('No se puede dividir por cero');
                clearResult();
            } else {
                document.getElementById('result').value = result;
            }
        }

                    // Capturar las teclas presionadas
            document.addEventListener('keydown', function(event) {
                // Obtener el valor numérico de la tecla presionada
                const keyValue = event.key;

                // Verificar si el valor es un número, un operador válido o la tecla de igual
                if (!isNaN(parseFloat(keyValue)) || ['+', '-', '*', '/', '='].includes(keyValue)) {
                    if (keyValue === '=') {
                        calculateResult();
                    } else {
                        addToResult(keyValue);
                    }
                }
            });

    </script>
</body>
</html>
