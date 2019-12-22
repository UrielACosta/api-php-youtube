<?php

require_once('./service/SearchService.php');

class SearchController
{   
    
    private $service;
    function __construct()
    { 
        $this->service = new SearchService();
    }

    public function getSearch($term, $limit)
    {
        
        $this->service->SearchTerm($term, $limit);

    }
}