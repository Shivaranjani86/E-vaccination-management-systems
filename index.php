<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="style1.css">
  <title>EVMS</title>
</head>
<body>
    <header class="header">
      <!--nav bar-->
      <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> Medivac</a>
      <nav class="navbar">
        <a href="#Home"><i class="fas fa-home"></i>Home</a>
        <a href="#About"><i class="fas fa-user"></i>About</a>
        <a href="#Services"><i class="fa fa-ambulance"></i>Services</a>
        <a href="#Book"><i class="fas fa-book"></i>Book</a>
        <a href="#Doctors"><i class="fas fa-user-md"></i>Doctors</a>
        <a href="#Dashboard"><i class="fas fa-syringe"></i>Dashboard</a>
        <a href="indes.php"><i class="fas fa-user"></i>Login</a>
        <a href="registration.php"><i class="fas fa-user-edit"></i>Register</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
      

      <!--end of nav bar-->
    </header>

    <!--Home section starts -->
    <section class="home" id="Home">
      <div class="image">
        <img src="pics/medicine-animate.svg" alt="">
        
      </div>
      <div class="content">
        <h3>Vaccines are the Tugboats of preventive health</h3>
        <p>Get vaccinated and lead a happy,healthy and wealthylife</p>
        <a href="#Footer" class="btn">contact us<span class="fas fa-chevron-right"></span></a>

      </div>

    </section>

    <!--Home section ends-->
    <!--icon section start-->
   <section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>140+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1140+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>300+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

   </section>
    <!--icon section ends-->
    <!--About section starts-->
  <section class="about" id="About">
    <h1 class="heading">ABOUT US</h1>
    <div class="row">
      <div class="image">
          <img src="pics/health-professional-team-animate.svg">
      </div>
      <div class="content">
          <h3>Prevention is better than cure</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>        
    </div>
</section>
<!--about section ends-->
    <!--services section starts-->
    <section class="services" id="Services">

      <h1 class="heading"> our services <span></span> </h1>
  
      <div class="box-container">
  
          <div class="box">
              <i class="fas fa-notes-medical"></i>
              <h3>free checkups</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
              <a href="https://www.bing.com/news/search?q=child+immunization+news&qs=n&form=QBNT&sp=-1&pq=child+immunization+news&sc=0-23&sk=&cvid=D0750216ACB343B99C38AFD7D5DE5D21" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
  
          <div class="box">
              <i class="fas fa-ambulance"></i>
              <h3>24/7 ambulance</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
              <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
  
          <div class="box">
              <i class="fas fa-user-md"></i>
              <h3>expert doctors</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
              <a href="#Doctors" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
  
          <div class="box">
              <i class="fas fa-pills"></i>
              <h3>medicines</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
              <a href="https://www.1mg.com/" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
          <div class="box">
              <i class="fas fa-bed"></i>
              <h3>Bed facility</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
              <a href="bedfacility.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
          <div class="box">
            <i class="fas fa-syringe"></i>
            <h3>Vaccines</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="table.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
      </div>
  </section>
    <!--services section ends-->
     <!--book section starts-->
     <section class="book" id="Book">
        <h1 class="heading">Book now</h1>
        <div class="row">
            <div class="image">
              <img src="pics/online-doctor-animate.svg">
          </div>
          <form action="">
              <h3>Book Appointment</h3>
              <input type="text" placeholder="your name" class="box">
              <input type="number" placeholder="your number" class="box">
              <input type="email" placeholder="your email" class="box">
              <input type="date"   class="box">
              <input type="submit" value="book now" class="btn"> 
          </form>
      </div>
  </section>
  <!--book section ends-->
  <!--Doctor section starts-->
  <section class="doctors" id="Doctors">

    <h1 class="heading"> our doctors </h1>

    <div class="box-container">

        <div class="box">
            <img src="pics/doc-1.jpg" alt="">
            <h3>Elena salvatore</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="pics/doc-2.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="pics/doc-3.jpg" alt="">
            <h3>richard deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="pics/doc-4.jpg" alt="">
            <h3>Damon salvatore</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="pics/doc-5.jpg" alt="">
            <h3>stefan salvatore</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="pics/doc7.jpg" alt="">
            <h3>jimy salvatore</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="pics/doc8.jpg" alt="">
            <h3>Emy salvatore</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="pics/doc-6.jpg" alt="">
            <h3>Hope mickelson</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        
        </div>
    </div>
</section>
<!--doctor section ends-->
<!--Dashboard section starts-->
<section class="dashboard" id="Dashboard">

    <h3 class="heading">Dashboard</h3>
    <div class="dash-container">
    
        
      <center>
        <a href= "addchild.php"><div class="btn"><img src="pics/addchild.png" /><br>Add New Child</div></a>
        <a href= "viewparentchild.php"><div class="btn"><img src="pics/viewchild.png" /><br>View Child Details</div></a></br>
        <a href= "vaccinereminder.php"><div class="btn"><img src="pics/remainder.png" /><br>My Vaccine Reminder</div></a>
        <br><br>
    </center>
    </div>
</section>
<!--Dashboard section ends-->
<!--footer section starts-->
<section class="footer" id="Footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick links</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>home</a>
            <a href="#"><i class="fas fa-chevron-right"></i>About</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Services</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Book</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Doctors</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Dashboard</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Login</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Register</a>
        </div>
        <div class="box">
            <h3>Services</h3>
            <a href="#"><i class="fas fa-notes-medical"></i>free checkups</a>
            <a href="#"><i class="fas fa-ambulance"></i>24/7 ambulance</a>
            <a href="#"><i class="fas fa-user-md"></i>expert doctors</a>
            <a href="#"><i class="fas fa-pills"></i>medicines</a>
            <a href="#"><i class="fas fa-syringe"></i>Vaccine</a>
        </div>
        
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+123-789-4560</a>
            <a href="#"><i class="fas fa-phone"></i>+121-785-4156</a>
            <a href="#"><i class="fas fa-envelope"></i>medivac@gmail.com</a>
            <a href="#"><i class="fas fa-envelope"></i>teamhayush@gmail.com</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>Dharmapuri,india-636701</a>   
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
    </div>
    <div class="credit"> created by <span>Team Ayush</span> |© all rights reserved </div>
</section>
<!--footer section ends-->
<script src="script.js"></script>  
</body>
</html>