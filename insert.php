
<?php

include 'dbconfig.php';



if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $file = $_FILES['photo'];

  $filename = $file['name'];
  $filepath = $file['tmp_name'];
  $fileerror = $file['error'];

if($fileerror == 0){
  $destfile = 'upload/'.$filename;
  move_uploaded_file($filepath, $destfile);

  $insetquery = "INSERT INTO info(name, age, email, phone, iname) VALUES ('$name', '$age', '$email', '$phone', '$destfile')";

  $query = mysqli_query($conn,$insetquery);

  if ($query) {
    echo "Inserted";
  }else {
    echo "NOT inserted";
  }


}

}else {
  echo "Nothing done";
}
?>
