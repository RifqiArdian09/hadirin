<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Presence;


class DailyPrintController extends Controller
{
    public function printHarian()
    {
        $today = Carbon::today();
        $attendances = Presence::with('user')
            ->whereDate('scan_time', $today)
            ->orderBy('scan_time', 'asc')
            ->get();

        return view('prints.print-harian', [
            'attendances' => $attendances,
            'date' => $today->format('d-m-Y')
        ]);
    }
}