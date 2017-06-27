<?php $__env->startComponent('mail::message'); ?>
# Bem-vindo à Nanium!

Você tem uma reunião marcada para o dia **X** com a pessoa *Y*.

<?php $__env->startComponent('mail::button', ['url' => 'www.xvideos.com']); ?>
Confirmo que estarei presente! P.S. Não cliques.
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
