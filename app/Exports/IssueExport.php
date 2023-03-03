<?php

namespace App\Exports;

use \Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class IssueExport implements FromView
{

    /**
     * @var Collection
     */
    private Collection $issues;

    public function __construct(Collection $issues)
    {
        $this->issues = $issues;
    }

    public function view(): View
    {
        return view('exports.issues', [
            'issues' => $this->issues
        ]);
    }
}
