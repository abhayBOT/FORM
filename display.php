<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="2">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Age</th>
          <th>Email</th>
          <th>Phone No.</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
        <?php
            include 'dbconfig.php';
            $selectquery = "select * from info";
            $query = mysqli_query($conn,$selectquery);
            $result = mysqli_fetch_array($query);

            while ($result = mysqli_fetch_array($query)) {
            

                 ?>
                 <tr>
                   <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['name']; ?></td>
                     <td><?php echo $result['age']; ?></td>
                      <td><?php echo $result['email']; ?></td>
                       <td><?php echo $result['phone']; ?></td>
                        <td><?php echo $result['iname']; ?></td>

                 </tr>

                 <?php
            }

 ?>

      </tbody>
    </table>
  </body>
</html>
