<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Stream extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%streams}}';
    }
}