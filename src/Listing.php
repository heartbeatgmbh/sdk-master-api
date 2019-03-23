<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Listing extends ActiveEndpoint
{
    public $eventdate_id;
    public $event_id;
    public $poi_id;
    public $alias;
    public $last_update;

    public function getEndpointName()
    {
        return '{{%list}}';
    }

    public function findPois(array $tags)
    {
        return self::find()->setEndpoint('{endpointName}/pois')->setArgs(['tags' => implode(",", $tags)]);
    }

    public function findEventDates(array $tags)
    {
        return self::find()->setEndpoint('{endpointName}/eventdates')->setArgs(['tags' => implode(",", $tags)]);
    }

    public function findBlogs(array $tags)
    {
        return self::find()->setEndpoint('{endpointName}/blogs')->setArgs(['tags' => implode(",", $tags)]);
    }
}