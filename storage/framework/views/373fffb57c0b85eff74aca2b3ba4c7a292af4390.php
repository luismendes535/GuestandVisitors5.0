            
   
    

    <?php $__env->startSection('title', '| Edit Delivery Item'); ?>

    <?php $__env->startSection('assets'); ?>
    <link rel='stylesheet' href='/css/parsley.css' />
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    
        <div class="row">

           
                    <div class="panel-heading"><span class="glyphicon glyphicon-blackboard"></span> Edit Item</div>
                    <div class="col-md-8">

                         <form  class="form-horizontal"  role="form" method="POST" action="<?php echo e(route('deliveryType.update', '$item->idDeliverType')); ?>" data-parsley-validate="">
                         
                            <?php echo e(csrf_field()); ?>

              <div class="form-group<?php echo e($errors->has('cargo') ? ' has-error' : ''); ?>">
              <label for="cargo" class="col-md-4 control-label">Cargo Details:</label>

              <div class="col-md-6">
                <input id="cargo" type="text" class="form-control" name="cargo" value="<?php echo e($item->materialDetails); ?>" required autofocus>

                <?php if($errors->has('cargo')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('cargo')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>
            
            <div class="form-group<?php echo e($errors->has('quantity') ? ' has-error' : ''); ?>" >
              <label for="quantity" class="col-md-4 control-label">Quantity (per unity):</label>

              <div class="col-md-6">
                <input type="number" name="quantity" value="<?php echo e($item->quantitity); ?>" required="" max="20000" min="100" placeholder="">

                                          

              <?php if($errors->has('quantity')): ?>
              <span class="help-block">
                <strong><?php echo e($errors->first('quantity')); ?></strong>
              </span>
              <?php endif; ?>
            </div>
          </div>

            <div class="form-group<?php echo e($errors->has('danger') ? ' has-error' : ''); ?>">
              <label for="danger" class="col-md-4 control-label">Dangerous Cargo:</label>

              <div class="col-md-6" >
                <p>

                  <label class="radio-inline"><input type="radio" name="danger" value="Yes">Yes</label>
                  <label class="radio-inline"><input type="radio" name="danger" value="No">No</label>

                  <?php if($errors->has('danger')): ?>
                  <span class="help-block">
                    <strong><?php echo e($errors->first('danger')); ?></strong>
                  </span>
                  <?php endif; ?>
                </p>
              </div>
            </div>

            <div class="form-group<?php echo e($errors->has('sensitivity') ? ' has-error' : ''); ?>">
              <label for="sensitivity" class="col-md-4 control-label"> Sensitivity Level (select one):</label>

              <div class="col-md-6">
                <select class="form-control" id="sensitivity" name="sensitivity" >
                  <option value="Low">Low</option>
                  <option value="Medium">Medium</option>
                  <option value="High">High</option>

                </select>                               

                <?php if($errors->has('sensitivity')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('sensitivity')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>
     </div>
                       <div class="col-md-4" > 
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Created At:</dt>
          <dd><?php echo e(date('M j, Y h:ia', strtotime($item->created_at))); ?></dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Last Updated:</dt>
          <dd><?php echo e(date('M j, Y h:ia', strtotime($item->updated_at))); ?></dd>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
            <?php echo Html::linkRoute('delivers.show', 'Cancel', array($item->deliver_idDeliver), array('class' => 'btn btn-danger btn-block')); ?>

          </div>
          <div class="col-sm-6">
            <?php echo e(Form::submit('Save Changes', ['class' => 'btn btn-default btn-block'])); ?>

          </div>
        </div>

      </div>
      </div>
            </form>
            </div>
        
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>