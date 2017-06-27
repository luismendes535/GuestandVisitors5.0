

	<?php $__env->startSection('title', '| Create New Deliver'); ?>

	<?php $__env->startSection('assets'); ?>
	<link rel='stylesheet' href='/css/parsley.css' />
	<?php $__env->stopSection(); ?>

	<?php $__env->startSection('content'); ?>

	<div class="row">

		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><span class="glyphicon glyphicon-list-alt"></span> Create Delivery</div>
				<div class="panel-body"> 
					<form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('delivers.store')); ?>" data-parsley-validate="">
						<?php echo e(csrf_field()); ?>


						<div class="form-group<?php echo e($errors->has('driverName') ? ' has-error' : ''); ?>">
							<label for="driverName" class="col-md-4 control-label">Driver Name:</label>

							<div class="col-md-6">
								<input id="driverName" type="text" class="form-control" name="driverName" value="<?php echo e(old('driverName')); ?>" required autofocus>

								<?php if($errors->has('driverName')): ?>
								<span class="help-block">
									<strong><?php echo e($errors->first('driverName')); ?></strong>
								</span>
								<?php endif; ?>
							</div>
						</div>
						<div class="form-group<?php echo e($errors->has('driverName') ? ' has-error' : ''); ?>">
							<label for="driverIDType" class="col-md-4 control-label">Identification Card Type:</label>

							<div class="col-md-6">
								<select class="form-control" id="driverIDType" name="driverIDType">
									<option value="1">Passport</option>
									<option value="2">Citizen Card</option>
									<option value="3">Driver License</option>

								</select>

								<?php if($errors->has('driverIDType')): ?>
								<span class="help-block">
									<strong><?php echo e($errors->first('driverIDType')); ?></strong>
								</span>
								<?php endif; ?>
							</div>
						</div>

						<div class="form-group<?php echo e($errors->has('driverName') ? ' has-error' : ''); ?>">
							<label for="driverID" class="col-md-4 control-label">Driver ID Number:</label>

							<div class="col-md-6">
								<input id="driverID" type="text" class="form-control" name="driverID" value="<?php echo e(old('driverName')); ?>" required autofocus>

								<?php if($errors->has('driverID')): ?>
								<span class="help-block">
									<strong><?php echo e($errors->first('driverID')); ?></strong>
								</span>
								<?php endif; ?>
							</div>
						</div>

						<div class="form-group<?php echo e($errors->has('vehicleLicensePlate') ? ' has-error' : ''); ?>">
							<label for="vehicleLicensePlate" class="col-md-4 control-label">Vehicle License Plate:</label>

							<div class="col-md-6">
								<input id="vehicleLicensePlate" type="text" class="form-control" name="vehicleLicensePlate" value="<?php echo e(old('vehicleLicensePlate')); ?>" required autofocus data-parsley-pattern="(^(?:[A-Z]{2}-\d{2}-\d{2})|(?:\d{2}-[A-Z]{2}-\d{2})|(?:\d{2}-\d{2}-[A-Z]{2})$)" max-lenght="25">

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
								<input id="firm" type="text" class="form-control" name="firm" value="<?php echo e(old('firm')); ?>" required autofocus>

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
								<input id="cargo" type="text" class="form-control" name="cargo" value="<?php echo e(old('cargo')); ?>" required autofocus>

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

									<label class="radio-inline"><input type="radio" name="danger" value="1">Yes</label>
									<label class="radio-inline"><input type="radio" name="danger" value="0">No</label>

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
								<select class="form-control" id="sensitivity" name="sensitivity">
									<option value="1">Low</option>
									<option value="2">Medium</option>
									<option value="3">High</option>

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
								<input type="number"  name="weight" max="12000" min="10" placeholder="Kg" data-parsley-pattern="/^\d{2,3} ?kg$/">

							                               

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
								<input type="number" name="quantity" required="" max="1000" min="100" placeholder="">

							                            

							<?php if($errors->has('quantity')): ?>
							<span class="help-block">
								<strong><?php echo e($errors->first('quantity')); ?></strong>
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
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4" >
							<button type="submit" class="btn btn-default">
								Register
							</button>
							<a href="<?php echo e(route('delivers.index')); ?>" class="btn btn-default">Cancel</a>
						</div>
					</div>
				</form>



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