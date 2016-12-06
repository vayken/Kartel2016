<?php
  
require_once("src/facebook.php");

   $config = array(
      'appId' => '637678046358154',
      'secret' => '284e91982447a2b2e7cc7718bf0a592b',
      'fileUpload' => false, // optional
      'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();
  ?>
  