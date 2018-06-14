<!DOCTYPE html>
<html>
<head>
  <title>Tooryanaad'18</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="home_page.css">
<link rel="stylesheet" href="carousel.css">
<script src="homepg_anm.js"></script>
 
<script>
$(document).ready(function(){
               $("div.after_logo_body").hide();
               $("#caption_1").hide();
               $("#logo_1_slide_up").hide();
               $("#logo_1_slide_up").slideDown(2000);
               $("#logo_1_slide_up").delay(2000).slideUp(3000);
               $("#caption_1").delay(6000).slideDown(1500);
               $("#caption_1").slideUp(4100);
               $("div.logo_body").delay(8000).slideUp(4000);
               $("div.after_logo_body").delay(14000).show();
               $("div.scrhl1").hide();
               $("div.scrhl2").hide();
               $("div.scrhl3").hide(); 
    
                                              });

</script>
<script>
$(document).ready(function(){
var count = 0;
$(window).scroll(function() {
    if  (($(document).scrollTop()>650) && (count==0)) {
                 $("div.scrhl1").show(2000);
                  count = count + 1;
   }
});
});

</script>

<script>
$(document).ready(function(){
var count = 0;
$(window).scroll(function() {
    if  (($(document).scrollTop()>700) && (count==0)) {
                 $("div.scrhl2").delay(2000).show(2000);
                 count = count + 1;
    }
});
});

</script>

<script>
$(document).ready(function(){
var count = 0;
$(window).scroll(function() {
    if  (($(document).scrollTop()>740) && (count==0)) {
                 $("div.scrhl3").delay(4000).show(2000);
                 count = count + 1;
    }
});
});

</script>

</head>
<body style="background-color:#242423">


<!--------------------------------------------------------------------------------------------------------first page animation------------------------------------------------------------------>

<div class="logo_body" style="height:1000px;background-image: url(images/logo/2997974-abstract-fractal-digital-art-artwork-colorful-blue-green-shapes___mixed-wallpapers.jpg);background-repeat: no-repeat;">

     <center><img id="caption_1" src="images/logo/tooryanaad_logo_white.png" style="position:absolute;top: 50%;left:10%;"></center>
      <center><h1 id="logo_1_slide_up" style="position:absolute;top: 50%;left:20%;"><font size=7 color=white>&#2349;&#2366;&#2352;&#2340; &#2325;&#2366; &#2360;&#2348;&#2360;&#2375; &#2348;&#2396;&#2366; &#2361;&#2367;&#2306;&#2342;&#2368; &#2350;&#2361;&#2379;&#2340;&#2381;&#2360;&#2357;</font></h1></center>
</div>


<!--------------------------------------------------------------------------------------------main page--------------------------------------------------------------------------------->

<div class="after_logo_body">
<div class="topnav" id="myTopnav">
  <a href="#" class="active"><img src="images/logo/tooryanaad_logo_white.png" height=60 width=160></a>
  <div class="topnav-right">
    <a href="#">&#2350;&#2369;&#2326;&#2346;&#2371;&#2359;&#2381;&#2336;</a>
    <a href="#">&#2310;&#2361;&#2381;&#2357;&#2366;&#2344; &#2346;&#2306;&#2332;&#2368;&#2351;&#2344;</a>
    <a href="#">&#2346;&#2381;&#2352;&#2340;&#2367;&#2351;&#2379;&#2327;&#2367;&#2340;&#2366;&#2319;&#2305;</a>
    <a href="#">&#2360;&#2306;&#2360;&#2381;&#2341;&#2366;&#2346;&#2325; &#2350;&#2306;&#2337;&#2354; &#2319;&#2357;&#2306; &#2346;&#2370;&#2352;&#2381;&#2357; &#2360;&#2342;&#2360;&#2381;&#2351;</a>
    <a href="#">&#2325;&#2366;&#2352;&#2381;&#2351;&#2325;&#2366;&#2352;&#2367;&#2339;&#2368; &#2360;&#2350;&#2367;&#2340;&#2367;</a>
    <a href="#">&#2357;&#2366;&#2352;&#2381;&#2359;&#2367;&#2325; &#2327;&#2340;&#2367;&#2357;&#2367;&#2343;&#2367;&#2351;&#2366;&#2305;</a>
     <a href="#">&#2309;&#2344;&#2381;&#2351;</a>
     <a href="#">&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a>
    <a href="javascript:void(0);" class="icon" onclick="for_mob()">
       <i class="fa fa-bars"></i>
    </a>
 </div>
