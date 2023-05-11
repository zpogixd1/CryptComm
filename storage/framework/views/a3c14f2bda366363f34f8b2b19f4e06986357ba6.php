

<?php $__env->startSection('title'); ?><?php echo e(__('app._profile')); ?>

 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php echo \Livewire\Livewire::styles(); ?>


<!-- Scripts -->
<script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3><?php echo e(__('app._profile')); ?></h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item"><?php echo e(__('app.profile.users')); ?></li>
		<li class="breadcrumb-item active"><?php echo e(__('app._profile')); ?></li>
	<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="edit-profile">
	        <div class="row">
	            <div class="col-xl-4">
	                
				<?php if(Laravel\Fortify\Features::canUpdateProfileInformation()): ?>
					<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-profile-information-form')->html();
} elseif ($_instance->childHasBeenRendered('sUyr6Jx')) {
    $componentId = $_instance->getRenderedChildComponentId('sUyr6Jx');
    $componentTag = $_instance->getRenderedChildComponentTagName('sUyr6Jx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sUyr6Jx');
} else {
    $response = \Livewire\Livewire::mount('profile.update-profile-information-form');
    $html = $response->html();
    $_instance->logRenderedChild('sUyr6Jx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
				<?php endif; ?>
	            </div>
	            <div class="col-xl-8">
					<?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords())): ?>
						<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-password-form')->html();
} elseif ($_instance->childHasBeenRendered('cm0BqrV')) {
    $componentId = $_instance->getRenderedChildComponentId('cm0BqrV');
    $componentTag = $_instance->getRenderedChildComponentTagName('cm0BqrV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cm0BqrV');
} else {
    $response = \Livewire\Livewire::mount('profile.update-password-form');
    $html = $response->html();
    $_instance->logRenderedChild('cm0BqrV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
					<?php endif; ?>
					
					<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form')->html();
} elseif ($_instance->childHasBeenRendered('LDmWjdu')) {
    $componentId = $_instance->getRenderedChildComponentId('LDmWjdu');
    $componentTag = $_instance->getRenderedChildComponentTagName('LDmWjdu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LDmWjdu');
} else {
    $response = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form');
    $html = $response->html();
    $_instance->logRenderedChild('LDmWjdu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
					
					<?php if(Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures()): ?>
						<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.delete-user-form')->html();
} elseif ($_instance->childHasBeenRendered('HnLXUpj')) {
    $componentId = $_instance->getRenderedChildComponentId('HnLXUpj');
    $componentTag = $_instance->getRenderedChildComponentTagName('HnLXUpj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HnLXUpj');
} else {
    $response = \Livewire\Livewire::mount('profile.delete-user-form');
    $html = $response->html();
    $_instance->logRenderedChild('HnLXUpj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
					<?php endif; ?>
	            </div>
	        </div>
	    </div>
	</div>

	<?php $__env->startPush('scripts'); ?>
	<?php echo \Livewire\Livewire::scripts(); ?>

	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/profile/index.blade.php ENDPATH**/ ?>