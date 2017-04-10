<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PermissionRequest extends Request
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
            'description' => 'required',
            'permission' => 'required'
        ];
    }

    /**
     * Get the messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'description.required' => 'Debe insertar una description al permiso',
            'permission.required' => 'El campo Permiso es obligatorio'
        ];
    }

}
