<!DOCTYPE html>
<html>
  
<!--  head of the top section-->
  <?php include('head.php') ?> 
  
  <head>
    <style>
      .gallery {
        margin: 5px;
        margin-left: 350px;
        border: 4px solid white;
        float: left;
        width: 800px;
      }

      .gallery:hover {
        border: 4px solid #777;
      }

      .gallery img {
        width: 100%;
        height: auto;
      }

      .des {
        padding: 15px;
        text-align: center;
        color: #FFFFFF;
        font-size: 20px;
        margin-top: 10px;
      }
    </style>
  </head>
  
<body>
  
  <div class="mainsection">
    
  <img src="logo1.png" alt="Organic Batch" width="120" height="120" style="width:145px">
      
        <div class="header">
            <h1 class="nahosl">Handy Cleaning Clinic Service SriLanka</h1>
            <h2 class="dep">"WE CAN PROVIDE BEST CLEANING SERVICE FOR YOU"</h2>
        </div>

        <div class="navbar">
            <a href="index.php">HOME</a>
            <a href="companyDetails.php">COMPANY DETAILS</a>
            <a href="service.php">BOOK SERVICE</a>
            <a class="active" href="gallery.php">GALLERY</a>
          <a href="aboutUs.php">ABOUT US</a>
            <a href="contactUs.php">CONTACT US</a>
    
              <div class="dropdown">
      
                <button class="dropbtn">LOGIN OR REGISTER </button>
        
                  <div class="dropdown-content">
                      <a href="ownerLogin.php">OWNER</a>
                      <a href="cleanerLogin.php">CLEANER</a>
                      <a href="adminLogin.php">ADMIN</a>
                  </div>
            </div> 
        </div>
  </div>
  
  <div class="gallerysection">
    
    <div class="gallery">
      <a target="_blank" href="home12.jpg">
      <img src="home12.jpg" alt="Our Cleaning team" width="600" height="400">
      </a>
      <div class="des">Our Cleaning team</div>
    </div>

    <div class="gallery">
      <a target="_blank" href="slide2.jpg">
      <img src="slide2.jpg" alt="Our outdoor cleaners" width="600" height="400">
      </a>
      <div class="des">Our outdoor cleaners</div>
    </div>

    <div class="gallery">
      <a target="_blank" href="slide3.jpg">
      <img src="slide3.jpg" alt="Our indoor cleaners" width="600" height="400">
      </a>
      <div class="des">Our indoor cleaners</div>
    </div>

    <div class="gallery">
      <a target="_blank" href="slide4.jpg">
      <img src="slide4.jpg" alt="Our deep-cleaning service" width="600" height="400">
      </a>
      <div class="des">Our deep-cleaning service</div>
    </div>

    <div class="gallery">
      <a target="_blank" href="slide1.jpg">
      <img src="slide1.jpg" alt="Our indoor window cleaning service" width="600" height="400">
      </a>
      <div class="des">Our indoor window cleaning service</div>
    </div>
	  
    <div class="gallery">
      <a target="_blank" href="staff1.jpg">
      <img src="staff1.jpg" alt="staff" width="600" height="400">
      </a>
      <div class="des">Our department's staff</div>
    </div>
	  
    <div class="gallery">
      <a target="_blank" href="slide55.jpg">
      <img src="slide55.jpg" alt="nano" width="600" height="400">
      </a>
      <div class="des">Our outdoor window cleaning service</div>
    </div>
	  
  </div>
  
  
<div style="margin-top: 2500px;"><?php include('footer.php') ?></div>
  
</body>
</html>