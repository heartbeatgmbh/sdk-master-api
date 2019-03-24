<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Organisation extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%organisations}}';
    }
}