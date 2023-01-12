
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Personal Portfolio Website</title>
   
    <link rel="stylesheet" href="in.css" />
  </head>
  <style>
    body {

 background-color: #cccccc;
  
    
}


.content h3{
  color: #1f1f25;
  font-size: 60px;
  font-weight: 900;
  line-height: 90px;
  text-transform: inherit;
  width: 98%;
    height: 200px;
}
.content h3 span {
  color: #fd4766;
}
  </style>
  <body>
    <div >
      <nav>
        <img src="logo.png" class="logo" />
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#"> <?php echo $_SESSION['name']; ?> </a></li>
          <li>  <a href="signup.php" class="ca">Create New account</a></li>
          <a href="logout.php" class="btn" > logout</a>
          
        </ul>
       
      </nav>

     
    </div>
    <div >
  <marquee>   <h3 style="color: #0a0a0a;
  font-size: 25px;
  text-transform: uppercase;
  letter-spacing: 4px;
  display: inline-block;
  margin-bottom: 20px;
  background: linear-gradient(
    120deg,
    #1c99fe 20.69%,
    #7644ff 50.19%,
    #fd4766 79.69%
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">welcome <span><?php echo $_SESSION['name']; ?>  </span>  </h3></marquee> 
      <br>
    <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
      
      <table>
                  <tbody>
                      <tr>
                      <th>S.No:</th>
                          <th>Name:</th>
                          <th>Email Id:</th>
                          <th>Phone No:</th>
                          <th>Message</th> 
                          <th>Action</th>
                                           
                      </tr>
                  </tbody>
                  <tbody>
           <?php
      $conn=new mysqli('localhost','root','','resume',);
      if($conn->connect_error)
      {
          echo"unable to connect";
          echo 'br';
      }
      else{
         
          $query=mysqli_query($conn,"SELECT * FROM contact");
          if(mysqli_num_rows($query)>0)
          {
              while($rowdata=mysqli_fetch_assoc($query))
              {
               echo" <tr>";
               echo "<td>{$rowdata['s_no']}</td>";
               echo "<td>{$rowdata['name']}</td>";
               echo "<td>{$rowdata['email_id']}</td>";
               echo "<td>{$rowdata['mobile']}</td>";
               echo "<td>{$rowdata['message']}</td>";
             
             echo "<td>  <a href='delete.php?del={$rowdata['s_no']}'><img style='width:16px;' src='myimages/delete-icon.png'> Delete</a> </td>";
               echo "</tr>";
      
              }
          }
      }
      ?>
              </tbody>
         </table>
      </div>
  </body>
</html>

<?php 
}else{
     header("Location: index.html");
     exit();
}
 ?>