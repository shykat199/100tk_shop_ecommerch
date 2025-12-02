

<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('content'); ?>


<div class="maan-blog-section maan-section py-5">
        <div class="container">
            <div class="maan-blog-wraper">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="maan-blog-details">
                            <div class="post-details-title wow fadeInUp" >
                                <h3><?php echo e($blog->title); ?></h3>
                                <div class="author-area">
                                    <a href="#" class="maan-btn"><?php echo e($blog->category->name); ?></a>
                                    <div class="author">
                                        <div class="author-thumb">
                                            <img src="<?php echo e(asset('uploads/users/'.$blog->user->avatar)); ?>" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="#" class="title"><?php echo e($blog->user->name); ?></a>
                                            <a href="#" class="date"><?php echo e($blog->created_at->translatedFormat(' F j, Y')); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="market-industry-thumb wow fadeInUp"  data-wow-delay="0.6s">
                                <div class="images-thumb">
                                    <img src="<?php echo e(asset('/uploads/blogs/'.$blog->image)); ?>" alt="">
                                </div>
                                <div class="content">
                                    <p>by  <?php echo e($blog->user->name); ?></p>
                                    <h4><?php echo e($blog->title); ?></h4>
                                </div>
                            </div>
                            <div class="toproviding-customers wow fadeInUp"  data-wow-delay="0.9s">
                                <?php echo e($blog->description); ?>



                            </div>
                            <div class="maan-details-tags-area wow fadeInUp"  data-wow-delay="1.2s">
                                <div class="tags">
                                    <h5><?php echo e(('Tag:')); ?></h5>
                                    <ul>
                                        <li><a class="maan-btn" href=""><?php echo e($blog->tag); ?></a></li>

                                    </ul>
                                </div>
                                <div class="social-share">
                                    <ul>
                                        <li><a href="https/www.skype.com"><i class="fab fa-skype"></i></a></li>
                                        <li><a href="https/www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https/www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https/www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="maan-comment-area wow fadeInUp" >
                                <h3 class="comment-title"><?php echo e(__('Comments')); ?></h3>
                                <?php $__currentLoopData = $blog->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="comment-author wow fadeInUp"  data-wow-delay="0.3s">
                                    <div class="author-thumb">
                                        <img src="/public/frontend/img/blog/16.png" alt="">
                                    </div>
                                    <div class="description">
                                        <div class="author-title">
                                            <small><?php echo e($comment->created_at->translatedFormat(' F j, Y')); ?></small>
                                            <a class="author-name" href="#"><?php echo e($comment->name); ?></a>
                                        </div>
                                        <div class="comment">
                                            <?php echo e($comment->comment); ?>

                                        </div>

                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <div class="maan-comment-form-area wow fadeInUp"  data-wow-delay="1.2s">
                                    <h3 class="comment-title"><?php echo e(__('Leave A Reply')); ?></h3>
                                    <form action="<?php echo e(route('frontend.blog.comment')); ?>" method="POST" >
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="blog_id" value="<?php echo e($blog->id); ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="name" placeholder="Name*">
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <label class="error" id="name-error" for="name"><?php echo e($message); ?></label>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" name="email" placeholder="Email*">
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <label class="error" id="email-error" for="email"><?php echo e($message); ?></label>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-12">
                                                <textarea name="comment" placeholder="write your comment"></textarea>
                                                <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <label class="error" id="comment-error" for="comment"><?php echo e($message); ?></label>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="maan-btn maan-post-btn"><?php echo e(__('post comment')); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="maan-wedgets-area">
                            <div class="maan-wedgets wow fadeInUp"  data-wow-delay="0.2s">
                                <h2 class="wedgets-title"><?php echo e(__('Search')); ?></h2>
                                <form >
                                    <div class="maan-input-group">
                                        <input type="text" placeholder="Search keywords">
                                        <button class="maan-btn"><i class="fal fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="maan-wedgets wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="wedgets-title"><?php echo e(__('Categories')); ?> </h2>
                                <ul class="categories">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="/blog-details"><?php echo e($category->name); ?><span><?php echo e($category->blogs->count()); ?></span></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                            <div class="maan-wedgets wow fadeInUp" data-wow-delay="0.7s">
                                <h2 class="wedgets-title"><?php echo e(__('Recent Post')); ?></h2>
                                <?php $__currentLoopData = $recents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentpost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                        <div class="blog-post-categories">
                                            <a href="<?php echo e(route('frontend.blog.details',$recentpost->slug)); ?>" class="post-thumb"><img src="<?php echo e(asset('/uploads/blogs/'.$recentpost->image)); ?>" alt=""></a>
                                            <div class="post-content">
                                                <a href="<?php echo e(route('frontend.blog.details',$recentpost->slug)); ?>" class="post-title"><?php echo e($recentpost->title); ?></a>
                                                <a href="#" class="post-date"><?php echo e($recentpost->created_at->translatedFormat(' F j, Y')); ?></a>
                                            </div>
                                        </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="maan-wedgets wow fadeInUp"  data-wow-delay="1.1s">
                                <h2 class="wedgets-title"><?php echo e(__('Instagram Post')); ?></h2>
                                <div class="instagram-post">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="instagram-thumb">
                                                <img src="/public/frontend/img/blog/04.png" alt="">
                                                <a href="#" class="link"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="instagram-thumb">
                                                <img src="/public/frontend/img/blog/05.png" alt="">
                                                <a href="#" class="link"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="instagram-thumb">
                                                <img src="/public/frontend/img/blog/06.png" alt="">
                                                <a href="#" class="link"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="instagram-thumb">
                                                <img src="/public/frontend/img/blog/07.png" alt="">
                                                <a href="#" class="link"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="instagram-thumb">
                                                <img src="/public/frontend/img/blog/08.png" alt="">
                                                <a href="#" class="link"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="instagram-thumb">
                                                <img src="/public/frontend/img/blog/09.png" alt="">
                                                <a href="#" class="link"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="instagram-thumb">
                                                <img src="/public/frontend/img/blog/10.png" alt="">
                                                <a href="#" class="link"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="instagram-thumb">
                                                <img src="/public/frontend/img/blog/11.png" alt="">
                                                <a href="#" class="link"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="instagram-thumb">
                                                <img src="/public/frontend/img/blog/12.png" alt="">
                                                <a href="#" class="link"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="maan-wedgets wow fadeInUp mb-0"  data-wow-delay="1.4s">
                                <h2 class="wedgets-title"><?php echo e(__('Populer Tags')); ?></h2>
                                <ul class="maan-popular-tags">
                                    <?php $__currentLoopData = $recents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recenttag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('frontend.blog.details',$recenttag->slug)); ?>" class="maan-btn"><?php echo e($recenttag->tag); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u849325218/domains/100tkshop.com/public_html/resources/views/frontend/pages/blogs/blog_details.blade.php ENDPATH**/ ?>