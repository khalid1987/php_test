<!Doctype html>
<html dir="rtl" lang="ar">
 <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="theme.css" />
    	<!-- Jquery online: <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script> -->
      <script type="text/javascript" src="jquery-3.2.0.js">
</script>

  </head>
 <body>

   <audio autoplay="">
     <source src="glitch.mp3"></source>
     Your browser isn't invited for super fun time.
   </audio>

 <div class="container">
    <header class="top_page">

      <a href="index.php">
      <img src="images/logos/logo77.png" alt="logo" class="logo" id="image_changing"/>
    </a>
     <nav class="top_nav">
       <ul id="nav-two">
         <audio id="beep-two" preload="auto">
           <source src="beep.mp3"></source>
           Your browser isn't invited for super fun time.
         </audio>

         <li> <a href="index.php">الرئيسية </a></li>
         <li> <a href="" class="disabled_link"> القصص </a></li>
         <li> <a href="https://rifaatblog.wordpress.com/"> مدونتي الرسمية </a></li>
         <li> <a href="" class="disabled_link"> عنـى </a></li>
         <li> <a href="" class="disabled_link"> دفتر الزوار </a></li>
         <li> <a href="contact.php" class="disabled_link"> لمراسلتي </a></li>
       </ul>
     </nav>
     <div class="clear"> </div>
     <!-- to stop floating any text after nav elements -->

     <!-- Audio on hover logo -->
     <script>$("#nav-two a")
     .each(function(i) {
     if (i != 0) {
       $("#beep-two")
         .clone()
         .attr("id", "beep-two" + i)
         .appendTo($(this).parent());
     }
     $(this).data("beeper", i);
     })
     .mouseenter(function() {
     $("#beep-two" + $(this).data("beeper"))[0].play();
     });
     $("#beep-two").attr("id", "beep-two0");</script>

    </header>
    <div class="space">
      <!-- to get some space between the head and the section -->
      <!-- Audio clock -->

    </div>
