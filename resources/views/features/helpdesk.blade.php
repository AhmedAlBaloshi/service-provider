@extends('layouts.app')
@section('title', 'Helpdesk for Agencies | Service Provider Pro')
@section('content')
<div class="px-4 text-center">
    <h1 class="pb-4">Helpdesk Tool For Agencies</h1>
    <p class="lead mx-auto max-w-3xl">
        Support your clients with full context of their project
        history.…
    </p>
</div>

<div class="mx-auto max-w-screen-lg px-4 lg:px-0">
    <div class="-mb-10">
        <picture class=" block" id="">
            {{-- <source srcset="images/tickets_3.webp 2880w, images/tickets_5.webp 2048w, images/tickets_2.webp 1536w, images/tickets_1.webp 1024w, images/tickets_4.webp 860w, images/tickets.webp 400w" sizes="(min-width: 1024px) 1024px, calc(100vw - 2rem)" type="image/webp"> --}}
            <img src="{{ asset('assets/images/tickets.png') }}" alt="List of tickets in your agency's dashboard" title="This is where you'll see all your incoming support tickets. Order-related messages will be under the Orders tab." class="h-auto max-w-full rounded shadow-lg md:rounded-lg">
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
                Unified support inbox
            </div>
            <div class="ml-6">
                Forward your support email to SPP and answer customer emails
                from your dashboard.
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
                Keyboard shortcuts
            </div>
            <div class="ml-6">
                Makes ticket navigation and daily management tasks quicker.
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
                Feels just like email
            </div>
            <div class="ml-6">
                To anybody who's not logged into your client portal tickets are
                sent via email from your agency's domain.
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
                Support and order history
            </div>
            <div class="ml-6">
                See the entire history for each user, including their past
                tickets, orders, and payments.
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
                Saved replies
            </div>
            <div class="ml-6">
                Quickly answer common questions using saved replies and
                variables such as customer name or company.
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
                Tags
            </div>
            <div class="ml-6">
                Organize tickets with tags to reference them later.
            </div>
        </div>
    </div>
</section>

<div class="mx-auto my-16 max-w-screen-sm overflow-x-hidden px-4">
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
</div>

