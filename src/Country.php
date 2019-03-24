<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Country extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%countries}}';
    }
}