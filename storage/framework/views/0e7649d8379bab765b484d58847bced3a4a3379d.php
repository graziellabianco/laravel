<?php $__env->startSection('title','Configurações'); ?>

<?php $__env->startSection('content_header'); ?>
<h1> Configurações </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <form action="<?php echo e(route('configuracao.salvar')); ?>" method="POST">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>

            <div class="form-group row">
                <label>Título do Site</label>
                <input type="text" name="titulo" value="" class="form-control" />
            </div>
            <div class="form-group row">
                <label>Subtítulo do Site</label>
                <input type="text" name="subtitulo" value="" class="form-control" />
            </div>
            <div class="form-group row">
                <label>Email para Contato</label>
                <input type="text" name="email" value="" class="form-control" />
            </div>
            <div class="form-group row">
                <label>Cor do Fundo</label>
                <input type="color" name="corFundo" value="" class="form-control" />
            </div>
            <div class="form-group row">
                <label>Cor do Texto</label>
                <input type="color" name="corTexto" value="" class="form-control" />
            </div>
            <div class="row">
                <div class="form-group col-12 text-left mt-3">
                    <input type="submit" value="Salvar" class="btn btn-primary" />
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Estudos\B7Web\Laravel\painel\resources\views/admin/configuracoes/index.blade.php ENDPATH**/ ?>