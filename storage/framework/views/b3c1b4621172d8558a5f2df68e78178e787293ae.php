  
<?php $__env->startSection('content'); ?>
   <h1><?php echo e($title); ?></h1>
   <?php if(Session::has('message')): ?>
       <p class="alert alert-danger"><?php echo e(Session::get('message')); ?></p>
   <?php endif; ?>
   <hr>
   <div class="text-right">
   <a class="button btn-primary btn-lg" href="<?php echo e(route('empleados.create')); ?>">Nuevo Empleado</a>
   </div>
   <br>
   <div class="table-responsive">
   <table class="table table-striped table-bordered">
      <thead class="thead bg-info">
          <th scope="col">#</th>
          <th scope="col">Primer Nombre</th>
          <th scope="col">Primer Apellido</th>
          <th scope="col">Cedula</th>
          <th scope="col">Editar</th>
      </thead>
      <tbody class="table-info">
      <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($empleado->id); ?></td>
                <td><?php echo e($empleado->p_nombre); ?></td>
                <td><?php echo e($empleado->p_apellido); ?></td>
                <td><?php echo e($empleado->cedula); ?></td>
                <td class="text-center" >
                    <div class="btn-group">
                        <a class="button btn-success btn-sm" href="<?php echo e(route('empleados.show',$empleado)); ?>"><i class="fa fa-eye"></i></a>
                        <a class="button btn-secondary btn-sm" href="<?php echo e(route('empleados.edit',$empleado)); ?>"><i class="fa fa-pen"></i></a>
<!--                        <button class="btn btn-danger btn-sm" data-empid="" data-toggle="modal" data-target="#miModal"><i class="fa fa-trash"></i></button>-->
                        <form action="<?php echo e(route('empleados.destroy',$empleado)); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

                            <button class="btn btn-danger btn-sm " type="submit"><i class="fa fa-trash"></i> </button>
                        </form>
                    </div>
                </td>
            </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    
    <a class="btn btn-dark btn-sm" href="<?php echo e(route('empleados.generatepdf')); ?>" > Descargar pdf <i class="fa fa-file"></i></a>
    
    
    <br>
    <?php echo e($empleados->render()); ?>

   </div> 
   
   
<?php $__env->stopSection(); ?>




  

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>