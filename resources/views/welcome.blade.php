<x-layouts.base.base>
     <x-hero />

    <x-about />

    <x-skills />

    <!-- Projects Section -->
    <x-feature-projects />

    <x-team />

   <x-blog :blogs="$blogs" />

    <!-- Blog Modal -->
    <div id="blogModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeBlogModal()">&times;</span>
            <div id="blogContent">
                <!-- Blog content will be loaded here -->
            </div>
        </div>
    </div>

    <x-testimonial />

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-charcoal">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-8 gradient-text-animated font-mono"
                data-aos="fade-up">Let's Build Something Amazing</h2>
            <p class="text-xl mb-12 text-gray-300 text-center" data-aos="fade-up" data-aos-delay="200">
                Ready to bring your ideas to life? Let's discuss your next project.
            </p>

            
            @livewire('contact-message-component')
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="glass-effect p-6 bg-black rounded-xl text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-3xl mb-4 animate-bounce-slow">📧</div>
                    <h3 class="text-lg font-semibold mb-2 text-neon-green">Email</h3>
                    <p class="text-gray-300 text-xs font-bold">muhammadaslamkhakh395@gmail.com</p>
                </div>
                <div class="glass-effect p-6 bg-black rounded-xl text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-3xl mb-4 animate-wiggle">💼</div>
                    <h3 class="text-lg font-semibold mb-2 text-neon-green">LinkedIn</h3>
                    <p class="text-gray-300 text-xs font-bold">linkedin.com/in/muhammadaslam</p>
                </div>
                <div class="glass-effect p-6 bg-black rounded-xl text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl mb-4 animate-spin-slow">🐙</div>
                    <h3 class="text-lg font-semibold mb-2 text-neon-green">GitHub</h3>
                    <p class="text-gray-300 text-xs font-bold">github.com/MuhammadAslam945</p>
                </div>
            </div>
        </div>
    </section>

</x-layouts.base.base>