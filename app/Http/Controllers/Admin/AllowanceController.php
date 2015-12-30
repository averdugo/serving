<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Allowance;
use Illuminate\Support\Facades\Request;

class AllowanceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $allowances = Allowance::paginate();
        return view('admin.allowances.index',compact('allowances'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $allowances = new Allowance(Request::all());
        $allowances->save();
        return $allowances;
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
        $allowances = Allowance::findOrFail($id);
        return $allowances;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $allowances = Allowance::findOrFail($id);
        $allowances->fill(Request::all());
        $allowances->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $allowances = Allowance::findOrFail($id);
        $allowances->delete();

        return $id;
	}

}
