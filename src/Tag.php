<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Tag extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%tags}}';
    }

    public static function findByIds(array $ids)
    {
        return self::find()
            ->setEndpoint('{endpointName}/items/'.implode(",", $ids));
    }

}