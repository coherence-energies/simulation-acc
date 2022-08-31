<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\participants;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getParticipants()
    {
        $participants = DB::table('participants')
        ->get();

        return response()->json($participants, 200);
    }
}
