

<?php $__env->startSection('title', '| All Drops'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-10">
			<h1>All Drops</h1>
		</div>

	<div class="col-md-2">
			<a href="<?php echo e(route('drops.create')); ?>" class="btn btn-lg btn-block btn-primary btn-h1-spacing">  <span class="glyphicon glyphicon-plus"></span> New Drop</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->

	 <div class="table-responsive">

                <table class="table table-striped m-b-none" data-ride="datatables" id="table">
                    <thead>
                        <tr>
                            <th width="">Company Name</th>
                            <th width="">Dropper Name</th>
                            <th width="">Receiver Name</th>
                            <th width="">Drop Item</th>
                            <th width="">Dropped at</th>
                            <th width="">Received at</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $drops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($drop->dropperCompanyName); ?></td>
                                <td><?php echo e($drop->dropperName); ?></td>
                                <td><?php echo e($drop->dropDescr); ?></td>
                                <td><?php echo e($drop->dropItem); ?></td>
                                <td><?php echo e(date('M j, Y', strtotime($drop->droppedWhen))); ?></td>
                                <td><?php echo e($drop->dropReceivedDate ? date('M j, Y', strtotime($drop->dropReceivedDate)) : ''); ?></td>
                                <td><a href="<?php echo e(route('drops.show',$drop->idDrop)); ?>" class="btn btn-default btn-sm">Check-out</a></td>
							    
						</tr>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</tbody>
			</table>

			<div class="text-center">
				<?php echo $drops->links();; ?>

			</div>
		</div>
	
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>