@extends('layouts.app')
@section('title', 'Form Builder for Agencies | Service Provider Pro')
@section('content')

<div class="px-4 text-center">
    <h1 class="mx-auto max-w-screen-xl pb-4">
        Powerful Forms That Enhance Your Workflow
    </h1>

    <p class="lead mx-auto max-w-3xl">
        Use client inputs to automate your project management…
    </p>
</div>

<div class="mx-auto max-w-screen-lg px-4 lg:px-0">
    <div class="-mb-10">
        <picture class=" block" id="">
            {{-- <source srcset="images/form-builder_5.webp 3207w, images/form-builder.webp 2048w, images/form-builder_2.webp 1536w, images/form-builder_1.webp 1024w, images/form-builder_3.webp 860w, images/form-builder_4.webp 400w" sizes="(min-width: 1024px) 1024px, calc(100vw - 2rem)" type="image/webp"> --}}
            <img src="{{ asset('assets/images/form-builder.png') }}" alt="Form builder showing a list of available field types" title="Create any kind of form for your agency, that also integrates in your workflow" class="h-auto max-w-full rounded shadow-lg md:rounded-lg">
        </picture>
    </div>
</div>
</section>

<section class="!py-8 overflow-x-hidden logos bg-gradient-to-b from-blue-50 ">
    <div class="flex max-w-screen-lg px-4 mx-auto">
        <img src="{{asset('assets/images/amw.png')}}" alt="AMW logo">
        <img src="{{asset('assets/images/loganix.png')}}" alt="Loganix logo">
        <img src="{{asset('assets/images/podblade.png')}}" alt="Podblade logo">
        <img src="{{asset('assets/images/ranked.png')}}" alt="Ranked.ai logo">
        <img src="{{asset('assets/images/seobros.png')}}" alt="SEObros logo">
        <img src="{{asset('assets/images/wordagents.png')}}" alt="WordAgents logo">
        <img src="{{asset('assets/images/wpspeedfix.png')}}" alt="WPspeedfix logo">
    </div>
</section>

<section class="mx-auto max-w-3xl px-4 lg:px-16">
    <h2 class="gradient text-left">
        The problem with regular form builders
    </h2>

    <p>
        Regular form builders don't work for agencies. Not unless you want
        to keep double-checking submissions or following up with clients.
    </p>

    <p>
        If you have to move client data from a form builder app to a project
        management tool, that's one more step that can go wrong.
    </p>

    <p>
        What happens if a client submits your form twice? Or wants to update
        their data later? We've thought of all these things so you don't
        have to.
    </p>
</section>

<section class="px-4 pt-0">
    <div class="text-center">
        <a href="https://spp.co/trial" class="btn-cta block w-auto sm:inline-block">
            <div class="flex items-center justify-center">
                <div>Start your 14-day free trial</div>
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg>
            </div>
        </a>

        <a href="https://spp.co/demo-call" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
            <div class="flex items-center justify-center">
                How it works
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg> </div>
        </a>
    </div>
</section>

<section class="mb-0 px-4 lg:px-16">
    <h2 class="gradient text-center">A form for each use case</h2>
    <p class="lead">
        From new client inquiries to repeatable requests, we've got you
        covered.
    </p>
</section>

