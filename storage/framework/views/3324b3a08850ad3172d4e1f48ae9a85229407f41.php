

<?php $__env->startSection('title', '| All Meetings'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-10">
            <h1>All Meetings</h1>
        </div>

    <div class="col-md-2">
            <a href="<?php echo e(route('meetings.create')); ?>" class="btn btn-lg btn-block btn-primary btn-h1-spacing">  <span class="glyphicon glyphicon-plus"></span> New Meeting</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!-- end of .row -->

     <div class="table-responsive">

                <table class="table table-striped m-b-none" data-ride="datatables" id="table">
                    <thead>
                        <tr>  <th>#</th>
                         <th width="">Meeting Name</th>
                            <th width="">Visit Reason</th>
                           
                            <th width="">Status</th>
                            <th width="">Host</th>

                            <th width="">Start at</th>
                              
                               <th width="">Ended at</th>
                                <th width="">Visitor arrival at</th>
                        </tr>
                    </thead>

                    <tbody>
                     <?php $__currentLoopData = $meetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
                            <tr>
                            <th><?php echo e($meeting->idMeeting); ?></th>
                             <th><?php echo e($meeting->meetingName); ?></th>
                                <td><?php echo e($meeting->visitReason); ?></td>
                          
                                <td> <?php if($meeting->meetStatus === 1): ?> 
                                      <?php echo e('Scheduled'); ?>

                                    <?php elseif($meeting->meetStatus === 2): ?> 
                                        <?php echo e('Waiting Confirmation'); ?>

                                    
                                    <?php elseif($meeting->meetStatus === 3): ?> 
                                        <?php echo e('Canceled'); ?>

                                    
                                     <?php elseif($meeting->meetStatus === 4): ?> 
                                        <?php echo e('Finished'); ?>

                                     <?php endif; ?></td>
                                 
                                <td><?php echo e($meeting->meetIdHost); ?></td>
                         
                                <td><?php echo e(date('M j, Y', strtotime($meeting->meetStartDate))); ?></td>
                                 <td><?php echo e(date('M j, Y', strtotime($meeting->meetEndDate))); ?></td>
                                   <td><?php echo e(date('M j, Y', strtotime($meeting->entryTime))); ?></td>
                                <td>
                                <a href="<?php echo e(route('meetings.show', $meeting->idMeeting)); ?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-zoom-in"></span> View</a> 
                              
                                <a href="<?php echo e(route('sendEmail')); ?>" class="btn btn-default btn-sm"><i class="fa fa-mail-forward"></i> Check-In</a>
                                
                                </td>
                                
                        </tr>
               
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
            <div class="text-center">
                <?php echo $meetings->links();; ?>

            </div>
        
        </div>
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>