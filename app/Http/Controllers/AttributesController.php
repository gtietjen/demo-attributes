<?php namespace App\Http\Controllers;

use Request;
use App\Attribute;

class AttributesController extends Controller {

	/**
	 * Display a listing of the attributes.
	 *
	 * @return Response
	 */
	public function index()
	{
		$attributes = Attribute::all();

		return view('attributes.index', compact('attributes'));
	}

	/**
	 * Show the form for creating a new attribute.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('attributes.create');
	}

	/**
	 * Store a newly created attribute in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$options = array();

		foreach (Request::get('options', array()) as $option)
		{
			if ( ! $option['key'] and ! $option['value']) continue;

			$options[$option['key']] = $option['value'];
		}

		$input = array_merge(Request::except('options', '_token'), compact('options'));

		Attribute::create($input);

		return redirect('attributes')->with('message', 'Attribute Saved.');
	}

	/**
	 * Remove the specified attribute from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Attribute::find($id)->delete();

		return redirect('attributes')->with('message', 'Attribute Deleted.');
	}

}
