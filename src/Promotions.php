<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Promotions extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%promotions}}';
    }
}