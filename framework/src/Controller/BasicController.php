<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class BasicController
{
    #[Route('/')]
    public function main(): JsonResponse
    {
        return new JsonResponse();
    }
}
