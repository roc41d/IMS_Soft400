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
                       <a class="active-menu"  href="{{URL::to('/back_end/user')}}"><i class="fa fa-dashboard fa-3x"></i> <b>Dashboard</b></a>
                   </li>
                    <li>
                        <a  href="#"><i class="fa fa-desktop fa-3x"></i><b>Inventory Management</b></a>
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
         <center><p style="font-size: 20px;"><b>Make Purchase in inventory</b></p></center>
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

           
              {{ Form::open(array('url' => '/back_end/makePurchase', 'method' => 'post')) }}
               <div class="top-margin">
                  <label>Customer Name<span class="text-danger">*</span></label>
                  {{ Form::text('custname', Input::old('custname'), array('placeholder'=>'Customer Name',
                   'class' => 'form-control')) }}
                </div>
                 <div class="top-margin">
                  <label>Email<span class="text-danger">*</span></label>
                  {{ Form::text('custemail', Input::old('custemail'), array('placeholder'=>'Email',
                   'class' => 'form-control')) }}
                </div>

                 <div class="top-margin">
                  <label>Telephone Number<span class="text-danger">*</span></label>
                  {{ Form::text('tel_num', Input::old('tel_num'), array('placeholder'=>'Telephone Number',
                   'class' => 'form-control')) }}
                </div>
                <div class="top-margin">
                  <label>Product ID <span class="text-danger">*</span></label>
                  {{ Form::text('prodId', Input::old('prodId'), array('placeholder'=>'Serial Number',
                   'class' => 'form-control')) }}
                </div>

                <div class="top-margin">
                  <label>Product Name<span class="text-danger">*</span></label>
                  {{ Form::text('prodname', Input::old('prodname'), array('placeholder'=>'Product Name',
                   'class' => 'form-control')) }}
                </div>
                <div class="row top-margin">
                  <div id="location" class="col-sm-12">
                    <label for="category" class="category-label">Category</label>
                    <span class="text-danger">*</span><br />
                    <select class="form-control" name="country"><optgroup>
                          <option selected="selected">Select Category</option>
                          <option value="Default">Default</option>
                        </optgroup></select>
                 </div>
                </div>
                 <div class="top-margin">
                  <label>Stock Unit<span class="text-danger">*</span></label>
                  {{ Form::text('stockunit', Input::old('prodId'), array('placeholder'=>'Stock Unit',
                   'class' => 'form-control')) }}
                </div>

                <div class="row top-margin">
                  <div class="col-sm-6">
                    <label>Price <span class="text-danger">*</span></label>
                    {{ Form::text('price', Input::old('price'), array('placeholder'=>'Price',
                   'class' => 'form-control')) }}
                  </div>
                </div>

                <div class="row">
                <div class="col-lg-8">
                  <br />                       
                  </div>
                  <div class="col-lg-4 text-right"><br />
                    {{ Form::submit('Make Purchase', array('class' => 'btn btn-primary')) }}
                  </div>
                </div>
              {{ Form::close() }}
            </div>
       </div>
@stop