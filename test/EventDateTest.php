<?php

namespace Heartbeat\Master\Test;

use Heartbeat\Master\Listing;
use Heartbeat\Master\EventDate;


class EventDateTest extends SdkMasterApiTestCase
{
    public function testFindByTags()
    {
        $listing = Listing::findEventDates(['museum'])->all($this->getClient());
        $tags = EventDate::findByTags($listing)->all($this->getClient());

        $this->assertNotEmpty(count($tags->getModels()));
    }
}