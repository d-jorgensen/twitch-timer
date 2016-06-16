<head>
<style>
body {
    background: gray;
}
#until300s {
    color: white;
    margin: 0px 0px 0px 0px;
    padding: 2px 2px 2px 2px;
    font-family: "Lucida Console";
    font-size: 120px;
    text-align: center;
    width: 1600px;
   -webkit-text-stroke-width: 2px;
   -webkit-text-stroke-color: #111;
    text-shadow:
       6px 6px 0 #444,
     -2px -2px 0 #444,  
      2px -2px 0 #444,
      -2px 2px 0 #444,
       2px 2px 0 #444;
} 
</style>

<link rel="stylesheet" type="text/css" href="css/jquery.countdown.css"> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.plugin.js"></script> 
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script>
$(function () {
	$('#until300s').countdown({until: '+5m', format: 'MS', layout: 'Starting in <B>{mnn}{sep}{snn}'});
});
</script>

</head>

<body>
<div id="until300s"></div>


<body>
