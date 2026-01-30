<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['heading', 'model', 'param' => []]));

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

foreach (array_filter((['heading', 'model', 'param' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>



<div class="flex flex-col justify-start items-center">
    <div class="w-full flex justify-between items-center flex-col sm:flex-row space-y-2">
        <h1 class="text-2xl font-bold text-primaryColor"><?php echo e(ucfirst($heading)); ?></h1>
        <a href="<?php echo e(route('dashboard.' . $model . '.create', $param)); ?>"
            class="px-3 py-1 bg-primaryColor text-white rounded">Add
            <?php echo e(ucfirst($heading)); ?></a>
    </div>
    <div class="w-full">
        <div class="overflow-auto rounded-lg shadow mt-4">
            <table class="w-full">
                <?php echo e($slot); ?>

            </table>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/components/structure.blade.php ENDPATH**/ ?>