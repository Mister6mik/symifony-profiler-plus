<?php 

namespace Mister6mik\SymfonyProfilerPlus\DataCollector;

use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SymfonyProfilerPlusDataCollector extends DataCollector 
{
    public function collect(Request $request, Response $response, \Throwable $exception = null)
    {
        $this->data = [];
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