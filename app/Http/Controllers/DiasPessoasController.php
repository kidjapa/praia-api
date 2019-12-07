<?php

namespace App\Http\Controllers;

use App\DiasPessoas;
use App\Helpers\Helpers;
use App\Pessoas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiasPessoasController extends Controller
{

    public function getDaysValues(){
        try{
            $data = [];
            $data['peoples'] = Pessoas::all();

            /** @var Pessoas $people */
            foreach ($data['peoples'] as $key => $people){
                $days = DiasPessoas::where('people_id','=',$people->id)->get();
                $data['peoples'][$key]['day_peoples'] = is_null($days) ? [] : $days;
            }

            $data['default_values'] = Helpers::getArrayDefaultValues()->toArray();
            return MainController::getReturnGetResponse(true, $data);
        }catch (\Exception $e){
            return MainController::getReturnGetResponse(false, $e->getMessage());
        }
    }

    public function setDayPeople(Request $request){

        if($request->has('people_id')){
            $data = new Carbon($request->get('date'));
            $people_day = DiasPessoas::where('people_id',$request->get('people_id'))->where('day','=', $data)->first();
            if(is_null($people_day)){
                $people_day = new DiasPessoas();
                $people_day->people_id = $request->get('people_id');
                $people_day->day = $data;
            }
            $people_day->checked = $request->get('checked');
            if($people_day->save()){
                return MainController::getReturnGetResponse(true, ['checked' => $people_day->checked]);
            }else{
                return MainController::getReturnGetResponse(false, []);
            }
        }

    }

}
