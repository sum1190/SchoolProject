<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pc_specs extends Model {
public $timestamps = false;
protected $fillable=array('slug','processor','motherboard','ram','videocard','harddisk','size_c','size_d');

	public function pc_datas()
	{
		$this->belongsTo('App\Pc_data','pcid','id');
	}

}