</div>

<div class="bg"><div class="container-fluid" id="img_hold" style="height:800px">
<br><br>
<table border=0 width="100%"><tr><td colspan=5><h1 id="ll">&#2340;&#2370;&#2352;&#2381;&#2351;&#2344;&#2366;&#2342;</font><img src="images/logo/apple-touch-icon-114.png" id="tnd_logo_1">18</h1></td></tr>
                                                            <tr><td colspan=5><button id="register_btn">&#2309;&#2349;&#2368; &#2346;&#2306;&#2332;&#2368;&#2351;&#2344; &#2325;&#2352;&#2375;&#2306;</button></td></tr>
                                                            <tr><td><br><br></td></tr>
                                                            <tr><td><i class="fa fa-facebook" style="font-size:40px;color:white" id="ff1"></i></td>
                                                                  <td><i class="fa fa-twitter" style="font-size:40px;color:white" id="ff2"></i></td>
                                                                  <td><i class="fa fa-youtube" style="font-size:40px;color:white" id="ff3"></i></td>
                                                                  <td><i class="fa fa-instagram" style="font-size:40px;color:white" id="ff4"></i></td>
                                                                  <td><i class="fa fa-google-plus" style="font-size:40px;color:white" id="ff5"></i></td></tr></table>

                      <div class="content" id="abt_tnd">
                      <h1>&#2327;&#2370;&#2305;&#2332; &#2352;&#2361;&#2368;&#2306; &#2361;&#2376;&#2306; &#2342;&#2360;&#2379;&#2306; &#2342;&#2367;&#2358;&#2366;&#2319;&#2305;, &#2360;&#2325;&#2354; &#2349;&#2366;&#2352;&#2340; &#2325;&#2352; &#2352;&#2361;&#2366; &#2344;&#2367;&#2344;&#2366;&#2342;<br>&#2361;&#2367;&#2306;&#2342;&#2368; &#2325;&#2375; &#2327;&#2380;&#2352;&#2357;&#2327;&#2366;&#2344; &#2325;&#2366; &#2310;&#2361;&#2381;&#2357;&#2366;&#2344; &#2361;&#2376; “&#2340;&#2370;&#2352;&#2381;&#2351;&#2344;&#2366;&#2342;<br></h1>
                      
                       </div>

</div>
</div>
<div class="mid_row">
<br><br>
<!-------------------------------------------------------------------------------------------------------------------------events in tnd--------------------------------------------------------------------------------------------->

<div class="flex-container">
  
       <div class="scrhl1">
            <div class="card">
                 <img src="pinit.jpg" height="50px" width="50px">
                 <div class="name_of_card">
                     <h3><b>&#2346;&#2381;&#2352;&#2340;&#2367;&#2351;&#2379;&#2327;&#2367;&#2340;&#2366;&#2319;&#2305;</b></h3> 
                      
                 </div>
            </div>
       <br>
       </div>
  
  
        <div class="scrhl2">
                <div class="card">
                 <img src="pinit.jpg" height="50px" width="50px"> 
                 <div class="name_of_card">
                     <h3><b>&#2325;&#2366;&#2352;&#2381;&#2351;&#2358;&#2366;&#2354;&#2366;&#2319;&#2305;</b></h3> 
                      
                 </div>
            </div>
        <br>
        </div>
  
  
          <div class="scrhl3">
                 <div class="card">
                  <img src="pinit.jpg" height="50px" width="50px">
                 <div class="name_of_card">
                     <h3><b>&#2309;&#2344;&#2369;&#2360;&#2370;&#2330;&#2368;</b></h3> 
                      
                 </div>
            </div>
          <br>
          </div>
     
