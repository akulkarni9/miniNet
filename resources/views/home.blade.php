@extends('app')

@section('content')
<div class="container">
	<div class="row">
		
			
				
					<div id="mainCarousel">
    					<div id="myCarousel" class="carousel slide" data-ride="carousel">
      					<!-- Indicators -->
      					<ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
      					</ol>
      					<div class="carousel-inner">
        					<div class="item active">
          						<script
									src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
									</script>
									<script>
									var myCenter=new google.maps.LatLng(12.9114978,77.5814803);
									var marker;
									function initialize()
									{
									var mapProp = {
									  center:myCenter,
									  zoom:15,
									  mapTypeId:google.maps.MapTypeId.ROADMAP
									  };
									var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
									marker=new google.maps.Marker({
									  position:myCenter,
									 // icon:'themes/assets/images/nepali-momo.png',
									  animation:google.maps.Animation.BOUNCE
									  });

									marker.setMap(map);

									// Info open
									var infowindow = new google.maps.InfoWindow({
									  content:"Hello World!"
									  });

									google.maps.event.addListener(marker, 'click', function() {
									  infowindow.open(map,marker);
									  });
									}
									google.maps.event.addDomListener(window, 'load', initialize);
									</script>
									<div id="googleMap" style="height:450px;"></div>
									  <div class="container">
										<div class="carousel-caption">
										  <a class="btn btn-lg btn-default" href="#" role="button" style="font-size:2em">Order Online Now &raquo;</a>
										</div>
									  </div>
									</div>
								</div>
							</div><!-- /.carousel -->
						</div>


<div class="introSection">
	<div class="col-lg-12">
		<h1><center>This is a online food ordering system where users can order any food to their homes</center></h1>
	</div>
</div>



						 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        
        <div class="col-lg-6">
          <img class="img-circle" src="/images/nepali-momo.png" alt="Generic placeholder image">
          <h2>Nepalese MOMO</h2>
          <p>This is the delicious Nepalese Memo prepared by disintguished chefs! Try it out!</p>
          <p><a class="btn btn-default" href="#" role="button">&pound; 2.2 Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-6 -->
        
        <div class="col-lg-6">
		  <img class="img-circle" src="/images/gorkha-special-chicken.png" alt="Lam Tikka">
          <h2>Gurkha Chicken</h2>
          <p>Ever wanted tp try Gurkha chicken? Here is the chance, try it out! </p>
          <p><a class="btn btn-default" href="#" role="button">&pound;4 Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-6-->
      
      </div><!-- /.row -->
	</div>

<div class="container marketing">
    <h2 class="itemsTitle"><center>Breakfast</center></h2>
	<div id="myCarousel1" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
          <center><img src="/images/salads.jpeg" alt="Generic placeholder image"></center>
          <h4><center>Salads</center></h4>
          <center><p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p></center>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <center><img src="/images/rice.jpeg" alt="Generic placeholder image"></center>
          <h4><center>Meals</center></h4>
          <center><p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p></center>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <center><img src="/images/drinks.jpeg" alt="Generic placeholder image"></center>
          <h4><center>Drink</center></h4>
          <center><p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p></center>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
         <div class="row">
        <div class="col-lg-4">
          <center><img src="/images/salads.jpeg" alt="Generic placeholder image"></center>
          <h4><center>Salads</center></h4>
          <center><p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p></center>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <center><img src="/images/rice.jpeg" alt="Generic placeholder image"></center>
          <h4><center>Meals</center></h4>
          <center><p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p></center>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <center><img src="/images/drinks.jpeg" alt="Generic placeholder image"></center>
          <h4><center>Drink</center>></h4>
          <center><p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p></center>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <center><img src="/images/salads.jpeg" alt="Generic placeholder image"></center>
          <h4><center>Salads</center></h4>
          <center><p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p></center>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <center><img  src="/images/rice.jpeg" alt="Generic placeholder image"></center>
          <h4><center>Meals</center></h4>
          <center><p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p></center>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <center><img  src="/images/drinks.jpeg" alt="Generic placeholder image"></center>
          <h4><center>Drinks</center></h4>
          <center><p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p></center>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	</div>


	</div>
</div>
<div class="footer">
	<p>This is a footer</p>
</div>
@endsection
