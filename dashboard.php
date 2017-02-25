<?php include 'connect.php'; ?>
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

<body >
  <?php
  if(!loggedin()){
      echo "<center><h1 >Invalid user</h1></center>";
  }
  else {
    ?>
    <div class=" row">
    <nav class="navbar-extended col l12 s12 m12 black">
      <div class="navbar-wrapped">
           <a href="#!" class="brand-logo small">MyHome</a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="addroom.php">Add Room</a></li>


    <li>  <form method="post">
    <?php
    if(isset($_POST['logout'])){
       session_destroy();
          echo '<meta http-equiv="refresh" content="0; URL=index.php" />';
        }
         ?>
        <button type="submit"  class=" waves-effect waves-light btn red accent-3  custom_btn"name="logout"/>LOG OUT!</button>
      </form></li>
     </ul>

<ul id="mobile-demo" class="side-nav black" >
  <li class="disable center" >Menu</li>
  <li class="white center"><a href="addroom.php">Add Room</a></li>


<li>  <form method="post">
<?php
if(isset($_POST['logout'])){
session_destroy();
echo '<meta http-equiv="refresh" content="0; URL=index.php" />';
}
?>
<button type="submit"  class=" waves-effect waves-light btn red accent-3 custom_btn_side"name="logout"/>LOG OUT!</button>
</form></li>
</ul>
</div>
</nav>
</div>
 <?php
  }
  ?>

  <script>
  $(".button-collapse").sideNav();
  </script>

  <?php include 'footer.php' ?>
</body>
</html>
