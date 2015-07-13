<!doctype html>
<!-- Explanation: http://www.phpied.com/conditional-comments-block-downloads/ -->
<!--[if IE]><![endif]-->
<html dir="ltr" lang="en">
<head>
	<title>TABS</title>
   <script src="modernizr-1.6.min.js"></script>
   <meta charset="utf-8">
   <meta name="author" content="Bradley Few" />
   <link rel="stylesheet" href="tabs.css" />
</head>
<?php flush(); ?>
<body>
   <div class="container">
   	<ul id="tabs-nav">
      	<li><a href="#tab1">Tab 1</a></li>
      	<li><a href="#tab2">Tab 2</a></li>
      </ul>
      <div id="tabs" class="loaded">
      	<div id="tab1" class="active">
         	<p>Wow im inside of a freaking tab 1 right now!</p>
         	<p>Wow im inside of a freaking tab 1 right now!</p>
         	<p>Wow im inside of a freaking tab 1 right now!</p>
         	<p>Wow im inside of a freaking tab 1 right now!</p>
         	<p>Wow im inside of a freaking tab 1 right now!</p>
         </div>
      	<div id="tab2">
         	<p>Wow im inside of a freaking tab 2 right now!</p>
         	<p>Wow im inside of a freaking tab 2 right now!</p>
         	<p>Wow im inside of a freaking tab 2 right now!</p>
         	<p>Wow im inside of a freaking tab 2 right now!</p>
         	<p>Wow im inside of a freaking tab 2 right now!</p>
         	<p>Wow im inside of a freaking tab 2 right now!</p>
         	<p>Wow im inside of a freaking tab 2 right now!</p>
         	<p>Wow im inside of a freaking tab 2 right now!</p>
         	<p>Wow im inside of a freaking tab 2 right now!</p>
         	<p>Wow im inside of a freaking tab 2 right now!</p>
         	<p>Wow im inside of a freaking tab 2 right now!</p>
         </div>
      </div>
      <script>
      	document.getElementById('tabs').style.display = 'none';
      </script>	
   </div>
   <script src="jquery.js"></script>
   <script src="tabs.js"></script>
   </script>
</body>
</html>