
<?php
include 'db.php';

$message="";
$smessage="";
if(isset($_POST['sub']))
{
$rid=$_GET['id'];
$amt=$_POST['amt'];


$sid=$_SESSION['sender'];


$res1=$link->query("select * from user where id=$sid");
$res2=$link->query("select * from user where id=$rid");
$row1=$res1->fetch_row();
$row2=$res2->fetch_row();

   if($amt > $row1['5'])
  {
        $message=nl2br("TRANSACTION FAILED :( \n\r INSUFFICIENT BALANCE. \n\r TRY AGAIN.");
  
   }
    else if(($amt == 0) || ($amt < 0))
    {
        $message=nl2br("TRANSACTION FAILED :( \n\r AMOUNT SHOULD BE GREATER THAN ZERO. \n\r TRY AGAIN.");
   }
   else
    {

       $uamts = $row1['5'] - $amt;
       $link->query("update user set amt=$uamts where id=$sid");

       $uamtr = $row2['5'] + $amt;
       $link->query("update user set amt=$uamtr where id=$rid");
       
       $sna = $row1['2'];
       $rna = $row2['2'];
       $sac = $row1['1'];
       $rac = $row2['1'];
       $linknew=new mysqli("localhost","id17246288_tsf123","Pritipatel@123","id17246288_tsf");
       $linknew->query("insert into transection values($sid,'$sac','$sna',$rid,'$rac','$rna',$amt)");
      
       if($linknew)
       {
        
        $message=nl2br("&#8377; $amt SUCCESSFULLY TRANSFERED :) \r\n FROM $row1[2] TO $row2[2] \r\n click 'USER'S DETAILS' to get all transaction history");
        $amt =0;
       }
      
   
   
    }
}
// else
// {


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
  </script>
    <style>
       body{
          
          font-family: latha;
              color: white;
              background: linear-gradient(rgba(173, 3, 252, 0.89),rgba(0,0,0,0.65),rgba(0,0,0,0.38),rgba(0,0,0,0)),url(https://png.pngtree.com/thumb_back/fw800/back_our/20190622/ourmid/pngtree-blue-big-data-financial-finance-banner-background-image_209842.jpg)no-repeat;
              background-size: cover;
            }
      *
      {
        margin:0;
        padding:0;
      }
    .msg
 {
  text-align:center;
  
  font:20px Arial,sans-serif;
  font-weight:800;
  outline: 1px solid black;
  width:650px;
  
  color: black;
  
 }
 
  </style>
  </head>
  <body style="background-color:#87CEFA">
  <?php
  $rid=$_GET['id'];
  $sid=$_SESSION['sender'];
  
  ?>


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

    
     <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto">
      
        <li class="nav-item"><a href="Home.php"> <button type="button" class="btn btn-outline-warning">HOME</button></a></li>
        &nbsp
        &nbsp
        <li class="nav-item"><a href="receiver.php?id= <?php echo $rid ;?>"><button type="button" class="btn btn-outline-warning">BACK</button></a></li>
        &nbsp
        &nbsp
        <li class="nav-item"><a href="user.php?id= <?php echo $rid ;?>"><button type="button" class="btn btn-outline-warning">USER'S DETAILS</button></a></li>

      </ul>
    </div>


</nav>

  <div class='container'>
  
  <?php
  $link1=new mysqli("localhost","id17246288_tsf123","Pritipatel@123","id17246288_tsf") ;
    
   $rid=$_GET['id'];
  $res1=$link1->query("select * from user where id=$sid");
  $row1=$res1->fetch_row();
  ?>

  <div class='row  align-items-center justify-content-center'>
  
  <div class='col-md-5'>
  
  <h2  style = "color: White";><b>SENDER'S DETAILS</b></h2>
  
  <div class="card border-dark" style="width: 25rem ;background-color:#87CEFA">
    <div class="card-body">
    <h3 class="card-title"><b><?php echo $row1[2] ?></b></h3>
    <p class="card-text"><h5><b>USER ID:</b> &nbsp<?php echo $row1[0] ?></h5></p>
    <p class="card-text"><h5><b>ACCOUNT NUMBER: </b>&nbsp<?php echo $row1[1] ?></h5></p>
    <p class="card-text"><h5><b>CONTACT NUMBER: </b>&nbsp<?php echo $row1[3] ?></h5></p>
    <p class="card-text"><h5><b>EMAIL: </b>&nbsp<?php echo $row1[4] ?></h5></p>
    <p class="card-text"><h5><b>BALANCE: </b>&nbsp<?php echo $row1[5] ?></h5></p>
    </div>
  </div>

</div>
  <?php
  
  $link1->close();
  
  $link2=new mysqli("localhost","id17246288_tsf123","Pritipatel@123","id17246288_tsf") ;
  $res2=$link2->query("select * from user where id=$rid");
  $row2=$res2->fetch_row();
  ?>
  <div class='col-md-4'>
  <h2  style = "color: White";><b>RECEIVER'S DETAILS</b></h2>
  
  
  <div class="card border-dark" style="width: 25rem ;background-color:#87CEFA">
    <div class="card-body">
    <h3 class="card-title"><b><?php echo $row2[2] ?></b></h3>
    <p class="card-text"><h5><b>USER ID:</b> &nbsp<?php echo $row2[0] ?></h5></p>
    <p class="card-text"><h5><b>ACCOUNT NUMBER: </b>&nbsp<?php echo $row2[1] ?></h5></p>
    <p class="card-text"><h5><b>CONTACT NUMBER: </b>&nbsp<?php echo $row2[3] ?></h5></p>
    <p class="card-text"><h5><b>EMAIL: </b>&nbsp<?php echo $row2[4] ?></h5></p>
    <p class="card-text"><h5><b>BALANCE: </b>&nbsp<?php echo $row2[5] ?></h5></p>
    </div>
  </div>
  
	
</div>
</div>
</div>

  <?php

  $link2->close();
  ?>

<br> <center>
<div class="card border-dark" style="width: 25rem ;background-color:#87CEFA">
  <div class="card-body">
        <div class="container">
        
        <form  name="amount" class="form-group" action="" method="POST">
        <div class="row align-items-center justify-content-center mt-3">
        <h2 style = "color: White";><b>ENTER AMOUNT</b></h2>
        </div>
        <div class="row align-items-center justify-content-center">
        <input type="number" id="amt" name="amt" min="0" required/>  <br/><br/> 
        </div>   
        
        <div class="row align-items-center justify-content-center">  
            <div class="btn-toolbar">
            <button class="btn btn-warning btn-lg m-2" name="sub" type="submit"; >Proceed</button>
            <button class="btn btn-warning btn-lg m-2" name="reset" type="reset" ;>Reset</button>
            </div>
        </div>    
            </form>
            </div>
            </div> 
            </div> </center>
        <br>    
<div class="container">
<div class="row align-items-center justify-content-center mb-5">
<div class="msg mb-5" style = "color: White";><?php echo $message;?></div>
&nbsp
&nbsp
&nbsp
</br>



</div>
</div>
<?php
include 'footer.php';

?>
</body>
</html>