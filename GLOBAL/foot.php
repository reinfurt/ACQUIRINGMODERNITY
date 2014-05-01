<?php
if ( ($live) || ($dev) ) {
?>

        <div id='bottomrightcorner' class="bottomrightcornerContainer">
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
			<a href="<?php echo ($pageName == 'project') ? 'index.php' : 'project.php' ?>">
                        	<canvas id="canvas3" width="200" height="200">
				loading...
        	        	</canvas>
			</a>
		</div>
        </div>

        <div id='bottomleftcorner' class="bottomleftcornerContainer green">
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

<?php
}
?>
	</body>
</html>
