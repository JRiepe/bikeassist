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

    public function messages()
    {
        return [
            'rideDate.required' => 'ERROR: Date is required',
            'rideDate.before:tomorrow' => 'ERROR: Date can not be set for the future',
            'rideTime.required' => 'ERROR: Time is required',
            'rideDistance.required' => 'ERROR: Distance is required',
            'rideDistance.numeric' => 'ERROR: Distance must be numeric ie.. 5.2',
            
        ];
    }

    
}
