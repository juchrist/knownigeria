<?php

namespace App\Http\Controllers;

use App\Models\States;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Resources\KnownigeriaResource;

class StatesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allStates()
    {
        //
        $states = States::all();

        return response([ 
            'states' => KnownigeriaResource::collection($states), 
            'message' => 'Retrieved successfully'], 200);    
        }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\States  $state
     * @return \Illuminate\Http\Response
     */
    public function showState(States $state)
    {

        return response([
            'state' => new KnownigeriaResource($state), 
            'message' => 'Retrieved successfully'], 200);

    }



    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stateByCode($code)
    {

        $data = DB::table('states')->where('state_code', $code)->first();
        if($data){
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
