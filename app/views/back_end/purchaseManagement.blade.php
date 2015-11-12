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
>
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
            <center><p style="font-size: 20px;"><b>Manage purchase in Inventory</b></p></center>
          </div> 
             <div class="panel panel-default">
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
                          <strong></strong> {{ Session::get('message', '') }}
                          </div>
                      @endif
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>Customer Name</th>
                                        <th>Telephone Number</th>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Stock Unit</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                   </thead>
                                    <tbody>
                                        @foreach ($results as $result)
                                        <tr>
                                        <td>
                                              {{ $result->custname }}
                                            </td>
                                            <td>
                                              {{ $result->tel_num }}
                                            </td>
                                            <td>
                                              {{ $result->prodId }}
                                            </td>
                                            <td>
                                              {{ $result->prodname }}
                                            </td>
                                            
                                            <td>
                                              {{ $result->price }}<i> Frs CFA</i>
                                            </td>
                                            <td>
                                              {{ $result->stockunit }}
                                            </td>
                                            <td><b>Active</b></td>
                                            <td><button class="btn btn-warning">Edit</button></td>
                                            <td><button class="btn btn-danger">Delete</button></td>
                                          </tr>
                                        @endforeach

                                  </tbody>  
                                </table>
                                {{HTML::link('/back_end/purchaseManagement', 'Add Another purchase', 
                                array('class' => 'btn btn-primary', 'style' => 'float: right;'))}}
                            </div>
                            
                        </div>
                    </div>
       </div>
@stop