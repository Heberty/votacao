<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function prepareForValidation() {
        $this->merge([
            'active' => $this->active ? true : false,
        ]);
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'active'  => 'required|boolean',
            'title'   => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'active.required'    => 'Informe se o slide está ativo',
            'title.required'     => 'Por favor, informe um nome para sua opção',
            'title.string'       => 'O títlo precisa ser um texto'
        ];
    }
}
