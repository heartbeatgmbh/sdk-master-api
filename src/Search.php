<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Search extends ActiveEndpoint
{
    public function getEndpointName()
    {
        return '{{%search}}';
    }

    public static function finder($query, $klickIdentifier = 0)
    {

    }

    public static function all($query)
    {
        // index
    }

    public static function eventDates($query)
    {

    }

    public static function blogs($query)
    {

    }
    
    public static function pois($query)
    {

    }
}