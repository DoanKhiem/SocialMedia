@extends('backend.layouts.master')

@section('content')

{{--    <div class="container-fluid">--}}

{{--        <!-- Page Heading -->--}}
{{--        <div class="d-sm-flex align-items-center justify-content-between mb-4">--}}
{{--            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>--}}
{{--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i--}}
{{--                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>--}}
{{--        </div>--}}

{{--        <!-- Content Row -->--}}
{{--        <div class="row">--}}

{{--            <!-- Earnings (Monthly) Card Example -->--}}
{{--            <div class="col-xl-3 col-md-6 mb-4">--}}
{{--                <div class="card border-left-primary shadow h-100 py-2">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row no-gutters align-items-center">--}}
{{--                            <div class="col mr-2">--}}
{{--                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">--}}
{{--                                    Earnings--}}
{{--                                    (Monthly)--}}
{{--                                </div>--}}
{{--                                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <i class="fas fa-calendar fa-2x text-gray-300"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Earnings (Monthly) Card Example -->--}}
{{--            <div class="col-xl-3 col-md-6 mb-4">--}}
{{--                <div class="card border-left-success shadow h-100 py-2">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row no-gutters align-items-center">--}}
{{--                            <div class="col mr-2">--}}
{{--                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">--}}
{{--                                    Earnings--}}
{{--                                    (Annual)--}}
{{--                                </div>--}}
{{--                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Earnings (Monthly) Card Example -->--}}
{{--            <div class="col-xl-3 col-md-6 mb-4">--}}
{{--                <div class="card border-left-info shadow h-100 py-2">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row no-gutters align-items-center">--}}
{{--                            <div class="col mr-2">--}}
{{--                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks--}}
{{--                                </div>--}}
{{--                                <div class="row no-gutters align-items-center">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <div class="progress progress-sm mr-2">--}}
{{--                                            <div class="progress-bar bg-info" role="progressbar"--}}
{{--                                                 style="width: 50%" aria-valuenow="50" aria-valuemin="0"--}}
{{--                                                 aria-valuemax="100"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Pending Requests Card Example -->--}}
{{--            <div class="col-xl-3 col-md-6 mb-4">--}}
{{--                <div class="card border-left-warning shadow h-100 py-2">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row no-gutters align-items-center">--}}
{{--                            <div class="col mr-2">--}}
{{--                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">--}}
{{--                                    Pending--}}
{{--                                    Requests--}}
{{--                                </div>--}}
{{--                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <i class="fas fa-comments fa-2x text-gray-300"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Content Row -->--}}

{{--        <div class="row">--}}

{{--            <!-- Area Chart -->--}}
{{--            <div class="col-xl-8 col-lg-7">--}}
{{--                <div class="card shadow mb-4">--}}
{{--                    <!-- Card Header - Dropdown -->--}}
{{--                    <div--}}
{{--                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">--}}
{{--                        <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>--}}
{{--                        <div class="dropdown no-arrow">--}}
{{--                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"--}}
{{--                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"--}}
{{--                                 aria-labelledby="dropdownMenuLink">--}}
{{--                                <div class="dropdown-header">Dropdown Header:</div>--}}
{{--                                <a class="dropdown-item" href="#">Action</a>--}}
{{--                                <a class="dropdown-item" href="#">Another action</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Card Body -->--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="chart-area">--}}
{{--                            <canvas id="myAreaChart"></canvas>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Pie Chart -->--}}
{{--            <div class="col-xl-4 col-lg-5">--}}
{{--                <div class="card shadow mb-4">--}}
{{--                    <!-- Card Header - Dropdown -->--}}
{{--                    <div--}}
{{--                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">--}}
{{--                        <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>--}}
{{--                        <div class="dropdown no-arrow">--}}
{{--                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"--}}
{{--                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"--}}
{{--                                 aria-labelledby="dropdownMenuLink">--}}
{{--                                <div class="dropdown-header">Dropdown Header:</div>--}}
{{--                                <a class="dropdown-item" href="#">Action</a>--}}
{{--                                <a class="dropdown-item" href="#">Another action</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Card Body -->--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="chart-pie pt-4 pb-2">--}}
{{--                            <canvas id="myPieChart"></canvas>--}}
{{--                        </div>--}}
{{--                        <div class="mt-4 text-center small">--}}
{{--                                        <span class="mr-2">--}}
{{--                                            <i class="fas fa-circle text-primary"></i> Direct--}}
{{--                                        </span>--}}
{{--                            <span class="mr-2">--}}
{{--                                            <i class="fas fa-circle text-success"></i> Social--}}
{{--                                        </span>--}}
{{--                            <span class="mr-2">--}}
{{--                                            <i class="fas fa-circle text-info"></i> Referral--}}
{{--                                        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Content Row -->--}}
{{--        <div class="row">--}}

{{--            <!-- Content Column -->--}}
{{--            <div class="col-lg-6 mb-4">--}}

{{--                <!-- Project Card Example -->--}}
{{--                <div class="card shadow mb-4">--}}
{{--                    <div class="card-header py-3">--}}
{{--                        <h6 class="m-0 font-weight-bold text-primary">Projects</h6>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="small font-weight-bold">Server Migration <span--}}
{{--                                class="float-right">20%</span>--}}
{{--                        </h4>--}}
{{--                        <div class="progress mb-4">--}}
{{--                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"--}}
{{--                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                        <h4 class="small font-weight-bold">Sales Tracking <span--}}
{{--                                class="float-right">40%</span>--}}
{{--                        </h4>--}}
{{--                        <div class="progress mb-4">--}}
{{--                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"--}}
{{--                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                        <h4 class="small font-weight-bold">Customer Database <span--}}
{{--                                class="float-right">60%</span></h4>--}}
{{--                        <div class="progress mb-4">--}}
{{--                            <div class="progress-bar" role="progressbar" style="width: 60%"--}}
{{--                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                        <h4 class="small font-weight-bold">Payout Details <span--}}
{{--                                class="float-right">80%</span>--}}
{{--                        </h4>--}}
{{--                        <div class="progress mb-4">--}}
{{--                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%"--}}
{{--                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                        <h4 class="small font-weight-bold">Account Setup <span--}}
{{--                                class="float-right">Complete!</span></h4>--}}
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"--}}
{{--                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Color System -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-primary text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Primary--}}
{{--                                <div class="text-white-50 small">#4e73df</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-success text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Success--}}
{{--                                <div class="text-white-50 small">#1cc88a</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-info text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Info--}}
{{--                                <div class="text-white-50 small">#36b9cc</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-warning text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Warning--}}
{{--                                <div class="text-white-50 small">#f6c23e</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-danger text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Danger--}}
{{--                                <div class="text-white-50 small">#e74a3b</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-secondary text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Secondary--}}
{{--                                <div class="text-white-50 small">#858796</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-light text-black shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Light--}}
{{--                                <div class="text-black-50 small">#f8f9fc</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="card bg-dark text-white shadow">--}}
{{--                            <div class="card-body">--}}
{{--                                Dark--}}
{{--                                <div class="text-white-50 small">#5a5c69</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="col-lg-6 mb-4">--}}

{{--                <!-- Illustrations -->--}}
{{--                <div class="card shadow mb-4">--}}
{{--                    <div class="card-header py-3">--}}
{{--                        <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="text-center">--}}
{{--                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"--}}
{{--                                 src="{{asset('backend/img/undraw_posting_photo.svg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <p>Add some quality, svg illustrations to your project courtesy of <a--}}
{{--                                target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>,--}}
{{--                            a constantly updated collection of beautiful svg images that you can use--}}
{{--                            completely--}}
{{--                            free and without attribution!</p>--}}
{{--                        <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on--}}
{{--                            unDraw &rarr;</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Approach -->--}}
{{--                <div class="card shadow mb-4">--}}
{{--                    <div class="card-header py-3">--}}
{{--                        <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce--}}
{{--                            CSS--}}
{{--                            bloat and poor page performance. Custom CSS classes are used to create custom--}}
{{--                            components and custom utility classes.</p>--}}
{{--                        <p class="mb-0">Before working with this theme, you should become familiar with the--}}
{{--                            Bootstrap framework, especially the utility classes.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card corona-gradient-card">
                        <div class="card-body py-0 px-0 px-sm-3">
                            <div class="row align-items-center">
                                <div class="col-4 col-sm-3 col-xl-2">
                                    <img src="{{asset('backend/images/dashboard/Group126@2x.png')}}"
                                         class="gradient-corona-img img-fluid" alt="">
                                </div>
                                <div class="col-5 col-sm-7 col-xl-8 p-0">
                                    <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version
                                        with 5 unique layouts!</p>
                                </div>
                                <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank"
                             class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">$12.34</h3>
                                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success ">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Potential growth</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">$17.34</h3>
                                        <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Revenue current</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">$12.34</h3>
                                        <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-danger">
                                        <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Daily Income</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">$31.53</h3>
                                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success ">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Expense current</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Transaction History</h4>
                            <canvas id="transaction-history" class="transaction-chart"></canvas>
                            <div
                                class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                <div class="text-md-center text-xl-left">
                                    <h6 class="mb-1">Transfer to Paypal</h6>
                                    <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                                </div>
                                <div
                                    class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                    <h6 class="font-weight-bold mb-0">$236</h6>
                                </div>
                            </div>
                            <div
                                class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                <div class="text-md-center text-xl-left">
                                    <h6 class="mb-1">Tranfer to Stripe</h6>
                                    <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                                </div>
                                <div
                                    class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                    <h6 class="font-weight-bold mb-0">$593</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between">
                                <h4 class="card-title mb-1">Open Projects</h4>
                                <p class="text-muted mb-1">Your data status</p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="preview-list">
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-primary">
                                                    <i class="mdi mdi-file-document"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">Admin dashboard design</h6>
                                                    <p class="text-muted mb-0">Broadcast web app mockup</p>
                                                </div>
                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">15 minutes ago</p>
                                                    <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-success">
                                                    <i class="mdi mdi-cloud-download"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">Wordpress Development</h6>
                                                    <p class="text-muted mb-0">Upload new design</p>
                                                </div>
                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">1 hour ago</p>
                                                    <p class="text-muted mb-0">23 tasks, 5 issues </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-info">
                                                    <i class="mdi mdi-clock"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">Project meeting</h6>
                                                    <p class="text-muted mb-0">New project discussion</p>
                                                </div>
                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">35 minutes ago</p>
                                                    <p class="text-muted mb-0">15 tasks, 2 issues</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-danger">
                                                    <i class="mdi mdi-email-open"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">Broadcast Mail</h6>
                                                    <p class="text-muted mb-0">Sent release details to team</p>
                                                </div>
                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">55 minutes ago</p>
                                                    <p class="text-muted mb-0">35 tasks, 7 issues </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="preview-item">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-warning">
                                                    <i class="mdi mdi-chart-pie"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">UI Design</h6>
                                                    <p class="text-muted mb-0">New application planning</p>
                                                </div>
                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">50 minutes ago</p>
                                                    <p class="text-muted mb-0">27 tasks, 4 issues </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Revenue</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">$32123</h2>
                                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Sales</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">$45850</h2>
                                        <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                                    </div>
                                    <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Purchase</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">$2039</h2>
                                        <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Order Status</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </th>
                                        <th> Client Name</th>
                                        <th> Order No</th>
                                        <th> Product Cost</th>
                                        <th> Project</th>
                                        <th> Payment Mode</th>
                                        <th> Start Date</th>
                                        <th> Payment Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{asset('backend/images/faces/face1.jpg')}}" alt="image"/>
                                            <span class="pl-2">Henry Klein</span>
                                        </td>
                                        <td> 02312</td>
                                        <td> $14,500</td>
                                        <td> Dashboard</td>
                                        <td> Credit card</td>
                                        <td> 04 Dec 2019</td>
                                        <td>
                                            <div class="badge badge-outline-success">Approved</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{asset('backend/images/faces/face2.jpg')}}" alt="image"/>
                                            <span class="pl-2">Estella Bryan</span>
                                        </td>
                                        <td> 02312</td>
                                        <td> $14,500</td>
                                        <td> Website</td>
                                        <td> Cash on delivered</td>
                                        <td> 04 Dec 2019</td>
                                        <td>
                                            <div class="badge badge-outline-warning">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{asset('backend/images/faces/face5.jpg')}}" alt="image"/>
                                            <span class="pl-2">Lucy Abbott</span>
                                        </td>
                                        <td> 02312</td>
                                        <td> $14,500</td>
                                        <td> App design</td>
                                        <td> Credit card</td>
                                        <td> 04 Dec 2019</td>
                                        <td>
                                            <div class="badge badge-outline-danger">Rejected</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{asset('backend/images/faces/face3.jpg')}}" alt="image"/>
                                            <span class="pl-2">Peter Gill</span>
                                        </td>
                                        <td> 02312</td>
                                        <td> $14,500</td>
                                        <td> Development</td>
                                        <td> Online Payment</td>
                                        <td> 04 Dec 2019</td>
                                        <td>
                                            <div class="badge badge-outline-success">Approved</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{asset('backend/images/faces/face4.jpg')}}" alt="image"/>
                                            <span class="pl-2">Sallie Reyes</span>
                                        </td>
                                        <td> 02312</td>
                                        <td> $14,500</td>
                                        <td> Website</td>
                                        <td> Credit card</td>
                                        <td> 04 Dec 2019</td>
                                        <td>
                                            <div class="badge badge-outline-success">Approved</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between">
                                <h4 class="card-title">Messages</h4>
                                <p class="text-muted mb-1 small">View all</p>
                            </div>
                            <div class="preview-list">
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <img src="{{asset('backend/images/faces/face6.jpg')}}" alt="image"
                                             class="rounded-circle"/>
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Leonard</h6>
                                                <p class="text-muted text-small">5 minutes ago</p>
                                            </div>
                                            <p class="text-muted">Well, it seems to be working now.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <img src="{{asset('backend/images/faces/face8.jpg')}}" alt="image"
                                             class="rounded-circle"/>
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Luella Mills</h6>
                                                <p class="text-muted text-small">10 Minutes Ago</p>
                                            </div>
                                            <p class="text-muted">Well, it seems to be working now.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <img src="{{asset('backend/images/faces/face9.jpg')}}" alt="image"
                                             class="rounded-circle"/>
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Ethel Kelly</h6>
                                                <p class="text-muted text-small">2 Hours Ago</p>
                                            </div>
                                            <p class="text-muted">Please review the tickets</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <img src="{{asset('backend/images/faces/face11.jpg')}}" alt="image"
                                             class="rounded-circle"/>
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Herman May</h6>
                                                <p class="text-muted text-small">4 Hours Ago</p>
                                            </div>
                                            <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Portfolio Slide</h4>
                            <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel"
                                 id="owl-carousel-basic">
                                <div class="item">
                                    <img src="{{asset('backend/images/dashboard/Rectangle.jpg')}}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{asset('backend/images/dashboard/Img_5.jpg')}}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{asset('backend/images/dashboard/img_6.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="d-flex py-4">
                                <div class="preview-list w-100">
                                    <div class="preview-item p-0">
                                        <div class="preview-thumbnail">
                                            <img src="{{asset('backend/images/faces/face12.jpg')}}" class="rounded-circle" alt="">
                                        </div>
                                        <div class="preview-item-content d-flex flex-grow">
                                            <div class="flex-grow">
                                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                    <h6 class="preview-subject">CeeCee Bass</h6>
                                                    <p class="text-muted text-small">4 Hours Ago</p>
                                                </div>
                                                <p class="text-muted">Well, it seems to be working now.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted">Well, it seems to be working now. </p>
                            <div class="progress progress-md portfolio-progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">To do list</h4>
                            <div class="add-items d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                                <button class="add btn btn-primary todo-list-add-btn">Add</button>
                            </div>
                            <div class="list-wrapper">
                                <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Create invoice </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked> Prepare for
                                                presentation </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Plan weekend outing
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Pick up kids from school
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Visitors by Countries</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-us"></i>
                                                </td>
                                                <td>USA</td>
                                                <td class="text-right"> 1500</td>
                                                <td class="text-right font-weight-medium"> 56.35%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-de"></i>
                                                </td>
                                                <td>Germany</td>
                                                <td class="text-right"> 800</td>
                                                <td class="text-right font-weight-medium"> 33.25%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-au"></i>
                                                </td>
                                                <td>Australia</td>
                                                <td class="text-right"> 760</td>
                                                <td class="text-right font-weight-medium"> 15.45%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-gb"></i>
                                                </td>
                                                <td>United Kingdom</td>
                                                <td class="text-right"> 450</td>
                                                <td class="text-right font-weight-medium"> 25.00%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-ro"></i>
                                                </td>
                                                <td>Romania</td>
                                                <td class="text-right"> 620</td>
                                                <td class="text-right font-weight-medium"> 10.25%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-br"></i>
                                                </td>
                                                <td>Brasil</td>
                                                <td class="text-right"> 230</td>
                                                <td class="text-right font-weight-medium"> 75.00%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div id="audience-map" class="vector-map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                        href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
