<?php
session_start();
if(!isset($_SESSION['username'])){    
 echo "<script>location.href='login.php'</script>";
}
include_once 'includes/config.php';
 
$config = new dbConfig();

$db = $config->getConnection();
include_once 'includes/data.inc.php';
$user = new userData($db);
$user->username = $_SESSION['username'];
$user->getUserData();
$funcname = "Connect";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        @font-face {
	font-family: myFont;
	src: url(fonts/Sansation/SansationLight.ttf);
    }  
    </style>  

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="BinaryHaven officail website" content="binaryhaven">
    <meta name="author" content="">
 
    <title>BinaryHaven&trade;</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/app.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet">
	
    <!-- Bootstrap core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet">-->
 
    <!-- Custom styles for this template -->
    <!-- <link href="css/signin.css" rel="stylesheet"> -->
    <link href="css/testimonial.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/inputvariables.js"></script>
	<script type="text/javascript" src="js/connectdemo.js"></script>
    <script type="text/javascript" src="js/connectlive.js"></script>
    <script type="text/javascript" src="js/connectmaster.js"></script>
    <script type="text/javascript" src="js/connectguru.js"></script>
    <script type="text/javascript" src="js/connectsupreme.js"></script>
	<script type="text/javascript" src="js/onOpen.js"></script>
	<script type="text/javascript" src="js/jsonresponses.js"></script>
	<script type="text/javascript" src="js/jsoncalls.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/playsound.js"></script>
	<script type="text/javascript" src="js/timers.js"></script>
	<script type="text/javascript" src="js/writetoscreen.js"></script>
	<script type="text/javascript" src="js/tradingOperations.js"></script>
	<script type="text/javascript" src="js/tock.js"></script>

</head>
 
<body>

<audio id="audio" src="sounds/beep.wav" autostart="false" ></audio>
<audio id="audio1" src="sounds/pokerchip1.wav" autostart="false" ></audio>
<audio id="audio2" src="sounds/pokerchip2.wav" autostart="false" ></audio>
<audio id="audio3" src="sounds/pokerchip3.wav" autostart="false" ></audio>
<audio id="audio4" src="sounds/pokerchip4.wav" autostart="false" ></audio>
<audio id="audio5" src="sounds/pokerchip5.wav" autostart="false" ></audio>

<audio id="audio14" src="sounds/loggedin.wav" autostart="false" ></audio>
<audio id="audio15" src="sounds/beepbeep.wav" autostart="false" ></audio>
<audio id="audio16" src="sounds/flip.wav" autostart="false" ></audio>
<audio id="audio17" src="sounds/shortping.wav" autostart="false" ></audio>
<audio id="audio18" src="sounds/lowping.wav" autostart="false" ></audio>
<audio id="audio19" src="sounds/highpop.wav" autostart="false" ></audio>
<audio id="audio20" src="sounds/woncoins.wav" autostart="false" ></audio>
<audio id="audio21" src="sounds/woncoin.wav" autostart="false" ></audio>
<audio id="audio22" src="sounds/lost1.wav" autostart="false" ></audio>
<audio id="audio23" src="sounds/lost2.wav" autostart="false" ></audio>
<audio id="audio24" src="sounds/success.wav" autostart="false" ></audio>
<audio id="audio25" src="sounds/done.wav" autostart="false" ></audio>
<p><br>
<!----------------------------------------------------------------------HEADER-------------------------------------->
<!----------------------------------------------------------------------HEADER-------------------------------------->
<!----------------------------------------------------------------------HEADER-------------------------------------->
<!----------------------------------------------------------------------HEADER-------------------------------------->
<div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <!--<img class="ribbon" src="img/ribbon.png">-->
            <div class="row">
                <div class="col-xs-6">
                  <h4 class="modal-title" id="myModalLabel"><b>Binary<font color="#59E817">Haven</font>&trade;</b>5.3.0</h4>
                </div>
                <div class="col-xs-6 paddown padleftbuttons">
               
               
                <!-- <b id="tradeaction"></b>
                <b id="tradeDirectionqq"></b> 
                <b id="tradeDirectionqq"></b>
                <b id="tradeDirectionqq"></b>
                <b id="tradeDirectionqq"></b> <b id="currentappid"></b>-->

                <script>
                    
                    tokeniddemo = "<?php echo $user->token_id_demo; ?>";
                    appiddemo = "<?php echo $user->app_id_demo; ?>";
                    tokenidlive = "<?php echo $user->token_id_live; ?>";
                    appidlive = "<?php echo $user->app_id_live; ?>";
                    tokenidmaster = "<?php echo $user->token_id_master; ?>";
                    appidmaster = "<?php echo $user->app_id_master; ?>";
                    tokenidguru = "<?php echo $user->token_id_guru; ?>";
                    appidguru = "<?php echo $user->app_id_guru; ?>";
                    tokenidsupreme = "<?php echo $user->token_id_supreme; ?>";
                    appidsupreme = "<?php echo $user->app_id_supreme; ?>";
                </script>


               

                <!-- <img src="img/tinylock.png"><b id="showtradeLock"></b>&nbsp; 
                <input id="toggle-trigger" type="checkbox" data-size="mini" checked data-toggle="toggle">-->

                   <a href="#" id="btnconnect" onclick="toggleSound();">
                        <span class="glyphicon glyphicon-volume-off"></span>
                   </a>
                   
                   <b id="showLoginTime">00:00:00</b> - <b id="showTheTime">00:00:00</b> - <b id="showElapsedMinutes">00:00</b>

                   <a href="#" id="btnconnect" onclick="Connect('<?php echo $user->token_id_demo;?>', '<?php echo $user->app_id_demo;?>');"><button type="button" class="btn btn-default btn-sm small" >Connect</button></a> 

                   <a href="#" id="btnconnect1" onclick="toggleStop();"><button type="button" class="btn btn-default btn-sm small" >Stop</button></a> 

                    <a href="http://www.binaryhaven.co.za/logout.php" id="btnlogout"><button type="button" class="btn btn-default btn-sm small" >Logout </button></a> 
                  


                </div>
            </div>
          
            </div>


          <div class="modal-body">
            
              <div class="row">
