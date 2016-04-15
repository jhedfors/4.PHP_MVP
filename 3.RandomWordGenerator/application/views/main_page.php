<?php
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Random Word Generator</title>
      <link rel="stylesheet" href="/assets/css/master.css">
   </head>
   <body>
     <div class="main">
       <p>
         Random Word (attempt #<?=$counter ?>)
       </p>
       <div class="result">
         <p>
           <?=$random ?>
         </p>
       </div>
       <form class="" action="/Random_word" method="post">
         <input type="submit" name="name" value="Generate">

       </form>

     </div>

   </body>
 </html>
