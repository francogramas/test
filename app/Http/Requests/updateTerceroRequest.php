<?php

namespace test\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateTerceroRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

     public function __construct(Route $route)
    {
        $this->route=$route;
    }

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
            'nit'=>'required|min:3|unique:terceros,nit,'.$this->route->getparameter('tercero'),
            'nombres'=>'required|min:3|:terceros,nombres',
            'apellido1'=>'required|min:3|:terceros,apellido1',
            'ciudad'=>'required|not_in:0'            
        ];
    }
}
