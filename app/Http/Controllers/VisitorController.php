<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function showVisitorCounts()
    {
        // Ambil semua pengunjung dan hitung jumlahnya berdasarkan halaman
        $visitorCounts = Visitor::select('page', \DB::raw('count(*) as total'))
            ->groupBy('page')
            ->get();

        return view('visitor_counts', compact('visitorCounts'));
    }
}
