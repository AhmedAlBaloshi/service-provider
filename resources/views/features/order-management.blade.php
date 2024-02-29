@extends('layouts.app')
@section('title', 'Plans &amp; Pricing | Service Provider Pro')
@section('content')
<div class="mx-auto max-w-screen-xl px-4 text-center">
    <h1 class="pb-4">Project Management Without The Data Entry</h1>

    <p class="lead mx-auto max-w-3xl">
        Create, assign, and update tasks based on client actions…
    </p>
</div>

<div class="relative mx-auto max-w-screen-lg px-4 lg:px-0" data-hero-video="">
    <iframe class="-mb-10 hidden aspect-video w-full rounded-lg shadow-lg" data-src="https://www.youtube-nocookie.com/embed/TebnpN3Tacg?rel=0&amp;autoplay=1&amp;showinfo=0&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

    <div class="absolute inset-0" data-play="">
        <div class="flex h-full">
            <div class="m-auto flex cursor-pointer items-center rounded-full bg-purple px-6 py-4 text-white shadow-lg shadow-purple/20 transition-all hover:-translate-y-1 hover:shadow-xl motion-safe:animate-fade-in">
                <svg class="mr-2 h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
                </svg> 00:45 Intro
            </div>
        </div>
    </div>

    <div class="-mb-10 aspect-[945/552]" data-hero-image="">
        <picture class=" block" id="">
            {{-- <source srcset="../../images/screenshots/w-full/orders.webp 2768w, ../../images/screenshots/w-2048/orders.webp 2048w, ../../images/screenshots/w-1536/orders.webp 1536w, ../../images/screenshots/w-1024/orders.webp 1024w, ../../images/screenshots/w-860/orders.webp 860w, ../../images/screenshots/w-400/orders.webp 400w" sizes="(min-width: 1024px) 1024px, calc(100vw - 2rem)" type="image/webp"> --}}
            <img src="{{ asset('assets/images/screenshots-orders.png') }}" alt="List of orders with their statuses" title="Sell and deliver productized services from one place" class="h-auto w-full rounded shadow-lg md:rounded-lg">
        </picture>
    </div>
</div>
</section>

<section class="mx-auto max-w-screen-lg overflow-x-hidden px-4">
    <div class="grid gap-4 lg:grid-cols-2 lg:gap-6">
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
                See what needs to be done
            </div>
            <div class="ml-6">
                Get a birds-eye view of assigned orders, pending orders
                requiring inputs, and requested revisions.
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
                Custom order statuses
            </div>
            <div class="ml-6">
                Supports multi-stage order delivery and gives your clients a
                clear idea of where their projects are at.
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
                Dynamic deadlines
            </div>
            <div class="ml-6">
                Helps you prioritize orders based on when they're due, starting
                from the time when the client has provided all the necessary
                details.
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
                Shortcuts
            </div>
            <div class="ml-6">
                Powerful keyboard shortcuts for quickly navigating the orders
                list, assigning and tagging orders, and other frequent actions.
            </div>
        </div>
    </div>
</section>

<div class="mx-auto my-16 max-w-lg overflow-x-hidden px-4">
    <form action="https://track.bentonow.com/forms/aa1d8f75b83b6828f9d520df5253f4cc/$startedTrialSignup?hardened=true" method="post" id="form-pre-trial">

        <div class="items-center mx-4 md:flex">

            <input type="hidden" name="redirect" value="https://dnhVkDgW5zQx.co/trial" data-base="https://dnhVkDgW5zQx.co/trial?email=">
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

