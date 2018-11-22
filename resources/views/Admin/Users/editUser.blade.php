<form class="forms-sample" method="post" action="{{route('admin.userUpdate')}}">
    @csrf
    <div class="form-group row">
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
            <input type="hidden" value="{{$user->id}}" name="userId">
            <select class="form-control" name="role">
                <option value="">Select Status</option>
                @foreach(role as $key=>$value)
                    <option value="{{$key}}" {{ $user->role == $key ? 'selected' : '' }}>{{$value}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">User Status</label>
        <div class="col-sm-9">
            <select class="form-control" name="status">
                <option value="">Select Status</option>
                @foreach(STATUS as $key=>$value)
                    <option value="{{$key}}" {{ $user->status == $key ? 'selected' : '' }}>{{$value}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary pad-change" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary pad-change ">Save changes</button>
    </div>
</form>
