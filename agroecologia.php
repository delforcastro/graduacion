<?php
include ('conexion.php');

$consulta = "SELECT nombre, apellido FROM agroecologia";
$alumnos = $c->query($consulta);
?>

<div class="container mt-4" id="agroecologia">
    <h3 class="text-center text-capitalize group-title">Tecnicatura Superior en Agroecología</h3>
    <div class="row text-center"></div>
        
    <div class="graduates-list group-agroecologia">
        
            <?php while ($alumno = $alumnos->fetch_assoc()): ?>
                
                <div class="graduate-card reveal">
                    <p class="grad-name">
                    <?php
                        echo "{$alumno['apellido']}, {$alumno['nombre']}";
                        ?>
                    </p>
                </div>
                
            <?php endwhile; ?>
    </div>
    </div>
</div>