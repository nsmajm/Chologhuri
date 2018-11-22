@extends('layouts.AdminLayout')


@section('css')
    <style>
        .border-secondary, .loader-demo-box{
            border: none !important;
        }
        .loader-demo-box {
            width: 100%;
            height: 70px !important;
        }
    </style>

@stop
@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-3 col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" id="totalUser">
                        <div class="loader-demo-box">
                            <div class="bar-loader">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" id="totalPost">
                        <div class="loader-demo-box">
                            <div class="bar-loader">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" id="totalComments">
                        <div class="loader-demo-box">
                            <div class="bar-loader">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" id="totalEvents">
                        <div class="loader-demo-box">
                            <div class="bar-loader">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#totalUser').html(" <div class=\"d-flex justify-content-between flex-wrap align-items-center\">\n" +
                "                            <div class=\"img-sm bg-primary rounded-md d-flex align-items-center justify-content-center text-white\">\n" +
                "                                <i class=\"mdi mdi-chart-line-variant icon-md\"></i>\n" +
                "                            </div>\n" +
                "                            <div class=\"text-right text-md-center text-lg-left ml-lg-4\" >\n" +
                "                                <h1 class=\"font-weight-bold mb-0\">\n" +
                "                                    {{count(App\User::all())}}\n" +
                "                                </h1>\n" +
                "                                <p class=\"mb-0\">Total User</p>\n" +
                "                            </div>\n" +
                "                        </div>");

            $('#totalPost').html("<div class=\"d-flex justify-content-between flex-wrap align-items-center\">\n" +
                "                            <div class=\"img-sm bg-danger rounded-md d-flex align-items-center justify-content-center text-white\">\n" +
                "                                <i class=\"mdi mdi-emoticon icon-md\"></i>\n" +
                "                            </div>\n" +
                "                            <div class=\"text-right text-md-center text-lg-left ml-lg-4\">\n" +
                "                                <h1 class=\"font-weight-bold mb-0\">{{count(\App\Model\Post::all())}}</h1>\n" +
                "                                <p class=\"mb-0\">Total Posts</p>\n" +
                "                            </div>\n" +
                "                        </div>");

            $('#totalComments').html("<div class=\"d-flex justify-content-between flex-wrap align-items-center\">\n" +
                "                            <div class=\"img-sm bg-warning rounded-md d-flex align-items-center justify-content-center text-white\">\n" +
                "                                <i class=\"mdi mdi-run icon-md\"></i>\n" +
                "                            </div>\n" +
                "                            <div class=\"text-right text-md-center text-lg-left ml-lg-4\">\n" +
                "                                <h1 class=\"font-weight-bold mb-0\">{{count(\App\Model\Comment::all())}}</h1>\n" +
                "                                <p class=\"mb-0\">Comments</p>\n" +
                "                            </div>\n" +
                "                        </div>");
            $('#totalEvents').html("<div class=\"d-flex justify-content-between flex-wrap align-items-center\">\n" +
                "                            <div class=\"img-sm bg-success rounded-md d-flex align-items-center justify-content-center text-white\">\n" +
                "                                <i class=\"mdi mdi-chart-donut icon-md\"></i>\n" +
                "                            </div>\n" +
                "                            <div class=\"text-right text-md-center text-lg-left ml-lg-4\">\n" +
                "                                <h1 class=\"font-weight-bold mb-0\">{{count(\App\Model\Event::all())}}</h1>\n" +
                "                                <p class=\"mb-0\">Events</p>\n" +
                "                            </div>\n" +
                "                        </div>");
        });
    </script>
    @endsection