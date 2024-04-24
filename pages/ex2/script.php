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
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        function calcularIMC($peso, $altura)
        {
            if ($altura > 30) {
                // Assuma o usuário erroniamente digitou a altura em centimetros
                $altura /= 100;
            }
            $imc = $peso / ($altura * $altura);
            return round($imc, 1);
        }

        function classificarIMC($imc)
        {
            $class = '';
            if ($imc < 18.5) {
                $class = 'Abaixo do peso normal';
            } elseif (18.5 <= $imc && $imc < 25) {
                $class = 'Peso normal';
            } elseif (25 < $imc && $imc < 30) {
                $class = 'Excesso de peso';
            } elseif (30 < $imc && $imc < 35) {
                $class = 'Excesso de peso';
            } elseif (35 < $imc && $imc < 40) {
                $class = 'Excesso de peso';
            } elseif ($imc >= 40) {
                $class = 'Obesidade classe III';
            }
            return $class;
        }

        function classificarIMCID($imc)
        {
            $class = '';
            if ($imc < 18.5) {
                $class = 'imc-abaixo-normal';
            } elseif (18.5 <= $imc && $imc < 25) {
                $class = 'imc-normal';
            } elseif (25 < $imc && $imc < 30) {
                $class = 'imc-excesso';
            } elseif (30 < $imc && $imc < 35) {
                $class = 'imc-obesidadeI';
            } elseif (35 < $imc && $imc < 40) {
                $class = 'imc-obesidadeII';
            } elseif ($imc >= 40) {
                $class = 'imc-obesidadeIII';
            }
            return $class;
        }
    ?>
    <div class="container">
        <div class="dados">
            <span class="title">Seu IMC é</span>
            <div class="imc-calculado">
                <?php
                    $imc = calcularIMC($peso, $altura);
                    echo number_format($imc, 1, ',', '');
                ?>
            </div>
            <span class="descricao">Sua classificação é</span>
            <span class="imc-classificacao">
                <?php
                    $class = classificarIMC($imc);
                    $classId = classificarIMCID($imc);
                    echo $class;
                ?>
            </span>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">IMC</th>
                    <th scope="col">Classificação</th>
                </tr>
            </thead>
            <tbody>
                <tr id="imc-abaixo-normal">
                    <td>Menor que 18,5</td>
                    <td>Abaixo do peso normal</td>
                </tr>
                <tr id="imc-normal">
                    <td>18,5 - 24,9</td>
                    <td>Peso normal</td>
                </tr>
                <tr id="imc-excesso">
                    <td>25,0 - 29,9</td>
                    <td>Excesso de peso</td>
                </tr>
                <tr id="imc-obesidadeI">
                    <td>30,0 - 34,9</td>
                    <td>Obesidade classe I</td>
                </tr>
                <tr id="imc-obesidadeII">
                    <td>35,0 - 39,9</td>
                    <td>Obesidade classe II</td>
                </tr>
                <tr id="imc-obesidadeIII">
                    <td>Maior ou igual a 40,0</td>
                    <td>Obesidade classe III</td>
                </tr>
            </tbody>
        </table>

        <script>
            <?php
                echo "\nconst classRow = document.getElementById('$classId');";
            ?>
            classRow.classList.add("highlight");
        </script>

        <!-- <h1>TODO: a categoria onde o usuário se encaixa terá a cor verde.</h1>
        <h1>TODO: Adicionar um CSS bonito</h1> -->
    </div>
    <a href="index.html" class="btn-voltar btn btn-primary">Voltar</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
