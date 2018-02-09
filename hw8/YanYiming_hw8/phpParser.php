<?php
      include "index.html";

      require_once __DIR__ . '/php-graph-sdk-5.0.0/src/Facebook/autoload.php';

      $fb = new Facebook\Facebook([
        'app_id' => '1863995800489346',
        'app_secret' => 'd17c4e56d6469f3980b63a46cf50b566',
        'default_graph_version' => 'v2.8',
      ]);

      if(isset($_GET['keyword'])){
        $_keyword = $_GET['keyword'];
      }else{
        exit();
      }
      if (isset($_GET['cid'])) {
         $_type=$_GET["cid"];
      }else{
        exit();
      }
      
      
      echo $_keyword;

      $_access = 'EAAafS1eNDYIBABcZBilcdYZBGt7hlbKqwbaEw4X7DhxPXomlPbSQO3b1pwZBC51XO89lCEzBl9l3X7h5YqkFSA9ULfe5geFaZC5tsxrPLeEWf0VxjmD5Ju6FSfQZAI5apx0vkck8FWs8ue8Gv1Gze76txepZCG9J4ZD';
      $fb -> setDefaultAccessToken($_access);