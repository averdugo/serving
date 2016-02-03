<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Group;
use Illuminate\Support\Facades\Request;


class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate();
		foreach($users as $u){
			$u->user_type_id = User::$typeses[$u->user_type_id];
			if($u->group_id == 0 ){
				$u->group_id = "No pertenece a un grupo";
			}else{
				$group = Group::findOrFail($u->group_id);
				$u->group_id = $group->name;
			}
		}
		return view('admin.users.index',compact('users'));

	}

	public function letterSeach($name)
	{
		$users = User::where('name', 'like', '%'.$name.'%')->paginate();

		foreach($users as $u){
			$u->user_type_id = User::$typeses[$u->user_type_id];
			if($u->group_id == null ){
				$u->group_id = "No pertenece a un grupo";
			}else{
				$group = Group::findOrFail($u->group_id);
				$u->group_id = $group->name;
			}
		}

		return view('admin.users.index',compact('users'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $user = new User(Request::all());
		$user->save();
		return $user;
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
	public function groupsOption($type)
	{
		if($type == 1){
			$sub = User::$subDtTypeses;
		}elseif($type == 2){
			$sub = User::$subAsrTypeses;
		}

		$subSelect = "";
		foreach($sub as $key => $value):
			$subSelect .= '<option value="'.$key.'">'.$value.'</option>'; //close your tags!!
		endforeach;

		$groups = Group::ofType($type)->active()->get();
		$data="<option value='0'>Seleccione</option>";

		foreach($groups as $g){
			$data .= sprintf('
				<option value="%s">%s</option>
			',$g->id,$g->name);
		};

		return json_encode(array($data, $subSelect));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return $user;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);
		$user->fill(Request::all());
		$user->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user->delete();

		return $id;
	}

}
