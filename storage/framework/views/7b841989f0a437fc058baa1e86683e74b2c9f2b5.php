<div class="sidebar">

    <div class="widget">
        <?php $__currentLoopData = $global_sidebar_top_ad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ad-sidebar">
            <?php if($row->sidebar_ad_url == ''): ?>
           <img src="<?php echo e(asset('uploads/'.$row->sidebar_ad)); ?>" alt="">
            <?php else: ?>
            <a href="<?php echo e($row->sidebar_ad_url); ?>" target="_blank"><img src="<?php echo e(asset('uploads/'.$row->sidebar_ad)); ?>" alt=""></a>
<?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    

    <div class="widget">
        <div class="archive-heading">
            <h2>Archive</h2>
        </div>
        <div class="archive">
            <?php
            $all_post_data = \App\Models\Post::orderBy('id','desc')->get();
         
          
            foreach ($all_post_data as $row) {
                $ts = strtotime($row->created_at);
                $month = date('m',$ts);
                $month_full = date('F',$ts);

                $year = date('Y',$ts);
                $archive_array[]=$month.'-'.$month_full.'-'.$year;
            }
       
               $archive_array = (array_unique($archive_array));
            
           
         ?>
         
        </div>
    </div>
    

    <div class="widget">
        <div class="news">
            <div class="news-heading">
                <h2>Popular & Recent News</h2>
            </div>

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab"
                        aria-controls="pills-home" aria-selected="true">Recent News</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Popular News</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    <?php $__currentLoopData = $global_recent_news_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->iteration > 5): ?>
                        <?php break; ?>;
                    <?php endif; ?>
                    <div class="news-item">
                        <div class="left">
                            <img src="<?php echo e(asset('uploads/'.$item->post_photo)); ?>" alt="">
                        </div>
                        <div class="right">
                            <div class="category">
                                <span class="badge bg-success"><?php echo e($item->rAllCategory->sub_category); ?></span>
                            </div>
                            <h2><a href="<?php echo e(route('news_detail',$item->id)); ?>"><?php echo e($item->post_title); ?></a></h2>
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
                            $ts = strtotime($item->updated_at);
                            $year = date('Y',$ts);
                            $month = date('m',$ts);
                            $day = date('d',$ts);
                            $date = Bsdate::eng_to_nep($year,$month, $day);
                            echo($date['year'].'-'.$date['nmonth'].'-'.$date['date']); 

                           ?>
                    
                           
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
                 
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    <?php $__currentLoopData = $global_popular_news_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->iteration > 5): ?>
                        <?php break; ?>;
                    <?php endif; ?>
                    <div class="news-item">
                        <div class="left">
                            <img src="<?php echo e(asset('uploads/'.$item->post_photo)); ?>" alt="">
                        </div>
                        <div class="right">
                            <div class="category">
                                <span class="badge bg-success"><?php echo e($item->rAllCategory->category_name); ?></span>
                            </div>
                            <h2><a href="<?php echo e(route('news_detail',$item->id)); ?>"><?php echo e($item->post_title); ?></a></h2>
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
                                    $ts = strtotime($item->updated_at);
                                    $year = date('Y',$ts);
                                    $month = date('m',$ts);
                                    $day = date('d',$ts);
                                    $date = Bsdate::eng_to_nep($year,$month, $day);
                                    echo($date['year'].'-'.$date['nmonth'].'-'.$date['date']); 

                                   ?>
                            
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
      
                </div>
            </div>
        </div>
    </div>
    
    

    <div class="widget">
        <?php $__currentLoopData = $global_sidebar_bottom_ad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ad-sidebar">
            <?php if($row->sidebar_ad_url == ''): ?>
           <img src="<?php echo e(asset('uploads/'.$row->sidebar_ad)); ?>" alt="">
            <?php else: ?>
            <a href="<?php echo e($row->sidebar_ad_url); ?>" target="_blank"><img src="<?php echo e(asset('uploads/'.$row->sidebar_ad)); ?>" alt=""></a>
<?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


   

</div><?php /**PATH D:\Website\News\news_admin\resources\views/front/layout/sidebar.blade.php ENDPATH**/ ?>