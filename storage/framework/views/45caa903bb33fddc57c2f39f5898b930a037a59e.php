<div class="panel-body ng-hide"  ng-show="IsVisible2" id="internal"  style="animation: 0.1s myChange;">
                
                    <form  class="form-horizontal" role="form" method="POST" action="<?php echo e(route('visitors.saveInternalVisitor')); ?>" data-parsley-validate="" onsubmit="return ConfirmExternVisitor()">

 
                        <?php echo e(csrf_field()); ?>



                             <div class="form-group<?php echo e($errors->has('meeting') ? ' has-error' : ''); ?>">
                            <label for="" class="col-md-4 control-label">Meeting:</label>

                            <div class="col-md-6">
                                

                                <select class="form-control" name="meeting" >
                                <?php $__currentLoopData = $meeting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meetings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($meetings->idMeeting); ?>"> <?php echo e($meetings->meetingName); ?></option>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <button type="submit" class="btn btn-default btn-lg btn-block">
                                   Save Internal Visitor
                                </button>


                            </div>
                        </div>
                    </form>
                </div>