<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CI Leite Embrapa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="menu.css">
</head>

<body>

<!-- BANNER -->
<div class="container-fluid p-0">
    <img src="banner_home.png" class="img-fluid w-100">
</div>

<div class="mb-5" style="margin-top: -10px;">
    <?php include('menu.php');?>
</div>

<!-- VIDEO -->
<video autoplay loop muted playsinline class="w-100">
    <source src="video_home.mp4" type="video/mp4">
</video>

<!-- SUB BANNER -->
<div class="container-fluid p-0" style="margin-top:-170px; margin-bottom: 60px;">
    <img src="sub-bannerV2.png" class="img-fluid w-100">
</div>

<!-- DESTAQUES -->
<div class="text-center my-5" style="margin-bottom: 40px;">
    <img src="destaques-homesV2.png"
         class="img-fluid"
         style="margin-left: 50px; margin-bottom: -70px;">
</div>

<div class="container" style="margin-top: 140px;">
    <img src="inteligencia.png"
         style="width:250px; margin-left:45px; margin-top:90px; margin-bottom:30px;"
         class="d-block">
</div>


<!-- CARDS -->
<div class="container mb-5">
    <div class="row g-4">

        <?php
        $cards1 = [
            "notas-conjuntura.png",
            "icpleite.jpeg",
            "indicadores.jpeg",
            "boletim.jpeg",
            "radar.jpeg",
            "publicacao.jpeg",
            "videocast.jpeg",
            "observatorio.jpeg",
            "observatorio2.jpeg"
        ];

        foreach($cards1 as $img){
            echo '
            <div class="col-md-4">
                <div class="card card-hover">
                    <img src="'.$img.'" class="card-img-custom">
                </div>
            </div>';
        }
        ?>

    </div>
</div>

<div class="container">
    <img src="e&f.png"
         style="width:470px; margin-left:45px; margin-top:90px; margin-bottom:30px;"
         class="d-block">
</div>

<div class="container mb-5">
    <div class="row g-4">

        <?php
        $cards2 = [
            "numeros.png",
            "mapas.jpeg",
            "simula.jpeg"
        ];

        foreach($cards2 as $img){
            echo '
            <div class="col-md-4">
                <div class="card card-hover">
                    <img src="'.$img.'" class="card-img-custom">
                </div>
            </div>';
        }
        ?>

    </div>
</div>

<!-- ÁREAS -->
<div class="container">
    <img src="areas.png"
         style="width:320px; margin-left:45px; margin-top:90px; margin-bottom:30px;"
         class="d-block">
</div>

<div class="container mb-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card card-hover">
                <img src="numeros.png" class="card-img-custom">
            </div>
        </div>
    </div>
</div>

<!-- RODAPÉ -->
<div class="mt-5">
    <?php include('rodape.php');?>
</div>

</body>
</html>