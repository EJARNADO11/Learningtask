<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>


<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Hi Welcome To My Website! I am EJ ARNADO.</h3>
      <span data-aos="fade-up">1st year Student of University Of Saint La Salle</span>
      <p data-aos="fade-up">A USER INTERFACE IS LIKE A JOKE. IF YOU HAVE TO EXPLAIN IT, IT'S NOT THAT GOOD.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">So grateful to be sharing my world with you.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> EJ ARNADO </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> s2120076@usls.edu.ph </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Prk, Dalawidaw, Brgy 16, Bacolod City. </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +123-456-7890 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 19 years old</h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>85%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education</span> </h1>

      <div class="row">

         <div class="box-container">

            <div class="box" data-aos="fade-right">
               <span>( 2009-2015 )</span>
               <h3>Education and Training Center School-1</h3>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2015-2019 )</span>
               <h3>Negros Occidental High School</h3>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2021 )</span>
               <h3>Liceo De La Salle Senior High School</h3>
            </div>

         </div>

</section>

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.png" alt="">
         <h3>Learning task 2</h3>
         <ul>
		     <li><a href="recipes.php" target="_blank">CLICK ME</a></li>
		<ul>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-2.jpg" alt="">
         <h3>Learning Task 3</h3>
         <ul>
		     <li><a href="lt3.php" target="_blank">CLICK ME</a></li>
		</ul>	
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-3.png" alt="">
         <h3>Learning Task 4</h3>
         <ul>
		     <li><a href="lt4.php" target="_blank">CLICK ME</a></li>
		</ul>	
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-4.jpg" alt="">
         <h3>Learning Task 5</h3>
         <ul>
		     <li><a href="lt5.php" target="_blank">CLICK ME</a></li>
		</ul>	
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.jpg" alt="">
         <h3>CLE1: Culminating Learning Evidence (Midterm)</h3>
        <ul>
		     <li><a href="cle1.php" target="_blank">CLICK ME</a></li>
		</ul>	
      </div>


   </div>

</section>


<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+123-456-7890</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>s2120076@usls.edu.ph</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Prk, Dalawidaw, Brgy 16, Bacolod City.</p>
      </div>

   </div>

</section>

<div class="credit"> &copy; Copyright <?php echo date('Y'); ?> | by <span>All Rights Reserved.</span> </div>




<script src="js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });	

</script>
   
</body>
</html>