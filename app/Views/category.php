<?= $this->extend('master') ?>

<?= $this->section('content') ?>
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-9" data-aos="fade-up">
        <h3 class="category-title">Category: <?php echo $posts[0]->categoryName; ?></h3>

        <?php foreach ($posts as $post): ?>
          <div class="d-md-flex post-entry-2 half">
            <a href="single-post.html" class="me-4 thumbnail">
              <img src="<?php echo $post->image ?>" alt="" class="img-fluid">
            </a>
            <div>
              <div class="post-meta"><span class="date"><?php echo $post->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?php echo date('d/m/Y H:i:s', strtotime($post->created_at)) ?></span></div>
              <h3><a href="single-post.html"><?php echo $post->title ?></a></h3>
              <p><?php echo word_limiter($post->description, 200) ?></p>
              <div class="d-flex align-items-center author">
                <div class="photo"><img src="<?php echo $post->userImage ?>" alt="" class="img-fluid"></div>
                <div class="name">
                  <h3 class="m-0 p-0"><?php echo $post->userFirstName ?> <?php echo $post->userLastName ?></h3>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>



        <div class="text-start py-4">
          <div class="custom-pagination">
            <?php echo $pager->links(); ?>
            <!-- <a href="#" class="prev">Prevous</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#" class="next">Next</a> -->
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <?php echo view_cell("App\Cells\CategorySidebar::render") ?>
      </div>
    </div>

    <div class="aside-block">
      <h3 class="aside-title">Video</h3>
      <div class="video-post">
        <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
          <span class="bi-play-fill"></span>
          <img src="/assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div><!-- End Video -->

    <div class="aside-block">
    <h3 class="aside-title">Categories</h3>
      <?php echo view_cell("App\Cells\CategoryMenu::render", ['view' => 'category_sidebar']) ?>

  

    </div><!-- End Categories -->

  </div>

  
 
</section>

<?= $this->endSection() ?>