<?php if ($this->session->userdata('logged_in')){
    $auth_state = "Logout";
    $auth_controller = 'logout';
  } else {
    $auth_state = "Login";
     $auth_controller = 'login';
  }
  $active = current_url();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Level-Up Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet" media="screen">
  </head>
  <body>
  
 <div class="navbar">
     <div class="container">
  <a class="navbar-brand" href="<?php 
          if($auth_state === "Logout"){
            echo base_url().'home';
          } else {
            echo base_url();
          }
          ?>">Level-Up Challenge</a>
  <ul class="nav navbar-nav">

    <li class="<?php if($active == base_url().'home'){
        echo 'active';
      }?>"><a href="<?php echo base_url() . 'home'; ?>">Home</a></li>
    <li class="<?php if($active == base_url().'about'){
        echo 'active';
      }?>"><a href="<?php echo base_url() . 'about'; ?>">About</a></li>
    <li class="<?php if($active == base_url().'contact'){
        echo 'active';
      }?>"><a href="<?php echo base_url() . 'contact'; ?>">Contact</a></li>

  </ul>
   <ul class="nav navbar-nav pull-right">
              <?php if($this->session->userdata('logged_in')){ ?>
                    <li class="<?php if($active == base_url().'userhome'){echo 'active';} ?>">
                    <a href="<?php echo base_url().'userhome' ?>">User Profile</a>
                    </li>
              <?php } ?>
            <li class="<?php if($active == base_url().'login'){
                  echo 'active';
            }?>"><a href="<?php echo base_url().$auth_controller;?>"><?php echo $auth_state; ?></a></li>
  </ul>
  </div>
</div>



<div class="container">



    <div class="row">   
      <div class="content col-12"> 
