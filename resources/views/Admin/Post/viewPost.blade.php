<div class="card">
    <div class="card-body">
        <img class="img-responsive" style="width: 50%;height: 50%;position: relative;left: 20%;border-radius: 0!important;" src="{{asset('thumbnail/')}}/{{$post->postThumbnail}}">
        <h3 class="text-center mt-5">{{$post->postTitle}}</h3>
        <div class="row">
            <div class="container">
                <div class="col-md-10">
                    <p style="text-align: justify">
                        {!! $post->postBody !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>