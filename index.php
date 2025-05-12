<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- favicon icon -->
 <link rel="icon" href="images/my-dp.png" type="image/png" style="border-radius: 50%;">
</head>
<body>
    <?php
include 'connect.php';

?>
    <!-- header part -->
    <header>

<div class="logo"><span>S</span>herry.
</div>
<ul class="navlist">
<!-- <i id="menu-close-button" class="fas fa-times menu-close"></i> -->

    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#contact">Contact</a></li>

</ul>
        <!-- Close Menu icon -->
<!-- <i id="menu-open-button" class="fas fa-bars menu-open"></i> -->

<div id="menu-icon" class="bx bx-menu"></div>


</header> 
<!-- Home section  -->
<section id="home" class="home">
    <div class="home-content">
      <h1>Hi, my name is Ann Macharia</h1>
      <div class="change-text">
        <h3 style="color: white; margin-left: 0;">and I'm a</h3>
        <h3>
        <span class="word first-word">Frontend&nbsp;developer</span>
        <span class="word">Backend&nbsp; developer</span>
        <span class="word">Web&nbsp;designer</span>
        <span class="word">Graphic&nbsp;designer</span>
    </h3>
      </div>
      
   
        <p>I'm a passionate and motivated software developer at the beginning of my journey, eager to learn,
             build, and grow in the tech world.</p>
             <div class="info-box">
                <div class="email-info">
                   <h5>Email : </h5>
                   <span>sherryann478@gmail.com</span> 
                </div>

                <div class="contact" style='background: #250821; margin-left: 20px;'>
                    <h5>contact : </h5>
                    <span>0710606816</span> 
                 </div>
             </div>

             <div class="btn-box">
                <a href="download.php" class="btn">Download CV</a>
                <a href="#contact" class="btn">Hire Me</a>
             </div>

             <div class="social-icons">
                <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
                <a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.linkedin.com/in/ann-macharia-873b77254/"><i class='bx bxl-linkedin-square'></i></a>
             </div>
    </div>

    <div class="home-image">
        <div class="img-box">
            <img src="images/my-dp.png" alt="">
        </div>
    </div>
</section>

<!-- About section  -->
 <section id="about" class="about">
    <div class="img-about">
        <img src="images/dp.png" alt="">
        <div class="info-about1">
            <span>2</span>
            <p>Years of experience</p>
        </div>

        <div class="info-about2">
            <span>10+</span>
            <p>Complete Projects</p>
        </div>

        <div class="info-about3">
            <span>15+</span>
            <p>Satisfied clients</p>
        </div>
    </div>

    <div class="about-content">
        <span>Let me introduce myself</span>
        <h2>About Me</h2>
        <h3>I &nbsp;I'm</h3>
        <p>a software engineer passionate about building efficient, user-friendly applications. I enjoy solving problems through code and constantly
            improving my skills in backend and
             frontend technologies.</p>
             <!-- <div class="btn-box">
                <a href="#" class="btn">Read More!</a>
             </div> -->
    </div>
 </section>



 <!-- Services section  -->
<section id="services" class="services">
    <div class="main-text">
        <span>what i will do for you</span>
        <h2>My Services</h2>
    </div>

    <div class="section-services">
        <div class="services-box">
            <i class="fas fa-layer-group service-icon"></i>
            <h3>Frontend Developer</h3>
            <p>I design and implement responsive, user-friendly interfaces using HTML, CSS, and JavaScript. I aim to deliver 
                smooth user experiences across devices and browsers.</p>
              <!-- <div class="btn-box services-btn" style="justify-content: center;align-items: center; margin: 15px auto;">
              <a href="#" class="btn" >Read More</a>
              </div>  -->
              </div>

              <div class="services-box">
                <i class="fas fa-code service-icon" ></i>
                <h3>Graphic Designer</h3>
                <p>I create clean, engaging visuals for websites and social media using tools like Canva. My 
                    designs focus on clarity, consistency, and brand appeal.</p>
                  <!-- <div class="btn-box services-btn" style="justify-content: center;align-items: center; margin: 15px auto;">
                  <a href="#" class="btn">Read More</a>
                  </div>  -->
            </div>

            <div class="services-box">
                <i class="fas fa-desktop service-icon"></i>
                <h3>Backend Developer</h3>
                <p>I develop robust backend systems using PHP and MySQL, focusing on performance, data security, and smooth API integration. I ensure that the logic behind 
                    web applications is reliable and scalable.</p>
                  <!-- <div class="btn-box services-btn" style="justify-content: center;align-items: center; margin: 15px auto;">
                  <a href="#" class="btn">Read More</a>
                  </div>  -->
            </div>
        </div>
</section>

 <!-- Skills section  -->
