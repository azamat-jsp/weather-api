<?php

namespace App\Interfaces;

interface PDFGenerator
{
    public function setup(): void; // API keys, etc.
    public function setContent($content): void;
    public function getContent(): string;
    public function generatePDF($fileName): string;
}
