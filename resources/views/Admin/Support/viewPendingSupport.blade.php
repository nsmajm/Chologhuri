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
                                    <th >Name</th>
                                    <th >Email</th>
                                    <th>Message</th>
                                    <th >Solved</th>
                                    <th >Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($supports as $support)
                                    <tr>
                                        <td>{{$support->name}}</td>
                                        <td>{{$support->email}}</td>
                                        <td>{{$support->message}}</td>
                                        <td>
                                            @if ($support->isSolved=='1')
                                                <div class="badge badge-success">Active</div>
                                            @else
                                                <div class="badge badge-warning">Pending</div>
                                            @endif
                                        </td>
                                        <td>
                                            <button data-toggle="modal" data-target="editUser" type="button" onclick="editSupport(this)"  data-panel-id="{{$support->id}}"
                                                    class="btn btn-sm btn-primary btn-icon btnEdit" ><i class="fa fa-edit"></i>
                                            </button>
                                            <button data-toggle="modal" data-target="viewPost" type="button" onclick="viewPost(this)"  data-panel-id="{{$support->id}}"
                                                    class="btn btn-sm btn-primary btn-icon btnEdit" ><i class="fa fa-eye"></i>
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
        function editSupport(x) {
            var id=$(x).data('panel-id');
            $.ajax({
                type: 'POST',
                url: "{!! route('admin.showForm') !!}",
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