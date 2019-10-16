<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ItemController extends Controller
{

    public function getItems(){

        $items = Item::all();

        if($items){
            return MainController::getReturnGetResponse(true, $items);
        }else{
            return MainController::getReturnGetResponse(false,'Erro ao recuperar items');
        }
    }


    public function delete(Request $request){
        if($request->has('id')){
            try{
                /** @var Item $item */
                $item = Item::find($request->get('id'));
                if(!is_null($item)){
                    $item->delete();
                    return MainController::getReturnGetResponse(true, 'Item removido com sucesso');
                }else{
                    return MainController::getReturnGetResponse(false, 'Erro ao localizar item. id: '.$request->get('id'));
                }
            }catch (\Exception $e) {
                return MainController::getReturnGetResponse(false, $e->getMessage());
            }
        }else{
            return MainController::getReturnGetResponse(false, 'param id is not founded');
        }
    }


    public function addItem(Request $request){

        $item = new Item();

        $item->tittle = $request->get('tittle');
        $item->qtd = $request->get('qtd');

        try{
            if($item->save()){
                return MainController::getReturnGetResponse(true, $item);
            }else{
                return MainController::getReturnGetResponse(false, 'Erro ao salvar item.');
            }
        }catch (\Exception $e){
            return MainController::getReturnGetResponse(false, $e->getMessage());
        }
    }

}
