<?php $__env->startSection('content'); ?>

<div class="card border-success " >
  <div class="card-header bg-dark text-center text-success"><h3><strong><?php echo e($empleado->p_nombre); ?> <?php echo e($empleado->s_nombre); ?> <?php echo e($empleado->p_apellido); ?> <?php echo e($empleado->s_apellido); ?></strong></h3></div>
  <div class="card-body">
    <h5 class="card-title text-center">Información de empleado</h5>
    <p class="card-text text-center">Id: <strong><?php echo e($empleado->id); ?></strong></p>
    <p class="card-text text-center">Correo Electrónico: <strong><?php echo e($empleado->correo_e); ?></strong></p>
    <p class="card-text text-center">Telefóno: <strong><?php echo e($empleado->telefono); ?></strong></p>
    <p class="card-text text-center">Fecha de Nacimiento: <strong><?php echo e($empleado->fecha_nacimiento); ?></strong></p>
    <p class="card-text text-center">Sexo: <strong><?php echo e($empleado->sexo === 'M' ? 'Masculino' : 'Femenino'); ?></strong></p>
    <p class="card-text text-center">Número INSS: <strong><?php echo e($empleado->num_inss); ?></strong></p>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>