<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class BannerClick extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%banner-clicks}}';
    }
}