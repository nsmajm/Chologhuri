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
    <form method="post" action="{{route('author.category.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row">

                <div class="col-9">

                        <div class="form-group">

                            <input type="text" class="form-control" id="postTitle" name="postTitle"  placeholder="Enter Post Title">
                          </div>
                        <div class="form-group">
                            <textarea id="postBody" name="postBody"></textarea>
                        </div>
                </div>
                <div class="col-3">


                        <button class="btn btn-info mb-5" style="padding: 10px 50px 10px 50px; " type="submit">Publish</button>
                        <div class="card">
                            <div class="card-header">Categories</div>
                            <div class="card-body">
                                <select name="category" class="form-control" id="getCategories">
                                    <option value="">--Select category--</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->categoryName }}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                    <div class="card mt-4">
                        <div class="card-header">Sub Categories</div>
                        <div class="card-body">
                            <select name="subCategory" class="form-control">
                                <option>--Sub Categories--</option>

                            </select>
                        </div>
                        <div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>

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
        $('#postBody').summernote({
            tabsize: 2,
            height: 300,
            disableResizeEditor: true
        });
        $('div.note-group-select-from-files').remove();
        $(document).ready(function() {

            $('select[name="category"]').on('change', function(){
                var categoryId = $('#getCategories').val();
                console.log(categoryId);
                if(categoryId) {
                    $.ajax({
                        url: '/author/subCategory/get/'+categoryId,
                        type:"GET",
                        dataType:"json",
                        beforeSend: function(){
                            $('#loader').css("visibility", "visible");
                        },

                        success:function(data) {

                            $('select[name="subCategory"]').empty();

                            $.each(data, function(key, value){

                                $('select[name="subCategory"]').append('<option value="'+ key +'">' + value + '</option>');

                            });
                        },
                        complete: function(){
                            $('#loader').css("visibility", "hidden");
                        }
                    });
                } else {
                    $('select[name="subCategory"]').empty();
                    console.log('empty')
                }

            });

        });
    </script>

@endsection