<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Mockery\Generator\Method;

class userConfigRequest extends FormRequest
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
        $id=$this->id ?? '';
        $rules= [
            'name'=>['bail', 'required'],
            'email'=>['bail', 'required', 'email',"unique:users,email,{$id},id"],
            'password'=>['bail', 'required','min:8'],
        ];
        
        if($this->method('PUT')){
            $rules['password'] =[
                'nullable',
                'min:8',
            ];
        }


        return $rules;
    }

    public function messages()
    {
        return [
            'required'=>'Preencha o campo que deixou vazio',
            'email.email'=>'Este campo precisa ser um e-mail',
            'password.min'=>'Este campo preicasa ter no minimo 8 caracter',
        ];
    }
}
