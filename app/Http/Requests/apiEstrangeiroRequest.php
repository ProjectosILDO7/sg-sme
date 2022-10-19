<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class apiEstrangeiroRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         return [
            //
            'nome' => ['bail', 'required'],
            'nome_pai'=> ['bail', 'required'],
            'nome_mae'=> ['bail', 'required'],
            'nacionalidade' => ['bail', 'required'],
            'num_passporte' => ['bail', 'required','numeric', 'unique:trabalhadors'],
            'num_registo' => ['bail', 'required','numeric', 'unique:trabalhadors'],
            'data_emissao' => ['bail', 'required'],
            'data_caducidade' => ['bail', 'required'],
            'local_residente' => ['bail', 'required'],
            'visto'=> ['bail', 'required'],
        ];

        
    }

    public function messages(){
          return [
            'num_passporte.unique' => 'O nº do passaporte informado já existe',
            'num_registo.unique' => 'O nº de registo informado já existe',
            'num_passporte.required' => 'O campo nº de passaporte é obrigatório',
            'num_registo.required' => 'O campo nº de registo é obrigatório',
            'num_passporte.numeric' => 'O campo nº de passaporte tem de ser do tipo numérico',
            'num_registo.numeric' => 'O campo nº de registo tem de ser do tipo numérico',
            'required' => 'O campo :attribute é o obrigatório',
            'data_emissao.required' => 'O campo data de emissão é obrigatório',
            'data_caducidade.required' => 'O campo data de caducidade é obrigatório'
          ];

    }
}
