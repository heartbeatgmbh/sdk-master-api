<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Klick extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%klick}}';
    }

    public static function assign(array $args) // or make params directly available as fn params.
    {
        return self::post()
            ->setEndpoint('{endpointName}/assign');
    }

    public static function viewResolve($id)
    {
        return self::find()
            ->setEndpoint('{endpointName}/resolve')
            ->setArgs(['id' => $id]);
    }

    public static function fragmentizer($url)
    {
        return self::find()
            ->setEndpoint('{endpointName}/fragmentizer')
            ->setArgs(['url' => $url]);
    }

    public static function thingDetail($id)
    {
        return self::find()
            ->setEndpoint('{endpointName}/thing-detail')
            ->setArgs(['id' => $id]);
    }

}