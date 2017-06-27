<!-- Default Bootstrap Navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Visitors and Guests Management System</a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo e(Request::is('/') ? "active" : ""); ?>"><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>


        <li class="<?php echo e(Request::is('about') ? "active" : ""); ?>"><a href="/about"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
        <li class="<?php echo e(Request::is('contact') ? "active" : ""); ?>"><a href="/contact"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(Auth::check()): ?>

        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello <?php echo e(Auth::user()->username); ?> <span class="glyphicon glyphicon-user"></span></a>
         
          <ul class="dropdown-menu">

            <?php if(Auth::check() && Auth::user()->role()==true): ?>
              
              <?php echo $__env->make('partials._navReception', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
            <?php endif; ?>
            <?php if(Auth::check() && Auth::user()->role()==false): ?>
              
              
              <?php echo $__env->make('partials._navStaff', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php endif; ?>
            <li role="separator" class="divider"></li>
            <li><a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span> Logout</a>

              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="get" style="display: none;"><?php echo e(csrf_field()); ?></form></li>
            </ul>
          </li>



          <?php else: ?>
          <li>  <a href="<?php echo e(route('login')); ?>" class="<?php echo e(Request::is('/') ? "active" : ""); ?>" ><span class="glyphicon glyphicon-log-in"></span> Login</a>
          </li>



          <?php endif; ?>

        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>