<section class="mx-auto grid max-w-screen-xl grid-cols-1 gap-16 px-4 lg:grid-cols-12">
    <div class="flex flex-col justify-center lg:col-start-1 lg:col-end-5">
        <h3 class="mb-4 bg-gradient-to-br from-purple-900 to-purple bg-clip-text text-2xl font-bold text-transparent">
            Order forms
        </h3>
        <p>
            Let your clients pick services, select add-ons and pay without
            leaving your form.
        </p>
        <p>
            Order forms create Orders which is where your team can
            collaborate.
        </p>
        <ul class="mt-8 grid grid-cols-1 gap-4 leading-6">
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> Service selection fields
            </li>
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> Payment fields
            </li>
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> Billing address and tax fields
            </li>
        </ul>
    </div>
    <div class="lg:col-start-5 lg:col-end-13">
        <picture class="bg-gradient bg-gradient-blue bg-gradient-left block" id="">
            {{-- <source srcset="images/orderform.webp 2415w, images/orderform_2.webp 2048w, images/orderform_3.webp 1536w, images/orderform_4.webp 1024w, images/orderform_1.webp 860w, images/orderform_5.webp 400w" sizes="" type="image/webp"> --}}
            <img src="{{ asset('assets/images/orderform.png') }}" loading="lazy" alt="Order form with service selection fields, email input, and a coupon field" title="Collect just the right information you need for billing" class="h-auto max-w-full rounded-lg shadow-lg">
        </picture>
    </div>
</section>

<section class="mx-auto grid max-w-screen-xl grid-cols-1 gap-16 px-4 lg:grid-cols-12">
    <div class="flex flex-col justify-center lg:col-start-1 lg:col-end-5">
        <h3 class="mb-4 bg-gradient-to-br from-purple-900 to-purple bg-clip-text text-2xl font-bold text-transparent">
            Intake forms
        </h3>
        <p>Collect the info you need to start a project.</p>
        <ul class="mt-8 grid grid-cols-1 gap-4 leading-6">
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> Automated reminders for clients to fill the form
            </li>
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> No duplicate submissions – only paying clients can fill your
                forms
            </li>
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> Sets order due date based on when the form is filled
            </li>
        </ul>
    </div>
    <div class="lg:col-start-5 lg:col-end-13">
        <picture class="bg-gradient bg-gradient-violet bg-gradient-bottom block" id="">
            {{-- <source srcset="images/intake-form-2_2.webp 2734w, images/intake-form-2.webp 2048w, images/intake-form-2_1.webp 1536w, images/intake-form-2_3.webp 1024w, images/intake-form-2_5.webp 860w, images/intake-form-2_4.webp 400w" sizes="" type="image/webp"> --}}
            <img src="{{ asset('assets/images/intake-form-2.png') }}" loading="lazy" class="h-auto max-w-full rounded-lg shadow-lg" alt="Intake form with a title and a spreadsheet field" title="Collect all the info you need to begin a project">
        </picture>
    </div>
</section>

<section class="mx-auto grid max-w-screen-xl grid-cols-1 gap-16 px-4 lg:grid-cols-12">
    <div class="flex flex-col justify-center lg:col-start-1 lg:col-end-5">
        <h3 class="mb-4 bg-gradient-to-br from-purple-900 to-purple bg-clip-text text-2xl font-bold text-transparent">
            Onboarding forms
        </h3>
        <p>
            Collect general client information for sales or future projects.
        </p>
        <ul class="mt-8 grid grid-cols-1 gap-4 leading-6">
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> Assign forms to a client or share them with a link
            </li>
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> Save data to client profile so it's always accessible
            </li>
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> Can be updated by the client at any time
            </li>
        </ul>
    </div>
    <div class="relative pl-10 lg:col-start-5 lg:col-end-13">
        <picture class=" block" id="">
            {{-- <source srcset="images/onboarding-form-filled.webp 2293w, images/onboarding-form-filled_5.webp 2048w, images/onboarding-form-filled_1.webp 1536w, images/onboarding-form-filled_4.webp 1024w, images/onboarding-form-filled_2.webp 860w, images/onboarding-form-filled_3.webp 400w" sizes="" type="image/webp"> --}}
            <img src="{{asset('assets/images/onboarding-form-filled.png')}}" loading="lazy" class="absolute -top-10 left-0 z-10 w-8/12 rounded shadow-xl" alt="A table of onboarding information with field name and value" title="Client brand information at your fingertips">
        </picture>

        <picture>
            <picture class="bg-gradient bg-gradient-lavender bg-gradient-right block" id="">
            {{-- <source srcset="images/onboarding-form-builder.webp 2732w, images/onboarding-form-builder_5.webp 2048w, images/onboarding-form-builder_2.webp 1536w, images/onboarding-form-builder_3.webp 1024w, images/onboarding-form-builder_1.webp 860w, images/onboarding-form-builder_4.webp 400w" sizes="" type="image/webp"> --}}
            <img src="{{asset('assets/images/onboarding-form-builder.png')}}" loading="lazy" class="h-auto max-w-full rounded-lg shadow-lg" alt="Form builder showing onboarding form creation" title="Easily build forms for client onboarding">
        </picture>
        </picture>
    </div>
