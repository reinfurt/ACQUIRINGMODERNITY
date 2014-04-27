<?php
if ( ($live) || ($dev) ) {
?>

        <div id='01' class="bottomrightContainer">
                <div id='02inner' class='innerContainerRight'>

                <?php
                if ($language == "en") {
                ?>
                <script type="text/javascript" src="JS/animateCircle.js"></script>
                <?php
                } else {
                ?>
                <script type="text/javascript" src="JS/animateCircle-reverse.js"></script>
                <?php
                }
                ?>

                        <div>
                                <canvas id="canvas3" width="200" height="200">
                                loading...
                                </canvas>
                        </div>
                </div>
        </div>

        <div id='04' class="bottomleftContainer green">
        <div id='04inner' class="innerContainerLeft">

        <!-- TIME -->

        <div id='timeWrapper' class='timeContainerWrapper'>
        <div id='time' class='timeContainer helvetica'>

                <script type="text/javascript">
                <!--

                // Init clock

                var currenttime = '<?php echo date("F d, Y H:i:s", time());?>';
                var montharray = new
Array("JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC");
                var serverdate = new Date(currenttime);

                -->
                </script>

                <p id='serverTime'></p>

        </div>
        </div>
        </div>
        </div>

<?php
}
?>
	</body>
</html>
