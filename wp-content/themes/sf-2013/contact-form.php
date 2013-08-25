<section class="contact" id="contact">
    <div class="container">
        <h3 class="section-title">Let's get in touch.</h3>
        <h4 class="section-sub">We should be in touch. Shoot Sean an email below and he'll get back to you within <strong class="tipsy" title="That is, of course, if I'm not away on a much needed vacation!">one day</strong>.</h4>
        
        <div class="row">
        <form action="/contact" method="POST" id="contact-form" enctype="multipart/form-data">
            
            <div class="col-lg-6 col-md-6">
                <textarea name="content" id="contact-textarea" <?php if (defined('SINGLE_PAGE')) echo 'autofocus'; ?> placeholder="What's on your mind?" class="form-control"></textarea>
            </div>

            <div class="col-lg-6 col-md-6">
                <input type="text" name="subject" class="form-control subject" placeholder="What will we be talking about?" />

                <input type="text" name="your-name" placeholder="What's your name?" class="form-control name" />

                <input type="email" name="your-email" placeholder="What is your email address?" class="form-control email" />

                    <button type="submit" class="btn btn-large btn-primary btn-block" id="contact-btn"
                data-placement="top" data-content="I will not help wire money to your account, need SEO services, or want to rule the world. Thank you!"
                data-title="Before you waste your time!" data-trigger="hover">Send Your Message</button>
            </div>
            
            
            <input type="hidden" name="is-robot" id="is-robot" value="yes" />
        </form>
        </div>

        <div id="content-error" style="display:none;">
            <div class="alert alert-error"><p align="center">Your form contains invalid things &mdash; try and fix it!</p></div>
        
        </div>
        <div id="contact-sent" style="display:none;">
            <div class="alert">
                <p align="center">Your message has been sent my way &mdash; stay tuned!</p>
            </div>
        </div>
    </div>
</section>