<?php if (is_front_page() ) { ?>


   <?php
  $language = 'us'; 
  if(isset($_COOKIE['language'])){
  $language = $_COOKIE['language'];
  }
?> 
  


  <footer class="footer-section mb-0">
    <div class="container mx-w">
      <div class="row g-0">
        
        <!-- Left Column -->
        <div class="col-lg-6 gap-col">
          <div class=" footer-box2 h-100">
         
            <img src="/wp-content/uploads/2025/08/footer-logo-1.png" class="m-logo d-none"  alt="Doceree Logo" class="mb-3" style="max-width:180px; ">
    
            <div style="height:35px;" ></div>
    
         
            <p class="footer-desc mt-0 mt-md-4 d-none">
              Leading the way in making HCP–patient conversations richer and more meaningful through patented, responsive technology.
              Doceree addresses both current and emerging challenges for healthcare and life sciences organizations in HCP–patient engagement,
              particularly where digital and technological advancements play a crucial role.
            </p>
    
            <div style="height:35px;" class="d-none d-md-block"></div>
    
            <!-- Single Footer Sub Logo -->
            <div class="footer-logos mt-custom" style="">
               <?php
                  if(is_active_sidebar('footer-sidebar-1')){
                  dynamic_sidebar('footer-sidebar-1');
                  }
                  ?>
                <!-- Desktop / tablet sprite -->
               <!--  <img src="/wp-content/uploads/2025/08/footer-sublogos.png"
                     alt="Footer Sub Logo"
                     class="d-none d-md-inline-block"
                     style="max-width: 300px; height: auto;"> -->
              
                <!-- Mobile-only two logos in one row -->
                <div class="d-flex d-md-none align-items-center d-none justify-content-center gap-3">
                  <img src="/wp-content/uploads/2025/08/image-309-1.png" alt="Logo 1" class="mobile-sublogo">
                  <img src="/wp-content/uploads/2025/08/image-310.png" alt="Logo 2" class="mobile-sublogo">
                </div>
              </div>
              
          </div>
        </div>
    
        <!-- Right Column -->
        <div class="col-lg-6 gap-col">
          <div class="footer-box  h-100">
            <!-- First Row: Quick Links + Policies -->
            <div class="row footer-quick-links">
              <div class="col-md-6  col-6 mb-4 mb-md-0">
                <h6 class="footer-heading"><i class="fas fa-link me-2"></i>Quick links</h6>
                <ul class="list-unstyled">
                  <li><a href="<?php echo home_url();?>/poc/" data-type="URL" data-id="/">Marketers<br>
						</a>
					</li>
					<li><a href="<?php echo home_url();?>/copay/" data-type="URL" data-id="/">Market Access<br>
						</a>
					</li>
					<li><a href="https://doceree.com/provider/" data-type="URL" data-id="/">EHR Platforms<br>
						</a>
					</li>
					<li><a href="https://doceree.com/provider/admanager/" data-type="URL" data-id="/">Publishers<br>
						</a>
					</li>
					<li><a href="<?php echo home_url();?>/marketplace-brand/" data-type="URL" data-id="/">Marketplace<br>
						</a>
					</li>
					<li><a href="<?php echo home_url();?>/blog/" data-type="URL" data-id="/careers/">Insights<br>
						</a>
					</li>
					<li><a href="<?php echo home_url();?>/our-story/" data-type="URL" data-id="/about-us/">About<br>
						</a>
					</li>
                </ul>
              </div>
              <div class="col-md-6  col-6  mb-4 mb-md-0">
                <h6 class="footer-heading"><i class="fas fa-file-alt me-3"></i>Policies</h6>
                <ul class="list-unstyled">

                <li><a href="<?php echo home_url();?>/us-privacy-policy/">Privacy Policy</a></li>
                <li><a href="<?php echo home_url();?>/us-terms-of-service-advertiser/">Terms of Service - Advertiser</a></li>
               <li><a href="<?php echo home_url();?>/us-program-policy-terms/">Program Policy Terms</a></li>
    
               <li><a href="<?php echo home_url();?>/us-content-policy/" data-type="URL">Content Policy</a></li>
          
          <li><a href="<?php echo home_url();?>/media-and-partner-resources/" data-type="URL">Media and Partner Resources</a></li>
          <li><a href="<?php echo home_url();?>/us-patient-affordability-program-policy/" data-type="URL">Patient Affordability Program Policy</a></li>
          <li><a href="<?php echo home_url();?>/us-terms-of-service-marketplace/" data-type="URL">Terms of Service - Marketplace</a></li>
                </ul>
              </div>
            </div>
    
            <!-- Second Row: Address + Subscribe -->
            <div class="row mt-3    footer-address-subscribe">
              <div class="col-md-6  col-6 ">
                <h6 class="footer-heading"><i class="fas fa-map-marker-alt me-2"></i>Address</h6>
                <p class="footer-address">
                  <strong>US Headquarters</strong><br>150 John F Kennedy Pkwy, Suite 463,<br>Short Hills, NJ 07078
                </p>
                <p class="footer-address ">
                  <strong>UK Office</strong><br>Doceree UK Ltd Spaces, 83 Baker Street, London W1U 6AG
                </p>
                <p class="footer-address">
                  <strong>India Office</strong><br>Max Square, Floor 11, Plot No. C3-C, Sector 129, Noida-Greater Noida Expressway, Noida, Uttar Pradesh 201304
                </p>
              </div>
              <div class="col-md-6  col-6 ">
                <h6 class="footer-heading"><i class="fas fa-envelope me-2"></i>Subscribe to the newsletter</h6>
                <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
                <script>
                  hbspt.forms.create({
                  region: "eu1",
                  portalId: "24898002",
                  formId: "5437a49c-62fc-4fe5-9b14-bcdeac0fadcc",
                     css:'doceree-dm'
                  });
                </script>
                <!-- <form class="d-flex flex-column">
                  <input type="email" class="form-control mb-2" placeholder="Email">
                  <button class="btn subscribe-btn " >Subscribe</button>
                </form> -->
              </div>
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </footer>

  <div class="modal fade" id="download_case_study" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
  
    <div class="modal-body pdf-modal">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    <h3 class="form-body">Download the <span class="report-type">Report</span></h3>
    <p class="form-body">Please provide the following information to download the <span class="report-type-s">Report</span></p>
    <?php// echo do_shortcode('[contact-form-7 id="8352" title="Popup Form Download Case Study"]'); */?>

      <div class="form-body"><?php echo do_shortcode('[contact-form-7 id="8352" title="Popup Form Download Case Study"]');?></div>
      <div class="download-success">
    <strong>Thank you!</strong>
    <p>We have sent the <span class="report-type-s">Case Study</span> to your email ID.</p>
    </div> 
    
    </div>
  </div>
  </div>
</div> 


<!-- Let's Talk Modal -->
<!-- <div class="modal fade" id="letsTalkModalCenter" tabindex="-1" role="dialog" aria-labelledby="letsTalkModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="letsTalkModalLongTitle">Let's Talk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pt-0">
      <div class="contact-content lets-talk-form">
        <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
          region: "eu1",
          portalId: "24898002",
          formId: "000761e3-f858-4451-aaf1-a019e412d9a2",
            css:'doceree-dm'
          });
        </script>
      </div>
      </div>
    </div>
  </div>
