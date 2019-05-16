<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;

class UserNewsletter extends ActiveEndpoint
{
    public $id;
    public $user_id;
    public $organisaton_client_id;
    public $delivery_weekday;
    public $delivery_interval;
    public $data_time_range;
    public $events;
    public $blogs;
    public $openinghours;
    public $created_at;
    public $updated_at;
    
    public function getEndpointName()
    {
        return 'user-newsletters';
    }
}