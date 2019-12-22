<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once('./dto/ResultSearchDto.php');
require_once('./config/AppSettings.php');
header('Content-Type: application/json; charset=utf-8');

class SearchService
{

    private $url;

    function __construct()
    { 
        
        $urlSearchService = new AppSettings();
        $this->url = $urlSearchService->urlPesquisaApi();
  
    }


    function SearchTerm(String $term, int $limit)
    {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        $urlAPI = $this->url . 'search?part=snippet&maxResults='. $limit . '&q='. $term . '&type=video&key=AIzaSyAkWxyfVKsl3WJ3mYntATseMZit2jwuDWs';        
        curl_setopt($ch, CURLOPT_URL, $urlAPI);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        $content = curl_exec($ch);

        $someObject = json_decode($content);

         if(!empty($someObject->error)){            
     
            print_r(json_encode(array('status' => 'erro', 'dados' => 'The request cannot be completed because you have exceeded your quota')));
            return 'error_quota';
        }

        if(empty($someObject->items)){
            print_r (json_encode(array('status' => 'erro', 'dados' => 'No results found')));
            return 'empty';
        }

        // Close curl handle
        curl_close($ch);
        
        $ArrayAPIFinal = [];

        foreach($someObject->items as $item){
            $result =  new ResultSearchDto($item);
            array_push($ArrayAPIFinal, $result);
        }

        print_r (json_encode(array('status' => 'success', 'dados' => $ArrayAPIFinal)));
      }
}





