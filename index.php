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
  <div class="viewport-container">
    <div class="container">
      <div class="item">
        <div class="hexagon">Light Bar</div>
      </div>
      <div class="item" id="nightBtn">
        <div class="hexagon night-btn">Night Mode</div>
      </div>
      <div class="item active">
        <div class="hexagon">Spot Lights</div>
      </div>
      <div class="item">
        <div class="hexagon">Ditch Lights</div>
      </div>
      <div class="item">
        <div class="hexagon">Rear Lights</div>
      </div>
      <div class="item">
        <div class="hexagon">Side Lights</div>
      </div>
      <div class="item hidden">
        <div class="hexagon"></div>
      </div>
      <div class="item">
        <div class="hexagon">Rock Lights</div>
      </div>
      <div class="item">
        <div class="hexagon">Fog Lights</div>
      </div>
      <div class="item">
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
  <script>
    let nightBtn = document.getElementById('nightBtn');
    let nightEl = document.body;
    nightBtn.addEventListener('click', () => {
      if (nightEl.classList.contains('night-mode')) {
        nightEl.classList.remove('night-mode');
        nightBtn.innerHTML = '<div class="hexagon night-btn">Night Mode</div>';
      } else {
        nightEl.classList.add('night-mode');
        nightBtn.innerHTML = '<div class="hexagon day-btn">Day Mode</div>';
      }
    });
  </script>
</body>

</html>