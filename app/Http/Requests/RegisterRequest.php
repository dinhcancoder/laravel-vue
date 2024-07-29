<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        $rules = [
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:8'
        ];
        
        return $rules;
    }

    public function attributes() {
        return [
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'name' => 'Tên'
        ];
    }

    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'unique' => ':attribute này đã tồn tại',
            'email' => 'Vui lòng nhập đúng định dạng email',
            'min' => ':attribute không được nhỏ hơn :min ký tự'  
        ];
    }
}
