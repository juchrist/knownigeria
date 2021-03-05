<?php

namespace App\Http\Controllers;

use App\Models\Governor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Resources\KnownigeriaResource;

class GovernorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $governor = Governor::all();

        return response([ 
            'states' => KnownigeriaResource::collection($governor), 
            'message' => 'Retrieved successfully'], 200);    
        }


    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stateGovernor($state)
    {

        $data = DB::table('states')->where('id', $state)->first();
        $governor_id = $data->governor_id;

        if($data){
            $data = DB::table('governors')->where('id', $state)->first();

            $response = response([
            'state' => $data, 
            'message' => 'Retrieved successfully'], 200);

        }else{
        $response =    response([
                'message' => 'State not found!'], 404);    
        }

        return $response;

    }





        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Knownigeria  $knownigeria
     * @return \Illuminate\Http\Response
     */
    public function show(Knownigeria $knownigeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Knownigeria  $knownigeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Knownigeria $knownigeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Knownigeria  $knownigeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Knownigeria $knownigeria)
    {
        //
    }
}
