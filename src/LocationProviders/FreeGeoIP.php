<?php
declare(strict_types=1);

namespace JordJD\Geolocation\LocationProviders;

use JordJD\Geolocation\Interfaces\LocationProviderInterface;
use JordJD\Countries\Country;
use Exception;

class FreeGeoIP implements LocationProviderInterface
{

    /**
     * @see IpStack
     * @see http://freegeoip.net/shutdown
     */
    public function __construct()
    {
        throw new Exception('FreeGeoIP has shutdown, please use the IpStack location provider.');
    }

    public function getCountryByIP(string $ip): ?Country
    {
        return null;
    }
}
