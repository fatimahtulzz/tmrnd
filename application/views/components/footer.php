



</div>





        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo js_url ()?>jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo js_url ()?>bootstrap.min.js"></script>


        <?php
            if (isset ($js)) {
                foreach ($js as $j)
                    echo '<script src="'.js_url ().$j.'"></script>';
            }
        ?>


    </body>
</html>
