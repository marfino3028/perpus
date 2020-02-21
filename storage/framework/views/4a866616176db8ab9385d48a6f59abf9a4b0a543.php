 
 <?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      	<div class="row mb-2">
      	<div class="col-sm-6">
            <h1 class="m-0 text-dark">Home</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">UjiBasa</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
      </div>
      <div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-971452">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-971452" class="active">
					</li>
					<li data-slide-to="1" data-target="#carousel-971452">
					</li>
					<li data-slide-to="2" data-target="#carousel-971452">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="https://www.layoutit.com/img/sports-q-c-1600-500-1.jpg" />
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg" />
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg" />
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-971452" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-971452" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
	<br>
	<br>

	<div class="row">
		<div class="col-sm-6" class="video">
			<video controls="" width="900px">
				<source src="<?php echo e(asset('dist/video/video-inggris.mp4')); ?>" type="video/mp4">
			</video>
		</div>
		<div class="col-sm-6">
			<h3 class="m-0 text-dark">Huruf Alfabet Bahasa Inggris</h3>
			<p>Video untuk kalian yang masih belum lancar dalam ejaan alfabel bahasa inggris kalian bisa langsung menyetel video ini di karenakan untuk mempermudah anda dalam mengisi test nanti.</p>
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-sm-6" class="video">
			<video controls="">
				<source src="<?php echo e(asset('dist/video/video-hijaiyah.mp4')); ?>"type="video/mp4">
			</video>
		</div>
		<div class="col-sm-6">
			<h3  class="m-0 text-dark">Huruf Hijaiyah</h3>
		<p>Video untuk kalian yang masih belum lancar dalam ejaan Huruf Hijaiyah kalian bisa langsung menyetel video ini di karenakan untuk mempermudah anda dalam mengisi test nanti.</p>
		</div>
	</div>
	<style type="text/css">
		video {
	max-width: 100%;
	height: auto;
}
		.video {
	position: relative;
	padding-bottom: 56.25%;
	height: 0;
	overflow: hidden;
}

.video iframe,  
.video object,  
.video embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
	</style>
	
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavmakan\resources\views/layouts/home.blade.php ENDPATH**/ ?>