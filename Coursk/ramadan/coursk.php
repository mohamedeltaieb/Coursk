<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoursK</title>
   
       <link rel="stylesheet" href="coursk.css">
       <link rel="stylesheet" href="chat.css">
       <link rel="icon" type="image/png" href="../imgstart/Coursk.png"/>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
    .chat-bar-collapsible {
    position: fixed;
    bottom: 0;
    right: 50px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.collapsible {
    background-color: rgb(82, 151, 255);
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 350px;
    text-align: left;
    outline: none;
    font-size: 18px;
    border-radius: 10px 10px 0px 0px;
    border: 3px solid white;
    border-bottom: none;
}

.chatcontent {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: #f1f1f1;
}

.full-chat-block {
    width: 350px;
    background: white;
    text-align: center;
    overflow: auto;
    scrollbar-width: none;
    height: max-content;
    transition: max-height 0.2s ease-out;
}

.outer-container {
    min-height: 500px;
    bottom: 0%;
    position: relative;
}

.chat-container {
    max-height: 500px;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    scroll-behavior: smooth;
    hyphens: auto;
}

.chat-container::-webkit-scrollbar {
    display: none;
}

.chat-bar-input-block {
    display: flex;
    float: left;
    box-sizing: border-box;
    justify-content: space-between;
    width: 100%;
    align-items: center;
    background-color: rgb(235, 235, 235);
    border-radius: 10px 10px 0px 0px;
    padding: 10px 0px 10px 10px;
}

.chat-bar-icons {
    display: flex;
    justify-content: space-evenly;
    box-sizing: border-box;
    width: 25%;
    float: right;
    font-size: 20px;
}

#chat-icon:hover {
    opacity: .7;
}

/* Chat bubbles */

#userInput {
    width: 75%;
}

.input-box {
    float: left;
    border: none;
    box-sizing: border-box;
    width: 100%;
    border-radius: 10px;
    padding: 10px;
    font-size: 16px;
    color: #000;
    background-color: white;
    outline: none
}

.userText {
    color: white;
    font-family: Helvetica;
    font-size: 16px;
    font-weight: normal;
    text-align: right;
    clear: both;
}

.userText span {
    line-height: 1.5em;
    display: inline-block;
    background: #5ca6fa;
    padding: 10px;
    border-radius: 8px;
    border-bottom-right-radius: 2px;
    max-width: 80%;
    margin-right: 10px;
    animation: floatup .5s forwards
}

.botText {
    color: #000;
    font-family: Helvetica;
    font-weight: normal;
    font-size: 16px;
    text-align: left;
}

.botText span {
    line-height: 1.5em;
    display: inline-block;
    background: #e0e0e0;
    padding: 10px;
    border-radius: 8px;
    border-bottom-left-radius: 2px;
    max-width: 80%;
    margin-left: 10px;
    animation: floatup .5s forwards
}

@keyframes floatup {
    from {
        transform: translateY(14px);
        opacity: .0;
    }
    to {
        transform: translateY(0px);
        opacity: 1;
    }
}

@media screen and (max-width:600px) {
    .full-chat-block {
        width: 100%;
        border-radius: 0px;
    }
    .chat-bar-collapsible {
        position: fixed;
        bottom: 0;
        right: 0;
        width: 100%;
    }
    .collapsible {
        width: 100%;
        border: 0px;
        border-top: 3px solid white;
        border-radius: 0px;
    }
}
   </style>
</head>

<body>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        let searchIcon = document.querySelector('.search-icon');
        let searchBox = document.querySelector('.search-box');

        searchIcon.addEventListener('click', function () {
            searchBox.classList.toggle('active');
        });
    });
