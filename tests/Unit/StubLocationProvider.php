<?php
declare(strict_types=1);

namespace JordJD\Geolocation\Tests;

use JordJD\Geolocation\Interfaces\LocationProviderInterface;
use JordJD\Countries\Countries;
use JordJD\Countries\Country;

class StubLocationProvider implements LocationProviderInterface
{
    public function getCountryByIP(string $ip): ?Country
    {
        if ($ip === '127.0.0.1') {
            $countries = new Countries();
            return $countries->getByName('United States');
        }

        return null;
    }
}
