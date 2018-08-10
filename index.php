<html>
<head>

<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link href="style.css"  rel="stylesheet">


</head>

<body>


<?php

 require_once 'phpQuery-onefile.php';

 include 'toBaze.php';

   for ($i = 1; $i <= 1; $i++) {
    
    $res = "https://www.olx.ua/detskiy-mir/";

    $habrablog = file_get_contents($res);

    $document = phpQuery::newDocument($habrablog);
  $hentry = $document->find('body');
  
echo $hentry;
    
  }

?>


<div id="information"></div>
<script src="js.js"> </script>
</body>
</html>					