<section id="skills" class="skills">
    <div class="main-text">
        <span>technical and professional</span>
        <h2>My Skills</h2>
    </div>

    <div class="skill-main">
        <div class="skill-left">
            <h3>Technical Skills</h3>
            <div class="skill-bar">
                <div class="info">
                    <p>HTML & CSS</p>
                    <p>90%</p>
                </div>
                <div class="bar">
                    <span class="html"></span>
                </div>
            </div>

            <div class="skill-bar">
                <div class="info">
                    <p>Figma</p>
                    <p>80%</p>
                </div>
                <div class="bar">
                    <span class="figma"></span>
                </div>
            </div>

            <div class="skill-bar">
                <div class="info">
                    <p>PHP & MySQL</p>
                    <p>77%</p>
                </div>
                <div class="bar">
                    <span class="php"></span>
                </div>
            </div>

            <div class="skill-bar">
                <div class="info">
                    <p>JavaScript</p>
                    <p>35%</p>
                </div>
                <div class="bar">
                    <span class="javascript"></span>
                </div>
            </div>
        </div>

        <div class="skill-right">
            <h3>Professional Skills</h3>
            <div class="professional">
                <div class="box">
                    <div class="circle" data-dots="50" data-percent="90"></div>

                    <div class="text">
                        <big>90%</big>
                        <small>Team Work</small>
                    </div>
                </div>

                <div class="box">
                    <div class="circle" data-dots="30" data-percent="80"></div>

                    <div class="text">
                        <big>80%</big>
                        <small>Creativity</small>
                    </div>
                </div>

                <div class="box">
                    <div class="circle" data-dots="80" data-percent="50"></div>

                    <div class="text">
                        <big>50%</big>
                        <small>Project Management</small>
                    </div>
                </div>

                <div class="box">
                    <div class="circle" data-dots="80" data-percent="75"></div>

                    <div class="text">
                        <big>75%</big>
                        <small>Communication</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- Portfolio section  -->
  <section id="portfolio" class="portfolio">
    <div class="main-text">
        <span>Go through my work</span>
        <h2>Latest projects</h2>
    </div>

        <div class="portfolio-gallery">
        <div class="port-box">
            <div class="port-image">
            <img src="images/coding2.jfif" alt="">
            </div>
          <div class="port-content">
              <h3>Shahada Website - Recreated</h3>
              <p>Shahada is a web platform designed for Zetech University students to check their graduation status, download graduation documents, and stay
                 updated on graduation-related information.</p>
            <a href="https://github.com/Macharia-Ann/final_zetech_shahada-website"><i class="fas fa-arrow-up-right-from-square"></i></a>

       </div>
        </div>

        <div class="port-box">
            <div class="port-image">
            <img src="images/code-comp.jpg" alt="">
            </div>
          <div class="port-content">
              <h3>Ecommerce CRUD Website</h3>
              <p>This is a simple eCommerce website built with PHP and MySQL that allows users to browse products, add them to a cart, and place orders. It includes user
                 authentication and basic order processing features.</p>
            <a href="https://github.com/Macharia-Ann/Complete-Ecommerce--Website"><i class="fas fa-arrow-up-right-from-square"></i></a>

       </div>
        </div>

           <div class="port-box">
            <div class="port-image">
            <img src="images/code-night.jpg" alt="">
            </div>
          <div class="port-content">
              <h3>Coffee Shop Website</h3>
              <p>Grab Coffee is a stylish and responsive website for a coffee shop. It highlights the shop’s products and services
                 with a user-friendly interface.</p>
            <a href="https://github.com/Macharia-Ann/Coffee-Shop-Website" target="_blank" rel="noopener noreferrer"><i class="fas fa-arrow-up-right-from-square"></i></a>

       </div>
        </div>
        
        <div class="port-box">
            <div class="port-image">
            <img src="images/code-hands.jfif" alt="">
            </div>
          <div class="port-content">
              <h3>The president's Official Website - Recreated</h3>
              <p>A modern replica of President William Ruto’s official website, built to practice responsive web design, layout structuring, and clean UI 
                development using HTML, CSS, and JavaScript.</p>
            <a href="https://github.com/Macharia-Ann/president-website"><i class="fas fa-arrow-up-right-from-square"></i></a>

       </div>
        </div>

     

        <div class="port-box">
            <div class="port-image">
            <img src="images/coding.jfif" alt="">
            </div>
          <div class="port-content">
              <h3>Zetech University Official Website - Recreated</h3>
              <p>A responsive and informative website built to showcase Zetech University’s academic offerings, campus life,
                 and admission processes.</p>
            <a href="https://github.com/Macharia-Ann/Zetech-University-Website"><i class="fas fa-arrow-up-right-from-square"></i></a>

       </div>
        </div>

        <div class="port-box">
            <div class="port-image">
            <img src="images/work-desk.jpg" alt="">
            </div>
          <div class="port-content">
              <h3>Weather App With API</h3>
              <p>integrated server-side logic, databases, and APIs to power dynamic, secure,
                 and scalable web applications.</p>
            <a href="https://github.com/Macharia-Ann/Weather-Application-"><i class="fas fa-arrow-up-right-from-square"></i></a>

       </div>
        </div>
    </div>
    </div>
  </section>
 <!-- Contact section  -->
<section id="contact" class="contact">
<?php
//submit message to portfolio table
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    //check if message has been sent
    $select="select * from `portfolio` where message='$message'";
    $result=mysqli_query($conn,$select);
    $num=mysqli_num_rows($result);
    if($num>0){
        echo "<script>alert('Thanks for your message, getting back to you shortly..')</script>";

    }
    else{
  
    $insert="insert into `portfolio` (name,email,address,number,message) 
    values('$name','$email','$address',$phone,'$message')";
    $res=mysqli_query($conn,$insert);
    if($res){
        echo "<script>alert('Thanks for your reaching out, expect my response shortly..')</script>";
    }
}

      
    }
?>
  <div class="main-text">
        <span>For any further enquiries</span>
        <h2>Contact Me</h2>
    </div> 
    
    <form action="#" method="post">
        <input type="text" required name="name"placeholder="Your name">
        <input type="email" required name="email" placeholder="Your email">
        <input type="text" required name="address" placeholder="Your address">
        <input type="text" required name="phone" placeholder="Phone Number">
        <textarea required name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <div class="btn-box formBtn">
            <button type="submit" name="submit" class="btn">Send Message</button>
        </div>
    </form>
</section>


 <!-- Footer section  -->
<footer>
    <p>Copyright &copy; 2025 by Sherry. Made with <span style='color: #12e7ff; font-size: 22px;'>♥</span> || All Rights Reserved</p>
    <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
    
</footer>


<script src="script.js"></script>
</body>
</html>

