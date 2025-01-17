<!doctype html>

<html lang="en">

  {% include head.html %}
  {% include header.html %}
  {% include script.html %}
	

  <body>
	    <!-- Begin #carousel-section -->
    <section id="carousel-section" class="section-global-wrapper"> 
        <div class="container-fluid-kamn" align="center">
            <div class="row">
                <div id="carousel-1" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
   
        
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox" style="width:360px; height: 250px !important;">
                        <!-- Begin Slide 1 -->
			  
<?php			    
 $directory = "mytheme/images/myimages";
$images = glob($directory . "/*.jpg");

foreach($images as $image)
{
  echo $image;
}
 ?>
	    
  <div class="directorySlider">
	                 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
	</script> 
	<script src="../js/directorySlider.js"></script>
	
<script>	
	$(document).ready(function(){
	$('.directorySlider').directorySlider({
	animation: 'uncover',
	directory: '../assets/img/slider/',
	extension: 'jpg',
	numslides: 4,
	filebase: 'slide_',
	speed: 3000,
	width: 360,
	height: 250
			});
	});
</script>
     </div>	 
                      
                    </div>		    
			    
			    
                      
                    </div>

     
                </div>
            </div>
        </div>
    </section>
    <!-- End #carousel-section -->


    <!-- Begin #services-section -->
    <section id="services" class="services-section section-global-wrapper">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <h3 class="services-header-title">Our Mission</h3>
                    <p class="services-header-body"><em> Things we provide in Office </em>  </p><hr>
                </div>
            </div>
      
            <!-- Begin Services Row 1 -->
            <div class="row services-row services-row-head services-row-1">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <p class="services-icon"><span class="fa fa-android fa-5x"></span></p>
                        <h4 class="services-title">Android</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated zoomIn" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-apple fa-5x"></i></p>
                        <h4 class="services-title">Apple</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-thumbs-o-up fa-5x"></i></p>
                        <h4 class="services-title">EASY TO USE</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>        
                </div>
            </div>
            <!-- End Serivces Row 1 -->
      
            <!-- Begin Services Row 2 -->
            <div class="row services-row services-row-tail services-row-2">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <p class="services-icon"><span class="fa fa-windows fa-5x"></span></p>
                        <h4 class="services-title">Windows</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated zoomIn" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-eye fa-5x"></i></p>
                        <h4 class="services-title">RETINA READY</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-cube fa-5x"></i></p>
                        <h4 class="services-title">Cubic</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
            </div>
            <!-- End Serivces Row 2 -->
    
        </div>      
    </section>
    <!-- End #services-section -->

  </body>
  
  

  {% include footer.html %}
</html>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
