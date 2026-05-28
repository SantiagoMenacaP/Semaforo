<?php
    $tiempoEnCiclo = time() % 90;
    

    if ($tiempoEnCiclo < 30){
        $coloractivo = 'green';
        
    } elseif ($tiempoEnCiclo >=30 && $tiempoEnCiclo < 60) {
        $coloractivo = 'yellow';
        
    } else {
        $coloractivo = 'red';
        
    }

    $segundosHastaCambio = 30 - ($tiempoEnCiclo % 30);
    

    $segundosHastaCambio = max(1, 30 - ($tiempoEnCiclo % 30));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semaforo de php con html, boostrap y css</title>
    <meta http-equiv = "refresh" content = "<?= $segundosHastaCambio ?>">
    <style> 
         body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: #e8e8e8;
            font-family: system-ui, sans-serif;
        }
        .semaforo{
            background: #1a1a1a;
            padding: 25px;
            border-radius: 20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.4);
        }
        .luz{
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 12px 0;
            background: #333;
            border: 4px solid #000000;
            transition: all 0.3s ease;

        }

        .red.active { background: #ff3b30; box-shadow: 0 0 25px #ff3b30;}
        .yellow.active { background: #fffb00; box-shadow: 0 0 25px #ffea00;}
        .green.active { background: #00ff0d; box-shadow: 0 0 25px #00ff0d;}


    </style>
</head>
<body>

    <div class = "semaforo">
        <div class = "luz red <?= $coloractivo === 'red' ? 'active' : '' ?>"></div>
        <div class = "luz yellow <?= $coloractivo === 'yellow' ? 'active' : '' ?>"></div>
        <div class = "luz green <?= $coloractivo === 'green' ? 'active' : '' ?>"></div>
    </div>

    <p style= "margin-top: 20px; color: #000000;">
        cambio en: <strong><?= $segundosHastaCambio ?> </strong> segundos
    </p>

    
</body>
</html>