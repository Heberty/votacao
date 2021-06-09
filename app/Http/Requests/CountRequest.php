<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountRequest extends FormRequest
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

   /*  public function prepareForValidation()
    {
        $this->merge([
            'vote' => $this->vote ? true : false,
        ]);
    } */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required|string',
            'email'     => 'required|email|unique:counts',
            'vote_id'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.string'    => 'O nome precisa ser um texto',
            'name.required'  => 'Por favor preencha seu nome',
            'email.required' => 'Por favor preencha o seu email',
            'email.email'    => 'Preencha o email corretamente',
            'email.unique'   => 'Voto já computado para este email'
        ];
    }
}
