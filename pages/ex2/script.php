<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <?php
    $peso = $_GET["peso"];
    $altura = $_GET["altura"];

    function calcularIMC($peso, $altura)
    {
        return $peso / ($altura * $altura);
    }
    ?>
    <div class="container">
        <span class="title">Seu IMC é...</span>
        <div class="header">
            <?php
            $imc = calcularIMC($peso, $altura);
            echo number_format($imc, 1, ",", "");
            ?>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">IMC</th>
                    <th scope="col">Classificação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="imc-abaixo-normal">Menor que 18,5</td>
                    <td class="imc-abaixo-normal">Abaixo do peso normal</td>
                </tr>
                <tr>
                    <td class="imc-normal">18,5 - 24,9</td>
                    <td class="imc-normal">Peso normal</td>
                </tr>
                <tr>
                    <td class="imc-excesso">25,0 - 29,9</td>
                    <td class="imc-excesso">Excesso de peso</td>
                </tr>
                <tr>
                    <td class="imc-obesidade1">30,0 - 34,9</td>
                    <td class="imc-obesidade1">Obesidade classe I</td>
                </tr>
                <tr>
                    <td class="imc-obesidade2">35,0 - 39,9</td>
                    <td class="imc-obesidade2">Obesidade classe II</td>
                </tr>
                <tr>
                    <td class="imc-obesidade3">Maior ou igual a 40,0</td>
                    <td class="imc-obesidade3">Obesidade classe III</td>
                </tr>
            </tbody>
        </table>
        <h1>TODO: a categoria onde o usuário se encaixa terá a cor verde.</h1>
        <h1>TODO: Adicionar um CSS bonito</h1>
        <a href="index.html" class="btn-voltar btn btn-primary">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>