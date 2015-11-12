<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//$confirmation_code = str_random(30);
		    $data =  Input::except(array('_token')) ;
            $rule  =  array(
                    'cname'       	   => 'required',
                    'description'      => 'required|min:10',
                ) ;

 
            $validator = Validator::make($data,$rule);

	        if($validator->fails())
	        {
	            return Redirect::back()->withInput()->withErrors($validator);
	        }
	        
	        else
	        {
			    $newcategory = new Category;
			    $newcategory->cname = Input::get('cname');
			    $newcategory->description = Input::get('description');
			    $newcategory->save();
			 
			    return Redirect::to('/back_end/manageCategory')->with('success', true)
                    		->with('message','New category has been added successfully');
			}
	}


	/*
	function to query and return information in the Category tabel
	*/

	public function displayCategory(){
		//query all information from the table

		$results = DB::table('categories')->get();

		return View::make('/back_end/manageCategory')->with('results', $results);

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
	public function destroy($idc)
	{
		Category::find($idc)->delete();

		return Redirect::route('managecategory.displayCategory')->with('message', 'Deleted Successfully');

	}


}
