<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class createPatients extends Request {

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
			'patient_photo'      => 'required',           
			'card_serial'      => 'unique:patients|required',           
			'passport_no'      => 'unique:patients|required',           
			'first_name'      => 'required',           
			'last_name'      => 'required',           
			'country_name'      => 'required', 
			          
		];
	}

}