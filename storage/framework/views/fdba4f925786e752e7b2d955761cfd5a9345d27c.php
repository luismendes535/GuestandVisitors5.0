

<?php $__env->startSection('title', '| View Post'); ?>

<?php $__env->startSection('content'); ?>

  <div class="row">
    <div class="col-md-8">
      
      <h3 class="lead">Topic: <?php echo $meetingData->meetingName; ?></h3>

      <hr>
          <p class="lead">Confidentiality: <?php if($meetingData->confidentiality==1): ?> Top Secret <?php else: ?> Unclassified <?php endif; ?></p>
          <hr>
          <h3>Sensibility: <?php if($meetingData->sensibility==1): ?> Small <?php elseif($meetingData->sensibility==2): ?> Medium <?php else: ?> High <?php endif; ?></h3>
      <hr>
      <div class="visitors">
      <p class="lead">Escorted Visitors:
      
        <?php $__currentLoopData = $meetingData->visitor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <span class="label label-default"><?php if($visitor->escorted==1): ?><?php echo e($visitor->where('escorted', 1)->count()); ?> <?php else: ?> None <?php endif; ?></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </p>
        

      </div>

      <div id="visitors" style="margin-top: 50px;">
          <h3>External Visitors <small><?php echo e($meetingData->visitor()->count()); ?> total   </small><a href="<?php echo e(route('visitors.create', $meetingData->idMeeting)); ?>" class="btn btn-xs btn-success"> <span class="glyphicon glyphicon-plus"></span></a></h3>
</h3>
        
         

        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Company</th>
              <th>ID Number</th>
              <th width="70px"></th>
            </tr>
          </thead>

          <tbody>
            <?php $__currentLoopData = $meetingData->visitor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitorEx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($visitorEx->visitorName); ?></td>
              <td><?php echo e($visitorEx->visitorEmail); ?></td>
              <td><?php echo e($visitorEx->visitorCompanyName); ?></td>
              <td><?php echo e($visitorEx->visitorCitizenCard); ?></td>
              <td>
                <a href="<?php echo e(route('visitors.edit', $visitorEx->idVisitor)); ?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="<?php echo e(route('visitors.destroy', $visitorEx->idVisitor)); ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>

        <div class="visitors">
        <?php $__currentLoopData = $meetingData->user(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <span class="label label-default"><?php echo e($user->username); ?></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
        <div id="visitors" style="margin-top: 50px;">
        <h3>Internal Visitors <small><?php echo e($meetingData->user()->count()); ?> total   </small><a href="<?php echo e(route('visitors.addInternalVisitor', $meetingData->idMeeting)); ?>" class="btn btn-xs btn-success"> <span class="glyphicon glyphicon-plus"></span></a></h3>
  
         

        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Department</th>
           
              <th width="70px"></th>
            </tr>
          </thead>

          <tbody>
            <?php $__currentLoopData = $meetingData->user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitorInt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($visitorInt->username); ?></td>
              <td><?php echo e($visitorInt->email); ?></td>
               <td><?php echo e($visitorInt->department); ?></td>
              
              <td>
            
                <a href="<?php echo e(route('visitors.destroy', $visitorInt->idUser)); ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>

  </div>

       

    <div class="col-md-4" >
      <div class="well">
     

        <dl class="dl-horizontal">
          <label>Start at:</label>
          <p><?php echo e(date('M j, Y h:ia', strtotime($meetingData->meetStartDate))); ?></p>
        </dl>

        <dl class="dl-horizontal">
          <label>End Date:</label>
          <p><?php echo e(date('M j, Y h:ia', strtotime($meetingData->meetEndDate))); ?></p>
        </dl>
        <hr>
        <div class="row">
           <div class="col-sm-4">
             <a href="<?php echo e(route('meetings.edit', $meetingData->idMeeting)); ?>" class="btn btn-primary btn-block">Edit</a> 
        
            
          </div>
         
          <div class="col-sm-4">
           <form method="POST" action="<?php echo e(route('meetings.destroy', '$meetingData->idMeeting')); ?>" >
             <div class="form-group">
                   
                        <button type="submit" class="btn btn-danger btn-block">
                           Delete
                       </button>


                
               </div> 

          </form>

          </div>

            <div class="col-md-12">
          <a href="<?php echo e(route('meetings.index')); ?>" class="btn btn-default btn-block btn-h1-spacing"> << See All Meetings</a> 
        
            
          </div>
        </div>

       

      </div>
  
  </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>