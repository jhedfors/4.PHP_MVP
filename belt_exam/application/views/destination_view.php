<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
   <div class="row">
     <div class="col s12">
       <a href="/travels">Home</a>
       <a href="/logout">Logout</a>
     </div>
   </div>
   <div class="row">
     <div class="col s12">
       <?php echo $dest_id ?>
       <h4>Transylvania Romania</h4>
       <p><label>Planned By:</label>Tristan Lestat</p>
       <p><label>Description:</label>Stay at castle</p>
       <p><label>Travel Date From:</label>Oct 31 2015</p>
       <p><label>Travel Date To:</label>Oct 31 2015</p>
       <br>
       <h5>Others joining the trip:</h5>


   </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/assets/js/materialize.js"></script>
  <script src="/assets/js/init.js"></script>

  </body>
</html>