<!----------------------------------------------------------------------MAIN CONSOLE ---------------------------->
<!----------------------------------------------------------------------MAIN CONSOLE ---------------------------->
<!----------------------------------------------------------------------MAIN CONSOLE ---------------------------->
<!----------------------------------------------------------------------MAIN CONSOLE ---------------------------->
            
                  <div class="col-xs-3">
                      <div class="well">
                            <div id="mainConsole">
							    <div class="innerConsole debug" id="tradescreen" onscroll="myStopFunction()"></div>
						    </div>
                      </div>
                  </div>
 <!----------------------------------------------------------------------HEADER------------------------------------>
<!----------------------------------------------------------------------HEADER-------------------------------------->
<!----------------------------------------------------------------------HEADER-------------------------------------->
<!----------------------------------------------------------------------HEADER-------------------------------------->

                 <div class="col-xs-3">
                      <div class="well">
                            <div id="mainConsole2">
							    <div class="innerConsole2 debug2" id="trade2ndscreen" onscroll="myStopFunction()"></div>
						    </div>
                      </div>
                  </div>

                  <div class="col-xs-3">
                      <div class="well">
                            <div id="mainConsole3">
							    <div class="innerConsole3 debug3" id="trade3rdscreen" onscroll="myStopFunction()"></div>
						    </div>
                      </div>
                  </div>
                  
                  <div class="col-xs-3 "> <!--  -->
                        <div class="container padleft">

                            <div class="row">

                                <div class="col-xs-4 col-xs-6-main-profilepic">


                                <img class="propic" src="img/profilepics/<?php echo $user->picfile; ?>">
                                

                                </div>

                                

                                <div class="col-xs-4 col-xs-4-main-profiledash-above">
                                    <div><h4><?php echo $user->firstname; ?>&nbsp;&nbsp;
                                        <a href="updateuser.php" data-toggle="tooltip" title="Setup your account here to go online!"><button type="button" class="btn btn-default btn-xs extrasmall" >Edit</button><span class="glyphicon glyphicon-cog padup text-success"  style="padding-left: 4px;">
                                        </span></a></h4>
                                    </div>
                                    <div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-4 col-xs-4-main-profiledash-under">
                                                    <h6><small>COUNTRY<br><img src="img/saflagicontiny.jpg"></small></h6>
                                                </div>
                                                <div class="col-xs-4 col-xs-4-main-profiledash-under ">
                                                    <h6 ><small>STATUS<br><p class="Offline paddown" id="statusblock"><b >Offline</b></p></small></h6>
                                                </div>

                                                <div class="col-xs-4 col-xs-4-main-profiledash-under ">
                                    <h6><small>Profit<br><b></b><b id="showtradeCycle">0</b></small></h6>
                                </div> 
                                                                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div  class="col-xs-3 realbalance">
                                        $
                                </div>
                                
                                <div id="realbalance" class=" col-xs-3 realbalance"> 
                                    
                                </div>

                                <div class="col-xs-3 tockTime3" id="timer3">
                                    <span class="field3 time"></span>
                                </div>

                                <div class="col-xs-3 tockTime" id="timer2">
                                    <span class="field2 time"></span>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xs-3 padleft">
                                
                                <div class="progress">
                                <div id="dynamic" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                  <span id="current-progress"></span>
                                </div>
                              </div>
                                        </div>
                                </div>

                                <div class="row padup" >

                                <div class="col-xs-3 col-xs-4-main-profiledash-under-1">
                                    <h6><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROFIT<br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$</b><b id="profitupdate">0</b></small></h6>
                                </div>

                                
                                
                                <div class="col-xs-3 col-xs-4-main-profiledash-under-1">
                                    <h6><small >ORIGINAL<br><b>$</b><b id="originalbalance">0</b></small></h6>
                                </div>
                                
                                <div class="col-xs-3 col-xs-4-main-profiledash-under-1">
                                    <h6><small>RECOVERY<br><b>$</b><b id="showrescueamount">0</b></small></h6>
                                </div> 


                                
                                <!-- <div class="col-xs-4 col-xs-4-main-profiledash-under">
                                     <h6><small>LEVEL <br><b id="winlossDash">0</b></small></h6>
                                </div>  -->

                                <div class="col-xs-3 col-xs-4-main-profiledash-under-1">
                                     <h6><small>LEVEL&nbsp;&nbsp;<br><b id="winlossDash"></b></small></h6>
                                </div> 
                                
                            </div>
                            


                            <div class="row row_width">                                
                                <div>
                                    
                                        <div id="miniConsole">
                                            <div class="innerConsole debug1" id="infoscreen" onscroll="myStopFunction()"></div>
                                        </div>
                                    
                                </div>
                            </div>

                            <div class="row padleft ">
                                                          
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>GL  <span id="showgurulosses"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>GW <span id="showguruwins"> </small></h6>
                                </div>

                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>TB  <span id="showTB"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>TR  <span id="showTR"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>SG <span id="showSG"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>NX <span id="showNX"> </span></small></h6>
                                </div>

                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>PR  <span id="showPR"> </small></h6>
                                </div>

                            </div>

                        <!-- --------------- -------------- ------------------ -->
                    </div>
                </div>                
            </div>
        </div>

  </div>
