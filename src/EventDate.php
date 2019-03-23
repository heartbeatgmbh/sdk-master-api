<?php

namespace Heartbeat\Master;

use luya\headless\ActiveEndpoint;
use luya\headless\Client;
use luya\headless\endpoint\ActiveEndpointResponse;

/**
 * Event Date Active Endpoint.
 * 
 * Contains the Event Date informations.
 * 
 * The meta informations about events are stored in Event.
 * 
 * Expands:
 * - event
 * 
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.0
 */
class EventDate extends ActiveEndpoint
{
    public $id;
    public $event_id;
    public $start_timestamp;
    public $end_timestamp;
    public $extra_text;
    public $origin;
    public $impressions;
    public $impressions_hot;

    /**
     * {@inheritDoc}
     */
    public function getEndpointName()
    {
        return '{{%eventdates}}';
    }

    private $_event;

    public function setEvent(array $event)
    {
        $this->_event = $event;
    }

    public function getEvent()
    {
        return new Event($this->_event);
    }

    public function findByIds(array $ids)
    {
        return self::find()->setEndpoint('{endpointName}/items/'.implode(",", $ids));
    }

    public function findByTags(ActiveEndpointResponse $listing)
    {
        $ids = [];
        foreach ($listing->getModels() as $item) {
            $ids[] = $item->eventdate_id;
        }

        return self::findByIds($ids);
    }
}