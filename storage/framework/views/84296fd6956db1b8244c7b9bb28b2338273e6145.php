    

    <?php $__env->startSection('title', '| Create New Meeting'); ?>

    <?php $__env->startSection('assets'); ?>
    <link rel='stylesheet' href='/css/parsley.css' />
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    <div class="container" ng-app="MyApp" > 
        <div class="row">

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><span class="glyphicon glyphicon-blackboard"></span>  Create Meeting</div>
                    <div class="panel-body">

                        <form  class="form-horizontal"  role="form" method="POST" action="<?php echo e(route('meetings.store')); ?>" data-parsley-validate="">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('meetingName') ? ' has-error' : ''); ?>">
                                <label for="meetingName" class="col-md-4 control-label">Meeting Topic:</label>

                                <div class="col-md-6">
                                    <textarea rows="2" cols="" class="form-control" name="meetingTopic" required autofocus></textarea>                                

                                    <?php if($errors->has('meetingName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('meetingName')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('meetStartDate') ? ' has-error' : ''); ?>">
                                <label for="meetStartDate" class="col-md-4 control-label">Start Date:</label>

                                <div class="col-md-6">
                                    <input id="meetStartDate" type="date" class="form-control" name="meetStartDate" value="<?php echo e(old('meetStartDate')); ?>" required autofocus>

                                    <?php if($errors->has('meetStartDate')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('meetStartDate')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                
                            </div>
                            <div class="form-group<?php echo e($errors->has('meetEndDate') ? ' has-error' : ''); ?>">
                                <label for="meetEndDate" class="col-md-4 control-label">End Date:</label>

                                <div class="col-md-6">
                                    <input id="meetEndDate" type="date" class="form-control" name="meetEndDate" value="<?php echo e(old('meetEndDate')); ?>"  autofocus>

                                    <?php if($errors->has('meetEndDate')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('meetEndDate')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                
                            </div>

                            

                            <div class="form-group<?php echo e($errors->has('room') ? ' has-error' : ''); ?>">
                                <label for="room" class="col-md-4 control-label">Room:</label>

                                <div class="col-md-6">

                                    <p>
                                        <select class="form-control" name="room">
                                          <option value="1">Room 1</option>
                                          <option value="2">Room 2</option>
                                          <option value="3">Room 3</option>
                                          <option value="4">Room 4</option>
                                          <option value="5">Room 5</option>
                                      </select>


                                      <?php if($errors->has('room')): ?>
                                      <span class="help-block">
                                        <strong><?php echo e($errors->first('room')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('visitReason') ? ' has-error' : ''); ?>">
                            <label for="visitReason" class="col-md-4 control-label"> Meeting Purpose:</label>

                            <div class="col-md-6">
                                <textarea rows="2" cols="" class="form-control" name="visitReason"></textarea>                                

                                <?php if($errors->has('visitReason')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('visitReason')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('room') ? ' has-error' : ''); ?>">
                            <label for="confidentiality" class="col-md-4 control-label">Confidentiality:</label>

                            <div class="col-md-6">

                                <input id="confidentiality" type="checkbox"  name="confidentiality" value="1"  autofocus>

                                </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('sensibility') ? ' has-error' : ''); ?>">
                            <label for="sensibility" class="col-md-4 control-label">Sensibility:</label>

                            <div class="col-md-6">
                             <label class="radio-inline"><input type="radio" name="sensibility" value="1">Small</label>
                             <label class="radio-inline"><input type="radio" name="sensibility" value="2">Medium </label>
                             <label class="radio-inline"><input type="radio" name="sensibility" value="3">High</label>
                             

                             <?php if($errors->has('sensibility')): ?>
                             <span class="help-block">
                                <strong><?php echo e($errors->first('sensibility')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('meetStatus') ? ' has-error' : ''); ?>">
                        <label for="meetStatus" class="col-md-4 control-label">Status:</label>

                        <div class="col-md-6" >
                            <p>
                                <select class="form-control" value="scheduled" name="meetStatus">
                                  <option value="1">Scheduled</option>
                                  <option disabled value="2">Waiting Confirmation</option>
                                  <option  disabled="" value="3">Canceled</option>
                                  <option  disabled="" value="4">Finished</option>
                              </select>

                              <?php if($errors->has('meetStatus')): ?>
                              <span class="help-block">
                                <strong><?php echo e($errors->first('meetStatus')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>


                <div class="form-group<?php echo e($errors->has('meetIdHost') ? ' has-error' : ''); ?>">
                    <label for="meetIdHost" class="col-md-4 control-label">Host Identification:</label>

                    <div class="col-md-6">
                        <input class="form-control" name="meetIdHost" readonly value="<?php echo e(Auth::user()->username); ?>">  </input>                                

                        <?php if($errors->has('meetIdHost')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('meetIdHost')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group<?php echo e($errors->has('sendmail') ? ' has-error' : ''); ?>">
                    <label for="sendmail" class="col-md-4 control-label">Send Email:</label>

                    <div class="col-md-6">

                        <input id="sendmail" type="checkbox"  name="sendmail" value="1" >

                        <?php if($errors->has('sendmail')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('sendmail')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-lg btn-block btn-default btn-h1-spacing">
                           Save Meeting
                       </button>


                   </div>
               </div>              

           </form>


       </div>
    </div>








    </div>
     <div class="col-md-4" >
      <div class="well">
     

        <dl class="dl-horizontal">
          <label>Instructions:</label>
          <p><span class="glyphicon glyphicon-chevron-right"></span>To create a meeting, please fill the necessary fields! 
          To save the meeting, creating external or internal visitor are not mandatory.</p>
          <p><span class="glyphicon glyphicon-chevron-right"></span>To create a external/internal visitor, just click in "Show Form" and input all the necessary data.</p>
        </dl>

      
        <hr>

       

      </div>
  
  </div>

   
    </div>



    <?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>