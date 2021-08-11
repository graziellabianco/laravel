<?php $__env->startSection('title','Usuarios'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Meus Usuários
    <a href="<?php echo e(route('usuarios.create')); ?>" class="btn btn-sm btn-success">Novo Usuário</a>

</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">

        <table class="table table-hover">
            <thead>
                <tr>

                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Açoes</th>

                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </thead>

            <tbody>
                <tr>

                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>

                    <td>
                        <a href="<?php echo e(route('usuarios.edit',['usuario' => $user->id])); ?>" class="btn btn-sm btn-info">Editar</a>
                        <?php if($loggedId !== intval($user->id)): ?>
                        <form class="d-inline" action="<?php echo e(route('usuarios.destroy', ['usuario' => $user->id])); ?>" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                        <?php endif; ?>
                    </td>



                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            <tbody>
        </table>
    </div>

</div>

<?php echo e($users->links()); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Estudos\B7Web\Laravel\painel\resources\views/admin/usuarios/index.blade.php ENDPATH**/ ?>