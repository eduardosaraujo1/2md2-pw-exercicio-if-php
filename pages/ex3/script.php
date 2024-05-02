<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <?php
    function obterArrayNotas()
    {
        $notas = $_POST;
        $notas = array_values($notas);
        array_shift($notas);
        return $notas;
    }

    function calcularMedia()
    {
        $notas = obterArrayNotas();
        $media = array_sum($notas) / sizeof($notas);
        $media = round($media, 1);
        return number_format($media, 1, ',', '');
    }

    function classificarNota($nota)
    {
        if ($nota >= 7) {
            return 'Aprovado';
        } else {
            return 'Reprovado';
        }
    }

    $nomeEstudante = $_POST['nomeEstudante'];
    $media = calcularMedia();
    $classificacao = classificarNota($media);

    ?>
    <div class="container">
        <div class="dados">
            <div class="header">
                <?php
                echo $nomeEstudante . ', sua media é';
                ?>
            </div>
            <div class="nota">
                <?php
                echo $media;
                ?>
            </div>
            <div class="header">O que o classifica como</div>
            <div class="classificacao">
                <?php
                echo $classificacao;
                ?>
            </div>
        </div>
    </div>
    <a href="index.html" class="btn btn-primary btn-voltar">Voltar</a>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="bsFormValidate.js"></script>
</body>

</html>
