<?php

namespace App\Http\Controllers;
use Exception;

class AppBaseController extends Controller
{
    public function convertData($result)
    {
        return [
            'info' => [
                "count" => $result['total'] ?? null,
                "pages" => $result['last_page'] ?? null,
                "next"  => $result['next_page_url'] ?? null,
                "prev"  => $result['prev_page_url'] ?? null,
            ],
            'results' => $result['data'] ?? [],
        ];
    }
}