<?php declare(strict_types=1);

namespace App\Core\Application\Service\Formatter;

use App\Core\Domain\Entity\Host;

/**
 * Class HostFormatter
 */
class HostFormatter
{

    /**
     * @param Host $host
     *
     * @return array
     */
    public function execute(Host $host): array
    {
        return [
            'name'        => $host->getName(),
            'language'    => $host->getLanguage()->getName(),
            'description' => $host->getDescription(),
            'host'        => $host->getHost(),
            'short_name'  => $host->getShortName(),
        ];
    }
}
