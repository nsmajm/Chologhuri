@extends('Layout.AdminLayout')
@section('title')
    Users
    @endsection
@section('css')
    <style>
        table.dataTable thead th, table.dataTable thead td {

            border:1px solid rgba(0,0,0,.05) !important;
        }
        table{
             border:1px solid rgba(0,0,0,.05) !important;
         }
        tr{
            border: rgba(0,0,0,.05) !important;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0,0,0,.05);

        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>

@endsection

@section('mainContent')
    <div class="empty-section"></div>

    <div class="card col-11" style="margin-left: 20px">
        <div class="card-body">
            <div class="table table-responsive">
                <table id="Users" class="table table-striped table-bordered" style="width:100%" >
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        {{--<th>Total Post</th>--}}
                        {{--<th>Action</th>--}}
                    </tr>
                    </thead>


                </table>
            </div>
        </div>
    </div>
    @endsection


@section('js')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>


<script>
            $(document).ready(function () {
            $('#Users').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax":{
                    "url": "{!! route('admin.user.showUser') !!}",
                    "dataType": "json",
                    "type": "POST",
                    "data":{ _token: "{{csrf_token()}}"}
                },
                "columns": [
                    { "data": "name",name:"name" },
                    { "data": "email",name:"email" },
                    { "data": "role",name:"role" },
                    { "data": function(data){
                            if( data.status == "1"){
                                return "Active"
                            }else if (data.status == "0") {
                                return "inactive";

                            }
                            else{
                                return 'blocked'
                            }

                        },
                        "orderable": true, "searchable":true,
                    },

                ]
            });
        });
    </script>
    @endsection