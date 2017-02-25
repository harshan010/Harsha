<?php include 'connect.php' ?>
<?php include 'function.php' ?>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</head>
<body>
  <div class="switch">
  <label>
    Off
    <input type="checkbox" id="swi">
    <span class="lever"></span>
    On
  </label>
</div>
  <div id="console-event"></div>
  <script>
    $(function() {
      $('#swi').change(function() {
        $('#console-event').html('Toggle: ' + $(this).prop('checked'))
        exec("python demo.py");
      })
    })
  </script>
</body>
</html>




<?php
if(isset($_POST['upload'])){
$roomname = $_POST['rname'];
$temp=$_FILES['rimage']['tmp_name'];
if(!isset($temp)){
  echo "Please select an Image";
}
else{
$image=addcslashes(file_get_contents($_FILES['rimage']['tmp_name']));
$image_name=addcslashes($_FILES['rimage']['name']);
$image_size=getimagesize($_FILES['rimage']['tmp_name']);
echo "$image";
if($image_size == FALSE)
  echo "This is not an image";
  else{

       if(!$insert =mysql_query("INSERT INTO Rooms(id,room_name,image,Status) values('','$roomname','$temp','0')"))
       echo "Problem Uploding the image";
       else{
echo "Image uploded";
$maxq=mysql_query("SELECT max(id) from Rooms");
$disq=mysql_query("SELECT * from Rooms Where id=$maxid ");

$image=$image['image'];
echo $image;

       }
  }
}
}

?>
