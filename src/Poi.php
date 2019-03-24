<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Poi extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%pois}}';
    }

    public static function findByIds(array $ids)
    {
        return self::find()
            ->setEndpoint('{endpointName}/items/'.implode(",", $ids));
    }

    public function findEventDates()
    {
        return EventDate::view($this->id)
            ->setEndpoint('{endpointName}/{id}/eventdates')
            ->setTokens(['endpointName' => $this->getEndpointName()]);
    }

    public function findRecommend($clickId = null)
    {
        return self::find()
            ->setEndpoint('{endpointName}/recommend')
            ->setArgs(['poiId' => $this->id]);
    }
}