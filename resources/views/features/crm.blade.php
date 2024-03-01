@extends('layouts.app')
@section('title', 'CRM for Agencies | Service Provider Pro')
@section('content')

<div class="mx-auto max-w-screen-lg px-4 text-center">
    <h1 class="pb-4">Your Contacts, Leads, and Clients In One Place</h1>

    <p class="lead mx-auto">
        Get the full picture of how your contacts become prospects and turn
        into clients…
    </p>
</div>

<div class="mx-auto max-w-screen-lg px-4 lg:px-0">
    <div class="-mb-10">
        <picture class=" block" id="">
{{-- <source srcset="images/crm_4.webp 2384w, images/crm_3.webp 2048w, images/crm_2.webp 1536w, images/crm.webp 1024w, images/crm_5.webp 860w, images/crm_1.webp 400w" sizes="(min-width: 1024px) 1024px, calc(100vw - 2rem)" type="image/webp"> --}}
<img src="{{ asset('assets/images/crm.png') }}" alt="User profile page with their contact details, LTV, referrer, and history" title="Everything you need to know about your clients is in one place" class="h-auto max-w-full rounded shadow-lg md:rounded-lg">
</picture>
    </div>
</div>
        </section>

                    <section class="review-logos container mx-auto mt-16 max-w-screen-md pt-0 sm:px-4">
<div class="grid gap-8 sm:grid-cols-3 lg:gap-4">
    <div class="flex items-center justify-center">
        <div class="text-center">
            <img class="mx-auto mb-3" src="{{ asset('assets/images/capterra.svg') }}" title="Capterra Rating" alt="Capterra logo" loading="lazy">

            <div class="text-center">
                <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                </div>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <div class="text-center">
            <img class="mx-auto mb-3" src="{{ asset('assets/images/trustpilot.svg') }}" title="TrustPilot Rating" alt="TrustPilot logo" loading="lazy">

            <div class="text-center">
                <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 0c-12.2 .1-23.3 7-28.6 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3L288 439.8V0zM429.9 512c1.1 .1 2.1 .1 3.2 0h-3.2z"></path></svg>                </div>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <div class="text-center">
            <img class="mx-auto mb-3" src="{{ asset('assets/images/g2.svg') }}" title="G2 Crowd Rating" alt="G2 Logo" loading="lazy">

            <div class="text-center">
                <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                    <svg class="inline-block h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg>                </div>
        </div>
    </div>
</div>
</section>

<section class="mx-auto max-w-screen-xl overflow-x-hidden px-4 lg:px-16 2xl:px-0">
    <div>
        <h2 class="gradient text-center">
            Keep your customer data up to date
        </h2>
        <p class="font-light mb-24 text-center text-lg opacity-70">
            Without connecting apps, installing tracking scripts or doing
            manual data entry.
        </p>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
        <div class="mb-16 lg:col-start-1 lg:col-end-8 lg:mb-0">
            <picture class="bg-gradient bg-gradient-blue bg-gradient-left block" id="">
{{-- <source srcset="images/crm-fields_2.webp 1742w, images/crm-fields_4.webp 1536w, images/crm-fields_3.webp 1024w, images/crm-fields.webp 860w, images/crm-fields_1.webp 400w" sizes="" type="image/webp"> --}}
<img src="{{ asset('assets/images/crm-fields.png') }}" alt="A builder showing custom CRM field creation for a client" title="Create custom fields for your internal use" class="mx-auto h-auto max-w-full" loading="lazy">
</picture>
        </div>

        <div class="flex items-start lg:col-start-8 lg:col-end-13 2xl:items-center">
            <div class="grid grid-cols-1 gap-4 lg:gap-6">
                <p>
                    With your billing, projects, and tickets in one
                    platform, you get a better picture of your client
                    activity.
                </p>

                <div>
<div class="flex items-center font-semibold ">
    <div>
        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><defs><style>.fa-secondary{opacity:.4}</style></defs><path class="fa-secondary" d=""></path><path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg>        </div>
    Create custom fields
</div>
<div class="ml-6">
    to house the data that's unique to your agency.
</div>
</div>

                <div>
<div class="flex items-center font-semibold ">
    <div>
        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><defs><style>.fa-secondary{opacity:.4}</style></defs><path class="fa-secondary" d=""></path><path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg>        </div>
    Use custom statuses
</div>
<div class="ml-6">
    to indicate various stages in your deal pipeline.
</div>
</div>

                <div>
<div class="flex items-center font-semibold ">
    <div>
        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><defs><style>.fa-secondary{opacity:.4}</style></defs><path class="fa-secondary" d=""></path><path class="fa-primary" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg>        </div>
    See the full history
</div>
<div class="ml-6">
    of user activity, and who made changes.
</div>
</div>
            </div>
        </div>
    </div>
</section>

