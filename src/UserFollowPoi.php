<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;

class UserFollowPoi extends ActiveEndpoint
{
    public $user_id;
    public $poi_id;

    public static function getPrimaryKeys()
    {
        return ['user_id', 'poi_id'];
    }

    public function getEndpointName()
    {
        return 'user-follow-pois';
    }

    public static function findByUser($id)
    {
        return self::view($id)
            ->setEndpoint('{endpointName}/{id}/follow-pois')
            ->setTokens([
                'endpointName' => User::getEndpointName(),
            ]);
    }

    private $_poi;

    public function setPoi($poi)
    {
        $this->_poi = $poi;
    }

    public function getPoi()
    {
        return new Poi($this->_poi);
    }
}