<?php get_header(); ?>
    <div class="jumbotron jumbotron-fluid">
        <img src="<?php echo get_theme_file_uri('/images/contactus-img.jpeg'); ?>" alt="ourproducts-img">
        <div class="jumbotrontitle" style="background: none;">
            <br><br>
            <h1 style="color: #21c7b0; font-size: 4vmax;">Contact Us</h1>
        </div>
    </div>
    <div class="ourstorybox" style="background-color: #e8f1fb;">
        <div class="row">
            <div class="col-sm-5">
                <h2>Get in touch</h2>
                    <br>
                    <p style="font-size: 20px;"><b>Trupal</b><br>
                    <b>1st Floor, No. 17,</b><br>
                    <b>Jalan Barat,</b><br>
                    <b>Petaling Jaya, Selangor 46200</b><br>
                    <b>Malaysia</b></p>
                    <br>
                    <p><a href="" style="font-size: 20px; color: #42b5c1;">pharmacy@mbfh.com.my</a><br>
                <a href="" style="font-size: 20px; color: #42b5c1;">+603-7932 1702</a></p>
            </div>
            <div class="col-sm-7">
                <p style="color: #063d5c;font-size: 1.25rem;">Send us a message for business opputurnity</p>
                <form method="POST">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name*</label>
                            <input required type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email*</label>
                            <input required type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number*</label>
                            <input required type="tel" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- <button type="submit" class="btn btn-frontpage">Send message</button> -->
                        <button class="btn btn-frontpage">Send message</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

<?php get_footer(); ?>