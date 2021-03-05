<?php

namespace App\Http\Controllers;

use App\Models\Local_governments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Resources\KnownigeriaResource;

class LgasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allLgas()
    {
        //
        $local_government = Local_governments::all();

        return response([ 
            'states' => KnownigeriaResource::collection($local_government), 
            'message' => 'Retrieved successfully'], 200);    
        }



    public function showLga($state)
     {
    
        $data = DB::table('local_governments')->where('id',$state)->first();
    
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


        public function stateLgas($state)
        {
    
            $data = DB::table('local_governments')->where('state_id',$state)->get();
    
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

}
