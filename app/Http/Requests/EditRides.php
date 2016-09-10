<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditRides extends Request
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
            'rideDate' => 'required|before:tomorrow',
            'rideTime' => 'required',
            'rideDistance' => 'required|numeric',
            
        ];
        
    }
    // to customize error output we can make a messages field below
    //
    //public function messages()
    //{
    //    return [
    //        'rideDate.required' => 'ERROR: :attribute is required',
    //        'rideDate.before.tomorrow' => 'ERROR: :attribute can not be set for the future',
    //        'rideTime.required' => 'ERROR: :attribute is required',
    //        'rideDistance.required' => 'ERROR: :attribute is required',
    //        'rideDistance.numeric' => 'ERROR: :attribute must be numeric ie.. 5.2',
            
    //    ];
    //}

    
}
