{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

@extends('layouts.app')

@section('content')

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title mt-2">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-home icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Application Dashboard
                                    <!-- <div class="page-title-subheading">Click on the speaker to the right.
                                    </div> -->
                                    <button type="button" class="font-icon-wrapper  btn-sm show-toastr-example">
                                        <i class="pe-7s-volume2 icon-gradient bg-happy-itmeo">Click Me</i>
                                    </button>
                                </div>
                            </div>
                            <div class="page-title-actions">


                                <div class="dropdown">
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
                            </div>    </div>
                    </div>


                    <div class="mb-3 card">
                        <div class="card-header-tab card-header-tab-animation card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                {{--                            <i class="header-icon lnr-gift icon-gradient bg-plum-plate"> </i>--}}
                                Merger Application Forms</div>
                            <ul class="nav">
                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-0" class="active nav-link">Merger Review Regulation Form</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-1" class="nav-link">Negative Clearance Form</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-2" class="nav-link">Simplified Merger Review Regulation Form</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-eg8-0" role="tabpanel"><p>INFORMATION REQUIRED – Merger Review Regulations. This form provides a framework for supplying to the Federal Competition and Consumer Protection Commission, the information required under part XII of the Federal Competition and Consumer Protection Act.
                                        <br> This form should be completed jointly by parties to the proposed transaction. The requested information may be provided on the form or in appendices identified by the corresponding section number used in the form and should be bound together. </p>
                                    <div class="d-block text-center">
                                        <a href="{{ URL::asset('assets') }}/docs/Merger Review Regulation Form.docx" download="Merger Review Regulations" target="_blank" class="mb-2 mr-2 btn-transition btn btn-outline-success">Download Form</a>
                                    </div></div>
                                <div class="tab-pane" id="tab-eg8-1" role="tabpanel"><p>INFORMATION REQUIRED – Part III, Regulation 10 of the Merger Review Regulations. This form provides a framework for supplying to the Federal Competition and Consumer Protection Commission, the information required under part XII, Section 92 of the Federal Competition and Consumer Protection Act.
                                        This form may be completed jointly by parties to the proposed transaction. The requested information may be provided on the form or in appendices identified by the corresponding section number used in the form and should be bound together. </p>
                                    <div class="d-block text-center">
                                        <a href="{{ URL::asset('assets') }}/docs/NEGATIVE CLEARANCE FORM.docx" download="NEGATIVE CLEARANCE FORM" target="_blank" class="mb-2 mr-2 btn-transition btn btn-outline-success">Download Form</a>
                                    </div></div>
                                <div class="tab-pane" id="tab-eg8-2" role="tabpanel"><p>INFORMATION REQUIRED – Merger Review Regulations.<br> This form provides a framework for supplying to the Federal Competition and Consumer Protection Commission, the information required under part XII of the Federal Competition and Consumer Protection Act. This form should be completed jointly by parties to the proposed transaction. The requested information may be provided on the form or in appendices identified by the corresponding section number used in the form and should be bound together. </p>
                                    <div class="d-block text-center">
                                        <a href="{{ URL::asset('assets') }}/docs/SIMPLIFIED MERGER REVIEW REGULATION FORM.docx" download="SIMPLIFIED MERGER REVIEW REGULATION FORM" target="_blank" class="mb-2 mr-2 btn-transition btn btn-outline-success">Download Form</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>

            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
@endsection

