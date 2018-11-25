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
       <div class="pull-right mb-3" style="padding:30px" >
           <!-- Large modal -->
           <button type="button" class="btn btn-primary" data-toggle="modal"  style="margin-bottom: -30px;"
                   data-target=".bd-example-modal-lg">Add Category</button>

           <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">

                   <div class="modal-content">
                       <div class="modal-header bg-info">
                       <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Add Categories</h5>
                       </div>

                      <div class="col-12" style="margin-bottom: 40px;margin-top: 40px;">
                        <div class="add-category">
                            <form action="{{route('admin.subcategory.post')}}" method="post">
                                @csrf
                                <div class="form-group row" style="padding: 30px;">
                                    <label for="subCategoryName" class="col-sm-3 col-form-label">Category Name</label>
                                    <div class="col-sm-9">
                                        <input type="text"  class="form-control" name="subCategoryName" id="subCategoryName">
                                    </div>
                                </div>
                                <div class="row form-group" style="padding: 30px;">
                                    <label for="categoryName" class="col-sm-3 col-form-label">Category Name</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="sub">
                                            @foreach($sub as $cat)
                                                <option value="{{$cat->id}}">{{$cat->categoryName}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Category</button>
                                </div>
                            </form>

                        </div>

                      </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="card col-12">
           <div class="card-body" >
               <div class="category userdata">
                  @if(count($Subcategories)==null)
                      No Sub Categories Added !Please Add a Category First
                      @else
                   <table class="table table-hover table-bordered">
                       <thead>
                       <tr>
                           <th width="20%" scope="col">Sub Category Id</th>

                           <th width="40%" scope="col">Sub Category Name</th>
                           <th width="20%" scope="col">Action</th>
                           <th></th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($Subcategories as $category)
                       <tr>

                           <td>{{$category->id}}</td>
                           <td>
                               {{\App\Model\Category::where('id',$category->category_id)->first()->categoryName}}
                           </td>
                           <td>{{$category->subCategoryName}}</td>


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
                $.post('{!! route('admin.subcategory.deleteCategory') !!}',
                    {'id':id,'_token':$('input[name=_token]').val()},function(data){
                    $('.userdata').load(location.href +' .userdata');
                        toastr.error("Sub Category Moved To Archived");
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