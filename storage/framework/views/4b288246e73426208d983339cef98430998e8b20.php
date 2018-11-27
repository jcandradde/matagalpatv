<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

<h1>Lista de empleados</h1>
<hr>

<table class="table">
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
