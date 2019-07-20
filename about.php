<?php require_once('includes/header.php'); ?>

<style>
/* Style the Image Used to Trigger the Modal */
.case-studies-content img{
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

.case-studies-content img:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 900px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>


<section class="single-page-title single-page-title-about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>About us</h2>
      </div>
    </div>
  </div>
</section>
<!-- .page-title -->

<section class="about-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Who We Are</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>Jehovah Jireh Orphanage & Motherless Babies Care is a centre for care giving. She is registered under the corporate affairs commission of Nigeria and has been operational since 19.. till date.
          We pride ourselves in lorem ipsum dolor sit amet esc ecta menus ans so on a whole lot of things that should be written under here about the orphanage centre. As you supply them you get to tell more of who you are to people.</p>
        </div>


        <div class="col-md-6 col-sm-12 tabOne" style="position: relative; top: -50px;">

          <div role="tabpanel">
            <!-- Nav tabs -->
            <ul id="tabOne" class="nav nav-tabs nav-justified">
              <li class="active"><a href="#contentOne-1" data-toggle="tab" aria-expanded="true">Our Vision</a></li>
              <li class=""><a href="#contentOne-2" data-toggle="tab" aria-expanded="false">Our Mission</a></li>
              <li class=""><a href="#contentOne-3" data-toggle="tab" aria-expanded="false">Our Goal</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade active in" id="contentOne-1">
                <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed fringilla Donec vitae orci dignissim, faucibus tellus volutpat, rhoncus leo.</p>
              </div>
              <div class="tab-pane fade" id="contentOne-2">
                <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed fringilla Donec vitae orci dignissim, faucibus tellus volutpat, rhoncus leo.</p>

              </div>
              <div class="tab-pane fade" id="contentOne-3">
                <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed fringilla Donec vitae orci dignissim, faucibus tellus volutpat, rhoncus leo.</p>
              </div>
            </div>

          </div> <!--.tabpanel-->
        </div>

      </div>
    </div>

  </section>
  <!-- .about-text-->



  <section class="case-studies">
      <div class="container">
          <div class="section-title text-center">
              <h1>From our gallery</h1>
              <p>Few Photo speaks</p>
          </div>

          <div class="row">
            <!-- The Modal -->
              <div id="myModal" class="modal">

                <!-- The Close Button -->
                <span class="close">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
              </div>
          </div>

          <div class="row">
              <div class="col-sm-4">
                  <div class="case-studies-content">
                      <img class="img-responsive" src="img/img-case-sudies-1.png" alt="case sudies.png">

                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="case-studies-content">
                      <img class="img-responsive" src="img/img-case-sudies-2.png" alt="case sudies.png">

                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="case-studies-content">
                      <img class="img-responsive" src="img/img-case-sudies-3.png" alt="case sudies.png">

                  </div>
              </div>
          </div><!-- /.row -->

          <div class="row">
              <div class="col-sm-4">
                  <div class="case-studies-content">
                      <img class="img-responsive" src="img/img-case-sudies-4.png" alt="case sudies.png">

                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="case-studies-content">
                      <img class="img-responsive" src="img/img-case-sudies-5.png" alt="case sudies.png">

                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="case-studies-content">
                      <img class="img-responsive" src="img/img-case-sudies-6.png" alt="case sudies.png">

                  </div>
              </div>
          </div><!-- /.row -->
      </div><!-- /.container -->
  </section>
  <!-- .skills -->

  <section class="team-section">
    <div class="container">
      <div class="section-title text-center">
        <h2>Our Management Team</h2>
      </div>
    </div>
    <div class="team-member">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <figure class="thumbnail">
              <a href="#"><img src="img/img-team-1.png" class="img-responsive" alt="Image"></a>
              <figcaption class="caption text-center">
                <h3>Person One</h3>
                <!--<p>Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla.</p>-->
                <hr>
                <ul class="social-links">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </figcaption>
            </figure>
          </div><!-- /.col-sm-4 -->

          <div class="col-sm-4">
            <figure class="thumbnail">
              <a href="#"><img src="img/img-team-2.png" class="img-responsive" alt="Image"></a>
              <figcaption class="caption text-center">
                <h3>Person Two</h3>
                <hr>
                <ul class="social-links">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </figcaption>
            </figure>
          </div><!-- /.col-sm-4 -->

          <div class="col-sm-4">
            <figure class="thumbnail">
              <a href="#"><img src="img/img-team-3.png" class="img-responsive" alt="Image"></a>
              <figcaption class="caption text-center">
                <h3>Person Three</h3>
                <hr>
                <ul class="social-links">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </figcaption>
            </figure>
          </div><!-- .col-sm-4 -->
        </div><!-- .row -->
      </div> <!-- .container -->
    </div>
  </section><!--.team-section-->


  <section class="testimonial">
      <div class="container">
          <div id="testimonialSlider" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <!--  <ol class="carousel-indicators">
                  <li data-target="#testimonialSlider" data-slide-to="0" class="active"></li>
                  <li data-target="#testimonialSlider" data-slide-to="1"></li>
                  <li data-target="#testimonialSlider" data-slide-to="2"></li>
              </ol>-->

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <div class="item active">
                      <blockquote>

                          <p>A passionate call to donate, passionate indeed.. listen and help
                          </p>

                          <ul class="user-details">
                            <a href="" class="btn btn-default btn-lg">Send us a Donation</a>
                          </ul>

                      </blockquote>
                  </div>

              </div>
          </div>
          <!-- #testimonialSlider -->
      </div>
  </section>

  <script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function(e) {
  var forEach = Array.prototype.forEach;
  // Get the modal
  var modal = document.getElementById("myModal");
  var modalImg = document.getElementById("img01");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var galleryImages = document.querySelectorAll('.case-studies-content img');
   forEach.call(galleryImages, function(element) {
     element.onclick = function(){
       modal.style.display = "block";
       modalImg.src = element.getAttribute('src');
     }
   });

   // Get the <span> element that closes the modal
  var closer = document.getElementsByClassName("close")[0];
  closer.onclick = function() {
    modal.style.display = "none";
  }


});
  </script>

  <?php require_once('includes/footer.php'); ?>
