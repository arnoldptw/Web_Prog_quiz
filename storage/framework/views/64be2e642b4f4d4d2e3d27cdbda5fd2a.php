

<?php $__env->startSection('title', 'EduFun - Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="text-center my-4">
    <!-- <h1>Welcome to EduFun</h1>
    <p class="lead">Learn IT Subjects for Free with EduFun!</p> -->
</div>

<div class="row">
    <div class="col-md-6">
        <div class="post-card">
            <!-- <img src="https://via.placeholder.com/150" alt="Machine Learning"> -->
            <div class="post-card-body">
                <h5 class="text-primary">Apa itu <span class="text-danger">Machine Learning?</span><br>Beserta Pengertian dan Cara Kerjanya</h5>
                <p class="text-muted">14 May 2024 by: Bia</p>
                <p>Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)…</p>
                <a href="#" class="btn read-more-btn">read more...</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="post-card">
            <!-- <img src="https://via.placeholder.com/150" alt="Human-Computer Interaction"> -->
            <div class="post-card-body">
                <h5 class="text-primary">HUMAN <span class="text-danger">COMPUTER</span> INTERACTION</h5>
                <p class="text-muted">14 May 2024 by: Sabrina</p>
                <p>Human-Computer Interaction atau HCI adalah studi tentang bagaimana manusia berinteraksi dengan…</p>
                <a href="#" class="btn read-more-btn">read more...</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\arnol\edufun\resources\views/home/index.blade.php ENDPATH**/ ?>