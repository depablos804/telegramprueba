<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class MessajeController extends Controller
{
    public function responseMessage($chat_id,$texto){

        $response= Telegram::sendMessage([
            'chat_id' => $chat_id,
            'text' => $texto,
            'parse_mode'=>'HTML'
         ]);

        return $response;
    }



    public function updateInfo(){
        //$tmp_max=telegramUpdate::max('update_id');
        //$t_update=new telegramUpdate();
        //$params=['offset'=>$tmp_max];
        //try{
        //    $updates =  Telegram::getUpdates($params);
        //}catch (\Exception $e) {
        //    echo $$e->getMessage();
        //}

    }
}
