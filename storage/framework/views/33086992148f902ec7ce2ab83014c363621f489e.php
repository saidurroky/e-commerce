<table border="1" style="background-color: red; color: white;">
    <tr>
        <th>Name</th>
        <td>Email</td>
    </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <th><?php echo e($user->name); ?></th>
        <td><?php echo e($user->email); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>