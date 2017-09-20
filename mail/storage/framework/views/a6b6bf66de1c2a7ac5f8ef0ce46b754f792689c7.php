<?php $__env->startSection('headerInclude'); ?>
    <link rel="stylesheet"
          href="<?php echo e(URL::to('backEnd/libs/jquery/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')); ?>"
          type="text/css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="row-col">
            <div class="col-sm-3 col-lg-2">
                <div class="p-y">
                    <div class="nav-active-border left b-primary">
                        <ul class="nav nav-sm">
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(((!Session::has('statusTab') && !Session::has('styleTab') && !Session::has('socialTab') && !Session::has('contactsTab')) ? 'active' : '')); ?>"
                                   href data-toggle="tab" data-target="#tab-1"><i class="material-icons">&#xe30c;</i>
                                    &nbsp; <?php echo trans('backLang.siteInfoSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::has('contactsTab') ? 'active' : '')); ?>" href
                                   data-toggle="tab" data-target="#tab-2"><i class="material-icons">&#xe0ba;</i>
                                    &nbsp; <?php echo trans('backLang.siteContactsSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::has('socialTab') ? 'active' : '')); ?>" href
                                   data-toggle="tab" data-target="#tab-3"><i class="material-icons">&#xe80d;</i>
                                    &nbsp; <?php echo trans('backLang.siteSocialSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::has('styleTab') ? 'active' : '')); ?>" href
                                   data-toggle="tab" data-target="#tab-5"><i class="material-icons">&#xe41d;</i>
                                    &nbsp; <?php echo trans('backLang.styleSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::has('statusTab') ? 'active' : '')); ?>" href
                                   data-toggle="tab" data-target="#tab-4"><i class="material-icons">&#xe8c6;</i>
                                    &nbsp; <?php echo trans('backLang.siteStatusSettings'); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-lg-10 light lt">
                <div class="tab-content pos-rlt">
                    <div class="tab-pane <?php echo e(((!Session::has('statusTab') && !Session::has('styleTab') && !Session::has('socialTab') && !Session::has('contactsTab')) ? 'active' : '')); ?>"
                         id="tab-1">
                        <?php echo e(Form::open(['route'=>['settingsUpdateSiteInfo'],'method'=>'POST'])); ?>

                        <div class="p-a-md dker _600"><i class="material-icons">&#xe30c;</i>
                            &nbsp; <?php echo trans('backLang.siteInfoSettings'); ?></div>
                        <div class="p-a-md col-md-12">
                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                <div class="form-group">
                                    <label><?php echo trans('backLang.websiteTitle'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                    </label>
                                    <?php echo Form::text('site_title_ar',$Setting->site_title_ar, array('placeholder' => trans('backLang.websiteTitle'),'class' => 'form-control', 'dir'=>trans('backLang.rtl'))); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                <div class="form-group">
                                    <label><?php echo trans('backLang.websiteTitle'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                    </label>
                                    <?php echo Form::text('site_title_en',$Setting->site_title_en, array('placeholder' => trans('backLang.websiteTitle'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                <div class="form-group">
                                    <label><?php echo trans('backLang.metaDescription'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                    </label>
                                    <?php echo Form::textarea('site_desc_ar',$Setting->site_desc_ar, array('placeholder' => trans('backLang.metaDescription'),'class' => 'form-control', 'dir'=>trans('backLang.rtl'),'rows'=>'2')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                <div class="form-group">
                                    <label><?php echo trans('backLang.metaDescription'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                    </label>
                                    <?php echo Form::textarea('site_desc_en',$Setting->site_desc_en, array('placeholder' => trans('backLang.metaDescription'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'),'rows'=>'2')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                <div class="form-group">
                                    <label><?php echo trans('backLang.metaKeywords'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                    </label>
                                    <?php echo Form::textarea('site_keywords_ar',$Setting->site_keywords_ar, array('placeholder' => trans('backLang.metaKeywords'),'class' => 'form-control', 'dir'=>trans('backLang.rtl'),'rows'=>'2')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                <div class="form-group">
                                    <label><?php echo trans('backLang.metaKeywords'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                    </label>
                                    <?php echo Form::textarea('site_keywords_en',$Setting->site_keywords_en, array('placeholder' => trans('backLang.metaKeywords'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'),'rows'=>'2')); ?>

                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <label><?php echo trans('backLang.websiteUrl'); ?></label>
                                <?php echo Form::text('site_url',$Setting->site_url, array('placeholder' => 'http//:www.sitename.com/','class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>
                            <br>
                            <h6><?php echo trans('backLang.emailNotifications'); ?></h6>
                            <hr>
                            <div class="form-group">
                                <label><?php echo trans('backLang.websiteNotificationEmail'); ?></label>
                                <?php echo Form::text('site_webmails',$Setting->site_webmails, array('placeholder' => 'email@sitename.com','class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>
                            <div class="form-group">
                                <label><?php echo e(trans('backLang.websiteNotificationEmail1')); ?> : </label>
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('notify_messages_status','1',$Setting->notify_messages_status ? true : false , array('id' => 'seo_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('notify_messages_status','0',$Setting->notify_messages_status ? false : true , array('id' => 'seo_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><?php echo e(trans('backLang.websiteNotificationEmail2')); ?> : </label>
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('notify_comments_status','1',$Setting->notify_comments_status ? true : false , array('id' => 'seo_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('notify_comments_status','0',$Setting->notify_comments_status ? false : true , array('id' => 'seo_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><?php echo e(trans('backLang.websiteNotificationEmail3')); ?> : </label>
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('notify_orders_status','1',$Setting->notify_orders_status ? true : false , array('id' => 'seo_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('notify_orders_status','0',$Setting->notify_orders_status ? false : true , array('id' => 'seo_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info m-t"><?php echo e(trans('backLang.update')); ?></button>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                    <div class="tab-pane <?php echo e(( Session::has('contactsTab') ? 'active' : '')); ?>" id="tab-2">
                        <?php echo e(Form::open(['route'=>['settingsUpdateContacts'],'method'=>'POST'])); ?>

                        <div class="p-a-md dker _600"><i class="material-icons">&#xe0ba;</i>
                            &nbsp; <?php echo trans('backLang.siteContactsSettings'); ?></div>
                        <div class="p-a-md col-md-12">
                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                <div class="form-group">
                                    <label><?php echo trans('backLang.contactAddress'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                    </label>
                                    <?php echo Form::text('contact_t1_ar',$Setting->contact_t1_ar, array('placeholder' => trans('backLang.contactAddress'),'class' => 'form-control', 'dir'=>trans('backLang.rtl'))); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                <div class="form-group">
                                    <label><?php echo trans('backLang.contactAddress'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                    </label>
                                    <?php echo Form::text('contact_t1_en',$Setting->contact_t1_en, array('placeholder' => trans('backLang.contactAddress'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <label><?php echo trans('backLang.contactPhone'); ?></label>
                                <?php echo Form::text('contact_t3',$Setting->contact_t3, array('placeholder' => trans('backLang.contactPhone'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>
                            <div class="form-group">
                                <label><?php echo trans('backLang.contactFax'); ?></label>
                                <?php echo Form::text('contact_t4',$Setting->contact_t4, array('placeholder' => trans('backLang.contactFax'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>
                            <div class="form-group">
                                <label><?php echo trans('backLang.contactMobile'); ?></label>
                                <?php echo Form::text('contact_t5',$Setting->contact_t5, array('placeholder' => trans('backLang.contactMobile'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>
                            <div class="form-group">
                                <label><?php echo trans('backLang.contactEmail'); ?></label>
                                <?php echo Form::text('contact_t6',$Setting->contact_t6, array('placeholder' => trans('backLang.contactEmail'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>
                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                <div class="form-group">
                                    <label><?php echo trans('backLang.worksTime'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                    </label>
                                    <?php echo Form::text('contact_t7_ar',$Setting->contact_t7_ar, array('placeholder' => trans('backLang.worksTime'),'class' => 'form-control', 'dir'=>trans('backLang.rtl'))); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                <div class="form-group">
                                    <label><?php echo trans('backLang.worksTime'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                    </label>
                                    <?php echo Form::text('contact_t7_en',$Setting->contact_t7_en, array('placeholder' => trans('backLang.worksTime'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                                </div>
                            <?php endif; ?>
                            <button type="submit" class="btn btn-info m-t"><?php echo e(trans('backLang.update')); ?></button>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                    <div class="tab-pane <?php echo e(( Session::has('socialTab') ? 'active' : '')); ?>" id="tab-3">
                        <?php echo e(Form::open(['route'=>['settingsUpdateSocialLinks'],'method'=>'POST'])); ?>

                        <div class="p-a-md dker _600"><i class="material-icons">&#xe80d;</i>
                            &nbsp; <?php echo trans('backLang.siteSocialSettings'); ?></div>
                        <div class="p-a-md col-md-12">

                            <div class="form-group">
                                <label><i class="fa fa-facebook"></i> &nbsp; <?php echo trans('backLang.facebook'); ?></label>
                                <?php echo Form::text('social_link1',$Setting->social_link1, array('placeholder' => trans('backLang.facebook'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-twitter"></i> &nbsp; <?php echo trans('backLang.twitter'); ?></label>
                                <?php echo Form::text('social_link2',$Setting->social_link2, array('placeholder' => trans('backLang.twitter'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-google-plus"></i> &nbsp; <?php echo trans('backLang.google'); ?>

                                </label>
                                <?php echo Form::text('social_link3',$Setting->social_link3, array('placeholder' => trans('backLang.google'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-linkedin"></i> &nbsp; <?php echo trans('backLang.linkedin'); ?></label>
                                <?php echo Form::text('social_link4',$Setting->social_link4, array('placeholder' => trans('backLang.linkedin'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-youtube-play"></i> &nbsp; <?php echo trans('backLang.youtube'); ?>

                                </label>
                                <?php echo Form::text('social_link5',$Setting->social_link5, array('placeholder' => trans('backLang.youtube'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-instagram"></i> &nbsp; <?php echo trans('backLang.instagram'); ?>

                                </label>
                                <?php echo Form::text('social_link6',$Setting->social_link6, array('placeholder' => trans('backLang.instagram'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-pinterest"></i> &nbsp; <?php echo trans('backLang.pinterest'); ?>

                                </label>
                                <?php echo Form::text('social_link7',$Setting->social_link7, array('placeholder' => trans('backLang.pinterest'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-tumblr"></i> &nbsp; <?php echo trans('backLang.tumblr'); ?></label>
                                <?php echo Form::text('social_link8',$Setting->social_link8, array('placeholder' => trans('backLang.tumblr'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-flickr"></i> &nbsp; <?php echo trans('backLang.flickr'); ?></label>
                                <?php echo Form::text('social_link9',$Setting->social_link9, array('placeholder' => trans('backLang.flickr'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-whatsapp"></i> &nbsp; <?php echo trans('backLang.whatapp'); ?></label>
                                <?php echo Form::text('social_link10',$Setting->social_link10, array('placeholder' => trans('backLang.whatapp'),'class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

                            </div>

                            <button type="submit" class="btn btn-info m-t"><?php echo e(trans('backLang.update')); ?></button>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                    <div class="tab-pane <?php echo e(( Session::has('statusTab') ? 'active' : '')); ?>" id="tab-4">
                        <?php echo e(Form::open(['route'=>['settingsUpdateSiteStatus'],'method'=>'POST'])); ?>

                        <div class="p-a-md dker _600"><i class="material-icons">&#xe8c6;</i>
                            &nbsp; <?php echo trans('backLang.siteStatusSettings'); ?></div>
                        <div class="p-a-md col-md-12">
                            <div class="form-group">
                                <label><?php echo e(trans('backLang.siteStatusSettings')); ?> : </label>
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('site_status','1',$Setting->site_status ? true : false , array('id' => 'site_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.active')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('site_status','0',$Setting->site_status ? false : true , array('id' => 'site_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.notActive')); ?>

                                    </label>
                                </div>
                            </div>

                            <div class="form-group"
                                 id="close_msg_div" <?php echo ($Setting->site_status) ? "style='display:none'":""; ?>>
                                <label><?php echo trans('backLang.siteStatusSettingsMsg'); ?> </label>
                                <?php echo Form::textarea('close_msg',$Setting->close_msg, array('placeholder' => trans('backLang.siteStatusSettingsMsg'),'class' => 'form-control','rows'=>'4')); ?>

                            </div>
                            <button type="submit" class="btn btn-info m-t"><?php echo e(trans('backLang.update')); ?></button>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>


                    <div class="tab-pane <?php echo e(( Session::has('styleTab') ? 'active' : '')); ?>" id="tab-5">
                        <?php echo e(Form::open(['route'=>['settingsUpdateSiteStyle'],'method'=>'POST', 'files' => true])); ?>

                        <div class="p-a-md dker _600"><i class="material-icons">&#xe41d;</i>
                            &nbsp; <?php echo trans('backLang.styleSettings'); ?></div>
                        <div class="p-a-md col-md-12">

                            <div class="form-group row">
                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                    <div class="col-sm-6">
                                        <label for="style_logo_ar"><?php echo trans('backLang.siteLogo'); ?> <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?></label>
                                        <?php if($Setting->style_logo_ar!=""): ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-12 box p-a-xs text-center">
                                                        <a target="_blank"
                                                           href="<?php echo e(URL::to('uploads/settings/'.$Setting->style_logo_ar)); ?>"><img
                                                                    src="<?php echo e(URL::to('uploads/settings/'.$Setting->style_logo_ar)); ?>"
                                                                    class="img-responsive" id="style_logo_ar_prv"
                                                                    style="width: auto;max-width: 260px;max-height: 60px">
                                                            <br>
                                                            <small><?php echo e($Setting->style_logo_ar); ?></small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-12 box p-a-xs text-center">
                                                        <img
                                                                src="<?php echo e(URL::to('uploads/settings/nologo.png')); ?>"
                                                                class="img-responsive" id="style_logo_ar_prv"
                                                                style="width: auto;max-width: 260px;max-height: 60px">
                                                        <br>
                                                        <small>nologo.png</small>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php echo Form::file('style_logo_ar', array('class' => 'form-control','id'=>'style_logo_ar','accept'=>'image/*')); ?>

                                        <small>
                                            <i class="material-icons">&#xe8fd;</i>( 260x60 px ) -
                                            <?php echo trans('backLang.imagesTypes'); ?>

                                        </small>
                                    </div>
                                <?php endif; ?>
                                <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                    <div class="col-sm-6">
                                        <label for="style_logo_en"><?php echo trans('backLang.siteLogo'); ?> <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?></label>
                                        <?php if($Setting->style_logo_en!=""): ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-12 box p-a-xs text-center">
                                                        <a target="_blank"
                                                           href="<?php echo e(URL::to('uploads/settings/'.$Setting->style_logo_en)); ?>"><img
                                                                    src="<?php echo e(URL::to('uploads/settings/'.$Setting->style_logo_en)); ?>"
                                                                    class="img-responsive" id="style_logo_en_prv"
                                                                    style="width: auto;max-width: 260px;max-height: 60px">
                                                            <br>
                                                            <small><?php echo e($Setting->style_logo_en); ?></small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-12 box p-a-xs text-center">
                                                        <img
                                                                src="<?php echo e(URL::to('uploads/settings/nologo.png')); ?>"
                                                                class="img-responsive" id="style_logo_en_prv"
                                                                style="width: auto;max-width: 260px;max-height: 60px">
                                                        <br>
                                                        <small>nologo.png</small>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php echo Form::file('style_logo_en', array('class' => 'form-control','id'=>'style_logo_en','accept'=>'image/*')); ?>

                                        <small>
                                            <i class="material-icons">&#xe8fd;</i>( 260x60 px ) -
                                            <?php echo trans('backLang.imagesTypes'); ?>

                                        </small>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="style_fav"><?php echo trans('backLang.favicon'); ?></label>
                                    <?php if($Setting->style_fav!=""): ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-12 box p-a-xs text-center">
                                                    <a target="_blank"
                                                       href="<?php echo e(URL::to('uploads/settings/'.$Setting->style_fav)); ?>"><img
                                                                src="<?php echo e(URL::to('uploads/settings/'.$Setting->style_fav)); ?>"
                                                                class="img-responsive" id="style_fav_prv"
                                                                style="max-width: 60px;height: 60px">
                                                        <br>
                                                        <small><?php echo e($Setting->style_fav); ?></small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-12 box p-a-xs text-center">
                                                    <a target="_blank"
                                                       href="<?php echo e(URL::to('uploads/settings/nofav.png')); ?>"><img
                                                                src="<?php echo e(URL::to('uploads/settings/nofav.png')); ?>"
                                                                class="img-responsive" id="style_fav_prv"
                                                                style="max-width: 60px;height: 60px">
                                                        <br>
                                                        <small>nofav.png</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php echo Form::file('style_fav', array('class' => 'form-control','id'=>'style_fav','accept'=>'image/*')); ?>

                                    <small>
                                        <i class="material-icons">&#xe8fd;</i> ( 32x32 px ) -
                                        <?php echo trans('backLang.imagesTypes'); ?>

                                    </small>
                                </div>
                                <div class="col-sm-6">
                                    <label for="style_apple"><?php echo trans('backLang.appleIcon'); ?></label>
                                    <?php if($Setting->style_apple!=""): ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-12 box p-a-xs text-center">
                                                    <a target="_blank"
                                                       href="<?php echo e(URL::to('uploads/settings/'.$Setting->style_apple)); ?>"><img
                                                                src="<?php echo e(URL::to('uploads/settings/'.$Setting->style_apple)); ?>"
                                                                class="img-responsive" id="style_apple_prv" style="width: 60px;height: 60px">
                                                        <br>
                                                        <small><?php echo e($Setting->style_apple); ?></small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-12 box p-a-xs text-center">
                                                    <a target="_blank"
                                                       href="<?php echo e(URL::to('uploads/settings/nofav.png')); ?>"><img
                                                                src="<?php echo e(URL::to('uploads/settings/nofav.png')); ?>"
                                                                class="img-responsive" id="style_apple_prv"
                                                                style="max-width: 60px;height: 60px">
                                                        <br>
                                                        <small>nofav.png</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php echo Form::file('style_apple', array('class' => 'form-control','id'=>'style_apple','accept'=>'image/*')); ?>

                                    <small>
                                        <i class="material-icons">&#xe8fd;</i> ( 180x180 px ) -
                                        <?php echo trans('backLang.imagesTypes'); ?>

                                    </small>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label><?php echo trans('backLang.styleColor1'); ?></label>

                                    <div>
                                        <div id="cp1" class="input-group colorpicker-component">
                                            <?php echo Form::text('style_color1',$Setting->style_color1, array('placeholder' => '','class' => 'form-control','id'=>'style_color1', 'dir'=>trans('backLang.ltr'))); ?>

                                            <span class="input-group-addon" id="cpbg"><i></i></span>
                                        </div>
                                    </div>
                                    <small><a href="javascript:null"
                                              onclick="update_restcolor()"><?php echo trans('backLang.restoreDefault'); ?></a>
                                    </small>
                                </div>

                                <div class="col-sm-4">
                                    <label><?php echo trans('backLang.styleColor2'); ?></label>

                                    <div>
                                        <div id="cp2" class="input-group colorpicker-component">
                                            <?php echo Form::text('style_color2',$Setting->style_color2, array('placeholder' => '','class' => 'form-control','id'=>'style_color2', 'dir'=>trans('backLang.ltr'))); ?>

                                            <span class="input-group-addon" id="cpbg2"><i></i></span>
                                        </div>
                                    </div>
                                    <small><a href="javascript:null"
                                              onclick="update_restcolor2()"><?php echo trans('backLang.restoreDefault'); ?></a>
                                    </small>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label><?php echo e(trans('backLang.layoutMode')); ?> : </label>
                                    <div class="radio">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('style_type','0',$Setting->style_type ? false : true , array('id' => 'style_type1','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.wide')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('style_type','1',$Setting->style_type ? true : false , array('id' => 'style_type2','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.boxed')); ?>

                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-8"
                                     id="bgtyps" <?php echo (!$Setting->style_type) ? "style='display:none'":""; ?>>
                                    <label><?php echo e(trans('backLang.backgroundStyle')); ?> : </label>
                                    <div class="radio">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('style_bg_type','0',($Setting->style_bg_type==0) ? true : false , array('id' => 'style_bg_type1','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.colorBackground')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('style_bg_type','1',($Setting->style_bg_type==1) ? true : false , array('id' => 'style_bg_type2','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.patternsBackground')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('style_bg_type','2',($Setting->style_bg_type==2) ? true : false , array('id' => 'style_bg_type3','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.imageBackground')); ?>

                                        </label>
                                    </div>
                                    <div class="row"
                                         id="bgtclr" <?php echo ($Setting->style_bg_type!=0) ? "style='display:none'":""; ?>>
                                        <div class="col-sm-11">
                                            <div id="cp3" class="input-group colorpicker-component">
                                                <?php echo Form::text('style_bg_color',$Setting->style_color2, array('placeholder' => '','class' => 'form-control','id'=>'style_bg_color', 'dir'=>trans('backLang.ltr'))); ?>

                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row"
                                         id="bgtptr" <?php echo ($Setting->style_bg_type!=1) ? "style='display:none'":""; ?>>
                                        <div>
                                            <?php for($i=1;$i<=24;$i++): ?>
                                                <?php
                                                $img_name = "p" . $i . ".png";
                                                ?>
                                                <div class="col-sm-3">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('style_bg_pattern',$img_name,($Setting->style_bg_pattern==$img_name) ? true : false , array('id' => 'style_bg_pattern'.$i,'class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <img src="<?php echo e(URL::to('uploads/pattern/'.$img_name)); ?>"
                                                             style="width: 40px;height: 40px;border: 2px solid #fff"
                                                             alt="">
                                                    </label>
                                                </div>
                                            <?php endfor; ?>

                                        </div>
                                    </div>

                                    <div class="row"
                                         id="bgtimg" <?php echo ($Setting->style_bg_type!=2) ? "style='display:none'":""; ?>>
                                        <div>
                                            <?php if($Setting->style_bg_image!=""): ?>
                                                <div>
                                                    <div>
                                                        <div class="col-sm-12 box p-a-xs text-center">
                                                            <a target="_blank"
                                                               href="<?php echo e(URL::to('uploads/settings/'.$Setting->style_bg_image)); ?>"><img
                                                                        src="<?php echo e(URL::to('uploads/settings/'.$Setting->style_bg_image)); ?>"
                                                                        class="img-responsive"
                                                                        style="max-height: 200px;width: auto">
                                                                <br>
                                                                <small><?php echo e($Setting->style_bg_image); ?></small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php echo Form::file('style_bg_image', array('class' => 'form-control','id'=>'style_bg_image','accept'=>'image/*')); ?>

                                            <small>
                                                <i class="material-icons">&#xe8fd;</i>( 260x60 px ) -
                                                <?php echo trans('backLang.imagesTypes'); ?>

                                            </small>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label><?php echo e(trans('backLang.footerStyle')); ?> : </label>
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('style_footer','1',($Setting->style_footer ==1) ? true : false , array('id' => 'site_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.footerStyle')); ?> #1
                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('style_footer','2',($Setting->style_footer ==2) ? true : false , array('id' => 'site_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.footerStyle')); ?> #2
                                    </label>
                                </div>

                                <label><?php echo e(trans('backLang.footerStyleBg')); ?> : </label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <?php if($Setting->style_footer_bg!=""): ?>
                                            <div>
                                                <div>
                                                    <div class="col-sm-12 box p-a-xs text-center">
                                                        <a target="_blank"
                                                           href="<?php echo e(URL::to('uploads/settings/'.$Setting->style_footer_bg)); ?>"><img
                                                                    src="<?php echo e(URL::to('uploads/settings/'.$Setting->style_footer_bg)); ?>"
                                                                    class="img-responsive"
                                                                    style="max-height: 200px;width: auto">
                                                            <br>
                                                            <small><?php echo e($Setting->style_footer_bg); ?></small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php echo Form::file('style_footer_bg', array('class' => 'form-control','id'=>'style_footer_bg','accept'=>'image/*')); ?>

                                        <small>
                                            <i class="material-icons">&#xe8fd;</i>( 260x60 px ) -
                                            <?php echo trans('backLang.imagesTypes'); ?>

                                        </small>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="form-group">
                                <label><?php echo e(trans('backLang.newsletterSubscribe')); ?> : </label>
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('style_subscribe','1',$Setting->style_subscribe ? true : false , array('id' => 'site_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.active')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('style_subscribe','0',$Setting->style_subscribe ? false : true , array('id' => 'site_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.notActive')); ?>

                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label><?php echo e(trans('backLang.preLoad')); ?> : </label>
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('style_preload','1',$Setting->style_preload ? true : false , array('id' => 'style_preload1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.active')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('style_preload','0',$Setting->style_preload ? false : true , array('id' => 'style_preload2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.notActive')); ?>

                                    </label>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-info m-t"><?php echo e(trans('backLang.update')); ?></button>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>

                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('footerInclude'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#site_status1").click(function () {
                $("#close_msg_div").css("display", "none");
            });
            $("#site_status2").click(function () {
                $("#close_msg_div").css("display", "block");
            });

            $("#style_type1").click(function () {
                $("#bgtyps").css("display", "none");
            });
            $("#style_type2").click(function () {
                $("#bgtyps").css("display", "inline-block");
            });

            $("#style_bg_type1").click(function () {
                $("#bgtimg").css("display", "none");
                $("#bgtptr").css("display", "none");
                $("#bgtclr").css("display", "inline-block");
            });
            $("#style_bg_type2").click(function () {
                $("#bgtimg").css("display", "none");
                $("#bgtclr").css("display", "none");
                $("#bgtptr").css("display", "inline-block");
            });
            $("#style_bg_type3").click(function () {
                $("#bgtptr").css("display", "none");
                $("#bgtclr").css("display", "none");
                $("#bgtimg").css("display", "inline-block");
            });
        });

    </script>
    <script src="<?php echo e(URL::to('backEnd/libs/jquery/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')); ?>"></script>
    <script>
        $(function () {
            $('#cp1').colorpicker({
                colorSelectors: {
                    'black': '#000000',
                    'white': '#ffffff',
                    'red': '#FF0000',
                    'default': '#777777',
                    'primary': '#337ab7',
                    'success': '#5cb85c',
                    'info': '#5bc0de',
                    'warning': '#f0ad4e',
                    'danger': '#d9534f'
                }
            });
            $('#cp2').colorpicker({
                colorSelectors: {
                    'black': '#000000',
                    'white': '#ffffff',
                    'red': '#FF0000',
                    'default': '#777777',
                    'primary': '#337ab7',
                    'success': '#5cb85c',
                    'info': '#5bc0de',
                    'warning': '#f0ad4e',
                    'danger': '#d9534f'
                }
            });
            $('#cp3').colorpicker({
                colorSelectors: {
                    'black': '#000000',
                    'white': '#ffffff',
                    'red': '#FF0000',
                    'default': '#777777',
                    'primary': '#337ab7',
                    'success': '#5cb85c',
                    'info': '#5bc0de',
                    'warning': '#f0ad4e',
                    'danger': '#d9534f'
                }
            });
        });
        function update_restcolor() {
            document.getElementById("style_color1").value = '#3494c8';
            $("#cpbg i").css("background-color", "#3494c8");
        }

        function update_restcolor2() {
            document.getElementById("style_color2").value = '#2e3e4e';
            $("#cpbg2 i").css("background-color", "#2e3e4e");
        }
    </script>
    <script type="text/javascript">
        function readURL(input,prv) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+prv).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#style_logo_ar").change(function () {
            readURL(this, "style_logo_ar_prv");
        });

        $("#style_logo_en").change(function () {
            readURL(this, "style_logo_en_prv");
        });

        $("#style_fav").change(function () {
            readURL(this, "style_fav_prv");
        });

        $("#style_apple").change(function () {
            readURL(this, "style_apple_prv");
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>