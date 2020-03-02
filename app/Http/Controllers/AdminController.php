<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //


    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index(){

        $user = Auth::user();
        return $user->name.' is authentucated';
    }
}
