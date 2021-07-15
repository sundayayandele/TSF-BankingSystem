<html>
<head>
<style type="text/css">
    body {

      font-family: latha;
      color: white;
      background: linear-gradient(rgba(3, 173, 252, 0.89), rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.38), rgba(0, 0, 0, 0)), url(https://wallpaperaccess.com/full/1393334.jpg)no-repeat;
      background-size: cover;
    }

    .box {
      width: 900px;
      float: right;
      border: 1px solid none;
    }

    .box ul li {
      width: 120px;
      float: right;
      color: black;
      margin: 10px auto;
      text-align: center;
    }

    .box ul li a {
      text-decoration: none;
      color: darkgray;
    }

    .box ul li:hover {
      background-color: rgb(24, 9, 156);
    }

    .box ul li a:hover {
      color: white;
    }

    .box ul li a {
      color: black;
    }

    .wd {
      width: 300px;
      height: 539px;
      background-color: black;
      opacity: 0.9;
      padding: 55px;
    }

    .container {
      background-color: black;
      height: 200px;
      font-family: Georgia, 'Times New Roman', Times, serif;
      font-size: 20px;
      color: white;
    }

    #btn a input {
      width: 170px;
      padding: 10px;
      color: white;
      background-color: white;
      text-align: center;
    }

    #btn input:hover {
      padding: 20px 50px;
      transition: padding 0.25s;

    }

    .wd {

      width: 300px;
      height: 450px;
      background-color: rgba(0, 0, 0, 0.445);
      opacity: 0.9;
      padding: 15px;
    }

    .wd h1 {
      text-align: center;
      color: black;
      text-transform: uppercase;
      font-weight: 100px;
    }

    .wd h4 {
      text-align: justify;
      color: black;
      font-weight: normal;

    }

    .wd h2 {
      text-align: center;
      color: black;
      text-transform: uppercase;
      font-weight: normal;
      margin: 20px auto;
    }

    .opt form,
    input[type="button"] {
      background-color: black;
      color: white;
      padding: 10px;
      margin: -14px auto;
      padding-left: 50px;
      padding-right: 50px;
      text-align: center;
    }
 </style>

<?php
  if (isset($_REQUEST['sub'])) {
    $s = $_GET['sub'];
    if ($s == "USER'S DETAILS") {
      header("location:user.php");
    } elseif ($s == "MONEY TRANSFER") {
      header("location:sender.php");
    }
  }
?>
</head>

<center>
<a href="#" class="navbar-brand">
      <!-- Logo Image -->
      <img src="https://i0.wp.com/gtswiki.gt-beginners.net/decal/png/32/74/04/8080108644755047432_1.png" height= "80"width="80" alt="" class="d-inline-block align-left mr-2">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold" style = "color: black;">BANK</span>
    </a>
</center>
<center><br><br>
  <div class="wd">
    <form>
      <img width="200" height="200" src="https://pngimg.com/uploads/bank/bank_PNG24.png">
      <h2>SELECT The option </h2>
      <input type="submit" name="sub" class="btn btn-info" value="USER'S DETAILS">
      <br><br>
      <input type="submit" name="sub" class="btn btn-warning" value="MONEY TRANSFER">
    </form>
  </div>

</center>
<?php
include 'footer.php';
?>
</body>
</html>