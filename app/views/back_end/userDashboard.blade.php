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
                       {{HTML::link('/back_end/userDashboard', 'Dashboard', 
                       array('class' => 'active-menu fa fa-dashboard fa-2x', 'style' => 'font-weight: bold;'))}}
                   </li>
                    <li>
                       <a  href="#"><i class="fa fa-desktop fa-3x"></i><b>Inventory</b></a>
                       <ul style="list-style: none;">
                            <li>{{ HTML::link('/back_end/addProduct', 'Add New Product', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                            <li>{{ HTML::link('/back_end/manageProduct', 'Manage Products', 
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
                   <a  href="#"><i class="fa fa-qrcode fa-3x"></i><b>Purchase/Order</b></a>
                        <ul style="list-style: none;">
                            <li>{{ HTML::link('/back_end/makePurchase', 'Make Purchase', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                            <li>{{ HTML::link('/back_end/purchaseManagement', 'Purchase Management', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                        </ul>

                    </li>	
      
                    </li>	
                    </li>	
      
                    </li>	

                     <li  >
                       <a  href="table.html"><i class="fa fa-table fa-3x"></i><b> Financial Reports </b></a>
                   </li>	
               </ul>
              
           </div>
           
       </nav>  
       <!-- /. NAV SIDE  -->
       <div id="page-wrapper" >
           <div id="accountinfo">
              <center><p><b><u>Account Information</u></b></p></center>
              <hr />
              <ul style="list-style: none;">
                <li>
                  <p>First Name: <b>{{Auth::user()->fname}} (Status: Online)</b></p>
                </li>
                <li>
                  <p>Last Name: <b>{{Auth::user()->lname}} (Status: Online)</b></p>
                </li>
                <li>
                  <p>Email Address: <b>{{Auth::user()->email}}</b>
                    </b></p>
                </li>
                <li>
                  <p>Phone Number:  <b> Fix Needed
                  </b></p>
                </li>
              </ul>
           </div>
           <div id="generalinfo">
              <center><p><b><u>General And Time Information</u></b></p></center>
              <hr />
              <ul style="list-style: none;">
                <li>
                  <p>Today's Date: <b>&nbsp;&nbsp;&nbsp;{{ date('d/m/y') }}
                  Time Zone (GMT + 01)</b></p>
                </li>
                <li>
                  <p>Last Login at: Fix Needed</p>
                </li>
                <li>
                  <p>Number of Customers: <b> <?php
                  $val = DB:: table( 'created_users' ) -> count();
                  echo $val ?></b></p>
                </li>
                <li>
                  <p>Descripion: <i><b>You are a verified user of the system</b></i></p>
                </li>
              </ul>
           </div>
           <hr />

           <!-- for image display -->
           <div id="dashboard">
             
              <center><p><b><u>PRODUCT ANALYSIS OF INVENTORY MANAGEMENT SYSTEM</u></b></p></center>
              <hr />
              <ul>
               <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                </div>
              </ul>
          
          
           <hr />
           </div>

       </div>
       <!-- for images -->


@stop