<section class="px-4">
<div class="max-w-screen-lg mx-auto overflow-hidden rounded-lg shadow-xl" style="background-image: linear-gradient(135deg, #9c9dea 20%, #fb7c5b 100%)">
    <div class="grid gap-0 sm:grid-cols-10">
        <div class="flex items-center py-16 sm:col-start-1 sm:col-end-8 md:pl-20">
            <div class="px-8">
                <blockquote class="mb-4 italic text-white md:text-lg">
                    SPP does a lot of the heavy lifting we used to do manually saving us a ton of time &amp; effort. It's fantastic and I recommend it all the time. The way I explain it is that it's kind of like the Shopify for service businesses!
                </blockquote>

                <div class="mb-8">
                    <a href="/blog/building-website-speed-optimization-agency/" target="_blank" class="block font-bold text-white transition-transform hover:text-blue-50 hover:-translate-y-0.5">Watch the case study →</a>
                </div>

                <div class="mb-4 text-sm text-white md:text-base">
                    Brendan Tully, CEO
                </div>

                <a href="/blog/building-website-speed-optimization-agency/" target="_blank">
                    <img loading="lazy" src="{{ asset('assets/images/wpspeedfix.png') }}" alt="WP Speed Fix" style="max-width:170px">
                </a>
            </div>
        </div>
        <div class="flex items-end sm:col-start-8 sm:col-end-11">
            <picture>
                <img loading="lazy" src="{{ asset('assets/images/brendan.png') }}" class="h-auto max-w-full" alt="Brendan Tully" title="Brendan Tully of WP Speed Fix">
            </picture>
        </div>
    </div>
</div>
</section>

<section class="px-4 lg:px-16">
    <div class="mx-auto max-w-3xl">
        <h2 class="gradient text-center">
            Capture the highest quality leads
        </h2>
        <p>
            As an agency, you're selling to business. These people have real
            emails, other than Gmail. In SPP, you're able to block signups
            from free services and ensure that your clients use their real
            company email instead.
        </p>
    </div>

    <div class="relative mx-auto mt-16 flex w-full max-w-screen-xl rounded-lg bg-gradient-to-br from-purple to-pink-100 px-4">
        <picture class="block mx-auto max-w-xl mt-10 sm:mt-36 mb-0 sm:mb-10 block" id="">
{{-- <source srcset="images/account-settings_3.webp 1314w, images/account-settings_2.webp 1024w, images/account-settings_1.webp 860w, images/account-settings.webp 400w" sizes="" type="image/webp"> --}}
<img src="{{ asset('assets/images/account-settings.png') }}" class="h-auto rounded-t-lg" alt="Account settings" title="Disable signups from free email services" loading="lazy">
</picture>

        <picture class="absolute left-1/2 top-10 z-10 hidden sm:block block" id="">
{{-- <source srcset="images/widget.webp 700w, images/widget_1.webp 400w" sizes="" type="image/webp"> --}}
<img src="{{ asset('assets/images/widget.png') }}" class="h-auto max-w-xs rounded border border-gray-100 shadow-xl" alt="Embedded contact form widget" title="Create embeddable contact forms for your website" loading="lazy">
</picture>
    </div>
</section>

<section class="px-4 pt-0">
<div class="text-center">
    <a href="https://spp.co/trial" class="btn-cta block w-auto sm:inline-block">
        <div class="flex items-center justify-center">
            <div>Start your 14-day free trial</div>
            <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg>            </div>
    </a>

    <a href="https://spp.co/demo-call" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
        <div class="flex items-center justify-center">
            How it works
            <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg>            </div>
    </a>
</div>
</section>

<section class="mx-auto max-w-screen-lg px-4 lg:px-16">
    <h2 class="gradient text-center">Get a timeline of user activity</h2>
    <p class="lead mx-auto max-w-screen-md">
        See when an account was created or updated, and even when they
        perform actions in your client portal.
    </p>

    <div class="bg-gradient bg-gradient-lavender bg-gradient-bottom mx-auto max-w-2xl">
        <picture class=" block" id="">
{{-- <source srcset="images/crm-history_1.webp 1609w, images/crm-history_3.webp 1536w, images/crm-history_2.webp 1024w, images/crm-history_4.webp 860w, images/crm-history.webp 400w" sizes="" type="image/webp"> --}}
<img src="{{ asset('assets/images/crm-history.png') }}" class="h-auto max-w-full rounded-lg" alt="Activity timeline with dates, times, user, and actions they performed" title="See when a client was created, updated, or when they performed actions in your client portal" loading="lazy">
</picture>
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

    <input type="hidden" name="redirect" value="https://spp.co/trial" data-base="https://spp.co/trial?email=">
    <input type="email" name="email" id="email" class="mb-4 mr-4 font-medium text-blue-900 grow md:mb-0" placeholder="Enter your work email..." required="">

    <button type="submit" class="w-full border shrink btn-cta border-purple whitespace-nowrap md:w-auto">

        <div class="flex items-center justify-center">
            <div>Sign up</div>
            <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg>            </div>
    </button>
</div>
</form>

        <div class="mt-5 text-center">
        <a href="/demo-call" class="inline-block">
            <div class="flex items-center text-sm font-semibold text-blue-400 transition-all hover:underline">
                or book a demo
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg>                </div>
        </a>
    </div>
</section>

@endsection
