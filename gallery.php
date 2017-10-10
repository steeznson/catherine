<?php
include "./header_nav.php";
?>

<div class="container">

        <div class="row" id="gallery">
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
  		<!-- Indicators -->
  		<ol class="carousel-indicators">
    			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    			<li data-target="#myCarousel" data-slide-to="1"></li>
    			<li data-target="#myCarousel" data-slide-to="2"></li>
  		</ol>

  		<!-- Wrapper for slides -->
  		<div class="carousel-inner">
    			<div class="item active">
      				<img src="media/belljarflower2.jpg" alt="Bell Jar Flower">
    			</div>

    			<div class="item">
      				<img src="media/belljarskull2.jpg" alt="Bell Jar Skull">
    			</div>

    			<div class="item">
      				<img src="media/belljarspoon2.jpg" alt="Bell Jar Spoon">
    			</div>
  	       </div><!-- .carousel-inner -->

  		<!-- Left and right controls -->
  		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left"></span>
    			<span class="sr-only">Previous</span>
  		</a>
  		<a class="right carousel-control" href="#myCarousel" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right"></span>
    			<span class="sr-only">Next</span>
  		</a>
	       </div><!--#myCarousel -->
        </div>
        
        <br/>
        <br/>
        
        <div class="row footer">
	        <?php
	                echo "<small>&copy; Catherine Stevenson " . date('Y') . "</small>";
	        ?>
        </div>

</div>

</body>
</html>
