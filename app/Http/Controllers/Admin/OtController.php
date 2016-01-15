<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OtDetail;
use App\Report;
use App\Requester;
use App\Site;
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
			->where('type', $type)
			->join('ot_details', 'ots.id', '=', 'ot_details.ot_id')
			->get();

		if($type == 1){

			foreach($ots as $o){
				$o->status = Ot::$statusesDt[$o->status];
				$o->detail_type = Ot::$typeDt [$o->detail_type];
				if($o->ingdt_user_id != 0 ){
					$user = User::find($o->ingdt_user_id);
					$o->ingdt_user_id = $user->name;
				};
			};

			return view('admin.ots.indexDt',compact('ots'));

		}elseif($type == 2){
			return view('admin.ots.indexAsr',compact('ots'));
		}elseif($type == 3){
			return view('admin.ots.indexBch',compact('ots'));
		}


	}

	public function gantt($type)
	{
		if($type == 1){
			return view('admin.ots.gantt1');
		}elseif($type == 2){
			return view('admin.ots.gantt2');
		}elseif($type == 3){
			return view('admin.ots.gantt3');
		}
	}
	public function data($type)
	{
		$date   	= getdate();
		$day    	= $date['mday'];
		$month  	= $date['mon'];
		$year   	= $date['year'];
		$primerDia	= date("Y-m-d",mktime(0,0,0,$month,$day-5,$year));
		$ultimoDia	= date("Y-m-d",mktime(0,0,0,$month,$day+5,$year));

		$ots = Ot::where('type',$type)
			->whereBetween('start_at', [$primerDia, $ultimoDia])
			->get();

		foreach($ots as $o){
			$o->start_at = date("d-m-Y", strtotime($o->start_at));
			$o->duration = 1;

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
		$drivers 	= User::where('user_type_id',4)->get();
		$cars 		= Car::where('status',3)->get();

		if($type == 1){

			$uDts 		= User::where('user_type_id',1)->get();
			$match 		= ['user_type_id'=> 1, 'subtype'=> 3];
			$uReport 	= User::where($match)->get();
			$gDts 		= Group::where('type',1)->get();

			return view('admin.ots.formdt',compact(
				'requesters',
				'allowances',
				'uDts',
				'gDts',
				'uReport',
				'drivers',
				'cars'
			));
		}elseif($type == 2){

			$gAsrs 	= Group::where('type',2)->get();
			$uAsrs 	= User::where('user_type_id',2)->get();

			return view('admin.ots.formAsr',compact(
				'requesters',
				'allowances',
				'uAsrs',
				'gAsrs',
				'drivers',
				'cars',
				'jefe'
			));

		}elseif($type == 3){
			$uDts 	 = User::where('user_type_id',1)->get();
			$match 	 = ['user_type_id'=> 1, 'subtype'=> 3];
			$uReport = User::where($match)->get();
			$gDts 	 = Group::where('type',1)->get();
			return view('admin.ots.formBch',compact(
				'requesters',
				'allowances',
				'uDts',
				'gDts',
				'uReport',
				'drivers',
				'cars'
			));
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
			$ot = new Ot(Request::all());
			$ot->save();

			$otDetail = new OtDetail();
			$otDetail->ot_id = $ot->id;
			$site = Site::where('nemonico',$req['nemonico'])->get();
			$otDetail->site_id = $site->id;
			$otDetail->detail_type = $req['detail_type'];
			$otDetail->dpr = $req['dpr'];
			$otDetail->seguimiento = $req['ingdt_user_id'];
			$otDetail->allowance_id  = $req['allowance_id'];
			$otDetail->materials   = $req['materials'];
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

		}elseif($req['type'] == 3){
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
