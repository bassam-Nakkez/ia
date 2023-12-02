<?php

namespace App\Adapters\Presenters\HttpPresenter;

use App\Adapters\ViewModels\HttpResponseViewModel;
use Illuminate\Http\JsonResponse;


class HttpBasePresenter {

    public function sendSuccessJsonResponse($data , String $message ) {

        $response = [
            "success"=> true,
            "message"=> $message,
            "data" => $data
        ];

        return new HttpResponseViewModel(
            new JsonResponse($response , 200)
        );
    }


    public function sendErrorJsonResponse(  $message  , $code = 404 ) {

        if(is_array($message))
        {
            $response = [
                "success"=> false,
                "errors"=> $message,
            ];
        }
        else
        {
            $response = [
                "success"=> false,
                "error"=> $message,
            ];
        }

        return new HttpResponseViewModel(
            new JsonResponse($response , $code)
        );
    }



}
