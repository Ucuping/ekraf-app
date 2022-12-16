<?php

namespace App\Http\Requests\Backend\Company;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyRequest extends FormRequest
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
            'category' => 'required',
            'name' => 'required',
            'owner_identification_number' => ['required', $this->routeName === 'apps.companies.store' ? 'unique:companies,owner_identification_number' : Rule::unique('companies', 'owner_identification_number')->ignore($this->company)],
            'owner_name' => 'required',
            'address' => 'required',
            'description' => 'required',
            'ekraf_logo' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
            'image1' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
            'image2' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
            'image3' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
        ];
    }
}
