<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.3s">
                    <h2><?php echo __('CONTACT_TITLE');?></h2>
                    <div class="separator"></div>
                </div>
                <div class="section-content col-md-8 col-md-offset-2">
                    <div class="row wow fadeInUp" data-wow-delay="0.6s">
                        <div class="col-sm-6 contact-info">
                            <div class="social-links">
                                <a href="<?php echo $faUrl; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo $twUrl; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="<?php echo $gpUrl; ?>" class="plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6 contact-info">
                            <i class="fa fa-envelope"></i>
                            <p>info@hoanganhonline.com<br>contact@hoanganhonline.com</p>
                        </div>
                    </div>
                    <div class="row wow fadeInUp" data-wow-delay="0.9s">
                        <form class="send-form-style" method="post" id="contact_form">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <input type="text" name="name" id="contact_name" required="required" placeholder="<?php echo __('CONTACT_NAME_PLACEHOLDER');?>">
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <input type="email" name="email" id="contact_email" required="required" placeholder="<?php echo __('CONTACT_EMAIL_PLACEHOLDER');?>">
                                </div>
                                <div class="col-md-12">
                                    <textarea id="contact_message" name="message" required="required" placeholder="<?php echo __('CONTACT_MESSAGE_PLACEHOLDER');?>"></textarea>
                                </div>
                            </div>
                            <div class="load-more text-center">
                                <button data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading..." type="submit" class="hvr-shutter-out-horizontal" id="contact_send"><?php echo __('CONTACT_BTN');?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
