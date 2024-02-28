@extends('layouts.app')
@section('title', 'Plans &amp; Pricing | Service Provider Pro')
@section('content')
<div class="mx-auto max-w-4xl px-4 text-center">
    <h1 class="pb-4">Payment Flows Optimized For Services</h1>
    <p class="lead mx-auto max-w-2xl">
        Get larger orders, cut down churn, and get paid quickly…
    </p>
</div>

<div class="mx-auto max-w-screen-lg px-4 lg:px-0">
    <picture class="-mb-10 block" id="">
        {{-- <source srcset="../../images/screenshots/w-full/orderform.webp 2415w, ../../images/screenshots/w-2048/orderform.webp 2048w, ../../images/screenshots/w-1536/orderform.webp 1536w, ../../images/screenshots/w-1024/orderform.webp 1024w, ../../images/screenshots/w-860/orderform.webp 860w, ../../images/screenshots/w-400/orderform.webp 400w" sizes="
                    (min-width: 1024px) 1024px,
                    calc(100vw - 2rem)
                " type="image/webp"> --}}
        <img src="{{ asset('assets/images/orderform.png') }}" class="h-auto max-w-full rounded shadow-lg md:rounded-lg" alt="Order form with options to select a service, input a coupon code, and pay" title="Add many different fields, rules and service options">
    </picture>
</div>
</section>

<section class="mx-auto max-w-screen-lg overflow-x-hidden px-4">
    <div class="grid gap-4 lg:grid-cols-3 lg:gap-8">
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                Drag &amp; drop form builder
            </div>
            <div class="ml-6">
                Create any kind of order form.
            </div>
        </div>
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                Various field types
            </div>
            <div class="ml-6">
                Many ways to organize your services and questions.
            </div>
        </div>
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                Integrated payment fields
            </div>
            <div class="ml-6">
                Capture payments on the same page.
            </div>
        </div>
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                Featured images
            </div>
            <div class="ml-6">
                Make your services stand out with graphics and rich text
                descriptions.
            </div>
        </div>
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                If / then rules
            </div>
            <div class="ml-6">
                Show and hide fields based on selected values.
            </div>
        </div>
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                Mobile-first
            </div>
            <div class="ml-6">
                Your checkout looks and runs great on mobile devices.
            </div>
        </div>
    </div>
</section>

<div class="mx-auto my-16 max-w-lg">
    <form action="https://track.bentonow.com/forms/aa1d8f75b83b6828f9d520df5253f4cc/$startedTrialSignup?hardened=true" method="post" id="form-pre-trial">

        <div class="items-center mx-4 md:flex">

            <input type="hidden" name="redirect" value="https://Uh0WTkMsXsVJ.co/trial" data-base="https://Uh0WTkMsXsVJ.co/trial?email=">
            <input type="email" name="email" id="email" class="mb-4 mr-4 font-medium text-blue-900 grow md:mb-0" placeholder="Enter your work email..." required="">

            <button type="submit" class="w-full border shrink btn-cta border-purple whitespace-nowrap md:w-auto">

                <div class="flex items-center justify-center">
                    <div>Sign up</div>
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                    </svg>
                </div>
            </button>
        </div>
    </form>
</div>

<section class="mx-auto max-w-screen-2xl overflow-x-hidden px-4">
    <div class="text-center">
        <h2 class="gradient">Sell all kinds of services</h2>
        <p class="font-light mx-auto mb-24 max-w-3xl text-lg opacity-70">
            Create one-time services, subscriptions, free and paid trials,
            setup fees, and pricing variants.
        </p>
    </div>

    <div class="mx-auto max-w-screen-lg lg:grid lg:grid-cols-12 lg:gap-16">
        <div class="lg:col-start-1 lg:col-end-9">
            <div class="mb-16 lg:mb-0">
                <picture class=" block" id="">
                    {{-- <source srcset="../../images/screenshots/w-full/bulk-order.webp 1587w, ../../images/screenshots/w-1536/bulk-order.webp 1536w, ../../images/screenshots/w-1024/bulk-order.webp 1024w, ../../images/screenshots/w-860/bulk-order.webp 860w, ../../images/screenshots/w-400/bulk-order.webp 400w" sizes="" type="image/webp"> --}}
                    <img src="{{ asset('assets/images/bulk-order.png') }}" class="h-auto max-w-full" alt="An order form with spreadsheet-style inputs" title="Bulk order form for large agency or b2b customers" loading="lazy">
                </picture>
            </div>
        </div>

        <div class="items-center lg:col-start-9 lg:col-end-13">
            <div class="my-auto grid grid-cols-1 gap-4 lg:gap-6">
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Simple pricing
                    </div>
                    <div class="ml-6">
                        For services with a one-time, fixed pricing.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Variant pricing
                    </div>
                    <div class="ml-6">
                        Offer multiple options to select from, each with a
                        different price.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Recurring services
                    </div>
                    <div class="ml-6">
                        Set your billing frequency, trial cost, duration, setup
                        fee and more.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Bulk purchases
                    </div>
                    <div class="ml-6">
                        Spreadsheet input for your agency clients or large
                        orders.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="px-4">
    <div class="mx-auto max-w-screen-lg overflow-hidden rounded-lg px-8 shadow-xl sm:px-0" style="
        background-image: linear-gradient(
            135deg,
            #9c9dea 30%,
            #73bedb 100%
        );
    ">
        <div class="grid gap-8 py-16 sm:grid-cols-12 sm:gap-0">
            <div class="flex items-center sm:col-start-2 sm:col-end-4">
                <picture class="mx-auto block max-w-32 sm:max-w-full">
                    <img loading="lazy" src="{{ asset('assets/images/rebecca.png') }}" class="h-auto" alt="Rebecca Hey" title="Rebecca Hey of Strategically">
                </picture>
            </div>
            <div class="flex items-center sm:col-start-5 sm:col-end-11">
                <div>
                    <blockquote class="mb-8 italic text-white md:text-lg">
                        SPP is fantastic for my content writing agency. It
                        offers an awesome user experience for my customers and
                        team members, plus the feature set is excellent.
                    </blockquote>

                    <div class="mb-2 text-sm text-white md:text-base">
                        Rebecca Hey, Owner
                    </div>

                    <img loading="lazy" src="{{ asset('assets/images/rebecca-strategically.png') }}" alt="Strategically Agency" style="max-width: 170px">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-screen-2xl overflow-x-hidden px-4 lg:px-16 2xl:px-0">
    <div class="text-center">
        <h2 class="gradient">Easily link to your website</h2>
        <p class="font-light mx-auto mb-24 max-w-3xl text-lg opacity-70">
            No scripts to install or plugins to configure.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-16 lg:grid-cols-12">
        <div class="lg:col-start-1 lg:col-end-5">
            <div class="grid grid-cols-1 gap-4 lg:gap-6">
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Your own domain
                    </div>
                    <div class="ml-6">
                        Your checkout runs on any subdomain under your domain,
                        e.g. clients.backlinkpilot.com.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Custom form links
                    </div>
                    <div class="ml-6">
                        Choose meaningful, easy to remember URLs for your order
                        forms.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Link to any item
                    </div>
                    <div class="ml-6">
                        Pre-select items in your forms and link to them from the
                        pricing table on your website (
                        <a href="/demo" target="_blank">
                            example
                        </a>
                        ).
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-start-5 lg:col-end-13">
            <div class="bg-gradient bg-gradient-lavender bg-gradient-right" data-slideshow="">
                <picture class="active block" id="">
                    {{-- <source srcset="../../images/screenshots/w-full/link-demo-1.webp 2448w, ../../images/screenshots/w-2048/link-demo-1.webp 2048w, ../../images/screenshots/w-1536/link-demo-1.webp 1536w, ../../images/screenshots/w-1024/link-demo-1.webp 1024w, ../../images/screenshots/w-860/link-demo-1.webp 860w, ../../images/screenshots/w-400/link-demo-1.webp 400w" sizes="" type="image/webp"> --}}
                    <img src="{{ asset('assets/images/link-demo-1.png') }}" class="active" data-left="50%" data-top="60%" alt="Pricing table on a website" title="If you have a pricing page it probably looks something like this." loading="lazy">
                </picture>
                <picture class=" block" id="">
                    <source srcset="../../images/screenshots/w-full/link-demo-2.webp 3442w, ../../images/screenshots/w-2048/link-demo-2.webp 2048w, ../../images/screenshots/w-1536/link-demo-2.webp 1536w, ../../images/screenshots/w-1024/link-demo-2.webp 1024w, ../../images/screenshots/w-860/link-demo-2.webp 860w, ../../images/screenshots/w-400/link-demo-2.webp 400w" sizes="" type="image/webp">
                    <img src="{{ asset('assets/images/link-demo-2.png') }}" data-left="43%" data-top="91%" alt="Order form with a service already selected" title="Coming from the pricing page the correct service is already pre-selected." loading="lazy">
                </picture>
                <picture class=" block" id="">
                    <source srcset="../../images/screenshots/w-full/link-demo-3.webp 2448w, ../../images/screenshots/w-2048/link-demo-3.webp 2048w, ../../images/screenshots/w-1536/link-demo-3.webp 1536w, ../../images/screenshots/w-1024/link-demo-3.webp 1024w, ../../images/screenshots/w-860/link-demo-3.webp 860w, ../../images/screenshots/w-400/link-demo-3.webp 400w" sizes="" type="image/webp">
                    <img src="{{ asset('assets/images/link-demo-3.png') }}" data-left="50%" data-top="60%" alt="Order processing page" title="This page is shown for just a few seconds, while the transaction is processing." loading="lazy">
                </picture>

                <picture class=" block" id="">
                    <source srcset="../../images/screenshots/w-full/link-demo-4.webp 2880w, ../../images/screenshots/w-2048/link-demo-4.webp 2048w, ../../images/screenshots/w-1536/link-demo-4.webp 1536w, ../../images/screenshots/w-1024/link-demo-4.webp 1024w, ../../images/screenshots/w-860/link-demo-4.webp 860w, ../../images/screenshots/w-400/link-demo-4.webp 400w" sizes="" type="image/webp">
                    <img src="{{ asset('assets/images/link-demo-4.png') }}" data-left="15%" data-top="10%" alt="Purchase receipt" title="The receipt page shows details about customer's order." loading="lazy">
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="px-4 pt-0">
    <div class="text-center">
        <a href="https://Uh0WTkMsXsVJ.co/trial" class="btn-cta block w-auto sm:inline-block">
            <div class="flex items-center justify-center">
                <div>Start your 14-day free trial</div>
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg>
            </div>
        </a>

        <a href="https://Uh0WTkMsXsVJ.co/demo-call" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
            <div class="flex items-center justify-center">
                How it works
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg> </div>
        </a>
    </div>
</section>

<section class="mx-auto max-w-screen-xl overflow-x-hidden px-4">
    <div class="text-center">
        <h2 class="gradient">Secure and compliant payments</h2>
        <p class="font-light mx-auto mb-24 max-w-3xl text-lg opacity-70">
            Checkout is the lifeblood of your business. Know that it is in
            good hands.
        </p>
    </div>

    <div class="bg-gradient bg-gradient-blue bg-gradient-bottom mb-16 lg:mb-0">
        <picture class=" block" id="">
            {{-- <source srcset="../../images/screenshots/w-full/invoice-payment.webp 2904w, ../../images/screenshots/w-2048/invoice-payment.webp 2048w, ../../images/screenshots/w-1536/invoice-payment.webp 1536w, ../../images/screenshots/w-1024/invoice-payment.webp 1024w, ../../images/screenshots/w-860/invoice-payment.webp 860w, ../../images/screenshots/w-400/invoice-payment.webp 400w" sizes="" type="image/webp"> --}}
            <img src="{{ asset('assets/images/invoice-payment.png') }}" class="w-full" alt="Invoice payment page" title="This is the payment page for an invoice, it works much like an order form, except you only have the payment and optional billing fields." loading="lazy">
        </picture>
    </div>

    <div class="mt-16 gap-4 lg:grid lg:grid-cols-3 lg:gap-8 lg:px-16 2xl:px-0">
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                PCI compliant payments
            </div>
            <div class="ml-6">
                Get paid directly to your Stripe or PayPal.
            </div>
        </div>
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                Proper invoices
            </div>
            <div class="ml-6">
                Invoices are automatically created for all payments and can be
                exported for accounting.
            </div>
        </div>
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                3D Secure 2 ready
            </div>
            <div class="ml-6">
                Provides greater protection from chargeback fraud.
            </div>
        </div>
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                Support for VAT, HST, GST
            </div>
            <div class="ml-6">
                Charge tax based on customer's location and get reports on
                collected taxes.
            </div>
        </div>
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                Backed by AWS
            </div>
            <div class="ml-6">
                Amazon Web Services cloud infrastructure helps us secure your
                data and absorb traffic spikes.
            </div>
        </div>
        <div>
            <div class="flex items-center font-semibold ">
                <div>
                    <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <defs>
                            <style>
                                .fa-secondary {
                                    opacity: .4
                                }

                            </style>
                        </defs>
                        <path class="fa-secondary" d=""></path>
                        <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                    </svg> </div>
                Manual payment option
            </div>
            <div class="ml-6">
                For bank transfers or times when clients pay you outside of SPP.
            </div>
        </div>
    </div>
</section>

<section class="px-4">
    <div class="max-w-screen-lg mx-auto overflow-hidden rounded-lg shadow-xl" style="background-image: linear-gradient(135deg, #9c9dea 20%, #ff95a1 100%)">
        <div class="grid gap-0 sm:grid-cols-10">
            <div class="flex items-center py-16 sm:col-start-1 sm:col-end-8 md:pl-20">
                <div class="px-8">
                    <blockquote class="mb-4 italic text-white md:text-lg">
                        The tool these guys have built is fantastic. It solves all the problems we have and is reasonably priced.
                    </blockquote>

                    <div class="mb-8">
                        <a href="/blog/growing-content-marketing-agency/" target="_blank" class="block font-bold text-white transition-transform hover:text-blue-50 hover:-translate-y-0.5">Watch the case study →</a>
                    </div>

                    <div class="mb-4 text-sm text-white md:text-base">
                        Mark Whitman, Owner
                    </div>
                    <a href="/blog/growing-content-marketing-agency/" target="_blank">
                        <img loading="lazy" src="{{ asset('assets/images/contentellect.png') }}" alt="ContentEllect" style="max-width:150px">
                    </a>

                </div>
            </div>
            <div class="flex items-end sm:col-start-8 sm:col-end-11">
                <picture>
                    <img loading="lazy" src="{{ asset('assets/images/mark.png') }}" class="h-auto max-w-full -mb-10" alt="Mark Whitman" title="Mark Whitman of Contentellect">
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="px-4 pt-0">
    <div class="text-center">
        <a href="https://Uh0WTkMsXsVJ.co/trial" class="btn-cta block w-auto sm:inline-block">
            <div class="flex items-center justify-center">
                <div>Start your 14-day free trial</div>
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg>
            </div>
        </a>

        <a href="https://Uh0WTkMsXsVJ.co/demo-call" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
            <div class="flex items-center justify-center">
                How it works
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg> </div>
        </a>
    </div>
</section>

<section class="mx-auto max-w-screen-2xl overflow-x-hidden px-4">
    <div class="text-center">
        <h2 class="gradient">Automated account creation</h2>
        <p class="font-light mx-auto mb-24 max-w-3xl text-lg opacity-70">
            Accounts for new customers are created on the fly.
        </p>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-8 lg:px-16 2xl:px-0">
        <div class="mb-16 lg:col-start-1 lg:col-end-8 lg:mb-0">
            <div class="bg-gradient bg-gradient-violet bg-gradient-left">
                <picture class=" block" id="">
                    {{-- <source srcset="../../images/screenshots/w-full/client-profile.webp 2736w, ../../images/screenshots/w-2048/client-profile.webp 2048w, ../../images/screenshots/w-1536/client-profile.webp 1536w, ../../images/screenshots/w-1024/client-profile.webp 1024w, ../../images/screenshots/w-860/client-profile.webp 860w, ../../images/screenshots/w-400/client-profile.webp 400w" sizes="" type="image/webp"> --}}
                    <img src="{{ asset('assets/images/client-profile.png') }}" class="h-auto max-w-full" alt="Client's profile details with all their purchases" title="See all client's purchases, orders, invoices, and tickets in one place." loading="lazy">
                </picture>
            </div>
        </div>

        <div class="flex items-center lg:col-start-8 lg:col-end-13">
            <div class="grid grid-cols-1 gap-4 lg:gap-6">
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        No registration required
                    </div>
                    <div class="ml-6">
                        Anyone can buy without having to create an account
                        first.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Auto login after checkout
                    </div>
                    <div class="ml-6">
                        No email confirmation, no password reset, it just works.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Magic one-click login links
                    </div>
                    <div class="ml-6">
                        Makes login super easy for returning customers.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Abandoned checkout recovery
                    </div>
                    <div class="ml-6">
                        Automatically reach out to users who didn't complete
                        checkout.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-screen-xl overflow-x-hidden px-4">
    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
        <div class="flex items-center lg:col-start-2 lg:col-end-6 2xl:col-start-1">
            <div>
                <h2 class="gradient gradient-reverse text-left">
                    Customize everything
                </h2>
                <p class="font-light mx-auto mb-24 max-w-3xl text-lg opacity-70">
                    Want to dig into code and make even more changes? Thanks
                    to our powerful templating system, that's possible.
                </p>
            </div>
        </div>

        <div class="lg:col-start-7 lg:col-end-13">
            <div class="bg-gradient bg-gradient-lavender bg-gradient-right">
                <img loading="lazy" src="{{ asset('assets/images/customize.png') }}" class="mr-auto h-auto" style="max-width: 556px" alt="Template customization" title="Make changes to emails and templates">
            </div>
        </div>
    </div>
</section>

<section class="px-4 pt-0">
    <div class="text-center">
        <a href="https://Uh0WTkMsXsVJ.co/trial" class="btn-cta block w-auto sm:inline-block">
            <div class="flex items-center justify-center">
                <div>Start your 14-day free trial</div>
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg>
            </div>
        </a>

        <a href="https://Uh0WTkMsXsVJ.co/demo-call" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
            <div class="flex items-center justify-center">
                How it works
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg> </div>
        </a>
    </div>
</section>

<section class="mx-auto max-w-screen-xl overflow-x-hidden px-4 lg:px-16 2xl:px-0">
    <div class="text-center">
        <h2 class="gradient">Run deals with coupons</h2>
        <p class="font-light mx-auto mb-24 max-w-3xl text-lg opacity-70">
            Easily create special offer coupon codes and track their usage.
        </p>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
        <div class="mb-16 lg:col-start-1 lg:col-end-8 lg:mb-0">
            <div class="bg-gradient bg-gradient-violet bg-gradient-left">
                <picture class=" block" id="">
                    {{-- <source srcset="../../images/screenshots/w-full/coupon-creation.webp 2048w, ../../images/screenshots/w-1536/coupon-creation.webp 1536w, ../../images/screenshots/w-1024/coupon-creation.webp 1024w, ../../images/screenshots/w-860/coupon-creation.webp 860w, ../../images/screenshots/w-400/coupon-creation.webp 400w" sizes="" type="image/webp"> --}}
                    <img src="{{ asset('assets/images/coupon-creation.png') }}" class="h-auto max-w-full" alt="Coupon code creation screen" title="Coupon codes are useful for promotions and special offers." loading="lazy">
                </picture>
            </div>
        </div>

        <div class="flex items-center lg:col-start-8 lg:col-end-13">
            <div class="grid grid-cols-1 gap-4 lg:gap-6">
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Create coupon codes
                    </div>
                    <div class="ml-6">
                        One code can give multiple discounts on different
                        services.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Limit discount usage
                    </div>
                    <div class="ml-6">
                        Allow one use per client, a number of uses in total, or
                        set a use by date.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Optional coupon field
                    </div>
                    <div class="ml-6">
                        Hide the coupon field from your order forms if you're
                        not running any sales.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Link coupons to affiliates
                    </div>
                    <div class="ml-6">
                        Create unique coupons for your
                        <a href="https://Uh0WTkMsXsVJ.co/features/affiliates">
                            affiliates
                        </a>
                        and track their sales.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-screen-xl overflow-x-hidden px-4 lg:px-16 2xl:px-0">
    <div class="text-center">
        <h2 class="gradient">Invoices for your clients</h2>
        <p class="font-light mx-auto mb-24 max-w-3xl text-lg opacity-70">
            Generate invoices for client payments, or invoice clients
            manually.
        </p>
    </div>

    <div class="grid gap-16 lg:grid-cols-12">
        <div class="lg:col-start-1 lg:col-end-5">
            <div class="grid grid-cols-1 gap-4 lg:gap-6">
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        An invoice for every payment
                    </div>
                    <div class="ml-6">
                        Clients who need invoices for accounting will not have
                        to ask you for them.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        EU VAT validation
                    </div>
                    <div class="ml-6">
                        We'll verify your client's VAT numbers so that your VAT
                        reverse-charge is applied correctly.
                    </div>
                </div>
                <div>
                    <div class="flex items-center font-semibold ">
                        <div>
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <defs>
                                    <style>
                                        .fa-secondary {
                                            opacity: .4
                                        }

                                    </style>
                                </defs>
                                <path class="fa-secondary" d=""></path>
                                <path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> </div>
                        Invoice history
                    </div>
                    <div class="ml-6">
                        See when an invoice was created, seen, or paid.
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center px-10 lg:col-start-5 lg:col-end-13">
            <div class="relative">
                <picture class="bg-gradient bg-gradient-blue bg-gradient-right block" id="">
                    {{-- <source srcset="../../images/screenshots/w-full/billing-invoice.webp 2035w, ../../images/screenshots/w-1536/billing-invoice.webp 1536w, ../../images/screenshots/w-1024/billing-invoice.webp 1024w, ../../images/screenshots/w-860/billing-invoice.webp 860w, ../../images/screenshots/w-400/billing-invoice.webp 400w" sizes="" type="image/webp"> --}}
                    <img src="{{ asset('assets/images/billing-invoice.png') }}" class="bg-gradient bg-gradient-blue bg-gradient-right" alt="Invoice with line items and tax" title="Invoice in admin view" loading="lazy">
                </picture>

                <picture class=" block" id="">
                    {{-- <source srcset="../../images/screenshots/w-full/invoice-print.webp 1796w, ../../images/screenshots/w-1536/invoice-print.webp 1536w, ../../images/screenshots/w-1024/invoice-print.webp 1024w, ../../images/screenshots/w-860/invoice-print.webp 860w, ../../images/screenshots/w-400/invoice-print.webp 400w" sizes="" type="image/webp"> --}}
                    <img src="{{ asset('assets/images/billing-invoice.png') }}" class="absolute -bottom-2 -right-5 w-3/4 rounded shadow-xl" alt="Downloadable invoice" title="Printable pdf invoice" loading="lazy">
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="review-logos container mx-auto mt-16 max-w-screen-md pt-0 sm:px-4">
    <div class="grid gap-8 sm:grid-cols-3 lg:gap-4">
        <div class="flex items-center justify-center">
            <div class="text-center">
                <img class="mx-auto mb-3" src="{{ asset('assets/images/logos-capterra.svg') }}" title="Capterra Rating" alt="Capterra logo" loading="lazy">

                <div class="text-center">
                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> </div>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="text-center">
                <img class="mx-auto mb-3" src="{{ asset('assets/images/logos-trustpilot.svg') }}" title="TrustPilot Rating" alt="TrustPilot logo" loading="lazy">

                <div class="text-center">
                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M288 0c-12.2 .1-23.3 7-28.6 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3L288 439.8V0zM429.9 512c1.1 .1 2.1 .1 3.2 0h-3.2z"></path>
                    </svg> </div>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="text-center">
                <img class="mx-auto mb-3" src="{{ asset('assets/images/logos-g2.svg') }}" title="G2 Crowd Rating" alt="G2 Logo" loading="lazy">

                <div class="text-center">
                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                    </svg> </div>
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

    <form action="https://track.bentonow.com/forms/aa1d8f75b83b6828f9d520df5253f4cc/$startedTrialSignup?hardened=true" method="post" id="form-pre-trial">

        <div class="items-center mx-4 md:flex">

            <input type="hidden" name="redirect" value="https://Uh0WTkMsXsVJ.co/trial" data-base="https://Uh0WTkMsXsVJ.co/trial?email=">
            <input type="email" name="email" id="email" class="mb-4 mr-4 font-medium text-blue-900 grow md:mb-0" placeholder="Enter your work email..." required="">

            <button type="submit" class="w-full border shrink btn-cta border-purple whitespace-nowrap md:w-auto">

                <div class="flex items-center justify-center">
                    <div>Sign up</div>
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                    </svg>
                </div>
            </button>
        </div>
    </form>

    <div class="mt-5 text-center">
        <a href="/demo-call" class="inline-block">
            <div class="flex items-center text-sm font-semibold text-blue-400 transition-all hover:underline">
                or book a demo
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg> </div>
        </a>
    </div>
</section>

@endsection
