
  

  <?php $__env->startSection('title', '| Edit Delivery'); ?>

  <?php $__env->startSection('assets'); ?>
  <link rel='stylesheet' href='/css/parsley.css' />
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('content'); ?>
  
      <div class="row"  >

         

<div class="panel-heading"><span class="glyphicon glyphicon-blackboard"></span> Edit Delivery</div>



  <?php echo Form::model($deliveryData,['route' => ['delivers.update', $deliveryData->idDeliver], 'method' => 'PUT','class' => 'form-horizontal','data-parsley-validate' => '', 'files' => true]); ?>

    
   
      <?php echo e(csrf_field()); ?>


                        
 <div class="col-md-8">
                        

                     

                        

          <div class="form-group<?php echo e($errors->has('driverName') ? ' has-error' : ''); ?>">
            <label for="driverName" class="col-md-4 control-label">Driver Name:</label>

            <div class="col-md-6">
              <input id="driverName" type="text" class="form-control" name="driverName" value="<?php echo e($deliveryData->deDriverName); ?>" required autofocus>

              <?php if($errors->has('driverName')): ?>
              <span class="help-block">
                <strong><?php echo e($errors->first('driverName')); ?></strong>
              </span>
              <?php endif; ?>
            </div>
          </div>

          <div class="form-group<?php echo e($errors->has('vehicleLicensePlate') ? ' has-error' : ''); ?>">
            <label for="vehicleLicensePlate" class="col-md-4 control-label">Vehicle License Plate:</label>

            <div class="col-md-6">
              <input id="vehicleLicensePlate" type="text" class="form-control" name="vehicleLicensePlate" value="<?php echo e($deliveryData->vehicleRegistry); ?>" required autofocus data-parsley-pattern="(^(?:[A-Z]{2}-\d{2}-\d{2})|(?:\d{2}-[A-Z]{2}-\d{2})|(?:\d{2}-\d{2}-[A-Z]{2})$)" max-lenght="25">

              <?php if($errors->has('vehicleLicensePlate')): ?>
              <span class="help-block">
                <strong><?php echo e($errors->first('vehicleLicensePlate')); ?></strong>
              </span>
              <?php endif; ?>
            </div>
          </div>

          <div class="form-group<?php echo e($errors->has('firm') ? ' has-error' : ''); ?>">
            <label for="firm" class="col-md-4 control-label">Firm Supplier:</label>

            <div class="col-md-6">
              <input id="firm" type="text" class="form-control" name="firm" value="<?php echo e($deliveryData->deFirmSupplier); ?>" required autofocus>

              <?php if($errors->has('firm')): ?>
              <span class="help-block">
                <strong><?php echo e($errors->first('firm')); ?></strong>
              </span>
              <?php endif; ?>
            </div>
          </div>


         
          <div class="form-group<?php echo e($errors->has('weight') ? ' has-error' : ''); ?>" >
            <label for="weight" class="col-md-4 control-label">Entry Weight (Kg):</label>

            <div class="col-md-6">
              <input type="number"  name="weight" required="" max="1000" min="100" placeholder="Kg" value="<?php echo e($deliveryData->entryWeight); ?>">

                                     

            <?php if($errors->has('weight')): ?>
            <span class="help-block">
              <strong><?php echo e($errors->first('weight')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
        </div>

          <div class="form-group<?php echo e($errors->has('exitweight') ? ' has-error' : ''); ?>" >
            <label for="exitweight" class="col-md-4 control-label">Exit Weight (Kg):</label>

            <div class="col-md-6">
              <input type="number"  name="exitweight"  max="<?php echo e($deliveryData->entryWeight); ?>" min="0" placeholder="Kg" value="<?php echo e($deliveryData->exitWeight); ?>">

                                     

            <?php if($errors->has('exitweight')): ?>
            <span class="help-block">
              <strong><?php echo e($errors->first('exitweight')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
        </div>


      
          <div class="form-group">
          <label for="image" class="col-md-4 control-label" >Image Upload:</label>
          <div class="col-md-6">
          <input type="file" class="form-control" />
            
          </div>
        </div>
         <div class="form-group<?php echo e($errors->has('deEntryTime') ? ' has-error' : ''); ?>">
                            <label for="deEntryTime" class="col-md-4 control-label">Entry Time:</label>

                            <div class="col-md-6">
                                <input id="deEntryTime" type="date" class="form-control" name="deEntryTime" value= <?php echo e($deliveryData->deEntryTime); ?> disabled="" autofocus>

                                <?php if($errors->has('deEntryTime')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('deEntryTime')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                        
                        <div class="form-group<?php echo e($errors->has('deExitTime') ? ' has-error' : ''); ?>">
                            <label for="deExitTime" class="col-md-4 control-label">Exit Time:</label>

                            <div class="col-md-6">
                                <input id="deExitTime" type="date" class="form-control" name="deExitTime" value= <?php echo e($deliveryData->deExitTime); ?>  autofocus>

                                <?php if($errors->has('deExitTime')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('deExitTime')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            
                        </div>

           
          </div>


  <div class="col-md-4" > 
    <div class="well">
      <dl class="dl-horizontal">
        <dt>Created At:</dt>
        <dd><?php echo e(date('M j, Y h:ia', strtotime($deliveryData->created_at))); ?></dd>
      </dl>

      <dl class="dl-horizontal">
        <dt>Last Updated:</dt>
        <dd><?php echo e(date('M j, Y h:ia', strtotime($deliveryData->updated_at))); ?></dd>
      </dl>
      <hr>
      <div class="row">
      <div class="col-sm-6">
        <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-floppy-save"></span> Save Changes</button>
           
        </div>
        <div class="col-sm-6">

        <a class="btn btn-danger btn-block"  href="<?php echo e(route('delivers.show', $deliveryData->idDeliver)); ?>"><span class="glyphicon glyphicon-floppy-save"></span> Cancel</a> </div>
        
      </div>

    </div>
    </div>
    
<?php echo Form::close(); ?>


              </div><!-- end of .row (form) -->
     
 


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>