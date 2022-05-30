<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            
			'title'=> ['required','string','min:5','max:250'],
			'description' => ['required','string']
			
        ];
    }
    public function messages ()
    {
        return parent::messages();
    }
    
    public function attributes ()
    {
        return parent::attributes();
    }
}
