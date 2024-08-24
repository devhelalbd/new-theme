<!-- heading starts -->
<div class="dtr-section-intro text-center dtr-mb-50">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">Contact Us</p>
                    </div>
                    <h2 class="dtr-intro-heading">How can we help you</h2>
                    <p class="dtr-intro-content">Have a question, or just want to say Hi <img draggable="false" role="img" class="emoji" alt="👋" src="https://s.w.org/images/core/emoji/13.1.0/svg/1f44b.svg" width="20px"> Fill in the form below</p>
                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-10 offset-md-1">
                        <div class="dtr-box-wrapper">
                            <div class="dtr-box dtr-shadow">

                                <!-- form starts -->
                                <form id="contactform" method="post" action="php/contact-form.php">
                                    <fieldset>
                                        <div class="dtr-form-row-2col">
                                            <p class="dtr-form-column">
                                                <label>Your name</label>
                                                <input name="name"  type="text" placeholder="Name">
                                            </p>
                                            <p class="dtr-form-column">
                                                <label>Your email</label>
                                                <input name="email"  class="required email" type="text" placeholder="Email Address">
                                            </p>
                                        </div>
                                        <p class="dtr-form-field">
                                            <label>Your message</label>
                                            <textarea rows="5" name="message" class="required"  placeholder="Message..."></textarea>
                                        </p>
                                        <p class="antispam">Leave this empty: <br />
                                            <input name="url" />
                                        </p>
                                        <p class="text-end" style="margin-top: -40px; margin-right: 20px;">
                                            <button class="dtr-btn" type="submit">Submit</button>
                                        </p>
                                        <div id="contactresult"></div>
                                    </fieldset>
                                </form>
                                <!-- form ends -->

                            </div>
                        </div>
                    </div>
                    <!-- column 1 ends -->

                </div>
                <!--== row ends ==-->