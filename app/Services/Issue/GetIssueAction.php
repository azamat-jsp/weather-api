<?php

namespace App\Services\Issue;

use App\Interfaces\PDFGenerator;
use App\Jobs\MakeApiRequest;
use Illuminate\Http\JsonResponse;

class GetIssueAction
{
    public function __invoke(array $inputs, PDFGenerator $generator): JsonResponse
    {
        MakeApiRequest::dispatch($inputs)->delay(now()->addSecond());

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
