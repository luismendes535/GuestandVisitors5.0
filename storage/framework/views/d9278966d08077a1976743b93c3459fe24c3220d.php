

	<?php $__env->startSection('title', '| Deliver Check-out'); ?>

	<?php $__env->startSection('assets'); ?>
	<link rel='stylesheet' href='/css/parsley.css' />
	<?php $__env->stopSection(); ?>

	<?php $__env->startSection('content'); ?>

	<div class="row">

		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Deliver Check-out</div>
				<div class="panel-body"> 
					<?php echo Form::model($deliver, array('method'=>'PATCH','class'=>'form-horizontal', 'role'=> 'form', 'route' => array('delivers.update', $deliver->idDeliver))); ?>


						<div class="form-group<?php echo e($errors->has('driverName') ? ' has-error' : ''); ?>">
							<label for="driverName" class="col-md-4 control-label">Driver Name:</label>

							<div class="col-md-6">
								<input id="driverName" type="text" class="form-control" name="driverName"  value="<?php echo e($deliver->deDriverName); ?>">

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
								<input id="vehicleLicensePlate" type="text" class="form-control" name="vehicleLicensePlate" value="<?php echo e($deliver->vehicleRegistry); ?>"  data-parsley-pattern="(^(?:[A-Z]{2}-\d{2}-\d{2})|(?:\d{2}-[A-Z]{2}-\d{2})|(?:\d{2}-\d{2}-[A-Z]{2})$)" max-lenght="25">

								<?php if($errors->has('vehicleLicensePlate')): ?>
								<span class="help-block">
									<strong><?php echo e($errors->first('vehicleLicensePlate')); ?></strong>
								</span>
								<?php endif; ?>
							</div>
						</div>

						<div class="form-group<?php echo e($errors->has('dropperName') ? ' has-error' : ''); ?>">
							<label for="firm" class="col-md-4 control-label">Firm Supplier:</label>

							<div class="col-md-6">
								<input id="firm" type="text" class="form-control" name="firm" value="<?php echo e($deliver->deFirmSupplier); ?>">

								<?php if($errors->has('firm')): ?>
								<span class="help-block">
									<strong><?php echo e($errors->first('firm')); ?></strong>
								</span>
								<?php endif; ?>
							</div>
						</div>


						<div class="form-group<?php echo e($errors->has('cargo') ? ' has-error' : ''); ?>">
							<label for="cargo" class="col-md-4 control-label">Cargo Details:</label>

							<div class="col-md-6">
								<input id="cargo" type="text" class="form-control" name="cargo" value="<?php echo e($deliver->deMaterialDetails); ?>">

								<?php if($errors->has('cargo')): ?>
								<span class="help-block">
									<strong><?php echo e($errors->first('cargo')); ?></strong>
								</span>
								<?php endif; ?>
							</div>
						</div>

						<div class="form-group<?php echo e($errors->has('danger') ? ' has-error' : ''); ?>">
							<label for="danger" class="col-md-4 control-label">Dangerous Cargo:</label>

							<div class="col-md-6" >
								<p>

									<label class="radio-inline"><input type="radio" name="danger"><?php echo e($deliver->deDangerousGood); ?></label>									

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
								<select class="form-control" id="sensitivity">
									<option value=""><?php echo e($deliver->deSensitiveLevel); ?></option>
									

								</select>                               

								<?php if($errors->has('sensitivity')): ?>
								<span class="help-block">
									<strong><?php echo e($errors->first('sensitivity')); ?></strong>
								</span>
								<?php endif; ?>
							</div>
						</div>
						<div class="form-group<?php echo e($errors->has('weight') ? ' has-error' : ''); ?>" >
							<label for="weight" class="col-md-4 control-label">Entry Weight (Kg):</label>

							<div class="col-md-6">
								<input type="number"  name="weight" required="" max="1000" min="100" placeholder="Kg" value="<?php echo e($deliver->entryWeight); ?>">

							</select>                               

							<?php if($errors->has('weight')): ?>
							<span class="help-block">
								<strong><?php echo e($errors->first('weight')); ?></strong>
							</span>
							<?php endif; ?>
						</div>
					</div>

						<div class="form-group<?php echo e($errors->has('quantity') ? ' has-error' : ''); ?>" >
							<label for="quantity" class="col-md-4 control-label">Quantity (per unity):</label>

							<div class="col-md-6">
								<input type="number" name="quantity" required="" max="1000" min="100" placeholder="" value="<?php echo e($deliver->deQuantity); ?>">

							</select>                               

							<?php if($errors->has('quantity')): ?>
							<span class="help-block">
								<strong><?php echo e($errors->first('quantity')); ?></strong>
							</span>
							<?php endif; ?>
						</div>
					</div>
									
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4" >
							<button type="submit" class="btn btn-default btn-lg btn-block">
								Check-out
							</button>
							<a href="<?php echo e(route('drops.index')); ?>" class="btn btn-default btn-lg btn-block">Cancel</a>
						</div>
					</div>
				<?php echo Form::close(); ?>

			</div>
		</div>
	</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/java				script" src="/js/parsley.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>