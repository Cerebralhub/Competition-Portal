@extends('layouts.app')

@section('content')
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <p>Hello world</p>
                        <div id="adobe-dc-view"></div>


                            </div>
                          </div>
                    </div>

                </div>
                </div>
        </div>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
</div>

<!-- <script type="text/javascript" src="{{ URL::asset('assets/scripts') }}/main.js"></script> -->
<!-- <script src="https://documentcloud.adobe.com/view-sdk/main.js"></script> -->
 <script type="text/javascript">
    console.log({{ $hello }} );

 </script>
@endsection
