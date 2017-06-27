  

  <?php $__env->startSection('title', '| Edit Visitor'); ?>

  <?php $__env->startSection('assets'); ?>
  <link rel='stylesheet' href='/css/parsley.css' />
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('content'); ?>
  
      <div class="row"  >

         

      <div class="panel-heading"><span class="glyphicon glyphicon-blackboard"></span> Edit External Visitor</div>



  <?php echo Form::model($externalVisitor,['route' => ['visitors.update', $externalVisitor->idVisitor], 'method' => 'PUT','class' => 'form-horizontal','data-parsley-validate' => '']); ?>

  <?php echo e(csrf_field()); ?>


  <div class="col-md-8">
                        

                     

                        

           <div class="form-group<?php echo e($errors->has('visitorName') ? ' has-error' : ''); ?>">
                            <label for="visitorName" class="col-md-4 control-label"> Name:</label>

                            <div class="col-md-6">
                                <input id="visitorName" type="text" class="form-control" name="visitorName" value="<?php echo e($externalVisitor->visitorName); ?>"  autofocus  ng-model="visitorName">

                                <?php if($errors->has('visitorName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('visitorName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                         <div class="form-group<?php echo e($errors->has('visitorCitizenCardType') ? ' has-error' : ''); ?>">
                            <label for="visitorCitizenCardType" class="col-md-4 control-label">Citizen Identification Type:</label>

                            <div class="col-md-6"  name="visitorCitizenCardType">
                                <select class="form-control">
                                  <option value="1">Passport</option>
                                  <option value="2">Citizen Card</option>
                                 
                                </select>

                               

                                <?php if($errors->has('visitorCitizenCardType')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('visitorCitizenCardType')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('visitorCitizenCard') ? ' has-error' : ''); ?>">
                            <label for="visitorCitizenCard" class="col-md-4 control-label">Citizen Card/Passaport Number:</label>

                            <div class="col-md-6">
                                <input id="visitorCitizenCard" type="text" class="form-control" name="visitorCitizenCard" value="<?php echo e($externalVisitor->visitorCitizenCard); ?>"  autofocus  ng-model="visitorCitizenCard"></input>

                                <?php if($errors->has('visitorCitizenCard')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('visitorCitizenCard')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>



                              
                        <div class="form-group<?php echo e($errors->has('visitorNPhone') ? ' has-error' : ''); ?>">
                            <label for="visitorNPhone" class="col-md-4 control-label">Phone Number:</label>

                            <div class="col-md-6">
                            
                                <input id="visitorNPhone" type="text"  class="form-control" name="visitorNPhone" value="<?php echo e($externalVisitor->visitorNPhone); ?>"  autofocus ng-model="visitorNPhone">

                                <?php if($errors->has('visitorNPhone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('visitorNPhone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('visitorEmail') ? ' has-error' : ''); ?>">
                            <label for="visitorEmail" class="col-md-4 control-label">Email:</label>

                            <div class="col-md-6">
                               <input type="email" class="form-control" name="visitorEmail" value="<?php echo e($externalVisitor->visitorEmail); ?>"></input>

                                <?php if($errors->has('visitorEmail')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('visitorEmail')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('visitorEmail') ? ' has-error' : ''); ?>">
                            <label for="visitorEmail" class="col-md-4 control-label">Confirm Email:</label>

                            <div class="col-md-6">
                               <input type="email" class="form-control" name="visitorEmail"></input>

                                <?php if($errors->has('visitorEmail')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('visitorEmail')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('visitorCompanyName') ? ' has-error' : ''); ?>">
                            <label for="visitorCompanyName" class="col-md-4 control-label">Company:</label>

                            <div class="col-md-6">
                                <input id="visitorCompanyName" type="text" class="form-control" name="visitorCompanyName" value="<?php echo e($externalVisitor->visitorCompanyName); ?>"  autofocus  ng-model="visitorCompanyName">

                                <?php if($errors->has('visitorCompanyName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('visitorCompanyName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('wifiAccess') ? ' has-error' : ''); ?>">
                            <label for="wifiAccess" class="col-md-4 control-label">WiFi Access:</label>

                            <div class="col-md-6">
                                <input id="wifiAccess" type="checkbox" name="wifiAccess" value="1"  autofocus>

                                <?php if($errors->has('wifiAccess')): ?> 
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('wifiAccess')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('visitorDeclaredGood') ? ' has-error' : ''); ?>">
                            <label for="visitorDeclaredGood" class="col-md-4 control-label">Declared Goods:</label>

                            <div class="col-md-6">
                                <input id="visitorDeclaredGood" type="text" class="form-control" name="visitorDeclaredGood" value="<?php echo e($externalVisitor->visitorDeclaredGood); ?>"  autofocus >

                                <?php if($errors->has('visitorDeclaredGood')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('visitorDeclaredGood')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('visitorDangerousGood') ? ' has-error' : ''); ?>">
                            <label for="visitorDangerousGood" class="col-md-4 control-label">Dangerous Goods:</label>

                            <div class="col-md-6">
                                <input id="visitorDangerousGood" type="checkbox" name="visitorDangerousGood" value="1"  autofocus >

                                <?php if($errors->has('visitorDangerousGood')): ?> 
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('visitorDangerousGood')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('escorted') ? ' has-error' : ''); ?>">
                            <label for="escorted" class="col-md-4 control-label">Escorted:</label>

                            <div class="col-md-6">
                                <input id="escorted" type="checkbox" name="escorted" value="1"  autofocus >

                                <?php if($errors->has('escorted')): ?> 
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('escorted')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

           
          </div>


  <div class="col-md-4" > 
    <div class="well">
      <dl class="dl-horizontal">
        <dt>Created At:</dt>
        <dd><?php echo e(date('M j, Y h:ia', strtotime($externalVisitor->created_at))); ?></dd>
      </dl>

      <dl class="dl-horizontal">
        <dt>Last Updated:</dt>
        <dd><?php echo e(date('M j, Y h:ia', strtotime($externalVisitor->updated_at))); ?></dd>
      </dl>
      <hr>
      <div class="row">
        <div class="col-sm-6">
       
         
        <a class="btn btn-danger btn-block"  href="<?php echo e(route('meetings.show', $externalVisitor->meeting->first()->idMeeting)); ?>">Cancel</a>
        </div>
        <div class="col-sm-6">
          <?php echo e(Form::submit('Save Changes', ['class' => 'btn btn-default btn-block'])); ?>

        </div>
      </div>

    </div>
    </div>
    
<?php echo Form::close(); ?>


              </div><!-- end of .row (form) -->
     




 


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>