</div>


<!-----------------------------------------------------------------------------------------------------flipping card gallary---------------------------------------------------------------------------------->
<br><br>





<script>
function display_img1() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/11.jpg\" height=400px width=100% id=flip_img>";
                                    }
function display_img2() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/12.jpg\" height=400px width=100% id=flip_img>";
                                    }

function display_img3() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/18.jpg\" height=400px width=100% id=flip_img>";
                                    }

function display_img4() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/28079986_1500423300075287_2005691113_o.jpg\" height=400px width=100% id=flip_img>";
                                    }

function display_img5() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/reg_background_taj.jpg\" height=400px width=100% id=flip_img>";
                                    }

function display_img6() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/11.jpg\" height=400px width=100% id=flip_img>";
                                    }

function for_mob() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<br><br>

<!------------------------------------------------------------------------------------------------------writeup---------------------------------------------------------------------------------------------->

 <div class="content" id="abt_tnd1">
                      <h4>&#2340;&#2370;&#2352;&#2381;&#2351;&#2344;&#2366;&#2342; &#2319;&#2325; &#2352;&#2366;&#2359;&#2381;&#2335;&#2381;&#2352;&#2360;&#2381;&#2340;&#2352;&#2368;&#2351; &#2361;&#2367;&#2306;&#2342;&#2368; &#2350;&#2361;&#2379;&#2340;&#2381;&#2360;&#2357; &#2361;&#2376;, &#2332;&#2367;&#2360;&#2325;&#2366; &#2313;&#2342;&#2381;&#2342;&#2375;&#2358;&#2381;&#2351; &#2352;&#2366;&#2332;&#2349;&#2366;&#2359;&#2366; &#2361;&#2367;&#2306;&#2342;&#2368; &#2319;&#2357;&#2306; &#2349;&#2366;&#2352;&#2340;&#2368;&#2351; &#2360;&#2306;&#2360;&#2381;&#2325;&#2371;&#2340;&#2367; &#2325;&#2375; &#2346;&#2381;&#2352;&#2330;&#2366;&#2352; &#2346;&#2381;&#2352;&#2360;&#2366;&#2352; &#2342;&#2381;&#2357;&#2366;&#2352;&#2366; &#2342;&#2375;&#2358;&#2357;&#2366;&#2360;&#2367;&#2351;&#2379;&#2306; &#2350;&#2375;&#2306; &#2360;&#2306;&#2360;&#2381;&#2325;&#2371;&#2340;&#2367; &#2324;&#2352; &#2349;&#2366;&#2359;&#2366; &#2360;&#2375; &#2360;&#2350;&#2381;&#2348;&#2306;&#2343;&#2367;&#2340; &#2325;&#2367;&#2360;&#2368; &#2349;&#2368; &#2346;&#2381;&#2352;&#2325;&#2366;&#2352; &#2325;&#2368; &#2361;&#2368;&#2344; &#2349;&#2366;&#2357;&#2344;&#2366; &#2325;&#2366; &#2344;&#2367;&#2352;&#2366;&#2325;&#2352;&#2339; &#2325;&#2352;&#2325;&#2375; &#2352;&#2366;&#2359;&#2381;&#2335;&#2381;&#2352;&#2327;&#2380;&#2352;&#2357; &#2319;&#2357;&#2306; &#2310;&#2340;&#2381;&#2350;&#2327;&#2380;&#2352;&#2357; &#2325;&#2368; &#2349;&#2366;&#2357;&#2344;&#2366; &#2357;&#2367;&#2325;&#2360;&#2367;&#2340; &#2325;&#2352; &#2313;&#2344;&#2325;&#2375; &#2346;&#2381;&#2352;&#2330;&#2354;&#2344; &#2325;&#2379; &#2360;&#2340;&#2340; &#2348;&#2344;&#2366;&#2319; &#2352;&#2326; &#2325;&#2352; &#2313;&#2344;&#2325;&#2375; &#2309;&#2360;&#2381;&#2340;&#2367;&#2340;&#2381;&#2357; &#2325;&#2366; &#2360;&#2306;&#2352;&#2325;&#2381;&#2359;&#2339; &#2325;&#2352;&#2344;&#2366; &#2361;&#2376;&#2404;
