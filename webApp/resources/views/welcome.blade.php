<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />

        <!-- Styles -->
        <link rel="stylesheet" href="css/tailwind.css" />
        <!-- Favicon -->
        <link
            rel="icon"
            type="image/png"
            href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/laptop_1f4bb.png"
        />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"
        />
        <!-- Tailwind Library -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
        />
    </head>

    <body class="antialiased">
        <!-- navbar -->
        <nav
            class="relative sm:flex sm:justify-between sm:items-center bg-dots-darker bg-center bg-gray-100 selection:bg-red-100 selection:text-white"
        >
            @if (Route::has("login"))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a
                            href="{{ url("/dashboard") }}"
                            class="font-semibold text-white hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route("login") }}"
                            class="font-semibold text-white hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                        >
                            Log in
                        </a>

                        @if (Route::has("register"))
                            <a
                                href="{{ route("register") }}"
                                class="ml-4 font-semibold text-white hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="sm:fixed sm:top-0 sm:left-0 p-2 text-left z-10">
                <a href="" class="flex items-center">
                    <img
                        src="img/perisai-logo.png"
                        class="h-10 mr-3"
                        alt="Pitching"
                        style="height: 75px"
                    />
                </a>
            </div>
        </nav>
        <!-- End of navbar -->

        <!-- Main -->
        <main>
            <div
                class="relative pt-16 pb-32 flex content-center items-center justify-center"
                style="min-height: 75vh"
            >
                <div
                    class="absolute top-0 w-full h-full bg-center bg-cover"
                    style="background-image: url('img/sample.jpg')"
                >
                    <!-- Overlay -->
                    <span
                        id="blackOverlay"
                        class="w-full h-full absolute bg-opacity-0"
                    ></span>
                </div>

                <!-- Text Over Main Background -->
                <div class="container relative mx-auto">
                    <div class="items-center flex flex-wrap">
                        <div
                            class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center"
                        >
                            <div class="pr-12">
                                <h1
                                    class="text-white font-semibold text-5xl"
                                    data-aos="fade-down"
                                    data-aos-duration="2000"
                                >
                                    PERISAI
                                </h1>
                                <p
                                    class="mt-4 text-lg text-gray-300"
                                    data-aos="fade-right"
                                    data-aos-duration="2000"
                                    data-aos-delay="300"
                                >
                                    Perlindungan dari Kekerasan Seksual di Indonesia
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Making Polygon Shape in Background -->
                <div
                    class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                    style="height: 70px; transform: translateZ(0)"
                >
                    <svg
                        class="absolute bottom-0 overflow-hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none"
                        version="1.1"
                        viewBox="0 0 2560 100"
                        x="0"
                        y="0"
                    >
                        <polygon
                            class="text-gray-300 fill-current"
                            points="2560 0 2560 100 0 100"
                        ></polygon>
                    </svg>
                </div>
            </div>
            <!-- End of Splash Page -->

            <!-- Services Section -->
            <section class="flex flex-wrap pt-100 pb-48 bg-gray-300 -mt-24">
                <!-- Section Container -->
                <div class="container mx-auto px-4 pt-24 pb-24">
                    <div class="items-center flex flex-wrap">
                        <div
                            class="w-full md:w-4/12 ml-auto mr-auto px-4 pt-24"
                            data-aos="zoom-in"
                            data-aos-duration="3000"
                            data-aos-delay="200"
                        >
                            <!-- Image by : https://undsgn.com/css-and-javascript-animation/-->
                            <img
                                alt="Hand pressing a keyboard size Animate button"
                                class="max-w-full rounded-lg shadow-lg"
                                src="https://undsgn.com/wp-content/uploads/2018/04/01_funny-and-inspiring-graphic-design-related-gifs.gif"
                            />
                        </div>
                        <!-- Text Box Container-->
                        <div
                            class="w-full md:w-5/12 ml-auto mr-auto px-4 pt-24"
                            data-aos="zoom-in"
                            data-aos-duration="3000"
                            data-aos-delay="300"
                        >
                            <div class="md:pr-12">
                                <!-- Text Box -->
                                <h3 class="text-3xl font-semibold">Projects</h3>
                                <p
                                    class="mt-4 text-lg leading-relaxed text-gray-600"
                                >
                                    Click the icons below to view a few of my
                                    projects.
                                </p>
                                <!-- List -->
                                <ul class="list-none mt-6">
                                    <li
                                        class="py-2"
                                        data-aos="fade-right"
                                        data-aos-duration="500"
                                    >
                                        <div class="flex items-center">
                                            <div>
                                                <a
                                                    href="https://shotpoet86.github.io/github.search/"
                                                    target="_blank"
                                                >
                                                    <span
                                                        class="text-xs font-semibold inline-block py-2 px-3 uppercase rounded-full text-white bg-blue-500 mr-3"
                                                    >
                                                        <!-- Icon -->
                                                        <i
                                                            class="fab fa-react"
                                                        ></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-600">
                                                    <a
                                                        href="https://shotpoet86.github.io/github.search/"
                                                        target="_blank"
                                                    >
                                                        Github user search
                                                        incorporating React.JS
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="py-2"
                                        data-aos="fade-right"
                                        data-aos-duration="750"
                                    >
                                        <div class="flex items-center">
                                            <div>
                                                <a
                                                    href="https://shotpoet86.github.io/bookmark.app/"
                                                    target="_blank"
                                                >
                                                    <span
                                                        class="text-xs font-semibold inline-block py-2 px-3 uppercase rounded-full text-white bg-blue-400 mr-3"
                                                    >
                                                        <!-- Icon -->
                                                        <i
                                                            class="fab fa-js-square"
                                                        ></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-600">
                                                    <a
                                                        href="https://shotpoet86.github.io/bookmark.app/"
                                                        target="_blank"
                                                    >
                                                        Bookmark web app
                                                        utilizing HTML, CSS, and
                                                        JavaScript
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="py-2"
                                        data-aos="fade-right"
                                        data-aos-duration="1000"
                                    >
                                        <div class="flex items-center">
                                            <div>
                                                <a
                                                    href="https://shotpoet86.github.io/drag.drop.kanban/"
                                                    target="_blank"
                                                >
                                                    <span
                                                        class="text-xs font-semibold inline-block py-2 px-3 uppercase rounded-full text-white bg-green-400 mr-3"
                                                    >
                                                        <!-- Icon -->
                                                        <i
                                                            class="far fa-address-book"
                                                        ></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-600">
                                                    <a
                                                        href="https://shotpoet86.github.io/drag.drop.kanban/"
                                                        target="_blank"
                                                    >
                                                        Kanban board with drag
                                                        and drop functionality
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="py-2"
                                        data-aos="fade-right"
                                        data-aos-duration="1750"
                                    >
                                        <div class="flex items-center">
                                            <div>
                                                <a
                                                    href="https://shotpoet86.github.io/jokingRobot/"
                                                    target="_blank"
                                                >
                                                    <span
                                                        class="text-xs font-semibold inline-block py-2 px-3 uppercase rounded-full text-white bg-green-500 mr-3"
                                                    >
                                                        <!-- Icon -->
                                                        <i
                                                            class="fab fa-android"
                                                        ></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-600">
                                                    <a
                                                        href="https://shotpoet86.github.io/jokingRobot/"
                                                        target="_blank"
                                                    >
                                                        A very funny dancing
                                                        robot that tells
                                                        Programming jokes
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of Services Section -->

            <!-- About Section -->
            <section class="relative py-20">
                <!-- Making Polygon Shape in Background -->
                <div
                    class="top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                    style="height: 80px; transform: translateZ(0)"
                >
                    <svg
                        class="absolute bottom-0 overflow-hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none"
                        version="1.1"
                        viewBox="0 0 2560 100"
                        x="0"
                        y="0"
                    >
                        <polygon
                            class="text-white fill-current"
                            points="2560 0 2560 100 0 100"
                        ></polygon>
                    </svg>
                </div>
            </section>
            <!-- End of About Section -->

            <!-- Team Section -->
            <section class="pb-48">
                <!-- Section Container -->
                <div class="container mx-auto px-4">
                    <!-- Text Box -->
                    <div
                        class="flex flex-wrap justify-center text-center mb-12"
                        data-aos="zoom-in"
                        data-aos-duration="1000"
                    >
                        <div class="w-full lg:w-6/12 px-4">
                            <h2 class="text-4xl font-semibold">Technologies</h2>
                            <p
                                class="text-lg leading-relaxed m-4 text-gray-600"
                            >
                                I've worked with other languages such as Java,
                                Python, C#, and VB.NET. While those are great,
                                below are my favorites.
                            </p>
                        </div>
                    </div>
                    <!-- Flex Row Container -->
                    <div class="flex flex-wrap pb-24">
                        <!-- Item -->
                        <div
                            class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4"
                            data-aos="zoom-in-left"
                            data-aos-duration="1000"
                        >
                            <div class="px-6">
                                <!-- Image -->
                                <a
                                    href="https://github.com/shotpoet86?tab=repositories&q=&type=&language=html"
                                    title="HTML Projects"
                                    target="_blank"
                                >
                                    <img
                                        alt="..."
                                        src="https://static.javatpoint.com/images/logo/html-tutorial.png"
                                        class="shadow-lg rounded max-w-full mx-auto"
                                        style="max-width: 120px"
                                    />
                                </a>
                                <div class="pt-6 text-center">
                                    <h5 class="text-sm">HTML5</h5>
                                    <!-- Social Media Buttons -->
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div
                            class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4"
                            data-aos="zoom-in-left"
                            data-aos-duration="1500"
                        >
                            <div class="px-6">
                                <!-- Image -->
                                <a
                                    href="https://github.com/shotpoet86?tab=repositories&q=&type=&language=css"
                                    title="CSS Projects"
                                    target="_blank"
                                >
                                    <img
                                        alt="..."
                                        src="https://static.javatpoint.com/images/logo/css3.jpg"
                                        class="shadow-lg rounded max-w-full mx-auto"
                                        style="max-width: 120px"
                                    />
                                </a>
                                <div class="pt-6 text-center">
                                    <h5 class="text-sm">CSS3</h5>
                                    <!-- Social Media Buttons -->
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div
                            class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4"
                            data-aos="zoom-in-left"
                            data-aos-duration="2000"
                        >
                            <div class="px-6">
                                <!-- Image -->
                                <a
                                    href="https://github.com/shotpoet86?tab=repositories&q=&type=&language=html"
                                    title="JavaScript Projects"
                                    target="_blank"
                                >
                                    <img
                                        alt="..."
                                        src="https://static.javatpoint.com/images/logo/javascripthome.png"
                                        class="shadow-lg rounded max-w-full mx-auto"
                                        style="max-width: 120px"
                                    />
                                </a>
                                <div class="pt-6 text-center">
                                    <h5 class="text-sm">JavaScript</h5>
                                    <!-- Social Media Buttons -->
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div
                            class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4"
                            data-aos="zoom-in-left"
                            data-aos-duration="2500"
                        >
                            <div class="px-6">
                                <!-- Image -->
                                <a
                                    href="https://github.com/shotpoet86?tab=repositories"
                                    title="Github has my React stuff all mixed in unfortunately"
                                    target="_blank"
                                >
                                    <img
                                        alt="..."
                                        src="https://static.javatpoint.com/tutorial/reactjs/images/reactjs-home.png"
                                        class="shadow-lg rounded max-w-full mx-auto"
                                        style="max-width: 120px"
                                    />
                                </a>
                                <div class="pt-6 text-center">
                                    <h5 class="text-sm">React.JS</h5>
                                    <!-- Social Media Buttons -->
                                </div>
                            </div>
                        </div>
                        <div
                            class="mt-10 w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4"
                            data-aos="zoom-in-left"
                            data-aos-duration="1000"
                        >
                            <div class="px-6">
                                <!-- Image -->
                                <img
                                    alt="..."
                                    src="https://static.javatpoint.com/js/nodejs/images/nodejs-logo.png"
                                    class="shadow-lg rounded max-w-full mx-auto"
                                    style="max-width: 120px"
                                />
                                <div class="pt-6 text-center">
                                    <h5 class="text-sm">Node.JS</h5>
                                    <!-- Social Media Buttons -->
                                </div>
                            </div>
                        </div>
                        <div
                            class="mt-10 w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4"
                            data-aos="zoom-in-left"
                            data-aos-duration="1500"
                        >
                            <div class="px-6">
                                <!-- Image -->
                                <img
                                    alt="..."
                                    src="https://static.javatpoint.com/js/nodejs/express/images/expressjs-logo.png"
                                    class="shadow-lg rounded max-w-full mx-auto"
                                    style="max-width: 120px"
                                />
                                <div class="pt-6 text-center">
                                    <h5 class="text-sm">Express.JS</h5>
                                    <!-- Social Media Buttons -->
                                </div>
                            </div>
                        </div>
                        <div
                            class="mt-10 w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4"
                            data-aos="zoom-in-left"
                            data-aos-duration="2000"
                        >
                            <div class="px-6">
                                <!-- Image -->
                                <img
                                    alt="..."
                                    src="https://static.javatpoint.com/images/logo/mongodb.png"
                                    class="shadow-lg rounded max-w-full mx-auto"
                                    style="max-width: 120px"
                                />
                                <div class="pt-6 text-center">
                                    <h5 class="text-sm">Mongo.DB</h5>
                                    <!-- Social Media Buttons -->
                                </div>
                            </div>
                        </div>
                        <div
                            class="mt-10 w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4"
                            data-aos="zoom-in-left"
                            data-aos-duration="2500"
                        >
                            <div class="px-6">
                                <!-- Image -->
                                <img
                                    alt="..."
                                    src="https://static.javatpoint.com/postgre/images/postgre-logo.png"
                                    class="shadow-lg rounded max-w-full mx-auto"
                                    style="max-width: 120px"
                                />
                                <div class="pt-6 text-center">
                                    <h5 class="text-sm">PostgreSQL</h5>
                                    <!-- Social Media Buttons -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of Team Section -->

            <!-- Contact Section -->
            <section class="pb-20 relative block bg-gray-800">
                <!-- Making Polygon Shape in Background -->
                <div
                    class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                    style="height: 80px; transform: translateZ(0)"
                >
                    <svg
                        class="absolute bottom-0 overflow-hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none"
                        version="1.1"
                        viewBox="0 0 2560 100"
                        x="0"
                        y="0"
                    >
                        <polygon
                            class="text-gray-800 fill-current"
                            points="2560 0 2560 100 0 100"
                        ></polygon>
                    </svg>
                </div>
                <!-- Section Container -->
                <div class="container mx-auto px-4 lg:pt-12 lg:pb-32">
                    <!-- Text Box -->
                    <div
                        class="flex flex-wrap pt-24 mb-6 text-center justify-center"
                        data-aos="zoom-in"
                        data-aos-duration="1000"
                    >
                        <div class="w-full lg:w-6/12 px-4">
                            <h2
                                class="text-4xl font-semibold text-white"
                                id="hire"
                            >
                                Why Hire Me?
                            </h2>
                            <p
                                class="text-lg leading-relaxed mt-4 mb-4 text-gray-300"
                            >
                                Either side of the interview desk can turn into
                                a stressful experience quickly. The employee and
                                employer never truly know who they're getting
                                until they've had a working relationship. Below
                                are some career skills I'm most proud of outside
                                of programming.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap mb-12">
                        <!-- Card -->
                        <div
                            class="lg:pt-10 pt-6 w-full md:w-4/12 px-4 text-center"
                            data-aos="zoom-in"
                            data-aos-delay="200"
                            data-aos-duration="1500"
                        >
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                            >
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                                    >
                                        <!-- Icon -->
                                        <i class="fas fa-robot"></i>
                                    </div>
                                    <!-- Text Box -->
                                    <h6 class="text-xl font-semibold">
                                        Soft Skills
                                    </h6>
                                    <p class="mt-2 mb-4 text-gray-600">
                                        Technology is great in business. With
                                        that said, soft skills are essential to
                                        any business. It's satisfying to talk
                                        with customers or teammates about a
                                        business problem. It allows me to learn
                                        more about them while gathering quality
                                        information to solve a problem.
                                        Interpreting what customers need for
                                        business in their words and creating
                                        great products with programming tools is
                                        what you can expect.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <div
                            class="w-full md:w-4/12 px-4 text-center"
                            data-aos="zoom-in"
                            data-aos-delay="50"
                            data-aos-duration="1000"
                        >
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                            >
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                                    >
                                        <!-- Icon -->
                                        <i class="fas fa-atom"></i>
                                    </div>
                                    <!-- Text Box -->
                                    <h6 class="text-xl font-semibold">
                                        Collaboration
                                    </h6>
                                    <p class="mt-2 mb-4 text-gray-600">
                                        I've worked recently in customer
                                        service. Each role required team
                                        collaboration and customer facing
                                        interactions. Asking the right
                                        questions, gathering information, and
                                        developing solutions to a problem is how
                                        I succeeded in my various roles. I bring
                                        these invaluable skills into my
                                        developer career.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <div
                            class="pt-12 w-full md:w-4/12 px-4 text-center"
                            data-aos="zoom-in"
                            data-aos-delay="400"
                            data-aos-duration="2000"
                        >
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                            >
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                                    >
                                        <!-- Icon -->
                                        <i class="fas fa-bolt"></i>
                                    </div>
                                    <!-- Text Box -->
                                    <h6 class="text-xl font-semibold">
                                        Learn and Grow
                                    </h6>
                                    <p class="mt-2 mb-4 text-gray-600">
                                        Learning a new technology and knowing
                                        there's another challenge around the
                                        corner is exciting. To learn and grow in
                                        programming is a want, not a need for
                                        me. As an employer, rest assured you'll
                                        have someone who learns new things not
                                        just for business need, but for personal
                                        growth as well.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer Section -->
        <footer class="relative bg-gray-300 pt-8 pb-6">
            <!-- Making Polygon Shape in Background -->
            <div
                class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px; transform: translateZ(0)"
            >
                <svg
                    class="absolute bottom-0 overflow-hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none"
                    version="1.1"
                    viewBox="0 0 2560 100"
                    x="0"
                    y="0"
                >
                    <polygon
                        class="text-gray-300 fill-current"
                        points="2560 0 2560 100 0 100"
                    ></polygon>
                </svg>
            </div>
            <!-- Section Container -->
            <div class="container mx-auto px-4">
                <!-- Text Box Container -->
                <div class="flex justify-center">
                    <div class="text-center w-full lg:w-6/12 px-4">
                        <h4 class="text-3xl font-semibold">Contact Me</h4>
                        <hr class="my-6 border-gray-400" />
                        <h5 class="text-lg mt-0 mb-2 text-gray-700">
                            Thanks for your time! Please contact me on LinkedIn
                            or Email to chat.
                        </h5>
                        <!-- Social Media Buttons -->
                        <div class="mt-6">
                            <a
                                href="https://github.com/shotpoet86"
                                target="_blank"
                                title="Github Profile"
                            >
                                <i
                                    class="fab fa-github bg-white text-gray-900 shadow-lg font-lg p-3 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 inline-block text-center"
                                ></i>
                            </a>
                            <a
                                href="https://www.linkedin.com/in/yournextdeveloper"
                                target="_blank"
                                title="LinkedIn Profile"
                            >
                                <i
                                    class="fab fa-linkedin bg-white text-blue-600 shadow-lg font-lg p-3 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 inline-block text-center"
                                ></i>
                            </a>
                            <a
                                href="mailto:parker.devtech@gmail.com"
                                target="_blank"
                                title="Email Me"
                            >
                                <i
                                    class="fab fa-google bg-white text-red-600 shadow-lg font-lg p-3 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 inline-block text-center"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <!--line at bottom of page-->
                    <hr class="my-6 border-gray-400" />
                </div>
            </div>
        </footer>
        <!-- End of Footer Section -->
    </body>
</html>
