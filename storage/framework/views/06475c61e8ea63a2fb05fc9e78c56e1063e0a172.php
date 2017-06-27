<div class="panel-body ng-hide" ng-show = "IsVisible" >


                
                    <form  class="form-horizontal" role="form" method="post" action="<?php echo e(route('visitors.store')); ?>" data-parsley-validate="" onsubmit="return ConfirmExternVisitor()">

                        <?php echo e(csrf_field()); ?>


                           <div class="form-group<?php echo e($errors->has('') ? ' has-error' : ''); ?>">
                            <label for="meeting" class="col-md-4 control-label">Meeting:</label>

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
              
                        <div class="form-group<?php echo e($errors->has('visitorName') ? ' has-error' : ''); ?>">
                            <label for="visitorName" class="col-md-4 control-label"> Name:</label>

                            <div class="col-md-6">
                                <input id="visitorName" type="text" class="form-control" name="visitorName" value="<?php echo e(old('visitorName')); ?>" required autofocus  ng-model="visitorName">

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
                                <input id="visitorCitizenCard" type="text" class="form-control" name="visitorCitizenCard" value="<?php echo e(old('visitorCitizenCard')); ?>" required autofocus  ng-model="visitorCitizenCard"></input>

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
                            
                                <input id="visitorNPhone" type="text"  name="visitorNPhone" value="<?php echo e(old('visitorNPhone')); ?>" required autofocus ng-model="visitorNPhone">

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
                               <input type="email" name="visitorEmail"></input>

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
                               <input type="email" name="visitorEmail"></input>

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
                                <input id="visitorCompanyName" type="text" class="form-control" name="visitorCompanyName" value="<?php echo e(old('visitorCompanyName')); ?>" required autofocus  ng-model="visitorCompanyName">

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
                                <input id="wifiAccess" type="checkbox" name="wifiAccess" value="1" required autofocus>

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
                                <input id="visitorDeclaredGood" type="text" class="form-control" name="visitorDeclaredGood" value="" required autofocus >

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
                                <input id="visitorDangerousGood" type="checkbox" name="visitorDangerousGood" value="1" required autofocus >

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
                                <input id="escorted" type="checkbox" name="escorted" value="1" required autofocus >

                                <?php if($errors->has('escorted')): ?> 
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('escorted')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        
                                                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default btn-lg btn-block">
                                    Save External Visitor
                                </button>


                            </div>
                        </div>
                       
                  </form>
                </div>
         
       

        