<?php declare(strict_types=1);

namespace App\Core\Application\Service\Formatter;

use App\Core\Domain\Entity\CancellationStatus;

/**
 * Class CancellationStatusFormatter
 */
class CancellationStatusFormatter
{
    /**
     * @param CancellationStatus $cancellationStatus
     *
     * @return array
     */
    public function execute(CancellationStatus $cancellationStatus): array
    {
        return [
            'name'               => $cancellationStatus->getName(),
            'description'        => $cancellationStatus->getDescription(),
            'created_at'         => $cancellationStatus->getCreatedAt(),
            'created_by'         => $cancellationStatus->getCreatedBy(),
            'updated_at'         => $cancellationStatus->getUpdatedAt(),
            'updated_by'         => $cancellationStatus->getUpdatedBy(),
            'is_require_comment' => $cancellationStatus->isRequireComment(),
            'is_cancellation'    => $cancellationStatus->isCancellation(),
        ];
    }
}
