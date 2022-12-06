<?php

namespace App\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    private $routeName;
    public function __construct()
    {
        $this->routeName = request()->route()->getName();
    }
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'identity_number' => ['required', $this->routeName === 'apps.users.store' ? 'unique:users,identity_number' : Rule::unique('users', 'identity_number')->ignore($this->user)],
            'name' => 'required',
            'username' => ['required', $this->routeName === 'apps.users.store' ? 'unique:users,username' : Rule::unique('users', 'username')->ignore($this->user)],
            'email' => ['required', $this->routeName === 'apps.users.store' ? 'unique:users,email' : Rule::unique('users', 'email')->ignore($this->user)],
            'password' => $this->routeName === 'apps.users.store' ? 'required' : 'nullable',
            'confirm_password' => $this->routeName === 'apps.users.store' ? 'required|same:password' : 'nullable',
            'role' => 'required',
            'is_active' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048'
        ];
    }
}
