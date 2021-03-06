<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets/images/favicon.png')}}">
    <title>Jeyam Trips</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('css/style1.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{url('css/colors/default-dark.css')}}" id="theme" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.2/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->
<SCRIPT language="javascript">
		function addRow(tableID) {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);
			var colCount = table.rows[0].cells.length;
			for(var i=0; i<colCount; i++) {
				var newcell	= row.insertCell(i);
				newcell.innerHTML = table.rows[0].cells[i].innerHTML;
				//alert(newcell.childNodes);
				switch(newcell.childNodes[0].type) {
					case "text":
							newcell.childNodes[0].value = "";
							break;
					case "checkbox":
							newcell.childNodes[0].checked = false;
							break;
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
				}
			}
		}
		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;
			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					if(rowCount <= 1) {
						alert("Cannot delete all the rows.");
						break;
					}
					table.deleteRow(i);
					rowCount--;
					i--;
				}
			}
			}catch(e) {
				alert(e);
			}
		}
	</SCRIPT>
</head>

<body class=" logo-center fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
         <!-- ============================================================== -->
         <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                           Jeyam Trips
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                     
                          </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="has-arrow" href="/booking/public/vendors" aria-expanded="false"><i class="iconify" data-icon="twemoji:sport-utility-vehicle" data-inline="false" style="color: 55ACEE;" data-height="35" data-width="35"></i><span class="hide-menu">Vendors</a>
                            
                        </li>
						<li>
                            <a class="has-arrow" href="/booking/public/enquirys" aria-expanded="false"><i class="iconify" data-icon="emojione-v1:blue-book" data-inline="false" style="color: 55ACEE;" data-width="35" data-height="35"></i><span class="hide-menu">Bookings</span></a>  
                        </li>
                        <li>
                            <a class="has-arrow " href="/booking/public/taluks" aria-expanded="false"><i class="iconify" data-icon="whh:intersection" data-inline="false" style="color: 55ACEE;" data-width="35" data-height="35"></i><span class="hide-menu">Taluks</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="/booking/public/city" aria-expanded="false"><i class="iconify" data-icon="noto-v1:cityscape" data-inline="true" style="color: 55ACEE;" data-width="35" data-height="35"></i><span class="hide-menu">City</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="/booking/public/users" aria-expanded="false"><i class="iconify" data-icon="entypo:users" data-inline="false" style="color: 55ACEE;" data-width="35" data-height="35"></i><span class="hide-menu">Users</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="/booking/public/reports" aria-expanded="false"><i class="iconify" data-icon="whh:report" data-inline="false" style="color: 55ACEE;" data-width="35" data-height="35"></i><span class="hide-menu">Reports</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
       
        </aside>      <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="has-arrow" href="/booking/public/vendors" aria-expanded="false"><i class="iconify" data-icon="twemoji:sport-utility-vehicle" data-inline="false" style="color: 55ACEE;" data-height="35" data-width="35"></i><span class="hide-menu">Vendors</a>
                            
                        </li>
						<li>
                            <a class="has-arrow" href="/booking/public/enquirys" aria-expanded="false"><i class="iconify" data-icon="emojione-v1:blue-book" data-inline="false" style="color: 55ACEE;" data-width="35" data-height="35"></i><span class="hide-menu">Bookings</span></a>  
                        </li>
                        <li>
                            <a class="has-arrow " href="/booking/public/taluks" aria-expanded="false"><i class="iconify" data-icon="whh:intersection" data-inline="false" style="color: 55ACEE;" data-width="35" data-height="35"></i><span class="hide-menu">Taluks</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="/booking/public/city" aria-expanded="false"><i class="iconify" data-icon="noto-v1:cityscape" data-inline="true" style="color: 55ACEE;" data-width="35" data-height="35"></i><span class="hide-menu">City</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="/booking/public/users" aria-expanded="false"><i class="iconify" data-icon="entypo:users" data-inline="false" style="color: 55ACEE;" data-width="35" data-height="35"></i><span class="hide-menu">Users</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="/booking/public/reports" aria-expanded="false"><i class="iconify" data-icon="whh:report" data-inline="false" style="color: 55ACEE;" data-width="35" data-height="35"></i><span class="hide-menu">Reports</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
       
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- Validation wizard -->
                <div class="row" id="validation">
                    <div class="col-12">
                        <div class="card wizard-content">
                            <div class="card-body">
                                <h4 class="card-title">Register Vendor</h4>
                                
                                <form action="{{ route('vendors.store') }}" method="post" class="validation-wizard wizard-circle">
                                    <!-- Step 1 -->
                                    {{csrf_field()}} 
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Vendor Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wfirstName2" name="vendorname"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlastName2"> City : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wlastName2" name="city"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wemailAddress2"> Number of Vehicles : <span class="danger">*</span> </label>
                                                    <input type="number" class="form-control required" id="wemailAddress2" name="numofvehicles"> </div>
                                            </div>
											<div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wemailAddress2"> Mobile Number : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wemailAddress2" name="mobilenum"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2"> Select Taluk : <span class="danger">*</span> </label>
                                                    <select type="text" class="custom-select form-control required" id="wlocation2" name="taluk">
                                                    @if(count($taluks)>0)
                                                    @foreach($taluks as $taluk)
                                                        <option selected disabled>Select Taluk</option>
                                                        <option value="{{$taluk->talukname}}">{{$taluk->talukname}}</option>
                                                        @endforeach
                                                        @else
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2"> Number of Models : <span class="danger">*</span> </label>
                                                    <input type="number" class="custom-select form-control required" id="wlocation2" name="numofmodels">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <section>
									<h3>Enter Model Details </h3>
									<td><INPUT type="button" style="margin:10px;" class="btn pull-right hidden-sm-down btn-success" value="Add Row"  onclick="addRow('dataTable2')" /></td>
									<!--<td><INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable2')" /> </td>-->
									<br>
									<table id="dataTable2" class="table table-striped" style="border: 1px solid #dee2e6">
									    <tr>
											<td>
											
													<td><INPUT type="checkbox"  name="chkbox"/></td>
												
                                                    <td>
                                                    <select class="custom-select form-control required" id="wlocation2" name="modelname[]">
                                                        <option value="">Select Model</option>
                                                        <option value="Mahindra Van">Mahindra Van</option>
                                                        <option value="Tempo Traveller">Tempo Traveller</option>
                                                        <option value="407 Coach Van">407 Coach Van</option>
                                                        <option value="Mini Bus">Mini Bus</option>
                                                        <option value="Omni Bus">Omni Bus</option>
                                                        <option value="Spare Bus">Spare Bus</option>
                                                    </select>
                                                    </td>
                                            
                                                   <td><input type="checkbox" class="form-control required" name="acinfo[]" id="option1" autocomplete="off" > AC <td>
											
                                                   <td> <input type="number" class="form-control required" placeholder="Seats" id="wlastName2" name="seats[]"> </td>
											
                                                    <td><input type="text" class="form-control required" id="wfirstName2" placeholder="PushBack" name="pushback[]"></td> 
                                                    <td> <input type="number" class="form-control required" id="wlastName2" placeholder="Total Nos" name="totalnos[]"> 
                                        </td>
										</tr>
									</table>
									</section>
                                    <button type="submit" class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Register</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
             
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url('js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{url('js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{url('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{url('js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{url('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>