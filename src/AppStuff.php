<?php

declare(strict_types=1);

namespace PChapl\Evolve;

final class AppStuff
{
    /** @return object[] */
    public function doRun(object ...$args): array
    {
        return $args;
    }
}
