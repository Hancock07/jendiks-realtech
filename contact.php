<?php $pagename = 'Contact Us - Jendiks RealTech';
include __DIR__ . '/header.php'; ?>

<!-- ================= HERO ================= -->
<section class="relative bg-[#f8fafc] overflow-hidden py-24 hero-1">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center fade-up">

        <div>
            <h1 class="text-5xl md:text-5xl font-bold mb-4">
                Our <span class="text-primary-600">Work</span>
            </h1>

            <p class="text-gray-600 mb-8">
                Explore our latest projects and innovative digital solutions
                crafted for modern businesses.
            </p>

            <a href="#"
                class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-lg transition">
                Get Started →
            </a>
        </div>

        <div class="relative flex justify-end">
            <img src="assets/images/hero/hero-2.png" class="max-w-md">
        </div>

    </div>
</section>

<!-- ================= CONTACT SECTION ================= -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 fade-up">

        <!-- LEFT: FORM -->
        <div class="bg-gray-50 p-8 rounded-2xl shadow-sm">

            <form class="space-y-4">

                <input type="text" placeholder="Full Name"
                    class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">

                <input type="email" placeholder="Email Address"
                    class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">

                <input type="text" placeholder="Phone Service"
                    class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">

                <textarea rows="4" placeholder="Message"
                    class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600"></textarea>

                <button
                    class="w-full bg-primary-600 hover:bg-primary-700 text-white py-3 rounded-lg transition">
                    Send Message
                </button>

            </form>

        </div>

        <!-- RIGHT: CONTACT INFO -->
        <div class="space-y-8 fade-up">

            <div class="flex items-start gap-4">
                <i data-lucide="phone" class="w-6 h-6 text-primary-600"></i>
                <div>
                    <p class="font-semibold text-dark">0900 9934 77647</p>
                    <p class="text-sm text-gray-500">Support & Customer Service</p>
                </div>
            </div>

            <div class="flex items-start gap-4">
                <i data-lucide="mail" class="w-6 h-6 text-primary-600"></i>
                <div>
                    <p class="font-semibold text-dark">info@jendiks.com</p>
                    <p class="text-sm text-gray-500">Send us an email anytime</p>
                </div>
            </div>

            <div class="flex items-start gap-4">
                <i data-lucide="map-pin" class="w-6 h-6 text-primary-600"></i>
                <div>
                    <p class="font-semibold text-dark">Aba, Nigeria</p>
                    <p class="text-sm text-gray-500">Business Location</p>
                </div>
            </div>

            <!-- MAP -->
            <div class="rounded-xl overflow-hidden shadow-sm">
                <iframe
                    src="https://www.google.com/maps?q=Aba,Nigeria&output=embed"
                    width="100%" height="250"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>

        </div>

    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>