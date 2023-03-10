<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="css\style.css">
   <link rel="stylesheet" href="css\slider.css">

</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js\slider.js"></script>
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Libra t?? p??rzgjedhur me dor??, n?? der??n tuaj.</h3>
      <p>Nga raftet tona n?? pragun tuaj: K??naq??sia e librave t?? zgjedhur me dor??!</p>
      <a href="about.php" class="white-btn">Shfaq m?? shum??</a>
   </div>

</section>

<section class="products">
<h1 class="title">Librat e p??rzgjedhur nga ne</h1>
<div class="owl-carousel owl-theme">
  <div class="book">
    <img src="images\TheDavinciCode.jpg" alt="Book 1">
    <h3>The Davinci Code</h3>
    <div class="description">Kodi i Da Vin??it" ndjek simbolologun e Harvardit Robert Langdon dhe kriptologen franceze Sophie Neveu teksa zbulojn?? nj?? gjurm?? t?? dh??nash t?? fshehura n?? veprat e Leonardo da Vin??it pas vrasjes s?? kuratorit t?? Luvrit. T?? dh??nat ??ojn?? n?? zbulime befasuese rreth Prioritit t?? Sionit. nj?? shoq??ri sekrete me an??tar?? t?? famsh??m duke p??rfshir?? Sir Isaac Newton.</div>
  </div>
  <div class="book">
    <img src="images\TheGreatGatsby.jpg" alt="Book 2">
    <h3>The Great Gatsby</h3>
    <div class="description">The Great Gatsby" ??sht?? nj?? roman i famsh??m p??r nj?? burr?? t?? quajtur Jay Gatsby i cili ??sht?? i dashuruar me nj?? grua t?? quajtur Daisy. <a href="books.php"> Lexo me shume</a></div>
    
  
   </div>
  <div class="book">
    <img src="images\1984GO.jpg" alt="Book 3">
    <h3>1984</h3>
    <div class="description">1984" ??sht?? nj?? roman distopian nga George Orwell, botuar n?? vitin 1949. Ai p??rshkruan nj?? shoq??ri totalitare n?? t?? cil??n qeveria ka kontroll t?? plot?? mbi ??do aspekt t?? jet??s s?? qytetar??ve, duke p??rfshir?? mendimet dhe emocionet e tyre... </div>
  </div>
  <div class="book">
    <img src="images\TheHungerGames.jpg" alt="Book 3">
    <h3>The Hunger Games</h3>
    <div class="description">Loj??rat e uris?? ??sht?? nj?? roman distopian i shkruar nga Suzanne Collins. Historia zhvillohet n?? nj?? bot?? post-apokaliptike ku nj?? qeveri totalitare e quajtur Kapitol mban nj?? ngjarje vjetore t?? quajtur Loj??rat e Uris??...</div>
</div>
  <div class="book">
    <img src="images\the_world.jpg" alt="Book 3">
    <h3>The World of Abstract Art</h3>
    <div class="description">"Bota e artit abstrakt" ??sht?? nj?? hyrje gjith??p??rfshir??se n?? bot??n e artit abstrakt, duke shfaqur veprat e disa prej artist??ve abstrakt?? m?? t?? njohur gjat?? historis??...</div>
</div>
<div class="book">
    <img src="images\red_queen.jpg" alt="Book 3">
    <h3>Red Queen</h3>
    <div class="description">"Mbret??resha e Kuqe" ??sht?? nj?? roman fantazi p??r t?? rritur t?? rinj i shkruar nga Victoria Aveyard...</div>
</div>
</div>

<br>
   <h1 class="title">Produktet e fundit</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">Asnj?? produkt i vendosur!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">Shfaq m?? shum??</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Rreth neve</h3>
         <p>Njihuni me ekipin e pasionuar pas libraris?? son?? t?? dashur dhe angazhimin ton?? ndaj dashuris?? p??r leximin</p>
         <a href="about.php" class="btn">Lexo m?? shum??</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>Keni pyetje?</h3>
      <p>Mos hezitoni t?? pyesni! Ne jemi k??tu p??r t?? ndihmuar</p>
      <a href="contact.php" class="white-btn">Na kontaktoni</a>
   </div>

</section>

<script src="js\slider.js"></script>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>