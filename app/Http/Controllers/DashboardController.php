<?php

namespace App\Http\Controllers;

use App\Models\Stunting;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitorCounts = Visitor::select('page', DB::raw('count(*) as total'))
            ->groupBy('page')
            ->get();
        $stuntings = Stunting::orderBy('created_at', 'desc')->paginate(10); // Pagination with 10 items per page
        $anakStunting = Stunting::whereIn('kondisi', ['Pendek', 'Sangat Pendek'])->count();

        // Menghitung jumlah total anak
        $jumlahAnak = Stunting::count();
        // return response()->json($visitorCounts);
        return view('pages.admin.dashboard', compact('stuntings', 'anakStunting', 'jumlahAnak', 'visitorCounts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
