<?php
$pageTitle = "AR - CounterTops";
$description = "Countertops repaired and resurfaced by Apartments Resurfacing; a Phoenix based resurfacing company." ;
$section = "counters";

include_once($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php");
 ?>
 <?php  include(ROOT_PATH . "inc/counterWarningModal.php");?>


    <div class="container-fluid ">

<a href="#counter-warning" data-toggle="modal" data-target="#counter-warning"><h3 class="counter-warning text-danger">Warning regarding the resurfacing of countertops</h3></a>

      <div class="jumbotron">

        <p class="phone-num">602-468-0739</p>


        <h1> Countertops</h1>
        <!-- <div class="container"> -->

          <div class="row">
            <div class="col-xs-12">
                <p>What was stylish 15 years ago isn’t necessarily stylish now.  Whether you need an upgrade in design or your countertops have seen better days, AR can make them beautiful.  We can even simulate stone for a fraction of the price of granite.  Almost any countertop can be resurfaced to look great again, even if these common repairs are needed:</p>
       </div>
     </div>





 <!-- slider pro version -->
     <div id="tubs-sp" class="slider-pro">
   		<div class="sp-slides">
   			<div class="sp-slide">
   				<a href="<?php echo BASE_URL?>img/counters-new/seam-repair-before-n-after.jpg">
   					<img class="sp-image" src="<?php echo BASE_URL?>css/images/blank.gif"
   						data-src="<?php echo BASE_URL?>img/counters-new/seam-repair-before-n-after.jpg"/>
   				</a>
   				<p class="sp-caption">Seam repair before and after</p>
   			</div>

   	        <div class="sp-slide">
   				<a href="<?php echo BASE_URL?>img/counters-new/new-burn-before-n-after.jpg">
   	        		<img class="sp-image" src="<?php echo BASE_URL?>css/images/blank.gif"
   	        			data-src="<?php echo BASE_URL?>img/counters-new/new-burn-before-n-after.jpg"/>
   	        	</a>
   	        	<p class="sp-caption">Burn repair before and after</p>
   			</div>

   			<div class="sp-slide">
   				<a href="<?php echo BASE_URL?>img/counters-new/outdated-before-n-after.jpg">
   					<img class="sp-image" src="<?php echo BASE_URL?>css/images/blank.gif"
   						data-src="<?php echo BASE_URL?>img/counters-new/outdated-before-n-after.jpg"/>
   				</a>
   				<p class="sp-caption">Outdated colors before and after resurfacing</p>
   			</div>

   			<div class="sp-slide">
   				<a href="<?php echo BASE_URL?>img/counters-new/cracked-sink-before-n-after.jpg">
   					<img class="sp-image" src="<?php echo BASE_URL?>css/images/blank.gif"
   						data-src="<?php echo BASE_URL?>img/counters-new/cracked-sink-before-n-after.jpg"/>
   				</a>
   				<p class="sp-caption">Cracked bath sink/counter combo before and after resurfacing</p>
   			</div>

   			<div class="sp-slide">
   				<a href="<?php echo BASE_URL?>img/counters-new/sink-counter-combo-before-n-after.jpg">
   					<img class="sp-image" src="<?php echo BASE_URL?>css/images/blank.gif"
   						data-src="<?php echo BASE_URL?>img/counters-new/sink-counter-combo-before-n-after.jpg"/>
   				</a>
   				<p class="sp-caption">Bath sink/counter combo before and after resurfacing</p>
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
