<?php

namespace App\Http\Controllers;

use App\Models\TestUser;
use Illuminate\Http\Request;

class TestUserController extends Controller
{
    public function index()
    {
        $testusers = TestUser::all();

        dd($testusers);

    }
}
