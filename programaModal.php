<!-- Modal: Programa del Evento -->
<div class="modal fade" id="programaModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content modal-dark">
                <div class="modal-header modal-header--gradient">
                    <h5 class="modal-title">Programa del Evento</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="programa-grid programa-grid--3">


                    <?php
                    include ('conexion.php');

                    $consulta = "SELECT descripcion, titulo, orden FROM programa";
                    $elementos = $c->query($consulta);

                    while ($elemento = $elementos->fetch_assoc()):

                    ?>

                        <div class="programa-card">
                            <div class="programa-card-top">
                                <div class="programa-step-num">
                                    <?php
                                        echo $elemento['orden'];
                                    ?>
                                </div>
                                
                                <p class="programa-step-title">
                                    <?php
                                        echo $elemento["titulo"];
                                    ?>
                                </p>
                            </div>
                            <div class="programa-card-body">
                                <p>
                                    <?php
                                        echo $elemento["descripcion"];
                                    ?>
                                </p>
                            </div>
                            
                        </div>

                        <?php endwhile; ?>

                        
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-modal-close" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>