<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 7/29/2018
 * Time: 5:28 AM
 */
?>


<?php $__env->startSection('title','All Posts'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-9">
            <h1>All posts</h1>
        </div>
        <div class="col-md-2">
            <a href="<?php echo e(url('posts/create')); ?>" class="btn btn-block btn-lg btn-primary">Create new post</a>
        </div>

    </div>
    <div class="row">
        <div class="col-md 12">
            <hr>
        </div>
    </div>


    <div class="row">
        <div class="col-md 12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Title</th>
                <th>Post Body</th>
                <th>Created at</th>
                <th></th>
                </thead>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                    <td><?php echo e($categorie->id); ?></td>
                    <td><?php echo e($categorie->category_name); ?></td>

                    <td><?php echo e($categorie->created_at); ?></td>
                    <td>
                        <a href="" class="btn btn-default">View</a>
                        <a href="" class="btn btn-primary">Edit</a>
                    </td>
                    </tbody>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>



        </div>
    </div>

    <center>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <div class="text-center">
                    <?php echo $categories->links(); ?> 
                </div>
            </div>
        </div>

    </center>







<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>