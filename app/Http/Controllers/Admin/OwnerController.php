<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Owner;
use Illuminate\Support\Facades\Request;

class OwnerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$owners = Owner::paginate();
		return view('admin.owners.index',compact('owners'));
	}


	public function store()
	{
		$owner = new Owner(Request::all());
		$owner->save();
		return $owner;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	public function option()
	{

		$owners = Owner::all();
		$data="<option value='0'>Seleccione</option>";
		foreach($owners as $o){
			$data .= sprintf('
				<option value="%s">%s</option>
			',$o->id,$o->name);
		};
		return $data;
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$owner = Owner::findOrFail($id);
		return $owner;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$owner = Owner::findOrFail($id);
		$owner->fill(Request::all());
		$owner->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$owner = Owner::findOrFail($id);
		$owner->delete();
		return $id;
	}

}
