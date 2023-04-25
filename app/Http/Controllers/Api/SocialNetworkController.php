<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SocialNetwork\ChooseSocialNetworkAction;

class SocialNetworkController extends Controller
{
    public function index(ChooseSocialNetworkAction $action): void
    {
        $action();
    }
}
