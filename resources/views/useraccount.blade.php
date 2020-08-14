@extends('layouts.app')

@section('content')

        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title mt-2">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-cloud icon-gradient bg-mean-fruit">
                                </i>
                            </div>
                            <div>User Account Info
                                <!-- <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                </div> -->
                            </div>
                        </div>
                        <div class="page-title-actions">
                            <div class="dropdown">
                                <button type="button" data-toggle="tooltip" title="Make sure all documents are named appropriately before uploading" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-info"></i>
                                </button>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                                        class="p-0 mr-2 btn btn-link">
                                            <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                                <span class="icon-wrapper-bg bg-danger"></span>
                                                <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
                                                <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                            </span>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                     class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header mb-0">
                                        <div class="dropdown-menu-header-inner bg-deep-blue">
                                            <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                            <div class="menu-header-content text-dark">
                                                <h5 class="menu-header-title">Notifications</h5>
                                                <h6 class="menu-header-subtitle">You have <b>2</b> unread messages</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                                <span>Messages</span>
                                            </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                                <span>Events</span>
                                            </a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                                <span>System Errors</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="p-3">
                                                        <div class="notifications-box">
                                                            <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Account created succesfully</h4>
                                                                            <span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <p>Uploaded Documents succesfully<span class="text-success"></span></p>
                                                                            <span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Build the production release
                                                                                <span class="badge badge-danger ml-2">NEW</span>
                                                                            </h4>
                                                                            <span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                    <div>
                                                                        <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Fixed Document error</h4>
                                                                            <span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Application Approved
                                                                                <span class="badge badge-danger ml-2">NEW</span>
                                                                            </h4>
                                                                            <span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="p-3">
                                                        <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                                                                            </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">All Hands Meeting</h4>
                                                                        <p>Lorem ipsum dolor sic amet, today at
                                                                            <a href="javascript:void(0);">12:00 PM</a>
                                                                        </p>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                                                                            </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                        <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                                                                            </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Build the production release</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                                                            labore et dolore magna elit enim at minim veniam quis nostrud
                                                                        </p>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                                                                            </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title text-success">Something not important</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                                                                            </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">All Hands Meeting</h4>
                                                                        <p>Lorem ipsum dolor sic amet, today at
                                                                            <a href="javascript:void(0);">12:00 PM</a>
                                                                        </p>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                                                                            </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                        <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                                                                            </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Build the production release</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                                                            labore et dolore magna elit enim at minim veniam quis nostrud
                                                                        </p>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                                                                            </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title text-success">Something not important</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="no-results pt-3 pb-0">
                                                        <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                            <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                            <span class="swal2-success-line-tip"></span>
                                                            <span class="swal2-success-line-long"></span>
                                                            <div class="swal2-success-ring"></div>
                                                            <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                            <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                        </div>
                                                        <div class="results-subtitle">All caught up!</div>
                                                        <div class="results-title">There are no system errors!</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   </div>
                </div>



                <div class="col-md-12 col-lg-7" style="margin: auto;">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div id="smartwizard2" class="forms-wizard-alt">
                                <ul class="forms-wizard">
                                    <li>
                                        <a href="#step-12">
                                            <em>1</em><span>User Information</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-22">
                                            <em>2</em><span>Company Information</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-32">
                                            <em>3</em><span>Finish Wizard</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="form-wizard-content">
                                    <div id="step-12">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail55">Email</label>
                                                    <input name="email" id="exampleEmail55" placeholder="example@email.com"  type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="examplePassword22">Password</label>
                                                    <input name="password" id="examplePassword22" placeholder="********" type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleNumber">Phone Number</label>
                                            <input name="number" id="exampleNumber" placeholder="080*********" type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleCity">City</label>
                                                    <input name="city" id="exampleCity" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="exampleState">State</label>
                                                    <input name="state" id="exampleState" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="position-relative form-group">
                                                    <label for="exampleZip">Zip</label>
                                                    <input name="zip" id="exampleZip" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-22">
                                        <div id="accordion" class="accordion-wrapper mb-3">
                                            <div class="card">
                                                <div data-parent="#accordion" id="collapseTwo"
                                                     class="collapse show">
                                                    <div class="card-body">

                                                        <div class="position-relative form-group">
                                                            <label for="exampleEmail4">1st Merger Company Email</label>
                                                            <input name="email" id="exampleEmail4" placeholder="example@email.com" type="email" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="exampleEmail4">2nd Merger Company Email</label>
                                                            <input name="email" id="exampleEmail4" placeholder="example@email.com" type="email" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="exampleAddress">1st Company Address</label>
                                                            <input name="address" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="exampleAddress2">2nd Company Address </label>
                                                            <input name="address2" id="exampleAddress2" placeholder="" type="text" class="form-control">
                                                        </div>

                                                        <div class="position-relative form-group">
                                                            <label for="exampleUrl">1st Company Url</label>
                                                            <input name="url" id="exampleUrl" placeholder="yoururl.com" type="url" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="exampleUrl">2nd Company Url</label>
                                                            <input name="url" id="exampleUrl" placeholder="yoururl.com" type="url" class="form-control">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-32">
                                        <div class="no-results">
                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                <span class="swal2-success-line-tip"></span>
                                                <span class="swal2-success-line-long"></span>
                                                <div class="swal2-success-ring"></div>
                                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                            </div>
                                            <div class="results-subtitle mt-4">Finished!</div>
                                            <div class="results-title">You arrived at the last form wizard step!</div>
                                            <div class="mt-3 mb-3"></div>
                                            <div class="text-center">
                                                <button class="btn-shadow btn-wide btn btn-success btn-lg">Update Info</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="clearfix" style="margin: auto;">
                                <button type="button" id="next-btn2" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                                <button type="button" id="prev-btn2" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <!-- <div class="app-wrapper-footer">
                <div class="app-footer">
                    <div class="app-footer__inner">
                        <div class="app-footer-left">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        Footer Link 1
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        Footer Link 2
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="app-footer-right">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        Footer Link 3
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <div class="badge badge-success mr-1 ml-0">
                                            <small>NEW</small>
                                        </div>
                                        Footer Link 4
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>    </div> -->
@endsection
