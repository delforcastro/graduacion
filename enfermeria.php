<?php
include ('conexion.php');

$consulta = "SELECT nombre, apellido FROM enfermeria";
$alumnos = $c->query($consulta);
?>

<div class="container mt-4" id="enfermeria">
    <h3 class="text-center text-capitalize group-title">Tecnicatura Superior en Enfermería</h3>
    
    <div class="graduates-list group-agroecologia">
        
            <?php while ($alumno = $alumnos->fetch_assoc()): ?>
                
                <div class="graduate-card reveal">
                    <p class="grad-name">
                    <?php
                        echo $alumno['apellido'] . ", " . $alumno['nombre'];
                        ?>
                    </p>
                </div>
                
            <?php endwhile; ?>

    </div>
</div>