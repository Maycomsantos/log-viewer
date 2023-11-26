<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ActivyLogController extends Controller
{
    public function index()
    {
        $activys = DB::table('activity_log')->get();

        return view('activy-log.index', ['activys'  => $activys]);
    }
}
