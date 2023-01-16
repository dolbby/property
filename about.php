<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorem provident voluptatum distinctio laborum veritatis vitae suscipit praesentium fugiat unde?</p>
         <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search property</h3>
         <p>Buying property is an exciting prospect, but it can also be intimidating. In the absence of clear search parameters it’s easy to be overwhelmed by choice, which is why a property search brief is recommended. In this blog, our agents outline five key considerations to bear in mind when writing your search brief.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact agents</h3>
         <p>Buying property is an exciting prospect, but it can also be intimidating. In the absence of clear search parameters it’s easy to be overwhelmed by choice, which is why a property search brief is recommended. In this blog, our agents outline five key considerations to bear in mind when writing your search brief.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p>Buying property is an exciting prospect, but it can also be intimidating. In the absence of clear search parameters it’s easy to be overwhelmed by choice, which is why a property search brief is recommended. In this blog, our agents outline five key considerations to bear in mind when writing your search brief.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/roy.jpg" alt="">
            <div>
               <h3>surojit roy</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>property treasure’s response time is quick and she proved to be a knowledgeable and efficient buyer. She helped me source and manage a couple of properties, I am happy to have her as my buyer and property manager!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/shrikanta.jpg" alt="">
            <div>
               <h3>shrikanta dhar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>property treasure’s response time is quick and she proved to be a knowledgeable and efficient buyer. She helped me source and manage a couple of properties, I am happy to have her as my buyer and property manager!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/shamima.jpg" alt="">
            <div>
               <h3>shamima nasrin</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>property treasure’s response time is quick and she proved to be a knowledgeable and efficient buyer. She helped me source and manage a couple of properties, I am happy to have her as my buyer and property manager!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/mehedi.jpg" alt="">
            <div>
               <h3>mehedi hasan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>property treasure’s response time is quick and she proved to be a knowledgeable and efficient buyer. She helped me source and manage a couple of properties, I am happy to have her as my buyer and property manager!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>property treasure’s response time is quick and she proved to be a knowledgeable and efficient buyer. She helped me source and manage a couple of properties, I am happy to have her as my buyer and property manager!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>property treasure’s response time is quick and she proved to be a knowledgeable and efficient buyer. She helped me source and manage a couple of properties, I am happy to have her as my buyer and property manager!</p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>