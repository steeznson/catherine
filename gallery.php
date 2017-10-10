<?php
include "./header_nav.php";
?>

<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="media/belljarbluegoose2.jpg">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="media/belljardalicabinet2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="media/belljarduck2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="media/belljarelephant2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="media/belljarflower2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="media/belljarhare2.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="media/belljarhook2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="media/belljarskull2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="media/belljarspoon2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="media/lettersflowers.jpg"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="media/belljarbluegoose2.jpg"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="media/belljardalicabinet2.jpg"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="media/belljarduck2.jpg"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="media/belljarelephant2.jpg"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="media/belljarflower2.jpg"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="media/belljarhare2.jpg"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img src="media/belljarhook2.jpg"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="media/belljarskull2.jpg"></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img src="media/belljarspoon2.jpg"></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img src="media/lettersflowers.jpg"></div>
                                    
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>

<?php
echo "<small>&copy; Catherine Stevenson " . date('Y') . "</small>";
?>

</body>
</html>
