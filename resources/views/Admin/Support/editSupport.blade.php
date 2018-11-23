<form class="forms-sample" method="post" action="{{route('admin.solvedSupport')}}">
    @csrf
    <div class="form-group row">
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Issue</label>
        <div class="col-sm-9">
            <input type="hidden" value="{{$support->id}}" name="postId">
            <textarea class="form-control" name="message" readonly
                      id="message" rows="4" data-gramm="true" data-txt_gramm_id="7c5e2ff4-294d-31ce-11f3-3ae88f5e6025" data-gramm_id="7c5e2ff4-294d-31ce-11f3-3ae88f5e6025"
                      spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 14px; font-size: 14px; transition: none 0s ease 0s; background: transparent !important;">
            {{$support->message}}
            </textarea>

        </div>
    </div>

    <div class="form-group row">
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Solution</label>
        <div class="col-sm-9">
            <input type="hidden" value="{{$support->id}}" name="postId">
            <textarea class="form-control" name="solution"
                      id="solution" rows="4" data-gramm="true" data-txt_gramm_id="7c5e2ff4-294d-31ce-11f3-3ae88f5e6025" data-gramm_id="7c5e2ff4-294d-31ce-11f3-3ae88f5e6025"
                      spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 14px; font-size: 14px; transition: none 0s ease 0s; background: transparent !important;">
            </textarea>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary pad-change" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary pad-change ">Save changes</button>
    </div>
</form>
