<?php $__env->startSection('content'); ?>
<style type="text/css">
.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
.bs-example{
	margin: 20px;
}

.carousel-inner > .item > img{
       width:640px;
       height:360px;
     }

</style>
<div class = "container">
<!---carousel-->
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://blog.motorcycle.com.vsassets.com/wp-content/uploads/2013/05/051613-2013-vespa-946.jpg" alt="First Slide">
            <div class="carousel-caption">
      	<h3>Your Own Ride</h3>
      </div>
    </div>

            <div class="item">
                <img src="https://a2ua.com/vespa/vespa-001.jpg" alt="Second Slide">
                <div class="carousel-caption">
        <h3>Your Own Style</h3>
      </div>
    </div>
            
            <div class="item">
                <img src="http://logodatabases.com/wp-content/uploads/2012/03/vespa-logo.gif" alt="Third Slide">
            <div class="carousel-caption">
        <h3>Your Own Brand</h3>
      </div>
    </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<div class = "row">
    <div class="col-xs-8">lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
    orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit orem ipsum dolor sit ametorem ipsum dolor sit ametorem ipsum dolor sit ametorem ipsum dolor sit ametorem ipsum dolor sit ametorem ipsum dolor sit ametorem ipsum dolor sit ametorem ipsum dolor sit ametorem ipsum dolor sit ametorem ipsum dolor sit amet</div>
    <div class="col-xs-4">My name is Rizki Adrian</br>Im 21 years old</br>Line:Radrian</br>facebook:Radrian</br> 
    </div>

</div>
</div>



<!---end carousel-->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>