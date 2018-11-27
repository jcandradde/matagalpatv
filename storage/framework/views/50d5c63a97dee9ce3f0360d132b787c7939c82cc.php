<?php $__env->startSection('content'); ?>
    <h1>Editar empleado</h1>
    <hr>

    <?php if($errors->any()): ?>
        <p>Por favor corrige los errores de los campos siguientes: </p>
    <?php endif; ?>

    <form method="post" action="<?php echo e(URL('empleados/crear')); ?>">
     <?php echo e(csrf_field()); ?>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputPN">Primer Nombre</label>
          <input type="text" class="form-control" name="p_nombre" id="inputPN" placeholder="Primer Nombre" value="<?php echo e(old('p_nombre')); ?>">
          <?php if($errors->has('p_nombre')): ?>
              <div class="alert alert-danger">
                  <p><?php echo e($errors->first('p_nombre')); ?></p>
              </div>
          <?php endif; ?>
        </div>
        <div class="form-group col-md-6">
          <label for="inputSN">Segundo Nombre</label>
          <input type="text" class="form-control" name="s_nombre" id="inputSN" placeholder="Segundo Nombre" value="<?php echo e(old('s_nombre')); ?>">
          <?php if($errors->has('s_nombre')): ?>
              <div class="alert alert-danger">
                  <p><?php echo e($errors->first('s_nombre')); ?></p>
              </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputPA">Primer Apellido</label>
          <input type="text" class="form-control" name="p_apellido" id="inputPA" placeholder="Primer Apellido" value="<?php echo e(old('p_apellido')); ?>">
          <?php if($errors->has('p_apellido')): ?>
              <div class="alert alert-danger">
                  <p><?php echo e($errors->first('p_apellido')); ?></p>
              </div>
          <?php endif; ?>
        </div>
        <div class="form-group col-md-6">
          <label for="inputSA">Segundo Apellido</label>
          <input type="text" class="form-control" name="s_apellido" id="inputSA" placeholder="Segundo Apellido" value="<?php echo e(old('s_apellido')); ?>">
          <?php if($errors->has('s_apellido')): ?>
              <div class="alert alert-danger">
                  <p><?php echo e($errors->first('s_apellido')); ?></p>
              </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputCed">Cédula</label>
          <input type="text" class="form-control" name="cedula" id="inputCed" placeholder="Cédula" value="<?php echo e(old('cedula')); ?>">
          <?php if($errors->has('cedula')): ?>
              <div class="alert alert-danger">
                  <p><?php echo e($errors->first('cedula')); ?></p>
              </div>
          <?php endif; ?>
        </div>
        <div class="form-group col-md-4">
          <label for="inputTel">Teléfono</label>
          <input type="text" class="form-control" name="telefono" id="inputTel" placeholder="Teléfono" value="<?php echo e(old('telefono')); ?>">
          <?php if($errors->has('telefono')): ?>
              <div class="alert alert-danger">
                  <p><?php echo e($errors->first('telefono')); ?></p>
              </div>
          <?php endif; ?>
        </div>
        <div class="form-group col-md-4">
          <label for="inputFNac">Fecha de Nacimiento</label>
          <input type="date" class="form-control" name="fecha_nac" id="inputFNac" placeholder="Fecha de Nacimiento" value="<?php echo e(old('fecha_nac')); ?>">
          <?php if($errors->has('fecha_nac')): ?>
              <div class="alert alert-danger">
                  <p><?php echo e($errors->first('fecha_nac')); ?></p>
              </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="form-row">
         <div class="form-group col-md-6">
             <label for="inputEmail">Correo Electrónico</label>
             <input type="email" class="form-control" name="correo" id="inputEmail" placeholder="Correo Electrónico" value="<?php echo e(old('correo')); ?>">
             <?php if($errors->has('correo')): ?>
              <div class="alert alert-danger">
                  <p><?php echo e($errors->first('correo')); ?></p>
              </div>
          <?php endif; ?>
         </div>
         <div class="form-group col-md-4">
            <label for="inputINNS">Número INNS</label>
            <input type="text" class="form-control" name="inss" id="inputINNS" placeholder="Cod. INNS" value="<?php echo e(old('inss')); ?>">
            <?php if($errors->has('inss')): ?>
              <div class="alert alert-danger">
                  <p><?php echo e($errors->first('inss')); ?></p>
              </div>
          <?php endif; ?>
         </div>
        <div class="form-group col-md-2">
            <label>Sexo</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="radioM" value="M" <?php echo e(old('sexo')==='M' ? 'checked' : ''); ?>>
                <label class="form-check-label" for="radioM">Masculino</label>
            </div>
            <div class="form-check">
                 <input class="form-check-input" type="radio" name="sexo" id="radioF" value="F" <?php echo e(old('sexo')==='F' ? 'checked' : ''); ?>>
                 <label class="form-check-label" for="radioF">Femenino</label>
            </div>
            <?php if($errors->has('sexo')): ?>
              <div class="alert alert-danger">
                  <p><?php echo e($errors->first('sexo')); ?></p>
              </div>
            <?php endif; ?>
        </div>
      </div>
      <br>
      <br>
      <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar nuevo</button>
    </form>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>