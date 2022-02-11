<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <title>Form</title>
  </head>
  <body>
<img class="bg" src="bg.jpg" alt="Background immage">
<a href="display.php">Check Entries</a>
    <div class="container">
        <h1>Enter your Details</h1><br>
     <form action="insert.php" method="post" enctype="multipart/form-data">

      <input type="text" placeholder="Enter your Name" id="name" name="name" required>


      <input type="text" placeholder="Enter your age" id="age" name="age" required>


      <input type="email" placeholder="Enter your email" id="email" name="email" required>


      <input type="phone" placeholder="Enter your Phone no." id="phone" name="phone" required>

      <input type="file" name="photo" >

 <input type="submit" value="Submit" name="submit"  class="btn"/>

    </form>



    </div>
  </body>
</html>
