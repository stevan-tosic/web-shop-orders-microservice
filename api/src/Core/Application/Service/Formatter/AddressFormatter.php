<?php declare(strict_types=1);

namespace App\Core\Application\Service\Formatter;

use App\Core\Domain\Entity\Address;

/**
 * Class AddressFormatter
 */
class AddressFormatter
{
    /**
     * @param Address $address
     *
     * @return array
     */
    public function execute(Address $address): array
    {
        return [
            'company'           => $address->getCompany(),
            'last_name'         => $address->getLastName(),
            'first_name'        => $address->getFirstName(),
            'email'             => $address->getEmail(),
            'address1'          => $address->getAddress1(),
            'address2'          => $address->getAddress2(),
            'zip'               => $address->getZip(),
            'location'          => $address->getLocation(),
            'birth_date'        => $address->getBirthDate()->format('d/m/Y'),
            'registration_date' => $address->getRegistrationDate()->format('d/m/Y'),
            'iban'              => $address->getIban(),
            'uid'               => $address->getUid(),
            'po_number'         => $address->getPoNumber(),
            'cost_center'       => $address->getCostCenter(),
            'reference'         => $address->getReference(),
            'department'        => $address->getDepartment(),
            'title'             => $address->getTitle()->getName(),
        ];
    }
}
