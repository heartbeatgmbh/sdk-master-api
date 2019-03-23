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

    public function testFindBlogTroughBlumenEvents()
    {
        $listing = Listing::findEventDates(['club'])->all($this->getClient());
        $tags = EventDate::findByTags($listing)->setExpand(['event'])->all($this->getClient());

        foreach ($tags->getModels() as $tag) {
            $allDatesForAnEvent = $tag->event->findEventDates()->all($this->getClient());

            $this->assertNotNull(count($allDatesForAnEvent->getModels()));
        }
    }
}