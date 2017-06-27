
    

    <?php $__env->startSection('title', '| Edit Meeting'); ?>

    <?php $__env->startSection('assets'); ?>
    <link rel='stylesheet' href='/css/parsley.css' />
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    
        <div class="row">

           
          
                    <div class="panel-heading"><span class="glyphicon glyphicon-blackboard"></span> Edit Meeting <b><?php echo e($meetingData->meetingId); ?></b> </div>
                    <div class="col-md-8">

                        <form  class="form-horizontal"  role="form" method="POST" action="<?php echo e(route('meetings.update', '$meetingData->idMeeting')); ?>" data-parsley-validate="">
                         
                            <?php echo e(csrf_field()); ?>


                           <div class="form-group<?php echo e($errors->has('$meetingData->meetingName') ? ' has-error' : ''); ?>">
                              <label for="meetingName" class="col-md-4 control-label">Meeting Topic:</label>

                              <div class="col-md-6">
                                  <textarea rows="4" cols="" class="form-control" name="meetingTopic"><?php echo e($meetingData->meetingName); ?></textarea>                                

                                  <?php if($errors->has('name')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('name')); ?></strong>
                                  </span>
                                  <?php endif; ?>
                              </div>
                              </div>

                        <div class="form-group<?php echo e($errors->has('$meetingData->meetStartDate') ? ' has-error' : ''); ?>">
                              <label for="meetStartDate" class="col-md-4 control-label">Start Date:</label>

                              <div class="col-md-6">
                                  <input id="meetStartDate" type="date" class="form-control" name="meetStartDate" value= <?php echo e($meetingData->meetStartDate); ?> required autofocus>

                                  <?php if($errors->has('meetStartDate')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('meetStartDate')); ?></strong>
                                  </span>
                                  <?php endif; ?>
                              </div>
                              
                          </div>
                          
                          <div class="form-group<?php echo e($errors->has('$meetingData->meetEndDate') ? ' has-error' : ''); ?>">
                              <label for="meetEndDate" class="col-md-4 control-label">End Date:</label>

                              <div class="col-md-6">
                                  <input id="meetEndDate" type="date" class="form-control" name="meetEndDate" value= <?php echo e($meetingData->meetEndDate); ?> >

                                  <?php if($errors->has('meetEndDate')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('meetEndDate')); ?></strong>
                                  </span>
                                  <?php endif; ?>
                              </div>
                              
                          </div>

                          

                          <div class="form-group<?php echo e($errors->has('$meetingData->room') ? ' has-error' : ''); ?>">
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
                      <div class="form-group<?php echo e($errors->has('$meetingData->visitReason') ? ' has-error' : ''); ?>">
                          <label for="visitReason" class="col-md-4 control-label"> Meeting Purpose:</label>

                          <div class="col-md-6">
                              <textarea rows="4" cols="" class="form-control" name="visitReason"><?php echo e($meetingData->visitReason); ?></textarea>                                

                              <?php if($errors->has('visitReason')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('visitReason')); ?></strong>
                              </span>
                              <?php endif; ?>
                          </div>
                      </div>

                      <div class="form-group<?php echo e($errors->has('$meetingData->confidentiality') ? ' has-error' : ''); ?>">
                          <label for="confidentiality" class="col-md-4 control-label">Confidentiality:</label>

                          <div class="col-md-6">

                              <input id="confidentiality" type="checkbox"  name="confidentiality" value="1">

                              <?php if($errors->has('confidentiality')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('confidentiality')); ?></strong>
                              </span>
                              <?php endif; ?>
                          </div>
                      </div>


                      <div class="form-group<?php echo e($errors->has('$meetingData->sensibility') ? ' has-error' : ''); ?>">
                          <label for="sensibility" class="col-md-4 control-label">Sensibility:</label>

                          <div class="col-md-6">
                           <label class="radio-inline"><input type="radio" name="sensibility" value="3">High</label>
                           <label class="radio-inline"><input type="radio" name="sensibility" value="2">Medium </label>
                           <label class="radio-inline"><input type="radio" name="sensibility" value="1">Small</label>

                           <?php if($errors->has('sensibility')): ?>
                           <span class="help-block">
                              <strong><?php echo e($errors->first('sensibility')); ?></strong>
                          </span>
                          <?php endif; ?>
                      </div>
                  </div>

                  <div class="form-group<?php echo e($errors->has('$meetingData->meetStatus') ? ' has-error' : ''); ?>">
                      <label for="meetStatus" class="col-md-4 control-label">Status:</label>

                      <div class="col-md-6" >
                          <p>
                              <select class="form-control" value="scheduled" name="meetStatus">
                                <option value="1">Scheduled</option>
                                <option  value="2">Waiting Confirmation</option>
                                <option   value="3">Canceled</option>
                                <option  value="4">Finished</option>
                            </select>

                            <?php if($errors->has('meetStatus')): ?>
                            <span class="help-block">
                              <strong><?php echo e($errors->first('meetStatus')); ?></strong>
                          </span>
                          <?php endif; ?>
                      </p>
                  </div>
              </div>


              <div class="form-group<?php echo e($errors->has('$meetingData->meetIdHost') ? ' has-error' : ''); ?>">
                  <label for="meetIdHost" class="col-md-4 control-label">Host Identification:</label>

                  <div class="col-md-6">
                      <input class="form-control" name="meetIdHost" readonly value="<?php echo e($host->username); ?>" >  </input>                                

                      <?php if($errors->has('meetIdHost')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('meetIdHost')); ?></strong>
                      </span>
                      <?php endif; ?>
                  </div>
              </div>
              <div class="form-group<?php echo e($errors->has('$meetingData->sendmail') ? ' has-error' : ''); ?>">
                  <label for="sendmail" class="col-md-4 control-label">Send Email:</label>

                  <div class="col-md-6">

                      <input id="sendmail" type="checkbox"  name="sendmail" readonly value="<?php echo e(old('$meetingData->sendmail')); ?>" >

                      <?php if($errors->has('sendmail')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('sendmail')); ?></strong>
                      </span>
                      <?php endif; ?>
                  </div>
              </div>
            </div>


                <div class="col-md-4" > 
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Created At:</dt>
          <dd><?php echo e(date('M j, Y h:ia', strtotime($meetingData->created_at))); ?></dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Last Updated:</dt>
          <dd><?php echo e(date('M j, Y h:ia', strtotime($meetingData->updated_at))); ?></dd>
        </dl>
        <hr>
        <div class="row">
        
          <div class="col-sm-6">

         
            <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-floppy-save"></span> Save Changes</button>
           
          </div>
         <div class="col-sm-6">
            <a class="btn btn-danger btn-block"  href="<?php echo e(route('meetings.show', $meetingData->idMeeting)); ?>"><i class="fa fa-close"></i> Cancel</a>
        </div>

      </div>
      </div>
      

          </form>

                </div>
       




   


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>