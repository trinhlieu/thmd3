<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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
            'name' => 'min:5',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'manager' => 'required',
            'stt' => 'required'
        ];
    }

    function messages()
    {
        return [
            'name.min' => 'Tên ít nhất 5 ký tự',
            'address.required' => 'Vui lòng nhập địa chỉ của bạn',
            'phone.required' => 'Số điện thoại không được để trống',
            'manager.required' => 'Vui lòng nhập tên nhà quản lý',
            'stt.required' => 'Trạng thái không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng'
        ];
    }
}
