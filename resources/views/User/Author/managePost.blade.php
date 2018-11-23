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
    <div style="padding:0px 30px 0px 30px;margin-top: -70px;">
        <div class="pull-right mb-3" style="padding:30px" >
            <!-- Large modal -->
            @if(\Illuminate\Support\Facades\Session::has('successPost'))
                <div class="alert alert-success">Your Post has been posted..waiting for admin approval</div>
                @endif

        </div>
        <div class="card col-12">
            <div class="card-body" >
                <div class="category userdata">
                    @if(count($posts)==null)
                       <div class="alert alert-danger"> No Post Yet</div>
                    @else
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th width="5%" scope="col">Id</th>
                                <th width="40%" scope="col">Post Title</th>
                                <th width="15%" scope="col">Image</th>
                                <th width="10%" scope="col">Status</th>
                                <th width="15%" scope="col">Create Date</th>
                                <th width="20%" scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>

                                    <td>{{$post->id}}</td>
                                    <td>{{$post->postTitle}}</td>
                                    <td><img class="img-thumbnail" src="{{asset('thumbnail/')}}/{{$post->postThumbnail}}" alt=""></td>
                                    @if ($post->status=='1')
                                        <td><button type="button" class="btn btn-success" disabled><i class="fa fa-check"></i></button></td>
                                    @else
                                        <td><button type="button" class="btn btn-danger" disabled><i class="fa fa-remove"></i></button></td>
                                    @endif
                                    <td>{{$post->created_at}}</td>

                                    <td width="20%">
                                        <a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a>
                                        <button type="button" id="viewid" class="btn btn-danger viewuser ml-4" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">
                                            <i class="fa fa-trash"></i>
                                            <input type="hidden" id="itemid" value="{{$post->id}}">

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
                $.post('{!! route('author.deletePost') !!}',
                    {'id':id,'_token':$('input[name=_token]').val()},function(data){
                        $('.userdata').load(location.href +' .userdata');
                        toastr.error("Post Deleted");
                        console.log('post Moved To Trash')
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