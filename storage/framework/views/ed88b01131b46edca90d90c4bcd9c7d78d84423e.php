
    

    <?php $__env->startSection('title', '| Create New Internal Visitor'); ?>

    <?php $__env->startSection('assets'); ?>
    <link rel='stylesheet' href='/css/parsley.css' />
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading"><span class="glyphicon glyphicon-blackboard"></span>  Create Internal Visitor for Meeting: <?php echo e($meetingRestricted->meetingName); ?></div>
                            <div class="panel-body">
                
                   <form  class="form-horizontal" role="form" method="POST" action="<?php echo e(route('visitors.saveInternalVisitor')); ?>" data-parsley-validate="" onsubmit="return ConfirmExternVisitor()">

 
                        <?php echo e(csrf_field()); ?>



                             <div class="form-group<?php echo e($errors->has('meeting') ? ' has-error' : ''); ?>">
                            <label for="" class="col-md-4 control-label">Meeting:</label>

                            <div class="col-md-6">
                                

                                <select class="form-control" name="meeting" disabled="">
                                
                                    <option value="<?php echo e($meetingRestricted->idMeeting); ?>"> <?php echo e($meetingRestricted->meetingName); ?></option>
                                  
                                </select>

                               

                                <?php if($errors->has('meeting')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('meeting')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
              
                            <div class="form-group<?php echo e($errors->has('internalVisitor') ? ' has-error' : ''); ?>">
                            <label for="" class="col-md-4 control-label">Name:</label>

                            <div class="col-md-6">
                                
                                <select class="form-control" name="internalVisitor" >
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($user->idUser); ?>"> <?php echo e($user->username); ?></option>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                </p>

                                <?php if($errors->has('internalVisitor')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('internalVisitor')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                                                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                   Save 
                                </button>

                                  <a href="<?php echo e(route('meetings.show', $meetingRestricted->idMeeting)); ?>" class="btn btn-danger btn-lg btn-block">Cancel</a>  
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                </div>
</div>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>