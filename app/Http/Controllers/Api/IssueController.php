<?php

namespace App\Http\Controllers\Api;

use App\Exports\IssueExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\IssueRequest;
use App\Services\Issue\GetIssueAction;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;

class IssueController extends Controller
{
    public function getIssue(IssueRequest $request, GetIssueAction $action)
    {

        $issueList = $action($request->validated());

        if($issueList->count()) {
            return Excel::download(new IssueExport($issueList), 'issues.xlsx', \Maatwebsite\Excel\Excel::XLSX);
        }

        return response([
            'success' => false
        ], Response::HTTP_NOT_FOUND);
    }
}
