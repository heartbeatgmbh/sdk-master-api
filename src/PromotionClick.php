<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class PromotionClick extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%promotion-clicks}}';
    }
}