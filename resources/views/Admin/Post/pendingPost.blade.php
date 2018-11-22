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
                                    <th width="30%">Post Title</th>
                                    <th width="20%">Slug</th>
                                    <th width="5%">status</th>
                                    <th width="10%">category_id</th>
                                    <th width="10%">created_at</th>
                                    <th width="15%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->postTitle}}</td>
                                        <td>{{$post->slug}}</td>
                                        <td>
                                            @if ($post->status=='1')
                                                <div class="badge badge-success">Active</div>
                                                @elseif ($post->status=='0')

                                                <div class="badge badge-danger">Blocked</div>
                                                @else
                                                <div class="badge badge-warning">Pending</div>
                                            @endif
                                        </td>
                                        <td>{{\App\Http\Controllers\CategoryController::getCategoryName($post->category_id)}}</td>
                                        <td>{{$post->created_at}}</td>


                                        <td>
                                            <button data-toggle="modal" data-target="editUser" type="button" onclick="editPost(this)"  data-panel-id="{{$post->id}}"
                                                    class="btn btn-sm btn-primary btn-icon btnEdit" ><i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary  btn-icon" onclick="deleteUser()">

                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <!-- Modal -->
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
                url: "{!! route('admin.post.editPostForm') !!}",
                cache: false,
                data: {_token: "{{csrf_token()}}",'id': id},
                success: function (data) {
//                    console.log(data);
                    $('#editUserBody').html(data);
                    $('#editUser').modal();
                }
            });
        }
    </script>
@endsection