@extends('backend.layout')
@section('title','Dashbord')
@section('content')

<style>
    .left-border{
        border-left: 3px solid;
    }
    .info_card h3{
        font-size: 1.2rem;
    }
</style>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Sales Summary</h4>
                                        <h5 class="card-subtitle">Overview of Latest Month</h5>
                                    </div>
                                    <div class="ms-auto d-flex no-block align-items-center">
                                        <ul class="list-inline font-12 dl m-r-15 m-b-0">
                                            <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Online
                                            </li>
                                            <li class="list-inline-item text-primary"><i class="fa fa-circle"></i> Offline
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12">
                                        <div class="campaign ct-charts"></div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Feeds</h4>
                                <div class="feed-widget">
                                    <ul class="list-style-none feed-body m-0 p-b-20">
                                        <li class="feed-item">
                                            <div class="feed-icon bg-info"><i class="far fa-bell"></i></div> You have 4
                                            pending tasks. <span class="ms-auto font-12 text-muted">Just Now</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-success"><i class="ti-server"></i></div> Server #1
                                            overloaded.<span class="ms-auto font-12 text-muted">2 Hours ago</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-warning"><i class="ti-shopping-cart"></i></div> New
                                            counsellor request.<span class="ms-auto font-12 text-muted">31 May</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-danger"><i class="ti-user"></i></div> New user
                                            registered.<span class="ms-auto font-12 text-muted">30 May</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-info"><i class="far fa-bell"></i></div> 4
                                            pending Schedules. <span class="ms-auto font-12 text-muted">Just Now</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Latest Requests</h4>
                                        <h5 class="card-subtitle">Overview of all latest request</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dl">
                                            <select class="form-select shadow-none">
                                                <option value="0" selected>Monthly</option>
                                                <option value="1">Daily</option>
                                                <option value="2">Weekly</option>
                                                <option value="3">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">User Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">Course</th>
                                            <th class="border-top-0">Activation Key</th>
                                            <th class="border-top-0">Activated On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-info text-white">MP</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Mohit Pareek</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Mohit@gmail.com</td>
                                            <td>9876543210</td>
                                            <td>10th Maths, English, RBSE, Rajasthan</td>
                                            <td>sdrf78hjbf47</td>
                                            <td>10 Sep 2023</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-orange text-white">RS</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Ravi Sharma</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Ravi@gmail.com</td>
                                            <td>9876543210</td>
                                            <td>10th Maths, English, RBSE, Rajasthan</td>
                                            <td>sdrf78hjbf47</td>
                                            <td>10 Sep 2023</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-success text-white">MT</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Manoj Tiwari</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Manoj@gmail.com</td>
                                            <td>9876543210</td>
                                            <td>10th Maths, English, RBSE, Rajasthan</td>
                                            <td>sdrf78hjbf47</td>
                                            <td>10 Sep 2023</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-purple text-white">VS</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Vikash Sharma</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Vikash@gmail.com</td>
                                            <td>9876543210</td>
                                            <td>10th Maths, English, RBSE, Rajasthan</td>
                                            <td>sdrf78hjbf47</td>
                                            <td>10 Sep 2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Comments</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="{{asset('backend/assets/images/users/1.jpg')}}" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">James Anderson</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">April 14, 2021</span> <span
                                                class="label label-rounded label-primary">Pending</span> <span
                                                class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="{{asset('backend/assets/images/users/4.jpg')}}" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text active w-100">
                                        <h6 class="font-medium">Michael Jorden</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer ">
                                            <span class="text-muted float-end">April 14, 2021</span>
                                            <span class="label label-success label-rounded">Approved</span>
                                            <span class="action-icons active">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="{{asset('backend/assets/images/users/5.jpg')}}" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Johnathan Doeting</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">April 14, 2021</span>
                                            <span class="label label-rounded label-danger">Rejected</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Temp Guide</h4>
                                <div class="d-flex align-items-center flex-row m-t-30">
                                    <div class="display-5 text-info"><i class="wi wi-day-showers"></i>
                                        <span>73<sup>°</sup></span></div>
                                    <div class="m-l-10">
                                        <h3 class="m-b-0">Saturday</h3><small>Ahmedabad, India</small>
                                    </div>
                                </div>
                                <table class="table no-border mini-table m-t-20">
                                    <tbody>
                                        <tr>
                                            <td class="text-muted">Wind</td>
                                            <td class="font-medium">ESE 17 mph</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Humidity</td>
                                            <td class="font-medium">83%</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Pressure</td>
                                            <td class="font-medium">28.56 in</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Cloud Cover</td>
                                            <td class="font-medium">78%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <ul class="row list-style-none text-center m-t-30">
                                    <li class="col-3">
                                        <h4 class="text-info"><i class="wi wi-day-sunny"></i></h4>
                                        <span class="d-block text-muted">09:30</span>
                                        <h3 class="m-t-5">70<sup>°</sup></h3>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="text-info"><i class="wi wi-day-cloudy"></i></h4>
                                        <span class="d-block text-muted">11:30</span>
                                        <h3 class="m-t-5">72<sup>°</sup></h3>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="text-info"><i class="wi wi-day-hail"></i></h4>
                                        <span class="d-block text-muted">13:30</span>
                                        <h3 class="m-t-5">75<sup>°</sup></h3>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="text-info"><i class="wi wi-day-sprinkle"></i></h4>
                                        <span class="d-block text-muted">15:30</span>
                                        <h3 class="m-t-5">76<sup>°</sup></h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
        
    </div>
    
</div>

<!--chartis chart-->
<script src="{{asset('backend/assets/libs/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('backend/dist/js/pages/dashboards/dashboard1.js')}}"></script>
@endsection