<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>J0hnny 5 Command Center</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
</head>

<body>
  <?php
  // $val_array = array (0,0,0,0,0,0,0,0);
  // $pin = array (8,9,7,0,2,3,12,13);
  // //this php script generate the first page in function of the file
  // for ( $i= 0; $i<8; $i++) {
  //   //set the pin's mode to output and read them
  //   system("gpio mode ".$pin[$i]." out");
  //   exec ("gpio read ".$pin[$i], $val_array[$i], $return );
  // }
  // //for loop to read the value
	// $i =0;
	// for ($i = 0; $i < 8; $i++) {
	// 	//if off
	// 	if ($val_array[$i][0] == 0 ) {
	// 		echo ("<img id='button_".$i."' src='data/img/red/red_".$i.".jpg' onclick='change_pin (".$i.");'/>");
	// 	}
	// 	//if on
	// 	if ($val_array[$i][0] == 1 ) {
	// 		echo ("<img id='button_".$i."' src='data/img/green/green_".$i.".jpg' onclick='change_pin (".$i.");'/>");
	// 	}	 
	// }
  ?>
  <div class="viewport-container">
    <div class="container">
      <div class="item" id="btn_0" onclick="change_pin(0);">
        <div class="hexagon">Light Bar</div>
      </div>
      <div class="item" id="nightBtn">
        <div class="hexagon night-btn">Night Mode</div>
      </div>
      <div class="item" id="btn_1" onclick="change_pin(1);">
        <div class="hexagon">Spot Lights</div>
      </div>
      <div class="item" id="btn_2" onclick="change_pin(2);">
        <div class="hexagon">Ditch Lights</div>
      </div>
      <div class="item" id="btn_3" onclick="change_pin(3);">
        <div class="hexagon">Rear Lights</div>
      </div>
      <div class="item" id="btn_4" onclick="change_pin(4);">
        <div class="hexagon">Side Lights</div>
      </div>
      <div class="item hidden">
        <div class="hexagon"></div>
      </div>
      <div class="item" id="btn_5" onclick="change_pin(5);">
        <div class="hexagon">Rock Lights</div>
      </div>
      <div class="item" id="btn_6" onclick="change_pin(6);">
        <div class="hexagon">Fog Lights</div>
      </div>
      <div class="item" id="btn_7" onclick="change_pin(7);">
        <div class="hexagon">All Lights</div>
      </div>
      <div class="item hidden">
        <div class="hexagon"></div>
      </div>
      <div class="item hidden visible-lg">
        <div class="hexagon"></div>
      </div>
      <div class="item hidden visible-lg">
        <div class="hexagon"></div>
      </div>
      <div class="item hidden visible-lg">
        <div class="hexagon"></div>
      </div>
    </div>
  </div>
  <script src="assets/js/script.js"></script>
</body>

</html>