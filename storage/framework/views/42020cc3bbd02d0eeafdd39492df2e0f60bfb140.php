<div class="panel-body ng-hide"  ng-show="IsVisible2" id="internal" >
                
                    <form  class="form-horizontal" role="form" method="POST" action="<?php echo e(route('visitors.store')); ?>" data-parsley-validate="" onsubmit="return ConfirmExternVisitor()">
                        <?php echo e(csrf_field()); ?>



                            <div class="form-group<?php echo e($errors->has('') ? ' has-error' : ''); ?>">
                            <label for="" class="col-md-4 control-label">Meeting:</label>

                            <div class="col-md-6">
                                <?php $__currentLoopData = $meeting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <select class="form-control" name="meeting">
                                    <option value="<?php echo e($drop->idMeeting); ?>"> <?php echo e($drop->meetingName); ?></option>

                                </select>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php if($errors->has('meeting')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('meeting')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
              
                            <div class="form-group<?php echo e($errors->has('') ? ' has-error' : ''); ?>">
                            <label for="" class="col-md-4 control-label">Name:</label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="" value="<?php echo e(old('')); ?>" required autofocus></input>
                                <br/>

                                <p><button class="btn btn-sucess">  Validate  </button>
                                </p>

                                <?php if($errors->has('')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
<br>
<br>
                         <div class="form-group<?php echo e($errors->has('') ? ' has-error' : ''); ?>">
                            <label for="" class="col-md-4 control-label">Department:</label>

                            <div class="col-md-6">
                            <select class="form-control">
                                  <option value="department1">Department 1</option>
                                  <option value="Department2">Department 2</option>
                                  <option value="department3">Department 3</option>
                                  <option value="department4">Department 4</option>
                                  <option value="department5">Department 5</option>
                                </select>
                             

                                <?php if($errors->has('')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        
                                                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default btn-lg btn-block">
                                   Add
                                </button>


                            </div>
                        </div>
                    </form>
                </div>