@edelivertends('main')

<?php $__env->startSection('title', '| All Delivers'); ?>

<?php $__env->startSection('content'); ?>

		<div class="row">
		<div class="col-md-10">
			<h1>All Deliveries</h1>
		</div>

	<div class="col-md-2">
			<a href="<?php echo e(route('delivers.create')); ?>" class="btn btn-lg btn-block btn-primary btn-h1-spacing"> <span class="glyphicon glyphicon-plus"></span> New Deliver </a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->

<div class="row"   >
		<div class="table-responsive" ng-app="deliverApp" ng-controller="mainController" >
			<table class="table table-striped m-b-none" data-ride="datatables" id="table">
				<thead>
					<th>#</th>
					<th>Firm</th>
					<th>Vehicle</th>
					<th>Driver</th>
					<th>Delivered At</th>
					<th>Finished At</th>
					<th></th>
				</thead>

				<tbody  >
				
					
					<?php echo e(delivers); ?>

					
						<tr ng-repeat="deliver in delivers">
							<td><?php echo e(deliver.idDeliver); ?></td>
								<td><?php echo e(deliver.deFirmSupplier); ?></td>
									<td><?php echo e(deliver.vehicleRegistry); ?></td>
										<td><?php echo e(deliver.deDriverName); ?></td>
							<td><?php echo e(date('M j, Y', strtotime(deliver.deEntryTime))); ?></td>
							<td><?php echo e(deliver.deEdeliveritTime ? date('M j, Y', strtotime(deliver.deEdeliveritTime)) : ''); ?></td>
							<td>
								<a href="<?php echo e(route('delivers.show', deliver.idDeliver)); ?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-zoom-in"></span>View</a>
							<a  href="#" id="checkOut" ng-click="submitCheckOut(deliver.idDeliver)" class="btn btn-default btn-sm"  ><span class="glyphicon glyphicon-check"></span> Check-out</a>
						
						
						
				
							 </td>
				

						</tr>

					

				</tbody>
			</table>
			

			<div class="tedelivert-center">
				<?php echo $delivers->links();; ?>

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>