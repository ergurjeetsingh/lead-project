  <!--footer starts-->
  <footer class="footer bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="">
            <a href="<?= base_url('home/index'); ?>" class="mb-3 d-block mt-2">
              <img width="240px" src="<?= base_url('assets/images/lead-logo.png'); ?>" class="img-fluid">
            </a>
            <p class="text-justify">There are many variations of passages of Lorem Ipsum available,</p>
            <p class="mb-1">25 Southern Avenue USA</p>
            <p class="mb-1"><b>Phone:</b> (123) 456 789</p>
            <p class="mb-1"><b>Email:</b> info@leadwithus.com</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="widget mt-3">
            <h4 class="widget-title">Support</h4>
            <div class="support-menu">
              <ul>
                <li>
                  <a href="<?= base_url('works'); ?>">How It Works</a>
                </li>
                <li>
                  <a href="#">Help center</a>
                </li>
                <li>
                  <a href="<?= base_url('pages/faq'); ?>">Faq's</a>
                </li>
                <li>
                  <a href="#">Term of Use</a>
                </li>
                <li>
                  <a href="#">Privacy Policy</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="widget mt-3">
            <h4 class="widget-title">Pros</h4>
            <div class="pros-menu">
              <ul>
                <li>
                  <a href="<?= base_url('leader'); ?>">Join as a Leader</a>
                </li>
                <li>
                  <a href="<?= base_url('works'); ?>">How It Works</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="widget mt-3">
            <h4 class="widget-title">Follow Us On</h4>
            <div class="social-icon">
              <ul>
                <li class=""><a href="https://www.facebook.com/"> <i class="fa fa-facebook-square"></i></a></li>
                <li class=""><a href="https://in.linkedin.com/"> <i class="fa fa-linkedin"></i></a></li>
                <li class=""><a href="https://www.instagram.com/"> <i class="fa fa-instagram"></i></a></li>
                <li class=""><a href="https://twitter.com/"> <i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->
  <section class="post_footer">Copyright© 2020 Lead With Us</section>
  <section class="clearfix cookies_footer row animated slideInLeft">
    <div class="col-md-4">
      <img src="images/cookie.png" class="img-fluid" alt="">
    </div>
    <div class="col-md-8">
      <div class="float-right close btn btn-sm"><i class="fa fa-times"></i></div>
      <h4 class="mt-0 mt-lg-2"></h4>
      <p class="mb-1 "></p>
      <a href="#" class="btn btn-success btn-sm"></a>
    </div>
  </section>
  </body>
  <script>
    $(document).ready(function() {
      $('#find_service').on('keyup', function() {
        var search_dta = $(this).val();
        if (search_dta != "") {
          $('#autocomplete').show();
          $.ajax({
            url: "<?= base_url('home/live_search'); ?>",
            type: "POST",
            data: 'search=' + search_dta,
            success: function(data) {
              // let obj = jQuery.parseJSON(data);
              if (data !== '') {
                $('#autocomplete').html(data);
                $('#find_service').css('background', '#fff');
              } else {
                $('#autocomplete').fadeIn();
                $('#autocomplete').html('<strong>No Service found...</strong>');
                $('#find_service').css('background', '#fff');
              }
            }
          });
        } else {
          $('#autocomplete').fadeOut();
        }
        // Function to get and set the values in the input box
        $(document).on('click', '#selectval', function() {
          $('#find_service').val($(this).text());
          $('#autocomplete').fadeOut();
        });
      });
    });

    setInterval(() => {
      $(document).ready(() => {
        if ($('.tab7').css('display') != 'none') {
          setTimeout(() => {
            $('#leader_serching').hide();
            $('#leader_serched').show();
          }, 3000);
        }
      });
    }, 1000);
  </script>

  </html>