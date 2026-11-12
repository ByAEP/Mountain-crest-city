<footer class="site-footer">
        <div class="footer-container">
            <div class="footer-col">
                <h3>CONNECT WITH US</h3>
                <div class="social-links">
                    <a href="#" aria-label="Facebook">f</a>
                    <a href="#" aria-label="Instagram">ig</a>
                    <a href="#" aria-label="LinkedIn">in</a>
                    <a href="#" aria-label="YouTube">yt</a>
                </div>
            </div>
            <div class="footer-col">
                <h3>PHYSICAL ADDRESS</h3>
                <p>Mountain Crest City Hall<br>450 Alpine Ridge Way<br>Mountain Crest, UT 84060</p>
            </div>
            <div class="footer-col">
                <h3>PHONE</h3>
                <p><a href="tel:8015550194">(801) 555-0194</a></p>
                <h3>EMAIL</h3>
                <p><a href="mailto:info@mountaincrestcity.gov">info@mountaincrestcity.gov</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Mountain Crest City &bull; Ana Pinto</p>
        </div>
    </footer>

    <script>
        const menuBtn = document.querySelector('.mobile-menu-btn');
        const mainNav = document.querySelector('.main-nav');

        if (menuBtn && mainNav) {
            menuBtn.addEventListener('click', () => {
                mainNav.classList.toggle('open');
            });
        }
    </script>
    <?php wp_footer(); ?>
</body>
</html>