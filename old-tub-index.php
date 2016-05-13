<?php
$pageTitle = "AR - Tubs";
$description = "Tubs repaired and resurfaced by Apartments Resurfacing, a Phoenix based resurfacing company." ;
$section = "tubs";

include_once($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php");
 ?>


    <div class="container-fluid ">


      <div class="jumbotron">

        <p class="phone-num">602-468-0739</p>


        <!-- tubs text -->
        <h1>Tubs</h1>
        <!-- <div class="container"> -->

          <div class="row">
            <div class="col-xs-12">
              <p class="statement">The majority of common issues with tubs can be repaired and made to look as though there were never any problems.  We also offer 24 Hour Paint as an option for faster turnaround.</p>
       </div>
     </div>





 <!-- slider pro version -->
     <div id="tubs-sp" class="slider-pro">
   		<div class="sp-slides">
   			<div class="sp-slide">
   				<a href="<?php echo BASE_URL?>img/porc/oflow-before-n-after.jpg">
   					<img class="sp-image" src="<?php echo BASE_URL?>css/images/blank.gif"
   						data-src="<?php echo BASE_URL?>img/porc/oflow-before-n-after.jpg"/>
   				</a>
   				<p class="sp-caption">Overflow repair work before and after</p>
   			</div>

   	        <div class="sp-slide">
   				<a href="<?php echo BASE_URL?>img/porc/tub-ledge-chipped-before-n-after-v2.jpg">
   	        		<img class="sp-image" src="<?php echo BASE_URL?>css/images/blank.gif"
   	        			data-src="<?php echo BASE_URL?>img/porc/tub-ledge-chipped-before-n-after-v2.jpg"/>
   	        	</a>
   	        	<p class="sp-caption">Porcelain chip repair before and after</p>
   			</div>

   			<div class="sp-slide">
   				<a href="<?php echo BASE_URL?>img/porc/impossible-before-n-after-v2.jpg">
   					<img class="sp-image" src="<?php echo BASE_URL?>css/images/blank.gif"
   						data-src="<?php echo BASE_URL?>img/porc/impossible-before-n-after-v2.jpg"/>
   				</a>
   				<p class="sp-caption">Impossible to clean shower stall before and after</p>
   			</div>

   			<div class="sp-slide">
   				<a href="<?php echo BASE_URL?>img/porc/outdated-before-n-after-v2.jpg">
   					<img class="sp-image" src="<?php echo BASE_URL?>css/images/blank.gif"
   						data-src="<?php echo BASE_URL?>img/porc/outdated-before-n-after-v2.jpg"/>
   				</a>
   				<p class="sp-caption">Outdated tile before and after</p>
   			</div>

   			<div class="sp-slide">
   				<a href="<?php echo BASE_URL?>img/porc/repaired-fg-before-n-after.jpg"">
   					<img class="sp-image" src="<?php echo BASE_URL?>css/images/blank.gif"
   						data-src="<?php echo BASE_URL?>img/porc/repaired-fg-before-n-after.jpg"/>
   				</a>
   				<p class="sp-caption">Large fiberglass tub repair before and after.</p>
   			</div>

        <div class="sp-slide">
          <a href="<?php echo BASE_URL?>img/porc/pink-tub-before-n-after.jpg">
            <img class="sp-image" src="<?php echo BASE_URL?>css/images/blank.gif"
              data-src="<?php echo BASE_URL?>img/porc/pink-tub-before-n-after.jpg"/>
          </a>
          <p class="sp-caption">Pink tub rejuvinated before and after.</p>
        </div>


   		</div>
       </div>

     </div>
     </div>

</div>
<p>&nbsp;</p>
<p>&nbsp;</p>

<!-- script tags for slider Pro -->
<script type="text/javascript" src="<?php echo BASE_URL?>js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>js/jquery.sliderPro.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>libs/fancybox/jquery.fancybox.pack.js"></script>

<script type="text/javascript">
	$( document ).ready(function() {
		$( '#tubs-sp' ).sliderPro({
			width: '50%',
			height: 500,
			aspectRatio: 1.5,
			visibleSize: '100%',
			forceSize: 'fullWidth',
			arrows: true
		});

		// instantiate fancybox when a link is clicked
		$( '#tubs-sp .sp-image' ).parent( 'a' ).on( 'click', function( event ) {
			event.preventDefault();

			// check if the clicked link is also used in swiping the slider
			// by checking if the link has the 'sp-swiping' class attached.
			// if the slider is not being swiped, open the lightbox programmatically,
			// at the correct index
			if ( $( '#tubs-sp' ).hasClass( 'sp-swiping' ) === false ) {
				$.fancybox.open( $( '#tubs-sp .sp-image' ).parent( 'a' ), { index: $( this ).parents( '.sp-slide' ).index() } );
			}
		});
	});
</script>


  </div> <!-- /container -->

 <?php include(ROOT_PATH . "inc/footer.php"); ?>