&#2311;&#2360;&#2325;&#2375; &#2309;&#2306;&#2340;&#2352;&#2381;&#2327;&#2340; &#2346;&#2381;&#2352;&#2340;&#2367; &#2357;&#2352;&#2381;&#2359; &#2350;&#2361;&#2366; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2354;&#2351;&#2368;&#2344; &#2331;&#2366;&#2340;&#2381;&#2352;&#2379;&#2306; &#2325;&#2375; &#2354;&#2367;&#2319; &#2309;&#2344;&#2375;&#2325; &#2352;&#2366;&#2359;&#2381;&#2335;&#2381;&#2352;&#2360;&#2381;&#2340;&#2352;&#2368;&#2351; &#2325;&#2366;&#2352;&#2381;&#2351;&#2325;&#2381;&#2352;&#2350;, &#2325;&#2366;&#2352;&#2381;&#2351;&#2358;&#2366;&#2354;&#2366;&#2319;&#2306; &#2319;&#2357;&#2306; &#2325;&#2357;&#2367;&#2360;&#2350;&#2381;&#2350;&#2354;&#2375;&#2344; &#2310;&#2342;&#2367; &#2310;&#2351;&#2379;&#2332;&#2367;&#2340; &#2361;&#2379;&#2340;&#2375; &#2361;&#2376;&#2306;&#2404; &#2357;&#2367;&#2327;&#2340; 5 &#2357;&#2352;&#2381;&#2359;&#2379;&#2306; &#2360;&#2375; &#2360;&#2306;&#2346;&#2370;&#2352;&#2381;&#2339; &#2349;&#2366;&#2352;&#2340; &#2325;&#2375; &#2357;&#2367;&#2349;&#2367;&#2344;&#2381;&#2344; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2367;&#2340; &#2350;&#2361;&#2366;&#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2354;&#2351;&#2379;&#2306; &#2325;&#2375; &#2331;&#2366;&#2340;&#2381;&#2352;&#2379;&#2306; &#2344;&#2375; &#2340;&#2370;&#2352;&#2381;&#2351;&#2344;&#2366;&#2342; &#2350;&#2375;&#2306; &#2310;&#2358;&#2366;&#2340;&#2368;&#2340; &#2346;&#2381;&#2352;&#2340;&#2367;&#2349;&#2366;&#2327;&#2367;&#2340;&#2366; &#2342;&#2352;&#2381;&#2332; &#2325;&#2352;&#2366; &#2325;&#2352; &#2340;&#2370;&#2352;&#2381;&#2351;&#2344;&#2366;&#2342; &#2325;&#2375; &#2313;&#2342;&#2381;&#2342;&#2375;&#2358;&#2381;&#2351; &#2325;&#2379; &#2332;&#2344;&#2350;&#2366;&#2344;&#2360; &#2340;&#2325; &#2346;&#2361;&#2369;&#2305;&#2330;&#2366; &#2325;&#2352; &#2310;&#2351;&#2379;&#2332;&#2325;&#2379;&#2306; &#2325;&#2366; &#2350;&#2344;&#2379;&#2348;&#2354; &#2348;&#2397;&#2366;&#2351;&#2366; &#2361;&#2376;&#2404; &#2310;&#2346; &#2360;&#2349;&#2368; &#2360;&#2375; &#2310;&#2327;&#2381;&#2352;&#2361; &#2361;&#2376; &#2325;&#2367; &#2340;&#2370;&#2352;&#2381;&#2351;&#2344;&#2366;&#2342;’17 &#2350;&#2375;&#2306; &#2351;&#2379;&#2327;&#2342;&#2366;&#2344; &#2325;&#2352; &#2310;&#2346; &#2349;&#2368; &#2311;&#2360; &#2346;&#2357;&#2367;&#2340;&#2381;&#2352; &#2313;&#2342;&#2381;&#2342;&#2375;&#2358;&#2381;&#2351; &#2325;&#2368; &#2346;&#2370;&#2352;&#2381;&#2340;&#2367; &#2325;&#2375; &#2344;&#2367;&#2350;&#2367;&#2340;&#2381;&#2340; &#2348;&#2344;&#2375;&#2404;<br></h4>
                      
  </div>
