<?php

declare(strict_types=1);

namespace PChapl\Evolve\Tests\Messenger;

use App\Messenger\Measure;
use App\Messenger\MeasureHandler;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class MeasureHandlerTest extends KernelTestCase
{
    private MeasureHandler $handler;

    protected function setUp(): void
    {
        /** @var MeasureHandler $handler */
        $handler = self::getContainer()->get(MeasureHandler::class);
        $this->handler = $handler;
    }

    public function testHandle(): void
    {
        ($this->handler)(new Measure(2));

        self::assertTrue(true);
    }
}
