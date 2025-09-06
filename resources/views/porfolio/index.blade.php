<x-layout.app>


    {{-- information --}}
    <div class="flex mt-10 flex-col gap-4 w-full h-auto p-6  items-center justify-center space-y-3 shadow">
        {{-- my name --}}
        <h3 class="text-4xl font-medium">
            Hi, I'm <span class="font-bold text-blue-500 ">YOEUNG YENG</span>
        </h3>
        {{-- description --}}
        <p class="text-gray-500  text-2xl space-x-5">
            Mobile app - Web-Stack Web Developer | PHP/Laravel - ReactJS - Flutter
        </p>
        {{-- quotes --}}
        <p class="text-gray-400 italic  text-lg">
            "With great power comes great responsibility"
        </p>
    </div>
    {{-- about me --}}
    <section class="mt-10 mb-10">
        <h2 class="text-blue-500 hover:underline font-bold text-2xl transition-all animate-bounce duration-200"> About me
        </h2>
        <div class="mt-10 p-6 shadow space-y-4">
            <h3 class="text-3xl font-semibold ">
                About Me
                <hr class="border-blue-500 w-20 mt-2 border-2">
            </h3>
            <div class="space-y-4 shadow p-10 rounded-xl bg-gray-50">
                <p class="text-gray-500 text-lg leading-8">
                    I'm a passionate web and mobile app developer with expertise in PHP/Laravel, ReactJS, and Flutter. I
                    love creating efficient and user-friendly applications that solve real-world problems. With a strong
                    foundation in both front-end and back-end development, I strive to deliver high-quality solutions
                    that exceed client expectations.
                </p>
                <p class="text-gray-500 text-lg leading-8">
                    In addition to my technical skills, I am a collaborative team player who enjoys working in dynamic
                    environments. I am always eager to learn new technologies and stay updated with industry trends to
                    enhance my development skills.
                </p>
                <p class="text-gray-500 text-lg leading-8">
                    You can find me on LinkedIn and GitHub where I share my projects and connect with other
                    professionals in the field.
                </p>

                <div class="space-x-4">
                    <a href="https://www.linkedin.com/in/yoeung-yeng-1210b6355/" target="_blank"
                        class="text-blue-500 hover:underline">LinkedIn</a>
                    <a href="https://github.com/YoeungYeng" target="_blank"
                        class="text-blue-500 hover:underline">GitHub</a>
                </div>
            </div>

        </div>
    </section>
    {{-- state section --}}
    <section class="mb-10">
        <h2 class="text-blue-500 hover:underline font-bold text-2xl transition-all animate-bounce duration-200 mt-10">
            My State
        </h2>
        <div class="mt-10 p-6 shadow space-y-4 w-full h-auto">
            <h3 class="text-3xl font-semibold ">
                My State
                <hr class="border-blue-500 w-20 mt-2 border-2">
            </h3>
            <div class="space-y-4 shadow p-10 rounded-xl  flex items-center justify-between gap-6">
                <div
                    class="w-[250px]  rounded-xl flex justify-center items-center flex-col h-[160px] bg-gray-200 hover:scale-90 transition-all duration-200">
                    <h3 class="text-blue-500 text-3xl font-bold"> no </h3>
                    <p class="font-medium italic"> Years IT Experience </p>
                </div>
                <div
                    class="w-[250px] rounded-xl flex flex-col items-center justify-center h-[160px] bg-gray-200 hover:scale-90 transition-all duration-200">
                    <h3 class="text-blue-500 text-3xl font-bold"> Many </h3>
                    <p class="font-medium italic"> Project </p>
                </div>
                <div
                    class="w-[250px] rounded-xl flex flex-col items-center justify-center h-[160px] bg-gray-200 hover:scale-90 transition-all duration-200 ">
                    <h3 class="text-blue-500 text-3xl font-bold"> Full-Stack </h3>
                    <p class="font-medium italic"> PHP-LARAVEL </p>
                </div>
                <div
                    class="w-[250px] rounded-xl flex flex-col items-center justify-center h-[160px] bg-gray-200 hover:scale-90 transition-all duration-200 ">
                    <h3 class="text-blue-500 text-3xl font-bold"> Mobile App </h3>
                    <p class="font-medium italic"> Flutter </p>
                </div>
            </div>
    </section>
    {{-- Certificates Section --}}
    <section class="mb-10">
        <h2 class="text-blue-500 hover:underline font-bold text-2xl transition-all animate-bounce duration-200 mt-10">
            My Certificate
        </h2>
        <div class="mt-10 p-6 shadow space-y-4 w-full h-auto">
            <h3 class="text-3xl font-semibold ">
                Certificate
                <hr class="border-blue-500 w-20 mt-2 border-2">
            </h3>
            <div class="space-y-4 shadow p-5 rounded-xl  grid grid-cols-2  gap-14">
                <div
                    class="w-[550px] h-[260px] p-6 rounded-xl flex flex-col justify-start items-start gap-4 bg-gray-200 hover:scale-90 transition-transform 
                    duration-200">

                    {{-- Top section with logo and title --}}
                    <div class="flex items-center gap-4">
                       {{-- font awsome --}}
                       <span class="bg-blue-500 rounded-full p-2 text-amber-300 font-bold">
                        <i class="fa-solid fa-trophy icon-circle"></i>
                       </span>

                        <div>
                            <h3 class="text-xl font-bold text-gray-700">
                                CS (Computer Science of RUPP)
                            </h3>
                            <p class="text-gray-600">RUPP • 2025</p>
                        </div>
                    </div>

                    {{-- Description + Button --}}
                    <div class="flex flex-col">
                        <p class="text-gray-600 text-lg leading-7">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ad tempora animi dignissimos
                            impedit, non accusantium obcaecati.
                        </p>

                        <a href="#" target="_blank"
                            class="mt-4 px-4 py-2 w-fit bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                            View Certificate
                        </a>
                    </div>

                </div>

                <div
                    class="w-[550px] h-[260px] p-6 rounded-xl flex flex-col justify-start items-start gap-4 bg-gray-200 hover:scale-90 
                    transition-transform duration-200">

                    {{-- Top section with logo and title --}}
                    <div class="flex items-center gap-4">
                        {{-- font awsome --}}
                       <span class="bg-blue-500 rounded-full p-2 text-amber-300 font-bold">
                        <i class="fa-solid fa-trophy icon-circle"></i>
                       </span>

                        <div>
                            <h3 class="text-xl font-bold text-gray-700">
                                Flutter Development
                            </h3>
                            <p class="text-gray-600">Online Short Course • 2025</p>
                        </div>
                    </div>

                    {{-- Description + Button --}}
                    <div class="flex flex-col">
                        <p class="text-gray-600 text-lg leading-7">
                            Learned how to build cross-platform mobile apps with Flutter & Dart,
                            covering UI, state management, and API integration.
                        </p>

                        <a href="https://github.com/YoeungYeng/mobile_app" target="_blank"
                            class="mt-4 px-4 py-2 w-fit bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                            View Project
                        </a>
                    </div>
                </div>

                <div
                    class="w-[550px] h-[260px] p-6 rounded-xl flex flex-col justify-start items-start gap-4 bg-gray-200 hover:scale-90 transition-transform duration-200">

                    {{-- Top section with logo and title --}}
                    <div class="flex items-center gap-4">
                        {{-- font awsome --}}
                       <span class="bg-blue-500 rounded-full p-2 text-amber-300 font-bold">
                        <i class="fa-solid fa-trophy icon-circle"></i>
                       </span>

                        <div>
                            <h3 class="text-xl font-bold text-gray-700">
                                PHP & Laravel Framework
                            </h3>
                            <p class="text-gray-600">Online Short Course • 2025</p>
                        </div>
                    </div>

                    {{-- Description + Button --}}
                    <div class="flex flex-col">
                        <p class="text-gray-600 text-lg leading-7">
                            Learned backend development, REST APIs, and MVC architecture using Laravel.
                        </p>

                        <a href="https://github.com/YoeungYeng/pixel-postion" target="_blank"
                            class="mt-4 px-4 py-2 w-fit bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                            View Projects
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    {{-- skills Section --}}
    <section class="mb-10">
        <h2 class="text-blue-500 hover:underline font-bold text-2xl transition-all animate-bounce duration-200 mt-10">
            My Skills
        </h2>
        <div class="mt-10 p-6 shadow space-y-4 w-full h-auto">
            <h3 class="text-3xl font-semibold ">
                Skills
                <hr class="border-blue-500 w-20 mt-2 border-2">
            </h3>
            <div class="space-y-4 shadow p-5 rounded-xl  grid grid-cols-2  gap-14">

                <div
                    class="w-[550px] h-[260px] p-6 rounded-xl flex flex-col justify-start items-start gap-4 bg-gray-200 hover:scale-90 
                    transition-transform duration-200">

                    {{-- Top section with logo and title --}}
                    <div class="flex items-center gap-4">
                        {{-- font awsome --}}
                       <span class="bg-blue-500 rounded-full p-2 text-amber-300 font-bold">
                        <i class="fa-solid fa-trophy icon-circle"></i>
                       </span>

                        <div>
                            <h3 class="text-xl font-bold text-gray-700">
                                Flutter Development
                            </h3>
                            <p class="text-gray-600">Online Short Course • 2025</p>
                        </div>
                    </div>

                    {{-- Description + Button --}}
                    <div class="flex flex-col">
                        <p class="text-gray-600 text-lg leading-7">
                            Learned how to build cross-platform mobile apps with Flutter & Dart,
                            covering UI, state management, and API integration.
                        </p>

                        <a href="https://github.com/YoeungYeng/mobile_app" target="_blank"
                            class="mt-4 px-4 py-2 w-fit bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                            View Project
                        </a>
                    </div>
                </div>

                <div
                    class="w-[550px] h-[260px] p-6 rounded-xl flex flex-col justify-start items-start gap-4 bg-gray-200 hover:scale-90 transition-transform duration-200">

                    {{-- Top section with logo and title --}}
                    <div class="flex items-center gap-4">
                        {{-- font awsome --}}
                       <span class="bg-blue-500 rounded-full p-2 text-amber-300 font-bold">
                        <i class="fa-solid fa-trophy icon-circle"></i>
                       </span>

                        <div>
                            <h3 class="text-xl font-bold text-gray-700">
                                PHP & Laravel Framework
                            </h3>
                            <p class="text-gray-600">Online Short Course • 2025</p>
                        </div>
                    </div>

                    {{-- Description + Button --}}
                    <div class="flex flex-col">
                        <p class="text-gray-600 text-lg leading-7">
                            Learned backend development, REST APIs, and MVC architecture using Laravel.
                        </p>

                        <a href="https://github.com/YoeungYeng/pixel-postion" target="_blank"
                            class="mt-4 px-4 py-2 w-fit bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                            View Projects
                        </a>
                    </div>
                </div>


            </div>
    </section>

    {{-- work Section --}}
    <section class="mb-10">
        <h2 class="text-blue-500 hover:underline font-bold text-2xl transition-all animate-bounce duration-200 mt-10">
            My Experience
        </h2>
        <div class="mt-10 p-6 shadow space-y-4 w-full h-auto">
            <h3 class="text-3xl font-semibold ">
                Work Experience
                <hr class="border-blue-500 w-20 mt-2 border-2">
            </h3>
            <div class="space-y-4 shadow p-10 rounded-xl  grid grid-cols-1 gap-6">
                <div
                    class="w-full  rounded-xl p-6 bg-gray-200 hover:scale-105 transition-all duration-200 flex justify-between items-center flex-col">
                    <div class="mb-4 flex justify-between items-center w-full">
                        <h3 class="text-gray-500 text-xl font-bold">
                            Work Experience by me

                        </h3>
                        <p class="font-medium rounded-xl bg-gray-200 p-2 shadow"> 2021 - 2025 </p>
                    </div>

                    <div class="flex w-full ">
                        <div class="mb-4">
                            <ul class="list-disc list-inside ">
                                <li class="text-xl font-light ">
                                    <a href="#" class="text-blue-500 text-lg"> Developed Web application </a>
                                </li>
                                <li class="text-xl font-light ">
                                    <a href="#" class="text-blue-500 text-lg"> Developed API application </a>
                                </li>
                                <li class="text-xl font-light ">
                                    <a href="#" class="text-blue-500 text-lg"> Developed Mobile application </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>

                </div>


            </div>
    </section>
    {{-- Projects Section --}}
    <section class="mb-10">
        {{-- Section Title --}}
        <h2 class="text-blue-500 hover:underline font-bold text-2xl transition-all animate-bounce duration-200 mt-10">
            My Projects
        </h2>

        <div class="mt-10 p-6 shadow space-y-4 w-full h-auto">
            <h3 class="text-3xl font-semibold">
                Key Projects
                <hr class="border-blue-500 w-20 mt-2 border-2">
            </h3>

            {{-- Projects Grid --}}
            <div class="space-y-4 shadow p-10 rounded-xl grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Project 1: Flutter --}}
                <div
                    class="w-full rounded-xl p-6 bg-gray-200 hover:scale-105 transition-all duration-200 flex flex-col justify-between items-start">
                    <div class="mb-4 flex justify-between items-center w-full">
                        <h3 class="text-gray-700 text-xl font-bold">Flutter Mobile App</h3>
                        <p class="font-medium rounded-xl bg-gray-100 px-3 py-1 shadow">2024</p>
                    </div>
                    <p class="text-gray-600 text-lg leading-7 mb-4">
                        Built a cross-platform mobile app using Flutter & Dart, with Firebase authentication and API
                        integration.
                    </p>
                    <a href="#" target="_blank" class="text-blue-500 hover:underline">View Project</a>
                </div>

                {{-- Project 2: PHP & Laravel --}}
                <div
                    class="w-full rounded-xl p-6 bg-gray-200 hover:scale-105 transition-all duration-200 flex flex-col justify-between items-start">
                    <div class="mb-4 flex justify-between items-center w-full">
                        <h3 class="text-gray-700 text-xl font-bold">E-Commerce (Laravel)</h3>
                        <p class="font-medium rounded-xl bg-gray-100 px-3 py-1 shadow">2025</p>
                    </div>
                    <p class="text-gray-600 text-lg leading-7 mb-4">
                        Developed a full-stack e-commerce platform using Laravel, MySQL, and TailwindCSS with RESTful
                        APIs.
                    </p>
                    <a href="#" target="_blank" class="text-blue-500 hover:underline">View Project</a>
                </div>

                {{-- Project 3: API Development --}}
                <div
                    class="w-full rounded-xl p-6 bg-gray-200 hover:scale-105 transition-all duration-200 flex flex-col justify-between items-start">
                    <div class="mb-4 flex justify-between items-center w-full">
                        <h3 class="text-gray-700 text-xl font-bold">REST API Service</h3>
                        <p class="font-medium rounded-xl bg-gray-100 px-3 py-1 shadow">2025</p>
                    </div>
                    <p class="text-gray-600 text-lg leading-7 mb-4">
                        Designed and deployed secure REST APIs with Laravel Sanctum, authentication, and CRUD
                        operations.
                    </p>
                    <a href="#" target="_blank" class="text-blue-500 hover:underline">View Project</a>
                </div>

            </div>
        </div>
    </section>


    {{-- Contact Section --}}
    <section class="mb-10">
        <h2 class="text-blue-500 hover:underline font-bold text-2xl transition-all animate-bounce duration-200 mt-10">
            Contact
        </h2>
        <div class="mt-10 p-6 shadow space-y-4 w-full h-auto">
            <h3 class="text-3xl font-semibold ">
                Get In Touch
                <hr class="border-blue-500 w-20 mt-2 border-2">
            </h3>
            <div class="shadow text-center p-10 rounded-xl w-[60%] m-auto space-y-2 space-x-2">
                <h3 class="text-3xl text-blue-500 font-bold"> connection </h3>
                <p class="text-gray-500 text-lg leading-8">
                    I'm always interested in discussing new opportunities in cybersecurity, web development, or IT
                    education. Whether you're looking for a security consultant, full-stack developer, or IT instructor,
                    feel free to reach out via email.
                </p>
                {{-- button connection such as facebook, linkin, github --}}
                <button class="px-4 py-2 bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                    <a href="https://www.facebook.com/yoeung.yeng.7" target="_blank"> facebook </a>
                </button>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                    <a href="https://www.linkedin.com/feed/" target="_blank"> Linkin </a>
                </button>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                    <a href="https://github.com/YoeungYeng" target="_blank"> GitHub </a>
                </button>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-xl hover:bg-blue-400 transition-colors duration-200">
                    <a href="mailto:yoeungyeng760@gmail.com" target="_blank"> Email Me </a>
                </button>
            </div>

    </section>
    {{-- footer --}}
    <footer class="text-center p-6 mb-10 text-gray-400 italic">
        &copy; 2024 YOEUNG YENG. All rights reserved.
    </footer>
</x-layout.app>
