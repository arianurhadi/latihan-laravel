<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        if ($this->student) {
            $nis = "required|unique:students,nis,{$this->student->id}|numeric";
            $email = "required|email|unique:users,email,{$this->student->user->id}";
        } else {
            $nis = "required|unique:students,nis|numeric";
            $email = "required|email|unique:users,email";

        }
        
        return [
            'nis' => $nis,
            'name' => 'required',
            'phone' => 'required',
            'email' => $email,
            'password' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'nis' => 'NIS',
            'name' => 'Nama',
            'phone' => 'No HP',
            'email' => 'Email',
            'password' => 'Password'
        ];
    }
}
