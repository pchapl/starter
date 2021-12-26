<?php

declare(strict_types=1);

namespace PChapl\Evolve\Tests;

use PChapl\Evolve\AppStuff;
use PHPUnit\Framework\TestCase;
use stdClass;

final class AppStuffTest extends TestCase
{
    private AppStuff $stuff;

    protected function setUp(): void
    {
        $this->stuff = new AppStuff();
    }

    public function testDoRun(): void
    {
        $param = new stdClass();
        self::assertSame([$param], $this->stuff->doRun($param));
    }
}
