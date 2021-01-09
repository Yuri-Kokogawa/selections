<?php

namespace App\Http\Controllers\Contributor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContributorsController extends Controller
{
    public function add()
    {
        return view('contributor/create');
    }
}








 