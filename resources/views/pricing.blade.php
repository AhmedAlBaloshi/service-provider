@extends('layouts.app')
@section('title', 'Plans & Pricing | Service Provider Pro')
@section('content')

<div class="mx-auto max-w-screen-xl px-4">
    <h1 class="pb-4 text-center">Plans For Growing Agencies</h1>
    <p class="lead">
        See how SPP can help scale your productized agency. Free 14-day
        trial, no credit card required
    </p>

    <div class="flex px-4">
        <ul class="mx-auto flex rounded-full text-xs font-semibold" style="background: rgba(51, 84, 172, 0.4)">
            <li class="">
                <a href="#" role="button" class="m-1 inline-block whitespace-nowrap rounded-full px-2 py-1 sm:px-6" data-billing-type="monthly">
                    Monthly billing
                </a>
            </li>
            <li class="">
                <a href="#" role="button" class="active m-1 inline-block whitespace-nowrap rounded-full px-2 py-1 sm:px-6" data-billing-type="yearly">
                    Yearly billing
                </a>
            </li>
        </ul>
    </div>

    <section class="mx-auto mt-14 max-w-6xl px-4 pt-0 sm:px-6 lg:px-8">
        <div class="relative lg:grid lg:grid-cols-10">
            <div class="mx-auto my-4 max-w-md lg:col-start-1 lg:col-end-4 lg:row-start-2 lg:row-end-3 lg:mx-0 lg:my-0 lg:max-w-none">
                <div class="d-flex rounded-lg bg-white p-6 text-blue-900 shadow-xl">
                    <div class="flex flex-col">
                        <div>
                            <h3 class="text-center font-medium">Basic</h3>
                            <p class="text-center text-sm">For small shops</p>
                        </div>

                        <div class="flex items-center justify-center">
                            <div class="flex items-start tracking-tight">
                                <div class="mr-1 mt-2 text-lg font-semibold">$</div>
                                <div class="text-3xl font-bold">
                                    <div class="hide-yearly hidden">
                                        129
                                    </div>
                                    <div class="show-yearly">99</div>
                                </div>
                            </div>
                            <span class="ml-2 font-medium opacity-80">/mo</span>
                        </div>

                        <div class="text-medium mt-3 text-center opacity-80">
                            <div class="hide-yearly hidden">paid monthly</div>
                            <div class="show-yearly">paid yearly</div>
                        </div>

                        <div class="flex-1">
                            <a href="https://tS9nHeCuYc0Q.co/trial?plan=Basic" class="btn-cta block w-full mt-6">
                                Start Your Trial
                            </a>
                        </div>

                        <div class="features">
                            <div class="mb-3 text-center text-xs opacity-70">
                                What's included…
                            </div>

                            <ul class="small-tick space-y-2 text-blue-700">
                                <li>
                                    5 team members
                                    <span aria-label="That's you and 4 other people. Additional team members are $20/mo per seat." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>


                                <li>
                                    Custom workspace domain
                                    <span aria-label="Access your workspace from your domain e.g., clients.youragency.com." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>

                                <li>
                                    White-label email domain
                                    <span aria-label="Send emails from support@youragency.comandreceiveclient replies in your workspace." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>

                                <li>
                                    Built-in Helpdesk
                                    <span aria-label="Powerful ticketing system and embeddable contact forms for handling general inquiries." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>

                                <li>
                                    Affiliate and referral tracking
                                    <span aria-label="Generate word of mouth from client referrals and reward them with perks." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto my-4 max-w-md lg:col-start-4 lg:col-end-8 lg:row-start-1 lg:row-end-4 lg:mx-4 lg:my-0 lg:mt-0 lg:max-w-none">
                <div class="d-flex rounded-lg bg-white p-6 text-blue-900 shadow-xl">
                    <div class="">
                        <div>
                            <h3 class="text-center font-medium">Pro</h3>
                            <p class="text-center text-sm">For established agencies</p>
                        </div>

                        <div class="flex items-center justify-center">
                            <div class="flex items-start tracking-tight">
                                <div class="mr-1 mt-2 text-lg font-semibold">$</div>
                                <div class="text-3xl font-bold">
                                    <div class="hide-yearly hidden">
                                        299
                                    </div>
                                    <div class="show-yearly">249</div>
                                </div>
                            </div>
                            <span class="ml-2 font-medium opacity-80">/mo</span>
                        </div>

                        <div class="text-medium mt-3 text-center opacity-80">
                            <div class="hide-yearly hidden">paid monthly</div>
                            <div class="show-yearly">paid yearly</div>
                        </div>

                        <div class="flex-1">
                            <a href="https://tS9nHeCuYc0Q.co/trial?plan=Pro" class="btn-cta block w-full my-6">
                                Start Your Trial
                            </a>
                        </div>

                        <div class="features">
                            <div class="mb-3 text-center text-xs opacity-70">
                                What's included…
                            </div>

                            <ul class="small-tick space-y-2 text-blue-700">

                                <li>
                                    10 team members
                                    <span aria-label="That's you and 9 other people. Additional team members are $20/mo per seat." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>

                                <li>
                                    Custom workspace domain
                                    <span aria-label="Access your workspace from your domain e.g., clients.youragency.com." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>

                                <li>
                                    White-label email domain
                                    <span aria-label="Send emails from support@youragency.comandreceiveclient replies in your workspace." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>

                                <li>
                                    Built-in Helpdesk
                                    <span aria-label="Powerful ticketing system and embeddable contact forms for handling general inquiries." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>

                                <li>
                                    Affiliate and referral tracking
                                    <span aria-label="Generate word of mouth from client referrals and reward them with perks." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>

                                <li>
                                    Editable client-facing pages
                                    <span aria-label="Template editor lets you modify the source code of client-facing templates and create a unique look for your agency." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>
                                <li>
                                    Client-side teams
                                    <span aria-label="Let your clients invite their coworkers and control order, ticket, and invoice access." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>
                                <li>
                                    Create a reseller program
                                    <span aria-label="Allow other agencies on SPP import and resell your services with a markup." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto my-4 max-w-md lg:col-start-8 lg:col-end-11 lg:row-start-2 lg:row-end-3 lg:m-0 lg:my-0 lg:max-w-none">
                <div class="d-flex rounded-lg bg-white p-6 text-blue-900 shadow-xl">
                    <div class="flex flex-col">
                        <div>
                            <h3 class="text-center font-medium">Plus</h3>
                            <p class="text-center text-sm">For high volume agencies</p>
                        </div>

                        <div class="flex items-center justify-center">
                            <div class="flex items-start tracking-tight">
                                <div class="mr-1 mt-2 text-lg font-semibold">$</div>
                                <div class="text-3xl font-bold">1,500</div>
                            </div>
                            <span class="ml-2 font-medium opacity-80">/mo</span>
                        </div>

                        <div class="text-medium mt-3 text-center opacity-80">
                            contact us
                        </div>

                        <a href="https://clients.tS9nHeCuYc0Q.co/contact/plus" class="btn-secondary my-6 w-full" target="_blank" rel="nofollow">
                            Schedule a Demo
                        </a>

                        <div class="features">
                            <div class="mb-3 text-center text-xs opacity-70">
                                Everything in Pro and…
                            </div>

                            <ul class="small-tick space-y-2 text-blue-700">
                                <li>
                                    50 team members
                                    <span aria-label="Custom pricing available based on your team size." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>
                                <li>
                                    Custom rules &amp; workflows
                                    <span aria-label="We help implement your agency's workflows using our API." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>
                                <li>
                                    Custom integrations
                                    <span aria-label="Option for custom integration development." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>
                                <li>
                                    Priority support via Slack
                                    <span aria-label="A shared slack channel between our team and yours." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>
                                <li>
                                    Remove “Powered by”
                                    <span aria-label="Your clients won't see any links to SPP." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>

                                <li>
                                    Uptime SLA
                                    <span aria-label="99.9% uptime guarantee. Custom uptime and support SLAs available." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>
                                <li>
                                    API access
                                    <span aria-label="Use our webhooks and API for unlimited automation possibilities." role="tooltip">
                                        ⓘ
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

