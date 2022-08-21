<!DOCTYPE html>
<?php
    function areaLateral($h, $ab) {
        return sqrt(pow($h, 2) + pow($ab, 2));
    }

    function areaTriangulo($g, $ab) {
        return (($g * ($ab * 2)) / 2);
    }

    function areaBase($ab) {
        return pow(($ab * 2), 2);
    }

    function areaTotal($g, $ab) {
        return (areaTriangulo($g, $ab) * 4) + areaBase($ab);
    }

    function volumePiramide($ab, $h) {
        return (areaBase($ab) * $h) / 3;
    }

    function litrosTinta($at) {
        return $at / 4.76;
    }

    function latasTinta($lt) {
        return ceil($lt / 18);
    }

    function valorTinta($la, $tt) {
        if ($tt == 1) {
            return $la * 127.90;
        } else if ($tt == 2) {
            return $la * 258.98;
        } else {
            return $la * 344.34;
        }
    }

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pintura do Cone</title>
</head>
<body>
    <?php
        $g = areaLateral($h, $ab);
        $lt = litrosTinta(areaTotal($g, $ab));
        $la = latasTinta($lt);
        echo "<h1>Pintura da pirâmide</h1> <br>";
        echo "ab: " . $ab . " <br>";
        echo "h: " . $h . " <br>";
        echo "al: " . $g . " <br>";
        echo "Área Triangulo: " . areaTriangulo($g, $ab) . " <br>";
        echo "Área Base: " . areaBase($ab) . " <br>";
        echo "Área Total: " . areaTotal($g, $ab) . " <br>";
        echo "Tipo de Tinta: " . $tt . " <br>";
        echo "Litros de Tinta: " . $lt . " <br>";
        echo "Latas de Tinta: " . $la . " <br>";
        echo "Valor da Tinta: " . valorTinta($la, $tt) . " <br>";
        echo "Volume: " . volumePiramide($ab, $h) . " <br>";
    ?>
</body>
</html>