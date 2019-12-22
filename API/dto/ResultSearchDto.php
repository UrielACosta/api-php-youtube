<?php
class ResultSearchDto
{

    public $published;
    public $id;
    public $title;
    public $description;
    public $thumbnail;
    public $extra;


    public function __construct($data)
    {
        
        $this->published =  $data->snippet->title;
        $this->id =  $data->id->videoId;
        $this->title =  $data->snippet->title;
        $this->description =  $data->snippet->description;
        $this->thumbnail =  $data->snippet->thumbnails->default->url;
        // $this->extra =  $data->cep;
    }
}
