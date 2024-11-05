<?php

namespace App\Http\Controllers;

use App\Models\Volcanoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VolcanoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $respond = Http::post('https://volcanoes.usgs.gov/hans-public/api/volcano/getMonitoredVolcanoes')->json();
        $volcano_vnums = array_column($respond, 'vnum');
        $volcano_ids = [];
        foreach ($volcano_vnums as $volcano){
            if ($volcano != null && $volcano != 0){
                $volcano_ids[] = $volcano;
            }
        }
        foreach ($volcano_ids as $volcano_id){
            $volcano_data = Http::post("https://volcanoes.usgs.gov/hans-public/api/volcano/getVolcano/$volcano_id")->json();
            if (!empty($volcano_data)){
                $volcano_data['volcano_id'] = (int)$volcano_data['vnum'];
                $volcano_data['title'] = $volcano_data['volcano_name'];
                unset($volcano_data['vnum'], $volcano_data['volcano_name']);
                $volcano = new Volcanoes($volcano_data);

                $volcano->save();
                dd($volcano);

            }
        }
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
    public function show(Volcanoes $vocanoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volcanoes $vocanoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Volcanoes $vocanoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volcanoes $vocanoes)
    {
        //
    }
}
