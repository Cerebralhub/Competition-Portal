@extends('layouts.app')

@section('content')
    <div class="app-main">
        <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper" style="margin: auto;">

                            <div id="adobe-dc-view" style="height: 560px; width: 1000px; margin: auto;"></div>
                            <script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
                            <script type="text/javascript">
                                var pdfFile = @json(URL::asset('assets/docs/Merger Review Regulation Form.pdf'));
                                // alert('Yooo' +  hello + ' lol');
                                document.addEventListener("adobe_dc_view_sdk.ready", function(){
                                    var adobeDCView = new AdobeDC.View({clientId: "c3c67a26df6540cc89694b4b4942d562", divId: "adobe-dc-view"});
                                    adobeDCView.previewFile({
                                            content:{ location:
                                                    { url: pdfFile}},
                                            metaData:{fileName: "Merger Review Regulation Form.pdf"}
                                        },
                                        {
                                            embedMode: "SIZED_CONTAINER"
                                        });
                                });
                            </script>


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
{{-- <script type="text/javascript">--}}
{{--    console.log({{ $hello }} );--}}

{{-- </script>--}}
@endsection