</script>




 <header class="header">

    <a href="#" class="logo" style="color: black;font-size: 20px;"><i class="fas fa-user-graduate" style="color: black;font-weight: bold;">CoursK</i></a>
    <nav class="navbar">
        <a class="active" href="#home" style="font-weight: bold;">home</a>
        <a href="#about" style="font-weight: bold;" >about</a>
        <a href="#course" style="font-weight: bold;">course</a>
        <a href="#contact" style="font-weight: bold;">contact</a>
        <a href="../login/login.php"><i class="fas fa-sign-out-alt" style="color: red;float: right;font-weight: bold; margin-left: 650px;"> Logout</i> </a> 
        <div class="icons">
        <a href="search.php"><div class="search-icon"><i class="fas fa-search"></i></div></a>
    </div>
    
    </nav>
 
 


</header>




<section class="home" id="home">

    <h1>education from home</h1>
    <p>Our education website is a place that will be visited by very different types of people. to develop their  level in academic and develop their  level in different tracks </p>
   <b class="btn">WELCOME</b>

    <div class="shape"></div>

</section>


<section class="about" id="about">

    <div class="image">
        <img src="imgaes/Why.jpg" alt="">
    </div>

    <div class="content">
        <h3 style="margin-left: 200px"> why choose us?</h3>
        
        <p style="margin-left:30px">One of our many advantages is that we are close to you and we will answer your inquiries and pay attention to your ideas in order to develop the site and help you develop your academic skills and skills in different fields </p>
        <p style="margin-left:30px">we offer many distinguished courses that have won many evaluations in the recent period</p>
        
       
    </div>

</section>

<!-- about section ends -->

<!-- course section starts  -->

<section class="course" id="course">

<h1 class="heading">our Professional Tracks</h1>    

<div class="box-container">

    <div class="box">
        
        <img src="imgaes/Security.jpg" alt="">
        <a href="courses/security.php"> <h3 class="price" style="font-size: 23px;">Free</h3></a>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="courses/security.php" class="title">learn Security begginer</a>
            <p>Some cources about Security</p>
            
            <div class="info">
                <h3> <i class="far fa-clock"></i>  hours </h3>
                <h3> <i class="far fa-calendar-alt"></i>  months </h3>
                <h3> <i class="fas fa-book"></i>  modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="imgaes/Ai.jpg" alt="">
        <a href="courses/ai.php">  <h3 class="price" style="font-size: 23px;">Free</h3></a>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="courses/ai.php" class="title">learn Artificial Intelligence</a>
             <p>Some cources about AI</p>
            
            <div class="info">
                <h3> <i class="far fa-clock"></i>  hours </h3>
                <h3> <i class="far fa-calendar-alt"></i>  months </h3>
                <h3> <i class="fas fa-book"></i>  modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="imgaes/clanguage.jpg" alt="">
        <a href="courses/backend.php">  <h3 class="price" style="font-size: 23px;">Free</h3></a>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="courses/backend.php" class="title">Learn Back end</a>
            
          <p>Some cources about Language C</p>
            
            
            <div class="info">
                
                <h3> <i class="far fa-clock"></i>  hours </h3>
                <h3> <i class="far fa-calendar-alt"></i>  months </h3>
                <h3> <i class="fas fa-book"></i>  modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="imgaes/web.jpg" alt="">
        <a href="courses/frontend.php"> <h3 class="price" style="font-size: 23px;">Free</h3></a>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="courses/frontend.php" class="title">learn Front end</a>
            
             <p>Some cources about HTML & CSS</p>
            
           
            <div class="info">
                <h3> <i class="far fa-clock"></i>  hours </h3>
                <h3> <i class="far fa-calendar-alt"></i>  months </h3>
                <h3> <i class="fas fa-book"></i>  modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="imgaes/data%20analysis.jpg" alt="">
        <a href="courses/datascience.php"> <h3 class="price" style="font-size: 23px;">Free</h3></a>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="courses/datascience.php" class="title">learn data Science</a>
             <p>Some cources about data Science</p>
           
            <div class="info">
                <h3> <i class="far fa-clock"></i>  hours </h3>
                <h3> <i class="far fa-calendar-alt"></i>  months </h3>
                <h3> <i class="fas fa-book"></i>  modules </h3>
            </div>
        </div>
    </div>
    
    
      <div class="box">
        <img src="imgaes/ai.jpeg" alt="">
          <a href="courses/machine.php"> <h3 class="price" style="font-size: 23px;">Free</h3></a>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="courses/machine.php" class="title">learn Machine Learning</a>
            
            <p>Some cources about CS50</p>
           
           
            <div class="info">
                <h3> <i class="far fa-clock"></i>  hours </h3>
                <h3> <i class="far fa-calendar-alt"></i>  months </h3>
                <h3> <i class="fas fa-book"></i>  modules </h3>
            </div>
        </div>
    </div>

  
    
    
        <div class="box">
        <img src="imgaes/andriod.jpg" alt="">
            <a href="courses/android.php"> <h3 class="price" style="font-size: 23px;">Free</h3></a>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="courses/android.php" class="title">learn android studio  </a>
            
             <p>Some cources about android studio </p>
            
           
            <div class="info">
                <h3> <i class="far fa-clock"></i>  hours </h3>
                <h3> <i class="far fa-calendar-alt"></i>  months </h3>
                <h3> <i class="fas fa-book"></i>  modules </h3>
            </div>
        </div>
    </div>
    
    
        
    
    
    
    
        <div class="box">
        <img src="imgaes/Flutter.jpg" alt="">
            <a href="courses/flutter.php"> <h3 class="price" style="font-size: 23px;">Free</h3></a>
            <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="courses/flutter.php" class="title">learn about Flutter </a>
            
             <p>Some cources about Fluuter</p>
           
           
            <div class="info">
                <h3> <i class="far fa-clock"></i>  hours </h3>
                <h3> <i class="far fa-calendar-alt"></i>  months </h3>
                <h3> <i class="fas fa-book"></i>  modules </h3>
            </div>
        </div>
    </div>
    
    

