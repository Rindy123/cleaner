<!DOCTYPE html>
<html>

<!--  head of the top section-->
  <?php include('head.php') ?> 
  
  <head>

  <style>

  .para{
      margin-top: 500px;
      width: 80%;
      margin-left: 10%;
      margin-right: 10%;
      text-align: justify;
      font-size: 20px;
      color: #FFFFFF;
  }

  .para2{
      width: 80%;
      margin-left: 10%;
      text-align: justify;
      margin-right: 10%;
      margin-top: -30px;
      font-size: 20px;
      color: #FFFFFF;
      }
		
	.p1{
      margin-left: 20px;
      width: 400px;
      margin-top: 0;
      letter-spacing: 1px;
	  color: #ebedee;
    }
		
    .p2{
      margin-left: 15px;
      width: 1000px;
      margin-top: 18px;
	    letter-spacing: 6px;
	    color: #ebedee;
	
    }
    .section3{
      display: flex;
      width: 5%;
      margin-left: 0.1px;
      margin-right: 0.5%;
      margin-top: 100px;
    }

    .section3 img{
      width: 280px;
      height: 280px;
      margin-top: 10px;
    }

    .img3{
      margin-left: 25px;
      width: 350px;
      height: 280px;
    }
    .img4{
      margin-left: 30px;
      margin-right: 10px;
    }
    .t1{
      padding:0;
      width: 120px;
      height: 120px;
      display:flex;
    }
    </style>
  </head>
  
 <body>
   
  <div class="mainsection"> 
    
    <div class="section1">
    <img class="t1" src="logo1.png" alt="Organic Batch" width="120" height="120" style="width:145px">
      
        <div class="header">
            <h1 class="nahosl">Handy Cleaning Clinic Service SriLanka</h1>
            <h2 class="dep">"We can provide best cleaning service for you"</h2>
        </div>

        <div class="navbar">
            <a class="active" href="Home.php">HOME</a>
            <a href="companyDetails.php">COMPANY DETAILS</a>
            <a href="service.php">BOOK SERVICE</a>
            <a href="gallery.php">GALLERY</a>
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
      
      <div class="slideshow" style="width:100%">
        
        <img class="stdpic" src="slide1.jpg" style="width: 100%">
        <img class="stdpic" src="slide2.jpg" style="width: 100%">
        <img class="stdpic" src="slide3.jpg" style="width: 100%">
        <img class="stdpic" src="slide4.jpg" style="width: 100%">
      </div>  
      
      <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("stdpic");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 3000);
          }
      </script>

      
          <div class="para"> 
            <h3 style="text-align: center;">Welcome to the Handy cleaning clinic Service Sri Lanka</h3>
            <p style="padding: 10px">A Handy cleaning clinic service company is a professional cleaning company that specializes in providing cleaning services to medical and healthcare facilities, such as hospitals, clinics, dental offices, and laboratories. The company's primary goal is to provide a clean and sanitary environment for patients, staff, and visitors, thereby reducing the risk of infection and promoting overall health and wellbeing. Handy Cleaning clinic service companies typically offer a wide range of cleaning services, including general cleaning of floors, walls, and surfaces, disinfection of high-touch areas, such as doorknobs, light switches, and handrails, cleaning and sanitizing of bathrooms and kitchens, and the removal of medical waste and other hazardous materials.</p>
      
          </div>
      
          <div class="para2"> 
            <p style="padding: 10px">To ensure the highest level of cleanliness, Handy Handy cleaning clinic service companies employ highly trained and experienced cleaning professionals who are knowledgeable about the latest cleaning techniques, products, and equipment. They also follow strict protocols and adhere to all relevant regulations and guidelines, such as those set forth by the Centers for Disease Control and Prevention (CDC) and the Occupational Safety and Health Administration (OSHA). </p>
          </div>
      
    </div>
    

    </div>
    
    <div class="section2">
      <div class="img1">
        <img src='home12.jpg' style="width:100%">
      </div>
    </div>

	  <div class="section3">
      <img class="img3" src="f1.jpg" alt="f1">
      <p class="p2">Outdoor cleaning services<br>Revitalizing, refreshing, rejuvenating, enhancing, restoring.</p>
      <img class="img3" src="f2.jpg" alt="f2">
      <p class="p2">Indoor cleaning services<br>Dusting, vacuuming, mopping, polishing, wiping, sweeping, disinfecting, deodorizing, tidying, refreshing.</p>
      <img class="img4" src="f3.jpg" alt="f3">
      <p class="p2">Deep cleaning services<br>Thorough, meticulous, detailed, comprehensive, intensive, sanitizing, decluttering, organized, revitalizing, pristine.</p>
      
       </div>
  
  </div>
	 
	<div> <?php include('footer.php') ?></div>
	 
  </body>
</html>