@extends('layouts.app')


   @section('content')
   <div class="galleryContainer" style="background-color: antiquewhite">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="images/farm6.jpg">1366X768
            <div class="captionText">
            <h2 data-animation="fadeInDown" data-delay="200ms" > Farm output becomes the best when you prepare your land earler</h1>
           <p data-animation="fadeInUp" data-delay="400ms"> Hire a machinery to work on your farm at an affordable price that is very friendly to your pocket </p>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="hire" >LogIn/SignUp</a> </button>
          </div>
        </div>
        <div class="imageHolder">
            <img src="images/farm4.jpg">
            <div class="captionText"> 
              
              <h2 class="slideTextFromBottom" data-animation="fadeInDown" data-delay="200ms" > Post your idle marchinery today and earn</h1>
                <p data-animation="fadeInUp" data-delay="400ms">Earn yourself some income by renting out your machinery to the farmers</p>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="hire" >LogIn/SignUp</a> </button>
              </div>
           
            
        </div>
       
    </div>
    <div id="dotsContainer"></div>
</div>
   <script src="js/script.js"></script>
   
<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>MachineryForYou</span></h2>
      <p>There are many variations of marchinery that best suit your needs. All the marchinery comes in full package as per the activity you require. Choice is on your side</p>
     <button type="submit" class="btn btn-outline-success"> Available machinery
     </button> 
    
    </div>
  </div>
   
<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h4>Cotton picker</h4>
      <img src="images/cotton.jpg" alt="cultivator">
      <p>Get the cotton picker to work for you, it is effiecient, reliable and picks the cotton parfectly. It comes with the driver who workes tirelessely to ensure perfect service  </p>
      <p><a class="btn btn-success" href="#" role="button">More details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Plough</h2>
      <img src="images/plough.jpg" alt="cultivator">
      <p>The plough for your farm. It comes with the tractore that is of high quality with a reliable driver to deliver the best service as per your wish.  </p>
      <p><a class="btn btn-success" href="#" role="button">More details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Combined Harvestor</h2>
      <img src="images/harvestor.jpg" alt="cultivator">
      <p>Its versatile machine designed to efficiently harvest a variety of grain crops. It does three separate harvesting operations—reaping, threshing, and winnowing—into a single process</p>
      <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div>
</div>
</section>
   @endsection
     
