<?php $__env->startSection('content'); ?>

<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Primer Nombre</th>
                <th>Primer Apellido</th>
                <th>Cedula</th>
                <th>Fecha de Nacimiento</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($empleado->id); ?></td>
                    <td><?php echo e($empleado->p_nombre); ?></td>
                    <td><?php echo e($empleado->p_apellido); ?></td>
                    <td><?php echo e($empleado->cedula); ?></td>
                    <td><?php echo e($empleado->fecha_nacimiento); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>