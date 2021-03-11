<?php

namespace App\Http\Controllers;

use App\Models\Governor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Resources\KnownigeriaResource;

class GovernorsController extends Controller
{
    /**
     * Display a listing of the 36 State Governors.
     *
     * @return \Illuminate\Http\Response
     */

     public function allGovernors()
    {
        //
        $governor = Governor::all();

        return response([ 
            'states' => KnownigeriaResource::collection($governor), 
            'message' => 'Retrieved successfully'], 200);    
        }


    /**
     * Display the specified State Governor.
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



}
