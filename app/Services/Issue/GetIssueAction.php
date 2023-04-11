<?php

namespace App\Services\Issue;

use App\Interfaces\PDFGenerator;
use Illuminate\Http\JsonResponse;

class GetIssueAction
{
    public function __invoke(array $inputs, PDFGenerator $generator): JsonResponse
    {
        $generator->setContent($inputs['content']);

        return new JsonResponse([
            'success' => true,
            'message' => '',
            'data' => [
                'pdfFile' => $generator->generatePDF('invoice.pdf'),
                'content' => $generator->getContent(),
            ],
        ]);
    }

}
