<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="com-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Welome to my blog !!!</h1>
                <p class="lead">Thank you very much for visiting. This is my test tgetgtrewqftgeertgregr website built with laravel.Please read my Popular post.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium adipisci aperiam deserunt esse, eum, ipsum iusto labore modi quam quasi reiciendis suscipit voluptates. Amet commodi ex natus placeat sint!</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium adipisci aperiam deserunt esse, eum, ipsum iusto labore modi quam quasi reiciendis suscipit voluptates. Amet commodi ex natus placeat sint!</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium adipisci aperiam deserunt esse, eum, ipsum iusto labore modi quam quasi reiciendis suscipit voluptates. Amet commodi ex natus placeat sint!</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium adipisci aperiam deserunt esse, eum, ipsum iusto labore modi quam quasi reiciendis suscipit voluptates. Amet commodi ex natus placeat sint!</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class=" col-md-3" style="color: red">
            <h2>Sidebar</h2>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>