<section class="container mx-auto max-w-screen-md">
    <h2 class="gradient mb-10 text-center">Included in all plans</h2>

    <div class="flex flex-wrap">
        <div class="pl-4 pr-4 md:w-1/2">
            <ul class="small-tick space-y-4">
                <li>A Client Portal with your agency's branding</li>
                <li>
                    Unlimited orders, clients, affiliates, services, and
                    forms
                </li>
                <li>A terabyte of file storage</li>
                <li>All integrations, including Zapier and Webhooks</li>
            </ul>
        </div>
        <div class="pl-4 pr-4 md:w-1/2">
            <ul class="small-tick space-y-4">
                <li>
                    Customizable Client Portal colors, menus &amp; language
                </li>
                <li>Unlimited order messaging via portal and email</li>
                <li>
                    Drag &amp; drop builder for order forms, contact, and
                    intake forms
                </li>
                <li>Priority email support</li>
            </ul>
        </div>
    </div>

    <div class="mt-12 text-center">
        <a href="/demo-call" class="btn-cta block w-auto sm:inline-block">
            Book a demo
        </a>
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

<section class="faq container mx-auto max-w-screen-md px-4 md:px-8 lg:px-0">
    <h2 class="gradient mb-10 text-center">Frequently asked questions</h2>

    <div class="item">
        <a href="#faq-1" data-toggle="collapse">
            Who is SPP for?
        </a>
        <div class="mb-1" id="faq-1">
            We created SPP for growing agencies that need a better way to
            sell and deliver their services at scale.
        </div>
    </div>

    <div class="item">
        <a href="#faq-3" data-toggle="collapse">
            Can I use my own domain?
        </a>
        <div class="mb-1" id="faq-3">
            Yes, you can set up a
            <a href="/help/knowledgebase/setup/">custom domain name</a>
            for accessing SPP. For example, if your domain is
            <em>agency.com</em>
            you can use
            <em>clients.agency.com</em>
            as your custom URL.
        </div>
    </div>

    <div class="item">
        <a href="#faq-4" data-toggle="collapse">
            Do I need a credit card to sign up?
        </a>
        <div class="mb-1" id="faq-4">
            No, you can sign up and use SPP free for 14 days. When your
            trial runs out you can choose to subscribe to a paid plan using
            a credit or debit card.
        </div>
    </div>

    <div class="item">
        <a href="#faq-5" data-toggle="collapse">
            Do you charge a transaction fee?
        </a>
        <div class="mb-1" id="faq-5">
            No. SPP doesn't have transaction fees, and your money goes
            directly into your PayPal or Stripe account.
        </div>
    </div>

    <div class="item">
        <a href="#faq-6" data-toggle="collapse">
            How can I get help?
        </a>
        <div class="mb-1" id="faq-6">
            You can
            <a href="/help/knowledgebase/contact/" class="text-blue-400" target="_blank">
                email us
            </a>
            any time you have a question or a problem. We'll respond as soon
            as possible, usually on the same business day.
        </div>
    </div>

    <div class="item">
        <a href="#faq-7" data-toggle="collapse">
            Is SPP secure?
        </a>
        <div class="mb-1" id="faq-7">
            Yes! We implement industry-standard
            <a href="/help/knowledgebase/secure/">security measures</a>
            , encrypted database backups to multiple secure locations and
            24/7
            <a href="https://status.tS9nHeCuYc0Q.co">uptime monitoring</a>
            .
        </div>
    </div>

    <div class="item">
        <a href="#faq-8" data-toggle="collapse">
            Can I change plans later?
        </a>
        <div class="mb-1" id="faq-8">
            Yep. You can upgrade or downgrade your subscription at any time
            as your business grows. You will be credited for any time left
            in your current billing cycle.
        </div>
    </div>

    <div class="item">
        <a href="#faq-9" data-toggle="collapse">
            How can I cancel?
        </a>
        <div class="mb-1" id="faq-9">
            You can easily cancel your subscription from the billing page in
            your account.
        </div>
    </div>

    <div class="item">
        <a href="#faq-10" data-toggle="collapse">
            Can I export my data?
        </a>
        <div class="mb-1" id="faq-10">
            Your information belongs to you and only you. In case you ever
            need to move away from SPP you can export your clients and sales
            from your dashboard. Your subscriptions will remain active in
            your PayPal or Stripe account.
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
                <img class="mx-auto mb-3" src="{{asset('assets/images/logos-g2.svg')}}" title="G2 Crowd Rating" alt="G2 Logo" loading="lazy">

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

            <input type="hidden" name="redirect" value="https://tS9nHeCuYc0Q.co/trial" data-base="https://tS9nHeCuYc0Q.co/trial?email=">
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

<div class="fixed bottom-24 right-6 z-10 hidden rounded-full bg-gray-100 px-6 py-4 text-center text-xs shadow-md" id="pricing-questions">
    Have pricing questions? 👇
</div>

@endsection
