<?php
include ('conexion.php');

$consulta = "SELECT nombre, apellido FROM gastronomia";
$alumnos = $c->query($consulta);
?>

<div class="container mt-4" id="gastronomia">
    <h3 class="text-center text-capitalize group-title">Tecnicatura Superior en Gastronomía</h3>
    
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