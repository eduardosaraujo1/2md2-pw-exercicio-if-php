<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades em PHP</title>
    <link rel="stylesheet" href="css/result.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    function classificarTemperatura($temp)
    {
        $ftemp = (int)$temp;
        $class = "";
        if ($ftemp < 0) {
            $class = "Congelante";
        } elseif (0 <= $ftemp && $ftemp < 15) {
            $class = "Muito frio";
        } elseif (15 <= $ftemp  && $ftemp < 25) {
            $class = "Razoável";
        } elseif ($ftemp >= 25) {
            $class = "Calor";
        }
        return $class;
    }
    function calcularCorDeFundo($classeTemp)
    {
        $cor = "";
        switch ($classeTemp) {
            case "Congelante":
                $cor = "--bg-congelante";
                break;
            case "Muito frio":
                $cor = "--bg-muito-frio";
                break;
            case "Razoável":
                $cor = "--bg-razoavel";
                break;
            case "Calor":
                $cor = "--bg-calor";
                break;
        }
        return $cor;
    }
    function determinarImagem($classeTemp)
    {
        $image = "";
        switch ($classeTemp) {
            case "Congelante":
                $image = "congelante.png";
                break;
            case "Muito frio":
                $image = "muitoFrio.png";
                break;
            case "Razoável":
                $image = "razoavel.jpg";
                break;
            case "Calor":
                $image = "calor.png";
                break;
        }
        return $image;
    }
    ?>
    <div class="container">
        <div class="icone-temp">
            <img src="assets/cloud.png" alt="">
        </div>
        <span class="temp-status-header">A temperatura é</span>
        <div class="temp-status">
            <?php
            $temperatura = $_GET["temperatura"];
            $classeTemp = classificarTemperatura($temperatura);
            $corBg = calcularCorDeFundo($classeTemp);
            $imagem = "assets/" . determinarImagem($classeTemp);
            echo $classeTemp;
            ?>
        </div>
        <a class="btn btn-primary back-btn mt-auto" href="index.html">Voltar</a>
        <script>
            <?php
            echo "\ndocument.body.style.backgroundColor = 'var($corBg)';";
            echo "\ndocument.querySelector('.icone-temp>img').src = '$imagem'";
            ?>
        </script>
    </div>
</body>

</html>