</section>

<section class="mx-auto grid max-w-screen-xl grid-cols-1 gap-16 px-4 lg:grid-cols-12">
    <div class="flex flex-col justify-center lg:col-start-1 lg:col-end-5">
        <h3 class="mb-4 bg-gradient-to-br from-purple-900 to-purple bg-clip-text text-2xl font-bold text-transparent">
            Contact forms
        </h3>
        <p>
            Answer pre-sale enquiries, quote requests, and general support
            questions.
        </p>
        <ul class="mt-8 grid grid-cols-1 gap-4 leading-6">
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> Add custom fields and rules to create complex forms
            </li>
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> Embed in your website, or as a pop-up widget
            </li>
            <li class="flex items-baseline gap-x-2">
                <svg class="w-4 flex-none text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
                </svg> Reply to tickets from the portal
            </li>
        </ul>
    </div>
    <div class="relative lg:col-start-5 lg:col-end-13">
        <picture class=" block" id="">
            {{-- <source srcset="images/contact-widget.webp 699w, images/contact-widget_1.webp 400w" sizes="" type="image/webp"> --}}
            <img src="{{asset('assets/images/contact-widget.png')}}" loading="lazy" class="absolute -bottom-10 -right-10 z-10 h-auto w-1/2 max-w-72 rounded shadow-xl" alt="Contact form with many field types" title="Collect inquiries using contact forms">
        </picture>

        <picture class="bg-gradient bg-gradient-blue bg-gradient-bottom block" id="">
            {{-- <source srcset="images/helpdesk-public_4.webp 2586w, images/helpdesk-public.webp 2048w, images/helpdesk-public_5.webp 1536w, images/helpdesk-public_1.webp 1024w, images/helpdesk-public_2.webp 860w, images/helpdesk-public_3.webp 400w" sizes="" type="image/webp"> --}}
            <img src="{{asset('assets/images/helpdesk-public.png')}}" loading="lazy" class="h-auto rounded-lg shadow-lg" alt="Embedded contact widget" title="Add a contact widget to your website to capture leads">
        </picture>
    </div>
</section>