<section class="mx-auto max-w-screen-xl overflow-x-hidden px-4">
    <div class="text-center">
        <h2 class="gradient">Manage tasks</h2>
        <p class="font-light mb-24 text-lg opacity-70">
            Create a repeatable checklist for each service you offer, or add
            one-off tasks as needed.
        </p>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-16">
        <div class="flex items-center lg:col-start-1 lg:col-end-5">
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
                        Repeatable or one-off tasks
                    </div>
                    <div class="ml-6">
                        If an order requires extra steps outside the standard
                        process you can add them on the fly.
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
                        Dynamic task deadlines
                    </div>
                    <div class="ml-6">
                        Add tasks that are due on a specific date, or a certain
                        time after the previous task is completed.
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
                        Automatic assignees
                    </div>
                    <div class="ml-6">
                        Once you complete a task, the order is assigned to the
                        next person automatically.
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-start-5 lg:col-end-13">
            <picture class="bg-gradient bg-gradient-blue bg-gradient-right mb-16 lg:mb-0 block" id="">
                {{-- <source srcset="../../images/screenshots/w-full/order-tasks.webp 2542w, ../../images/screenshots/w-2048/order-tasks.webp 2048w, ../../images/screenshots/w-1536/order-tasks.webp 1536w, ../../images/screenshots/w-1024/order-tasks.webp 1024w, ../../images/screenshots/w-860/order-tasks.webp 860w, ../../images/screenshots/w-400/order-tasks.webp 400w" sizes="" type="image/webp"> --}}
                <img src="{{ asset('assets/images/order-tasks.png') }}" loading="lazy" class="h-auto max-w-full" alt="Checklist of order tasks with a due date and an assigned team member" title="Assign tasks to your team and set due dates">
            </picture>
        </div>
    </div>
</section>

