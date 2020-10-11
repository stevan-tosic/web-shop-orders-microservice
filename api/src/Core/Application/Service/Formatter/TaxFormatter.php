<?php declare(strict_types=1);

namespace App\Core\Application\Service\Formatter;

use App\Core\Domain\Entity\Tax;

/**
 * Class TaxFormatter
 */
class TaxFormatter
{
    /**
     * @param Tax $tax
     *
     * @return array
     */
    public function execute(Tax $tax): array
    {
        return [
            'tax'             => $tax->getTax(),
            'name'            => $tax->getName(),
            'expiration_date' => $tax->getExpirationDate()->format('d/m/Y'),
            'label'           => $tax->getLabel(),
            'type_id'         => $tax->getTypeId(),
        ];
    }
}
