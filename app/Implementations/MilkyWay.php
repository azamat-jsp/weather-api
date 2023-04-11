<?php

namespace App\Implementations;

class MilkyWay
{
    private string $content;
    public string $api_key;
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content . ' - MilkyWay';
    }

    public function generateFile($fileName): string
    {
        return 'MilkyWay file generated -' . $fileName;
    }
}
