<section class="jumbotron  pt-4">
    <nav
        class="max-w-screen-xl text-white mx-auto mb-10 w-full content-between items-center px-4 sm:mb-16 md:mt-4 lg:relative lg:flex">
        <div class="flex content-between items-center">
            <a href="spp.html" class="w-52 lg:w-60" title="Service Provider Pro">
                <img src="{{ asset('assets/images/images-logo_inverse.svg') }}" class="logo-dark"
                    title="Service Provider Pro" alt="SPP inverse logo">
            </a>



            <button type="button" class="ml-auto h-6 w-6 lg:hidden" id="toggler" data-target="#collapsible-menu"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z">
                    </path>
                </svg> </button>
        </div>

        <div class="hidden w-full justify-end pt-5 lg:flex lg:pt-0" id="collapsible-menu">
            <ul class="items-center lg:flex">
                <li class="my-4 text-center lg:my-0">
                    <a href="#" class="px-4 text-sm font-medium opacity-70" data-submenu="#features">
                        Features
                    </a>
                </li>

                <li class="my-4 text-center lg:my-0">
                    <a href="#" class="whitespace-nowrap px-4 text-sm font-medium opacity-70"
                        data-submenu="#industries">
                        Use Cases
                    </a>
                </li>

                <li class="my-4 text-center lg:my-0">
                    <a href="#" class="px-4 text-sm font-medium opacity-70" data-submenu="#resources">
                        Resources
                    </a>
                </li>

                <li class="my-4 text-center lg:my-0">
                    <a href="pricing.html" class="px-4 text-sm font-medium opacity-70">
                        Pricing
                    </a>
                </li>

                <li class="my-4 text-center lg:my-0">
                    <a href="trial.html"
                        class="mx-4 transform whitespace-nowrap rounded-full bg-yellow-400 px-4 py-1 text-xs font-bold text-blue-900 transition-all hover:-translate-y-0.5 hover:shadow-md"
                        data-affiliate-customize>
                        Free Trial
                    </a>
                </li>

                <li class="my-4 text-center lg:my-0">
                    <a href="login.html" class="whitespace-nowrap px-4 text-sm font-medium opacity-70">
                        Sign In
                    </a>
                </li>
            </ul>
        </div>


        <div class="hover-menu rounded opacity-0 transition-all" id="hover-menu">
            <div class="arrow duration-50 transition-all"></div>

            <div>
                <div class="mx-4 hidden overflow-hidden rounded transition-all duration-200 sm:mx-0" id="features">
                    <div class="grid gap-4 bg-white p-4 sm:grid-cols-2">
                        <a class="group block rounded px-3 py-2 transition-all hover:bg-gray-100" href="billing.html"
                            icon="fad-cart-shopping" title="Billing"
                            description="Increase your average order with fast and flexible payment flows.">
                            <div class="flex items-start gap-x-5">
                                <div
                                    class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-white">
                                    <svg class="h-5 w-5 text-blue-700" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411c2 4.2 3.5 8.8 4.4 13.5L170.7 288z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M0 24C0 10.7 10.7 0 24 0H69.5c26.9 0 50 19.1 55 45.5l51.6 271c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z">
                                        </path>
                                    </svg>
                                </div>

                                <div>
                                    <div class="text-sm font-semibold">
                                        Billing
                                    </div>

                                    <div class="text-xs text-blue-700">
                                        Increase your average order with fast and flexible payment flows.
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="group block rounded px-3 py-2 transition-all hover:bg-gray-100"
                            href="order-management.html" icon="fad-conveyor-belt" title="Projects"
                            description="Assign work to your team without the data entry.">
                            <div class="flex items-start gap-x-5">
                                <div
                                    class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-white">
                                    <svg class="h-5 w-5 text-blue-700" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 640 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M256 0h16 96 16V16v96c0 5.9-3.2 11.3-8.5 14.1s-11.5 2.5-16.4-.8L320 99.2l-39.1 26.1c-4.9 3.3-11.2 3.6-16.4 .8s-8.5-8.2-8.5-14.1V16 0zM0 416c0-53 43-96 96-96H544c53 0 96 43 96 96s-43 96-96 96H96c-53 0-96-43-96-96zm160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm160 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm224-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M256 0H176c-26.5 0-48 21.5-48 48V208c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H384V112c0 5.9-3.2 11.3-8.5 14.1s-11.5 2.5-16.4-.8L320 99.2l-39.1 26.1c-4.9 3.3-11.2 3.6-16.4 .8s-8.5-8.2-8.5-14.1V0z">
                                        </path>
                                    </svg>
                                </div>

                                <div>
                                    <div class="text-sm font-semibold">
                                        Projects
                                    </div>

                                    <div class="text-xs text-blue-700">
                                        Assign work to your team without the data entry.
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="group block rounded px-3 py-2 transition-all hover:bg-gray-100" href="crm.html"
                            icon="fad-user-tie" title="CRM"
                            description="Track your contacts, leads, and clients in one place.">
                            <div class="flex items-start gap-x-5">
                                <div
                                    class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-white">
                                    <svg class="h-5 w-5 text-blue-700" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M352 128A128 128 0 1 1 96 128a128 128 0 1 1 256 0z"></path>
                                        <path class="fa-primary"
                                            d="M190.5 328.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7H162.5c2.1 0 4-.4 5.8-1.1L168 512H280l-.3-1.1c1.8 .7 3.8 1.1 5.8 1.1H417.3c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2H224 204.3c-12.4 0-20.1 13.6-13.7 24.2z">
                                        </path>
                                    </svg>
                                </div>

                                <div>
                                    <div class="text-sm font-semibold">
                                        CRM
                                    </div>

                                    <div class="text-xs text-blue-700">
                                        Track your contacts, leads, and clients in one place.
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="group block rounded px-3 py-2 transition-all hover:bg-gray-100" href="helpdesk.html"
                            icon="fad-life-ring" title="Helpdesk"
                            description="Support your customers with full context of their past activity.">
                            <div class="flex items-start gap-x-5">
                                <div
                                    class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-white">
                                    <svg class="h-5 w-5 text-blue-700" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 512 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M214.7 169.5c12.5-6 26.5-9.5 41.3-9.5s28.8 3.5 41.3 9.5c-.1 .1 .1-.1 0 0L412.8 53.9C369.5 20.3 315.2 0 256 0S142.5 20.3 99.2 53.9L214.7 169.5c.1 .1-.1-.1 0 0zM169.5 297.3c-6-12.5-9.5-26.5-9.5-41.3s3.5-28.8 9.5-41.3c-.1-.1 .1 .1 0 0L53.9 99.2C20.3 142.5 0 196.8 0 256s20.3 113.5 53.9 156.8L169.5 297.3c.1-.1-.1 .1 0 0zM458.1 99.2L342.5 214.7c-.1 .1 .1-.1 0 0c6 12.5 9.5 26.5 9.5 41.3s-3.5 28.8-9.5 41.3c-.1-.1 .1 .1 0 0L458.1 412.8C491.7 369.5 512 315.2 512 256s-20.3-113.5-53.9-156.8zM297.3 342.5c-12.5 6-26.5 9.5-41.3 9.5s-28.8-3.5-41.3-9.5c-.1 .1 .1-.1 0 0L99.2 458.1C142.5 491.7 196.8 512 256 512s113.5-20.3 156.8-53.9L297.3 342.5c.1 .1-.1-.1 0 0z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M57.4 57.4c-12.5 12.5-12.5 32.8 0 45.3l112 112c9.5-19.8 25.5-35.8 45.3-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm112 240l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c-19.8-9.5-35.8-25.5-45.3-45.3zm128 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-112-112c-9.5 19.8-25.5 35.8-45.3 45.3zm45.3-128l112-112c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-112 112c19.8 9.5 35.8 25.5 45.3 45.3z">
                                        </path>
                                    </svg>
                                </div>

                                <div>
                                    <div class="text-sm font-semibold">
                                        Helpdesk
                                    </div>

                                    <div class="text-xs text-blue-700">
                                        Support your customers with full context of their past activity.
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="group block rounded px-3 py-2 transition-all hover:bg-gray-100"
                            href="form-builder.html" icon="fad-square-list" title="Forms"
                            description="Build forms with drag &amp; drop, rules, e-signatures, and file uploads.">
                            <div class="flex items-start gap-x-5">
                                <div
                                    class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-white">
                                    <svg class="h-5 w-5 text-blue-700" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM96 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM96 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H352c13.3 0 24-10.7 24-24s-10.7-24-24-24H192zM168 352c0 13.3 10.7 24 24 24H352c13.3 0 24-10.7 24-24s-10.7-24-24-24H192c-13.3 0-24 10.7-24 24zm24-120c-13.3 0-24 10.7-24 24s10.7 24 24 24H352c13.3 0 24-10.7 24-24s-10.7-24-24-24H192z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M168 160c0-13.3 10.7-24 24-24H352c13.3 0 24 10.7 24 24s-10.7 24-24 24H192c-13.3 0-24-10.7-24-24zm0 192c0-13.3 10.7-24 24-24H352c13.3 0 24 10.7 24 24s-10.7 24-24 24H192c-13.3 0-24-10.7-24-24zm24-120H352c13.3 0 24 10.7 24 24s-10.7 24-24 24H192c-13.3 0-24-10.7-24-24s10.7-24 24-24z">
                                        </path>
                                    </svg>
                                </div>

                                <div>
                                    <div class="text-sm font-semibold">
                                        Forms
                                    </div>

                                    <div class="text-xs text-blue-700">
                                        Build forms with drag &amp; drop, rules, e-signatures, and file uploads.
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="group block rounded px-3 py-2 transition-all hover:bg-gray-100"
                            href="affiliates.html" icon="fad-share-all" title="Affiliates"
                            description="Boost word of mouth with a built-in referral program.">
                            <div class="flex items-start gap-x-5">
                                <div
                                    class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-white">
                                    <svg class="h-5 w-5 text-blue-700" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M371 34.8c-11.5 5.1-19 16.6-19 29.2v43.3l85.4 76.9c6.7 6.1 10.6 14.7 10.6 23.8s-3.8 17.7-10.6 23.8L352 308.7V352c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M243 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h32v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z">
                                        </path>
                                    </svg>
                                </div>

                                <div>
                                    <div class="text-sm font-semibold">
                                        Affiliates
                                    </div>

                                    <div class="text-xs text-blue-700">
                                        Boost word of mouth with a built-in referral program.
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="group block rounded px-3 py-2 transition-all hover:bg-gray-100"
                            href="analytics.html" icon="fad-chart-mixed" title="Analytics"
                            description="Find your best clients. See how your team is doing.">
                            <div class="flex items-start gap-x-5">
                                <div
                                    class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-white">
                                    <svg class="h-5 w-5 text-blue-700" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 512 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M192 224c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-17.7-14.3-32-32-32zM64 320c-17.7 0-32 14.3-32 32v96c0 17.7 14.3 32 32 32s32-14.3 32-32V352c0-17.7-14.3-32-32-32zm224 0V448c0 17.7 14.3 32 32 32s32-14.3 32-32V320c0-17.7-14.3-32-32-32s-32 14.3-32 32zm160-96c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-17.7-14.3-32-32-32z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M505 44c11 13.8 8.8 33.9-5 45L340 217c-11.4 9.1-27.5 9.4-39.2 .6L192.6 136.5 52 249c-13.8 11-33.9 8.8-45-5s-8.8-33.9 5-45L172 71c11.4-9.1 27.5-9.4 39.2-.6l108.2 81.1L460 39c13.8-11 33.9-8.8 45 5z">
                                        </path>
                                    </svg>
                                </div>

                                <div>
                                    <div class="text-sm font-semibold">
                                        Analytics
                                    </div>

                                    <div class="text-xs text-blue-700">
                                        Find your best clients. See how your team is doing.
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="group block rounded px-3 py-2 transition-all hover:bg-gray-100" href="email.html"
                            icon="fad-envelopes" title="Email"
                            description="Send automated transactional emails and receive client replies.">
                            <div class="flex items-start gap-x-5">
                                <div
                                    class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-white">
                                    <svg class="h-5 w-5 text-blue-700" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M96.7 86.7l220 163c5.6 4.1 12.4 6.4 19.3 6.4s13.7-2.2 19.3-6.4l220-163C570.8 55.7 544.2 32 512 32H160c-32.2 0-58.8 23.7-63.3 54.7zM576 126L374.4 275.3C363.3 283.6 349.8 288 336 288s-27.3-4.4-38.4-12.7L96 126V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V126z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M96 96v30L297.6 275.3c11.1 8.2 24.6 12.7 38.4 12.7s27.3-4.4 38.4-12.7L576 126V96c0-3.2-.2-6.3-.7-9.3l-220 163c-5.6 4.1-12.4 6.4-19.3 6.4s-13.7-2.2-19.3-6.4l-220-163c-.4 3-.7 6.2-.7 9.3zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120z">
                                        </path>
                                    </svg>
                                </div>

                                <div>
                                    <div class="text-sm font-semibold">
                                        Email
                                    </div>

                                    <div class="text-xs text-blue-700">
                                        Send automated transactional emails and receive client replies.
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="hidden overflow-hidden rounded transition-all duration-200" id="industries">
                    <div class="top-section bg-white">
                        <div class="flex-auto px-6 py-4">
                            <a class="block py-2 opacity-90 transition-all hover:opacity-100"
                                href="seo-agencies.html">
                                <div class="flex items-center">
                                    <svg class="mr-2 h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 512 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M208 64a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 352A208 208 0 1 0 208 0a208 208 0 1 0 0 416z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M330.7 376L457.4 502.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L376 330.7C363.3 348 348 363.3 330.7 376z">
                                        </path>
                                    </svg>
                                    <div class="text-sm font-medium">SEO Agencies</div>
                                </div>

                                <div class="ml-7 text-xs opacity-80">
                                    Helps you sell audits, link building, outreach, or local
                                    SEO.
                                </div>
                            </a>

                            <a class="block py-2 opacity-90 transition-all hover:opacity-100"
                                href="content-agencies.html">
                                <div class="flex items-center">
                                    <svg class="mr-2 h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 512 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M88.3 389.7L311 167c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L122.3 423.7c10 7.6 21 13.7 33.3 17C200.3 452.8 270 454.5 338 409.4c12.2-8.1 5.8-25.4-8.8-25.4l-16.1 0c-5.1 0-9.2-4.1-9.2-9.2c0-4.1 2.7-7.6 6.5-8.8l97.7-29.3c3.4-1 6.4-3.1 8.4-6.1c4.4-6.4 8.6-12.9 12.6-19.6c6.2-10.3-1.5-23-13.5-23l-38.6 0c-5.1 0-9.2-4.1-9.2-9.2c0-4.1 2.7-7.6 6.5-8.8l80.9-24.3c4.6-1.4 8.4-4.8 10.2-9.3C494.5 163 507.8 86.1 511.9 36.8c.8-9.9-3-19.6-10-26.6s-16.7-10.8-26.6-10C391.5 7 228.5 40.5 137.4 131.6C57.3 211.7 56.7 302.3 71.3 356.4c3.3 12.2 9.4 23.2 17 33.3z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M24 512c-6.2 0-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9L311 167c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L41 505c-4.7 4.7-10.8 7-17 7z">
                                        </path>
                                    </svg>
                                    <div class="text-sm font-medium">Content Agencies</div>
                                </div>

                                <div class="ml-7 text-xs opacity-80">
                                    Helps you sell content packages and manage your writers.
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="hidden overflow-hidden rounded transition-all duration-200" id="resources">
                    <div class="top-section bg-white">
                        <div class="flex-auto px-6 py-4">
                            <a href="getting-started.html"
                                class="block py-2 opacity-90 transition-all hover:opacity-100">
                                <div class="flex items-center">
                                    <svg class="mr-2 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M288 72V480s92.8-32 144-32c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V83.8c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-64 0-128 24-144 40z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M288 72V480s-92.8-32-144-32c-38.5 0-88.4 12.1-119.9 22.6C12.8 474.3 0 466 0 454.1V83.8C0 71.7 6.8 60.5 18.1 56.1C46.3 45.3 93.5 32 144 32c64 0 128 24 144 40z">
                                        </path>
                                    </svg>
                                    <div class="text-xs font-medium">Docs</div>
                                </div>
                            </a>

                            <a href="onboarding.html" class="block py-2 opacity-90 transition-all hover:opacity-100">
                                <div class="flex items-center">
                                    <svg class="mr-2 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 512 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M198.6 130c-28.5 45.8-60.7 114.5-80.1 158H24c-8.7 0-16.7-4.7-20.9-12.2s-4.1-16.8 .4-24.2l52.8-86.9C69.3 143.2 92.6 130 117.8 130h80.8zM224 391.8c43.9-19.1 112.4-50.3 158-78.4v80.8c0 25.2-13.1 48.5-34.6 61.5l-86.9 52.8c-7.4 4.5-16.7 4.7-24.2 .4s-12.2-12.2-12.2-20.9l0-96.2z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M166.5 394.8l-50.7-50.7c-9.2-9.2-11.9-23-6.7-34.9c18.3-41.9 62.7-140.2 98.1-192.5C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7C342.6 340.5 243 383.9 201 401.7c-11.8 5-25.4 2.2-34.5-6.9zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z">
                                        </path>
                                    </svg>
                                    <div class="text-xs font-medium">Onboarding Sessions</div>
                                </div>
                            </a>

                            <a href="blog.html" class="block py-2 opacity-90 transition-all hover:opacity-100">
                                <div class="flex items-center">
                                    <svg class="mr-2 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 512 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M293.9 92.8L419.2 218.1l-4.5 15.1L371.4 377.3c-6 19.9-21.2 35.7-41 42.3L66.2 508.2c-11.3 3.8-23.9 1-32.4-7.4L187.3 347.3c6.3 3 13.3 4.7 20.7 4.7c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48c0 7.4 1.7 14.4 4.7 20.7L11.1 478.3C2.8 469.7 0 457.2 3.8 445.8L92.4 181.5c6.6-19.7 22.4-35 42.3-41L278.8 97.4l15.1-4.5 0 0z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M368.4 18.3c21.9-21.9 57.3-21.9 79.2 0l46.1 46.1c21.9 21.9 21.9 57.3 0 79.2l-71 71-3.4 3.4 0 0L293.9 92.8l0 0 0 0 3.4-3.4 71-71z">
                                        </path>
                                    </svg>
                                    <div class="text-xs font-medium">Agency Growth Blog</div>
                                </div>
                            </a>

                            <a href="productize-ebook.html"
                                class="block py-2 opacity-90 transition-all hover:opacity-100">
                                <div class="flex items-center">
                                    <svg class="mr-2 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M64 416c0-17.7 14.3-32 32-32H416v64H96c-17.7 0-32-14.3-32-32z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M0 96C0 43 43 0 96 0H384h32c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H352 256 96c-17.7 0-32 14.3-32 32s14.3 32 32 32H256h96 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H384 96c-53 0-96-43-96-96V96zm144 32c-8.8 0-16 7.2-16 16s7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H144zm-16 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H144c-8.8 0-16 7.2-16 16z">
                                        </path>
                                    </svg>
                                    <div class="text-xs font-medium">
                                        Epic Guide to Productizing
                                    </div>
                                </div>
                            </a>

                            <a href="case-studies.html"
                                class="block py-2 opacity-90 transition-all hover:opacity-100">
                                <div class="flex items-center">
                                    <svg class="mr-2 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 640 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M325.6 139.8c8.3-3.1 12.5-12.3 9.4-20.6s-12.3-12.5-20.6-9.4L154.9 169.6C92.4 193.1 50.4 251.8 48.1 318.2c-.1 .6-.1 1.2-.1 1.8c0 28.4-10.8 57.8-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7c-3.2-14-7.5-28.3-13.4-41.5c2.8-52.5 36.4-98.7 86-117.3l159.4-59.8z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l77.4 27.9c16.8-17.8 37.8-31.9 61.7-40.9l159.4-59.8c8.3-3.1 17.5 1.1 20.6 9.4s-1.1 17.5-9.4 20.6L166.2 199.6c-14.6 5.5-27.8 13.4-39.3 23.1l169.5 61.2c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z">
                                        </path>
                                    </svg>
                                    <div class="text-xs font-medium">Case Studies</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="bottom-section bg-gray-100">
                        <a href="running-google-my-business-management-service.html">
                            <img loading="lazy" src="images/customers-garrett-case-study.png"
                                alt="How Garrett Smith is Running a Highly Automated Google My Business Management Service"
                                title="Get the full case study now"
                                class="rounded transition-all hover:-translate-y-0.5 hover:shadow-sm">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="mx-auto max-w-screen-lg px-4 text-center">
        <h1 class="pb-4">
            <span class="lg:block">Client Portal Software</span>
            For Growing Agencies
        </h1>
        <p class="lead mx-auto max-w-screen-sm">
            Bring your clients, payments, and projects under one roof. Built for
            Digital Marketing, SEO &amp; Content agencies.
        </p>
    </div>

    <div class="relative mx-auto max-w-screen-lg px-4 lg:px-0" data-hero-video>
        <iframe class="-mb-10 hidden aspect-video w-full rounded-lg shadow-lg"
            data-src="https://www.youtube-nocookie.com/embed/TebnpN3Tacg?rel=0&amp;autoplay=1&amp;showinfo=0&amp;controls=0"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        <div class="absolute inset-0" data-play>
            <div class="flex h-full">
                <div
                    class="m-auto flex cursor-pointer items-center rounded-full bg-purple px-6 py-4 text-white shadow-lg shadow-purple/20 transition-all hover:-translate-y-1 hover:shadow-xl motion-safe:animate-fade-in">
                    <svg class="mr-2 h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 384 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z">
                        </path>
                    </svg> 00:45 Intro
                </div>
            </div>
        </div>

        <div class="-mb-10 aspect-[945/552]" data-hero-image>
            <picture class=" block" id="">
                <source
                    srcset="https://spp.co/images/screenshots/w-full/orders.webp 2768w,https://spp.co/images/screenshots/w-2048/orders.webp 2048w,https://spp.co/images/screenshots/w-1536/orders.webp 1536w,https://spp.co/images/screenshots/w-1024/orders.webp 1024w,https://spp.co/images/screenshots/w-860/orders.webp 860w,https://spp.co/images/screenshots/w-400/orders.webp 400w"
                    sizes="(min-width: 1024px) 1024px, calc(100vw - 2rem)" type="image/webp">
                </source>
                <img src="images/screenshots-orders.png" alt="List of orders with their statuses"
                    title="Sell and deliver productized services from one place"
                    class="h-auto w-full rounded shadow-lg md:rounded-lg">
            </picture>
        </div>
    </div>
</section>
<section class="!py-8 overflow-x-hidden logos bg-gradient-to-b from-blue-50 ">
    <div class="flex max-w-screen-lg px-4 mx-auto">
        <img src="{{ asset('assets/images/customer-logos-amw.png') }}" alt="AMW logo">
        <img src="{{ asset('assets/images/customer-logos-loganix.png') }}" alt="Loganix logo">
        <img src="{{ asset('assets/images/customer-logos-podblade.png') }}" alt="Podblade logo">
        <img src="{{ asset('assets/images/customer-logos-ranked.png') }}" alt="Ranked.ai logo">
        <img src="{{ asset('assets/images/customer-logos-seobros.png') }}" alt="SEObros logo">
        <img src="{{ asset('assets/images/customer-logos-wordagents.png') }}" alt="WordAgents logo">
        <img src="{{ asset('assets/images/customer-logos-wpspeedfix.png') }}" alt="WPspeedfix logo">
    </div>
</section>
