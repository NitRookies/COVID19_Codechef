<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<style>
  body{
  }
</style>
<body  >
	<script>  var div = document.createElement('div');  div.className = 'fb-customerchat';  div.setAttribute('page_id', '113682860163746');  div.setAttribute('ref', '');  document.body.appendChild(div);  window.fbMessengerPlugins = window.fbMessengerPlugins || {    init: function () {      FB.init({        appId            : '1678638095724206',        autoLogAppEvents : true,        xfbml            : true,        version          : 'v3.3'      });    }, callable: []  };  window.fbAsyncInit = window.fbAsyncInit || function () {    window.fbMessengerPlugins.callable.forEach(function (item) { item(); });    window.fbMessengerPlugins.init();  };  setTimeout(function () {    (function (d, s, id) {      var js, fjs = d.getElementsByTagName(s)[0];      if (d.getElementById(id)) { return; }      js = d.createElement(s);      js.id = id;      js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";      fjs.parentNode.insertBefore(js, fjs);    }(document, 'script', 'facebook-jssdk'));  }, 0);</script>
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
      <a href="https://github.com/NitRookies/COVID19_Codechef/blob/Predictor/COVID_19_Prediction.ipynb" target="_blank">Python Data(1)</a>
      <a href="https://colab.research.google.com/drive/191P1gxWW1FfjY0Kdbvany1HDaDNiZES1" target="_blank">Python Data(2)</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Live Track 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="location.php">COVID19 Cases</a>
      <a href="inhosp.php">Nearest Hospital(India)</a>
      <a href="whosp.php">Nearest Hospital(USA)</a>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">News 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/media-resources/news"target="_blank">World Health Organization</a>
      <a href="https://economictimes.indiatimes.com/topic/COVID-19"target="_blank">The Economic Times</a>
 </a>
    </div>
  </div>
  <a href="help.php">Helping Hand</a>
</div>


</body>
</html>
