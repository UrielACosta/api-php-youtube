﻿<?php


require_once('controller/SearchController.php');


if (isset($_GET)){

  $term = '';
  $limit = 0;

  if (isset($_GET['term'])){

    $term = $_GET['term'];

    if (isset($_GET['limit'])){  

      if (ctype_digit($_GET['limit'])){
        $limit = $_GET['limit'];
     
      }else{
        $limit = 10;  
      }

    }else{
      $limit = 10;
    }

    $startService = new SearchController();
    $startService->getSearch($term, $limit);

  }else{
    print_r (json_encode(array('status' => 'erro', 'dados' => 'Invalid url parameter')));
  }
}
