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
                                    <th>name</th>
                                    <th>email</th>
                                    {{--<th>email_verified_at</th>--}}
                                    <th>status</th>
                                    <th>role</th>
                                    <th>Type</th>
                                    <th>created_at</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    {{--<td>{{$user->email_verified_at}}</td>--}}
                                    <td>
                                        @if ($user->status=='1')
                                            <div class="badge badge-success">Active</div>
                                            @elseif($user->status=='2')
                                            <div class="badge badge-warning">On Hold</div>
                                        @else($user->status=='0')
                                            <div class="badge badge-warning"><span style="color: #fff;">Blocked</span></div>


                                        @endif
                                    </td>
                                    <td>{{$user->role}}</td>
                                    <td>
                                        @if ($user->socialUser=='1')
                                            FaceBook
                                        @else
                                            Local
                                        @endif
                                    </td>
                                    <td>
                                        {{\Carbon\Carbon::parse($user->careted_at)->format('Y-m-d')}}
                                    </td>
                                    <td>
                                        <button data-toggle="modal" data-target="editUser" type="button" onclick="editUser(this)"  data-panel-id="{{$user->id}}"
                                                class="btn btn-sm btn-primary btn-icon btnEdit" ><i class="fa fa-edit"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">

                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
        function editUser(x) {
            var id=$(x).data('panel-id');
            $.ajax({
                type: 'POST',
                url: "{!! route('admin.user.showForm') !!}",
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