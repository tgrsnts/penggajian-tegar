<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    function index ()
    {
        return view('jabatan.index');
    }

    function create ()
    {
        return view('jabatan.create');
    }

    function edit ()
    {
        return view('jabatan.edit');
    }
}
