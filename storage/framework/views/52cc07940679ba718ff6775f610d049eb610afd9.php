<?php $__env->startComponent('mail::message'); ?>
# Bem-vindo à Nanium!

Você tem uma reunião marcada para o dia <?php echo e($mailInfo->meetStartDate); ?>.

Reunião <?php echo e($mailInfo->meetingName); ?> :

Sala: <?php echo e($mailInfo->room); ?><br>
Motivo: <?php echo e($mailInfo->visitReason); ?>


<?php $__env->startComponent('mail::panel'); ?>
O seu código de barras:<br>

<?php echo DNS1D::getBarcodeHTML($mailInfo->meetStartDate, 'C128'); ?>


<?php echo $__env->renderComponent(); ?>


Obrigado,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