<br>
</div>
  <!-- <div class="padchart">
                            
                            
                                <!-- <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D16 <span id="showdot16"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D15 <span id="showdot15"> </span></small></h6>
                                </div>
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D14 <span id="showdot14"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D13 <span id="showdot13"> </span></small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D12  <span id="showdot12"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D11  <span id="showdot11"> </small></h6>
                                </div>

                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D10  <span id="showdot10"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D9  <span id="showdot9"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D8 <span id="showdot8"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D7  <span id="showdot7"> </small></h6>
                                </div>

                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D6 <span id="showdot6"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D5  <span id="showdot5"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D4  <span id="showdot4"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D3  <span id="showdot3"> </small></h6>
                                </div>

                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D2  <span id="showdot2"> </small></h6>
                                </div>
                                
                                <div class="col-xs-2 col-xs-4-main-profiledash-under-1-dots">
                                    <h6><small>D1  <span id="showdot1"> </small></h6>
                                </div>
                                
                            
                        </div> -->
       
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="js/progressbar.js"></script>

    <script>
    $("input[type='image']").click(function() {
    $("input[id='my_file']").click();
});
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


<script type="text/javascript">
        var timer2 = new Tock({
        interval: 1000,
        
        onTick: function() {
            
            tockSeconds = (timer2.lap('{S}'))%14;
            document.querySelector('#timer2 .field2').innerHTML = tockSeconds;
            tradeTickData();

            }
        });       

        var timer3 = new Tock({
            interval: 1000,
            
            onTick: function() {
                tockSeconds3 = (timer3.lap('{S}'));
                document.querySelector('#timer3 .field3').innerHTML = tockSeconds3;
                if(tockSeconds3%25 == 0){
                    ii = 86400;

                    // tradeProfit = 0;
                    // tradeLoss = 0;
                    // maxProfit = 0;
                    // sendbalance = 0;
                    // OriginalBalance = 0;
                    // OriginalBalanceLock = "Off";
                    //mypb();
                    Connect(tokeniddemo,appiddemo);
                    timer3.stop();
                }                
            }
        });           
        
         document.querySelector('#timer2 .field2').innerHTML = timer2.lap('{S}'); 
    
         document.querySelector('#timer3 .field3').innerHTML = timer3.lap('{S}');  
          	
</script>


</body>
</html>