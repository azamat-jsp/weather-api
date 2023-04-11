<?php

namespace App\Implementations;

class SilkyWay
{
    private string $content;
    public string $api_key;
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content . ' - SilkyWay';
    }

    public function generateFile($fileName): string
    {
        return 'SilkyWay generated -' . $fileName;
    }
}
