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
  <?php
  echo $this->session->userdata('active_id');
  // var_dump($this->session->all_userdata());
   ?>

   <div class="row">
     <div class="col s12">
       <a href="logout">Logout</a>
     </div>
   </div>
   <div class="row">
     <div class="col s12">
       <h2>Hello, Jerry</h2>
       <p>
         Your Trip Schedules
       </p>
       <table>
         <thead>
           <tr>
             <th>Destination</th>
             <th>Travel Start Date</th>
             <th>Travel End Date</th>
             <th>Plan</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td><a href="travels/destination/2">Paris France</a></td>
             <td>May 26 2016</td>
             <td>May 30 2016</td>
             <td>Stroll of the Eiffel Tower</td>
           </tr>
         </tbody>
       </table>


       <p>
         Other User's Travel Plans
       </p>
       <table>
         <thead>
           <tr>
             <th>Name</th>
             <th>Destination</th>
             <th>Travel Start Date</th>
             <th>Travel End Date</th>
             <th>Do You Want to Join?</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>Stephen King</td>
             <td><a href="#">Singapore</a></td>
             <td>May 26 2016</td>
             <td>May 30 2016</td>
             <td><a href="#">Join</a></td>
           </tr>
         </tbody>
       </table>

     </div>

   </div>
   <div class="row">
     <div class="col s12">
       <a href="/travels/add">Add Travel Plan</a>
     </div>
   </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/assets/js/materialize.js"></script>
  <script src="/assets/js/init.js"></script>

  </body>
</html>
