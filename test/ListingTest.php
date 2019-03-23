<?php

namespace Heartbeat\Master\Test;

use Heartbeat\Master\Listing;

class ListingTest extends SdkMasterApiTestCase
{
    public function testFindPois()
    {
        $pois = Listing::findPois(['bar', 'club'])->all($this->getClient());

        $this->assertNotEmpty($pois->getModels());
    }

    public function testFindEvents()
    {
        $eventdates = Listing::findEventDates(['museum'])->all($this->getClient());

        $this->assertNotEmpty($eventdates->getModels());
    }
}