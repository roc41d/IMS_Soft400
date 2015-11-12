@extends('/back_end/blayout')

@section('title')
    <title>User Page - Manage Catergory - IMS_Soft400</title>
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
                       <a href="#"><i class="fa fa-desktop fa-3x"></i><b> Purchase/order </b></a>
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
           
       </nav>  
       <!-- /. NAV SIDE  -->
       <div id="page-wrapper" >

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
           <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-cog"></i>
                             Category Listing
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th align="right">Description</th>
                                            <th><center>Edit</center></th>
                                            <th><center>Delete</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($results as $result)
                                        <tr class="odd gradeX">
                                            <td>
                                            {{ $result->cname }}
                                            </td>
                                            <td>
                                            {{ $result->description }}
                                            </td>
                                            <td>
                                                <center><a href="{{URL::to('/back_end/editCategory')}}" class="btn btn-warning">
                                                <i class="fa fa-edit "></i>Edit</a></center>
                                            </td>
                                            <td>
                                                <span onclick='return confirm("Are you sure you want to delete?")'>
                                                {{ Form::open(array('route' => array('deleteCategory', $result->id))) }}                       
                                                {{ Form::submit('Delete', array('class'=> 'btn btn-danger')) }}
                                                {{ Form::close() }}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{HTML::link('/back_end/addCategory', 'Add More Categories', 
                                array('class' => 'btn btn-primary', 'style' => 'float: right;'))}}
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
       </div>
@stop