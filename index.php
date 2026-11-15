<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>


    <title> Personal Project Portfolio</title>

 <link rel="stylesheet" href="style.css">


</head>
<body>

    <header>
        <nav class="pr-container">
            <ul class="n-links">
                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>

                <li><a href="#projects">My Skills</a></li>
                                <li><a href="#contact">Contact Me </a></li>

            </ul>
        </nav>
    </header>


    <section id="home">

          <table>

                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                      ?>
                        <tr>
                        <td  class="h-subtitle"> Hi, my name is   </td>
                         </tr>

                         <tr>                    
                        <td  class="h-title"><?php echo $row['name']; ?> </td> 
                        </tr>
                          
                        <tr>
                      
                        <td ><b> My Email </b>   <?php echo $row['email']; ?></td>
                        </tr> 

                
                         <tr>
                             <td > <b>My Major </b><?php echo $row['major']; ?></td>

                        </tr>

                         <tr>
                          <td  ><b> UOH ID </b><?php echo $row['UOHID']; ?></td>
   
               
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="7">!! No Data   </td>
                    </tr>
                    <?php
                }
                ?>

        
        </table>



    </section>

    <section id="about">
        <h2 class="section-title">About Me</h2>


                <table>

                <?php
                if ($result2->num_rows > 0) {
                    while ($row = $result2->fetch_assoc()) {

                      ?>


  <tr>
                             <td ><?php echo $row['detail']; ?></td>

                        </tr>
                         <tr>
                          <td  > <?php echo $row['more']; ?></td>
   


                     <?php
                     }
                } else {
                    ?>
                    <tr>
                        <td colspan="7">!! No Data   </td>
                    </tr>
                    <?php
                }
                ?>

        
        </table>


        
            </div>

            <div>

            <br>
                <h3> My Technical Skills</h3>

                 <div class="slideshow-container">


<div class="mySlides ">
  <img src="img2.jpeg" style="width:100%">
</div>

<div class="mySlides ">
  <img src="img1.png" style="width:100%">
</div>

<div class="mySlides ">
  <img src="img3.jpeg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 

</div>
       


             
            </div>
        </div>
    </section>


    
    <section id="projects">
        <h2 class="section-title">My Skills</h2>


                        <div class="skills-container">

    <div class="skill-card">
               <table>

                <?php
                if ($result3->num_rows > 0) {
                    while ($row = $result3->fetch_assoc()) {

                      ?>


                       <tr>

                             <td >1- Programming Languages:  <?php echo $row['skill1']; ?></td>

                        </tr>

   
                           <tr>

                             <td >2- Web Development:<?php echo $row['skill2']; ?></td>

                        </tr>


                           <tr>

                             <td >3-  Databases:<?php echo $row['skill3']; ?></td>

                     <?php
                     }
                } else {
                    ?>
                    <tr>
                        <td colspan="7">!! No Data   </td>
                    </tr>
                    <?php
                }
                ?>

        
        </table>


            </div>
        </div>

                </section>



                <section class="contact-section" id="contact">
  <h2 class="section-title">Contact Me</h2>
<p class="contact-subtitle">Do you have a question or an opportunity for collaboration? I look forward to hearing from you.</p>

			<form role="form" id="contact"  class="contact-form" action="" method="post">

    <div class="form-group">
      <label for="name">  Name</label>
      <input type="text" id="name" name="name"  value="<?php echo $name; ?>" placeholder="Enter Your Name " required>
    </div>

    <div class="form-group">
      <label for="email">  Email</label>
      <input type="email" id="email" name="email" placeholder="example@email.com" value="<?php echo $email; ?>" required>
    </div>

    <div class="form-group">
      <label for="message"> Message</label>
<textarea id="message" name="message" rows="5" placeholder="Write your message here..." value="<?php echo $message; ?>" required></textarea>    </div>

<button  class="submit-btn" name="contact" >Send Message</button>  </form>
</section>


            </body>

            
  <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

</script>

</html>