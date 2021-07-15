<html>
<head>

  <style>
      *
      body{
          
          font-family: latha;
              color: white;
              background: linear-gradient(rgba(173, 3, 252, 0.89),rgba(0,0,0,0.65),rgba(0,0,0,0.38),rgba(0,0,0,0)),url(https://img.freepik.com/free-vector/blue-copy-space-digital-background_23-2148821698.jpg?size=626&ext=jpg)no-repeat;
              background-size: cover;
            }
      
      td
      {
        font-weight: bold;
        color : white;
      }
      th
      {
        font-weight: bold;
        color : white;
      }
      @media screen and (max-width :1000px)
      {
        th,td
        {
          width:100vW;
          font-size:17px;
          padding: 0 !important;
           margin: 0 !important;
         
        }
        

      }
      @media screen and (max-width :900px)
      {
        th,td
        {
          width:100vW;
          font-size:100px;
          padding:0 !important;
           margin:0 !important;
           
        }
       

      }
      @media screen and (max-width :800px)
      {
        th,td
        {
          width:100vW;
          font-size:12px;
          padding: 0 !important;
           margin: 0 !important;
          
        }
        
      }
      @media screen and (max-width :600px)
      {
        th,td
        {
          width:100vW;
          font-size:9px;
          padding: 0 !important;
           margin: 0 !important;
     
        }
        
      }
      .wd{ 
  
  width: 1000px;
  height: 875px;
  background-color: rgba(0, 0, 0, 0.445);
  opacity: 0.9;
  padding: 5px;
}

.wd h1{
  text-align: center;
  text-transform: uppercase;
  font-weight: 100px;
}

.wd h4{
  text-align: justify;
  color: black;
  font-weight: normal;

}
.wd h2{
  text-align: center;
 color: black;
  text-transform: uppercase;
  font-weight: normal;
  margin: 40px auto;

}
.card{
    /* other default style */
    grid-row: 2/3;
    grid-column: 2/3;
    margin: 0 auto;
    display: grid;
    grid-template-rows: 1fr 6fr 1fr;
  }

  
</style>
 
</head>
<body style="background-color:#87CEFA">
<nav class="navbar navbar-expand-lg " style="background-color: rgba(227, 242, 253,0.5);" >

  
<a href="#" class="navbar-brand">
      <!-- Logo Image -->
      <img src="https://i0.wp.com/gtswiki.gt-beginners.net/decal/png/32/74/04/8080108644755047432_1.png" height= "80"width="80" alt="" class="d-inline-block align-left mr-2">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold" style = "color: black;">BANK</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div id="navbarTogglerDemo02" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item"><a href="Home.php"> <button type="button" class="btn btn-outline-warning">HOME</button></a></li>
        &nbsp
        &nbsp
        <li class="nav-item"><a href="user.php"> <button type="button" class="btn btn-outline-warning">BACK</button></a></li>
        
      </ul>
    </div>


</nav>
<?php
$sid=$_GET['id'];

$link=new mysqli("localhost","id17246288_tsf123","Pritipatel@123","id17246288_tsf");
$res=$link->query("select * from transection where sid=$sid or rid=$sid");
$detres=$link->query("select * from user where id=$sid");
$det=$detres->fetch_row();
?>

<center>
<div class="container ">
   
    <h2 style = "color: White";><b>PROFILE</b></h2>
    </div></center>

   <div class="card"style="width: 27rem;background-color:#87CEFA">
        <div class="card-body">
        <h3 class="card-title"><b><?php echo $det[2] ?></b></h3>
    <p class="card-text"><h5><b>USER ID:</b> &nbsp<?php echo $det[0] ?></h5></p>
    <p class="card-text"><h5><b>ACCOUNT NUMBER:</b> &nbsp<?php echo $det[1] ?></h5></p>
    <p class="card-text"><h5><b>CONTACT NUMBER:</b> &nbsp<?php echo $det[3] ?></h5></p>
    <p class="card-text"><h5><b>EMAIL:</b> &nbsp<?php echo $det[4] ?></h5></p>
    <p class="card-text"><h5><b>BALANCE:</b> &nbsp<?php echo $det[5] ?></h5></p>
        </div> 
    </div> 
  </div>  
    </div>
</div>


    
<?php
if(mysqli_num_rows($res) !=0)
{
    ?>
    <br>
    <center><div class="wd">
   <div class="container text-center">
    <h2 style = "color: White";><b>TRANSACTION DETAILS</b></h2>
    <br>
    
    <div class="table-responsive mb-5">
    <table class='table table-bordered text-center'>
  
    <thead class="thead-dark">
      <tr>
        <th scope="col" colspan="3">SENDER</th>
    
        <th scope="col" colspan="3">RECEIVER</th>
        
        <th scope="col" rowspan="2">TRANSECTION AMOUNT</th>
        
      </tr>
      <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">ACCOUNT NUMBER</th>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">ACCOUNT NUMBER</th>

      </tr>
    </thead>
    <tbody>
    <?php
    while($row=$res->fetch_row())
    {   
    ?>
    
    
    <tr>
    <th scope="row"><?php echo $row[0] ?></th>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[3] ?></td>
    <td><?php echo $row[5] ?></td>
    <td><?php echo $row[4] ?></td>
    <td><?php echo $row[6] ?></td>
    
    </tr>
   
           
    <?php
    }
    ?>
     </tbody>
    </table>
    </div>
    </div>
    </center>
    <?php
}
else
{
    echo "<h3 class='text-center'  style = 'color: White'><b>NO TRANSECTION TILL NOW</b></h3>";
}
$link->close();
?>
 
<?php
include 'footer.php';
?>
<br><br><br>
</body>
</html>
