<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class patients extends Model {

    protected $table = 'patients';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable =[
        'photo_name',
        'card_serial',
        'passport_no',
        'country',
        'boesl_code',
        'visa_no',
        'visa_date',
        'passport_issue_date',
        'passport_issue_place',
        'height',
        'weight',
        'gender',
        'gender',
        'nationality',   
        'active',
        'first_name',
        'last_name',
        'active'
    ];

}
