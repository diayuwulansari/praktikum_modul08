<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        
        $pageTitle = 'Profile';

        return view('profile', ['pageTitle' => $pageTitle]);
    }
}
