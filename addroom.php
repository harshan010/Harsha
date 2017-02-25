<?php include 'connect.php';?>
<?php  include 'functions.php';  ?>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <style>

.custom_btn{
margin-top: 15px;
  margin-right: 100px;
}
.custom_btn_side{
  width: 100%;
}
      </style>
</head>

<body>
    <div class=" row">
    <nav class="navbar-extended col l12 s12 m12 black">
      <div class="navbar-wrapped">
           <a href="#!" class="brand-logo ">MyHome</a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="dashboard.php">Dashboard</a></li>
    <li> <form method="post">
<?php
if(isset($_POST['logout'])){
   session_destroy();
      echo '<meta http-equiv="refresh" content="0; URL=index.php" />';
    }
?>
    <button type="submit"  class="waves-effect waves-light btn custom_btn red accent-3"name="logout"/>LOG OUT!</button>
  </form></li>
</ul>

 <ul class="side-nav black" id="mobile-demo">
   <li class="disable center" >Menu</li>
   <li class="white center"><a href="dashboard.php">Dashboard</a></li><center>
<li> <form method="post">
<?php
if(isset($_POST['logout'])){
session_destroy();
echo '<meta http-equiv="refresh" content="0; URL=index.php" />';
}
?>
<button type="submit"  class="waves-effect waves-light btn custom_btn_side red accent-3 "name="logout"/>LOG OUT!</button>
</form></li></center>
 </ul>

</div>



</nav>
</div>
<!-- End of Nav Bar-->
<div class="row">
  <form name="addroom" class="col s10 l6 offset-l3 offset-s1"  method="post" enctype="multipart/form-data" >
    <label for="uname">Room Name</lable><br/>
    <input type="text"  name="rname" placeholder="Enter Room Name"/></br>
<label>Room Type</label>
      <div class="input-field col s12">
        <select class=" browser-default icons">
          <option value="" disabled selected>Choose your room</option>
          <option value="" data-icon="images/bed.png" class="circle">Bed Room</option>
          <option value="" data-icon="images/lr.jpg" class="circle">Living room</option>
          <option value="" data-icon="images/kitchen.jpg" class="circle">Kitchen</option>
          <option value="" data-icon="images/bathroom.png" class="circle">Bath Room</option>
        </select>

      </div></br>

    <input  type="submit" class="btn" name="upload"/>
  </form>

</div>
<script>

$(document).ready(function() {
  $('select').material_select();
      $(".button-collapse").sideNav();
});
$( document ).ready(function() {

  });
</script>

  <?php include 'footer.php'?>
</body>
</html>
