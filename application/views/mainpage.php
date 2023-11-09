<?php $this->load->view('header'); ?>



<div id="services" class="our-services section" style="background-color: rgb(69, 69, 223);">
    <div class="container">
      <div class="row">
        <div class="col-lg-4   wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="max-height: 400px;">
          <div class="my-5  left-image max-height=450px max-width=500px" style="border-radius: 10px" >
            <h1 class="text-white">Debt-Free Dreams, Reality Starts Here</h1>
            <img src="<?= base_url(); ?>assets\images\young-smiling-businesswoman_329181-11700.jpg" alt="Img">
          </div>
        </div>
        <div class=" my-5 col-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
         
        <?php
                    if($this->session->flashdata('success')){
                        echo "<div class='text-bold alert alert-success'>".$this->session->flashdata('success')."<br/></div>";
                    }elseif($this->session->flashdata('failure')){
                        echo "<div class='alert alert-danger'>".$this->session->flashdata('failure')."<br/></div>";
                    }
                ?>
          <!-- <form id="contact" action="" method="post"> -->
          <form  id="contact" action="<?= base_url('Web/debtInsurance'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" style="height: 55px;" autocomplete="on" required>
                </fieldset>
              </div>

              <div class="col-lg-12">
                <fieldset>
                  <input type="number" name="number" id="number" placeholder="mobile number" style="height: 55px;" autocomplete="on" 
                  min="10" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                  required>
                
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" style="height: 55px;" placeholder="Your Email" required>
                </fieldset>
              </div>
              <label><input type="hidden" id="leadid_tcpa_disclosure"/></label>
              <div class="col-lg-12">
                <select id="f_totaldebt" class="hm_field_4" name="amount">
                  <optgroup label="Debt">
                  <option selected="selected" value="">Select Debt Amount</option>
                  <option >$0 - $4,999</option>
                  <option >$5,000 - $7,499</option>
                  <option >$7,500 - $9,999</option>
                  <option >$10,000 - $14,999</option>
                  <option >$15,000 - $19,999</option>
                  <option >$20,000 - $29,999</option>
                  <option >$30,000 - $39,999</option>
                  <option >$40,000 - $49,999</option>
                  <option >$50,000 - $59,999</option>
                  <option >$60,000 - $69,999</option>
                  <option >$70,000 - $79,999</option>
                  <option >$80,000 - $89,999</option>
                  <option >$90,000 - $99,999</option>
                  <option >$100,000 +</option>
                  </optgroup>
                  </select>
              </div>
              
                <p>
                  <!-- <label for="f_whereyoulive" class="sr-only">State</label> -->
                  <select id="f_whereyoulive" class="hm_field_5" name="state">
                  <optgroup label="State">
                  <option value="">Select Your State</option>
                  <option >Alaska</option>
                  <option >Alabama</option>
                  <option >Arkansas</option>
                  <option >Arizona</option>
                  <option >California</option>
                  <option >Colorado</option>
                  <option >Connecticut</option> <option >District of Columbia</option> 
                  <option >Delaware</option> <option >Florida</option> <option >Georgia</option> <option >Hawaii</option> <option >Iowa</option> <option >Idaho</option> <option>Illinois</option> <option >Indiana</option> <option >Kentucky</option> <option >Louisiana</option> <option >Massachussetts</option> <option >Maryland</option> <option >Maine</option> <option >Michigan</option> <option >Minnesota</option> <option >Missouri</option> <option >Mississippi</option> <option>Montana</option> <option >North Carolina</option> <option>North Dakota</option> <option>Nebraska</option> <option >New Jersey</option> <option >New Mexico</option> <option >New York</option> <option >Nevada</option> <option >Ohio</option> <option >Oklahoma</option> <option >Oregon</option> <option>Pennsylvania</option> <option>Puerto Rico</option> <option >Rhode Island</option> <option>South Dakota</option> <option>Tennesee</option> <option >Texas</option> <option>Utah</option> <option>Virginia</option> <option >Virgin Islands</option> <option>Vermont</option> <option>Washington</option> <option >Wisconsin</option> <option>Wyoming</option>
                  </optgroup></select>
                  <!-- <span class="err error-whereyou">Please Select Your State.</span> -->
                  </p>

                  <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                  <!-- <div class="col-lg-12">
                                
                                <input class="checkbox" name="radio_chek" type="checkbox" id="leadid_tcpa_disclosure" required/>
                                <label for="leadid_tcpa_disclosure">Agree to the terms and conditions</label>
                                </div> -->
              <div class="col-lg-12">
                <fieldset>
                <button type="submit" id="form-submit" class="main-button ">Get A Free Saving Statement</button>
                </fieldset>
              </div>
            </div>
            <!-- <div class="contact-dec">
              <img src="<?= base_url(); ?>assets\images\contact-decoration.png" alt="">
            </div> -->
          </form>
        </div>
        <div class=" my-5 col-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s " >
          <h1 class="text-white text-bold ">Welcome To Debt Masters USA</h1>
          <p class="text-white text-justify">"Welcome to Debt Masters USA," where financial freedom becomes a reality. Our expert team specializes in crafting personalized debt relief solutions to empower you on your journey toward a debt-free future. With a commitment to your financial well-being, we provide guidance, strategies, and support to conquer debt and regain control of your finances. Join us and take the first step towards a brighter, debt-free tomorrow.</p>
        </div>
      </div>
    </div>
  </div>
  
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <!-- <h6>Welcome to Debt Masters USA</h6> -->
                <h2>Protecting Your<em>Credit Score</em> &amp; <span>During</span>  Debt Settlement</h2>
                <p>Debt, a double-edged financial sword, can either facilitate progress or ensnare individuals in a cycle of financial hardship. It arises from borrowing money, often with interest, and carries the burden of repayment. Prudent management can leverage debt for investments and opportunities, while reckless borrowing can lead to crippling financial stress. Balancing the benefits and risks of debt is crucial, as it profoundly impacts personal and economic well-being, shaping financial destinies in a world where financial responsibility is paramount.</p>
               
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?= base_url(); ?>assets\images\Debt-Management.png" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   
  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="<?= base_url(); ?>assets\images\about-left-image.png" alt="person graphic">
          </div>
        </div>
        
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="<?= base_url(); ?>assets\images\service-icon-01.png" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>Our Core Values</h4>
                    <p>We’re dedicated to making your financial life better,
                      always keeping our core values top of mind:</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="<?= base_url(); ?>assets\images\service-icon-02.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Integrity</h4>
                    <p>Put transparency and trust at the center of every client relationship.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="<?= base_url(); ?>assets\images\service-icon-03.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Growth</h4>
                    <p>Provide support and guidance throughout the debt relief journey.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="<?= base_url(); ?>assets\images\service-icon-04.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Connection</h4>
                    <p>Make a human connection and listen with compassion.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 

  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>See What Our Agency <em>Offers</em> &amp; What We <span>Provide</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="showed-content">
                <h4>Debts We Can Help With</h4>
                <p>Credit Cards</p>
                <p>Personal Loans And Lines Of Credit</p>
                <p>Medical Bills</p>
                <p>Business Debts</p>
                <p>Certain Secured Debts*</p>
                <p>Collection Accounts</p>
              </div>
              <div class="hidden-content">
                <img src="<?= base_url(); ?>assets\images\debt.webp" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="showed-content">
                <h4>Debts We Can't Help With:</h4>
                <p>Lawsuits*</p>
                <p>Utility Bills</p>
                <p>Auto, Federal Student Loans</p>
                <p>Mortgage Or Home Loans</p>
                <p>Other Secured Debts</p>
              </div>
              <div class="hidden-content">
                <img src="<?= base_url(); ?>assets\images\debt.webp" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="showed-content">
                <h4>Tax Issues We Can Help With:</h4>
                <p>Unpaid Taxes</p>
                <p>Business Taxes</p>
                <p>Personal Taxes</p>
                <p>
                  Trust Fund Penalties
                  </p>
                <p>IRA Rollover Issues</p>
                <p>Audits</p>
                <p>Innocent Spouse Relief</p>
                <p>Fresh Start Program</p>

              </div>
              <div class="hidden-content">
                <img src="<?= base_url(); ?>assets\images\debt.webp" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="showed-content">
                <h4>Potential Tax Solutions:</h4>
                <p>Prevent Levy & Seizure</p>
                <p>Tax Lien Release</p>
                <p>File Unfiled Tax Returns</p>
                <p>Income Tax Preparation</p>
                <p>Offer In Compromise</p>
                <p>Fresh Start Program</p>
              </div>
              <div class="hidden-content">
                <img src="<?= base_url(); ?>assets\images\debt.webp" alt="">
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div id="blog" class="our-blog section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Awards  <em> And </em> <span>Certifications</span></h2>
          </div>
        </div>
        <!-- <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="assets/images/blog-dec.png" alt="">
          </div>
        </div> -->
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <a href="#"><img src="<?= base_url(); ?>assets\images\award1.png" alt="Workspace Desktop"></a>
            <div class="info">
              <div class="inner-content">
               <p>When looking for a company to help you get out of debt, be sure they have the necessary accreditations that indicate that they are reputable, trustworthy and are regulated by associations like the American Fair Credit Council and the International Association of Professional Debt Arbitrators. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
              <li>
                <p>

                  DebtMasterUSA is proud of the 1000+ five-star reviews on Customer Lobby. Our goal is no complaints and you can read numerous testimonials from prior clients. DebtMasterUSA has more five Star reviews with testimonials in Customer Lobby than any other debt negotiation companies.</p>
                <div class="right-image">
                  <a href="#"><img src="<?= base_url(); ?>assets\images\pngimg.com - award_PNG13.png" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <p>
                    Honesty and integrity are two of the most important qualities when evaluating debt settlement companies. HONESTe Online is the rating and certification business bureau that ensures this.</p>
                <div class="right-image">
                  <a href="#"><img src="<?= base_url(); ?>assets\images\honest.png" alt=""></a>
                </div>
              </li>
              <!-- <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 06 Mar 2021</span>
                  <a href="#"><h4>SEO Tips &amp; Digital Marketing</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Testimonial End -->

    <?php $this->load->view('footer'); ?>