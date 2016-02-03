<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Owner;
use App\Site;
use Illuminate\Support\Facades\Request;

class SiteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sites = Site::paginate();
		$owners = Owner::all();
		return view('admin.sites.index',compact('sites','owners'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$sites = new Site(Request::all());
		$sites->save();
		return $sites;
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
	 * @return array|bool
     */
	public function csv() {
		$filename = __DIR__.'/csv_asr.csv';
		$delimiter=";";

		//if (!file_exists($filename) || !is_readable($filename))
			//return FALSE;

		$header = NULL;
		$data = array();

		if (($handle = fopen($filename, 'r')) !== FALSE) {
			while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
				if (!$header)
					$header = $row;
				else
					$data[] = array_combine($header, $row);
			}
			fclose($handle);
		}

		//var_dump($data);

		foreach($data as $d)
		{
			  $site = new Site();
			  $site->name = $d['l'];
			  $site->nemonico = $d['Nemonico'];
			  $site->address = $d['Direccion'];
			  $site->owner_id = 1;
			  $site->siteid = $d['ID'];
			  $site->instance = $d['Instancia'];
			  $site->tecnology = $d['Tecnologia'];
			  $site->emplz = $d['ID Emplz'];
			  $site->comuna = $d['Comuna'];
			  $site->provincia = $d['Provincia'];
			  $site->region = $d['Region'];
			  $site->category = $d['Categoria'];
			  $site->save();
		}


		return "ok";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sites = Site::findOrFail($id);
		return $sites;
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function nemonico()
	{
		$req = Request::all();
		$o = $req['name_startsWith'];
		$data = Site::where('nemonico','LIKE','%'.$o.'%')->get();
		return $data;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sites = Site::findOrFail($id);
		$sites->fill(Request::all());
		$sites->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$sites = Site::findOrFail($id);
		$sites->delete();
		return $id;
	}

}
