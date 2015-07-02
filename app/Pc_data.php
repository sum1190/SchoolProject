<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pc_data extends Model {
	 public $timestamps = false;
	protected $fillable=array('pc_name','workgroup','admin_pass','bios_pass','pc_inventory','screen_inventory','drop_motivation','so','pk_win','pk_office','installed_software','antivirus','browser');
	
	public function pc_specs()
	{
		return $this->hasOne('App\Pc_specs','pcid','id');
	}

	public function pc_mants()
	{
		return $this->hasMany('App\Pc_mants','pcid','id');
	}
}
