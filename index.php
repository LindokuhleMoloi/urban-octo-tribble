<?php require_once('./config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page  dark-mode">
  <style>
    body{
      background-image: url("<?php echo validate_image($_settings->info('cover')) ?>");
      background-size:cover;
      background-repeat:no-repeat;
      
    }
    .login-title{
        text-shadow: 2px 2px black;
        backdrop-filter: invert(.3);
    }
  </style>
<style>

*,
*::before,
*::after {
    box-sizing: border-box;
    line-height: 1.5em;
}

html {
    font-size: 16px;
    scroll-behavior: smooth;
    -webkit-text-size-adjust: 100%;
}

body {
    margin: 0;
    font-family: "Open Sans", sans-serif;
    background-color: 
#f7f7f7;
}

header {
    background-color: 
#ffffff;
    box-shadow: 0 10px 15px -3px 
rgba(0, 0, 0, 0.1),
        0 4px 6px -4px 
rgba(0, 0, 0, 0.1);
    padding: 10px 20px;
}
header .wrapper {
    width: 1500px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
header .logo img {
    height: 100px;
    display: block;
}

.navbar {
    position: fixed;
    top: 0;
    left: 100%;
    margin: 0;
    width: 100%;
    height: 100%;
    background-color: 
white;
    padding: 20px;
    transition: left 0.3s;
}

.navbar.show {
    left: 0 !important;
}

 
.hide-scroll {
    overflow: hidden;
}

.navbar ul {
    all: unset;
    list-style-type: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 25px;
}
.navbar ul a {
    all: unset;
    color: 
#444444;
    text-transform: uppercase;
    cursor: pointer;
    font-weight: bold;
    font-size: 28px;
}
.navbar ul a:hover {
    color: 
#111111;
    text-decoration: underline overline;
    text-decoration-thickness: 3px;
}

.close-nav {
    text-align: right;
    margin-bottom: 20px;
}
.close-nav button {
    all: unset;
    background: 
#f7f7f7;
    font-size: 42px;
    cursor: pointer;
    border: 1px solid 
rgba(0, 0, 0, 0.2);
    padding: 15px;
    border-radius: 3px;
    color: 
#444444;
}
.close-nav button:hover {
    color: 
#222222;
    background: 
white;
}

.menu-bar button {
    border: 1px solid 
rgba(0, 0, 0, 0.1);
    background: 
#f7f7f7;
    height: 50px;
    width: 50px;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 3px;
}
.menu-bar i {
    display: block;
    border-top: 3px solid 
#444444;
    border-bottom: 3px solid 
#444444;
}
.menu-bar i::after {
    display: block;
    content: "";
    border-top: 3px solid 
#444444;
    margin: 6px 0;
}
.menu-bar button:hover {
    background: 
white;
}
.menu-bar button:hover i {
    border-color: 
#222222;
}

.container {
    max-width: max;
    margin: 0 auto;
    padding: 30px;
}

@media (min-width: 550px) {
    .navbar {
        all: unset;
        display: block;
    }
    .navbar ul {
        flex-direction: row;
        gap: 20px;
    }
    .navbar ul a {
        font-size: inherit;
    }
    .close-nav,
    .menu-bar {
        display: none;
    }
}





</style>






  <!---<h1 class="text-center py-2 px-2 rounded my-5 login-title"><b><?php echo $_settings->info('name') ?></b></h1> --->
  
  <header>
        <div class="wrapper">
            <div class="logo">
                <a href="#"><img src="uploads/Progression-Logo.png" ></a>
            </div>
            <div class="navbar">
                <div class="close-nav"><button>×</button></div>
                <nav>
                    <ul>
                        <li><a href="http://localhost/employee_gatepass/admin/">Admin Login</a></li>
                       
                        
                    </ul>
                </nav>
            </div>

            <div class="logo">
                <a href="#"><img src="uploads/Workplace-Portal-topbar-badge.png" ></a>
            </div>
            <div class="menu-bar">
                <button><i></i></button>
            </div>
        </div>
    </header>
    <div class="container">
        <!-- Content -->
    </div>
    <script>
        const theBody = document.querySelector('body');
        const openNav = document.querySelector('.menu-bar button');
        const closeNav = document.querySelector('.close-nav button');
        const Navbar = document.querySelector('.navbar');

        // function bodyScroll(){
        //     if(Navbar.classList.contains('show')){
        //         theBody.classList.add('hide-scroll');
        //     }
        //     else if(theBody.classList.contains('hide-scroll')){
        //         theBody.classList.remove('hide-scroll');
        //     }
        // }

        function showHide(){
            Navbar.classList.toggle('show');
            // bodyScroll();
        }

        openNav.onclick = showHide;
        closeNav.onclick = showHide;
    </script>







<div class="w-100">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6">
        <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="panel-tab" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-employees-tab" data-toggle="pill" href="#custom-tabs-one-employees" role="tab" aria-controls="custom-tabs-one-employees" aria-selected="true">Employees</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-visitors-tab" data-toggle="pill" href="#custom-tabs-one-visitors" role="tab" aria-controls="custom-tabs-one-visitors" aria-selected="false">Visitors</a>
                </li>
                
                
            </ul>
            </div>
            <div class="card-body">
            <div class="tab-content" id="panel-tab-Content">
                <div class="tab-pane fade active show" id="custom-tabs-one-employees" role="tabpanel" aria-labelledby="custom-tabs-one-employees-tab">
                   <div class="container-fluid py-5">
                       <form action="" id="employee-log-form">
                           <input type="hidden" name="type">
                           <div class="col-12">
                               <div class="row justify-content-center">
                                   <div class="col-md-8">
                                       <div class="form-group text-center">
                                           <label for="employee_code">Please Enter your employee code.</label>
                                           <input type="text" id="employee_code" name="employee_code" class="form-control form-control-lg rounded-0" autofocus autocomplete="off">
                                       </div>
                                       <div class="form-group text-center">
                                           <button class="btn btn-lg rounded-pill btn-primary elog px-4 col-4" type="button" data-type='1' >In</button>
                                           <button class="btn btn-lg rounded-pill btn-danger elog px-4 col-4" type="button" data-type='2' >Out</button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </form>
                   </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-visitors" role="tabpanel" aria-labelledby="custom-tabs-one-visitors-tab">
                <div class="container-fluid py-5">
                       <form action="" id="visitor-log-form">
                           <input type="hidden" name="type">
                           <div class="col-12">
                               <div class="row justify-content-center">
                                   <div class="col-md-8">
                                       <div class="form-group text-center">
                                           <label for="name">Name</label>
                                           <input type="text" id="name" name="name" class="form-control form-control-lg rounded-0" autocomplete="off">
                                       </div>
                                       <div class="form-group text-center">
                                           <label for="contact">Contact #</label>
                                           <input type="text" id="contact" name="contact" class="form-control form-control-lg rounded-0" autocomplete="off">
                                       </div>
                                       <div class="form-group text-center">
                                           <label for="address">Address</label>
                                           <textarea rows="2" id="address" name="address" class="form-control form-control-lg rounded-0" autocomplete="off"></textarea>
                                       </div>
                                       <div class="form-group text-center">
                                           <label for="purpose">Purpose</label>
                                           <textarea rows="2" id="purpose" name="purpose" class="form-control form-control-lg rounded-0" autocomplete="off"></textarea>
                                       </div>
                                       <div class="form-group text-center">
                                           <button class="btn btn-lg rounded-pill btn-primary elog px-4 col-4" type="button" data-type='1' >In</button>
                                           <button class="btn btn-lg rounded-pill btn-danger elog px-4 col-4" type="button" data-type='2' >Out</button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </form>
                   </div>
                </div>
                
                
            </div>
            </div>
            <!-- /.card -->
        </div>
        </div>
    </div>
</div>

<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
    function alert_swal($title="",$message= "",$type="success",$timer = 3500){
        Swal.fire({
            icon:$type,
            title: $title,
            text: $message,
            timer: $timer
        }).then((result)=>{
            setTimeout(() => {
                if(result.isConfirmed === true || result.isDismissed === true){
                if($('form#employee-log-form #employee_code').is(":visible") === true)
                $('form#employee-log-form #employee_code').show().trigger('focus');
                if($('form#visitor-log-form #name').is(":visible") === true)
                $('form#visitor-log-form #name').show().trigger('focus');
                }
            }, 650);
            })
    }
  $(document).ready(function(){
      $('#panel-tab .nav-link').click(function(){
          setTimeout(() => {
          if($('#employee_code').is(':visible') == true)
          $('#employee_code').focus()
          if($('#name').is(':visible') == true)
          $('#name').focus()
        }, 650);

      })
    $('form#employee-log-form #employee_code').on('keypress',function(e){
        if(e.which == 13)
        e.preventDefault()
    })
    $('.elog').click(function(){
        if($('#employee_code').is(':visible') == true){
            $('form#employee-log-form [name="type"]').val($(this).attr('data-type'))
            $('form#employee-log-form').submit()
        }
        if($('#name').is(':visible') == true){
            $('form#visitor-log-form [name="type"]').val($(this).attr('data-type'))
            $('form#visitor-log-form').submit()
        }
    })
    $('form#employee-log-form').submit(function(e){
        e.preventDefault();
        start_loader();
        $.ajax({
            url:_base_url_+'classes/Master.php?f=log_employee',
            method:'POST',
            data:$(this).serialize(),
            dataType:'json',
            error:err=>{
                console.log(err)
                alert_toast("An error occured","error")
                end_loader();
            },
            success:function(resp){
                if(resp.status == 'success'){
                    alert_swal(resp.title,resp.msg,'success')
                    $('form#employee-log-form').get(0).reset()
                }else{
                    alert_swal(resp.title,resp.msg,'error',0)
                }
                end_loader();
            }
        })
    })
    $('form#visitor-log-form').submit(function(e){
        e.preventDefault();
        start_loader();
        $.ajax({
            url:_base_url_+'classes/Master.php?f=log_visitor',
            method:'POST',
            data:$(this).serialize(),
            dataType:'json',
            error:err=>{
                console.log(err)
                alert_toast("An error occured","error")
                end_loader();
            },
            success:function(resp){
                if(resp.status == 'success'){
                    alert_swal(resp.title,resp.msg,'success')
                    $('form#visitor-log-form').get(0).reset()
                }else{
                    alert_swal(resp.title,resp.msg,'error',0)
                }
                end_loader();
            }
        })
    })
  })
  
</script>
</body>
</html>