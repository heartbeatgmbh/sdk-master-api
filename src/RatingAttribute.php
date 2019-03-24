<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class RatingAttribute extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%rating-attributes}}';
    }
}