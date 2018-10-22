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

    </style>
    <!-- include libraries(jQuery, bootstrap) -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>

@endsection

@section('mainContent')
    <div class="empty-section" ></div>
    <form>
        <div class="container-fluid">
            <div class="row">

                <div class="col-10">

                        <div class="form-group">

                            <input type="text" class="form-control" id="postTitle"  placeholder="Enter Post Title">
                          </div>
                        <div class="form-group">
                            <textarea id="summernote" name="editordata"></textarea>
                        </div>
                </div>
                <div class="col-2">


                        <button class="btn btn-info mb-5" style="padding: 10px 50px 10px 50px; " type="submit">Publish</button>
                        <div class="card">
                            <div class="card-header">Categories</div>
                            <div class="card-body">
                                <select class="form-control">
                                    <option>Uncategorized</option>
                                    <option>Uncategorized</option>
                                    <option>Uncategorized</option>
                                    <option>Uncategorized</option>
                                </select>
                            </div>
                        </div>
                    <div class="card mt-4">
                        <div class="card-header">Sub Categories</div>
                        <div class="card-body">
                            <select class="form-control">
                                <option>Uncategorized</option>
                                <option>Uncategorized</option>
                                <option>Uncategorized</option>
                                <option>Uncategorized</option>
                            </select>
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
        $('#summernote').summernote({
            tabsize: 2,
            height: 300
        });
    </script>

@endsection