<?php

namespace App\Http\Controllers;

use App\Models\Stats;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Stats::all()->jsonSerialize());
    }
}
