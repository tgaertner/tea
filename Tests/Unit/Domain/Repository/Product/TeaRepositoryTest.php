<?php

declare(strict_types=1);

namespace TTN\Tea\Tests\Unit\Domain\Repository\Product;

use TTN\Tea\Domain\Repository\Product\TeaRepository;
use TYPO3\CMS\Extbase\Object\ObjectManagerInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * @covers \TTN\Tea\Domain\Repository\Product\TeaRepository
 */
class TeaRepositoryTest extends UnitTestCase
{
    /**
     * @var TeaRepository
     */
    private $subject;

    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    protected function setUp(): void
    {
        parent::setUp();

        $this->objectManager = $this->prophesize(ObjectManagerInterface::class)->reveal();
        $this->subject = new TeaRepository($this->objectManager);
    }

    /**
     * @test
     */
    public function isRepository(): void
    {
        self::assertInstanceOf(Repository::class, $this->subject);
    }
}
