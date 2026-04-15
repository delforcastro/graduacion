<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acto de Colación 2026 | Instituto Benavento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>


    <?php
        include_once('portada.php');
        include_once('rector.php');
        include_once('programa.php');
        include_once('botones.php');

    ?>
    
    <section id="egresados" class="section-graduates reveal">
        <div class="container-narrow">
            <header class="section-header">
                <h2>Nuestros Egresados</h2>
            </header>
            <div class="graduates-wrapper">
                <?php
                    include_once('agroecologia.php');
                    include_once('enfermeria.php');
                    include_once('enologia.php');
                    include_once('gastronomia.php');
                    include_once('software.php');

                ?>
            </div>
        </div>
    </section>


    <?php
        include_once('menuflotante.php');
        include_once('footer.php');
        include_once('programaModal.php');
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>