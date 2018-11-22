<form class="forms-sample" method="post" action="{{route('admin.comment.update')}}">
    @csrf
    <div class="form-group row">
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Status</label>
        <div class="col-sm-9">
            <input type="hidden" value="{{$comment->id}}" name="commentId">
            <select class="form-control" name="status">
                <option value="">Select Status</option>
                @foreach(STATUS as $key=>$value)
                    <option value="{{$key}}" {{ $comment->status == $key ? 'selected' : '' }}>{{$value}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary pad-change" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary pad-change ">Save changes</button>
    </div>
</form>