<section class="mx-auto max-w-screen-lg overflow-x-hidden px-4">
    <div class="text-center">
        <h2 class="gradient gradient-reverse">Work with your team</h2>
        <p class="font-light mb-24 text-lg opacity-70">
            Bring your support staff and contractors onboard.
        </p>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-16">
        <div class="lg:col-start-1 lg:col-end-8">
            <div class="bg-gradient bg-gradient-blue bg-gradient-left mb-16 lg:mb-0">
                <picture class=" block" id="">
                    {{-- <source srcset="images/ticket-narrow_4.webp 2058w, images/ticket-narrow_1.webp 2048w, images/ticket-narrow.webp 1536w, images/ticket-narrow_5.webp 1024w, images/ticket-narrow_3.webp 860w, images/ticket-narrow_2.webp 400w" sizes="" type="image/webp"> --}}
                    <img src="{{ asset('assets/images/ticket-narrow.png') }}" loading="lazy" alt="Support ticket details view" title="This is an admin view of a single ticket" class="h-auto max-w-full">
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
                        Control team permissions
                    </div>
                    <div class="ml-6">
                        Decide what customer details your support team has
                        access to.
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
                        Message signatures
                    </div>
                    <div class="ml-6">
                        Create a signature that gets added to all messages.
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
                        Team notes
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
                        @mentions
                    </div>
                    <div class="ml-6">
                        Mention a team member to trigger a direct notification,
                        even if they aren't following updates in the ticket.
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
                        Follow / unfollow tickets
                    </div>
                    <div class="ml-6">
                        Subscribe or unsubscribe from updates in any ticket
                        regardless of your global notification settings.
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
                        If you make a mistake or send the wrong email you can
                        delete the message before it gets sent out to the
                        customer.
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
                        Unread messages
                    </div>
                    <div class="ml-6">
                        Instantly see when there's new activity, without having
                        to check notifications.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="px-4">
    <div class="max-w-screen-lg mx-auto overflow-hidden rounded-lg shadow-xl" style="background-image: linear-gradient(135deg, #f59e7b 30%, #d7f155 100%)">
        <div class="grid gap-0 sm:grid-cols-10">
            <div class="flex items-center py-16 sm:col-start-1 sm:col-end-7 md:pl-20">
                <div class="px-8">
                    <blockquote class="mb-4 italic text-white md:text-lg">
                        SPP has been a lifesaver. It quickly turned my clunky old process of retainer clients into a seamless productized service.
                    </blockquote>

                    <div class="mb-8">
                        <a href="/blog/niching-down-web-development-agency/" target="_blank" class="block font-bold text-white transition-transform hover:text-blue-50 hover:-translate-y-0.5">Watch the case study →</a>
                    </div>

                    <div class="mb-4 text-sm text-white md:text-base">
                        Johnathan Solorzano, Founder
                    </div>

                    <a href="/blog/niching-down-web-development-agency/" target="_blank">
                        <img loading="lazy" src="{{ asset('assets/images/solomediagroup.svg') }}" alt="Solo Media Group" style="max-width:80px">
                    </a>
                </div>
            </div>
            <div class="flex items-end sm:col-start-7 sm:col-end-11">
                <picture>
                    <img loading="lazy" src="{{ asset('assets/images/john.png') }}" class="h-auto max-w-full" alt="Johnathan Solorzano" title="Johnathan Solorzano of Solo Media Group">
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-screen-2xl overflow-x-hidden px-4 lg:px-16 2xl:px-0">
    <div class="text-center">
        <h2 class="gradient">Custom contact forms</h2>
        <p class="font-light mb-24 text-lg opacity-70">
            Build forms for quote requests, inquiries, and support.
        </p>
    </div>

    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
        <div class="mb-16 flex items-center lg:col-start-1 lg:col-end-5 lg:mb-0">
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
                        Drag &amp; drop form builder
                    </div>
                    <div class="ml-6">
                        Choose from various field types to create the right
                        forms for you.
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
                        Embed in your website
                    </div>
                    <div class="ml-6">
                        Simple HTML embed code works with almost any website.
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
                        Link from anywhere
                    </div>
                    <div class="ml-6">
                        Share your form links on social media, emails, and
                        anywhere else.
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
                        Show within your Client Portal
                    </div>
                    <div class="ml-6">
                        Forms can be shown inside the client portal for your
                        logged-in users.
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-start-5 lg:col-end-13">
            <div class="bg-gradient bg-gradient-violet bg-gradient-right" data-slideshow="">
                <picture class="active block" id="">
                    {{-- <source srcset="images/helpdesk-form_3.webp 2880w, images/helpdesk-form_5.webp 2048w, images/helpdesk-form_1.webp 1536w, images/helpdesk-form.webp 1024w, images/helpdesk-form_2.webp 860w, images/helpdesk-form_4.webp 400w" sizes="" type="image/webp"> --}}
                    <img src="{{ asset('assets/images/helpdesk-form.png') }}" alt="Drag and drop form builder for contact forms" title="Drag fields to create a contact form." class="h-auto max-w-full" data-left="64%" data-top="15%" loading="lazy">
                </picture>

                <picture class=" block" id="">
                    {{-- <source srcset="images/helpdesk-public.webp 2586w, images/helpdesk-public_3.webp 2048w, images/helpdesk-public_1.webp 1536w, images/helpdesk-public_4.webp 1024w, images/helpdesk-public_2.webp 860w, images/helpdesk-public_5.webp 400w" sizes="" type="image/webp"> --}}
                    <img src="{{ asset('assets/images/helpdesk-public.png') }}" alt="Contact form display" title="You can also embed contact forms in your website" class="h-auto max-w-full" data-left="50%" data-top="13%" loading="lazy">
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="review-logos container mx-auto mt-16 max-w-screen-md pt-0 sm:px-4">
    <div class="grid gap-8 sm:grid-cols-3 lg:gap-4">
        <div class="flex items-center justify-center">
            <div class="text-center">
                <img class="mx-auto mb-3" src="{{ asset('assets/images/capterra.svg') }}" title="Capterra Rating" alt="Capterra logo" loading="lazy">

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
                <img class="mx-auto mb-3" src="{{ asset('assets/images/trustpilot.svg') }}" title="TrustPilot Rating" alt="TrustPilot logo" loading="lazy">

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
                <img class="mx-auto mb-3" src="{{ asset('assets/images/g2.svg') }}" title="G2 Crowd Rating" alt="G2 Logo" loading="lazy">

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


@endsection
