    

    <?php $__env->startSection('title', '| Create New Drop'); ?>

    <?php $__env->startSection('assets'); ?>
    <link rel='stylesheet' href='/css/parsley.css' />
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Drop Check-in</div>
                <div class="panel-body">
                <?php if(count($errors) > 0): ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 error">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('drops.store')); ?>">
                        <?php echo e(csrf_field()); ?>

                    
                        <div class="form-group<?php echo e($errors->has('dropperCompany') ? ' has-error' : ''); ?>">
                            <label for="dropperCompany" class="col-md-4 control-label">Company Name:</label>

                            <div class="col-md-6">
                                <input id="dropperCompany" type="text" class="form-control" name="dropperCompany" value="<?php echo e(old('dropperCompany')); ?>" required autofocus>

                                <?php if($errors->has('dropperCompany')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('dropperCompany')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('dropperName') ? ' has-error' : ''); ?>">
                            <label for="dropperName" class="col-md-4 control-label">Dropper Name:</label>

                            <div class="col-md-6">
                                <input id="dropperName" type="text" class="form-control" name="dropperName" value="<?php echo e(old('dropperName')); ?>" required autofocus>

                                <?php if($errors->has('dropperName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('dropperName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('dropperName') ? ' has-error' : ''); ?>">
                            <label for="ReceiverName" class="col-md-4 control-label">Receiver Name:</label>

                            <div class="col-md-6">
                                <input id="ReceiverName" type="text" class="form-control" name="ReceiverName" value="<?php echo e(old('ReceiverName')); ?>" required autofocus>

                                <?php if($errors->has('ReceiverName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('ReceiverName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('dropItem') ? ' has-error' : ''); ?>">
                            <label for="dropItem" class="col-md-4 control-label">Item:</label>

                            <div class="col-md-6">
                                <label class="radio-inline"><input type="radio" name="dropItem" value="Large Size">Large Size</label>
                                <label class="radio-inline"><input type="radio" name="dropItem" value="Medium Size">Medium Size</label>
                                <label class="radio-inline"><input type="radio" name="dropItem" value="Small Size">Small Size</label>

                                <?php if($errors->has('dropItem')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('dropItem')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('dropImportance') ? ' has-error' : ''); ?>">
                            <label for="dropImportance" class="col-md-4 control-label">Importance:</label>

                            <div class="col-md-6" >
                            <p>
                                <select class="form-control" name="dropImportance">
                                  <option value="High">High</option>
                                  <option value="Medium">Medium</option>
                                  <option value="Low">Low</option>
                                </select>

                                <?php if($errors->has('dropImportance')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('dropImportance')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </p>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('dropDescription') ? ' has-error' : ''); ?>">
                            <label for="dropDescription" class="col-md-4 control-label"> Description:</label>

                            <div class="col-md-6">
                                <textarea rows="4" cols="" class="form-control" name="dropDescription"></textarea>                                

                                <?php if($errors->has('dropDescription')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('dropDescription')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                                                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <a href="<?php echo e(route('drops.index')); ?>" class="btn btn-primary">Cancel</a>
                            </div>
                           
                        </div>               
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>