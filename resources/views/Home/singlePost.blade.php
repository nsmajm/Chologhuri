@extends('Layout.HomeLayout')
@section('post-body')

       <div class="row">
           <div class="col-2" style=" padding-right: 0px!important;">
              <div class="card">
                  <div class="card-body">
                      Left Sidebar
                  </div>
              </div>
           </div>
          <div class="col-8" style="padding-left: 6px !important; padding-right: 4px !important;">
           <div class="card">
               <div class="card-body">
                   <div class="post-title">
                       <div class="card-title text-center">
                           <h2>{{$singlePost->postTitle}}</h2>
                           <p>{{$singlePost->created_at}}</p>
                       </div>
                   </div>
                   <div class="header-img ">
                       <img style="margin-left: 7rem!important;"  class="img-responsive ml-lg-5" src="{{asset('orginal/')}}/{{$singlePost->postThumbnail}}" alt="">
                   </div>
                   <div class="post-body mt-5">
                       <div   style="padding: 20px">
                           {!! $singlePost->postBody !!}
                       </div>
                   </div>
                   <div class="dropdown-divider"></div>
                   <div class="author">
                       <div class="author-info d-flex align-items-center sm-margin">
                           <img src="{{asset('profile/')}}/{{\App\Model\UserInfo::where('user_id',$singlePost->user_id)->first()->profileImage}}"
                                width="69px" height="69px" style="border-radius: 69px" alt="author">
                           <div class="author-name">
                               <h5><a href="#">{{\App\User::where('id',$singlePost->user_id)->first()->name}}</a></h5>
                               <span>{{$singlePost->created_at->diffForHumans()}}</span>
                           </div>
                       </div>
                   </div>
                   <div class="dropdown-divider mb-4"></div>
                 <div class="commentSection">


               <?php
                     $comment = \App\Http\Controllers\CommentController::show($singlePost->id);
                     ?>

                    @if (count($comment) == 0)

                     <h2>No Comment Yet</h2>
                        @else
                       <h3 class="blog-title">Comments<span>
       ({{\App\Http\Controllers\CommentController::countComments($singlePost->id)}})
                         </span></h3>
                             @foreach ($comment as $com)

                                 <div class="comment-main">
                                     <ol class="comments">
                                         <li class="comment even thread-even depth-1" id="comment-1">
                                             <div id="div-comment-1" class="comment-wrap">
                                                 <div class="comment-theme">
                                                     <div class="comment-image">
                                                         <img src="http://localhost:8000/profile/3-6665.jpg" style="border-radius: 50%;width: 100px;height: 100px;" alt="">
                                                     </div>
                                                 </div>
                                                 <div class="comment-main-area">
                                                     <div class="comment-wrapper">
                                                         <div class="sewl-comments-meta">
                                                             <h4 class="comment_user_name">{{\App\Http\Controllers\UserController::getUserName($com->user_id)}}</h4>
                                                             <span>{{$com->created_at->diffForHumans()}}</span>
                                                         </div>
                                                         <div class="comment-area">
                                                             <p>{{$com->commentBody}}</p>
                                                             <div class="comments-reply">
                                                                 <a rel="nofollow" class="comment-reply-link" href="#0" onclick="return addComment.moveForm( &quot;comment-1&quot;, &quot;1&quot;, &quot;respond&quot;, &quot;1&quot; )" aria-label="Reply to Mr WordPress"><span class="comment-reply-link"><i class="fa fa-reply"></i> Reply</span></a>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </li>
                                     </ol>
                                 </div>
                             @endforeach

                    @endif
                 </div>
               </div>

                       @if (Auth::id()==null)

                           please <a href="{{route('login')}}">Sign In </a> To comment
                       @else
                           <div class="form-group mr-4 ml-4">
                               <form action="{{route('comment.store')}}" method="POST">
                                   @csrf
                                   <input type="hidden" value="{{$singlePost->id}}" name="commentId" id="commentId">
                                   <textarea name="commentbody" class="form-control" id="commentbody"
                                             cols="" rows="5" style="resize: none;"></textarea>
                                   {{--<textarea class="form-control" name="commentbody" id="commentbody"> </textarea>--}}
                                   <div id="errorHelper" class=invalid-feedback>Please Write Something To Comment</div>
                                   <button id="commentSubmit" class="btn btn-success  mt-2 " type="submit">Submit</button>
                               </form>
                           </div>

                       @endif
           </div>
          </div>
          <div class="col-2" style="padding-left: 0px !important;">
                <div class="card">
                    <div class="card-body" >
                        {{\App\Http\Controllers\CategoryController::getCategoryName($singlePost->category_id)}}
                    </div>
                </div>
          </div>
       </div>
    @endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#commentSubmit').click(function (e) {
                e.preventDefault();
                var commentId = $('#commentId').val();
                var commentbody = $('#commentbody').val();
                $('#errorHelper').hide();
                if(commentbody.length==0){
                    $('#errorHelper').show();
                }
                else{
                    $.ajax({
                        type: 'POST',
                        url: "{!! route('comment.store') !!}",
                        cache: false,
                        data: {_token: "{{csrf_token()}}",'id':commentId,'postbody':commentbody},
                        success: function (data) {
                            toastr.success("Comment Done");
                            $('.commentSection').load(location.href +' .commentSection');
                            return document.getElementById('commentbody').value = " ";
                        }
                    });
                }


            });
        });
    </script>
    @endsection