<?php
session_start();

function loggedin(){
  $user_id = $COOKIE['user_id'];
  if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

    return 1;
    }
  else{

    return 0;
  }
}?>
