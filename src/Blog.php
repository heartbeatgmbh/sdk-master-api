<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


/**
 * Get Blogs
 */
class Blog extends ActiveEndpoint
{
    public $id;

    public static function getEndpointName()
    {
        return '{{%blogs}}';
    }

    public static function viewPreview($id)
    {
        return self::view($id)->setEndpoint('{endpointName}/preview/{id}');
    }
}