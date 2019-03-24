<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Banner extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%banners}}';
    }
    
    public static function viewByIdentifier($identifier)
    {
        
    }
}