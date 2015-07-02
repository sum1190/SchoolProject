<?php namespace App\Http\Controllers;
use App\Pc_data;
use App\Pc_specs;
use App\Pc_mants;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
use DB;
use Illuminate\Http\Request;

class PcdatasController extends Controller {
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pc_datas = Pc_data::all();
		$pc_specs = Pc_specs::all();

		return view('pc_datas.index', compact('pc_datas','pc_specs'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Pc_data $pc_datas)
	{
		return view('pc_datas.create',compact('pc_datas'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input=Input::except('_token');
		//$input=Input::only('pc_name','workgroup','admin_pass','bios_pass','pc_inventory','screen_inventory','drop_motivation','so','pk_win','pk_office','installed_software','antivirus','browser');
		
		Pc_data::create($input);
		print_r($input);
		$query=DB::table('pc_datas')->where('pc_name',$input["pc_name"])->first();
		
		//vediamo se funziona.. creo un'istanza di Pc_specs e la salvo usando il metodo save() 
		$pcsp=new Pc_specs();
		$pcsp->pcid=$query->id;
		$pcsp->save();


		return Redirect::route('pc_datas.index')->with('message','Pc inserito');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Pc_data $pd)
	{
		$pc_datas=$pd;
		return view('pc_datas.show', compact('pc_datas'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Pc_data $pd)
	{
		$pc_datas=$pd;
		return view('pc_datas.edit', compact('pc_datas'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Pc_data $pd)
	{
		$input = array_except(Input::all(),'_method');
		$pd->update($input);

		return Redirect::route('pc_datas.index')->with('message','Dati aggiornati con successo');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Pc_data $pd)
	{
		$psp=Pc_specs::where(array('pcid'=>$pd->id));
		$psp->delete();

		$pmp = Pc_mants::where(array('pcid'=>$pd->id));
		$pmp->delete();
		$pd->delete();

		return Redirect::route('pc_datas.index')->with('mesage','Dato rimosso con successo');
	}

}
