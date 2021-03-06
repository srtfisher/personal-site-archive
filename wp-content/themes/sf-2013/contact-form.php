<?php
if (! defined('MESSAGE_TYPE')) define('MESSAGE_TYPE', 'message');
if (! defined('SINGLE_PAGE')) define('SINGLE_PAGE', is_page() AND ! is_front_page());
?>
<section class="contact" id="contact">
    <div class="container">
        <?php if (! SINGLE_PAGE) : ?>
            <h3 class="section-title">Let's get in touch.</h3>
            <h4 class="section-sub">We should be in touch. Shoot Sean an email below and he'll get back to you within <strong class="tipsy" title="That is, of course, if I'm not away on a much needed vacation!">one day</strong>.</h4>
        <?php endif; ?>
        
        <div class="alt-btns row">
            <div class="col-lg-3 col-md-3 col-sm-4 left col-lg-push-3 col-md-push-3 col-sm-push-2">
                <p>Want to chat with me?</p>
                <a href="#" data-type="message" class="btn btn-flat btn-<?php echo (MESSAGE_TYPE == 'message') ? 'primary' : 'default'; ?> btn-lg btn-block">Send a Message</a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-lg-push-3 col-md-push-3 col-sm-push-2">
                <p>Want to work with me?</p>
                <a href="#" data-type="project" class="btn btn-flat btn-<?php echo (MESSAGE_TYPE == 'project') ? 'primary' : 'default'; ?> btn-lg btn-block">Start a Project</a>
            </div>
        </div>

        <div class="row">
        <form action="<?php echo home_url('contact'); ?>" method="POST" class="contact-form" data-form-type="message" enctype="multipart/form-data" <?php if (MESSAGE_TYPE !== 'message') echo'style="display:none;"'; ?>>
            <input type="hidden" name="type" value="message" />

            <div class="col-lg-6 col-md-6">
                <textarea name="content" id="contact-textarea" <?php if (SINGLE_PAGE AND MESSAGE_TYPE == 'message') echo 'autofocus'; ?> placeholder="What's on your mind?" class="form-control"></textarea>
            </div>

            <div class="col-lg-6 col-md-6">
                <input type="text" name="subject" class="form-control subject" placeholder="What will we be talking about?" />

                <input type="text" name="your-name" placeholder="What's your name?" class="form-control name" />

                <input type="email" name="your-email" placeholder="What is your email address?" class="form-control email" />

                    <button type="submit" class="btn btn-large btn-primary btn-block" id="contact-btn"
                data-placement="top" data-content="I will not help wire money to your account, need SEO services, or want to rule the world. Thank you!"
                data-title="Before you waste your time!" data-trigger="hover" data-loading-text="Sending...">Send Your Message</button>
            </div>
            
            
            <input type="hidden" name="is-robot" id="is-robot" value="yes" />
        </form>
        </div>
        
        <form action="<?php echo home_url('contact'); ?>" method="POST" class="contact-form" data-form-type="project" enctype="multipart/form-data" <?php if (MESSAGE_TYPE !== 'project') echo'style="display:none;"'; ?>>
            <input type="hidden" name="type" value="project" />
            <input type="hidden" name="is-robot" id="is-robot" value="yes" />

            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-lg-push-2 col-md-push-2 col-sm-push-2" class="project-messages">

                    <?php if (date('Y') <= 2014 AND date('n') <= 3) : ?>
                    <div class="contact-alert" style="width:80%;">
                        I'm currently accepting work for Spring 2014 — would love to hear from you.
                    </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="your-name">Your Name</label>
                        <input required type="text" name="your-name" id="your-name" placeholder="What's your name?" class="form-control name" <?php if (defined('SINGLE_PAGE') AND MESSAGE_TYPE == 'project') echo 'autofocus'; ?> />
                    </div>

                    <div class="form-group">
                        <label for="your-email">Your Email Address</label>
                        <input required type="email" name="your-email" id="your-email" placeholder="What is your email address?" class="form-control email" />
                    </div>

                    <div class="form-group">
                        <label for="describe-project">Describe Your Project</label>
                        <textarea required name="describe-project" id="describe-project" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="describe-projects-they-like">List some projects or websites that you like</label>
                        <textarea required name="describe-projects-they-like" id="describe-projects-they-like" class="form-control"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="budget">What is your budget for this project?</label>
                                <input required type="text" name="budget" class="form-control" id="budget" placeholder="$0,000" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="completion-date">When would you want this project completed by?</label>
                                <input required type="text" name="completion-date" class="form-control" id="completion-date" placeholder="mm/dd/yyyy" />
                            </div>
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <label id="any-other-information">Any other information that would be necessary?</label>
                        <textarea required name="any-other-information" id="any-other-information" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-large btn-primary btn-block" data-loading-text="Sending...">Send Your Project</button>
                </div>
            </div>
        </form>

        <div id="contact-error" class="contact-alert error" style="display:none;">
            <h4 class="leading">Your form contains invalid things &mdash; try and fix it!</h4>
        </div>
        <div id="contact-sent" class="contact-alert" style="display:none;">
            <h4 class="leading">Your message has been sent &mdash; stay tuned!</h4>
        </div>

        <?php if (! defined('SINGLE_PAGE')) : ?>
            <h4 class="section-sub alt-contact">Don't prefer E Mail? I'd love to hear from you &mdash; Call me at <strong>(347) 855-7326</strong> or Skype me at <a href="skype:srtfisher?add">srtfisher</a></h4>
        <?php endif; ?>
    </div>
</section>