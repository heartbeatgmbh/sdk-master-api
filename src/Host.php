<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class Host extends ActiveEndpoint
{
    public $id;

    public function getEndpointName()
    {
        return '{{%host}}';
    }

    public static function findSitemap()
    {
        return self::find()
            ->setEndpoint('{endpointName}/sitemap');
    }
}