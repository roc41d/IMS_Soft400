<?php

class InventoryController extends \BaseController {

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
            	    'custId'         =>'required',
            	    'custName'       =>'required',
            	    'custEmail'      =>'required',
                    'prodId'         => 'required',
                    'pname'          => 'required',
                    'price'          => 'required',
                    'stockUnit'      => 'required',
                    'sales'          => 'required',
                    'quantity'       => 'required',
                    
                ) ;

			
 
            $validator = Validator::make($data,$rule);

	        if($validator->fails())
	        {
	            return Redirect::back()->withInput()->withErrors($validator);
	        }
	        
	        else
	        {
			    $newproduct = new Products;
			    $newproduct->prodId = Input::get('prodId');
			    $newproduct->pname = Input::get('pname');
			    $newproduct->descr = Input::get('descr');
			    $newproduct->location = Input::get('location');
			    $newproduct->purl = Input::get('purl');
			    $newproduct->price = Input::get('price');
			    $newproduct->pvat = Input::get('pvat');
			    $newproduct->sales = Input::get('sales');
			    $newproduct->svat = Input::get('svat');
			    $newproduct->quantity = Input::get('quantity');
			    $newproduct->swarn = Input::get('swarn');
			    $newproduct->save();
			 
			    return Redirect::to('/back_end/manageProduct')->with('success', true)
                    		->with('message','Product Added Successfully');
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
		//
	}

	/*
	function to query and return information in the product tabel
	*/

	public function displayInformation(){
		//query all information from the table

		$results = DB::table('product')->get();

		return View::make('/back_end/manageProduct')->with('results', $results);

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
