<?php $pagename = 'Services - Jendiks RealTech';
include __DIR__ . '/header.php'; ?>

<!-- ================= HERO ================= -->
<section class="relative bg-[#f8fafc] py-24 hero-1">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center fade-up">

        <div>
            <h1 class="text-5xl md:text-5xl font-bold mb-4">
                What <span class="text-primary-600">We Do</span>
            </h1>

            <p class="text-gray-600 mb-8">
                Professional Web Design & Development Services tailored for growing businesses.
            </p>

            <div class="bg-white border border-gray-200 rounded-xl p-5 flex items-center gap-4 shadow-sm max-w-md">
                <div class="bg-primary-50 p-3 rounded-lg">
                    <i data-lucide="monitor" class="w-6 h-6 text-primary-600"></i>
                </div>
                <div>
                    <h4 class="font-semibold">Website Design</h4>
                    <p class="text-sm text-gray-500">Modern responsive solutions built for performance.</p>
                </div>
            </div>

        </div>

        <div class="relative flex justify-end">
            <img src="assets/images/hero/hero-2.png" class="max-w-md">
        </div>

    </div>
</section>

<!-- ================= OUR MISSION ================= -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 fade-up">

        <div class="flex items-center gap-6 mb-6">
            <h2 class="text-4xl font-bold">
                Our <span class="text-primary-600">Mission</span>
            </h2>
            <div class="flex-1 h-px bg-gray-200"></div>
            <p class="text-gray-600 text-sm max-w-xl">
                To elevate your digital presence through innovative, tailored solutions.
            </p>
        </div>

        <p class="text-gray-500 mb-12 max-w-3xl">
            We empower businesses through cutting-edge web development and digital strategies.
            Our focus is on delivering measurable growth and lasting impact.
        </p>

        <!-- Feature Cards -->
        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-start gap-4">
                    <div class="bg-primary-50 p-3 rounded-lg">
                        <i data-lucide="users" class="w-6 h-6 text-primary-600"></i>
                    </div>
                    <div>
                        <h5 class="font-semibold mb-1">Client-Centric Focus</h5>
                        <p class="text-sm text-gray-500">
                            We prioritize client needs to deliver impactful solutions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-start gap-4">
                    <div class="bg-primary-50 p-3 rounded-lg">
                        <i data-lucide="shield-check" class="w-6 h-6 text-primary-600"></i>
                    </div>
                    <div>
                        <h5 class="font-semibold mb-1">Commitment to Quality</h5>
                        <p class="text-sm text-gray-500">
                            Delivering high-performing and scalable web solutions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-start gap-4">
                    <div class="bg-primary-50 p-3 rounded-lg">
                        <i data-lucide="badge-check" class="w-6 h-6 text-primary-600"></i>
                    </div>
                    <div>
                        <h5 class="font-semibold mb-1">Proven Results</h5>
                        <p class="text-sm text-gray-500">
                            We build strategies that generate measurable success.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ================= CTA + PROJECT TYPES ================= -->
<section class="py-20 bg-primary-50">
    <div class="max-w-7xl mx-auto px-6 text-center fade-up">

        <h2 class="text-3xl font-bold mb-4">
            Ready to <span class="text-primary-600">Transform Your Website?</span>
        </h2>

        <p class="text-gray-600 mb-12">
            Let’s build something amazing together.
        </p>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800"
                    class="h-48 w-full object-cover">
                <div class="p-5">
                    <h4 class="font-semibold">Business Consulting</h4>
                    <p class="text-sm text-gray-500">Modern Solutions</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=800"
                    class="h-48 w-full object-cover">
                <div class="p-5">
                    <h4 class="font-semibold">Fashion Boutique</h4>
                    <p class="text-sm text-gray-500">Smart Store</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&q=80&w=800"
                    class="h-48 w-full object-cover">
                <div class="p-5">
                    <h4 class="font-semibold">Tech Startup</h4>
                    <p class="text-sm text-gray-500">Next Generation</p>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>