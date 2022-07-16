<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pawsitivity</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script defer src="script.js"></script>
  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id='navBar'>
    <button id="homeBtn" class="navBtn">{LOGO}</button>
    <input id='searchPost' type=text placeholder='search'>
    <?php
    echo "<button id='dropdownBtn' class='navBtn'>{Username} &#8744;</button>";
    ?>
  </div>
</body>

</html>