<section class="mx-auto max-w-screen-lg overflow-x-hidden px-4">
    <div class="text-center">
        <h2 class="gradient">Bring your team onboard</h2>
        <p class="font-light mb-24 text-lg opacity-70">
            Control access, track work, and get everyone on the same page.
        </p>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-16">
        <div class="lg:col-start-1 lg:col-end-6">
            <picture class="bg-gradient bg-gradient-violet bg-gradient-left mb-16 lg:mb-0 block" id="">
                {{-- <source srcset="../../images/screenshots/w-full/edit-role.webp 850w, ../../images/screenshots/w-400/edit-role.webp 400w" sizes="" type="image/webp"> --}}
                <img src="{{ asset('assets/images/edit-role.png') }}" loading="lazy" class="h-auto max-w-full" alt="Team permission role toggles" title="Create roles for your team and control what they can access.">
            </picture>
        </div>

        <div class="flex items-center lg:col-start-6 lg:col-end-13">
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
                        Many permission controls
                    </div>
                    <div class="ml-6">
                        Give limited access, hide customer contact info and
                        pricing or restrict messaging.
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
                        Assigned services
                    </div>
                    <div class="ml-6">
                        Automatically assign teams to orders based on purchased
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
                        Account managers
                    </div>
                    <div class="ml-6">
                        Assign team members to clients and have them be the
                        point of contact for that customer.
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
                        Notification preferences
                    </div>
                    <div class="ml-6">
                        You and your team can decide when and how they want to
                        be notified.
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
            #fbb396 10%,
            #9c9dea 100%
        );
    ">
        <div class="grid gap-8 py-16 sm:grid-cols-12 sm:gap-0">
            <div class="flex items-center sm:col-start-2 sm:col-end-4">
                <picture class="mx-auto block max-w-32 rounded-full sm:max-w-full" style="background: rgba(255, 118, 0, 0.3)">
                    <img loading="lazy" src="{{ asset('assets/images/kenny.png') }}" class="h-auto -scale-x-100 rounded-full" alt="Kenny Schumacher" title="Kenny Schumacher of Appraisal Saver">
                </picture>
            </div>

            <div class="flex items-center sm:col-start-5 sm:col-end-11">
                <div>
                    <blockquote class="mb-4 italic text-white md:text-lg">
                        The biggest thing I want for this agency is to have our
                        subscriptions, clients, and team in one place. Instead
                        of having to start from scratch I rely on SPP to get all
                        the years of testing, experience, and awesome updates
                        right away.
                    </blockquote>

                    <div class="mb-8">
                        <a href="/blog/tips-building-exiting-productized-agencies/" target="_blank" class="block font-bold text-white transition-transform hover:-translate-y-0.5 hover:text-blue-50">
                            Watch the case study →
                        </a>
                    </div>

                    <div class="mb-4 text-sm text-white md:text-base">
                        Kenny Schumacher, Owner
                    </div>

                    <a href="/blog/tips-building-exiting-productized-agencies/" target="_blank">
                        <img loading="lazy" src="{{ asset('assets/images/kenny-appraisal.png') }}" alt="Appraisal Saver Agency" style="max-width: 200px">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-screen-xl overflow-x-hidden px-4 lg:px-16 2xl:px-0">
    <div class="text-center">
        <h2 class="gradient">Built-in messaging</h2>
        <p class="font-light mb-24 text-lg opacity-70">
            All your emails and messages are linked to a purchase without
            having to look up transaction IDs or ticket numbers.
        </p>
    </div>

    <div data-pov-switcher="">
        <select class="mx-auto mb-10 max-w-sm border-2 border-purple text-xs">
            <option value="#view-as-admin" selected="">
                View as Admin
            </option>
            <option value="#view-as-contractor">View as Contractor</option>
            <option value="#view-as-client">View as Client</option>
        </select>

        <div class="bg-gradient bg-gradient-lavender bg-gradient-bottom px-8">
            <picture class=" block" id="view-as-admin">
                {{-- <source srcset="../../images/screenshots/w-full/order-admin.webp 2800w, ../../images/screenshots/w-2048/order-admin.webp 2048w, ../../images/screenshots/w-1536/order-admin.webp 1536w, ../../images/screenshots/w-1024/order-admin.webp 1024w, ../../images/screenshots/w-860/order-admin.webp 860w, ../../images/screenshots/w-400/order-admin.webp 400w" sizes="" type="image/webp"> --}}
                <img src="{{ asset('assets/images/screenshots-order-admin.png') }}" alt="Order details page as an admin" title="Admins and managers have full access to all the order details." class="h-auto max-w-full" loading="lazy">
            </picture>

            <picture class="hidden block" id="view-as-contractor">
                {{-- <source srcset="../../images/screenshots/w-full/order-contractor.webp 2800w, ../../images/screenshots/w-2048/order-contractor.webp 2048w, ../../images/screenshots/w-1536/order-contractor.webp 1536w, ../../images/screenshots/w-1024/order-contractor.webp 1024w, ../../images/screenshots/w-860/order-contractor.webp 860w, ../../images/screenshots/w-400/order-contractor.webp 400w" sizes="" type="image/webp"> --}}
                <img src="{{ asset('assets/images/screenshots-order-contractor.png') }}" alt="Order details page as a contractor" title="Contractors can still access the important parts like messages and project info, but they don't see pricing or payment details." class="h-auto max-w-full" loading="lazy">
            </picture>

            <picture class="hidden block" id="view-as-client">
                {{-- <source srcset="../../images/screenshots/w-full/order-client.webp 2800w, ../../images/screenshots/w-2048/order-client.webp 2048w, ../../images/screenshots/w-1536/order-client.webp 1536w, ../../images/screenshots/w-1024/order-client.webp 1024w, ../../images/screenshots/w-860/order-client.webp 860w, ../../images/screenshots/w-400/order-client.webp 400w" sizes="" type="image/webp"> --}}
                <img src="{{ asset('assets/images/screenshots-order-client.png') }}" alt="Order details page as the client" title="Clients can see all the details about their order on this page." class="h-auto max-w-full" loading="lazy">
            </picture>
        </div>
    </div>

    <div class="mt-16 grid gap-4 lg:grid-cols-3 lg:gap-6">
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
                Team messages
            </div>
            <div class="ml-6">
                Great for private internal discussions in orders.
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
                Order notes
            </div>
            <div class="ml-6">
                Internal notes field lets you save useful info about the order,
                or the customer.
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
                Open tracking
            </div>
            <div class="ml-6">
                See when customers have viewed your messages.
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
                @mentions
            </div>
            <div class="ml-6">
                Mention a team member to trigger a direct notification, even if
                they aren't following updates in the order.
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
                Follow orders
            </div>
            <div class="ml-6">
                Subscribe or unsubscribe from updates in any order regardless of
                your global notification settings.
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
                Undo send
            </div>
            <div class="ml-6">
                If you make a mistake or send the wrong email you can delete the
                message before it gets emailed to the customer.
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-screen-xl overflow-x-hidden px-4 lg:px-16 2xl:px-0">
    <div class="text-center">
        <h2 class="gradient">Insightful reporting</h2>
        <p class="font-light mb-24 text-center text-lg opacity-70">
            Various reports to track sales and order delivery performance.
        </p>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
        <div class="flex items-center lg:col-start-1 lg:col-end-5">
            <div class="mb-16 grid grid-cols-1 gap-4 lg:mb-0 lg:gap-6">
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
                        Staff response times
                    </div>
                    <div class="ml-6">
                        Track response times across team members to ensure
                        quality customer support.
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
                        Order completion report
                    </div>
                    <div class="ml-6">
                        See how many orders your team members have completed and
                        calculate salary for contractors.
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
                        Weekly email summary
                    </div>
                    <div class="ml-6">
                        Provides a quick overview of your sales, delivered
                        orders, and messages sent.
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-start-6 lg:col-end-12">
            <div class="bg-gradient bg-gradient-blue bg-gradient-right">
                <picture class=" block" id="">
                    {{-- <source srcset="../../images/screenshots/w-full/completion-report.webp 1536w, ../../images/screenshots/w-1024/completion-report.webp 1024w, ../../images/screenshots/w-860/completion-report.webp 860w, ../../images/screenshots/w-400/completion-report.webp 400w" sizes="" type="image/webp"> --}}
                    <img src="{{ asset('assets/images/completion-report.png') }}" loading="lazy" alt="Order completion reporting for your team" title="See who has delivered which orders to easily calculate pay for your contractors." class="h-auto max-w-full">
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="px-4 pt-0">
    <div class="text-center">
        <a href="https://dnhVkDgW5zQx.co/trial" class="btn-cta block w-auto sm:inline-block">
            <div class="flex items-center justify-center">
                <div>Start your 14-day free trial</div>
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg>
            </div>
        </a>

        <a href="https://dnhVkDgW5zQx.co/features/analytics" class="btn-secondary mt-2 block sm:ml-2 sm:mt-0 sm:inline-block">
            <div class="flex items-center justify-center">
                More analytics features
                <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!--! Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                </svg> </div>
        </a>
    </div>
