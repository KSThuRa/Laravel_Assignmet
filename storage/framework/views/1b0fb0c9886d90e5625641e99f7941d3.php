<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>


    

    <div class="container">
        <h2 class="my-4">Category List</h2>
        <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-success btn-sm mb-2">+Create</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($data->id); ?></td>
                        <td><?php echo e($data->name); ?></td>
                        <td>
                            <?php if($data->image): ?>
                            <img src="<?php echo e(asset('categoryImages/' .  $data->image)); ?>" alt="<?php echo e($data->name); ?>" style="width:50; height:50px;">
                            <?php else: ?>
                                -
                            <?php endif; ?>
                        </td>
                        <td class="d-flex">
                            <a href="<?php echo e(route('categories.edit', ['id' => $data->id])); ?>"
                                class="btn btn-secondary btn-sm me-2">
                                Edit
                            </a>

                            <form action="<?php echo e(route('categories.delete', [$data->id])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\Users\LENOVO\Desktop\tpp-batch12\resources\views/category/index.blade.php ENDPATH**/ ?>