@extends('/back_end/blayout')

@section('title')
    <title>User Page - Edit Catergory - IMS_Soft400</title>
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

					        <li>
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
         <center><p style="font-size: 20px;"><b>Edit Category</b></p></center>
        </div>

          <div class="panel panel-default">
            <div class="panel-heading">
                    Edit Category
                </div>
                  <div class="panel-body">
                    <div class="table-responsive">
                      @if ($errors->any())
                       
                      <ul style="color:red;">
                       
                        {{ implode('', $errors->all('<li>:message</li>')) }}
                       
                      </ul>
                       
                        @endif

                        @if(Session::has('success'))
                          <div class="alert alert-success">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <strong>Complete your Registration!</strong> {{ Session::get('message', '') }}
                          </div>
                      @endif

                      <div id="formDiv">
                      {{ Form::open(array('url' => '/back_end/addcategory', 'method' => 'post')) }}
                        <div class="top-margin">
                          <label>Category Name<span class="text-danger">*</span></label>
                          {{ Form::text('cname', Input::old('cname'), array('placeholder'=>'Enter Category Name',
                           'class' => 'form-control')) }}
                        </div>

                        <div class="top-margin">
                          <label>Category Description:<span class="text-danger">*</span></label>
                          {{ Form::textarea('description', Input::old('cname'), array('placeholder'=>'Enter Category Name',
                           'class' => 'form-control')) }}
                        </div>

                        <div class="row">
                        <div class="col-lg-8">
                          <br />                       
                          </div>
                          <div class="col-lg-4 text-right"><br />
                            {{ Form::submit('Update Category', array('class' => 'btn btn-success')) }}

                          </div>
                        </div>
                      {{ Form::close() }}
                    </div>

                </div>
                            
            </div>
          </div>

           
       </div>
@stop