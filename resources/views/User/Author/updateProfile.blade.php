@extends('Layout.UserLayout')
@section('title')
    Profile Update
@endsection
@section('css')
    <style>


    </style>


@endsection

@section('mainContent')
    <div class="empty-section" ></div>
    <div class="container">
        <form action="{{route('author.update.profile')}}" method="post" enctype="multipart/form-data">
        <div class="row">

                @csrf
            <div class="col-4">
                <div class="form-group">
                    <label for="profileImage">profile Image</label>
                    <input type="file" class="form-control" name="profileImage" >
                </div>
                <div class="form-group">
                    <label for="profileImage">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$users->email}}" disabled >
                </div>
                <div class="form-group">
                    <label for="EmailVarification">verification Date</label>
                    <input type="text" class="form-control" id="emailTime" value="" disabled>
                </div>
            </div>
            <div class="col-8">

               <div class="form-group">
                   <label for="address">Name</label>
                   <input type="text" class="form-control" name="name" value="{{$users->name}}">
               </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                    <label for="address">Date Of Birth</label>
                    <input type="date" class="form-control" name="dob" >
                </div>
                <div class="form-group">
                    <label for="address">Interested In</label>
                    <input type="text" class="form-control" name="interestedIn" value="">
                </div>

            </div>

        </div>
            <div class="form-group">
                <label for="about">About Me</label>
                <textarea type="text" class="form-control" name="aboutMe" value=""></textarea>
            </div>
            <button class="btn btn-info" type="submit">Save data</button>
        </form>
    </div>

@endsection
@section('js')
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <script type="text/javascript">
        var varificationTIme = moment("{{$users->email_verified_at}}", "YYYYMMDD").fromNow();
        $(document).ready(function () {
           $('#emailTime').val(varificationTIme);
        });
    </script>
@endsection