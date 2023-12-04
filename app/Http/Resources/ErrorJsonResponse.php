<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ErrorJsonResponse extends JsonResource
{
   /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

     protected  $errors,$message;

     public function __construct($errors,$message)
     {
         $this->errors = $errors;
         $this->message = $message;
     }

    public function toArray(Request $request): array
    {
        if(is_array($this->message))
        {
            return  [
                "status"=> 404,
                "message"=> $this->message,
                'errors'=>$this->errors
            ];
        }
        else
        {
            return  [
                "status"=> 404,
                "message"=> $this->message,
                'error'=>$this->errors
            ];
        }
    }
}
