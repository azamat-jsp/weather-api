<?php

namespace App\Services\PDF;

use App\Implementations\MilkyWay;
use App\Interfaces\PDFGenerator;

class MilkyWayPDFGenerator implements PDFGenerator
{
    private MilkyWay $generator;
    public function __construct() {
        $this->setup();
    }

    public function setup(): void
    {
        $this->generator = new MilkyWay();
        $this->generator->api_key = env('MILKY_WAY_API_KEY');
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
