<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SuccessJsonResponse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

     protected  $data,$message;

     public function __construct($data,$message)
     {
         $this->data = $data;
         $this->message = $message;
     }

    public function toArray(Request $request): array
    {
        return [
            "status"=> 200,
            "message"=> $this->message,
            "data" => $this->data
        ];
    }
}
