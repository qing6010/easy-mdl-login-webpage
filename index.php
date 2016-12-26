<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require 'EasyLogin.php';

    $opts = array(
    	'id_entry' => 'duSWnS1sW',
    	'title' => 'DemoPage',
    	'usr_pwd' => array('usr1'=>'pwd1','usr2'=>'pwd2'), 
    	'duration' => 5,
    	'background_img'=> 'login_bg.jpg',
    );
    
    (new EasyLogin($opts))->login();
?>
<html>
    <body>
      <h1>Secure Contents</h1>
      <p>This is a demo page that adds the material design login page. </p>
      <p>The user name and password is 'usr1'/'pwd1' or 'usr2'/'pwd2', and will keep login state for 5 hours.</p>
      <p>Contents in this page will be hidden unless you log in.</p>
      <a href="https://github.com/qinst64/">
        <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67"
        alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png">
    </a>
    </body>
</html>
