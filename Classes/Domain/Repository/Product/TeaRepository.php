<?php

declare(strict_types=1);

namespace TTN\Tea\Domain\Repository\Product;

use TTN\Tea\Domain\Repository\Traits\StoragePageAgnosticTrait;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Repository for Tea models.
 */
class TeaRepository extends Repository
{
    use StoragePageAgnosticTrait;

    /**
     * @var string[]
     */
    protected $defaultOrderings = ['title' => QueryInterface::ORDER_ASCENDING];
}
