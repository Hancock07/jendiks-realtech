<?php $pagename = 'About Us - Jendiks RealTech';
include __DIR__ . '/header.php'; ?>

<div class="pt-20"></div>

<!-- ================= PAGE TITLE ================= -->
<section class="bg-white py-6 border-b">
    <div class="max-w-7xl mx-auto px-6 fade-up">
        <h2 class="text-4xl font-bold text-blue-700">About Us</h2>
    </div>
</section>

<!-- ================= HERO SECTION ================= -->
<section class="relative bg-[#f8fafc] py-24 hero-1">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 items-center gap-16">

        <div class="fade-up">
            <h3 class="text-5xl font-bold mb-6">
                Empowering Businesses <br>
                with <span class="text-blue-700">Cutting-Edge Web Solutions</span>
            </h3>

            <p class="text-gray-600 mb-8">
                We deliver innovative digital experiences that drive growth and
                position businesses for long-term success in today’s competitive market.
            </p>

            <a href="#" class="bg-blue-700 text-white px-8 py-3 rounded-lg shadow hover:bg-blue-700 transition">
                Our Mission →
            </a>
        </div>

        <div class="relative flex justify-end">
            <img src="assets/images/hero/hero-2.png" class="rounded-3xl shadow-xl">
        </div>

    </div>
</section>

<!-- ================= OUR STORY ================= -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 fade-up">

        <div class="mb-16">
            <h3 class="text-4xl font-bold mb-4">
                Our <span class="text-primary-600">Story</span>
            </h3>

            <h4 class="text-xl text-gray-700 font-semibold mb-4">
                Innovative Web Solutions Tailored for Your Success
            </h4>

            <p class="text-gray-600 max-w-3xl">
                Since our inception, Jendiks RealTech has been committed to
                delivering excellence through modern design, performance-driven
                development, and customer-focused strategies.
            </p>
        </div>

        <!-- Feature Cards -->
        <div class="grid md:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <div class="flex items-start gap-4">

                    <div class="bg-primary-50 p-3 rounded-lg">
                        <i data-lucide="users" class="w-6 h-6 text-primary-600"></i>
                    </div>

                    <div>
                        <h5 class="font-semibold text-base text-dark mb-1">
                            Experienced Team
                        </h5>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Experienced professionals focused on delivering quality digital solutions.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <div class="flex items-start gap-4">

                    <div class="bg-primary-50 p-3 rounded-lg">
                        <i data-lucide="briefcase" class="w-6 h-6 text-primary-600"></i>
                    </div>

                    <div>
                        <h5 class="font-semibold text-base text-dark mb-1">
                            Client-Centric Approach
                        </h5>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            We prioritize client needs and tailor strategies for measurable success.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <div class="flex items-start gap-4">

                    <div class="bg-primary-50 p-3 rounded-lg">
                        <i data-lucide="badge-check" class="w-6 h-6 text-primary-600"></i>
                    </div>

                    <div>
                        <h5 class="font-semibold text-base text-dark mb-1">
                            Proven Results
                        </h5>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Delivering reliable results backed by performance-driven strategies.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="py-24 bg-gradient-to-b from-white to-blue-50">
    <div class="max-w-7xl mx-auto px-6 fade-up">

        <h3 class="text-4xl font-bold mb-8">
            Why <span class="text-blue-700">Choose Us</span>
        </h3>

        <p class="text-gray-600 max-w-3xl">
            We combine innovation, strategy, and technology to build digital
            solutions that not only look great but perform exceptionally.
        </p>

    </div>
</section>

<!-- ================= STATS ================= -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-6 text-center">

        <div class="bg-gray-50 p-8 rounded-2xl shadow-sm">
            <h4 class="text-3xl font-bold text-blue-700">200+</h4>
            <p class="text-gray-600">Satisfied Clients</p>
        </div>

        <div class="bg-gray-50 p-8 rounded-2xl shadow-sm">
            <h4 class="text-3xl font-bold text-blue-700">300+</h4>
            <p class="text-gray-600">Successful Projects</p>
        </div>

        <div class="bg-gray-50 p-8 rounded-2xl shadow-sm">
            <h4 class="text-3xl font-bold text-blue-700">10+</h4>
            <p class="text-gray-600">Years of Experience</p>
        </div>

        <div class="bg-gray-50 p-8 rounded-2xl shadow-sm">
            <h4 class="text-3xl font-bold text-blue-700">98%</h4>
            <p class="text-gray-600">Client Satisfaction</p>
        </div>

    </div>
</section>
<!-- Footer -->
<?php include __DIR__ . '/footer.php'; ?>