</section>

<section class="mx-auto max-w-screen-xl overflow-x-hidden px-4">
    <div class="text-center">
        <h2 class="gradient">Deep integrations</h2>
        <p class="font-light mb-24 text-center text-lg opacity-70">
            SPP works well with other tools in your agency.
        </p>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
        <div class="lg:col-start-2 lg:col-end-8">
            <div class="bg-gradient bg-gradient-violet bg-gradient-left mb-16 lg:mb-0">
                <picture class=" block" id="">
                    {{-- <source srcset="../../images/screenshots/w-full/zapier.webp 2109w, ../../images/screenshots/w-2048/zapier.webp 2048w, ../../images/screenshots/w-1536/zapier.webp 1536w, ../../images/screenshots/w-1024/zapier.webp 1024w, ../../images/screenshots/w-860/zapier.webp 860w, ../../images/screenshots/w-400/zapier.webp 400w" sizes="" type="image/webp"> --}}
                    <img src="{{ asset('assets/images/zapier.png') }}" alt="Zapier user interface" title="Zapier automation setup" class="h-auto max-w-full" loading="lazy">
                </picture>
            </div>
        </div>

        <div class="flex items-center lg:col-start-8 lg:col-end-11">
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
                        Zapier
                    </div>
                    <div class="ml-6">
                        Our two way Zapier integration is the simplest solution
                        to connecting apps like Trello without writing code.
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
                        Webhooks
                    </div>
                    <div class="ml-6">
                        A way for developers to get notified when orders get
                        updated in your dashboard.
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
                        Developer API
                    </div>
                    <div class="ml-6">
                        A
                        <a href="https://dnhVkDgW5zQx.co/api">developer friendly API</a>
                        opens up many more possibilities for custom automation
                        workflows.
                    </div>
                </div>
                <div class="text-small pl-6 font-medium text-blue-400">
                    <a href="/integrations" class="hover:underline">
                        All integrations
                    </a>
                    →
                </div>
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

            <input type="hidden" name="redirect" value="https://dnhVkDgW5zQx.co/trial" data-base="https://dnhVkDgW5zQx.co/trial?email=">
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
