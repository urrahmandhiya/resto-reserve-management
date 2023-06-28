<x-guest-layout>
    <!-- Main Hero Content -->

    <!-- Custom Styles -->
    <style>
  .bg-gray-800 {
    background-color: #B5B09D;
  }

  .text-xl.text-white {
    font-style: italic;
  }

  .grid-container {
    display: flex;
    justify-content: center;
    gap: 2rem;
  }

  .custom-border {
    border-color: #513444;
  }

  .custom-color {
    color: #513444;
  }

  .custom-color:hover {
    color: #ffffff;
  }

  .custom-button {
        background-color: #b5b09d;
    }

    .custom-button:hover {
        background-color: #513444;
    }
    </style>

    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')">
        <h1
        class="font-poppins text-3xl font-extrabold text-white bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Welcome to Heaven's Kitchen</span>
        </h1>
        <div class="mx-auto mt-2 font-extrabold text-green-50 md:text-center lg:text-lg">
        Heavenly Delights, Savored in Elegance.
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('reservations.step.one') }}" type="button"
                    class="custom-button inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-b5b09d rounded-full lg:w-full md:w-auto focus:outline-none">
                    Make your Reservation
                </a>
            </span>
        </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-gray-800 md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
                        <h3 class="text-xl">OUR STORY
                        </h3>
                        <h2 class="text-4xl font-semibold text-white">Welcome</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl"
                        style="color: #513444;">
                        Welcome to Heaven's Kitchen, where culinary dreams come true. Step into a world of extraordinary flavors and refined elegance as we invite you to embark on an unforgettable fine dining experience. Immerse yourself in our meticulously crafted dishes, expertly prepared by our talented chefs using the finest ingredients. Indulge in impeccable service and let our attentive staff guide you through a gastronomic journey like no other. 
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://img.freepik.com/free-photo/female-chef-kitchen-preparing-plate-steak_23-2149720768.jpg"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-white">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                    <h2 id="about-us" class="mb-4 text-2xl font-bold">About Us</h2>
                    <h2 class="mb-4 text-3xl font-bold text-black bg-clip-text bg-gradient-to-r from-green-400 to-blue-500" style="color: #b5b09d">WHY CHOOSE US?</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6"
                        style="color: #513444;">
                        Indulge in a culinary paradise like no other by choosing Heaven's Kitchen as your ultimate destination for fine dining. Immerse yourself in a world of culinary excellence, where masterful chefs create extraordinary dishes using the finest ingredients. Experience impeccable service that caters to your every need, and revel in the luxurious ambience that sets the stage for a truly memorable dining experience.
                        </p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Faster Processing</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-medium text-gray-500">Easy Payments</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">100% Protection and Security for Your App</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full"
                        src="https://i.pinimg.com/564x/c2/6a/48/c26a48b7c416199fe3f81458f0d274b6.jpg"
                        alt="feature image"></div>
            </div>
        </div>
    </section>

    <section class="pt-4 pb-12 bg-gray-800">
        <div class="my-16 text-center">
            <h2 class="text-3xl font-bold text-white">
                Testimonial </h2>
            <p class="text-xl text-white">here are some of our consumer testimonials</p>
        </div>
        <div class="grid-container ">
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg" style="background-color: #d6d4d5;">
                <div class="flex justify-center -mt-16 md:justify-end">
                <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full custom-border"
                        src="https://i.pinimg.com/564x/aa/7f/e7/aa7fe79fbc0339d7381016b0b58ab446.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">The culinary experience at Heaven's Kitchen was nothing short of extraordinary. Every bite was a revelation of flavors, beautifully presented with impeccable attention to detail. It truly surpassed all expectations and left me craving for more.</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="https://twitter.com/Miles_Teller?s=20" class="text-xl font-medium custom-color">Miles T.</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg" style="background-color: #d6d4d5;">
                <div class="flex justify-center -mt-16 md:justify-end">
                <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full custom-border"
                        src="https://i.pinimg.com/564x/7e/88/13/7e881365fb7dbcf8ba617d5126203b84.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">The dining experience at Heaven's Kitchen surpassed all my expectations. The flavors in each dish were exquisitely balanced, leaving me in awe of the culinary artistry. Every bite was a revelation, and I cannot wait to return for another extraordinary meal.</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="https://www.instagram.com/jessicachastain/?hl=en" class="text-xl font-medium custom-color">Jessica C.</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg" style="background-color: #d6d4d5;">
                <div class="flex justify-center -mt-16 md:justify-end">
                <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full custom-border"
                        src="https://i.pinimg.com/564x/6d/90/fa/6d90faf5b42f4ca5fe6bd5ed82772c46.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">The culinary excellence at Heaven's Kitchen surpassed all my expectations. The dishes were a perfect harmony of flavors, meticulously prepared and presented with utmost precision. It was an extraordinary fine dining experience that left me completely mesmerized.</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="https://twitter.com/BarryKeoghan?s=20" class="text-xl font-medium custom-color">Barry K.</a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
