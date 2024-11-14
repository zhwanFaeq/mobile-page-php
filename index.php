<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobilepage";

//creat connection
$conn = mysqli_connect("localhost","root","","mobilepage");


//check connection
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
//echo "connected successfully";
echo"<br>";







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--icone-->
    
</head>
<body style="background-color: pink;">



















    <div class="main">
    <div class="top_main">
        <table class="topt">
<tr>
    <th> <i class="fa fa-phone"></i><span>+964 07x0 xxx xx xx</span></th>
    <th><i class="fa fa-envelope"></i><span>z@gmail.com</span></th>
    <th> <i class="fa fa-clock-o"></i><span>7days: 8:00am- 6:00pm</span></th>
    <th colspan="3" id="social">
        <li class="fa fa-facebook"></li>
        <li class="fa fa-instagram"></li>
        <li class="fa fa-snapchat"></li>
        <li class="fa fa-youtube"></li>



    </th>





</tr>


        </table>


        
    </div>
    <div style="background-color: pink;">

    <!--end of top main-->
    <div class="header"></div>


</body>
</html>






<!--<head>-->
    
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"-->
<!--</head>
<body>-->
    











<div style="background-color: pink;">

     <!-- start about section -->
   <section id="about" style="background-color: pink;">
    <div class="container col-xxl-8 px-4 py-5">
      <!--<h2 class="pb-2 border-bottom fw-bold">About Me</h2>-->
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH-k6JxEfVbpQi_ec_Z0aMZ_jfgRHM-PUlGg&s" 
          width="300" height="300" loading="lazy"
          style="border-radius: 100% ;box-shadow: 10px -10px lightcoral;">
        </div>
        <div class="col-lg-6">
          
          <h4 class="display-5 fw-bold lh-1 mb-3">Oppo </h4>
          <div class="bt-2 border bottonm fw-bold"></div>
          <p><b style="font-size: 20px; font-family: sans-serif;">Oppo Mobile Phones are a great choice for those looking for a reliable, stylish, and powerful device. They offer a wide range of features and technology, from their amazing camera capabilities to their sleek design. With a range of models to choose from, there is sure to be a device that is perfect for you. </b>
           <b style="font-size: 20px; font-family: sans-serif;">  Oppo A3x · IQD 151,500 ; oppo a40m · IQD 223,500 ; OPPO Reno12 F+ Gift · IQD 403,500 ; Oppo
            Reno12 (12GB/512GB) · IQD 598,500 ; Oppo A60 · IQD 229,500.</b></p>
          
          <br><br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          
          <!--<a href="./cv.pdf" class="btn btn-primary btn-lg px-4 me-md-2"> Download cv <i class="bi bi-download"></i></a>
          </div><br>
          
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          
            <a href="./poem.pdf" class="btn btn-primary btn-lg px-4 me-md-2"> poem</a>-->
            </div>
        </div>
      </div>
    </div>
  </section>
  
    <!-- end about section -->







     <!-- start about section -->
   <section id="about" style="background-color: pink;">
    <div class="container col-xxl-8 px-4 py-5">
      <!--<h2 class="pb-2 border-bottom fw-bold">About Me</h2>-->
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="data:image/jpeg;base64,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" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" 
          width="300" height="300" loading="lazy"
          style="border-radius: 100% ;box-shadow: 10px -10px lightcoral;">
        </div>
        <div class="col-lg-6">
          
          <h4 class="display-5 fw-bold lh-1 mb-3">Vivo</h4>
          <div class="bt-2 border bottonm fw-bold"></div>
          <p><b style="font-size: 20px; font-family: sans-serif;">
            Vivo phones feature a high-quality display with vivid colours and wide viewing angles. They also come with powerful cameras with features such as AI scene recognition, night mode, professional mode, and more.
          
Vivo V40 Pro Price in Pakistan 2024
Vivo V40 Pro price in Pakistan is 164,999 PKR. Vivo V40 Pro is available with a variant 256 Storage. This storage is enough to save important data.
 </b>
          </p>
          
          <br><br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          
          <!--<a href="./cv.pdf" class="btn btn-primary btn-lg px-4 me-md-2"> Download cv <i class="bi bi-download"></i></a>
          </div><br>
          
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          
            <a href="./poem.pdf" class="btn btn-primary btn-lg px-4 me-md-2"> poem</a>-->
            </div>
        </div>
      </div>
    </div>
  </section>
  
    <!-- end about section -->






     <!-- start about section -->
   <section id="about" style="background-color: pink; ">
    <div class="container col-xxl-8 px-4 py-5">
      <!--<h2 class="pb-2 border-bottom fw-bold">About Me</h2>-->
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="data:image/jpeg;base64,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"
          width="300" height="300" loading="lazy"
          style="border-radius: 100% ;box-shadow: 10px -10px lightcoral;">
        </div>
        <div class="col-lg-6">
          
          <h4 class="display-5 fw-bold lh-1 mb-3">Iphon6</h4>
          <div class="bt-2 border bottonm fw-bold"></div>
          <p><b style="font-size: 20px; font-family: sans-serif;">The iPhone 6 and 6 Plus include larger 4.7-inch and 5.5-inch displays, a faster processor, upgraded cameras, improved LTE and Wi-Fi connectivity and support for a near-field communications-based mobile payments offering.Lowest Price, Average Price, Highest Price. 159 IQD, 213 IQD, 275 IQD. Listings. Browse now. 21 hours ago. Apple iPhone 6S 32 GB in Baghdad. </b>
          </p>
          
          <br><br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          
          <!--<a href="./cv.pdf" class="btn btn-primary btn-lg px-4 me-md-2"> Download cv <i class="bi bi-download"></i></a>
          </div><br>
          
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          
            <a href="./poem.pdf" class="btn btn-primary btn-lg px-4 me-md-2"> poem</a>-->
            </div>
        </div>
      </div>
    </div>
  </section>
  
    <!-- end about section -->
  </div>


    


    <div  class="container ">
      <div class="carousel">
        <div class="carousel__face"><span></span></div>
        <div class="carousel__face"><span></span></div>
        <div class="carousel__face"><span></span></div>
        <div class="carousel__face"><span></span></div>
        <div class="carousel__face"><span></span></div>
        <div class="carousel__face"><span></span></div>
        <div class="carousel__face"><span></span></div>
        <div class="carousel__face"><span></span></div>
        <div class="carousel__face"><span></span></div>
      </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





   
