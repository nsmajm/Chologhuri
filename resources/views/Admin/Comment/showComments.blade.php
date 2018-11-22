@extends('layouts.AdminLayout')
@section('content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Users</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="userTable" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th width="25%">Post Title</th>
                                    <th width="10%">Comments</th>
                                    <th width="10%">Commented By</th>

                                    <th width="5%">status</th>

                                    <th width="10%">Created Comment</th>
                                    <th width="20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{\App\Http\Controllers\Admin\PostController::getPostTitle($comment->post_id)}}</td>
                                        <td>{{$comment->commentBody}}</td>
                                        <td>{{\App\Http\Controllers\UserController::getUserName($comment->user_id)}}</td>
                                        <td>
                                            @if ($comment->status=='1')
                                                <div class="badge badge-success">Active</div>
                                            @else ($post->status=='0')

                                                <div class="badge badge-danger">Blocked</div>
                                            @endif
                                        </td>
                                        {{--<td>{{\App\Http\Controllers\CategoryController::getCategoryName($comment->category_id)}}</td>--}}
                                        <td>{{$comment->created_at}}</td>


                                        <td>
                                            <button data-toggle="modal" data-target="editUser" type="button" onclick="editPost(this)"  data-panel-id="{{$comment->id}}"
                                                    class="btn btn-sm btn-primary btn-icon btnEdit" ><i class="fa fa-edit"></i>
                                            </button>

                                            <button type="button" class="btn btn-sm btn-primary  btn-icon" onclick="deletePost(this)" data-panel-id="{{$comment->id}}">

                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <button  type="button" onclick="window.open('{{route('singlePost.show',[\App\Http\Controllers\Admin\PostController::getPostSlug($comment->post_id)])}}')" class="btn btn-sm btn-primary btn-icon btnEdit" ><i class="fa fa-eye"></i>
                                            </button>
                                            <!-- View Model -->
                                            <div class="modal fade" id="viewPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" id="viewModelBody">

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary pad-change" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!--Edit Modal -->
                                            <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Post</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" id="editUserBody">

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
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

    </div>
@endsection

@section('js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script>
        $(document).ready( function () {
            (function($) {
                'use strict';
                $(function() {
                    $('#userTable').DataTable({
                        "aLengthMenu": [
                            [5, 10, 15, -1],
                            [5, 10, 15, "All"]
                        ],
                        "iDisplayLength": 10,

                        "language": {
                            search: ""
                        }
                    });
                    $('#order-listing').each(function() {
                        var datatable = $(this);
                        // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                        var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
                        search_input.attr('placeholder', 'Search');
                        search_input.removeClass('form-control-sm');
                        // LENGTH - Inline-Form control
                        var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
                        length_sel.removeClass('form-control-sm');
                    });
                });
            })(jQuery);
            $( '.btnEdit').each(function() {
                $(document).on('click','.btnEdit',function(event){
                    var id = $(this).find('#itemid').val();
                    console.log(id);
                    $('#id').val(id);
                })
            });
        } );
        function editPost(x) {
            var id=$(x).data('panel-id');
            $.ajax({
                type: 'POST',
                url: "{!! route('admin.editCommentForm') !!}",
                cache: false,
                data: {_token: "{{csrf_token()}}",'id': id},
                success: function (data) {
//                    console.log(data);
                    $('#editUserBody').html(data);
                    $('#editUser').modal();
                }
            });
        }

        function deletePost(x) {
            var id=$(x).data('panel-id');
            $.confirm({
                title: 'Are You Sure!',
                content: 'Delete The Post',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('admin.deleteComments') !!}",
                            cache: false,
                            data: {_token: "{{csrf_token()}}",'id': id},
                            success: function (data) {
                                $.alert('Post Deleted Successfully');
                                location.reload();
                            }
                        })

                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    }

                }
            });
        }
    </script>



@endsection