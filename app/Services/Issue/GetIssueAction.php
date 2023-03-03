<?php

namespace App\Services\Issue;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class GetIssueAction
{
    public function __invoke(array $inputs)
    {
        $token = env('GITHUB_API_TOKEN');
        $labels = $inputs['labels'];
        $repo = $inputs['repo'];
        $per_page = 100;

        $url = env('GITHUB_API_URL') . '/pricerkk/' . $repo . '/issues';

        $params = [
            'labels' => $labels,
            'per_page' => $per_page,
        ];

        $response = Http::withToken($token)->get($url, $params);

        if ($response->status() === Response::HTTP_OK) {
            return $response->collect()->map(function ($value) {
                return [
                    'number' => $value['number'],
                    'title' => $value['title'],
                    'body' => $value['body'],
                ];
            });
        }

       return collect();
    }

}
