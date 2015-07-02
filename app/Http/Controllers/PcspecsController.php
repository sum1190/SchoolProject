<?php namespace App\Http\Controllers;

use App\Pc_data;
use App\Pc_specs;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
use Illuminate\Http\Request;

class PcspecsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Pc_data $pd,Pc_specs $pc_specs)
	{
		$pc_datas=$pd;
		return view('pc_specs.index', compact('pc_specs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pc_specs.create', compact('pc_specs'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Pc_data $pc_datas,Pc_specs $id)
	{
		$pc_specs=$id;
		return view('pc_specs.show', compact('pc_datas','pc_specs'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Pc_data $pc_datas,Pc_specs $ps)
	{
		return view('pc_specs.edit', compact('pc_datas','ps'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Pc_data $pd, Pc_specs $ps)
	{
		$input = array_except(Input::all(),['_method','_token']);
		$ps->update($input);

		return Redirect::route('pc_datas.pc_specs.show',[$pd->slug, $ps->id])->with('message','Dati aggiornati con successo');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Pc_specs $ps)
	{
		//
	}

}
