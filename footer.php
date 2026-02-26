<div id="footer">
    <footer class="bg-slate-900 text-gray-300 pt-16 pb-8">
        <div class="container mx-auto px-6">

            <div class="grid md:grid-cols-4 gap-12 mb-12">

                <!-- Company Info -->
                <div>
                    <h2 class="text-2xl font-bold text-white mb-4">
                        <img class="logo" src="assets/images/logo-white.png" alt="">
                    </h2>
                    <p class="text-gray-400 leading-relaxed">
                        We build smart digital experiences through
                        modern web
                        design,
                        e-commerce solutions and branding strategies
                        that grow
                        businesses.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">
                        Quick Links
                    </h3>
                    <ul class="space-y-3">
                        <li><a href="index.html" class="hover:text-white transition">Home</a></li>
                        <li><a href="about.html" class="hover:text-white transition">About
                                Us</a></li>
                        <li><a href="services.html" class="hover:text-white transition">Services</a></li>
                        <li><a href="portfolio.html" class="hover:text-white transition">Portfolio</a></li>
                        <li><a href="contact.html" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">
                        Services
                    </h3>
                    <ul class="space-y-3">
                        <li>Website Design</li>
                        <li>E-Commerce Development</li>
                        <li>SEO & Marketing</li>
                        <li>Brand Strategy</li>
                        <li>Web Maintenance</li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">
                        Contact Us
                    </h3>

                    <div class="space-y-4 text-gray-400 text-sm">

                        <div class="flex items-center gap-3">
                            <i data-lucide="map-pin" class="w-5 h-5 text-primary-600"></i>
                            <span>Aba, Nigeria</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <i data-lucide="phone" class="w-5 h-5 text-primary-600"></i>
                            <a href="tel:09133897285" class="hover:text-primary-600 transition">
                                09133897285
                            </a>
                        </div>

                        <div class="flex items-center gap-3">
                            <i data-lucide="mail" class="w-5 h-5 text-primary-600"></i>
                            <a href="mailto:okeakpuhancock@gmail.com" class="hover:text-primary-600 transition">
                                okeakpuhancock@gmail.com
                            </a>
                        </div>

                    </div>

                    <!-- Social Icons -->
                    <div class="flex items-center gap-4 mt-4">

                        <a href="#" class="w-9 h-9 flex items-center justify-center rounded-lg bg-white/10 hover:bg-primary-600 transition group">
                            <i data-lucide="globe" class="w-5 h-5 text-gray-300 group-hover:text-white"></i>
                        </a>

                        <a href="#" class="w-9 h-9 flex items-center justify-center rounded-lg bg-white/10 hover:bg-primary-600 transition group">
                            <i data-lucide="facebook" class="w-5 h-5 text-gray-300 group-hover:text-white"></i>
                        </a>

                        <a href="#" class="w-9 h-9 flex items-center justify-center rounded-lg bg-white/10 hover:bg-primary-600 transition group">
                            <i data-lucide="twitter" class="w-5 h-5 text-gray-300 group-hover:text-white"></i>
                        </a>

                        <a href="#" class="w-9 h-9 flex items-center justify-center rounded-lg bg-white/10 hover:bg-primary-600 transition group">
                            <i data-lucide="instagram" class="w-5 h-5 text-gray-300 group-hover:text-white"></i>
                        </a>

                    </div>
                </div>

            </div>

            <!-- Divider -->
            <div class="border-t border-slate-700 pt-6 text-center text-gray-400 text-sm">
                © 2026 Jendiks. All rights reserved.
            </div>

        </div>
    </footer>
</div>

<script>
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    menuBtn.addEventListener("click", () => {
        if (mobileMenu.classList.contains("max-h-0")) {
            mobileMenu.classList.remove("max-h-0");
            mobileMenu.classList.add("max-h-96");
        } else {
            mobileMenu.classList.add("max-h-0");
            mobileMenu.classList.remove("max-h-96");
        }
    });
</script>
<script>
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, {
        threshold: 0.2
    });

    document.querySelectorAll(".fade-up").forEach(el => {
        observer.observe(el);
    });
</script>
<script>
    lucide.createIcons();
</script>
</body>

</html>