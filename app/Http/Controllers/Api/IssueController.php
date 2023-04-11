<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\IssueRequest;
use App\Interfaces\PDFGenerator;
use App\Services\Issue\GetIssueAction;
use Illuminate\Http\JsonResponse;

class IssueController extends Controller
{
    private PDFGenerator $generator;
    public function __construct(PDFGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function getIssue(IssueRequest $request, GetIssueAction $action): JsonResponse
    {
        return $action($request->validated(), $this->generator);
    }
}
