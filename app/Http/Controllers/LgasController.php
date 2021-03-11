<?php

namespace App\Http\Controllers;

use App\Models\Local_governments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Resources\KnownigeriaResource;

class LgasController extends Controller
{
    /**
     * Display a listing of Local Governments Areas.
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



    /**
     * Display a Particular Local Governments Area.
     *
     * @return \Illuminate\Http\Response
     */

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


    /**
     * Display a listing of Local Governme nts Areas for a specified State.
     *
     * @return \Illuminate\Http\Response
     */

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


}
