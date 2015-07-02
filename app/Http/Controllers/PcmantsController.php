<?php namespace App\Http\Controllers;

use App\Pc_data;
use App\Pc_mants;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Redirect;
use DB;
use DateTime;

class PcmantsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Pc_data $pc_datas)
	{

		return view('pc_mants.show', compact('pc_datas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Pc_data $pc_datas,Pc_mants $pcm)
	{
		return view('pc_mants.create',compact('pc_datas','pcm'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Pc_data $pc_datas)
	{
		$input=Input::except('_token');
		print_r($input);
		print_r($pd);

		//$input=Input::only('pc_name','workgroup','admin_pass','bios_pass','pc_inventory','screen_inventory','drop_motivation','so','pk_win','pk_office','installed_software','antivirus','browser');
		
		$query=DB::table('pc_datas')->where('pc_name',$pc_datas->pc_name)->first();
		
		$man = new Pc_mants();
		$man->date_mant=DateTime::createFromFormat('d/m/Y',$input["date_mant"])->format('Y/m/d');
		$man->text_mant=$input["text_mant"];
		$man->pcid=$pd->id;

		$man->save();
		//Pc_mants::create($input);


		return Redirect::route('pc_datas.pc_mants.show',$pc_datas->slug)->with('message','Manutenzione inserita');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Pc_data $pc_datas, Pc_mants $pm)
	{
		return view('pc_mants.show',compact('pc_datas','pm'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Pc_data $pc_datas, Pc_mants $pm)
	{
		return view('pc_mants.edit',compact('pc_datas','pm'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Pc_data $pd,Pc_mants $pm)
	{
		$input = array_except(Input::all(),array('_method','_token'));
		$pm->update($input);
		$pd = $pd->slug;
		return Redirect::route('pc_datas.pc_mants.index',compact('pd'))->with('message','Dati aggiornati con successo');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Pc_data $pd,Pc_mants $pm)
	{
		
		$p=$pd->pc_mants;
		$i=0;
		for($i=0;$i<count($p);$i++)
		{
			//dd($p[$i]);
			if(($p[$i][0] == $pm[0]) && ($p[$i][1] == $pm[1]))
			{
				$p[$i]->delete();
				break;
			}
		}
//		dd($pm);
		//$pm->delete();
		return Redirect::route('pc_datas.pc_mants.index',[$pd->slug])->with('mesage','Dato rimosso con successo');
	}

}