</div> -->

<div class="modal fade" id="letsTalkModalCenter" tabindex="-1" aria-labelledby="letsTalkModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="letsTalkModalLongTitle">Let's Talk</h5>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pt-0">
        <div class="contact-content lets-talk-form">
          <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
          <script>
            hbspt.forms.create({
              region: "eu1",
              portalId: "24898002",
              formId: "000761e3-f858-4451-aaf1-a019e412d9a2",
              css: 'doceree-dm'
            });
          </script>
        </div>
      </div>
    </div>
  </div>
</div>

  
	<!-- 
    </div>
  </div>
</div>
-->






 <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>



 <script>

  gsap.registerPlugin(ScrollTrigger);

  // 🛡️ Make ScrollTrigger listen to all important events
  ScrollTrigger.config({
    autoRefreshEvents: "DOMContentLoaded,load,visibilitychange,resize"
  });

  // ✅ Delay ScrollTrigger calculation until everything is fully painted
  window.addEventListener("load", () => {
    requestAnimationFrame(() => {
      setTimeout(() => {
        initializeCircleTimeline();     // build timeline after delay
        ScrollTrigger.refresh(true);    // force recalculation
      }, 150); // buffer for Safari layout paint
    });
  });

  function initializeCircleTimeline() {
    const section = document.getElementById('circleStage');
    const stack = document.getElementById('stack');

    const c1 = document.getElementById('c1');
    const c2 = document.getElementById('c2');
    const c3 = document.getElementById('c3');
    const c4 = document.getElementById('c4');
    const c5 = document.getElementById('c5');

    const card1 = document.getElementById('card1');
    const card2 = document.getElementById('card2');
    const card3 = document.getElementById('card3');
    const card4 = document.getElementById('card4');
    const card5 = document.getElementById('card5');

    const onionLayer = document.getElementById('onionLayer');

    gsap.set([c1, c2, c3, c4, c5], {
      autoAlpha: 0,
      scale: 0.5,
      transformOrigin: "50% 50%"
    });

    gsap.set([card1, card2, card3, card4, card5], {
      autoAlpha: 0,
      y: 300
    });

    // Set z-index (top to bottom)
    gsap.set(c1, { zIndex: 5 });
    gsap.set(c2, { zIndex: 4 });
    gsap.set(c3, { zIndex: 3 });
    gsap.set(c4, { zIndex: 2 });
    gsap.set(c5, { zIndex: 1 });

    if (onionLayer) {
      gsap.set(onionLayer, {
        autoAlpha: 0,
        y: 40,
        pointerEvents: "none"
      });
    }

    // const SCALE = {
    //   c1: 0.70,
    //   c2: 0.92,
    //   c3: 1.18,
    //   c4: 1.35,
    //   c5: 1.75
    // };
    const isMobile = window.innerWidth <= 768;

const SCALE = isMobile
  ? { c1: 0.35, c2: 0.48, c3: 0.62, c4: 0.75, c5: 0.9 }   // 📱 mobile (tiny circles)
  : { c1: 0.70, c2: 0.92, c3: 1.18, c4: 1.35, c5: 1.75 }; // 🖥 desktop
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: section,
        start: "top top",
        end: "+=" + window.innerHeight * 5,
        scrub: 1,
        pin: true,
        anticipatePin: 1,
        invalidateOnRefresh: true
      }
    });

    function addCircle(circle, toScale, card, cardY, label) {
      tl.addLabel(label)
        .to(circle, { autoAlpha: 1, duration: 0.6 }, label)
        .to(circle, { scale: toScale, duration: 0.6 }, "<")
        .to(card, { autoAlpha: 1, y: cardY, duration: 0.7 }, "<0.1");
    }

    // Animate in order
    addCircle(c1, SCALE.c1, card1, 0, "p1");
    addCircle(c2, SCALE.c2, card2, 56, "p2");
    addCircle(c3, SCALE.c3, card3, 112, "p3");
    addCircle(c4, SCALE.c4, card4, 168, "p4");
    addCircle(c5, SCALE.c5, card5, 224, "p5");

    if (onionLayer) {
      tl.to([stack, "#cardLayer"], { autoAlpha: 0, duration: 0.6 }, "+=0.2")
        .to(onionLayer, {
          autoAlpha: 1,
          y: 0,
          duration: 0.85,
          ease: "power2.out",
          onStart: () => gsap.set(onionLayer, { pointerEvents: "auto" })
        }, "<0.1");
    }
  }

  // Safety: refresh on resize too
  ScrollTrigger.addEventListener("refreshInit", () => {
    ScrollTrigger.refresh(true);
  });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Slick JS (place before </body>) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

 <script>
  $(document).ready(function(){
    $('.testimonial-slider').slick({
      slidesToShow: 1.25,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      infinite: false
    });
  });
