<?php include("form_process.php");?>
<head>
  <title> Muchen Zhang </title>
  <link href="contact.css" type="text/css"rel="stylesheet">
</head>

<body>

  <div id="nav">
     <ul>
       <li><a href="index.html">HOME</a></li>
       <li><a href="#">PORTFOLIO</a></li>
       <li><a href="#">RESUME</a></li>
       <li><a href="recipes.html">RECIPES</a></li>
       <li><a href="AboutPage.html">ABOUT</a></li>
       <li style="float:right"><a class="active" href="contact.php">CONTACT</a></li>
     </ul>
   </div>

   <div id="main1">
   <h4>Leave Me A Note</h4>
   </div>

<form action="<?$_SERVER['PHP_SELF'];?>" method="post">
  <input name="name" value="<?= $name ?>" type="text" class="feedback-input" placeholder="Your Name" />
  <span class="error"><?= $name_error ?></span>

  <input name="email" value="<?= $name ?>" type="text" class="feedback-input" placeholder="Your Email" />
  <span class="error"><?= $email_error ?></span>

  <textarea name="notes"  value="<?= $name ?>" class="feedback-input" placeholder="Notes"></textarea>
  <input type="submit" value="SUBMIT"/>


</form>


</body>
