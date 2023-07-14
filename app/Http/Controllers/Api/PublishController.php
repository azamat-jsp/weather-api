<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\IssueRequest;
use App\Jobs\MakeApiRequest;
use App\Services\Issue\GetIssueAction;
use App\Services\PDF\SilkyWayPDFGenerator;
use Illuminate\Http\JsonResponse;

class PublishController extends Controller
{
    /**
     * @param IssueRequest $request
     * @param GetIssueAction $action
     * @return JsonResponse
     */
    public function publish(IssueRequest $request, GetIssueAction $action): JsonResponse
    {
        $generator = new SilkyWayPDFGenerator();

        return $action($request->validated(), $generator);

    }
}
