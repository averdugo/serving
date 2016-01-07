<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OtDetail;
use App\Report;
use App\Requester;
use App\User;
use App\Allowance;
use App\Group;
use App\Car;
use App\Ot;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class OtController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function listA($type)
	{
		$ots = DB::table('ots')
			->join('ot_details', 'ots.id', '=', 'ot_details.ot_id')
			->get();

		if($type == 1){

			foreach($ots as $o){
				$o->status = Ot::$statuses [$o->status];
				$o->detail_type = Ot::$typeDt [$o->detail_type];
				if($o->ingdt_user_id != 0 ){
					$user = User::find($o->ingdt_user_id);
					$o->ingdt_user_id = $user->name;
				};
			};

			return view('admin.ots.indexDt',compact('ots'));

		}elseif($type == 2){

		}elseif($type == 3){

		}


	}

	public function gantt($type)
	{
		$data = Ot::all();


		$data->toJson();
		if($type == 1){

			return view('admin.ots.gantt1',compact('data'));

		}elseif($type == 2){

		}elseif($type == 3){

		}


	}
	public function data($type)
	{
		$ots = Ot::where('type',$type)->get();
		foreach($ots as $o){
			$o->start_at = date("d-m-Y", strtotime($o->start_at));
			$o->duration = 1;
			//$o->detail_type = Ot::$typeDt [$o->detail_type];
			if($o->group_id != 0 ){
				$g = Group::find($o->group_id);
				$o->group_id = $g->name;
			};
		};

		return $ots;

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function form($type)
	{

		$requesters = Requester::all();
		$allowances = Allowance::all();
		$uDts = User::where('user_type_id',1)->get();
		$uAsrs = User::where('user_type_id',2)->get();
		$drivers = User::where('user_type_id',4)->get();
		$cars = Car::where('status',3)->get();
		$gDts = Group::where('type',1)->get();
		$gAsrs = Group::where('type',2)->get();

		if($type == 1){
			return view('admin.ots.formdt',compact('requesters','allowances','uDts','gDts','drivers','cars'));
		}elseif($type == 2){
			return view('admin.ots.formasr',compact('requesters','uAsrs','gAsrs','drivers','cars'));
		}elseif($type == 3){
			return view('admin.ots.formbch');
		}

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$req = Request::all();

		if($req['type'] == 1){

			$ot = new Ot(Request::all());
			$ot->save();

			$otDetail = new OtDetail();
			$otDetail->ot_id = $ot->id;
			$otDetail->ingdt_user_id = $req['ingdt_user_id'];
			$otDetail->allowance_id  = $req['allowance_id'];
			$otDetail->detail_type   = $req['detail_type'];
			$otDetail->save();

			$report = new Report();
			$report->user_id =$req['user_id'];
			$report->type =1;
			$report->report_at =$req['report_at'];
			$report->status =$req['reportStatus'];
			$report->ot_id =$ot->id;
			$report->save();

			$ot2 = Ot::findOrFail($ot->id);
			$ot2->report_id = $report->id;
			$ot2->save();

			return view('home');

		}elseif($req['type'] == 2){

		}elseif($req['type'] == 3){

		}


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
