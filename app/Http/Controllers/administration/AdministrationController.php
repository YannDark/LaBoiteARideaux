<?php

namespace App\Http\Controllers\administration;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class administrationController extends Controller
{
    /**
     * page d'accueil de la section Admin
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $local = basename($_SERVER['PHP_SELF']);

        return view('administration.index', compact('local'));
    }

}
