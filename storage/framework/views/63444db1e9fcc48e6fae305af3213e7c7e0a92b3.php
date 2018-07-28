<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 7/27/2018
 * Time: 3:09 PM
 */
?>



<?php $__env->startSection('title','create new posts'); ?>




<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" >
            <h1 style="text-align: center">Create A New Post</h1>
            <hr>
            <?php echo Form::open(['route' => 'posts.store','data-parsley-validate'=>'']); ?>

                <label>Title: </label>
                <input name="title" type="text" class="form-control" required="">

                <label>Post Body: </label>
                <textarea name="body" class="form-control" rows="8" required=""></textarea>

                <input type="submit" class="btn btn-success form-control" value="Create Post" style="margin-top: 20px">
            <?php echo Form::close(); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>