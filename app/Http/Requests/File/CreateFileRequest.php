<?php

namespace App\Http\Requests\File;

use App\Adapters\Presenters\HttpPresenter\HttpBasePresenter;
use App\Adapters\ViewModels\JsonResourceViewModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateFileRequest extends FormRequest
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
            "fileName"=> ["string","required"],
            "owner"=>["integer","required"],
            "content"=>["string","required"],
            "groupId"=>['integer',"required"],
            "file_path"=>[]
        ];
    }


    public function messages()
    {
        return [
            // 'rate.required'=>"رأيك مطلوب"
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