<!---------------------------------------------------------------------------------------------mid row div--------------------------------------------------------------------------------------------------->
</div>

<div class="end_row1">
<!-----------------------------------------------------------------------------------------------------carousel--------------------------------------------------------------------------------------------->
<br><br>
<div class="container" style="height:500px;width:100%;">
     <section id="slideshow">
			<div class="entire-content">
				<div class="content-carrousel">
					<figure class="shadow"><img src="https://images.pexels.com/photos/758733/pexels-photo-758733.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/21261/pexels-photo.jpg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/567973/pexels-photo-567973.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/776653/pexels-photo-776653.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/54630/japanese-cherry-trees-flowers-spring-japanese-flowering-cherry-54630.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/131046/pexels-photo-131046.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/302515/pexels-photo-302515.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/301682/pexels-photo-301682.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/933054/pexels-photo-933054.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
		</div>
	</div>
</section>
</div>

<br><br>
</div>
<!-----------------------------------------------------------------------------------------------------flipping card events---------------------------------------------------------------------------------->
<div class="end_row2">
<br><br>
<div class="row">
   <div class="col-sm-8"><p id="display_here"><img src="images/flips/11.jpg" height=400px width=100%></p>
   </div>
   <div class="col-sm-4">
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
        <div class="flipper">
        <div class="front">
        <span class="name"><h1>&#2330;&#2367;&#2340;&#2381;&#2352; &#2346;&#2381;&#2352;&#2342;&#2352;&#2381;&#2358;&#2344;&#2368;</h1></span>
        </div>
        <div class="back">
        <div class="back-title"><table border=3 width=100% height=100%>
                                             <tr><td><img src="images/flips/11.jpg" height=100px width=100% onclick="display_img1();"></td><td><img src="images/flips/12.jpg" height=100px width=100% onclick="display_img2();"></td></tr>
                                             <tr><td><img src="images/flips/18.jpg" height=100px width=100% onclick="display_img3();"></td><td><img src="images/flips/28079986_1500423300075287_2005691113_o.jpg" height=100px width=100% onclick="display_img4();"></td></tr>
                                             <tr><td><img src="images/flips/reg_background_taj.jpg" height=100px width=100% onclick="display_img5();"></td><td><img src="images/flips/11.jpg" height=100px width=100% onclick="display_img6();"></td></tr>
                                             <tr><td colspan=2>view all +</td></tr></table>
                                            </div>
        </div>
        </div>
        </div>
   </div>
</div>

<script>
function display_img1() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/11.jpg\" height=400px width=100% >";
                                    }
function display_img2() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/12.jpg\" height=400px width=100%>";
                                    }

function display_img3() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/18.jpg\" height=400px width=100%>";
                                    }

function display_img4() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/28079986_1500423300075287_2005691113_o.jpg\" height=400px width=100%>";
                                    }

function display_img5() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/reg_background_taj.jpg\" height=400px width=100%>";
                                    }

function display_img6() {
document.getElementById("display_here").innerHTML="<img src=\"images/flips/11.jpg\" height=400px width=100%>";
                                    }
</script>
<br><br>
<!---------------------------------------------------------------------------end row 2 div--------------------------------------------------------------------------->
</div>
<!---------------------------------------------------------------------------------after logo body div-------------------------------------------------------------->
</div>
</body>
</html>