<section class="px-4">
    <div class="max-w-screen-lg mx-auto overflow-hidden rounded-lg shadow-xl" style="background-image: linear-gradient(135deg, #9c9dea 50%, #d3efff 100%);">
        <div class="grid gap-0 sm:grid-cols-10">
            <div class="flex items-center py-16 sm:col-start-1 sm:col-end-8 md:pl-20">
                <div class="px-8">
                    <blockquote class="mb-4 italic text-white md:text-lg">
                        SPP has been a key ingredient in our winning recipe for a successful productized service. It's easy for staff to use and customers love the client portal software for managing their service account.
                    </blockquote>

                    <div class="mb-8">
                        <a href="/blog/running-google-my-business-management-service/" target="_blank" class="block font-bold text-white transition-transform hover:text-blue-50 hover:-translate-y-0.5">Watch the case study →</a>
                    </div>

                    <div class="mb-4 text-sm text-white md:text-base">
                        Garrett Smith, Owner
                    </div>

                    <a href="/blog/running-google-my-business-management-service/" target="_blank">
                        <img loading="lazy" src="{{asset('assets/images/gmbgorilla.png')}}" alt="GMB Gorilla" style="max-width:170px">
                    </a>
                </div>
            </div>
            <div class="flex items-end sm:col-start-8 sm:col-end-11">
                <picture>
                    <img loading="lazy" src="{{asset('assets/images/garrett.png')}}" class="h-auto max-w-full" alt="Garrett Smith" title="Garrett Smith of GMB Gorilla">
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="px-4">
    <div class="mx-auto max-w-3xl">
        <h2 class="gradient text-center">Many field types</h2>
        <p class="lead">
            Select from dozens of field types, from simple text inputs to
            hidden fields and e-signatures.
        </p>
    </div>

    <div class="mx-auto grid max-w-screen-lg grid-cols-1 gap-16 md:grid-cols-12">
        <div class="bg-gradient bg-gradient-blue bg-gradient-left md:col-start-1 md:col-end-5">
            <picture class=" block" id="">
                {{-- <source srcset="images/form-builder-fields.webp 836w, images/form-builder-fields_1.webp 400w" sizes="" type="image/webp"> --}}
                <img src="{{ asset('assets/images/form-builder-fields.png') }}" loading="lazy" alt="Large list of all available field types in the form builder" title="Many unique field types for agency workflows" class="max-w-64 rounded md:max-w-full">
            </picture>
        </div>

        <div class="md:col-start-5 md:col-end-13">
            <div class="grid grid-cols-1 gap-4 lg:gap-8">
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
                        E-Signature field
                    </div>
                    <div class="ml-6">
                        Have customers digitally sign your client agreement
                        before working with you. Helps reduce potential
                        disputes.
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
                        Secret text
                    </div>
                    <div class="ml-6">
                        If you need to ask the client to share any sensitive
                        info it will be additionally secured by the secret text
                        field.
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
                        Spreadsheet input
                    </div>
                    <div class="ml-6">
                        For large orders you can collect bulk inputs using a
                        spreadsheet field. Supports paste from Sheets and Excel.
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
                        Calendly booking
                    </div>
                    <div class="ml-6">
                        Add a Calendly step to your workflow to ensure clients
                        can't proceed without booking a call.
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
                        Formatted text
                    </div>
                    <div class="ml-6">
                        Rich text editor helps you collect longer answers from
                        clients. Supports pasting formatted text from Docs.
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
                        Hidden field
                    </div>
                    <div class="ml-6">
                        Let's you fill data like UTM parameters in the
                        background without exposing it to the client.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="px-4 pt-0">
    <div class="text-center">
        <a href="https://spp.co/trial" class="btn-cta block w-auto sm:inline-block">
            <div class="flex items-center justify-center">
                <div>Start your 14-day free trial</div>
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg>
            </div>
        </a>

        <a href="https://spp.co/demo-call" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
            <div class="flex items-center justify-center">
                How it works
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg> </div>
        </a>
    </div>
</section>

<section class="mx-auto max-w-screen-lg px-4">
    <h2 class="gradient text-center">If → Then rules</h2>
    <p class="font-light mx-auto mb-16 text-center text-lg opacity-70">
        Use rules to conditionally show fields (or entire pages) based on
        client input.
    </p>

    <div class="bg-gradient bg-gradient-violet bg-gradient-bottom">
        <picture class=" block" id="">
            {{-- <source srcset="images/form-rules.webp 2582w, images/form-rules_1.webp 2048w, images/form-rules_5.webp 1536w, images/form-rules_3.webp 1024w, images/form-rules_4.webp 860w, images/form-rules_2.webp 400w" sizes="" type="image/webp"> --}}
            <img src="{{ asset('assets/images/form-rules.png') }}" loading="lazy" class="mx-auto h-auto max-w-full" alt="Form rule editor showing an IF condition and a THEN action" title="Show/hide form fields or even entire pages">
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


@endSection