</script> 


<!-- 
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true, 
    offset: 100, 
  });
</script>
 -->


<!-- Linkein tracking -->
<script type="text/javascript">
_linkedin_partner_id = "4556057";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript><img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4556057&fmt=gif" /></noscript>
<!-- Linkein tracking  -->
<!-- Start of HubSpot Embed Code --> 
<script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/24898002.js"></script> 
<!-- End of HubSpot Embed Code -->

<!-- <script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.stack img').forEach(function (img) {
    let lazySrc = img.getAttribute('data-lazy-src');
    let src = img.getAttribute('src');

    // If lazySrc exists and it's different from src → replace it
    if (lazySrc && (!src || src.includes('placeholder') || src === '')) {
      img.setAttribute('src', lazySrc);
    }

    // Remove data-lazy-src attribute
    img.removeAttribute('data-lazy-src');

    // Add skip-lazy class
    img.classList.add('skip-lazy');

    // Disable lazy loading completely
    img.setAttribute('loading', 'eager');
  });
});
</script> -->



<?php wp_footer(); ?>
</body>
</html>

<?php } else { ?>


<footer>
    <div class="container tsee">
	  <button class="back-to-top" type="button"></button>
      <div class="row">
        <div class="col-md-3">
          <div id="footer-sidebar1">
                <?php
                if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
                }
                ?>
          </div>
        </div>
		  
		  <div class="col-md-3">
			   <div id="footer-sidebar2">
				<aside id="block-26" class="widget widget_block">
					<strong>Quick Links</strong>
				</aside>
			  
				<aside id="block-46" class="widget widget_block">
					<ul style="line-height: 10px;">
						<li><a href="<?php echo home_url();?>/poc/" data-type="URL" data-id="/">Marketers<br>
							</a>
						</li>
						<li><a href="<?php echo home_url();?>/copay/" data-type="URL" data-id="/">Market Access<br>
							</a>
						</li>
						<li><a href="<?php echo home_url();?>/provider/" data-type="URL" data-id="/">EHR Platforms<br>
							</a>
						</li>
						<li><a href="<?php echo home_url();?>/provider/admanager/" data-type="URL" data-id="/">Publishers<br>
							</a>
						</li>
						<li><a href="<?php echo home_url();?>/marketplace-brand/" data-type="URL" data-id="/">Marketplace<br>
							</a>
						</li>
						<li><a href="<?php echo home_url();?>/blog/" data-type="URL" data-id="/careers/">Insights<br>
							</a>
						</li>
						<li><a href="<?php echo home_url();?>/our-story/" data-type="URL" data-id="/about-us/">About<br>
							</a>
						</li>
					</ul>
				</aside>

				<div class="icons">
					<?php $value = get_field('header_option', 'option'); ?>
					<a href="<?php echo esc_url($value['link_setting']); ?>" target="_blank"><i class="fa fa-linkedin icon"></i>
					</a>
					<a href="<?php echo $value['fb_setting']; ?>" target="_blank"><i class="fa fa-facebook icon"></i>
					</a>
					<a href="<?php echo $value['twitter_setting']; ?>" target="_blank"><img src="/wp-content/themes/doceree/css/images/home-new/twitter-icon.png" alt="twitter-icon" style="height: 16px; vertical-align: text-top;">
					</a>
					<!-- <i class="fa fa-facebook icon"></i>
				<i class="fa fa-twitter icon"></i> -->
				</div>
            </div>
			  
			  
                <div id="footer-sidebar4">
                  <?php
                  if(is_active_sidebar('footer-sidebar-4')){
                  dynamic_sidebar('footer-sidebar-4');
                  }
                  ?>
                </div>
           </div>
		


         


        <div class="col-md-2 Policies">
           <div id="footer-sidebar3">
               <?php 
              //if(is_active_sidebar('footer-sidebar-3')){
              //dynamic_sidebar('footer-sidebar-3');
              //}
			  if ($language == 'uk'){
			  ?>
			  <aside id="block-26" class="widget widget_block">
				<strong>Policies</strong>
			  </aside>
			  <aside id="block-21" class="widget widget_block">
				<ul>
					<li><a href="<?php echo home_url();?>/uk-privacy-policy/">Privacy Policy</a></li>
					<li><a href="<?php echo home_url();?>/uk-terms-of-service-advertiser/">Terms of Service - Advertiser</a></li>
					<li><a href="<?php echo home_url();?>/uk-program-policy-terms/">Program Policy Terms</a></li>
					<!-- <li><a href="<?php echo home_url();?>/uk-ad-implementation-policies/" data-type="URL">Ad Implementation Policy</a></li> -->
					<li><a href="<?php echo home_url();?>/uk-content-policy/" data-type="URL">Content Policy</a></li>
					<!-- <li><a href="<?php echo home_url();?>/uk-brand-policies/" data-type="URL">Brand Policy</a></li> -->
				<li><a href="<?php echo home_url();?>/media-and-partner-resources/" data-type="URL">Media and Partner Resources</a></li>
				</ul>
			  </aside>
			  <?php
			  } else if($language == 'au' ){
			  ?>
			  <aside id="block-26" class="widget widget_block">
				<strong>Policies</strong>
			  </aside>
			  <aside id="block-21" class="widget widget_block">
				<ul>
					<li><a href="<?php echo home_url();?>/in-privacy-policy/">Privacy Policy</a></li>
					<li><a href="<?php echo home_url();?>/in-terms-of-service-advertiser/">Terms of Service - Advertiser</a></li>
					<li><a href="<?php echo home_url();?>/in-program-policy-terms/">Program Policy Terms</a></li>
					<!-- <li><a href="<?php echo home_url();?>/in-ad-implementation-policies/" data-type="URL">Ad Implementation Policy</a></li> -->
					<li><a href="<?php echo home_url();?>/in-content-policy/" data-type="URL">Content Policy</a></li>
					<!-- <li><a href="<?php echo home_url();?>/in-brand-policies/" data-type="URL">Brand Policy</a></li> -->
					<li><a href="<?php echo home_url();?>/media-and-partner-resources/" data-type="URL">Media and Partner Resources</a></li>
				</ul>
			  </aside>
			  <?php } else{ ?>
              <aside id="block-26" class="widget widget_block">
				<strong>Policies</strong>
			  </aside>
			  <aside id="block-21" class="widget widget_block">
				<ul>
					<li><a href="<?php echo home_url();?>/us-privacy-policy/">Privacy Policy</a></li>
					<li><a href="<?php echo home_url();?>/in-privacy-policy/">Privacy Policy</a></li>
					<li><a href="<?php echo home_url();?>/us-terms-of-service-advertiser/">Terms of Service - Advertiser</a></li>
					<li><a href="<?php echo home_url();?>/us-program-policy-terms/">Program Policy Terms</a></li>
					<!-- <li><a href="<?php echo home_url();?>/us-ad-implementation-policies/" data-type="URL">Ad Implementation Policy</a></li> -->
					<li><a href="<?php echo home_url();?>/us-content-policy/" data-type="URL">Content Policy</a></li>
					<!-- <li><a href="<?php echo home_url();?>/us-brand-policies/" data-type="URL">Brand Policy</a></li> -->
					<li><a href="<?php echo home_url();?>/media-and-partner-resources/" data-type="URL">Media and Partner Resources</a></li>
					<li><a href="<?php echo home_url();?>/us-patient-affordability-program-policy/" data-type="URL">Patient Affordability Program Policy</a></li>
					<li><a href="<?php echo home_url();?>/us-terms-of-service-marketplace/" data-type="URL">Terms of Service - Marketplace</a></li>
				</ul>
			  </aside>
			  <?php 	  
			  }
              ?>
           </div>
        </div>
		  
		  <div class="col-md-2">
		  	<aside class="widget widget_block newsletter-box">
				<strong style="line-height: 16px;">Subscribe to the newsletter</strong>
				<div class="newsletter-form">
					<script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
						<script>
						  hbspt.forms.create({
							region: "eu1",
							portalId: "24898002",
							formId: "5437a49c-62fc-4fe5-9b14-bcdeac0fadcc",
							   css:'doceree-dm'
						  });
						</script>
					</div>
			</aside>
		  </div>

        
      </div>
    </div>
    <div class="container mobile-ftrs">
      <div class="col-md-3 mobile-foters">
	  <?php /*
        <div id="footer-sidebar5">
          <?php
          if(is_active_sidebar('footer-sidebar-5')){
          dynamic_sidebar('footer-sidebar-5');
          }
          ?>
        </div>
	  */ ?>
	  <div id="footer-sidebar5">
	  	<!-- /wp-content/uploads/2022/02/Doceree-Logo-04.svg -->
	   <aside id="block-69" class="widget widget_block widget_media_image">
		  <figure class="wp-block-image size-full is-resized"><a href="https://doceree.com/"><img loading="lazy" src="/wp-content/uploads/2022/06/doceree-programmatic-health-advertisements-platforms-for-hcp-targeting.svg" alt="" class="wp-image-7705" width="153" height="39"></a></figure>
	   </aside>
	   <aside id="block-66" class="widget widget_block">
		  <p>Leading the way in making HCP-patient conversations richer and more meaningful through patented, responsive technology, Doceree addresses both current and emerging challenges for healthcare and life sciences organizations in HCP-patient engagement, particularly where digital and technological advancements play a crucial role.</p>
	   </aside>
	   <aside id="block-67" class="widget widget_block">
		  <div class="row footer-row">
			 <div class="col-xs-4 pl-3">
				<a href="https://gdpr.eu/" target="_blank"><img src="/wp-content/uploads/2021/12/GDPR.png"></a>
			 </div>
			 <div class="col-xs-4 pl-3">
				<a href="https://oag.ca.gov/privacy/ccpa" target="_blank"><img src="/wp-content/uploads/2021/12/CCPA.png"></a>
			 </div>
			 <div class="col-xs-4 pl-3">
				<a href="https://www.hhs.gov/hipaa/index.html" target="_blank"><img src="/wp-content/uploads/2021/12/HIPAA.png"></a>
			 </div>
			 <div class="col-xs-4 pl-3">
				<a href="https://iabeurope.eu/transparency-consent-framework/" target="_blank"><img src="/wp-content/uploads/2021/12/IAB-Approved.png"></a>
			 </div>
			 <div class="col-xs-4 pl-3">
				<a href="https://www.iamai.in/" target="_blank"><img src="/wp-content/uploads/2021/12/IAMAL.png"></a>
			 </div>
		  </div>
		  <div class="row footer-row pt-3">
			  <div class="col-xs-4 pl-3">
				<a href="https://www.tagtoday.net/" target="_blank"><img src="/wp-content/uploads/2022/02/tag-logo.png"></a>
			 </div>
			  <div class="col-xs-4 pl-3">
				<a href="https://iabtechlab.com/" target="_blank"><img src="/wp-content/uploads/2021/12/IAB.png"></a>
			 </div>
			  <div class="col-xs-4 pl-3">
				<a href="https://www.iso.org/" target="_blank"><img src="/wp-content/themes/doceree/css/images/home-new/iso-logo.png"></a>
          		</div>
			  <div class="col-xs-4 pl-3">
				<a href="https://www.aicpa-cima.com/" target="_blank"><img src="/wp-content/themes/doceree/css/images/home-new/soc2-logo.png"></a>
          		</div>
		  </div>
		  <div class="accordion" id="accordion_footer">
			 <div class="item footer-item">
				<div class="item-header" id="headingTopOne">
				   <strong class="mb-0">
					  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsedTopOne" aria-expanded="false" aria-controls="collapsedTopOne">
					  Quick Links<i class="fa fa-angle-up"></i><br>
					  </button><br>
				   </strong>
				</div>
				<div id="collapsedTopOne" class="parameters-0 collapse" aria-labelledby="headingTopOne" data-parent="#accordion_footer" style="">
				   <div class="row">
					  <ul>
						 <li><a href="<?php echo home_url();?>/poc/" data-type="URL" data-id="/">Marketers<br>
							</a>
						 </li>
						 <li><a href="<?php echo home_url();?>/copay/" data-type="URL" data-id="/">Market Access<br>
							</a>
						 </li>
						 <li><a href="<?php echo home_url();?>/provider/" data-type="URL" data-id="/">EHR Platforms<br>
							</a>
						 </li>
						 <li><a href="<?php echo home_url();?>/provider/admanager/" data-type="URL" data-id="/">Publishers<br>
							</a>
						 </li>
						 <li><a href="<?php echo home_url();?>/marketplace-brand/" data-type="URL" data-id="/">Marketplace<br>
							</a>
						 </li>
						 <li><a href="<?php echo home_url();?>/blog/" data-type="URL" data-id="/careers/">Insights<br>
							</a>
						 </li>
						 <li><a href="<?php echo home_url();?>/our-story/" data-type="URL" data-id="/about-us/">About<br>
							</a>
						 </li>
					  </ul>
				   </div>
				</div>
			 </div>
			 <div class="item footer-item">
				<div class="item-header" id="headingTopTwo">
				   <strong class="mb-0">
					  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsedTopTwo" aria-expanded="true" aria-controls="collapsedTopTwo">
					  Policies<i class="fa fa-angle-up"></i><br>
					  </button><br>
				   </strong>
				</div>
				<div id="collapsedTopTwo" class="parameters-1 collapse" aria-labelledby="headingTopTwo" data-parent="#accordion_footer" style="">
				   <div class="row">
				<?php 
				if ($language == 'uk'){
				?>
				<ul>
					<li><a href="<?php echo home_url();?>/uk-privacy-policy/">Privacy Policy</a></li>
					<li><a href="<?php echo home_url();?>/uk-terms-of-service-advertiser/">Terms of Service - Advertiser</a></li>
					<li><a href="<?php echo home_url();?>/uk-program-policy-terms/">Program Policy Terms</a></li>
					<!-- <li><a href="<?php echo home_url();?>/uk-ad-implementation-policies/" data-type="URL">Ad Implementation Policy</a></li> -->
					<li><a href="<?php echo home_url();?>/uk-content-policy/" data-type="URL">Content Policy</a></li>
					<!-- <li><a href="<?php echo home_url();?>/uk-brand-policies/" data-type="URL">Brand Policy</a></li> -->
					<li><a href="<?php echo home_url();?>/media-and-partner-resources/" data-type="URL">Media and Partner Resources</a></li>
				</ul>
			  <?php
			  } else if($language == 'au' ){
			  ?>
				<ul>
					<li><a href="<?php echo home_url();?>/in-privacy-policy/">Privacy Policy</a></li>
					<li><a href="<?php echo home_url();?>/in-terms-of-service-advertiser/">Terms of Service - Advertiser</a></li>
					<li><a href="<?php echo home_url();?>/in-program-policy-terms/">Program Policy Terms</a></li>
					<!-- <li><a href="<?php echo home_url();?>/in-ad-implementation-policies/" data-type="URL">Ad Implementation Policy</a></li> -->
					<li><a href="<?php echo home_url();?>/in-content-policy/" data-type="URL">Content Policy</a></li>
					<!-- <li><a href="<?php echo home_url();?>/in-brand-policies/" data-type="URL">Brand Policy</a></li> -->
					<li><a href="<?php echo home_url();?>/media-and-partner-resources/" data-type="URL">Media and Partner Resources</a></li>
				</ul>
			  <?php } else{ ?>
              
				<ul>
					<li><a href="<?php echo home_url();?>/us-privacy-policy/">Privacy Policy</a></li>
					<li><a href="<?php echo home_url();?>/us-terms-of-service-advertiser/">Terms of Service - Advertiser</a></li>
					<li><a href="<?php echo home_url();?>/us-program-policy-terms/">Program Policy Terms</a></li>
				<!-- 	<li><a href="<?php echo home_url();?>/us-ad-implementation-policies/" data-type="URL">Ad Implementation Policy</a></li> -->
					<li><a href="<?php echo home_url();?>/us-content-policy/" data-type="URL">Content Policy</a></li>
					<!-- <li><a href="<?php echo home_url();?>/us-brand-policies/" data-type="URL">Brand Policy</a></li> -->
					<li><a href="<?php echo home_url();?>/media-and-partner-resources/" data-type="URL">Media and Partner Resources</a></li>
					<li><a href="<?php echo home_url();?>/us-patient-affordability-program-policy/" data-type="URL">Patient Affordability Program Policy</a></li>
					<li><a href="<?php echo home_url();?>/us-terms-of-service-marketplaces/" data-type="URL">Terms of Service - Marketplace</a></li>
				</ul>
			  <?php 	  
			  }
              ?>
					  
				   </div>
				</div>
			 </div>
			 <div class="item footer-item">
				<div class="item-header" id="headingTopThree">
				   <strong class="mb-0">
					  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsedTopThree" aria-expanded="true" aria-controls="collapsedTopThree">Address<i class="fa fa-angle-up"></i></button>
				   </strong>
				</div>
				<div id="collapsedTopThree" class="collapse parameters-2 footer_add" aria-labelledby="headingTopThree" data-parent="#accordion_footer">
				   <div class="row">
					  <div class="footer-address">
						 <strong class="footer-title" style="margin-bottom: 2px;">US Headquarters</strong><p>150 John F Kennedy Pkwy, Suite 420, <br>Short Hills, NJ 07078</p>
						 <strong class="footer-title" style="margin-bottom: 2px;">UK Office</strong>
							<p>Doceree UK Ltd Spaces, 83 Baker Street,<br>London W1U 6AG
						 </p>
						 <strong class="footer-title" style="margin-bottom: 2px;">India Office</strong>
