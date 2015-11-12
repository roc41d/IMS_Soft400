@extends('/back_end/blayout')

@section('title')
    <title>User Page - IMS_Soft400</title>
@stop          

@section('content')
 <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
           <div class="sidebar-collapse">
               <ul class="nav" id="main-menu">
			<li class="text-center">
                   <img src="{{ asset('assets/img/find_user.png') }}" class="user-image img-responsive"/>
				</li>
			
				
                   <li>
                       <a class="active-menu"  href="{{URL::to('/back_end/userDashboard')}}"><i class="fa fa-dashboard fa-3x"></i> <b>Dashboard</b></a>
                   </li>
                    <li>
                       <a  href="#"><i class="fa fa-desktop fa-3x"></i><b>Inventory</b></a>
                       <ul style="list-style: none;">
                            <li>{{ HTML::link('/back_end/addProduct', 'Add Product', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                            <li>{{ HTML::link('/back_end/manageProduct', 'Manage Product', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                       </ul>
                       </li>
                   </li>
                   <li>
                       <a  href="#"><i class="fa fa-qrcode fa-3x"></i><b> Category </b></a>
                       <ul style="list-style: none;">
                            <li>{{ HTML::link('/back_end/addCategory', 'Add Category', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                            <li>{{ HTML::link('/back_end/manageCategory', 'Manage Category', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                       </ul>
                   </li>
					   <li  >
                       <a   href="#"><i class="fa fa-desktop fa-3x"></i><b> Purchase/order </b></a>
                          <ul style="list-style: none;"> 
                              <li>{{ HTML::link('/back_end/makePurchase', 'Make Purchase', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                            <li>{{ HTML::link('/back_end/purchaseManagement', 'Purchase Management', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                              </ul>
                   </li>	
                     <li  >
                       <a  href="table.html"><i class="fa fa-table fa-3x"></i><b> Financial Reports </b></a>
                   </li>	
               </ul>
              
           </div>
           
       </nav>  
       <!-- /. NAV SIDE  -->
       <div id="page-wrapper" >

       <div>
         <center><p style="font-size: 20px;"><b>Add New Product</b></p></center>
       </div>
          <div id="formDiv">
            @if ($errors->any())
               
              <ul style="color:red;">
               
              {{ implode('', $errors->all('<li>:message</li>')) }}
               
              </ul>
               
              @endif

              @if(Session::has('success'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong></strong> {{ Session::get('message', '') }}
                  </div>
              @endif

           
              {{ Form::open(array('url' => '/back_end/addproduct', 'method' => 'post')) }}
                <div class="top-margin">
                  <label>Product ID <span class="text-danger">*</span></label>
                  {{ Form::text('prodId', Input::old('prodId'), array('placeholder'=>'Serial Number',
                   'class' => 'form-control')) }}
                </div>

                <div class="top-margin">
                  <label>Product Name<span class="text-danger">*</span></label>
                  {{ Form::text('pname', Input::old('pname'), array('placeholder'=>'Product Name',
                   'class' => 'form-control')) }}
                </div>
                <div class="top-margin">
                  <label>Product Description<span class="text-danger">*</span></label>
                  {{ Form::text('descr', Input::old('descr'), array('placeholder'=>'Brief Description of Product',
                   'class' => 'form-control')) }}
                </div>

                <div class="row top-margin">
                  <div id="location" class="col-sm-12">
                    <label for="category" class="category-label">Category</label>
                    <span class="text-danger">*</span><br />
                    <select class="form-control" name="cat">
                    <option value="Select category">Select category</optgroup>
                      @foreach($list as $lists)
                        <option value="{{$lists->cname}}">{{$lists->cname}}</option>
                      @endforeach
                  </select>
                  </div>
                </div>

                <div class="row top-margin">
                  <div id="location" class="col-sm-12">
                    <label for="location" class="location-label">Location</label>
                    <span class="text-danger">*</span><br />
                    <select class="form-control" name="location">
                              <option selected="selected">Select Location</option>
                              <option value="North West">North West</option>
                              <option value="Extreme North">Extreme North</option>
                              <option value="Adamawa">Adamawa</option>
                              <option value="North">North</option>
                              <option value="South West">South West</option>
                              <option value="Litoral">Litoral</option>
                              <option value="Centre">Centre</option>
                              <option value="East">East</option>
                              <option value="West">West</option>
                              <option value="South">South</option>
                            </select>
                  </div>
                </div>

                <div class="top-margin">
                  <label>Product URL</label>
                  {{ Form::text('purl', Input::old('purl'), array('placeholder'=>'Enter Product URL to view product',
                   'class' => 'form-control')) }}
                </div>

                <div class="row top-margin">
                  <div class="col-sm-6">
                    <label>Purchase Price <span class="text-danger">*</span></label>
                    {{ Form::text('price', Input::old('price'), array('placeholder'=>'Purchase Price',
                   'class' => 'form-control')) }}
                  </div>
                  <div class="col-sm-6">
                    <label>Purchase VAT%<span class="text-danger">*</span></label>
                    {{ Form::text('pvat', Input::old('purvat'), array('placeholder'=>'Purchase Value Added Tax',
                   'class' => 'form-control')) }}
                  </div>
                </div>
                <div class="row top-margin">
                  <div class="col-sm-6">
                    <label>Sales Price<span class="text-danger">*</span></label>
                    {{ Form::text('sales', Input::old('sales'), array('placeholder'=>'Sales Price',
                   'class' => 'form-control')) }}
                  </div>
                  <div class="col-sm-6">
                    <label>Sales VAT%<span class="text-danger">*</span></label>
                    {{ Form::text('svat', Input::old('salesvat'), array('placeholder'=>'Sales Value Added Tax',
                   'class' => 'form-control')) }}
                  </div>
                </div>
                <div class="row top-margin">
                  <div class="col-sm-6">
                    <label>Stock Quantity<span class="text-danger">*</span></label>
                    {{ Form::text('quantity', Input::old('prodId'), array('placeholder'=>'Stock Quantity',
                   'class' => 'form-control')) }}
                  </div>
                  <div class="col-sm-6">
                    <label>Stock Warning Level<span class="text-danger">*</span></label>
                    {{ Form::text('swarn', Input::old('prodId'), array('placeholder'=>'Minimum Reorder Level',
                   'class' => 'form-control')) }}
                  </div>
                </div>

                <div class="row">
                <div class="col-lg-8">
                  <br />                       
                  </div>
                  <div class="col-lg-4 text-right"><br />
                    {{ Form::submit('Add Product', array('class' => 'btn btn-primary')) }}
                  </div>
                </div>
              {{ Form::close() }}
            </div>
       </div>
@stop