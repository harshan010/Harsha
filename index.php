
<?php include 'connect.php';?>
<?php include 'functions.php' ?>
<html>
<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<style>
  .outer {
    display: table;

    color: #4dc3ff;
  }

  .inner {
    margin-top: 80%;

    filter: opacity(80%);
      transition: 0.4s;
    }
    .inner:hover{
      transition: 0.4s;
      filter: opacity(100%);
      filter: hue-rotate(10%);
      color:white;
      background-blend-mode:hard-light;

    }
    body{
      background-color: black;
    }
    .full{
      background-image: url("back.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      filter: grayscale(50%);
      filter: opacity(30%);
      width: 100%;
      height: 100%;
      z-index: -1;
      position: absolute;
    }
</style>


</head>
<body>
  <center>
  <div class="full"></div>
  <div class="outer text-center">
    <div class="middle">
      <div class="inner">
  <h3>My Home</h3>

  <form name="login" method="post" >
    <?php
    if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password=($_POST['upass']);

    if(empty($username) or empty($password)){
      echo "Fields empty</br>" ;}
    else {

    $check_login = " SELECT uid,priv FROM Users WHERE uname='$username' AND upass='$password' ";
    $result = $conn->query($check_login);
    if ($result->num_rows == 1){

      $run = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $user_id = $run["uid"];
        $type = $run["priv"];
        echo $priv;
        if($type=='d'){
          echo "<p>ur act deactive</p>";
        }
       else{
         session_start();

          $_SESSION['user_id']=$user_id;
          $__COOKIE['user_id']=$user_id;
          loggedin();
               echo '<meta http-equiv="refresh" content="0; URL=dashboard.php" />';

        }
    }
     else {
        echo "Invalid User Name and password </br>";
      }
    }
    }
     ?>
<label for="uname">Username</label>
    <input type="text"  name="uname" class="form-control" onblur="unamevalid()" placeholder="Enter User Name"/><br/>
    <p id="unameerror"></p>
<label for="pass">Password</label>
    <input type="password" class="form-control " onblur="upassvalid()" name="upass" placeholder="Enter Password" /><br/>

      <p id="upasserror"></p>
    <button type="submit" class="btn light-blue darken-1" name="submit">LOG IN</button>
  </form>
      </div>
    </div>
  </div>

</center>


  <?php include 'footer.php'?>
</body>

</html>
