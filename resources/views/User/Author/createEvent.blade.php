@extends('Layout.UserLayout')
@section('title')
    Users
@endsection
@section('css')
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #efefef !important;
        }
        .popover{
            display: none !important;
        }
        #postBody{
            resize: none !important;
            height: 300px;
        }
        .note-icon-picture,.note-icon-video{
            display: none !important;
        }
        #loader{
            visibility:hidden;
        }
    </style>
    <!-- include libraries(jQuery, bootstrap) -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>

@endsection

@section('mainContent')
    <div class="empty-section" ></div>
    <form method="post" action="{{route('author.host.event')}}" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row">

                <div class="col-9">

                    <div class="form-group">

                        <input type="text" class="form-control" id="eventTitle" name="eventTitle"  placeholder="Enter Event Title">
                    </div>
                    <div class="form-group">
                        <textarea id="eventBody" name="eventBody"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="location">Event Location</label>
                                <input class="form-control" type="text" placeholder="Enter Event Location" name="location">
                            </div>
                            <div class="form-group">
                                <label for="location">Event Date</label>
                                <input class="form-control" type="date" placeholder="Enter Event Date" name="date">
                            </div>
                            <div class="form-group">
                                <label for="location">Event Start Time</label>
                                <input class="form-control" type="time" placeholder="Enter start time" name="time">
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="location">Event Duration</label>
                                    <input class="form-control" type="number" placeholder="Enter event Duration" name="duration">
                                </div>
                                <div class="form-group">
                                    <label for="location">Event Budget</label>
                                    <input class="form-control" type="text" placeholder="Enter event Budget" name="budget">
                                </div>

                                <div class="form-group">
                                    <label for="location">Max People</label>
                                    <input class="form-control" type="number" placeholder="Enter max people in the event" name="addinfo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">


                    <button class="btn btn-info mb-5" style="padding: 10px 50px 10px 50px; " type="submit">Publish</button>
                    <div class="card">
                        <div class="card-header">Event Thumbnail Image</div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="file" name="thumbnail" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        </div>
    </form>

@endsection


@section('js')
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script>
        $('#eventBody').summernote({
            tabsize: 2,
            height: 200,
            disableResizeEditor: true
        });
    </script>

@endsection