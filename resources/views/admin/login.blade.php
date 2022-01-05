<html>

<head>
    <title></title>
    <link href="{{asset('/css/loginform.css')}}" rel="stylesheet" type="text/css">
    <!-- <script src="js/jquery.js"></script> -->
    <script src="{{asset('res/js/jquery.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <section>
        <!-- <span ></span> -->
        <img src="{{asset('res/newimage/mylogo.png')}}" style="width:260px;height:100px;margin-top:25px;">
        <!-- <h1 style="color:white">Admin Login</h1> -->
        <form id="myform" action="">
            <input type="text" placeholder="Username" id = "username">
            <input type="password" placeholder="Password" id = "password"/>
        </form>
        <button id = "mybuttonlogin" style="font-weight:bold;" onclick="login()">LOGIN</button>
    </section>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if($errors->any())
<?php
echo "
<script>
Swal.fire({
    icon: 'info',
    title: 'Admin Area',
    text: 'Please Login First !',
    confirmButtonColor: '#3283a8',
});
</script>
";
?>
@endif
<script>
 function login() {
        var user = $("#username").val();
        var pass = $("#password").val();
        if(user == "" || pass == "")
        {
            Swal.fire({
                            icon: 'error',
                            title: 'Empty Field',
                            text: 'Please fill all requirement Data',
                            confirmButtonColor: '#e00d0d',
                        });
        }
        else{
            $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
            $.ajax({
                url: "{{route('checklogin')}}",
                method: 'post',
                data: {
                
                    username: user,
                    password: pass,
                },
                success: function (result) {
                    if(result == "sukses")
                    {
                        Swal.fire({
                        title: 'User Matched',
                        text: 'Welcome to admin page',
                        icon: 'success',
                        allowOutsideClick: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Go to admin dashboard'
                        }).then((result) => {
                            window.location.href = "{{route('gotodashboard')}}";
                        });
                    }
                    else{
                        Swal.fire({
                            icon: 'error',
                            title: 'No user found',
                            text: 'user not found on our database',
                            confirmButtonColor: '#e00d0d',
                        });
                    }
                
                  
            

                }
            });
        }
       
    }
   
</script>

</html>