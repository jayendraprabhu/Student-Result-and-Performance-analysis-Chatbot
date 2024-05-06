<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link href="../style.css" type="text/css" rel="stylesheet"> -->
    <style>
        .outer{
            display:flex;

        }
        .tp{
            width:10%;
            background-Color:;
            margin:auto;text-align:center
        }
        .ep{
            width:100%;
            background-Color:;
            margin:auto;text-align:center
        }
        #dashbtn1{
    color: darkolivegreen;
    background-color: #CEE6F2;
    border: none;
    width: 49.5%;
    margin:  auto;
    border-radius: 10px;
    padding: 20px;
    font-size: large;
    
}
    </style>
</head>
<body>
    <div class="outer">
    <div class="ep">
    <img src="images/logo.png" style="float:left" alt="logo" height="100px">
    <h1 style="color:#504BF6">Kgisl Institute of Technology</h1>
        <h1 style="color:#504BF6">Student Result and Performance Analysis</h1>
        <hr></hr>
    
    </div>
    </div>

    
    
   

<div id="carouselExampleRide" style="width:900px;height:500px;margin:auto;text-align:center;" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
  <div class="carousel-item active" >
      <img src="../images/OIP.jpg" style="border-radius:10px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/img1.jpg" style="border-radius:10px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/img2.jpg" style="border-radius:10px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/img3.jpg" style="border-radius:10px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/uipath-robots.jpg" style="border-radius:10px" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

  <h2 style="margin:auto;text-align:center;color:#36454f;">Choose the Regulation</h2>
  <div class="fle">
<form  method="post">
<input type="submit" id="dashbtn1" value="2017 Regulation" name="submit1">

<input type="submit" id="dashbtn1" value="2021 Regulation" name="submit2">
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>