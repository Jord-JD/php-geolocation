<?php
declare(strict_types=1);

namespace JordJD\Geolocation\Interfaces;

use JordJD\Countries\Country;

interface LocationProviderInterface
{
    /**
     * @param string $ip
     */
    public function getCountryByIP(string $ip): ?Country;
}
