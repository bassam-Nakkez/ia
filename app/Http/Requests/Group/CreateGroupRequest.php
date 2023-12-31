<?php

namespace App\Http\Requests\Group;

use App\Adapters\Presenters\HttpPresenter\HttpBasePresenter;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Adapters\Presenters\HttpPresenter\User\CreateGroupHttpPresenter;
use Illuminate\Http\Resources\Json\JsonResource;

class CreateGroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=> ["string","required"],
            "owner"=>["integer","required"],
        ];
    }


    public function messages()
    {

        return [
            'rate.required'=>"رأيك مطلوب"
        ];
    }

     function failedValidation($validator)
    {
        $errors = $validator->errors();

        $response = response()->json([
            'message'=>'invalid data',
            'status'=>402,
            'error'=>$errors
        ]);
        throw new HttpResponseException($response);
    }
}
