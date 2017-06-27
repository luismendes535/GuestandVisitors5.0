

<?php $__env->startSection('title', '| View Deliver'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8">
			<h3 class="lead">Firm Supplier: <?php echo $deliver->deFirmSupplier; ?></h3>
			
			
			<hr>
			 <div class="visitors">
        <p class="lead">Content: 
        <?php $__currentLoopData = $deliver->type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span class="label label-default"><?php echo e($typeItem->materialDetails); ?></span>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </p>
      </div>
      <hr>
			<p class="lead">Entry Weight: <?php echo e($deliver->entryWeight); ?></p>
	
			<hr>
<p class="lead">Exit Weight: <?php echo e($deliver->exitWeight); ?></p>
				<hr>
     

			<div id="backend-comments" style="margin-top: 50px;">
				<h3>Items <small><?php echo e($deliver->type()->count()); ?> total</small></h3>

				<table class="table">
					<thead>
						<tr>
							<th>Driver Name</th>
							<th>Vehicle License</th>
							<th>Danger</th>
							<th>Caution</th>
							<th>Quantitity</th>
							<th>Entry Time</th>
							<th>Exit Time</th>
						
							<th width="70px"></th>
						</tr>
					</thead>

					<tbody>
						<?php $__currentLoopData = $deliver->type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $delivers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
						<tr>
							<td><?php echo e($deliver->deDriverName); ?></td>
							<td><?php echo e($deliver->vehicleRegistry); ?></td>
					
							<td>
								<?php if($delivers->dangerousGood === 1): ?> 
                                      <?php echo e('Danger'); ?>

                                    <?php elseif($delivers->dangerousGood === 0): ?> 
                                        <?php echo e('Not Danger'); ?>

                                    
                                     <?php endif; ?>

							</td>
									<td>
									<?php if($delivers->sensitiveLevel === 1): ?>
									<?php echo e('Low'); ?>

									<?php elseif($delivers->sensitiveLevel === 2): ?>
									<?php echo e('Medium'); ?>

									<?php elseif($delivers->sensitiveLevel === 3): ?>
									 <?php echo e('High'); ?>

									<?php endif; ?>
									</td>
							<th><?php echo e($delivers->quantitity); ?></th>
							<th><?php echo e($deliver->deEntryTime); ?></th>
							<th><?php echo e($deliver->deExitTime); ?></th>
							
							<td>
								<a href="<?php echo e(route('deliveryType.edit', $delivers->idDeliverType)); ?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="<?php echo e(route('deliveryType.destroy', $delivers->idDeliverType)); ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
						</tr>
					
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>

		</div>

		<div class="col-md-4">
			<div class="well">
				

				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p><?php echo e(date('M j, Y h:ia', strtotime($deliver->created_at))); ?></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p><?php echo e(date('M j, Y h:ia', strtotime($deliver->updated_at))); ?></p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<?php echo Html::linkRoute('delivers.edit', 'Edit', array($deliver->idDeliver), array('class' => 'btn btn-primary btn-block')); ?>

					</div>
					<div class="col-sm-6">
						<?php echo Form::open(['route' => ['delivers.destroy', $deliver->idDeliver], 'method' => 'DELETE']); ?>


						<?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-block']); ?>


						<?php echo Form::close(); ?>

					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<?php echo e(Html::linkRoute('delivers.index', '<< See All Deliveries', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing'])); ?>

					</div>
				</div>

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>