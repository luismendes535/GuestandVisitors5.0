  
  <?php $__env->startSection('title','| HomePage'); ?>

    <?php $__env->startSection('content'); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
          <img src="http://www.nanium.com/_gi/nanium-logo.svg">
            <h4 style="text-align: justify;text-align: center;">Welcome to NANIUM's Visitors and Guests Management System</h4>
          
       
          </div>
        </div>
      </div>
      <!-- end of header .row -->

 <div class="row">
            <div class="col-md-8">
            <h3>Your next meetings:</h3>
                
                <?php $__currentLoopData = $meetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="post">
                        <h4><?php echo e($meet->meetingName); ?></h4> <h5>at :</h5> <?php echo e($meet->meetStartDate); ?> 
                        <p><?php echo e(substr(strip_tags($meet->visitorCompanyName), 0, 300)); ?><?php echo e(strlen(strip_tags($meet->visitReason)) > 300 ? "..." : ""); ?></p>
                        <a href="<?php echo e(url('meetings/')); ?>" class="btn btn-primary btn-sm">See More</a>
                    </div>

                    <hr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        <div class="col-md-3 col-md-offset-1">
    
    
<!-- start feedwind code --> 
<script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="30616/"></script> <!-- end feedwind code -->
        </div>
      </div>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>