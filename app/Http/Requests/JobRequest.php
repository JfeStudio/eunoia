<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'job_id' => 'required|string|min:3|unique:jobs,job_id',
            'job_name' => 'required|string|min:3',
            'deadline' => 'required|string|min:3',
            'status' => 'required|string|min:3',
            'employer' => 'required|string|min:3',
            'location' => 'required|string|min:3',
            'image' => 'mimes:jpeg,jpg,png,gif',
        ];
    }
}