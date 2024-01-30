<footer>
    <img src="/images/Logo_of_Gemeente_Amsterdam.svg" alt="Logo van Gemeente Amsterdam" class="footer-logo">
    <p>&copy; 2024 Gemeente Amsterdam.</p>
    <p>Designed by <a href="https://yourwebsite.com" target="_blank"> Faiss Designs</a></p>

    <!-- Social Media Icons -->
    <div class="social-icons">
      <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>


  <!-- Scroll-to-top button -->
  <button id="scroll-to-top" onclick="scrollToTop()">↑</button>

  <script>
    // Function to scroll to the top of the page
    function scrollToTop() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
    }

    // Show/hide scroll-to-top button based on scroll position
    window.onscroll = function() {
      var scrollButton = document.getElementById('scroll-to-top');
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollButton.style.display = 'block';
      } else {
        scrollButton.style.display = 'none';
      }
    };
  </script>