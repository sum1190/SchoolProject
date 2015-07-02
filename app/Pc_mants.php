<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pc_mants extends Model {
	public $timestamps=false;
	protected $fillable=array('id','date_mant','text_mant');
	public function pc_datas()
	{
		$this->belongsTo('App\Pc_data','pcid','id');
	}
}
