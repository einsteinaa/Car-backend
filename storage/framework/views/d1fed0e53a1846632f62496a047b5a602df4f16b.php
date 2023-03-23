

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($post_detail->post_title); ?></h2>
                <nav class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('allcategory',$post_detail->category_id)); ?>"><?php echo e($post_detail->rAllCategory->category_name); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($post_detail->post_title); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="featured-photo">
                    <img src="<?php echo e(asset('uploads/'.$post_detail->post_photo)); ?>" alt="">
                </div>
            <?php if($post_detail->post_photo_src): ?>
                    <p style="color:#969696"><i><?php echo e($post_detail->post_photo_src); ?></i></p>
                  <?php endif; ?>

           
                <div class="sub">
                    <div class="item">
                        <b><i class="fas fa-user"></i></b>
                
                        <a href=""><?php echo e($user_data->name); ?></a>
                    </div>
                    <div class="item">
                        <b><i class="fas fa-edit"></i></b>
                        <a href="<?php echo e(route('allcategory',$post_detail->category_id)); ?>"><?php echo e($post_detail->rAllCategory->category_name); ?></a>
                    </div>
                    <div class="item">
                        <b><i class="fas fa-clock"></i></b>
                        <?php
                        $ts = strtotime($post_detail->updated_at);
                        $year = date('Y',$ts);
                        $month = date('m',$ts);
                        $day = date('d',$ts);
                        $date = Bsdate::eng_to_nep($year,$month, $day);
                        echo($date['year'].'-'.$date['nmonth'].'-'.$date['date']); 

                       ?>
                
                        
                       
                    </div>
                    <div class="item">
                        <b><i class="fas fa-eye"></i></b>
                        <?php echo e($post_detail->visitors); ?>

                    </div>
                </div>
                <div class="main-text">
                        <?php echo $post_detail->post_detail; ?>

                </div>

                <?php if($post_detail->post_detail_src): ?>
                <p style="color:#969696"><i><?php echo e($post_detail->post_detail_src); ?></i></p>
              <?php endif; ?>
       
                <div class="share-content">
                    <h2>Share</h2>
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
                <div class="comment-fb">
                    <h2>Comment</h2>
                    <div id="disqus_thread"></div>
                    <script>
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://arefindev-com.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                    </script>
                </div>
                <div class="related-news">
                    <div class="related-news-heading">
                        <h2>Related News</h2>
                    </div>
                    <div class="related-post-carousel owl-carousel owl-theme">

                        <?php $__currentLoopData = $related_post_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->id == $post_detail->id): ?>
                                <?php continue; ?>
                            <?php endif; ?>

                        <div class="item">
                            <div class="photo">
                                <img src="<?php echo e(asset('uploads/'.$item->post_photo)); ?>" alt="">
                            </div>
                            <div class="category">
                                <span class="badge bg-success"><?php echo e($item->rAllCategory->category_name); ?></span>
                            </div>
                            <h3><a href="<?php echo e(route('news_detail',$item->id)); ?>"><?php echo e($item->post_title); ?></a></h3>
                            <div class="date-user">
                                <div class="user">
                                    <?php if($item->author_id==0): ?>
                                        <?php $user_data = \App\Models\Admin::where('id',$item->admin_id)->first();
                                         ?>
                                    <?php else: ?>
                                         <?php $user_data = \App\Models\Author::where('id',$item->author_id)->first();
                                          ?>

                                    <?php endif; ?>
                                    <a href=""><?php echo e($user_data->name); ?></a>
                                </div>
                          
                                <div class="date">
                                    <?php
                                    $ts = strtotime($item->created_at);
                                    $year = date('Y',$ts);
                                    $month = date('m',$ts);
                                    $day = date('d',$ts);
                                    $date = Bsdate::eng_to_nep($year,$month, $day);
                                    echo($date['year'].'-'.$date['nmonth'].'-'.$date['date']); 
            
                                   ?>
                                   
                                </div>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  
                
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sidebar-col">
                

                <?php echo $__env->make('front.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\News\news_admin\resources\views/front/post_detail.blade.php ENDPATH**/ ?>