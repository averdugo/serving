<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Indicator;
use Illuminate\Support\Facades\Request;

class IndicatorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$indicators = Indicator::paginate();
		return view('admin.indicators.index',compact('indicators'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$indicator = new Indicator(Request::all());
		$indicator->save();
		return $indicator;
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

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$indicator = Indicator::findOrFail($id);
		return $indicator;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$indicator = Indicator::findOrFail($id);
		$indicator->fill(Request::all());
		$indicator->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$indicator = Indicator::findOrFail($id);
		$indicator->delete();
		return $id;

	}

}
