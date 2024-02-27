@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section class="px-4 pt-0">
        <div class="text-center">
            <a href="trial.html" class="btn-cta block w-auto sm:inline-block">
                <div class="flex items-center justify-center">
                    <div>Start your 14-day free trial</div>
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                    </svg>
                </div>
            </a>

            <a href="demo-call.html" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
                <div class="flex items-center justify-center">
                    How it works
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                    </svg>
                </div>
            </a>
        </div>
    </section>

    <section class="overflow-x-auto px-4">
        <div class="mx-auto max-w-2xl">
            <h2 class="gradient text-left">
                What worked for 5 clients won't work for 500
            </h2>
            <p>
                You have accounts, invoices, projects and processes scattered
                across different tools. Things get lost and the client
                experience suffers.
            </p>
            <p>
                Your agency needs
                <span class="highlight">a proper system</span>
                . Something to stay organized, something to grow with.
            </p>
            <p>
                This is the reason we built SPP &ndash; the one platform that keeps
                everything in sync and helps you
                <span class="highlight">scale your agency</span>
                .
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-screen-2xl overflow-x-hidden px-4 pt-0 lg:px-16 2xl:px-0" data-switchable>
        <div class="mx-auto max-w-screen-md text-center 2xl:max-w-full">
            <h2 class="gradient">
                A streamlined workflow for billing and projects
            </h2>
            <p class="font-light mx-auto mb-24 max-w-2xl text-lg opacity-70">
                A dashboard to keep your projects organized and make your clients
                happy.
            </p>
        </div>

        <div class="grid-cols-12 lg:grid">
            <div class="col-start-1 mb-16 lg:col-end-6 lg:mb-0 lg:mr-8 2xl:col-end-5">
                <div>
                    <div class="px-8 py-2 mb-2 bg-gray-100 rounded-lg" data-item>
                        <div>
                            <h3>
                                <a href="#" class="flex items-center font-semibold text-blue-400"
                                    data-toggle="collapse" data-target="#funnel-order-forms">
                                    <svg class="mr-2 h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z">
                                        </path>
                                        <path class="fa-primary" d="M576 224H0V128H576v96z"></path>
                                    </svg> 1. Order form
                                </a>
                            </h3>
                        </div>

                        <div class="pl-9 overflow-hidden max-h-96 transition-all  duration-300 ease-linear "
                            id="funnel-order-forms" data-collapsible>
                            <div class="mt-4 text-sm">
                                <p>
                                    No matter what type of services you sell, order forms
                                    make it easy for clients to buy them.
                                </p>
                                <p class="mb-2"><strong>Key features</strong></p>
                                <ul class="small-tick">
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> One-page or multistep checkout
                                    </li>
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Service types, quantities, and add-ons
                                    </li>
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> If &rarr; then rules for conditional fields
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="px-8 py-2 mb-2 bg-gray-100 rounded-lg" data-item>
                        <div>
                            <h3>
                                <a href="#" class="flex items-center font-semibold text-blue-400"
                                    data-toggle="collapse" data-target="#funnel-invoices">
                                    <svg class="mr-2 h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 384 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M80 160c0-8.8 7.2-16 16-16H288c8.8 0 16 7.2 16 16s-7.2 16-16 16H96c-8.8 0-16-7.2-16-16zm0 192c0-8.8 7.2-16 16-16H288c8.8 0 16 7.2 16 16s-7.2 16-16 16H96c-8.8 0-16-7.2-16-16zM96 240H288c8.8 0 16 7.2 16 16s-7.2 16-16 16H96c-8.8 0-16-7.2-16-16s7.2-16 16-16z">
                                        </path>
                                    </svg> 2. Invoice &amp; billing
                                </a>
                            </h3>
                        </div>

                        <div class="pl-9 overflow-hidden max-h-96 transition-all  duration-300 ease-linear collapsed"
                            id="funnel-invoices" data-collapsible>
                            <div class="mt-4 text-sm">
                                <p>
                                    Not all your services fit into a package. With SPP, you
                                    don't need a separate invoicing platform.
                                </p>
                                <p class="mb-2"><strong>Key features</strong></p>
                                <ul class="small-tick">
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Contact forms for quote requests
                                    </li>
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Shareable invoice payment links
                                    </li>
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Capture client details when they pay
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="px-8 py-2 mb-2 bg-gray-100 rounded-lg" data-item>
                        <div>
                            <h3>
                                <a href="#" class="flex items-center font-semibold text-blue-400"
                                    data-toggle="collapse" data-target="#funnel-intake-forms">
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
                                            d="M214.7 169.5c12.5-6 26.5-9.5 41.3-9.5s28.8 3.5 41.3 9.5c-.1 .1 .1-.1 0 0L412.8 53.9C369.5 20.3 315.2 0 256 0S142.5 20.3 99.2 53.9L214.7 169.5c.1 .1-.1-.1 0 0zM169.5 297.3c-6-12.5-9.5-26.5-9.5-41.3s3.5-28.8 9.5-41.3c-.1-.1 .1 .1 0 0L53.9 99.2C20.3 142.5 0 196.8 0 256s20.3 113.5 53.9 156.8L169.5 297.3c.1-.1-.1 .1 0 0zM458.1 99.2L342.5 214.7c-.1 .1 .1-.1 0 0c6 12.5 9.5 26.5 9.5 41.3s-3.5 28.8-9.5 41.3c-.1-.1 .1 .1 0 0L458.1 412.8C491.7 369.5 512 315.2 512 256s-20.3-113.5-53.9-156.8zM297.3 342.5c-12.5 6-26.5 9.5-41.3 9.5s-28.8-3.5-41.3-9.5c-.1 .1 .1-.1 0 0L99.2 458.1C142.5 491.7 196.8 512 256 512s113.5-20.3 156.8-53.9L297.3 342.5c.1 .1-.1-.1 0 0z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M57.4 57.4c-12.5 12.5-12.5 32.8 0 45.3l112 112c9.5-19.8 25.5-35.8 45.3-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm112 240l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c-19.8-9.5-35.8-25.5-45.3-45.3zm128 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-112-112c-9.5 19.8-25.5 35.8-45.3 45.3zm45.3-128l112-112c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-112 112c19.8 9.5 35.8 25.5 45.3 45.3z">
                                        </path>
                                    </svg> 3. Intake form
                                </a>
                            </h3>
                        </div>

                        <div class="pl-9 overflow-hidden max-h-96 transition-all  duration-300 ease-linear collapsed"
                            id="funnel-intake-forms" data-collapsible>
                            <div class="mt-4 text-sm">
                                <p>
                                    Collect the info you need from your clients without the
                                    back-and-forth.
                                </p>
                                <p class="mb-2"><strong>Key features</strong></p>
                                <ul class="small-tick">
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Various field types and rules
                                    </li>
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Automated follow-ups
                                    </li>
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Save drafts and come back later
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="px-8 py-2 mb-2 bg-gray-100 rounded-lg" data-item>
                        <div>
                            <h3>
                                <a href="#" class="flex items-center font-semibold text-blue-400"
                                    data-toggle="collapse" data-target="#funnel-portal">
                                    <svg class="mr-2 h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 640 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4c17.6 0 34.6 2.6 50.7 7.3c3.3 59.2 26.8 145.1 103.1 200.2c-1.7 .3-3.5 .5-5.3 .5H29.7C13.3 512 0 498.7 0 482.3z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M504.9 225.7c-5.7-2.3-12.1-2.3-17.8 0l-120 48C358 277.4 352 286.2 352 296c0 63.3 25.9 168.8 134.8 214.2c5.9 2.5 12.6 2.5 18.5 0C614.1 464.8 640 359.3 640 296c0-9.8-6-18.6-15.1-22.3l-120-48zm-8.9 236V273.8L591.4 312c-3.9 50.7-27.2 116.7-95.4 149.7z">
                                        </path>
                                    </svg> 4. Client portal
                                </a>
                            </h3>
                        </div>

                        <div class="pl-9 overflow-hidden max-h-96 transition-all  duration-300 ease-linear collapsed"
                            id="funnel-portal" data-collapsible>
                            <div class="mt-4 text-sm">
                                <p>
                                    A branded client portal that makes you look professional
                                    and saves your clients time.
                                </p>
                                <p class="mb-2"><strong>Key features</strong></p>
                                <ul class="small-tick">
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Custom colors, menus, and language
                                    </li>
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Support for custom pages
                                    </li>
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Full control over underlying templates
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="px-8 py-2 mb-2 bg-gray-100 rounded-lg" data-item>
                        <div>
                            <h3>
                                <a href="#" class="flex items-center font-semibold text-blue-400"
                                    data-toggle="collapse" data-target="#funnel-dashboard">
                                    <svg class="mr-2 h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 640 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary"
                                            d="M609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z">
                                        </path>
                                        <path class="fa-primary"
                                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                        </path>
                                    </svg> 5. Team inbox
                                </a>
                            </h3>
                        </div>

                        <div class="pl-9 overflow-hidden max-h-96 transition-all  duration-300 ease-linear collapsed"
                            id="funnel-dashboard" data-collapsible>
                            <div class="mt-4 text-sm">
                                <p>
                                    Your team can see everything that needs to be done, when
                                    orders are due, and who's assigned.
                                </p>
                                <p class="mb-2"><strong>Key features</strong></p>
                                <ul class="small-tick">
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Permission controls for your team
                                    </li>
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Internal &amp; external messaging
                                    </li>
                                    <li class="flex items-baseline gap-x-2">
                                        <svg class="w-4 flex-none text-blue-400" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path class="fa-secondary" d=""></path>
                                            <path class="fa-primary"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                            </path>
                                        </svg> Custom statuses and tags
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End accordion -->
            </div>
            <!-- End left side -->

            <div class="col-end-13 lg:col-start-6 2xl:col-start-5">
                <div class="bg-gradient bg-gradient-violet bg-gradient-left">
                    <picture class=" block" id="">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/orderform.webp 2415w,https://spp.co/images/screenshots/w-2048/orderform.webp 2048w,https://spp.co/images/screenshots/w-1536/orderform.webp 1536w,https://spp.co/images/screenshots/w-1024/orderform.webp 1024w,https://spp.co/images/screenshots/w-860/orderform.webp 860w,https://spp.co/images/screenshots/w-400/orderform.webp 400w"
                            sizes="" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-orderform.png') }}"
                            class="h-auto max-w-full rounded-lg shadow-lg"
                            alt="Order form with options to select a service, input a coupon code, and pay"
                            title="Your sales funnel starts with an order form">
                    </picture>

                    <picture class="hidden block" id="">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/invoice.webp 2372w,https://spp.co/images/screenshots/w-2048/invoice.webp 2048w,https://spp.co/images/screenshots/w-1536/invoice.webp 1536w,https://spp.co/images/screenshots/w-1024/invoice.webp 1024w,https://spp.co/images/screenshots/w-860/invoice.webp 860w,https://spp.co/images/screenshots/w-400/invoice.webp 400w"
                            sizes="" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-invoice.png') }}" loading="lazy"
                            class="mx-auto h-auto max-w-full" alt="Invoice payment page"
                            title="This is the payment page for an invoice, it works much like an order form, except you only have the payment and optional billing fields.">
                    </picture>

                    <picture class="hidden block" id="">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/intake-form-2.webp 2734w,https://spp.co/images/screenshots/w-2048/intake-form-2.webp 2048w,https://spp.co/images/screenshots/w-1536/intake-form-2.webp 1536w,https://spp.co/images/screenshots/w-1024/intake-form-2.webp 1024w,https://spp.co/images/screenshots/w-860/intake-form-2.webp 860w,https://spp.co/images/screenshots/w-400/intake-form-2.webp 400w"
                            sizes="" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-intake-form-2.png') }}" loading="lazy"
                            class="mx-auto h-auto max-w-full" alt="Intake form in client portal"
                            title="Clients can come back at any time to complete your data form">
                    </picture>

                    <picture class="hidden block" id="">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/portal-new.webp 3044w,https://spp.co/images/screenshots/w-2048/portal-new.webp 2048w,https://spp.co/images/screenshots/w-1536/portal-new.webp 1536w,https://spp.co/images/screenshots/w-1024/portal-new.webp 1024w,https://spp.co/images/screenshots/w-860/portal-new.webp 860w,https://spp.co/images/screenshots/w-400/portal-new.webp 400w"
                            sizes="" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-portal-new.png') }}" loading="lazy"
                            class="mx-auto h-auto max-w-full" alt="Client portal view"
                            title="This is how your client portal can look in SPP">
                    </picture>

                    <picture class="hidden block" id="">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/orders.webp 2768w,https://spp.co/images/screenshots/w-2048/orders.webp 2048w,https://spp.co/images/screenshots/w-1536/orders.webp 1536w,https://spp.co/images/screenshots/w-1024/orders.webp 1024w,https://spp.co/images/screenshots/w-860/orders.webp 860w,https://spp.co/images/screenshots/w-400/orders.webp 400w"
                            sizes="" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-orders.png') }}" loading="lazy"
                            class="mx-auto h-auto max-w-full" alt="All your orders inside SPP"
                            title="Sell and deliver productized services from one place">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 pt-0">
        <div class="text-center">
            <a href="trial.html" class="btn-cta block w-auto sm:inline-block">
                <div class="flex items-center justify-center">
                    <div>Start your 14-day free trial</div>
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                    </svg>
                </div>
            </a>

            <a href="demo-call.html" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
                <div class="flex items-center justify-center">
                    How it works
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                    </svg>
                </div>
            </a>
        </div>
    </section>

    <section class="mx-auto max-w-screen-2xl overflow-x-hidden px-4 lg:px-16 2xl:px-0">
        <div class="text-center">
            <h2 class="gradient">Client messaging, in one place</h2>
            <p class="font-light mb-24 text-center text-lg opacity-70">
                Send and receive order updates without leaving email.
            </p>
        </div>

        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="mb-16 lg:col-start-1 lg:col-end-8 lg:mb-0" data-pov-switcher>
                <div class="relative text-center">
                    <select class="mx-auto mb-10 max-w-sm border-2 border-purple text-xs lg:ml-0 lg:mr-auto">
                        <option value="#view-as-admin" selected>
                            View as Admin
                        </option>
                        <option value="#view-as-contractor">
                            View as Contractor
                        </option>
                        <option value="#view-as-client">View as Client</option>
                    </select>
                </div>

                <div class="bg-gradient bg-gradient-blue bg-gradient-left !ml-0">
                    <picture class=" block" id="view-as-client">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/order-client.webp 2800w,https://spp.co/images/screenshots/w-2048/order-client.webp 2048w,https://spp.co/images/screenshots/w-1536/order-client.webp 1536w,https://spp.co/images/screenshots/w-1024/order-client.webp 1024w,https://spp.co/images/screenshots/w-860/order-client.webp 860w,https://spp.co/images/screenshots/w-400/order-client.webp 400w"
                            sizes="" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-order-client.png') }}"
                            class="mx-auto h-auto max-w-full" alt="Order details page as the client"
                            title="Clients can see all the details about their order on this page." loading="lazy">
                    </picture>

                    <picture class="hidden block" id="view-as-admin">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/order-admin.webp 2800w,https://spp.co/images/screenshots/w-2048/order-admin.webp 2048w,https://spp.co/images/screenshots/w-1536/order-admin.webp 1536w,https://spp.co/images/screenshots/w-1024/order-admin.webp 1024w,https://spp.co/images/screenshots/w-860/order-admin.webp 860w,https://spp.co/images/screenshots/w-400/order-admin.webp 400w"
                            sizes="" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-order-admin.png') }}"
                            class="mx-auto h-auto max-w-full" alt="Order details page as an admin"
                            title="Admins and managers have full access to all the order details." loading="lazy">
                    </picture>

                    <picture class="hidden block" id="view-as-contractor">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/order-contractor.webp 2800w,https://spp.co/images/screenshots/w-2048/order-contractor.webp 2048w,https://spp.co/images/screenshots/w-1536/order-contractor.webp 1536w,https://spp.co/images/screenshots/w-1024/order-contractor.webp 1024w,https://spp.co/images/screenshots/w-860/order-contractor.webp 860w,https://spp.co/images/screenshots/w-400/order-contractor.webp 400w"
                            sizes="" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-order-contractor.png') }}"
                            class="mx-auto h-auto max-w-full" alt="Order details page as a contractor"
                            title="Contractors can still access the important parts like messages and project info, but they don't see pricing or payment details."
                            loading="lazy">
                    </picture>
                </div>
            </div>

            <div class="flex items-start lg:col-start-8 lg:col-end-13 2xl:items-center">
                <div class="grid grid-cols-1 gap-4 lg:gap-6">
                    <p>
                        Clients are happier when they stay on top of projects
                        and results. With SPP, all communications are right
                        there in the dashboard so that
                        <span class="highlight">
                            everybody is on the same page
                        </span>
                        &ndash; no excuses.
                    </p>

                    <div>
                        <div class="flex items-center font-semibold ">
                            <div>
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary" d=""></path>
                                    <path class="fa-primary"
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                    </path>
                                </svg>
                            </div>
                            Feels just like email to your clients
                        </div>
                        <div class="ml-6">
                            Order updates show up in the Client Portal and go out
                            via email to your customer.
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center font-semibold ">
                            <div>
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary" d=""></path>
                                    <path class="fa-primary"
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                    </path>
                                </svg>
                            </div>
                            Incoming email processing
                        </div>
                        <div class="ml-6">
                            Client replies to your emails get added to the correct
                            conversation in your dashboard.
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center font-semibold ">
                            <div>
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary" d=""></path>
                                    <path class="fa-primary"
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                    </path>
                                </svg>
                            </div>
                            Email from your domain
                        </div>
                        <div class="ml-6">
                            Emails go out from your agency's domain, making them
                            feel like direct replies.
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center font-semibold ">
                            <div>
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary" d=""></path>
                                    <path class="fa-primary"
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                    </path>
                                </svg>
                            </div>
                            Open tracking
                        </div>
                        <div class="ml-6">
                            See when clients have opened your emails or read your
                            messages in the portal.
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center font-semibold ">
                            <div>
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary" d=""></path>
                                    <path class="fa-primary"
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                    </path>
                                </svg>
                            </div>
                            Business hours auto-reply
                        </div>
                        <div class="ml-6">
                            Automatically acknowledge customer's emails and let them
                            know when to expect a reply.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4">
        <div class="max-w-screen-lg mx-auto overflow-hidden rounded-lg shadow-xl"
            style="background-image: linear-gradient(135deg, #9c9dea 50%, #d3efff 100%);">
            <div class="grid gap-0 sm:grid-cols-10">
                <div class="flex items-center py-16 sm:col-start-1 sm:col-end-8 md:pl-20">
                    <div class="px-8">
                        <blockquote class="mb-4 italic text-white md:text-lg">
                            SPP has been a key ingredient in our winning recipe for a successful productized service.
                            It's easy for staff to use and customers love the client portal software for managing their
                            service account.
                        </blockquote>

                        <div class="mb-8">
                            <a href="running-google-my-business-management-service.html" target="_blank"
                                class="block font-bold text-white transition-transform hover:text-blue-50 hover:-translate-y-0.5">Watch
                                the case study &rarr;</a>
                        </div>

                        <div class="mb-4 text-sm text-white md:text-base">
                            Garrett Smith, Owner
                        </div>

                        <a href="running-google-my-business-management-service.html" target="_blank">
                            <img loading="lazy" src="{{ asset('assets/images/customers-gmbgorilla.png') }}"
                                alt="GMB Gorilla" style="max-width:170px">
                        </a>
                    </div>
                </div>
                <div class="flex items-end sm:col-start-8 sm:col-end-11">
                    <picture>
                        <img loading="lazy" src="{{ asset('assets/images/customers-garrett.png') }}"
                            class="h-auto max-w-full" alt="Garrett Smith" title="Garrett Smith of GMB Gorilla">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-screen-2xl overflow-x-hidden px-4">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="lg:col-start-1 lg:col-end-8">
                <div class="bg-gradient bg-gradient-violet bg-gradient-left mb-16 lg:mb-0">
                    <picture class=" block" id="">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/crm-fields.webp 1742w,https://spp.co/images/screenshots/w-1536/crm-fields.webp 1536w,https://spp.co/images/screenshots/w-1024/crm-fields.webp 1024w,https://spp.co/images/screenshots/w-860/crm-fields.webp 860w,https://spp.co/images/screenshots/w-400/crm-fields.webp 400w"
                            sizes="(min-width: 1500px) 840px, (max-width: 1000px) calc(100vw - 2rem)" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-crm-fields.png') }}"
                            class="mx-auto h-auto max-w-full"
                            alt="A builder showing custom CRM field creation for a client"
                            title="Create custom fields for your internal use" loading="lazy">
                    </picture>
                </div>
            </div>

            <div class="flex items-center px-4 lg:col-start-8 lg:col-end-13 lg:px-12">
                <div>
                    <div class="text-left">
                        <h2 class="gradient">Detailed customer CRM</h2>
                        <p class="font-light mb-24 text-lg opacity-70">
                            Clients can securely update their billing details
                            and payment methods without asking your team.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 gap-4 lg:gap-6">
                        <div>
                            <div class="flex items-center font-semibold ">
                                <div>
                                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary" d=""></path>
                                        <path class="fa-primary"
                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                        </path>
                                    </svg>
                                </div>
                                Custom fields
                            </div>
                            <div class="ml-6">
                                Extend client profiles with additional custom
                                fields.
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center font-semibold ">
                                <div>
                                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary" d=""></path>
                                        <path class="fa-primary"
                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                        </path>
                                    </svg>
                                </div>
                                Localization and time zones
                            </div>
                            <div class="ml-6">
                                All dates and times shown in your clients' local
                                timezone.
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center font-semibold ">
                                <div>
                                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <defs>
                                            <style>
                                                .fa-secondary {
                                                    opacity: .4
                                                }
                                            </style>
                                        </defs>
                                        <path class="fa-secondary" d=""></path>
                                        <path class="fa-primary"
                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                        </path>
                                    </svg>
                                </div>
                                GDPR data export and deletion support
                            </div>
                            <div class="ml-6">
                                Allow your EU customers to request data export or
                                deletion.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 pt-0">
        <div class="text-center">
            <a href="trial.html" class="btn-cta block w-auto sm:inline-block">
                <div class="flex items-center justify-center">
                    <div>Start your 14-day free trial</div>
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                    </svg>
                </div>
            </a>

            <a href="crm.html" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
                <div class="flex items-center justify-center">
                    More CRM features
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                    </svg>
                </div>
            </a>
        </div>
    </section>

    <section class="mx-auto max-w-screen-xl overflow-x-hidden px-4">
        <div class="text-center">
            <h2 class="gradient">Handle subscriptions and requests</h2>
            <p class="font-light mb-24 text-center text-lg opacity-70">
                Self-service features for subscription management and
                request-based services.
            </p>
        </div>

        <div class="bg-gradient bg-gradient-blue bg-gradient-bottom mb-16 lg:mb-0" data-slideshow>
            <picture class="active block" id="">
                <source
                    srcset="https://spp.co/images/screenshots/w-full/subscriptions-1.webp 2448w,https://spp.co/images/screenshots/w-2048/subscriptions-1.webp 2048w,https://spp.co/images/screenshots/w-1536/subscriptions-1.webp 1536w,https://spp.co/images/screenshots/w-1024/subscriptions-1.webp 1024w,https://spp.co/images/screenshots/w-860/subscriptions-1.webp 860w,https://spp.co/images/screenshots/w-400/subscriptions-1.webp 400w"
                    sizes="" type="image/webp">
                </source>
                <img src="{{ asset('assets/images/screenshots-subscriptions-1.png') }}" class="mx-auto h-auto max-w-full"
                    alt="Orders list in your client portal with a button for creating new requests"
                    title="When a client subscribes to a task-based service, they can create new requests if their plan allows it."
                    loading="lazy" data-left="8%" data-top="58%">
            </picture>
            <picture class=" block" id="">
                <source
                    srcset="https://spp.co/images/screenshots/w-full/subscriptions-2.webp 2448w,https://spp.co/images/screenshots/w-2048/subscriptions-2.webp 2048w,https://spp.co/images/screenshots/w-1536/subscriptions-2.webp 1536w,https://spp.co/images/screenshots/w-1024/subscriptions-2.webp 1024w,https://spp.co/images/screenshots/w-860/subscriptions-2.webp 860w,https://spp.co/images/screenshots/w-400/subscriptions-2.webp 400w"
                    sizes="" type="image/webp">
                </source>
                <img src="{{ asset('assets/images/screenshots-subscriptions-2.png') }}" class="mx-auto h-auto max-w-full"
                    alt="Client portal subscriptions list"
                    title="In the subscriptions list clients can upgrade or cancel their recurring payments, unless this functionality is disabled."
                    loading="lazy" data-left="8%" data-top="80%">
            </picture>
            <picture class=" block" id="">
                <source
                    srcset="https://spp.co/images/screenshots/w-full/subscriptions-3.webp 2448w,https://spp.co/images/screenshots/w-2048/subscriptions-3.webp 2048w,https://spp.co/images/screenshots/w-1536/subscriptions-3.webp 1536w,https://spp.co/images/screenshots/w-1024/subscriptions-3.webp 1024w,https://spp.co/images/screenshots/w-860/subscriptions-3.webp 860w,https://spp.co/images/screenshots/w-400/subscriptions-3.webp 400w"
                    sizes="" type="image/webp">
                </source>
                <img src="{{ asset('assets/images/screenshots-subscriptions-3.png') }}" class="mx-auto h-auto max-w-full"
                    alt="Payment method management in your client portal"
                    title="Your customers can manage their payment method for subscriptions." loading="lazy"
                    data-left="8%" data-top="29%">
            </picture>
        </div>

        <div class="mt-16 grid gap-4 lg:grid-cols-3 lg:gap-8 lg:px-16 2xl:px-0">
            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    Subscription management
                </div>
                <div class="ml-6">
                    Give customers the option to upgrade or cancel subscriptions on
                    their own.
                </div>
            </div>

            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    Payment method management
                </div>
                <div class="ml-6">
                    Clients can log in to manage their saved payment methods with
                    you.
                </div>
            </div>

            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    Dunning emails
                </div>
                <div class="ml-6">
                    Give your clients a heads-up to update their payment info with
                    automated reminders.
                </div>
            </div>
        </div>
    </section>

    <section class="px-4">
        <div class="mx-auto max-w-screen-lg overflow-hidden rounded-lg shadow-xl"
            style="
        background-image: linear-gradient(35deg, #fbb396 10%, #9c9dea 100%);
    ">
            <div class="grid gap-0 sm:grid-cols-10">
                <div class="flex items-center py-16 sm:col-start-1 sm:col-end-8 md:pl-20">
                    <div class="px-8">
                        <blockquote class="md:text-md mb-4 italic text-white">
                            SPP.co has been the perfect solution for my business.
                            The platform is incredibly user-friendly and
                            well-designed. The SPP team is also very accommodating
                            and has helped me customize the platform to fit my
                            unique needs. I can't recommend enough!
                        </blockquote>

                        <div class="grid grid-cols-2">
                            <div>
                                <div class="mt-3 text-sm text-white md:text-base">
                                    Lauren Popish, Founder
                                </div>
                            </div>
                            <div>
                                <img loading="lazy" src="{{ asset('assets/images/customers-the-wave-podcasting.png') }}"
                                    alt="The Wave Podcasting" style="max-width: 110px" class="mt-2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mr-10 mt-10 flex px-10 py-5 sm:col-start-8 sm:col-end-12">
                    <picture>
                        <img loading="lazy" src="{{ asset('assets/images/customers-lauren-popish.jpg') }}"
                            class="h-auto max-w-full rounded-full" alt="Lauren Popish"
                            title="Lauren Popish The Wave Podcasting">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 pt-0">
        <div class="text-center">
            <a href="trial.html" class="btn-cta block w-auto sm:inline-block">
                <div class="flex items-center justify-center">
                    <div>Start your 14-day free trial</div>
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                    </svg>
                </div>
            </a>

            <a href="billing.html" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
                <div class="flex items-center justify-center">
                    More billing features
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                    </svg>
                </div>
            </a>
        </div>
    </section>

    <section class="mx-auto max-w-screen-xl overflow-x-hidden px-4">
        <div class="text-center">
            <h2 class="gradient">
                Collect project information in intake forms
            </h2>
            <p class="font-light mb-24 text-center text-lg opacity-70">
                Simplify your checkout flow by asking all the details after
                payment.
            </p>
        </div>

        <div class="bg-gradient bg-gradient-lavender bg-gradient-bottom mb-16 lg:mb-0" data-slideshow>
            <picture class="active block" id="">
                <source
                    srcset="https://spp.co/images/screenshots/w-full/intake-form-1.webp 2731w,https://spp.co/images/screenshots/w-2048/intake-form-1.webp 2048w,https://spp.co/images/screenshots/w-1536/intake-form-1.webp 1536w,https://spp.co/images/screenshots/w-1024/intake-form-1.webp 1024w,https://spp.co/images/screenshots/w-860/intake-form-1.webp 860w,https://spp.co/images/screenshots/w-400/intake-form-1.webp 400w"
                    sizes="" type="image/webp">
                </source>
                <img src="{{ asset('assets/images/screenshots-intake-form-1.png') }}" class="mx-auto h-auto max-w-full"
                    alt="Custom intake form creation using the form builder"
                    title="Intake forms let you easily capture the information you need from clients before starting work on their projects."
                    loading="lazy" data-left="87%" data-top="18%">
            </picture>
            <picture class=" block" id="">
                <source
                    srcset="https://spp.co/images/screenshots/w-full/intake-form-2.webp 2734w,https://spp.co/images/screenshots/w-2048/intake-form-2.webp 2048w,https://spp.co/images/screenshots/w-1536/intake-form-2.webp 1536w,https://spp.co/images/screenshots/w-1024/intake-form-2.webp 1024w,https://spp.co/images/screenshots/w-860/intake-form-2.webp 860w,https://spp.co/images/screenshots/w-400/intake-form-2.webp 400w"
                    sizes="" type="image/webp">
                </source>
                <img src="{{ asset('assets/images/screenshots-intake-form-2.png') }}" class="mx-auto h-auto max-w-full"
                    alt="Intake form in client portal"
                    title="When clients purchase your service which has an intake form set up, they will be asked to fill it out before their project can be started."
                    loading="lazy" data-left="12%" data-top="5%">
            </picture>
        </div>

        <div class="mx-auto mt-16 grid max-w-screen-xl gap-4 lg:grid-cols-3 lg:gap-8 lg:px-16 2xl:px-0">
            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    Drag and drop form builder
                </div>
                <div class="ml-6">
                    Many field types to choose from help make it easy to set up all
                    kinds of forms.
                </div>
            </div>

            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    Multi-page forms
                </div>
                <div class="ml-6">
                    Break up lengthy intake forms into pages and keep clients happy.
                </div>
            </div>

            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    If/then rules to show fields
                </div>
                <div class="ml-6">
                    Set up advanced intake forms by showing and hiding fields based
                    on client inputs.
                </div>
            </div>

            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    Spreadsheet inputs
                </div>
                <div class="ml-6">
                    For large orders clients can copy their data from a spreadsheet.
                </div>
            </div>

            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    Incomplete order reminder
                </div>
                <div class="ml-6">
                    A customizable notification, sent to clients if they haven't
                    filled out your intake form within 24 hours.
                </div>
            </div>

            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    Secure forms
                </div>
                <div class="ml-6">
                    Your intake forms are available only to clients who have
                    purchased the service.
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-screen-2xl overflow-x-hidden px-4">
        <div class="text-center">
            <h2 class="gradient">Infinitely flexible and extendable</h2>
            <p class="font-light mb-24 text-center text-lg opacity-70">
                Extend your Client Portal with custom pages and reports.
            </p>
        </div>

        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="lg:col-start-1 lg:col-end-8">
                <div class="bg-gradient bg-gradient-violet bg-gradient-left mb-16 lg:mb-0" data-slideshow>
                    <picture class="active block" id="">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/menu-editor.webp 2880w,https://spp.co/images/screenshots/w-2048/menu-editor.webp 2048w,https://spp.co/images/screenshots/w-1536/menu-editor.webp 1536w,https://spp.co/images/screenshots/w-1024/menu-editor.webp 1024w,https://spp.co/images/screenshots/w-860/menu-editor.webp 860w,https://spp.co/images/screenshots/w-400/menu-editor.webp 400w"
                            sizes="" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-menu-editor.png') }}"
                            class="mx-auto h-auto max-w-full" alt="Client portal menu editor"
                            title="Customize the links in your Client Portal's sidebar and navigation bar." loading="lazy"
                            data-left="57%" data-top="15%">
                    </picture>

                    <picture class=" block" id="">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/template-editor.webp 2880w,https://spp.co/images/screenshots/w-2048/template-editor.webp 2048w,https://spp.co/images/screenshots/w-1536/template-editor.webp 1536w,https://spp.co/images/screenshots/w-1024/template-editor.webp 1024w,https://spp.co/images/screenshots/w-860/template-editor.webp 860w,https://spp.co/images/screenshots/w-400/template-editor.webp 400w"
                            sizes="" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-template-editor.png') }}"
                            class="mx-auto h-auto max-w-full" alt="Client portal template editor"
                            title="You have full control over your Client Portal's layout and styling." loading="lazy"
                            data-left="51%" data-top="15%">
                    </picture>
                </div>
            </div>

            <div class="flex items-center lg:col-start-8 lg:col-end-13 lg:px-12">
                <div class="grid grid-cols-1 gap-4 lg:gap-6">
                    <div>
                        <div class="flex items-center font-semibold ">
                            <div>
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary" d=""></path>
                                    <path class="fa-primary"
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                    </path>
                                </svg>
                            </div>
                            Advanced template editing
                        </div>
                        <div class="ml-6">
                            With full access to underlying HTML templates, you're
                            not locked into the default design.
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center font-semibold ">
                            <div>
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary" d=""></path>
                                    <path class="fa-primary"
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                    </path>
                                </svg>
                            </div>
                            Custom pages
                        </div>
                        <div class="ml-6">
                            Add custom pages to the portal for offers, information,
                            or videos.
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center font-semibold ">
                            <div>
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary" d=""></path>
                                    <path class="fa-primary"
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                    </path>
                                </svg>
                            </div>
                            Integrated reporting
                        </div>
                        <div class="ml-6">
                            Connect various SEO tracking services, or embed
                            automated
                            <a href="google-data-studio.html">
                                Google Data Studio reports
                            </a>
                            .
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-screen-2xl overflow-x-hidden px-4 lg:px-16 2xl:px-0">
        <div class="lg:grid lg:grid-cols-12">
            <div class="mb-16 flex items-center lg:col-start-1 lg:col-end-6 lg:mb-0 lg:mr-8">
                <div class="">
                    <h2 class="gradient gradient-reverse mb-8 mt-4 text-left">
                        Analytics for data-driven agencies
                    </h2>
                    <p>
                        Built-in reports let you see what your team has done,
                        their response times and more.
                    </p>

                    <div class="mb-4 flex items-center">
                        <img src="{{ asset('assets/images/logos-google-analytics-integration.png') }}"
                            alt="Google Analytics Integration" class="mr-4 h-8 w-8" loading="lazy">
                        <div>
                            Native
                            <span class="highlight">Google Analytics</span>
                            integration gives you detailed e-commerce event
                            data.
                        </div>
                    </div>

                    <div class="flex items-center">
                        <img src="{{ asset('assets/images/logos-gtm-integration.png') }}"
                            alt="Google Tag Manager Integration" class="mr-4 h-8 w-8" loading="lazy">
                        <div>
                            Robust
                            <span class="highlight">Google Tag Manager</span>
                            integration lets you add conversion tracking scripts
                            without editing code.
                        </div>
                    </div>
                </div>
            </div>

            <div class="mr-10 lg:col-start-6 lg:col-end-13">
                <div class="bg-gradient bg-gradient-lavender bg-gradient-right">
                    <picture class=" block" id="">
                        <source
                            srcset="https://spp.co/images/screenshots/w-full/dashboard.webp 2632w,https://spp.co/images/screenshots/w-2048/dashboard.webp 2048w,https://spp.co/images/screenshots/w-1536/dashboard.webp 1536w,https://spp.co/images/screenshots/w-1024/dashboard.webp 1024w,https://spp.co/images/screenshots/w-860/dashboard.webp 860w,https://spp.co/images/screenshots/w-400/dashboard.webp 400w"
                            sizes="" type="image/webp">
                        </source>
                        <img src="{{ asset('assets/images/screenshots-dashboard.png') }}"
                            class="mx-auto h-auto max-w-full" alt="Order details page as the client"
                            title="Clients can see all the details about their order on this page." loading="lazy">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 pt-0">
        <div class="text-center">
            <a href="trial.html" class="btn-cta block w-auto sm:inline-block">
                <div class="flex items-center justify-center">
                    <div>Start your 14-day free trial</div>
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                    </svg>
                </div>
            </a>

            <a href="analytics.html" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
                <div class="flex items-center justify-center">
                    More analytics features
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                    </svg>
                </div>
            </a>
        </div>
    </section>

    <section class="mx-auto max-w-screen-lg overflow-x-hidden lg:overflow-x-visible">
        <h2 class="gradient text-center">Make repeat business easy</h2>
        <p class="font-light mx-auto mb-16 text-center text-lg opacity-70">
            Your portal makes it easy for clients to upgrade and buy more
            services.
        </p>

        <div class="bg-gradient bg-gradient-violet bg-gradient-bottom">
            <picture class=" block" id="">
                <source
                    srcset="https://spp.co/images/screenshots/w-full/invoice-payment.webp 2904w,https://spp.co/images/screenshots/w-2048/invoice-payment.webp 2048w,https://spp.co/images/screenshots/w-1536/invoice-payment.webp 1536w,https://spp.co/images/screenshots/w-1024/invoice-payment.webp 1024w,https://spp.co/images/screenshots/w-860/invoice-payment.webp 860w,https://spp.co/images/screenshots/w-400/invoice-payment.webp 400w"
                    sizes="" type="image/webp">
                </source>
                <img src="{{ asset('assets/images/screenshots-invoice-payment.png') }}" class="mx-auto h-auto max-w-full"
                    alt="Invoice payment page"
                    title="This is the payment page for an invoice, it works much like an order form, except you only have the payment and optional billing fields."
                    loading="lazy">
            </picture>
        </div>
    </section>

    <section class="mx-auto max-w-screen-lg px-4 pt-0">
        <div class="grid gap-4 lg:grid-cols-3 lg:gap-6">
            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    One login for everything
                </div>
                <div class="ml-6">
                    A
                    <a href="secure-client-portal.html">secure client portal</a>
                    for billing, reporting, and special offers.
                </div>
            </div>
            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    Subscription management
                </div>
                <div class="ml-6">
                    Let clients manage their Stripe subscriptions from the portal.
                </div>
            </div>
            <div>
                <div class="flex items-center font-semibold ">
                    <div>
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path class="fa-secondary" d=""></path>
                            <path class="fa-primary"
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                            </path>
                        </svg>
                    </div>
                    Built-in referral system
                </div>
                <div class="ml-6">
                    Reward loyal clients for sending business your way.
                </div>
            </div>
        </div>
    </section>

    <section class="review-logos container mx-auto mt-16 max-w-screen-md pt-0 sm:px-4">
        <div class="grid gap-8 sm:grid-cols-3 lg:gap-4">
            <div class="flex items-center justify-center">
                <div class="text-center">
                    <img class="mx-auto mb-3" src="{{ asset('assets/images/logos-capterra.svg') }}"
                        title="Capterra Rating" alt="Capterra logo" loading="lazy">

                    <div class="text-center">
                        <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <div class="text-center">
                    <img class="mx-auto mb-3" src="{{ asset('assets/images/logos-trustpilot.svg') }}"
                        title="TrustPilot Rating" alt="TrustPilot logo" loading="lazy">

                    <div class="text-center">
                        <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M288 0c-12.2 .1-23.3 7-28.6 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3L288 439.8V0zM429.9 512c1.1 .1 2.1 .1 3.2 0h-3.2z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <div class="text-center">
                    <img class="mx-auto mb-3" src="{{ asset('assets/images/logos-g2.svg') }}" title="G2 Crowd Rating"
                        alt="G2 Logo" loading="lazy">

                    <div class="text-center">
                        <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mx-auto max-w-screen-sm overflow-x-hidden px-4">
        <h2 class="gradient pb-2 text-center">Ready to give it a try?</h2>
        <p class="font-light mx-auto mb-12 pt-4 text-center text-lg opacity-70">
            You're in good company. SPP is helping agencies like yours sell millions
            of dollars in services every week.
        </p>

        <form
            action="https://track.bentonow.com/forms/aa1d8f75b83b6828f9d520df5253f4cc/%24startedTrialSignup?hardened=true"
            method="post" id="form-pre-trial">

            <div class="items-center mx-4 md:flex">

                <input type="hidden" name="redirect" value="https://spp.co/trial"
                    data-base="https://spp.co/trial?email=">
                <input type="email" name="email" id="email"
                    class="mb-4 mr-4 font-medium text-blue-900 grow md:mb-0" placeholder="Enter your work email..."
                    required>

                <button type="submit" class="w-full border shrink btn-cta border-purple whitespace-nowrap md:w-auto">

                    <div class="flex items-center justify-center">
                        <div>Sign up</div>
                        <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                            </path>
                        </svg>
                    </div>
                </button>
            </div>
        </form>

        <div class="mt-5 text-center">
            <a href="demo-call.html" class="inline-block">
                <div class="flex items-center text-sm font-semibold text-blue-400 transition-all hover:underline">
                    or book a demo
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                    </svg>
                </div>
            </a>
        </div>
    </section>
@endsection