</div>

</section>

 


<div class="chat-bar-collapsible">
        <button type="button" class="collapsible">
            <a id="chat-button-link" href="http://127.0.0.1:5000/" target="_blank">Chat with us!</a>
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

      
    </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
   


<section class="contact" id="contact">

<h1 class="heading">contact us</h1>

<div class="row">

    <form action="">
        <input type="text" placeholder="full name" class="box">
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <input type="number" placeholder="your number" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="your address"></textarea>
        <input type="submit" class="btn" value="send now">
    </form>

    <div class="image">
        <img src="images/contact-img.png" alt="">
    </div>

</div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <a href="https://earth.google.com/web/@-13.66662761,-87.67585388,-9617.72044893a,13552843.14657927d,35y,360h,0t,0r"><h3>branch locations</h3></a>
            <a href="https://www.google.com/maps/d/viewer?mid=1WouvrIFG1Z_aTy_zDf1HcMrI1sQ&ll=26.28049405082319%2C28.77638384141772&z=8">EGYPT</a>
            <a href="https://www.google.com/maps/d/viewer?mid=1WouvrIFG1Z_aTy_zDf1HcMrI1sQ&ll=37.76095823636627%2C-107.2694241266123&z=6">USA</a>
            <a href="https://www.google.com/maps/d/viewer?mid=1WouvrIFG1Z_aTy_zDf1HcMrI1sQ&ll=45.39291843795305%2C-0.04876781101180505&z=7">france</a>
            <a href="https://www.google.com/maps/d/viewer?mid=1WouvrIFG1Z_aTy_zDf1HcMrI1sQ&ll=51.528868434293244%2C-0.10159864999999435&z=11">London</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">course</a>
           
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i>  Cairo, London 400104. </p>
            <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
            <p> <i class="fas fa-phone"></i> +201050302032 </p>
        </div>

    </div>

    <h1 class="credit">created by <a href="#">Mr. MohamedHBO</a> all rights reserved. </h1>

</div>

<!-- footer section ends -->

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   
    
  


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<!-- jquery cdn link  -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->





</body>
</html>
