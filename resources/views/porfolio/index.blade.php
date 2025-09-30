<x-layout.app>

    {{-- INFORMATION --}}
    {{-- This section is now responsive with progressively larger text sizes. --}}
    <div class="flex mt-10 flex-col gap-4 w-full h-auto p-6 items-center justify-center space-y-3 shadow">
        {{-- my name --}}
        <h3 class="text-xl sm:text-2xl md:text-3xl text-center font-medium">
            Hi, I'm <span class="font-bold text-blue-500">YOEUNG YENG</span>
        </h3>
        {{-- description --}}
        <p class="text-gray-500 text-base sm:text-lg text-center">
            Mobile app - Web-Stack Web Developer | PHP/Laravel - ReactJS - Flutter
        </p>
        {{-- quotes --}}
        <p class="text-gray-400 italic font-bold hover:underline text-base text-center sm:text-lg">
            "With great power comes great responsibility"
        </p>
    </div>

    {{-- ABOUT ME --}}
    <section class="mt-10 mb-10 px-4 sm:px-6 lg:px-8">
        <h2
            class="text-blue-500 hover:underline font-bold text-2xl sm:text-3xl transition-all animate-bounce duration-200">
            About me
        </h2>
        <div class="mt-6 p-4 sm:p-6 shadow space-y-4">
            <h3 class="text-2xl sm:text-3xl font-semibold">
                About Me
                <hr class="border-blue-500 w-20 mt-2 border-2">
            </h3>
            <div class="space-y-4 shadow p-6 sm:p-10 rounded-xl bg-gray-50">
                {{-- Corrected text size from sm:text-xs to sm:text-base for readability. --}}
                <p class="text-gray-500 text-base leading-relaxed sm:leading-8">
                    I'm a passionate web and mobile app developer with expertise in PHP/Laravel, ReactJS, and Flutter. I
                    love creating efficient and user-friendly applications that solve real-world problems. With a strong
                    foundation in both front-end and back-end development, I strive to deliver high-quality solutions
                    that exceed client expectations.
                </p>
                <p class="text-gray-500 text-base sm:text-lg leading-relaxed sm:leading-8">
                    In addition to my technical skills, I am a collaborative team player who enjoys working in dynamic
                    environments. I am always eager to learn new technologies and stay updated with industry trends to
                    enhance my development skills.
                </p>
                <p class="text-gray-500 text-base sm:text-lg leading-relaxed sm:leading-8">
                    You can find me on LinkedIn and GitHub where I share my projects and connect with other
                    professionals in the field.
                </p>

                <div class="flex flex-wrap gap-4 mt-2">
                    <a href="https://www.linkedin.com/in/yoeung-yeng-1210b6355/" target="_blank"
                        class="text-blue-500 hover:underline">LinkedIn</a>
                    <a href="https://github.com/YoeungYeng" target="_blank"
                        class="text-blue-500 hover:underline">GitHub</a>
                </div>
            </div>
        </div>
    </section>

    {{-- STATE SECTION --}}
    <section class="mb-10 px-4 sm:px-6 lg:px-8">
        <h2
            class="text-blue-500 hover:underline font-bold text-2xl sm:text-3xl transition-all animate-bounce duration-200 mt-10">
            My Stats
        </h2>
        {{-- Removed outer div and combined headings for cleaner structure. --}}
        <div class="mt-6 p-4 sm:p-6 shadow space-y-4">
            <h3 class="text-2xl sm:text-3xl font-semibold">
                My Stats
                <hr class="border-blue-500 w-20 mt-2 border-2">
            </h3>
            {{-- This layout now uses flex-wrap to stack cards on mobile and display them in a row on larger screens. --}}
            <div class="space-y-4 shadow p-6 sm:p-10 rounded-xl flex flex-wrap items-center justify-center gap-6">
                {{-- Replaced fixed width w-[250px] with responsive widths for flexibility. --}}
                <div
                    class="w-full sm:w-56 md:w-60 rounded-xl flex justify-center items-center flex-col h-[160px] bg-gray-200 hover:scale-105 transition-all duration-200">
                    <h3 class="text-blue-500 text-3xl font-bold"> Just </h3>
                    <p class="font-medium italic"> Finish Graduated <span class="text-red-400">2021-2025</span> </p>
                </div>
                <div
                    class="w-full sm:w-56 md:w-60 rounded-xl flex flex-col items-center justify-center h-[160px] bg-gray-200 hover:scale-105 transition-all duration-200">
                    <h3 class="text-blue-500 text-3xl font-bold">10+</h3>
                    <p class="font-medium italic text-center">Projects Completed <span class="text-red-400">(small
                            Project)</span> </p>
                </div>
                <div
                    class="w-full sm:w-56 md:w-60 rounded-xl flex flex-col items-center justify-center h-[160px] bg-gray-200 hover:scale-105 transition-all duration-200">
                    <h3 class="text-blue-500 text-3xl font-bold">Full-Stack</h3>
                    <p class="font-medium italic text-center">PHP-LARAVEL, ReactJS, API, Mysql, Sqlite</p>
                </div>
                <div
                    class="w-full sm:w-56 md:w-60 rounded-xl flex flex-col items-center justify-center h-[160px] bg-gray-200 hover:scale-105 transition-all duration-200">
                    <h3 class="text-blue-500 text-3xl font-bold">Mobile App</h3>
                    <p class="font-medium italic text-center">Dart/Flutter</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CERTIFICATES & SKILLS SECTIONS --}}
    {{-- The Certificate and Skills sections are combined here for demonstration as they use the same layout. --}}
    <section class="mb-10 px-4 sm:px-6 lg:px-8">
        <h2
            class="text-blue-500 hover:underline font-bold text-2xl sm:text-3xl transition-all animate-bounce duration-200 mt-10">
            My Certificates & Skills
        </h2>
        <div class="mt-6 p-4 sm:p-6 shadow space-y-4">
            <h3 class="text-2xl sm:text-3xl font-semibold">
                Certificates & Skills
                <hr class="border-blue-500 w-40 mt-2 border-2">
            </h3>
            {{-- Grid now stacks on mobile (grid-cols-1) and becomes 2-column on large screens (lg:grid-cols-2). --}}
            <div class="shadow p-5 rounded-xl grid grid-cols-1 lg:grid-cols-2 gap-8">
                {{-- Card 1 (Certificate) --}}
                {{-- Removed fixed width w-[550px] and let the grid control the size. --}}
                <div
                    class="w-full p-6 rounded-xl flex flex-col gap-4 bg-gray-200 hover:scale-105 transition-transform duration-200">
                    <div class="flex items-center gap-4">
                        <span class="bg-blue-500 rounded-full p-3 text-amber-300 font-bold text-xl">
                            <i class="fa-solid fa-trophy"></i>
                        </span>
                        <div>
                            <h3 class="text-lg font-bold text-gray-700">CS (Computer Science of RUPP)</h3>
                            <p class="text-gray-600">RUPP • 2025</p>
                        </div>
                    </div>
                    <div class="flex flex-col flex-grow justify-between">
                        <p class="text-gray-600 text-base leading-7">
                            Graduated with a Bachelor's degree in Computer Science, focusing on software engineering,
                            algorithms, and data structures.
                        </p>
                        <a href="https://drive.google.com/drive/folders/1e_jxMk1N00S6hLyDQHQ-QrN9-KDvIz90"
                            target="_blank"
                            class="mt-4 px-4 py-2 w-fit bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                            Certificate
                        </a>


                    </div>
                </div>

                {{-- Card 2 (Flutter Skill/Cert) --}}
                <div
                    class="w-full p-6 rounded-xl flex flex-col gap-4 bg-gray-200 hover:scale-105 transition-transform duration-200">
                    <div class="flex items-center gap-4">
                        <span class="bg-blue-500 rounded-full p-3 text-amber-300 font-bold text-xl">
                            <i class="fa-solid fa-trophy"></i>
                        </span>
                        <div>
                            <h3 class="text-lg font-bold text-gray-700">Flutter Development</h3>
                            <p class="text-gray-600">Online Short Course • 2025</p>
                        </div>
                    </div>
                    <div class="flex flex-col flex-grow justify-between">
                        <p class="text-gray-600 text-base leading-7">
                            Learned how to build cross-platform mobile apps with Flutter & Dart, covering UI, state
                            management, and API integration.
                        </p>
                        <a href="https://youtu.be/PVxRGPLSEe4" target="_blank"
                            class="mt-4 px-4 py-2 w-fit bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                            View Project
                        </a>
                    </div>
                </div>

                {{-- Card 3 (Laravel Skill/Cert) --}}
                <div
                    class="w-full p-6 rounded-xl flex flex-col gap-4 bg-gray-200 hover:scale-105 transition-transform duration-200">
                    <div class="flex items-center gap-4">
                        <span class="bg-blue-500 rounded-full p-3 text-amber-300 font-bold text-xl">
                            <i class="fa-solid fa-trophy"></i>
                        </span>
                        <div>
                            <h3 class="text-lg font-bold text-gray-700">PHP & Laravel Framework</h3>
                            <p class="text-gray-600">Online Short Course • 2025</p>
                        </div>
                    </div>
                    <div class="flex flex-col flex-grow justify-between">
                        <p class="text-gray-600 text-base leading-7">
                            Mastered backend development, building REST APIs, and understanding MVC architecture using
                            the Laravel framework.
                        </p>
                        <a href="https://youtu.be/CqGBg07WINQ" target="_blank"
                            class="mt-4 px-4 py-2 w-fit bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                            View Project
                        </a>
                    </div>
                </div>

                {{-- Card 4 (Laravel api/ReactJs) --}}
                <div
                    class="w-full p-6 rounded-xl flex flex-col gap-4 bg-gray-200 hover:scale-105 transition-transform duration-200">
                    <div class="flex items-center gap-4">
                        <span class="bg-blue-500 rounded-full p-3 text-amber-300 font-bold text-xl">
                            <i class="fa-solid fa-trophy"></i>
                        </span>
                        <div>
                            <h3 class="text-lg font-bold text-gray-700">Laravel API & ReactJS</h3>
                            <p class="text-gray-600">Project building for Assignment in my course</p>
                        </div>
                    </div>
                    <div class="flex flex-col flex-grow justify-between">
                        <p class="text-gray-600 text-base leading-7">
                            I building this project for my assignment about e-commerce, building REST APIs, and
                            understanding MVC architecture using
                            the Laravel framework for building API and ReactJS for front-end.
                        </p>
                        <a href="https://youtu.be/0SOQgipMdKM" target="_blank"
                            class="mt-4 px-4 py-2 w-fit bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                            View Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WORK & PROJECTS SECTIONS --}}
    {{-- These two sections can share a similar responsive layout. --}}
    <section class="mb-10 px-4 sm:px-6 lg:px-8">
        <h2
            class="text-blue-500 hover:underline font-bold text-2xl sm:text-3xl transition-all animate-bounce duration-200 mt-10">
            My Experience & Projects
        </h2>
        <div class="mt-6 p-4 sm:p-6 shadow space-y-4">
            {{-- Experience --}}
            <h3 class="text-2xl sm:text-3xl font-semibold">
                Work Experience
                <hr class="border-blue-500 w-44 mt-2 border-2">
            </h3>
            <div class="shadow p-6 sm:p-10 rounded-xl bg-gray-50">
                <div class="w-full rounded-xl p-6 bg-gray-200 hover:shadow-lg transition-shadow duration-200">
                    {{-- Header stacks on mobile for better readability. --}}
                    <div
                        class="mb-4 flex flex-col sm:flex-row justify-between items-start sm:items-center w-full gap-2">
                        <h3 class="text-gray-700 text-lg font-bold">Full-Stack Developer</h3>
                        <p class="font-medium rounded-xl bg-white px-3 py-1 shadow-sm text-sm">2021 - 2025</p>
                    </div>
                    <ul class="list-disc list-inside space-y-2">
                        <li class="text-base text-gray-600">Developed and maintained full-stack web applications using
                            Laravel, Vue.js, and MySQL.</li>
                        <li class="text-base text-gray-600">Designed and implemented RESTful APIs for mobile and web
                            client consumption.</li>
                        <li class="text-base text-gray-600">Built cross-platform mobile applications from scratch using
                            Flutter and Dart.</li>
                    </ul>
                </div>
            </div>

            {{-- Projects --}}
            <h3 class="text-2xl sm:text-3xl font-semibold pt-8">
                Key Projects
                <hr class="border-blue-500 w-32 mt-2 border-2">
            </h3>
            {{-- This grid was already responsive, but standardized padding and hover effects. --}}
            <div class="shadow p-6 sm:p-10 rounded-xl grid grid-cols-1 md:grid-cols-2 gap-6 bg-gray-50">
                <div
                    class="w-full rounded-xl p-6 bg-gray-200 hover:shadow-lg transition-shadow duration-200 flex flex-col">
                    <div class="mb-4 flex justify-between items-center w-full">
                        <h3 class="text-gray-700 text-lgclear
                         font-bold">E-Commerce (Laravel)
                        </h3>
                        <p class="font-medium rounded-xl bg-white px-3 py-1 shadow-sm text-sm">2025</p>
                    </div>
                    <p class="text-gray-600 text-base leading-7 mb-4 flex-grow">
                        Developed a full-stack e-commerce platform using Laravel, MySQL, Sqlite, ReactJS, and
                        TailwindCSS with RESTful
                        APIs for product and order management.
                    </p>
                    <a href="https://github.com/YoeungYeng/eccomerce-php" target="_blank"
                        class="text-blue-500 hover:underline font-semibold">View
                        Project</a>
                </div>
                <div
                    class="w-full rounded-xl p-6 bg-gray-200 hover:shadow-lg transition-shadow duration-200 flex flex-col">
                    <div class="mb-4 flex justify-between items-center w-full">
                        <h3 class="text-gray-700 text-xl font-bold">Flutter Mobile App</h3>
                        <p class="font-medium rounded-xl bg-white px-3 py-1 shadow-sm text-sm">2024</p>
                    </div>
                    <p class="text-gray-600 text-base leading-7 mb-4 flex-grow">
                        Built a cross-platform mobile app using Flutter & Dart, with Jwt authentication and API
                        integration for e-commerce.
                    </p>
                    <a href="https://github.com/YoeungYeng/eccomerce-php/" target="_blank"
                        class="text-blue-500 hover:underline font-semibold">View
                        Project</a>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT SECTION --}}
    <section class="mb-10 px-4 sm:px-6 lg:px-8">
        <h2
            class="text-blue-500 hover:underline font-bold text-2xl sm:text-3xl transition-all animate-bounce duration-200 mt-10">
            Contact
        </h2>
        <div class="mt-6 p-4 sm:p-6 shadow space-y-4">
            <h3 class="text-2xl sm:text-3xl font-semibold">
                Get In Touch
                <hr class="border-blue-500 w-32 mt-2 border-2">
            </h3>
            {{-- Replaced w-[60%] with responsive width classes. --}}
            <div class="shadow text-center p-8 sm:p-10 rounded-xl w-full md:w-4/5 lg:w-3/5 mx-auto space-y-4">
                <h3 class="text-3xl text-blue-500 font-bold">Let's Connect</h3>
                <p class="text-gray-500 text-base sm:text-lg leading-8">
                    I'm always interested in discussing new opportunities. Whether you have a question or just want to
                    say hi, feel free to reach out!
                </p>
                {{-- Buttons now use flex-wrap to stack on small screens. --}}
                <div class="flex items-center justify-center flex-wrap gap-3 pt-4">
                    <a href="https://www.facebook.com/yoeung.yeng.7" target="_blank"
                        class="px-4 py-2 bg-blue-500 text-white rounded-xl hover:bg-blue-600 transition-colors duration-200">Facebook</a>
                    <a href="https://www.linkedin.com/feed/" target="_blank"
                        class="px-4 py-2 bg-blue-500 text-white rounded-xl hover:bg-blue-600 transition-colors duration-200">LinkedIn</a>
                    <a href="https://github.com/YoeungYeng" target="_blank"
                        class="px-4 py-2 bg-gray-800 text-white rounded-xl hover:bg-gray-900 transition-colors duration-200">GitHub</a>
                    <a href="mailto:yoeungyeng760@gmail.com" target="_blank"
                        class="px-4 py-2 bg-red-500 text-white rounded-xl hover:bg-red-600 transition-colors duration-200">Email
                        Me</a>
                </div>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="text-center p-6 text-gray-500 italic">
        &copy; {{ date('Y') }} YOEUNG YENG. All rights reserved.
    </footer>

</x-layout.app>
