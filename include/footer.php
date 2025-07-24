<!----------------=====================Footer=======================------------------------->
    <footer class="site-footer">
      <div class="container-fluid ">
        <div class="row justify-content-center">
          <div class="col-md-11">
            <div class="row justify-content-center">
              <div class="col-md-2 mb-5 mb-lg-0 col-lg-2 logo-circular">
                <img src="assets/images/FP-Logo.png" class="img-fluid footer-logo"><br>
                <div class="row pt-4 justify-content-center">
                  <a href="#" class="mr-1"><span class="icon-facebook icon-border"></span></a>
                  <a href="#" class="mr-1"><span class="icon-instagram"></span></a>
                  <a href="#" class="mr-1"><span class="icon-linkedin"></span></a>
                </div>
                
              </div>
              <div class="offset-md-1 col-md-2 mb-5 mb-lg-0 col-lg-2 quick-links">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="about.php" class="text-secondary">About Us</a></li>
                  <li><a href="services.php" class="text-secondary">Services</a></li>
                  <li><a href="careers.php" class="text-secondary">Careers</a></li>
                  <li><a href="contact.php" class="text-secondary">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-5 mb-5 mb-lg-0 col-lg-3 quick-links">
                <h2 class="footer-heading mb-4">Services</h2>
                <ul class="list-unstyled text-secondary">
                  <li>Physiotherapy in Aged Care Homes </li>
                  <li>Physiotherapy in Home Care setting  </li>
                  <li>Physiotherapy for NDIS Clients  </li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-2  mb-lg-0">
                <ul class="d-flex list-unstyled">
                  <li><img src="assets/images/image1.jpg" class="footer-img"></li>
                  <li><img src="assets/images/image2.jpg" class="footer-img"></li>
                </ul>
             </div>
            </div>
          </div>
      </div>
      <div class="row pt-5 justify-content-center">
          <div class="col-12 text-md-center text-left">
            <p class="p-footer">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Flexwell Physio. All rights reserved
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
  
<!------------------====================Footer end=================----------------------------->
<!------------------====================Scroll Top=================----------------------------->
<button onclick="topFunction()" id="myBtn"><i class="fa-solid fa-circle-chevron-up" class="arrow"  ></i></button>
<script>
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
</script>
<!------------------====================Scroll Top End=================----------------------------->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>

  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/rangeslider.min.js"></script>
  

  <script src="assets/js/typed.js"></script>
      <script>
          var words = ["pain", "muscle weakness", "postural deformities", " stiffness", " fitness", " mobility problems", " balance issues", " gait problems", " deconditioning", " post-operative concerns"];

          function selectRandomWords() {
  var selectedWords = [];
  while (selectedWords.length < 3) {
    var randomIndex = Math.floor(Math.random() * words.length);
    var word = words[randomIndex];
    if (!selectedWords.includes(word)) {
      selectedWords.push(word);
    }
  }
  return selectedWords;
}

// Get the paragraph element to display random words
var randomWordsElement = document.getElementById("randomWords");

// Function to display words with typing animation
function displayWords() {
  var randomWords = selectRandomWords();
  var wordIndex = 0;

  // Display the first word immediately
  displayNextWord();

  // Function to display the next word
  function displayNextWord() {
    if (wordIndex < randomWords.length) {
      var word = randomWords[wordIndex];
      var index = 0;
      var wordIntervalId = setInterval(function() {
        var typedWord = word.substring(0, index);
        randomWordsElement.innerHTML = "" + typedWord + "<span id='cursor'>|</span>";
        index++;
        if (index > word.length) {
          clearInterval(wordIntervalId);
          setTimeout(function() {
            randomWordsElement.innerHTML = ""; // Clear the word after 4 seconds
            wordIndex++;
            displayNextWord(); // Display the next word recursively
          }, 5000);
        }
      }, 200);
    } else {
      wordIndex = 0; // Reset word index when all words have been displayed
      displayWords(); // Start the loop again
    }
  }
}

// Call the function to start displaying words
displayWords();
      </script>
<script>
	$(window).scroll(function(){
  var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});
</script>
  <script src="assets/js/main.js"></script>
  
  </body>
</html>