<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">

<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>



</head>

<body  >
<div id="ais-concierge"></div><script src="https://cdn.aisoftware.com/concierge/index.js"
id="ais-concierge-script" concierge-token="4e8fe09d-8cef-4af7-8fcd-2bcb8852d4e8"></script>
<div class="navbar">
  <a class="active" href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Data Center 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="data.php">New Cases</a>
      <a href="mortality.php">Mortality</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Maps 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="map1.php">Affected Countries</a>
      <a href="map2.php">Total Cases</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Predictor 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="predictor.php">Excel Data</a>
      <a href="asia.php">Asia</a>
      <a href="world.php">World</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Live Track 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://27mbjlivdgqin4iorizvkg-on.drv.tw/covid/location2.html">COVID19 Cases</a>
      <a href="https://27mbjlivdgqin4iorizvkg-on.drv.tw/covid/inhosp.html">Nearest Hospital(India)</a>
      <a href="whosp.php">Nearest Hospital(USA)</a>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">News 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="who.php">World Health Organization</a>
      <a href="news.php">India Today</a>
 </a>
    </div>
  </div>
  <a href="risk.php">Risk Scan</a>
  <a href="help.php">Helping Hand</a>
</div>

<script type="application/javascript" src="https://sdki.truepush.com/sdk/v2.0.2/app.js" async></script>
<script>
var truepush = window.truepush || [];
truepush.push(function(){
    truepush.Init({
        id: "5e9487ff38a65d0ddd2e90d1"
        }, function(error){
          if(error) console.error(error);
        })
    })
</script>
</body>
</html>
