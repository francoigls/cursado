<?php
$resultado = null;
$error = null;
$valor = null;

if(isset($_POST['valor'])){

    $valor = floatval($_POST['valor']); 
    $apiUrl="https://v6.exchangerate-api.com/v6/4460b227ecc461b45261393d/latest/USD";

    $inciarCURL = curl_init($apiUrl);
    curl_setopt($inciarCURL, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($inciarCURL, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($inciarCURL, CURLOPT_SSL_VERIFYHOST, false);

    $respuesta = curl_exec($inciarCURL);

    if(curl_errno($inciarCURL)){
        $error = "Error al realizar la solicitud: " . curl_error($inciarCURL);
    }

    curl_close($inciarCURL);

    $datos= json_decode($respuesta, true);

    if (isset($datos["conversion_rates"]["ARS"])) {
        $tasaARS = $datos["conversion_rates"]["ARS"];
        $resultado = $valor * $tasaARS;
    } else {
        $error = "No se encontró la tasa para ARS";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>CONVERTIDOR USD TO ARG</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<main>
    <div class="container-sm mt-4">

       
        <?php if($resultado): ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                USD <?= $valor ?> equivalen a <strong>ARS <?= number_format($resultado, 2) ?></strong>
            </div>
        <?php elseif($error): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <?= $error ?>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">Aplicación para convertir de USD a ARG</div>
            <div class="card-body">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <label for="valor" class="form-label">USD</label>
                        <input type="text" class="form-control" name="valor" id="valor"
                               placeholder="Ingrese cantidad en USD" value="<?= $valor ?? '' ?>">
                    </div>
                    <input type="submit" class="btn btn-success" value="Convertir a pesos ARG">
                </form>
            </div>
            <div class="card-footer text-muted">by Franco Iglesias</div>
        </div>
    </div>
</main>
</body>
</html>