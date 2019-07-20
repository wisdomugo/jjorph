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
<div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
        <li data-target="#my-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/slides/orph2.jpg" alt="Hero Slide">

            <!--<div class="carousel-caption">
                <h1>Strategic Management</h1>

                <p>Efficiently develop parallel e-markets through impactful outsourcing.<br>Conveniently drive prospective functionalities before.</p>
            </div>-->
        </div>
        <div class="item">
            <img src="img/slides/orph3.jpg" alt="...">

            <!--<div class="carousel-caption">
                <h1>Market Analyst</h1>

                <p>Synergistically enhance low-risk high-yield testing procedures<br>with clicks-and-mortar architectures.
                </p>
            </div>-->
        </div>
        <div class="item">
            <img src="img/slides/orph4.png" alt="...">

            <!--<div class="carousel-caption">
                <h1>Customer Care</h1>

                <p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. <br>Continually unleash unique
                    niches after go forward.</p>
            </div>-->
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #my-carousel-->



<section class="section-content-left-icon">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left-icon-wraper">
                    <div class="icon">
                        <i class="flaticon-tags"></i>
                    </div>

                    <div class="content">
                    <h2>Motherless Babies Care</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-ranking"></i></div>

                <div class="content">
                    <h2>Orphanage children care</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-monitoring"></i></div>

                <div class="content">
                     <h2>Counselling Services</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-blogging"></i></div>

                 <div class="content">
                     <h2>Another Service</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                 </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-social-media"></i></div>

                 <div class="content">
                     <h2>Another Service 2</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                 </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-viral-marketing"></i></div>

                <div class="content">
                    <h2>Another Service Again</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- .container -->
</section>
<!-- /.services-left-icon -->

<section class="featured-box">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="featured-content-wrapper">
            <div class="featured-img">
                <img class="img-responsive img-thumbnail" src="img/feat1.jpg" alt="" style="width:90%;">
            </div>
            <div class="featured-content">
                <h1>We Spread the Love of Christ just this way</h1>
                <p>
                    Few words and charge about care giving, How souls can be touched and joy spread all over. Can all and sundry see this as the major purpose of existence, the world would have been a better place to live in and there is no other better way to achieve it than through love showing.
                </p>
                <h5>Evang. Mrs Cecilia Okeke <small>Director/Founder </small></h5>
                <a href="about.php" class="btn btn-default btn-lg">More About Us</a>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- /.featured-box -->

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


<!-- /.client-logo -->

<section class="case-studies">
    <div class="container">
        <div class="section-title text-center">
            <h1>From our gallery</h1>
            <p>Few Photo speaks</p>
        </div>

        <div class="row">
              <div class="col-md-2"></div>
                <div class="col-md-8">
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
                <div class="col-md-2"></div>

        </div>


        <div class="row">
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="img/img-case-sudies-1.png" alt="case sudies.png">
                    <!--<h2>Solving the problem</h2>-->
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
<!-- /.client-logo -->


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
