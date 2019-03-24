<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Redirect extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%redirect}}';
    }
}