        </div>
        
        <div class="footer">
            <div class="footer-wrapper">
                <div class="footer-menu">
                    <h4><?php echo __("Beauty"); ?></h4>
                    <ul>
                        <li><a href="#" title="Opcion 1">Opcion 1</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 2</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 3</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 4</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 5</a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h4><?php echo __("Home"); ?></h4>
                    <ul>
                        <li><a href="#" title="Opcion 1">Opcion 1</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 2</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 3</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 4</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 5</a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h4><?php echo __("Family"); ?></h4>
                    <ul>
                        <li><a href="#" title="Opcion 1">Opcion 1</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 2</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 3</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 4</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 5</a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h4><?php echo __("Health"); ?></h4>
                    <ul>
                        <li><a href="#" title="Opcion 1">Opcion 1</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 2</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 3</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 4</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 5</a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h4><?php echo __("Sexuality"); ?></h4>
                    <ul>
                        <li><a href="#" title="Opcion 1">Opcion 1</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 2</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 3</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 4</a></li>
                        <li><a href="#" title="Opcion 1">Opcion 5</a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h4>Información</h4>
                    <ul>
                        <li><a href="#" title="Opcion 1">Inicio</a></li>
                        <li><a href="#" title="Opcion 1">Foros</a></li>
                        <li><a href="#" title="Opcion 1">Contacto</a></li>
                        <li><a href="#" title="Opcion 1">Publicidad</a></li>
                        <li><a href="#" title="Opcion 1">Enlaces</a></li>
                    </ul>
                </div>

                <div class="clear"></div>
            </div>

            <div class="footer-copyright">
                <p>Este sitio está bajo una licencia Creative Commons Attribution 3.0 License. Desarrollado por MilkZoft</p>
            </div>
        </div>
        
        <?php echo $this->getJs(); ?>

        <?php
            if(_get("production")) {
        ?>
                <script type="text/javascript">
                    var sc_project = 7655788; 
                    var sc_invisible = 1; 
                    var sc_security = "f167f55b"; 
                </script>

                <script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>
        <?php
            }
        ?>

    </body>
</html>