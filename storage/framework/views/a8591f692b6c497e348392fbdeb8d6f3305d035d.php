

<?php $__env->startSection('main_content'); ?>
<?php if($setting_data->news_ticker_status == "Show"): ?>
    <div class="news-ticker-item">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="acme-news-ticker">
                        <div class="acme-news-ticker-label">Latest News</div>
                        <div class="acme-news-ticker-box">
                            <ul class="my-news-ticker">
                                <?php $i=0; ?>
                                      <?php $__currentLoopData = $post_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $i++; ?>
                                            <?php if($i>$setting_data->news_ticker_total): ?>
                                                <?php break; ?>
                                            <?php endif; ?>
                                <li><a href="<?php echo e(route('news_detail',$item->id)); ?>"><?php echo e($item->post_title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="home-main">
        <div class="container">
            <div class="row g-2">
               
                <div class="col-lg-8 col-md-12 left">
                    <?php $i=0; ?>
                    <?php $__currentLoopData = $post_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++; ?>

                    <?php if($i > 1): ?>
                        <?php break; ?>
                    <?php endif; ?>
                    <div class="inner">
                        <div class="photo">
                            <div class="bg"></div>
                            <img src=<?php echo e(asset('uploads/'.$item->post_photo)); ?> alt="">
                            <div class="text">
                                <div class="text-inner">
                                    <div class="category">
                                        <span class="badge bg-success badge-sm"><?php echo e($item->rAllCategory->category_name); ?></span>
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
                                        <a href="javascript:void;"><?php echo e($user_data->name); ?></a>
                                        </div>
                                        <div class="date">
                                            <?php
                                            $ts = strtotime($item->updated_at);
                                            // $updated_date= date('d F Y',$ts);
                                            $year = date('Y',$ts);
                                            $month = date('m',$ts);
                                            $day = date('d',$ts);
                                          
                                            // $updated_date=date('Y m d',$ts);
                                       
                                            // $date=Bsdate::eng_to_nep($updated_date);
                                            $date = Bsdate::eng_to_nep($year,$month, $day);
                                            echo($date['year'].'-'.$date['nmonth'].'-'.$date['date']); 
                                      
            
                                    ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-lg-4 col-md-12">
                    <?php $i=0; ?>
                    <?php $__currentLoopData = $post_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++; ?>
                    <?php if($i==1): ?> 
                        <?php continue; ?>
                     <?php endif; ?>
                    

                    <?php if($i > 3): ?>
                        <?php break; ?>
                    <?php endif; ?>
                   
                    <div class="inner inner-right">
                        <div class="photo">
                            <div class="bg"></div>
                            <img src="<?php echo e(asset('uploads/'.$item->post_photo)); ?>" alt="">
                            <div class="text">
                                <div class="text-inner">
                                    <div class="category">
                                        <span class="badge bg-success badge-sm"><?php echo e($item->rAllCategory->category_name); ?></span>
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
                        </div>
                    </div>
              
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php if($home_ad_data->above_search_ad_status == 'Show'): ?>
        <div class="ad-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($home_ad_data->above_search_ad_url == ''): ?>
                     <img src="<?php echo e(asset('uploads/' . $home_ad_data->above_search_ad)); ?>"
                                    alt="">
                        <?php else: ?>
                            <a href="<?php echo e($home_ad_data->above_search_ad_url); ?>" target="_blank"><img
                                    src="<?php echo e(asset('uploads/' . $home_ad_data->above_search_ad)); ?>" alt=""></a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    

    

    <div class="home-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 left-col">
                    <div class="left">

                        <?php $__currentLoopData = $category_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(count($item->rcPost)==0): ?>
                            <?php continue; ?>
                        <?php endif; ?>
                    

                            <div class="news-total-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <h2> <?php echo e($item->category_name); ?></h2>
                                    </div>
                                    <div class="col-lg-6 col-md-12 see-all">
                                        <a href="<?php echo e(route('allcategory',$item->id)); ?>" class="btn btn-primary btn-sm">See All News</a>
                                    
                                    </div>
                                    <div class="col-md-12">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php $__currentLoopData = $item->rcPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <?php if($loop->iteration == 2 ): ?>
                                        <?php break; ?>
                                   <?php endif; ?>
                                   <div class="col-lg-6 col-md-12">
                                    <div class="left-side">
                                        <div class="photo">
                                            <img src="<?php echo e(asset('uploads/'.$single->post_photo)); ?>" alt="">
                                        </div>
                                        <div class="category">
                                            <span class="badge bg-success"><?php echo e($item->category_name); ?></span>
                                        </div>
                                        <h3><a href="<?php echo e(route('news_detail',$single->id)); ?>">  <?php echo e($single->post_title); ?></a></h3>
                                        <div class="date-user">
                                            <div class="user">

                                                <?php if($single->author_id==0): ?>
                                                <?php
                                                 $user_data = \App\Models\Admin::where('id',$single->admin_id)->first();
                                                 ?>
                                                  <?php else: ?>
                                                      <?php $user_data = \App\Models\Author::where('id',$single->author_id)->first();
                                                          ?>

                                             <?php endif; ?>
                                            <a href="javascript:void;"><?php echo e($user_data->name); ?></a>
                                              
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


                                        <div class="post-short-text"> 
                                           <?php echo $single->post_detail; ?>

                                        </div>
                                    </div>
                                </div>
                                 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                                    <div class="col-lg-6 col-md-12">
                                        <div class="right-side">

                                            <?php $__currentLoopData = $item->rcPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($loop->iteration == 1 ): ?>
                                                <?php continue; ?>
                                            <?php endif; ?>
                                            <?php if($loop->iteration == 6 ): ?>
                                                 <?php break; ?>
                                            <?php endif; ?>
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="<?php echo e(asset('uploads/'.$single->post_photo)); ?>" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success"><?php echo e($item->category_name); ?></span>
                                                    </div>
                                                    <h2 class="mb-3"><a  href="<?php echo e(route('news_detail',$single->id)); ?>">  <?php echo e($single->post_title); ?></a></h2>
                                               
                                                    <div class="date-user">
                                                        <div class="user">

                                                            <?php if($single->author_id==0): ?>
                                                            <?php
                                                             $user_data = \App\Models\Admin::where('id',$single->admin_id)->first();
                                                             ?>
                                                        <?php else: ?>
                                                        <?php $user_data = \App\Models\Author::where('id',$single->author_id)->first();
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



                    
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      




                    </div>
                  
                </div>
                <div class="col-lg-4 col-md-6 sidebar-col">

                    <?php echo $__env->make('front.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             
                </div>
            </div>
        </div>
    </div>

    

    

    <?php if($home_ad_data->above_footer_ad_status == 'Show'): ?>
    <div class="ad-section-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if($home_ad_data->above_footer_ad_url == ''): ?>
                 <img src="<?php echo e(asset('uploads/' . $home_ad_data->above_footer_ad)); ?>"
                                alt="">
                    <?php else: ?>
                        <a href="<?php echo e($home_ad_data->above_footer_ad_url); ?>" target="_blank"><img
                                src="<?php echo e(asset('uploads/' . $home_ad_data->above_footer_ad)); ?>" alt=""></a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<script>
    (function($) {
        $(document).ready(function(){
            $("#category").on("change", function(){
               var categoryId =  $("#category").val();
              
               if(categoryId){
                $.ajax({
                    type:"get",
                    url:"<?php echo e(url('/subcategory-by-category/')); ?>" + "/" + categoryId,
                    success:function(response){
                        $("#sub_category").html(response.sub_category_data);
                    },
                    error:function(err){

                    }
                })
               }
            })
        })
    })(jQuery);
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\News\news_admin\resources\views/front/home.blade.php ENDPATH**/ ?>