<!-- 						  <p style="margin-bottom: 4px;"><b>Registered Office</b></p>
						  <p>Level #1, B-Block, 8 Balaji Estate, Guru<br>Ravidas Marg, Kalkaji, New Delhi 110019</p>
						  <p style="margin-bottom: 4px;"><b>Corporate Office</b></p> -->
						  <p>Max Square, Floor 11, Plot No. C3-C,<br>Jaypee Wishtown, Noida-Greater Noida Expressway,<br>Sector 129, Noida, Uttar Pradesh 201304</p>
					  </div>
				   </div>
				</div>
			 </div>
			  
			  <div class="item footer-item newsletter-xs">
				<aside class="widget widget_block newsletter-box">
					<strong style="line-height: 16px;color: #b263de;">Subscribe to the newsletter</strong>
					<div class="newsletter-form">
					<script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
						<script>
						  hbspt.forms.create({
							region: "eu1",
							portalId: "24898002",
							formId: "5437a49c-62fc-4fe5-9b14-bcdeac0fadcc",
							   css:'doceree-dm'
						  });
						</script>
					</div>
				</aside>
			  </div>
			  
			  
		  </div>
	   </aside>
	</div>
      </div>
    </div>
</footer>



<?php  if($_SERVER['REMOTE_ADDR'] == '110.227.191.132' && 1){ ?>
  
<style>
  .footer-section {
   background: #fff;
/*      border-radius: 15px;*/
   widows: 100%;
  
  /* padding: 40px;
   margin: 20px;*/
 }
 .footer-title {
   font-weight: bold;
   color: #6c2bd9; /* purple */
   margin-bottom: 15px;
 }
 .footer-section a {
   color: #333;
   text-decoration: none;
 }
 .footer-section a:hover {
   color: #6c2bd9;
 }
 .subscribe-btn {
   background: linear-gradient(90deg, #6c2bd9, #9f67f8);
   border: none;
   color: #fff;
   border-radius: 25px;
   padding: 10px 25px;
   font-weight: bold;
   box-shadow: 0 4px 8px rgba(0,0,0,0.2);
 }
 .footer-section a {
 color: #555;
 text-decoration: none;
 font-size: 14px;
 padding-left: 28px;
}



 .subscribe-btn:hover {
   opacity: 0.9;
 }
 .footer-icons img {
   height: 50px;
   margin: 10px;
 }
 .footer-address {
   font-size: 14px; /* smaller font for address */
   line-height: 1.6;
 }
 .newsletter-input {
   border-radius: 25px;
   flex: 1;
   margin-right: 10px;
 }
 .footer-box,.footer-box2 {
 background-color: #fafafa;
 border-radius: 10px;
 padding: 20px;
 height: 100%;
}
</style>
<!-- New Footer -->
  


<div class="footer-section">

  <div class="container">
    <div class="row ">
      
      <!-- Left Column -->
      <div class="col-md-6 mb-4">
        <div class="footer-box2 h-100">
        <div class="footer-logos mt-custom">
        <?php
           if(is_active_sidebar('footer-sidebar-1')){
                    dynamic_sidebar('footer-sidebar-1');
           }
        ?>
      </div>
        </div>
      </div>
  
      <!-- Right Column -->
      <div class="col-md-6">
        <div class=" footer-box2 h-100">
        <div class="row">
          <!-- Quick Links -->
          <div class="col-sm-6 mb-4">
            <h5 class="footer-title"><i class="fa fa-link" aria-hidden="true"></i> Quick links</h5>
            <ul class="list-unstyled">
                    <li><a href="<?php echo home_url();?>/poc/" data-type="URL" data-id="/">Marketers<br>
              </a>
            </li>
            <li><a href="<?php echo home_url();?>/copay/" data-type="URL" data-id="/">Market Access<br>
              </a>
            </li>
            <li><a href="https://doceree.com/provider/" data-type="URL" data-id="/">EHR Platforms<br>
              </a>
            </li>
            <li><a href="https://doceree.com/provider/admanager/" data-type="URL" data-id="/">Publishers<br>
              </a>
            </li>
            <li><a href="<?php echo home_url();?>/marketplace-brand/" data-type="URL" data-id="/">Marketplace<br>
              </a>
            </li>
            <li><a href="<?php echo home_url();?>/blog/" data-type="URL" data-id="/careers/">Insights<br>
              </a>
            </li>
            <li><a href="<?php echo home_url();?>/our-story/" data-type="URL" data-id="/about-us/">About<br>
              </a>
            </li>
           </ul>
  
                 <!-- Address -->
            <h5 class="footer-title"><i class="fa fa-map-marker" aria-hidden="true"></i>Address</h5>
            <div class="footer-address">
              <p><strong>US Headquarters</strong><br>
                150 John F Kennedy Pkwy, Suite 463,<br>Short Hills, NJ 07078
              </p>
              <p><strong>UK Office</strong><br>
                Doceree UK Ltd Spaces, 83 Baker Street,<br>London W1U 6AG
              </p>
              <p><strong>India Office</strong><br>
                Max Square, Floor 11, Plot No. C3-C, Sector 129,<br>
                Noida-Greater Noida Expressway,<br>
                Noida, Uttar Pradesh 201304
              </p>
            </div>
  
  
          </div>
          <!-- Policies -->
          <div class="col-sm-6 mb-4">
            <h5 class="footer-title"><i class="fa fa-file-text-o" aria-hidden="true"></i> Policies</h5>
            <ul class="list-unstyled">
  
                  <li><a href="<?php echo home_url();?>/us-privacy-policy/">Privacy Policy</a></li>
                  <li><a href="<?php echo home_url();?>/us-terms-of-service-advertiser/">Terms of Service - Advertiser</a></li>
                 <li><a href="<?php echo home_url();?>/us-program-policy-terms/">Program Policy Terms</a></li>
      
                 <li><a href="<?php echo home_url();?>/us-content-policy/" data-type="URL">Content Policy</a></li>
            
            <li><a href="<?php echo home_url();?>/media-and-partner-resources/" data-type="URL">Media and Partner Resources</a></li>
            <li><a href="<?php echo home_url();?>/us-patient-affordability-program-policy/" data-type="URL">Patient Affordability Program Policy</a></li>
            <li><a href="<?php echo home_url();?>/us-terms-of-service-marketplace/" data-type="URL">Terms of Service - Marketplace</a></li>
                  </ul>
             <!-- Newsletter -->
              <h5 class="footer-title"><i class="fa fa-envelope" aria-hidden="true"></i> Subscribe to the newsletter</h5>
              <form class="d-flex">
                <input type="email" class="form-control newsletter-input" placeholder="Email*">
                <button type="submit" class="subscribe-btn">Subscribe</button>
              </form>
          </div>
        </div>
       
      </div>
    </div>
    </div>
  
  </div>
  
  </div>
  
  


<?php } ?>

<!--  <?php if( have_rows('topics') ): ?>
<div class="side-bars">
	<?php while( have_rows('topics') ): the_row(); 
		$key = get_row_index();
		
		if($key == 2){
			$class = 'topic2';
		}else if($key == 3){
			$class = 'Schedule-demoo';
		}else{
			$class = 'topic1';
		}
	?>
	<div class="<?php echo $class?>">
	  <a href="<?php the_sub_field('topic_url'); ?>" target="_blank"><img src="<?php echo  esc_url(the_sub_field('topic_image')); ?>">
	  <span class="side-txt"><?php the_sub_field('topic_name'); ?></span></a>
	</div>
	<?php endwhile; ?>
</div>
<?php else:?>
<div class="side-bars">
	<div class="topic1">
	  <a href="<?php echo home_url();?>/doceree-target/" target="_blank"><img src="/wp-content/uploads/2022/02/Topic-01_Artboard-1-02.svg">
	  <span class="side-txt">Doceree Target<sup>TM</sup></span></a>
	</div>
    <div class="topic2">
         <a href="<?php echo home_url();?>/doceree-exchange/" target="_blank"><img src="/wp-content/uploads/2022/02/Topic-02_Artboard-1-02_Artboard-1-02.svg">
        <span class="side-txt">Doceree Exchange<sup>TM</sup></span></a>
    </div>
	<?php if ($language == 'us'){?>
    <div class="Schedule-demoo">
    	<br>
      <a href="https://partner-toolbox.doceree.com/#/" target="_blank"><img src="/wp-content/uploads/2022/02/Partner-Toolbox-01.svg">
        <span class="side-txt">Partner Toolbox</span></a>
    </div>
	<?php } else { ?>
	<div class="Schedule-demoo">
    	<br>
      <a href="https://doceree.com/uk/diversity-and-inclusion/" target="_blank"><img src="/wp-content/uploads/2022/02/Partner-Toolbox-01.svg">
        <span class="side-txt">Diversity & Inclusion</span></a>
    </div>
	<?php }?>
  </div>
<?php endif; ?>  -->

<!-- start for mobile -->
<!-- <div class="side-bars-mobile">
  <div class="row">
    <div class="col-sm-6">
      <div class="topic2">
           <a href="https://partner-toolbox.doceree.com/#/" target="_blank"><img src="/wp-content/uploads/2022/02/Partner-Toolbox-01.svg" target="_blank">
          <br><span class="side-txt-mobile">Partner Toolbox</span></a>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="Schedule-demoo about-sidebar">
        <a href="<?php echo home_url();?>/schedule-a-demo/"><img src="/wp-content/uploads/2022/04/Schedule-a-demo-1.svg">
          <br><span class="side-txt-mobile">Schedule a Demo</span></a>
      </div>
    </div>
  </div>
</div> -->
<!-- end for mobile -->

<!-- Download form -->
<div class="modal fade" id="download_case_study" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	
	  <div class="modal-body pdf-modal">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		<h3 class="form-body">Download the <span class="report-type">Report</span></h3>
		<p class="form-body">Please provide the following information to download the <span class="report-type-s">Report</span></p>
		<?php// echo do_shortcode('[contact-form-7 id="8352" title="Popup Form Download Case Study"]'); */?>

      <div class="form-body"><?php echo do_shortcode('[contact-form-7 id="8352" title="Popup Form Download Case Study"]');?></div>
      <div class="download-success">
		<strong>Thank you!</strong>
		<p>We have sent the <span class="report-type-s">Case Study</span> to your email ID.</p>
	  </div> 
	  
    </div>
	</div>
  </div>
</div> 


<!-- Let's Talk Modal -->
<div class="modal fade" id="letsTalkModalCenter" tabindex="-1" role="dialog" aria-labelledby="letsTalkModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="letsTalkModalLongTitle">Let's Talk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pt-0">
		  <div class="contact-content lets-talk-form">
			  <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
				<script>
				  hbspt.forms.create({
					region: "eu1",
					portalId: "24898002",
					formId: "000761e3-f858-4451-aaf1-a019e412d9a2",
					  css:'doceree-dm'
				  });
				</script>
		  </div>
      </div>
    </div>
  </div>
</div>



<!-- 05-04-2022 add here form case study -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->

<script>
var amountScrolled = 200;
var amountScrolledNav = 25;

$(window).scroll(function() {
  if ( $(window).scrollTop() > amountScrolled ) {
    $('button.back-to-top').addClass('show');
  } else {
    $('button.back-to-top').removeClass('show');
  }
});

$('button.back-to-top').click(function() {
  $('html, body').animate({
    scrollTop: 0
  }, 800);
  return false;
});	
	
	

$(document).ready(function(){
	 console.log('button clicked');
	$('.hs-button').click(function(){ 
	 console.log('button clicked');
	})
	
	$("#learnMore").click(function(){
		$('html, body').animate({
			scrollTop: $("#mainContent").offset().top
		}, 800);
	});
});
 jQuery('[data-toggle="popover"]').popover();   
jQuery('#download_case_study').on('show.bs.modal', function (event) {
		
	  $('.form-body').show();
	  $('.download-success, .wpcf7-response-output').hide();
	  
	  var button = $(event.relatedTarget);
	  
	  var href = button.data('attachment');
	  jQuery('.download-source').val(href);
	  
	  var title = button.data('title');
	  jQuery('.report-title').val(title);
	  
	  var report_type = button.data('type');
	  
	  console.log(report_type);	
	  
	  jQuery('.report-type').text(report_type);
	  jQuery('.report-type-s').text(report_type.toLowerCase()); 
	  jQuery('.report-type-f').val(report_type);
	  
	  //var filename = button.data('filename');
	  //jQuery('#ezbiz-attachment-link').attr('href', href);
	  //jQuery('#ezbiz-attachment-link').attr('download', filename);
});

jQuery('body').append('<a id="ezbiz-attachment-link" href="" download=""></a>');
document.addEventListener( 'wpcf7mailsent', function( event ) {
  console.log(event.detail);
  if ( 8352 == event.detail.contactFormId ){
    var data = { 'action':'siteWideMessage', 'data':event.detail.inputs};
    $.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function(response) {
      console.log(response);
    });
    $('.form-body').hide(); 
    $('.download-success').show();
  }
}, false);

    $(function(){
     if(window.location.hash){
         var hass = window.location.hash;
		 
		 if($(hass).length){
            $('html, body').stop().animate({
              scrollTop: $(hass).offset().top - 10
            }, 1300, 'swing', function () {
                  //window.location.hash = target;
            });
		 } else{
			$('a[href="'+hass+'"]').get(0).click()
		 }			 
        }
     });
    
  $(function() {
    $("#menu-doceree").before( '<button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#collapsibleNavbar" aria-expanded="true"><div id="navbar-close" class=""><span class="fa fa-times"></span></div></button>');
  });


</script>
<!-- Linkein tracking -->
<script type="text/javascript">
_linkedin_partner_id = "4556057";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">

(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>

<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4556057&fmt=gif" />
</noscript>
<!-- Linkein tracking -->
<!-- Download form -->


 
<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<?php } ?>

