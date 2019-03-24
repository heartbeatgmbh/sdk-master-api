<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;


class User extends ActiveEndpoint
{
    public $id;
    public $firstname;
    public $lastname;
    public $email;

    public function getEndpointName()
    {
        return '{{%users}}';
    }

    public static function login($username, $password)
    {
        return self::post()
            ->setEndpoint('{endpointName}/login')
            ->setArgs(['username' => $username, 'password' => $password]);
    }

    public static function findByIds(array $ids) // post
    {
        return self::post()
            ->setEndpoint('{endpointName}/list')
            ->setArgs(['ids' => $ids]);
    }

    public static function existsEmail($email) // post
    {

    }

    public static function existsUsername($username) // post 
    {

    }

    public static function assignSocialAuth($userId, $source, $sourceId) // post
    {

    }
}