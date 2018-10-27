@extends('Layout.AdminLayout')
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



    <div style="padding:0px 30px 0px 30px;margin-top: -70px;">

        <div class="card col-12">
            <div class="card-body" >
                <div class="category userdata">
                    @if(count($posts)==null)
                        No Categories Added !Please Add a Category First
                    @else
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th width="10%" scope="col">Category Id</th>
                                <th width="40%" scope="col">Category Name</th>
                                <th width="20%" scope="col">Status</th>
                                <th width="10%" scope="col">Added By</th>
                                <th width="20%" scope="col">Action</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $category)
                                <tr>

                                    <td>{{$category->id}}</td>
                                    <td>{{$category->postTitle}}</td>
                                    @if ($category->status=='1')
                                        <td>Active</td>
                                    @else
                                        <td class="inactive">In Active</td>
                                    @endif
                                    {{--<td>{{--}}
                            {{--\App\User::where('users.id','=',$posts->id)->first()->name--}}
                            {{--}}</td>--}}

                                    <td width="8%">
                                        <a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a>
                                        <button type="button" id="viewid" class="btn btn-danger viewuser ml-4" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">
                                            <i class="fa fa-trash"></i>
                                            <input type="hidden" id="itemid" value="{{$category->id}}">

                                        </button>

                                        <!--Delete Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Categories</h5>

                                                        <button type="button" class="close btn btn-default" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4 class="text-center" style="color: #dc3545;">Are You Sure!</h4>
                                                        <input type="hidden" id="id">

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button id="delete" type="button" class="btn btn-danger ml-auto" data-dismiss="modal">delete</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        $(document).ready(function(){
            $( '.viewuser').each(function() {
                $(document).on('click','.viewuser',function(event){
                    var id = $(this).find('#itemid').val();
                    $('#id').val(id);
                })
            });
            $('#delete').click(function(event){
                var id =$('#id').val();
                $.post('{!! route('admin.category.deleteCategory') !!}',
                    {'id':id,'_token':$('input[name=_token]').val()},function(data){
                        $('.userdata').load(location.href +' .userdata');
                        toastr.error("Category Moved To Archived");
                    });
            });
        });
        @if(Session::has('success'))
        toastr.success("Category Added");
        @endif
        @if ($errors->any())

        @foreach ($errors->all() as $error)
        toastr.error("{!! $error !!}.Please Restore It from Archived Menu");
        @endforeach

        @endif

    </script>
@endsection