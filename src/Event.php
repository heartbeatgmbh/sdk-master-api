<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;

/**
 * Event Model.
 * 
 * The event object contains the meta informations about an event, date informations (as events
 * can have multiple dates) are stored in EventDate model.
 * 
 * Therefore data is retrieved from API trough EventDate.
 * 
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.0
 */
class Event extends ActiveEndpoint
{
    public $id;
    public $title;
    public $description;
    public $price;
    public $age;
    public $website;
    public $ticket_link;
    public $flyer;

    /**
     * {@inheritDoc}
     */
    public function getEndpointName()
    {
        return '{{%events}}';
    }

    private $_pois = [];

    public function setPois(array $pois)
    {
        $this->_pois = $pois;
    }

    public function getPois()
    {
        return Poi::iterator($this->_pois);
    }

    public function findBlogs()
    {
        return Blog::view($this->id)
            ->setEndpoint('{endpointName}/{id}/blogs')
            ->setTokens(['endpointName' => self::getEndpointName()]);
    }

    public function findEventDates()
    {
        return EventDate::view($this->id)
            ->setEndpoint('{endpointName}/{id}/dates')
            ->setTokens(['endpointName' => self::getEndpointName()]);
    }
}
