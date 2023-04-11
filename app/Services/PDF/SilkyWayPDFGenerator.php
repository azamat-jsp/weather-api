<?php

namespace App\Services\PDF;

use App\Implementations\SilkyWay;
use App\Interfaces\PDFGenerator;

class SilkyWayPDFGenerator implements PDFGenerator
{
    private SilkyWay $generator;
    public function __construct() {
        $this->setup();
    }

    public function setup(): void
    {
        $this->generator = new SilkyWay();
        $this->generator->api_key = env('SILKY_WAY_API_KEY');
    }

    public function setContent($content): void
    {
        $this->generator->setContent($content);
    }

    /**
     * @param $fileName
     * @return mixed
     */
    public function generatePDF($fileName): string
    {
        return $this->generator->generateFile($fileName);
    }

    public function getContent(): string
    {
        return $this->generator->getContent();
    }
}
