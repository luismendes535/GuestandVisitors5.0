 

    <?php $__env->startSection('title', '| Drop Edit'); ?>

    <?php $__env->startSection('assets'); ?>
    <link rel='stylesheet' href='/css/parsley.css' />
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Drop Edit</div>
                <div class="panel-body">
                  <?php echo Form::model($drop, array('method'=>'post','class'=>'form-horizontal', 'role'=> 'form', 'route' => array('drops.updateEdit', $drop->idDrop))); ?>

                    
                        <div class="form-group<?php echo e($errors->has('dropperCompany') ? ' has-error' : ''); ?>">
                            <label for="dropperCompany" class="col-md-4 control-label">Company Name:</label>
                            <div class="col-md-6">
                            <input id="dropperCompany" type="text" class="form-control" name="dropperCompany" value="<?php echo e($drop->dropperCompanyName); ?>">

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
                                <input id="dropperName" type="text" class="form-control" name="dropperName" value="<?php echo e($drop->dropperName); ?>">

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
                                <input id="ReceiverName" type="text" class="form-control" name="ReceiverName" value="<?php echo e($drop->dropReceiver); ?>" required autofocus>

                                <?php if($errors->has('ReceiverName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('ReceiverName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                              </div>
                        </div>


                          <div class="form-group<?php echo e($errors->has('dropImportance') ? ' has-error' : ''); ?>">
                            <label for="dropSize" class="col-md-4 control-label">Size:</label>

                            <div class="col-md-6" >
                            <p>
                                <select class="form-control" name="dropSize">  
                                      <?php if($drop->dropSize): ?>=='L')
                               
                                      <option value="L">Large</option>
                                        <?php elseif(($drop->dropSize)=='M'): ?>
                                        
                                         <option value="M">Medium</option>
                                        <?php endif; ?>
                               
                                  
                                </select>

                                <?php if($errors->has('dropSize')): ?>
                                    <span class="help-block">p
                                        <strong><?php echo e($errors->first('dropSize')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </p>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('dropImportance') ? ' has-error' : ''); ?>">
                            <label for="dropImportance" class="col-md-4 control-label">Importance:</label>

                            <div class="col-md-6" >
                            <p>
                                <select class="form-control" name="dropImportance">  
                                <?php if(($drop->dropImportance)): ?>           
                                <option value="High"><?php echo e($drop->dropImportance); ?></option>
                                <?php else: ?> <option value="High">High</option>
                                <?php endif; ?>
                                <?php if(($drop->dropImportance)): ?>           
                                <option value="Medium"><?php echo e($drop->dropImportance); ?></option>
                                <?php else: ?> <option value="Medium">Medium</option>
                                <?php endif; ?>
                                <?php if(($drop->dropImportance)): ?>           
                                <option value="Small"><?php echo e($drop->dropImportance); ?></option>
                                <?php else: ?> <option value="Small">Small</option>
                                <?php endif; ?>
                                  
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
                                <textarea rows="4" cols="" class="form-control" name="dropDescription"><?php echo e($drop->dropDescr); ?></textarea>                               

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
                                    Submit
                                </button>
                                <a href="<?php echo e(route('drops.index')); ?>" class="btn btn-primary">Cancel</a>
                            </div>
                        </div>
                     <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>