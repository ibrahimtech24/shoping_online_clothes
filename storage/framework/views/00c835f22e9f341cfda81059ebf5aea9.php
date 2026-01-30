<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['heading', 'type' => '', 'action' => '']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['heading', 'type' => '', 'action' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>


<form action="<?php echo e($action); ?>" method="POST"
    <?php echo e($attributes->merge(['class' => 'lg:max-w-sm sm:max-w-auto mx-auto bg-greyColor border border-greyColor p-6 rounded flex flex-col items-center'])); ?>>
    <?php echo csrf_field(); ?>
    <?php if(!empty($type)): ?>
        <?php echo method_field($type); ?>
    <?php endif; ?>

    <h1 class="text-xl text-primaryColor font-bold self-center mb-2"><?php echo e($heading); ?></h1>
    <?php echo e($slot); ?>

</form>
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/components/form/form.blade.php ENDPATH**/ ?>