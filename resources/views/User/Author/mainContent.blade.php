@extends('Layout.UserLayout')
@section('title')
    Users
@endsection
@section('css')
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #efefef !important;
        }
    </style>

@endsection

@section('mainContent')
    <div class="empty-section" ></div>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header" style="background: none !important;border: none !important;">
                            <h6 >Total Posts</h6>
                        </div>
                        <div class="card-body">

                                <i class="fa fa-bar-chart pull-left dashboard-icon"></i>

                                <h4 class="pull-right bg-info text-dashboard">{{\App\Model\Post::where('user_id',Auth::id())->count()}}</h4>


                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header" style="background: none !important;border: none !important;">
                            <h6>Total Comments</h6>
                        </div>
                        <div class="card-body">
                            <i class="fa fa-commenting-o pull-left dashboard-icon"></i>

                            <h4 class="pull-right bg-info text-dashboard">{{\App\Model\Post::where('user_id',Auth::id())->count()}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header" style="background: none !important;border: none !important;">
                            <h6>Total Events</h6>
                        </div>
                        <div class="card-body">
                            <i class="fa fa-calendar pull-left dashboard-icon"></i>

                            <h4 class="pull-right bg-info text-dashboard">{{\App\Model\Post::where('user_id',Auth::id())->count()}}</h4>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Latest Post</div>
                    <div class="card-body">
                        <h6><a href="#">{{$latestPost->postTitle}}</a></h6>
                        <p>{!! str_limit($latestPost->postBody,100) !!}</p>
                        <div class="card-footer">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">My Comments</div>
                    <div class="card-body">
                        <h6><a href="#">{{$latestPost->postTitle}}</a></h6>
                        <p>{!! str_limit($latestPost->postBody,100) !!}</p>
                        <div class="card-footer">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">My Events</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Event short Description</th>
                                <th>event User</th>
                                <th>event start Date</th>
                                <th>event Start Time</th>
                                <th>event Budget</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td>{{$event->eventName}}</td>
                                <td>{!!  str_limit($event->eventDescription,50)!!}</td>
                                <td>Event user</td>
                                <td>{{$event->eventDate}}</td>
                                <td>{{$event->eventTimeStart}}</td>
                                <td>{{$event->additionalBudget}}</td>

                                <td>
                                    <a href="#" class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')

@endsection