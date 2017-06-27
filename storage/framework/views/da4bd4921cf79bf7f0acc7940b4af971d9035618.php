<?php $__env->startComponent('mail::message'); ?>
# Bem-vindo à Nanium!

Você tem uma reunião marcada para : <?php echo e(date('M j, Y', strtotime($mailInfo->meetStartDate))); ?>.

Tópico: <?php echo e($mailInfo->meetingName); ?> :

Sala: <?php echo e($mailInfo->room); ?><br>
Motivo: <?php echo e($mailInfo->visitReason); ?>


O seu código de barras:<br>
<?php $__env->startComponent('mail::panel'); ?>

<?php echo DNS1D::getBarcodeHTML($mailInfo->meetStartDate, 'C128'); ?>

<?php echo $__env->renderComponent(); ?>


<?php $__env->startComponent('mail::button',['url' => 'www.nanium.pt', 'color' => 'green']); ?>
IMPRIMIR
<?php echo $__env->renderComponent(); ?>


Obrigado,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
