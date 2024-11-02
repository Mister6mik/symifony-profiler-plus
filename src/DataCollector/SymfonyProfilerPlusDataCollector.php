<?php

namespace Mister6mik\SymfonyProfilerPlus\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

class SymfonyProfilerPlusDataCollector extends DataCollector
{
    public function collect(Request $request, Response $response, \Throwable $exception = null)
    {
        $this->data = []; // On laisse vide pour l'instant
    }

    public function reset()
    {
        $this->data = [];
    }

    public function getName(): string
    {
        return 'symfony_profiler_plus';
    }
}
