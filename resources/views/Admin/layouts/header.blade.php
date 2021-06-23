<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="_token" content="{!! csrf_token() !!}" />

  <title>Pico Innovation Admin</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="/images/default/favicon.png">

  <!-- Bootstrap core CSS-->
  <link href="{{ asset('Admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{ asset('Admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{ asset('Admin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset('Admin/css/sb-admin.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('Admin/css/iEdit.min.css')}}">
  <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->
  <link rel="stylesheet" href="{{ asset('Admin/css/sweetalert.css')}}" />
  <link rel="stylesheet" href="{{ asset('Admin/css/croppie.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('Admin/css/uploadImageStyle.css')}}">
  
  <style type="text/css">
  #spec_no{
    padding: 5px 0px 0 5px;
    width: 20px;
    margin: 0px;
    text-align: center;
  }
  #spec_label{
    padding: 0px;
  }
  #spec_value{
    padding: 0px;
    width: 51%;
  }
  .bts{
    padding-bottom: 3px;
  }
  .pro-setting-link,.pro-setting-link:hover{
    color: black;
    text-decoration: none;
  }
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
    color: #f7f8f9;
    padding-top: 8px;
    padding-bottom: 8px;
  }
  #mainNav.fixed-top.navbar-dark .sidenav-toggler {
    background-color: #0c2c4c;
  }
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav {
    background: #0c2c4c;
  }
</style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/home">
      <i class="fa fa-fw fa-home"></i>PICOINNOVATION</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard" style="padding-top: 15px;">
          <a class="nav-link" href="/home">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link" href="/view_category">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">Category</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sub Category">
          <a class="nav-link" href="/sub_category">
            <i class="fa fa-fw fa-code-fork"></i>
            <span class="nav-link-text">Sub Category</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Service Type">
          <a class="nav-link" href="/view_service_type">
            <i class="fa fa-fw fa-gavel"></i>
            <span class="nav-link-text">Service Type</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Service">
          <a class="nav-link" href="/view_service">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Service</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Product">
          <a class="nav-link" href="/view_product">
            <i class="fa fa-fw fa-database"></i>
            <span class="nav-link-text">Product</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Staff">
          <a class="nav-link" href="/view_staff">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Staff</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Team&&Position">
          <a class="nav-link" href="/view_team_position">
            <i class="fa fa-fw fa-handshake-o"></i>
            <span class="nav-link-text">Team&&Position</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Skill Types&&Skills">
          <a class="nav-link" href="/view_skilltype_skill">
            <i class="fa fa-fw fa-graduation-cap"></i>
            <span class="nav-link-text">Skill Types&&Skills</span>
          </a>
        </li>

       <!--  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Create</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="/create_category">+ Category</a>
            </li>
            <li>
              <a href="/sub_category/create">+ Sub Category</a>
            </li>
            <li>
              <a href="/create_product">+ Product</a>
            </li> -->
            <!-- <li>
              <a href="/create_service_type">+ Service Type</a>
            </li> -->
            <!-- <li>
              <a href="/create_service">+ Service</a>
            </li>      
          </ul>
        </li> -->
       <!--  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#viewData" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">View</span>
          </a>
          <ul class="sidenav-second-level collapse" id="viewData"> -->
            <!-- <li>
              <a href="/view_category"># Category</a>
            </li> -->
           <!--  <li>
              <a href="/sub_category"># Sub Category</a>
            </li> -->
           <!--  <li>
              <a href="/view_product"># Product</a>
            </li> -->
            <!-- <li>
              <a href="/view_service_type"># Service Type</a>
            </li> -->
            <!-- <li>
              <a href="/view_service"># Service</a>
            </li>  -->
            <!-- <li>
              <a href="/view_team_position"># Team&&Position</a>
            </li>  -->
            <!-- <li>
              <a href="/view_skilltype_skill"># Skill Types&&Skills</a>
            </li> -->      
         <!--  </ul>
        </li> -->
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Members Setting</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents"> -->
            <!-- <li>
              <a href="/create_position">+ New Position</a>
            </li> -->
            <!-- <li>
              <a href="/create_team">+ New Team</a>
            </li> -->
            <!-- <li>
              <a href="/create_skill_type">+ New Skill Type</a>
            </li>
            <li>
              <a href="/create_skill">+ New Skill</a>
            </li> -->
            <!-- <li>
              <a href="/create_staff">+ New Staff</a>
            </li> -->
            <!-- <li>
              <a href="/view_staff"># View Staff Info</a>
            </li> -->
          <!-- </ul>
        </li> -->
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li> -->
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>-->
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li> -->
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-danger">
                  <strong>
                    <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                  </span>
                  <span class="small float-right text-muted">11:21 AM</span>
                  <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <span class="text-success">
                    <strong>
                      <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                    </span>
                    <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
              </li>
              <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                  <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for...">
                    <span class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>
                </form>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
              </ul>
            </div>
          </nav>