<!--start home section-->
<section id="home">
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcZrI0xH6N_th7j0nt2rKkS_RFzhXYW2tTBg&s " class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="300" loading="lazy"
        style="border-radius: 20px ;box-shadow: 10px -10px lightcoral;" >
      </div>
      <div class="col-lg-6">
       
        <h1 class="display-5 fw-bold lh-1 mb-3">Galaxy</h1>
       
        <!--<h1 class="display-5 fw-bold lh-1 mb-3" style="color:SlateBlue;">Iam a Front End Developer</h1>-->
        <h4>It retains the stellar premium build quality, vibrant display, and versatile camera array that made its predecessor a standout. The AI-powered additions like live translations, enhanced generative photo editing, and productivity features also keep the S24 Ultra on the cutting edge for high-end smartphones.
          What is the Samsung Galaxy S24 Ultra price range for different storage options? As expected the price of the phone varies on the amount of storage you opt for. For 256GB it is around £1,249.00, £1,349 for 512GB and £1,549.00 for 1TB.
        </h4>
        <br><br>
        
      </div>
    </div>
  </div>
</section>
  <!--end home section-->








  <!--start home section-->
<section id="home">
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9cR0OXiNMG_16cf2oveJ_y4v2NbhZeC7olw&s " class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="300" loading="lazy"
        style="border-radius: 20px ;box-shadow: 10px -10px lightcoral;" >
      </div>
      <div class="col-lg-6">
       
        <h1 class="display-5 fw-bold lh-1 mb-3">Redmi</h1>
       
        <!--<h1 class="display-5 fw-bold lh-1 mb-3" style="color:SlateBlue;">Iam a Front End Developer</h1>-->
        <h4>Redmi phones use Xiaomi's MIUI or HyperOS user interface on top of Android. Models are divided into the entry-level Redmi, the mid-range Redmi Note, and the high-end Redmi K. In 2022, a lower-priced entry-level lineup, Redmi A was introduced, featuring Android Go and lacking MIUI user interface.</h4>
        <br><br>
        
      </div>
    </div>
  </div>
</section>
  <!--end home section-->










  <!--start home section-->
<section id="home">
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQETANCJsVsdqimbfb2ALtVlmOjATej9YRNw&s " class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="300" loading="lazy"
        style="border-radius: 20px ;box-shadow: 10px -10px lightcoral;" >
      </div>
      <div class="col-lg-6">
       
        <h1 class="display-5 fw-bold lh-1 mb-3">Huawei</h1>
       
        <!--<h1 class="display-5 fw-bold lh-1 mb-3" style="color:SlateBlue;">Iam a Front End Developer</h1>-->
        <h4>The company's Mate 20 Pro regularly makes Business Insider's list of the best smartphones in the world thanks to its beautiful design, excellent screen, and snappy performance. Huawei's flagship smartphones are also known for their impressive cameras, and that remains true with the P30 Pro, 
          Top 10 Huawei Products	Price
Honor X10 5G	Rs 54,999
Honor 9A	Rs 29,999
Honor X10 Max 5G	Rs 52,999
Huawei Nova 9	Rs 98,999

        </h4>
        <br><br>
        
      </div>
    </div>
  </div>
</section>
  <!--end home section-->
























  <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
      
    </div>
    <ul class="icons">
    <li> <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDF0KkbdfqgO2Z6KOvgzUlrJ72t-tCy5Tj5Q&s"  
      width="90%" height="60px"></a></li>
    <li> <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQbRTyD34UVm3UCNMqYF86xeHdWpLV6Jnvsg&s"
      width="90%" height="60px"></a></li>
    <li> <a href="#"><img src="data:image/jpeg;base64,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"
      width="90%" height="60px"></a></li>
    <li> <a href="#"><img src="data:image/jpeg;base64,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"
      width="90%" height="60px"></a></li>






    </ul>


    <ul class="menu">
      <li><a href="">Home</a></li>
      <li><a href="">About</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="">Team</a></li>
    </ul>
    <p>SAT INSTITUTE</p>


    
  </footer>
      
</body>
</html>

