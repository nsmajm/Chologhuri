<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/Admin/style.css')}}">
    <style>
        .form-control{
            border:1px solid #efefef !important;
        }
        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem;
            border: 1px solid #efefef !important;
        }
        .site-title {
            text-decoration: none;
            font-size: 48px;
            line-height: 62px;
            color: #558b2f;
            font-weight: 700;
            font-style: normal;
            text-transform: uppercase;
            font-family: 'Cantata One', serif;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="offset-2 col-8 offset-2 grid-margin stretch-card mt-5">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center site-title" style="font-size:35px!important;">Cholo Ghuri</h3>
            <h1 class="text-center site-title">Support Center</h1>

            <div class="alert alert-danger" style="display:none"></div>

            <form class="contactForm">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    @if (Auth::id())
                        <input type="text" class="form-control"  name="name" id="name" value="{{Auth::user()->name}}" >
                    @else
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    @endif

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    @if (Auth::id())
                        <input type="text" class="form-control"  name="email" id="email" value="{{Auth::user()->email}}">
                    @else
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        @endif
                </div>

                <div class="form-group">
                    <label for="exampleTextarea1">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                </div>
                <button type="button" id="submitContact" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
            <div class="loader">
                <div id="supportSuccess"></div>
                <div class="loader-demo-box" style="display: none;">
                    <div class="jumping-dots-loader">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="mt-lg-5 mb-5 text-center">
                <a class="btn btn-success" href="{{route('home.index')}}">Back To Home</a>
            </div>
        </div>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script type="text/javascript">

</script>


<script type="text/javascript">
    $(document).ready(function () {
    $('.loader').hide();
    $('#supportSuccess').hide();
    $('#submitContact').click(function (e) {
        $('.loader').show();
        var name = $('#name').val();
        var email = $('#email').val();
        var message =$('#message').val();

        e.preventDefault();
    $.ajax({
        type: 'POST',
        url: "{!! route('support.post') !!}",
        cache: false,
        data: {_token: "{{csrf_token()}}",'name':name,'email':email,'message':message},
        success: function (data) {
           if(data.errors){
               jQuery.each(data.errors, function(key, value){
                   jQuery('.alert-danger').show();
                   jQuery('.alert-danger').append('<p style="color: #000">'+value+'</p>');
               });
               $('.loader').hide();
           }
            else{
               $('.loader').hide();
               $('#name').val(" ");
               $('#email').val(" ");
               $('#message').val(" ");
               toastr["success"]("Thank You For Your Support")
           }
        }
    });

    });
});

</script>

</body>
</html>

