<?php $__env->startSection('title','Account User - '); ?>

<?php $__env->startSection('content'); ?>
    <div class="maan-main-content">
        <div class="row">
            <div class="col-lg-4">
                <div class="multivendors-profile card">
                    <div class="profile-bg">
                        <?php if(auth('seller')->user()): ?>
                            <img src="<?php echo e(URL::to('uploads/sellers/'.Auth::user()->banner)); ?>" alt="">
                        <?php endif; ?>

                    </div>
                    <div class="profile-img">
                        <?php if(auth('admin')->user()): ?>
                            <img id="profile_picture" width="100px" height="100px"
                                    src="<?php echo e(URL::to('uploads/users/'.Auth::user()->avatar)); ?>" alt="user avatar"/>
                        <?php else: ?>
                            <img id="profile_picture" width="100px" height="100px"
                                    src="<?php echo e(URL::to('uploads/sellers/'.Auth::user()->image)); ?>" alt="user avatar"/>
                        <?php endif; ?>
                    </div>
                    <div class="profile-details card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><span><?php echo e(__('Name:')); ?></span> <?php echo e(auth()->user()->name??auth()->user()->company_name); ?></li>
                            <li class="list-group-item"><span><?php echo e(__('Email:')); ?></span> <?php echo e(auth()->user()->email); ?></li>
                            <li class="list-group-item"><?php echo e(__('Registration Date: 12 Dec 2022')); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <div class="multivendor-profile-section card">
                    <div class="profile-title">
                        <h4><?php echo e(__('Profile')); ?></h4>
                    </div>
                    <div class="multivendor-profile-wrapper">
                        <form action="<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.account.update',auth()->user()->id)); ?><?php elseif(auth()->guard('seller')->check()): ?> <?php echo e(route('seller.account.update',auth()->user()->id)); ?><?php endif; ?>" class="ajaxform_instant_reload" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <?php if(auth('admin')->user()): ?>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Name')); ?></label>
                                    <div class="col-lg-8">
                                        <input readonly name="name" class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" type="text" value="<?php if($user->name): ?><?php echo e($user->name); ?><?php else: ?><?php echo e(old('name')); ?><?php endif; ?>" required>
                                        <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Shop Name')); ?></label>
                                    <div class="col-lg-8">
                                        <input readonly name="company_name" class="form-control <?php echo e($errors->has('company_name') ? ' is-invalid' : ''); ?>" type="text" value="<?php if($user->company_name): ?><?php echo e($user->company_name); ?><?php else: ?><?php echo e(old('company_name')); ?><?php endif; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Mobile')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="mobile" class="form-control <?php echo e($errors->has('mobile') ? ' is-invalid' : ''); ?>" type="number" value="<?php if($user->mobile): ?><?php echo e($user->mobile); ?><?php else: ?><?php echo e(old('mobile')); ?><?php endif; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('First Name')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="first_name" class="form-control <?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" type="text" value="<?php if($user->first_name): ?><?php echo e($user->first_name); ?><?php else: ?><?php echo e(old('first_name')); ?><?php endif; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('last Name')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="last_name" class="form-control <?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>" type="text" value="<?php if($user->last_name): ?><?php echo e($user->last_name); ?><?php else: ?><?php echo e(old('last_name')); ?><?php endif; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Commission')); ?></label>
                                    <div class="col-lg-8">
                                        <input readonly  name="seller_commission" class="form-control" value="<?php if($user->commission): ?><?php echo e($user->commission->seller_commission); ?><?php else: ?><?php echo e(old('seller_commission')); ?><?php endif; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('TIN/Trade Licence')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="tin" class="form-control <?php echo e($errors->has('tin') ? ' is-invalid' : ''); ?>" type="text" value="<?php if($user->tin): ?><?php echo e($user->tin); ?><?php else: ?><?php echo e(old('tin')); ?><?php endif; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('NID/Passport')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="nid_no" class="form-control <?php echo e($errors->has('nid_no') ? ' is-invalid' : ''); ?>" type="text" value="<?php if($user->nid_no): ?><?php echo e($user->nid_no); ?><?php else: ?><?php echo e(old('nid_no')); ?><?php endif; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Website')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="website" class="form-control <?php echo e($errors->has('website') ? ' is-invalid' : ''); ?>" type="text" value="<?php if($user->website): ?><?php echo e($user->website); ?><?php else: ?><?php echo e(old('website')); ?><?php endif; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Facebook')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="facebook" class="form-control <?php echo e($errors->has('facebook') ? ' is-invalid' : ''); ?>" type="text" value="<?php if($user->facebook): ?><?php echo e($user->facebook); ?><?php else: ?><?php echo e(old('facebook')); ?><?php endif; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Address')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="address" class="form-control <?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" type="text" value="<?php if($user->address): ?><?php echo e($user->address); ?><?php else: ?><?php echo e(old('address')); ?><?php endif; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('City')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="city" class="form-control <?php echo e($errors->has('city') ? ' is-invalid' : ''); ?>" type="text" value="<?php if($user->city): ?><?php echo e($user->city); ?><?php else: ?><?php echo e(old('city')); ?><?php endif; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Post Code')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="post_code" class="form-control <?php echo e($errors->has('post_code') ? ' is-invalid' : ''); ?>" type="number" value="<?php if($user->post_code): ?><?php echo e($user->post_code); ?><?php else: ?><?php echo e(old('post_code')); ?><?php endif; ?>" >
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Email')); ?></label>
                                <div class="col-lg-8">
                                    <input name="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" type="email" value="<?php if($user->email): ?><?php echo e($user->email); ?><?php else: ?><?php echo e(old('email')); ?><?php endif; ?>" required>
                                </div>
                            </div>

                            <?php if(auth('admin')->user()): ?>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Profile Picture')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="avatar" class="form-control <?php echo e($errors->has('avatar') ? ' is-invalid' : ''); ?>" accept="image/*" type="file" onchange="document.getElementById('profile_picture').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Banner Picture')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="banner" type="file" class="form-control<?php echo e($errors->has('banner') ? ' is-invalid' : ''); ?>" accept="image/*">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Profile Picture')); ?></label>
                                    <div class="col-lg-8">
                                        <input name="image" class="form-control <?php echo e($errors->has('image') ? ' is-invalid' : ''); ?>" accept="image/*" type="file" onchange="document.getElementById('profile_picture').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Current Password')); ?></label>
                                <div class="col-lg-8">
                                    <input id="current_password" type="password" class="form-control" name="current_password" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Password')); ?></label>
                                <div class="col-lg-8">
                                    <input id="password" type="password" class="form-control" name="password" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label"><?php echo e(__('Confirm password')); ?></label>
                                <div class="col-lg-8">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                                </div>
                            </div>
                            <div class="form-grou">
                                <button class="btn theme-btn mt-3 submit-btn"><?php echo e(__('Save Changes')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function () {
            "use strict";

            $(document).on('click', '.nav .nav-link', function () {
                $(this).parent('li').addClass('active');
                $(this).parent('li').siblings('li').removeClass('active');
            })

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u849325218/domains/100tkshop.com/public_html/resources/views/backend/pages/account/index.blade.php ENDPATH**/ ?>