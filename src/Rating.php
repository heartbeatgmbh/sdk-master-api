<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Rating extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%ratings}}';
    }
}