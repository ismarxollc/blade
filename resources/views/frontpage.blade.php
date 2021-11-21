{{-- Template Name: FrontPage Template --}}

@extends('layouts.app')

@section('content')
    @include('sections.hero.right-image')
    @include('test.font-weight')
    @include('test.font-size')
    @while (have_posts()) @php the_post() @endphp
        @include('partials.content-page')
    @endwhile

    @include('partials.header.pre-header-banner')
    @include('partials.header.logo-button')


    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 xl:gap-8">
            <section class="flex">
                <div class="w-full relative text-white overflow-hidden rounded-3xl flex shadow-lg">
                    <div class="w-full flex md:flex-col bg-gradient-to-br from-purple-500 to-indigo-500">
                        <div
                            class="sm:max-w-sm sm:flex-none md:w-auto md:flex-auto flex flex-col items-start relative z-10 p-6 xl:p-8">
                            <h2 class="text-xl font-semibold mb-2 text-shadow">Read the docs</h2>
                            <p class="font-medium text-violet-100 text-shadow mb-4">Learn how to get Tailwind set up in your
                                project.</p><a
                                class="mt-auto bg-violet-800 bg-opacity-50 hover:bg-opacity-75 transition-colors duration-200 rounded-xl font-semibold py-2 px-4 inline-flex"
                                href="/docs/installation">Start learning</a>
                        </div>
                        <div class="docs_image__1HDuG relative md:pl-6 xl:pl-8 hidden sm:block"><svg
                                xmlns="http://www.w3.org/2000/svg" width="352" height="232" fill="none"
                                viewBox="0 0 352 232" class="absolute top-6 left-6 md:static overflow-visible">
                                <g opacity="0.8">
                                    <g filter="url(#guides_svg__filter0_dd)">
                                        <rect width="352" height="232" fill="#fff" rx="12"></rect>
                                    </g>
                                    <path fill="#DDD6FE" d="M107 27h208v1H107z"></path>
                                    <path fill="#A78BFA" fill-rule="evenodd"
                                        d="M46 8c-2.4 0-3.9 1.212-4.5 3.637.9-1.213 1.95-1.667 3.15-1.364.685.173 1.174.675 1.716 1.23.882.905 1.903 1.952 4.134 1.952 2.4 0 3.9-1.212 4.5-3.637-.9 1.213-1.95 1.667-3.15 1.364-.685-.173-1.174-.675-1.716-1.23C49.252 9.047 48.231 8 46 8zm-4.5 5.456c-2.4 0-3.9 1.212-4.5 3.636.9-1.212 1.95-1.666 3.15-1.363.685.173 1.174.674 1.716 1.23.882.905 1.903 1.952 4.134 1.952 2.4 0 3.9-1.212 4.5-3.637-.9 1.212-1.95 1.667-3.15 1.364-.685-.173-1.174-.675-1.716-1.23-.882-.905-1.903-1.952-4.134-1.952z"
                                        clip-rule="evenodd"></path>
                                    <rect width="25" height="4" x="48" y="43" fill="#C4B5FD" rx="2"></rect>
                                    <rect width="25" height="4" x="255" y="43" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="32" height="4" x="255" y="51" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="24" height="4" x="255" y="59" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="35" height="4" x="255" y="67" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="22" height="4" x="255" y="75" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="57" height="8" x="107" y="42" fill="#A78BFA" rx="4"></rect>
                                    <rect width="121" height="4" x="107" y="54" fill="#C4B5FD" rx="2"></rect>
                                    <rect width="49" height="4" x="121" y="11" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="11" height="4" x="292" y="11" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="129" height="4" x="107" y="70" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="129" height="4" x="107" y="177" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="137" height="4" x="107" y="129" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="137" height="4" x="107" y="137" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="129" height="4" x="107" y="211" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="129" height="4" x="107" y="78" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="121" height="4" x="107" y="185" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="121" height="4" x="107" y="219" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="121" height="4" x="107" y="86" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="121" height="4" x="107" y="94" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="129" height="4" x="107" y="102" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="57" height="6" x="107" y="118" fill="#A78BFA" rx="3"></rect>
                                    <rect width="57" height="6" x="107" y="201" fill="#A78BFA" rx="3"></rect>
                                    <rect width="21" height="4" x="48" y="53" fill="#C4B5FD" rx="2"></rect>
                                    <rect width="18" height="4" x="48" y="63" fill="#C4B5FD" rx="2"></rect>
                                    <rect width="13" height="4" x="48" y="73" fill="#C4B5FD" rx="2"></rect>
                                    <rect width="19" height="4" x="48" y="83" fill="#C4B5FD" rx="2"></rect>
                                    <rect width="23" height="4" x="48" y="93" fill="#C4B5FD" rx="2"></rect>
                                    <rect width="23" height="3" x="37" y="112" fill="#A78BFA" rx="1.5"></rect>
                                    <rect width="23" height="3" x="37" y="180" fill="#A78BFA" rx="1.5"></rect>
                                    <rect width="18" height="4" x="37" y="120" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="18" height="4" x="37" y="188" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="18" height="4" x="37" y="128" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="18" height="4" x="37" y="196" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="21" height="4" x="37" y="136" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="21" height="4" x="37" y="204" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="21" height="4" x="37" y="144" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="21" height="4" x="37" y="212" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="30" height="4" x="37" y="152" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="30" height="4" x="37" y="220" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="30" height="4" x="37" y="160" fill="#DDD6FE" rx="2"></rect>
                                    <rect width="24" height="4" x="37" y="168" fill="#DDD6FE" rx="2"></rect>
                                    <circle cx="40" cy="45" r="3" fill="#A78BFA"></circle>
                                    <circle cx="312" cy="13" r="3" fill="#DDD6FE"></circle>
                                    <circle cx="40" cy="55" r="3" fill="#A78BFA"></circle>
                                    <circle cx="40" cy="65" r="3" fill="#A78BFA"></circle>
                                    <circle cx="40" cy="75" r="3" fill="#A78BFA"></circle>
                                    <circle cx="40" cy="85" r="3" fill="#A78BFA"></circle>
                                    <circle cx="40" cy="95" r="3" fill="#A78BFA"></circle>
                                    <path stroke="#C4B5FD"
                                        d="M115 17.5l-2.379-2.379m0 0a3 3 0 10-4.242-4.243 3 3 0 004.242 4.243z"></path>
                                    <rect width="132" height="23" x="107" y="147" fill="#A78BFA" rx="4"></rect>
                                </g>
                                <defs>
                                    <filter id="guides_svg__filter0_dd" width="382" height="262" x="-15" y="-7"
                                        color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                        </feColorMatrix>
                                        <feOffset dy="3"></feOffset>
                                        <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"></feColorMatrix>
                                        <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                        </feColorMatrix>
                                        <feOffset dy="8"></feOffset>
                                        <feGaussianBlur stdDeviation="7.5"></feGaussianBlur>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                        <feBlend in2="effect1_dropShadow" result="effect2_dropShadow"></feBlend>
                                        <feBlend in="SourceGraphic" in2="effect2_dropShadow" result="shape"></feBlend>
                                    </filter>
                                </defs>
                            </svg></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-20 hidden sm:block"
                        style="background: linear-gradient(to top, rgb(135, 94, 245), rgba(135, 94, 245, 0));"></div>
                </div>
            </section>
            <section class="flex">
                <div class="w-full relative text-white overflow-hidden rounded-3xl flex shadow-lg">
                    <div class="w-full flex md:flex-col bg-gradient-to-br from-pink-500 to-rose-500">
                        <div
                            class="sm:max-w-sm sm:flex-none md:w-auto md:flex-auto flex flex-col items-start relative z-10 p-6 xl:p-8">
                            <h2 class="text-xl font-semibold mb-2 text-shadow">Try it in the browser</h2>
                            <p class="font-medium text-rose-100 text-shadow mb-4">Build something with Tailwind in our
                                online
                                playground.</p><a href="https://play.tailwindcss.com/"
                                class="mt-auto bg-rose-900 bg-opacity-50 hover:bg-opacity-75 transition-colors duration-200 rounded-xl font-semibold py-2 px-4 inline-flex">Start
                                building</a>
                        </div>
                        <div class="docs_image__1HDuG relative md:pl-6 xl:pl-8 hidden sm:block"><svg
                                xmlns="http://www.w3.org/2000/svg" width="352" height="232" fill="none"
                                class="absolute top-6 left-6 md:static overflow-visible">
                                <g opacity="0.8">
                                    <g filter="url(#play_svg__filter0_dd)">
                                        <rect width="352" height="232" fill="#fff" rx="12"></rect>
                                    </g>
                                    <rect width="8" height="6" x="307.5" y="10.5" stroke="#FDA4AF" rx="0.5"></rect>
                                    <path fill="#FECDD3" d="M265 11a1 1 0 011-1h4v7h-4a1 1 0 01-1-1v-5z"></path>
                                    <rect width="8" height="6" x="265.5" y="10.5" stroke="#FDA4AF" rx="0.5"></rect>
                                    <path fill="#FDA4AF" d="M269 10h1v7h-1z"></path>
                                    <path fill="#FECDD3" d="M286 11a1 1 0 011-1h7a1 1 0 011 1v3h-9v-3z"></path>
                                    <rect width="8" height="6" x="286.5" y="10.5" stroke="#FDA4AF" rx="0.5"></rect>
                                    <path fill="#FDA4AF" d="M286 13h9v1h-9z"></path>
                                    <path fill="#FDA4AF" fill-rule="evenodd"
                                        d="M335 10h-5v1h1a1 1 0 011 1v4h3v-6zm-4 6v-4h-3v4h3zm-2-5h-1a1 1 0 00-1 1v4a1 1 0 001 1h7a1 1 0 001-1v-6a1 1 0 00-1-1h-5a1 1 0 00-1 1v1z"
                                        clip-rule="evenodd"></path>
                                    <circle cx="10" cy="54" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="62" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="70" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="78" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="86" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="94" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="102" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="110" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="118" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="126" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="134" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="142" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="150" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="158" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="166" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="174" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="182" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="190" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="198" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="206" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="214" r="2" fill="#FDA4AF"></circle>
                                    <circle cx="10" cy="222" r="2" fill="#FDA4AF"></circle>
                                    <path fill="#FB7185" fill-rule="evenodd"
                                        d="M17 8c-2.4 0-3.9 1.212-4.5 3.637.9-1.213 1.95-1.667 3.15-1.364.685.173 1.174.675 1.716 1.23.882.905 1.903 1.952 4.134 1.952 2.4 0 3.9-1.212 4.5-3.637-.9 1.213-1.95 1.667-3.15 1.364-.685-.173-1.174-.675-1.716-1.23C20.252 9.047 19.231 8 17 8zm-4.5 5.456c-2.4 0-3.9 1.212-4.5 3.636.9-1.212 1.95-1.666 3.15-1.363.685.173 1.174.674 1.716 1.23.882.905 1.903 1.952 4.134 1.952 2.4 0 3.9-1.212 4.5-3.637-.9 1.212-1.95 1.667-3.15 1.364-.685-.173-1.174-.675-1.716-1.23-.882-.905-1.903-1.952-4.134-1.952z"
                                        clip-rule="evenodd"></path>
                                    <path fill="#FFF1F2" d="M177 29h175v191c0 6.627-5.373 12-12 12H177V29z"></path>
                                    <path fill="#FECDD3" d="M0 27h352v2H0zm0 16h176v1H0z"></path>
                                    <path fill="#FECDD3" d="M175 29h2v203h-2z"></path>
                                    <rect width="31" height="4" x="20" y="52" fill="#FB7185" rx="2"></rect>
                                    <rect width="15" height="4" x="8" y="34" fill="#FB7185" rx="2"></rect>
                                    <rect width="15" height="4" x="27" y="34" fill="#FECDD3" rx="2"></rect>
                                    <rect width="15" height="4" x="46" y="34" fill="#FECDD3" rx="2"></rect>
                                    <rect width="87" height="4" x="28" y="60" fill="#FB7185" rx="2"></rect>
                                    <rect width="95" height="4" x="36" y="68" fill="#FB7185" rx="2"></rect>
                                    <rect width="87" height="4" x="36" y="76" fill="#FB7185" rx="2"></rect>
                                    <rect width="15" height="4" x="36" y="84" fill="#FB7185" rx="2"></rect>
                                    <rect width="15" height="4" x="28" y="92" fill="#FB7185" rx="2"></rect>
                                    <rect width="15" height="4" x="20" y="100" fill="#FB7185" rx="2"></rect>
                                    <rect width="39" height="4" x="20" y="108" fill="#FB7185" rx="2"></rect>
                                    <rect width="63" height="4" x="28" y="116" fill="#FB7185" rx="2"></rect>
                                    <rect width="87" height="4" x="36" y="124" fill="#FB7185" rx="2"></rect>
                                    <rect width="15" height="4" x="36" y="164" fill="#FB7185" rx="2"></rect>
                                    <rect width="15" height="4" x="36" y="172" fill="#FB7185" rx="2"></rect>
                                    <path fill="#FB7185"
                                        d="M44 134a2 2 0 012-2h129v4H46a2 2 0 01-2-2zm8 8a2 2 0 012-2h121v4H54a2 2 0 01-2-2zm0 8a2 2 0 012-2h121v4H54a2 2 0 01-2-2zm-8 8a2 2 0 012-2h59a2 2 0 110 4H46a2 2 0 01-2-2zm0 24a2 2 0 012-2h19a2 2 0 110 4H46a2 2 0 01-2-2zm8 8a2 2 0 012-2h51a2 2 0 110 4H54a2 2 0 01-2-2zm0 24a2 2 0 012-2h51a2 2 0 110 4H54a2 2 0 01-2-2zm-8 8a2 2 0 012-2h35a2 2 0 110 4H46a2 2 0 01-2-2zm16-24a2 2 0 012-2h113v4H62a2 2 0 01-2-2zm0 8a2 2 0 012-2h113v4H62a2 2 0 01-2-2z">
                                    </path>
                                    <rect width="64" height="64" x="232" y="99" fill="#fff" rx="8"></rect>
                                    <rect width="48" height="4" x="240" y="115" fill="#FB7185" rx="2"></rect>
                                    <rect width="40" height="4" x="244" y="123" fill="#FB7185" rx="2"></rect>
                                    <rect width="24" height="2" x="252" y="135" fill="#FECDD3" rx="1"></rect>
                                    <rect width="48" height="10" x="240" y="145" fill="#FB7185" rx="5"></rect>
                                    <circle cx="264" cy="99" r="8" fill="#FECDD3"></circle>
                                </g>
                                <defs>
                                    <filter id="play_svg__filter0_dd" width="382" height="262" x="-15" y="-7"
                                        color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                        </feColorMatrix>
                                        <feOffset dy="3"></feOffset>
                                        <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"></feColorMatrix>
                                        <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                        </feColorMatrix>
                                        <feOffset dy="8"></feOffset>
                                        <feGaussianBlur stdDeviation="7.5"></feGaussianBlur>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                        <feBlend in2="effect1_dropShadow" result="effect2_dropShadow"></feBlend>
                                        <feBlend in="SourceGraphic" in2="effect2_dropShadow" result="shape"></feBlend>
                                    </filter>
                                </defs>
                            </svg></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-rose-500 hidden sm:block"></div>
                </div>
            </section>
            <section class="flex">
                <div class="w-full relative text-white overflow-hidden rounded-3xl flex shadow-lg">
                    <div class="w-full flex md:flex-col bg-gradient-to-br from-yellow-400 to-orange-500">
                        <div
                            class="sm:max-w-sm sm:flex-none md:w-auto md:flex-auto flex flex-col items-start relative z-10 p-6 xl:p-8">
                            <h2 class="text-xl font-semibold mb-2 text-shadow">Watch the screencasts</h2>
                            <p class="font-medium text-amber-100 text-shadow mb-4">Learn more about Tailwind directly from
                                the
                                team on our channel.</p><a
                                class="mt-auto bg-amber-900 bg-opacity-50 hover:bg-opacity-75 transition-colors duration-200 rounded-xl font-semibold py-2 px-4 inline-flex"
                                href="https://www.youtube.com/tailwindlabs">Start watching</a>
                        </div>
                        <div class="docs_image__1HDuG relative hidden sm:block">
                            <div class="absolute left-2 bottom-3 xl:bottom-5"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="420" height="204" fill="none" class="overflow-visible">
                                    <g opacity="0.8">
                                        <g filter="url(#screencasts_svg__filter0_d)">
                                            <rect width="96" height="60" x="324" fill="#FFFBEB" rx="9"></rect>
                                        </g>
                                        <path fill="#FCD34D" d="M324 49.5h96V51a9 9 0 01-9 9h-78a9 9 0 01-9-9v-1.5z"></path>
                                        <path fill="#FBBF24" d="M324 46.502h96v3h-96v-3z"></path>
                                        <path fill="#F59E0B" d="M324 46.502h36.75v3H324v-3z"></path>
                                        <circle cx="371.25" cy="23.25" r="11.25" fill="#FCD34D"></circle>
                                        <path fill="#F59E0B" fill-rule="evenodd"
                                            d="M369.042 18.927a1.5 1.5 0 011.54.075l4.5 3a1.5 1.5 0 010 2.496l-4.5 3a1.5 1.5 0 01-2.332-1.248v-6a1.5 1.5 0 01.792-1.323z"
                                            clip-rule="evenodd"></path>
                                        <g filter="url(#screencasts_svg__filter1_d)">
                                            <rect width="96" height="60" x="216" fill="#FFFBEB" rx="9"></rect>
                                        </g>
                                        <path fill="#FCD34D" d="M216 49.5h96V51a9 9 0 01-9 9h-78a9 9 0 01-9-9v-1.5z"></path>
                                        <path fill="#FBBF24" d="M216 46.502h96v3h-96v-3z"></path>
                                        <path fill="#F59E0B" d="M216 46.502h36.75v3H216v-3z"></path>
                                        <circle cx="263.25" cy="23.25" r="11.25" fill="#FCD34D"></circle>
                                        <path fill="#F59E0B" fill-rule="evenodd"
                                            d="M261.042 18.927a1.5 1.5 0 011.54.075l4.5 3a1.5 1.5 0 010 2.496l-4.5 3a1.5 1.5 0 01-2.332-1.248v-6a1.5 1.5 0 01.792-1.323z"
                                            clip-rule="evenodd"></path>
                                        <g filter="url(#screencasts_svg__filter2_d)">
                                            <rect width="96" height="60" x="270" y="72" fill="#FFFBEB" rx="9"></rect>
                                        </g>
                                        <path fill="#FCD34D" d="M270 121.5h96v1.5a9 9 0 01-9 9h-78a9 9 0 01-9-9v-1.5z">
                                        </path>
                                        <path fill="#FBBF24" d="M270 118.502h96v3h-96v-3z"></path>
                                        <path fill="#F59E0B" d="M270 118.502h44.75v3H270v-3z"></path>
                                        <circle cx="317.25" cy="95.25" r="11.25" fill="#FCD34D"></circle>
                                        <path fill="#F59E0B" fill-rule="evenodd"
                                            d="M315.042 90.927a1.5 1.5 0 011.54.075l4.5 3a1.5 1.5 0 010 2.496l-4.5 3a1.5 1.5 0 01-2.332-1.248v-6a1.5 1.5 0 01.792-1.323z"
                                            clip-rule="evenodd"></path>
                                        <rect width="96" height="60" x="216" y="143.998" fill="#FFFBEB" rx="9"></rect>
                                        <path fill="#FCD34D" d="M216 193.5h96v1.5a9 9 0 01-9 9h-78a9 9 0 01-9-9v-1.5z">
                                        </path>
                                        <path fill="#FBBF24" d="M216 190.5h96v3h-96v-3z"></path>
                                        <path fill="#F59E0B" d="M216 190.5h36.75v3H216v-3z"></path>
                                        <circle cx="263.254" cy="167.25" r="11.25" fill="#FCD34D"></circle>
                                        <path fill="#F59E0B" fill-rule="evenodd"
                                            d="M261.046 162.927a1.5 1.5 0 011.54.075l4.5 3a1.5 1.5 0 010 2.496l-4.5 3a1.5 1.5 0 01-2.332-1.248v-6c0-.553.304-1.061.792-1.323z"
                                            clip-rule="evenodd"></path>
                                        <g filter="url(#screencasts_svg__filter3_d)">
                                            <rect width="96" height="60" x="162" y="72.002" fill="#FFFBEB" rx="9"></rect>
                                        </g>
                                        <path fill="#FCD34D" d="M162 121.502h96v1.5a9 9 0 01-9 9h-78a9 9 0 01-9-9v-1.5z">
                                        </path>
                                        <path fill="#FBBF24" d="M162 118.502h96v3h-96v-3z"></path>
                                        <path fill="#F59E0B" d="M162 118.502h20.75v3H162v-3z"></path>
                                        <circle cx="209.254" cy="95.252" r="11.25" fill="#FCD34D"></circle>
                                        <path fill="#F59E0B" fill-rule="evenodd"
                                            d="M207.046 90.93a1.5 1.5 0 011.54.074l4.5 3a1.5 1.5 0 010 2.496l-4.5 3a1.5 1.5 0 01-2.332-1.248v-6a1.5 1.5 0 01.792-1.323z"
                                            clip-rule="evenodd"></path>
                                        <g filter="url(#screencasts_svg__filter4_d)">
                                            <rect width="96" height="60" x="54" y="72.002" fill="#FFFBEB" rx="9"></rect>
                                        </g>
                                        <path fill="#FCD34D" d="M54 121.502h96v1.5a9 9 0 01-9 9H63a9 9 0 01-9-9v-1.5z">
                                        </path>
                                        <path fill="#FBBF24" d="M54 118.502h96v3H54v-3z"></path>
                                        <path fill="#F59E0B" d="M54 118.502h52.75v3H54v-3z"></path>
                                        <circle cx="101.25" cy="95.252" r="11.25" fill="#FCD34D"></circle>
                                        <path fill="#F59E0B" fill-rule="evenodd"
                                            d="M99.042 90.93a1.5 1.5 0 011.54.074l4.5 3a1.5 1.5 0 010 2.496l-4.5 3a1.5 1.5 0 01-2.332-1.248v-6a1.5 1.5 0 01.792-1.323z"
                                            clip-rule="evenodd"></path>
                                        <rect width="96" height="60" x="108" y="144.002" fill="#FFFBEB" rx="9"></rect>
                                        <path fill="#FCD34D" d="M108 193.5h96v1.5a9 9 0 01-9 9h-78a9 9 0 01-9-9v-1.5z">
                                        </path>
                                        <path fill="#FBBF24" d="M108 190.502h96v3h-96v-3z"></path>
                                        <path fill="#F59E0B" d="M108 190.502h36.75v3H108v-3z"></path>
                                        <circle cx="155.25" cy="167.252" r="11.25" fill="#FCD34D"></circle>
                                        <path fill="#F59E0B" fill-rule="evenodd"
                                            d="M153.046 162.927a1.5 1.5 0 011.54.075l4.5 3a1.5 1.5 0 010 2.496l-4.5 3a1.5 1.5 0 01-2.332-1.248v-6c0-.553.304-1.061.792-1.323z"
                                            clip-rule="evenodd"></path>
                                        <rect width="96" height="60" y="144.002" fill="#FFFBEB" rx="9"></rect>
                                        <path fill="#FCD34D" d="M0 193.502h96v1.5a9 9 0 01-9 9H9a9 9 0 01-9-9v-1.5z"></path>
                                        <path fill="#FBBF24" d="M0 190.502h96v3H0v-3z"></path>
                                        <path fill="#F59E0B" d="M0 190.502h36.75v3H0v-3z"></path>
                                        <circle cx="47.25" cy="167.252" r="11.25" fill="#FCD34D"></circle>
                                        <path fill="#F59E0B" fill-rule="evenodd"
                                            d="M45.042 162.929a1.5 1.5 0 011.54.075l4.5 3a1.499 1.499 0 010 2.496l-4.5 3a1.5 1.5 0 01-2.332-1.248v-6a1.5 1.5 0 01.792-1.323z"
                                            clip-rule="evenodd"></path>
                                    </g>
                                    <defs>
                                        <filter id="screencasts_svg__filter0_d" width="105" height="69" x="319.5" y="-2.25"
                                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                            </feColorMatrix>
                                            <feOffset dy="2.25"></feOffset>
                                            <feGaussianBlur stdDeviation="2.25"></feGaussianBlur>
                                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0">
                                            </feColorMatrix>
                                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                            <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                        </filter>
                                        <filter id="screencasts_svg__filter1_d" width="105" height="69" x="211.5" y="-2.25"
                                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                            </feColorMatrix>
                                            <feOffset dy="2.25"></feOffset>
                                            <feGaussianBlur stdDeviation="2.25"></feGaussianBlur>
                                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0">
                                            </feColorMatrix>
                                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                            <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                        </filter>
                                        <filter id="screencasts_svg__filter2_d" width="105" height="69" x="265.5" y="69.75"
                                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                            </feColorMatrix>
                                            <feOffset dy="2.25"></feOffset>
                                            <feGaussianBlur stdDeviation="2.25"></feGaussianBlur>
                                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0">
                                            </feColorMatrix>
                                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                            <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                        </filter>
                                        <filter id="screencasts_svg__filter3_d" width="105" height="69" x="157.5" y="69.752"
                                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                            </feColorMatrix>
                                            <feOffset dy="2.25"></feOffset>
                                            <feGaussianBlur stdDeviation="2.25"></feGaussianBlur>
                                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0">
                                            </feColorMatrix>
                                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                            <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                        </filter>
                                        <filter id="screencasts_svg__filter4_d" width="105" height="69" x="49.5" y="69.752"
                                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                            </feColorMatrix>
                                            <feOffset dy="2.25"></feOffset>
                                            <feGaussianBlur stdDeviation="2.25"></feGaussianBlur>
                                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0">
                                            </feColorMatrix>
                                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                            <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                        </filter>
                                    </defs>
                                </svg></div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-orange-500 hidden sm:block">
                    </div>
                </div>
            </section>
            <section
                class="md:col-span-3 flex flex-wrap md:flex-nowrap items-center bg-gray-800 shadow-lg rounded-2xl py-6 md:py-4 px-6 md:pr-5 space-y-4 md:space-y-0 md:space-x-8">
                <h2 class="flex-none"><span class="sr-only">Tailwind UI</span><svg
                        xmlns="http://www.w3.org/2000/svg" width="188" height="28" fill="none" viewBox="0 0 188 28"
                        class="w-40 h-auto">
                        <path fill="#16BDCA"
                            d="M22 2c-5.333 0-8.667 2.667-10 8 2-2.667 4.333-3.667 7-3 1.522.38 2.609 1.484 3.813 2.706C24.773 11.696 27.043 14 32 14c5.333 0 8.667-2.667 10-8-2 2.667-4.333 3.667-7 3-1.521-.38-2.609-1.484-3.813-2.706C29.227 4.304 26.957 2 22 2zM12 14c-5.333 0-8.667 2.667-10 8 2-2.667 4.333-3.667 7-3 1.521.38 2.609 1.484 3.813 2.706C14.773 23.696 17.043 26 22 26c5.333 0 8.667-2.667 10-8-2 2.667-4.333 3.667-7 3-1.521-.38-2.609-1.484-3.813-2.706C19.227 16.304 16.957 14 12 14z">
                        </path>
                        <path fill="#FFF"
                            d="M60.26 11.12V8h-3.72V3.8l-3.24.96V8h-2.76v3.12h2.76v7.2c0 3.9 1.98 5.28 6.96 4.68v-2.91c-2.46.12-3.72.15-3.72-1.77v-7.2h3.72zM74.463 8v2.13c-1.14-1.56-2.91-2.52-5.25-2.52-4.08 0-7.47 3.42-7.47 7.89 0 4.44 3.39 7.89 7.47 7.89 2.34 0 4.11-.96 5.25-2.55V23h3.24V8h-3.24zm-4.74 12.3c-2.7 0-4.74-2.01-4.74-4.8s2.04-4.8 4.74-4.8 4.74 2.01 4.74 4.8-2.04 4.8-4.74 4.8zM83.1 5.75c1.14 0 2.07-.96 2.07-2.07 0-1.14-.93-2.07-2.07-2.07-1.14 0-2.07.93-2.07 2.07 0 1.11.93 2.07 2.07 2.07zM81.48 23h3.24V8h-3.24v15zm7.002 0h3.24V1.1h-3.24V23zm24.282-15l-2.94 10.35L106.704 8h-3.09l-3.15 10.35L97.554 8h-3.42l4.71 15h3.18l3.15-10.11 3.12 10.11h3.18l4.71-15h-3.42zm7.426-2.25c1.14 0 2.07-.96 2.07-2.07 0-1.14-.93-2.07-2.07-2.07-1.14 0-2.07.93-2.07 2.07 0 1.11.93 2.07 2.07 2.07zM118.57 23h3.24V8h-3.24v15zm14.892-15.39c-2.04 0-3.66.75-4.65 2.31V8h-3.24v15h3.24v-8.04c0-3.06 1.68-4.32 3.81-4.32 2.04 0 3.36 1.2 3.36 3.48V23h3.24v-9.21c0-3.9-2.4-6.18-5.76-6.18zM154.59 2v8.13c-1.14-1.56-2.91-2.52-5.25-2.52-4.08 0-7.47 3.42-7.47 7.89 0 4.44 3.39 7.89 7.47 7.89 2.34 0 4.11-.96 5.25-2.55V23h3.24V2h-3.24zm-4.74 18.3c-2.7 0-4.74-2.01-4.74-4.8s2.04-4.8 4.74-4.8 4.74 2.01 4.74 4.8-2.04 4.8-4.74 4.8z">
                        </path>
                        <path fill="#FFF" fill-rule="evenodd"
                            d="M171 4h10a4 4 0 014 4v10a4 4 0 01-4 4h-10a4 4 0 01-4-4V8a4 4 0 014-4zm-6 4a6 6 0 016-6h10a6 6 0 016 6v10a6 6 0 01-6 6h-10a6 6 0 01-6-6V8zm12.816 7.293c0 2.114-1.596 3.402-3.752 3.402-2.142 0-3.738-1.288-3.738-3.402V8.7h1.918v6.44c0 .952.504 1.666 1.82 1.666s1.82-.714 1.82-1.666V8.7h1.932v6.594zm2.021 3.206V8.7h1.932v9.8h-1.932z"
                            clip-rule="evenodd"></path>
                    </svg></h2>
                <p class="flex-auto text-white text-lg font-medium">Beautiful UI components, crafted by the creators of
                    Tailwind&nbsp;CSS</p><a href="https://tailwindui.com/components"
                    class="flex-none bg-white hover:bg-gray-100 transition-colors duration-200 text-gray-900 font-semibold rounded-lg py-3 px-4">Browse
                    components</a>
            </section>
        </div>


        <section>
            <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 mt-16 mb-8">What’s new in Tailwind</h2>
            <ul
                class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6 xl:gap-8 font-semibold text-gray-900 text-center">
                <li class="flex"><a
                        class="relative rounded-xl ring-1 ring-black ring-opacity-5 shadow-sm w-full pt-8 pb-6 px-6"
                        href="/docs/ring-width"><svg xmlns="http://www.w3.org/2000/svg" width="144" height="48" fill="none"
                            viewBox="0 0 144 48" class="h-auto max-w-full mx-auto mb-3">
                            <path fill="#fff" d="M0 0h144v48H0z"></path>
                            <path fill="#A5F3FC"
                                d="M46 11a4 4 0 00-4 4v12a4 4 0 004 4h26.638l-2.412-5.858a3 3 0 013.916-3.916l17 7A3 3 0 0193 31h5a4 4 0 004-4V15a4 4 0 00-4-4H46z">
                            </path>
                            <path fill="#22D3EE"
                                d="M72.293 23.293a1 1 0 011.088-.218l17 7a1 1 0 01.013 1.844l-4.653 1.994 5.673 5.673a1 1 0 010 1.414L90 42.414a1 1 0 01-1.414 0l-5.673-5.672-1.994 4.652a1 1 0 01-1.844-.013l-7-17a1 1 0 01.218-1.088z">
                            </path>
                            <path fill="#22D3EE"
                                d="M38 15a8 8 0 018-8h52a8 8 0 018 8v12a8 8 0 01-8 8h-8.343l-.412-.412 1.937-.83A2.994 2.994 0 0092.236 33H98a6 6 0 006-6V15a6 6 0 00-6-6H46a6 6 0 00-6 6v12a6 6 0 006 6h27.462l.823 2H46a8 8 0 01-8-8V15z">
                            </path>
                        </svg>Focus Ring Utilities<span
                            class="absolute top-2 right-2 bg-fuchsia-100 text-fuchsia-600 rounded-full text-xs py-0.5 px-2">2.0+</span></a>
                </li>
                <li class="flex"><a
                        class="relative rounded-xl ring-1 ring-black ring-opacity-5 shadow-sm w-full pt-8 pb-6 px-6"
                        href="/docs/dark-mode"><svg xmlns="http://www.w3.org/2000/svg" width="144" height="48" fill="none"
                            viewBox="0 0 144 48" class="h-auto max-w-full mx-auto mb-3">
                            <path fill="#fff" d="M0 0h144v48H0z"></path>
                            <path fill="#A5F3FC" fill-rule="evenodd"
                                d="M62 12c-6.627 0-12 5.373-12 12s5.373 12 12 12h20c6.627 0 12-5.373 12-12s-5.373-12-12-12H62zm20 22c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10z"
                                clip-rule="evenodd"></path>
                            <path fill="#fff" d="M18 12h24v24H18z"></path>
                            <path fill="#22D3EE" fill-rule="evenodd"
                                d="M30 14a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zm-7.071 2.929a1 1 0 011.414 0l.707.707a1 1 0 01-1.414 1.414l-.707-.707a1 1 0 010-1.414zm14.142 0a1 1 0 010 1.414l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 0zM25 24a5 5 0 1110 0 5 5 0 01-10 0zm-5 0a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm17 0a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-2.05 4.95a1 1 0 011.414 0l.707.707a1 1 0 01-1.414 1.414l-.707-.707a1 1 0 010-1.414zm-11.314 0a1 1 0 011.414 1.414l-.707.707a1 1 0 01-1.414-1.414l.707-.707zM30 31a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                            <path fill="#fff" d="M102 12h24v24h-24z"></path>
                            <path fill="#22D3EE"
                                d="M111.353 14.94c.283.283.37.708.221 1.08a8 8 0 0010.407 10.408 1 1 0 011.301 1.3A10.003 10.003 0 01114 34c-5.523 0-10-4.477-10-10 0-4.207 2.598-7.805 6.273-9.282a1 1 0 011.08.22z">
                            </path>
                        </svg>Dark Mode<span
                            class="absolute top-2 right-2 bg-fuchsia-100 text-fuchsia-600 rounded-full text-xs py-0.5 px-2">2.0+</span></a>
                </li>
                <li class="flex"><a
                        class="relative rounded-xl ring-1 ring-black ring-opacity-5 shadow-sm w-full pt-8 pb-6 px-6"
                        href="/docs/customizing-colors#color-palette-reference"><svg xmlns="http://www.w3.org/2000/svg"
                            width="144" height="48" fill="none" viewBox="0 0 144 48" class="h-auto max-w-full mx-auto mb-3">
                            <path fill="#fff" d="M0 0h144v48H0z"></path>
                            <path fill="#A5F3FC" fill-rule="evenodd"
                                d="M63.559 48H92a4 4 0 004-4V34a4 4 0 00-4-4H81.559l-18 18zM67.898 40.498l19.943-19.942a4 4 0 000-5.657l-7.072-7.071a4 4 0 00-5.656 0L68 14.94v24.058c0 .509-.035 1.009-.102 1.499z"
                                clip-rule="evenodd"></path>
                            <path fill="#22D3EE" fill-rule="evenodd"
                                d="M52 0a4 4 0 00-4 4v35a9 9 0 1018 0V4a4 4 0 00-4-4H52zm5 42a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"></path>
                        </svg>Extended Color Palette<span
                            class="absolute top-2 right-2 bg-fuchsia-100 text-fuchsia-600 rounded-full text-xs py-0.5 px-2">2.0+</span></a>
                </li>
                <li class="flex"><a
                        class="relative rounded-xl ring-1 ring-black ring-opacity-5 shadow-sm w-full pt-8 pb-6 px-6"
                        href="/docs/configuring-variants#enabling-extra-variants"><svg xmlns="http://www.w3.org/2000/svg"
                            width="144" height="48" fill="none" viewBox="0 0 144 48" class="h-auto max-w-full mx-auto mb-3">
                            <path fill="#fff" d="M0 0h144v48H0z"></path>
                            <path fill="#22D3EE"
                                d="M71.293 26.293a1 1 0 011.088-.218l17 7a1 1 0 01.013 1.844l-4.653 1.994 5.673 5.673a1 1 0 010 1.414L89 45.414a1 1 0 01-1.414 0l-5.673-5.672-1.994 4.652a1 1 0 01-1.844-.013l-7-17a1 1 0 01.218-1.088z">
                            </path>
                            <path fill="#22D3EE"
                                d="M46 16a4 4 0 00-4 4v12a4 4 0 004 4h26.462l-3.236-7.858a3 3 0 013.916-3.916l17 7A3 3 0 0191.236 36H98a4 4 0 004-4V20a4 4 0 00-4-4H46z">
                            </path>
                            <path fill="#A5F3FC"
                                d="M54 8a4 4 0 00-4 4v2h44v-2a4 4 0 00-4-4H54zM62 2a4 4 0 00-4 4h28a4 4 0 00-4-4H62z">
                            </path>
                        </svg>Extend Variants<span
                            class="absolute top-2 right-2 bg-fuchsia-100 text-fuchsia-600 rounded-full text-xs py-0.5 px-2">2.0+</span></a>
                </li>
                <li class="flex"><a
                        class="relative rounded-xl ring-1 ring-black ring-opacity-5 shadow-sm w-full pt-8 pb-6 px-6"
                        href="/docs/breakpoints"><svg xmlns="http://www.w3.org/2000/svg" width="144" height="48" fill="none"
                            viewBox="0 0 144 48" class="h-auto max-w-full mx-auto mb-3">
                            <path fill="#fff" d="M0 0h144v48H0z"></path>
                            <path fill="url(#breakpoint_svg__paint0_linear)" fill-rule="evenodd"
                                d="M108 24a1 1 0 011-1h15.586l-2.293-2.293a1 1 0 111.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 11-1.414-1.414L124.586 25H109a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path fill="url(#breakpoint_svg__paint1_linear)" fill-rule="evenodd"
                                d="M36 24a1 1 0 01-1 1H19.414l2.293 2.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L19.414 23H35a1 1 0 011 1z"
                                clip-rule="evenodd"></path>
                            <path fill="#A5F3FC" fill-rule="evenodd"
                                d="M48 0a4 4 0 00-4 4v40a4 4 0 004 4h48a4 4 0 004-4V4a4 4 0 00-4-4H48zm1 7a2 2 0 100-4 2 2 0 000 4zm8-2a2 2 0 11-4 0 2 2 0 014 0zm4 2a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"></path>
                            <defs>
                                <linearGradient id="breakpoint_svg__paint0_linear" x1="105" x2="127" y1="24" y2="24"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#A5F3FC"></stop>
                                    <stop offset="1" stop-color="#22D3EE"></stop>
                                </linearGradient>
                                <linearGradient id="breakpoint_svg__paint1_linear" x1="39" x2="17" y1="24" y2="24"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#A5F3FC"></stop>
                                    <stop offset="1" stop-color="#22D3EE"></stop>
                                </linearGradient>
                            </defs>
                        </svg>Extra Wide Breakpoint<span
                            class="absolute top-2 right-2 bg-fuchsia-100 text-fuchsia-600 rounded-full text-xs py-0.5 px-2">2.0+</span></a>
                </li>
                <li class="flex"><a
                        class="relative rounded-xl ring-1 ring-black ring-opacity-5 shadow-sm w-full pt-8 pb-6 px-6"
                        href="/docs/presets"><svg xmlns="http://www.w3.org/2000/svg" width="144" height="48" fill="none"
                            viewBox="0 0 144 48" class="h-auto max-w-full mx-auto mb-3">
                            <path fill="#fff" d="M0 0h144v48H0z"></path>
                            <path fill="#A5F3FC" fill-rule="evenodd"
                                d="M56 0a8 8 0 00-8 8v32a8 8 0 008 8h32a8 8 0 008-8V8a8 8 0 00-8-8H56zm10 8a2 2 0 00-2 2v4a2 2 0 002 2h2a2 2 0 002-2v-4a2 2 0 00-2-2h-2zm8 14a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4zm-8 10a2 2 0 00-2 2v4a2 2 0 002 2h2a2 2 0 002-2v-4a2 2 0 00-2-2h-2z"
                                clip-rule="evenodd"></path>
                            <path fill="#22D3EE" fill-rule="evenodd"
                                d="M56 12a2 2 0 012-2h4a1 1 0 011 1v2a1 1 0 01-1 1h-4a2 2 0 01-2-2zm2 10a2 2 0 100 4h14a1 1 0 001-1v-2a1 1 0 00-1-1H58zm0 12a2 2 0 100 4h4a1 1 0 001-1v-2a1 1 0 00-1-1h-4zm14 0a1 1 0 00-1 1v2a1 1 0 001 1h14a2 2 0 100-4H72zm-1-23a1 1 0 011-1h14a2 2 0 110 4H72a1 1 0 01-1-1v-2zm11 11a1 1 0 00-1 1v2a1 1 0 001 1h4a2 2 0 100-4h-4z"
                                clip-rule="evenodd"></path>
                        </svg>Shareable Presets</a></li>
                <li class="flex"><a
                        class="relative rounded-xl ring-1 ring-black ring-opacity-5 shadow-sm w-full pt-8 pb-6 px-6"
                        href="/docs/gradient-color-stops"><svg xmlns="http://www.w3.org/2000/svg" width="144" height="48"
                            fill="none" viewBox="0 0 144 48" class="h-auto max-w-full mx-auto mb-3">
                            <path fill="#fff" d="M0 0h144v48H0z"></path>
                            <rect width="128" height="20" x="8" y="24" fill="url(#gradients_svg__paint0_linear)" rx="4">
                            </rect>
                            <path fill="#22D3EE" fill-rule="evenodd"
                                d="M2 4a2 2 0 00-2 2v12a2 2 0 002 2h4l2 2 2-2h4a2 2 0 002-2V6a2 2 0 00-2-2H2zm12 2H2v12h12V6zM130 4a2 2 0 00-2 2v12a2 2 0 002 2h4l2 2 2-2h4a2 2 0 002-2V6a2 2 0 00-2-2h-12zm12 2h-12v12h12V6z"
                                clip-rule="evenodd"></path>
                            <path fill="#A5F3FC" d="M4 8h8v8H4z"></path>
                            <path fill="#22D3EE" d="M132 8h8v8h-8z"></path>
                            <defs>
                                <linearGradient id="gradients_svg__paint0_linear" x1="136" x2="8" y1="34.476" y2="34.476"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#22D3EE"></stop>
                                    <stop offset="1" stop-color="#A5F3FC"></stop>
                                </linearGradient>
                            </defs>
                        </svg>Gradients</a></li>
                <li class="flex"><a
                        class="relative rounded-xl ring-1 ring-black ring-opacity-5 shadow-sm w-full pt-8 pb-6 px-6"
                        href="/docs/animation"><svg xmlns="http://www.w3.org/2000/svg" width="144" height="48" fill="none"
                            viewBox="0 0 144 48" class="h-auto max-w-full mx-auto mb-3">
                            <path fill="#fff" d="M0 0h144v48H0z"></path>
                            <rect width="24" height="24" x="26" y="13" fill="#A5F3FC" rx="4"></rect>
                            <path stroke="url(#animations_svg__paint0_linear)" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M57 25h22m0 0l-4-4m4 4l-4 4"></path>
                            <path fill="#22D3EE"
                                d="M86.036 17.975a4 4 0 012.828-4.9l18.81-5.04a4 4 0 014.899 2.83l5.04 18.809a4 4 0 01-2.829 4.899l-18.81 5.04a4 4 0 01-4.898-2.829l-5.04-18.81z">
                            </path>
                            <defs>
                                <linearGradient id="animations_svg__paint0_linear" x1="57" x2="79" y1="25" y2="25"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#A5F3FC"></stop>
                                    <stop offset="1" stop-color="#22D3EE"></stop>
                                </linearGradient>
                            </defs>
                        </svg>Animations</a></li>
            </ul>
        </section>


        <section>
            <header class="flex items-center justify-between mt-16 mb-8">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900">Latest Updates</h2><a
                    href="https://blog.tailwindcss.com" class="font-medium text-gray-900">View all the latest updates</a>
            </header>
            <ul class="bg-gray-50 rounded-3xl p-2 sm:p-5 xl:p-6">
                <li>
                    <article><a href="https://blog.tailwindcss.com/tailwindcss-2-2"
                            class="grid md:grid-cols-8 xl:grid-cols-9 items-start relative rounded-xl p-3 sm:p-5 xl:p-6 overflow-hidden hover:bg-white">
                            <h3
                                class="font-semibold text-gray-900 md:col-start-3 md:col-span-6 xl:col-start-3 xl:col-span-7 mb-1 ml-9 md:ml-0">
                                Tailwind CSS v2.2</h3><time datetime="2021-06-17T19:00:00.000Z"
                                class="md:col-start-1 md:col-span-2 row-start-1 md:row-end-3 flex items-center font-medium mb-1 md:mb-0"><svg
                                    viewBox="0 0 12 12" class="w-3 h-3 mr-6 overflow-visible text-cyan-400">
                                    <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                    <circle cx="6" cy="6" r="11" fill="none" stroke="currentColor" stroke-width="2">
                                    </circle>
                                    <path d="M 6 18 V 500" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                </svg>Jun 17, 2021</time>
                            <p class="md:col-start-3 md:col-span-6 xl:col-span-7 ml-9 md:ml-0">Over the last few weeks,
                                we've
                                been having a ton of fun dumping new and exciting features into Tailwind. Now feels like the
                                right time to cut a release, so here it is — Tailwind CSS v2.2! We've built-in a new
                                high-performance CLI tool, added before and after pseudo-element support, introduced new
                                sibling
                                selector variants, the ability to style highlighted text, and tons more.</p>
                        </a></article>
                </li>
                <li>
                    <article><a href="https://blog.tailwindcss.com/tailwindcss-2-1"
                            class="grid md:grid-cols-8 xl:grid-cols-9 items-start relative rounded-xl p-3 sm:p-5 xl:p-6 overflow-hidden hover:bg-white">
                            <h3
                                class="font-semibold text-gray-900 md:col-start-3 md:col-span-6 xl:col-start-3 xl:col-span-7 mb-1 ml-9 md:ml-0">
                                Tailwind CSS v2.1</h3><time datetime="2021-04-05T19:00:00.000Z"
                                class="md:col-start-1 md:col-span-2 row-start-1 md:row-end-3 flex items-center font-medium mb-1 md:mb-0"><svg
                                    viewBox="0 0 12 12" class="w-3 h-3 mr-6 overflow-visible text-gray-300">
                                    <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                    <path d="M 6 -6 V -30" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                    <path d="M 6 18 V 500" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                </svg>Apr 5, 2021</time>
                            <p class="md:col-start-3 md:col-span-6 xl:col-span-7 ml-9 md:ml-0">We just released Tailwind CSS
                                v2.1 which brings the new JIT engine to core, adds first-class CSS filter support, and more!
                            </p>
                        </a></article>
                </li>
                <li>
                    <article><a href="https://blog.tailwindcss.com/just-in-time-the-next-generation-of-tailwind-css"
                            class="grid md:grid-cols-8 xl:grid-cols-9 items-start relative rounded-xl p-3 sm:p-5 xl:p-6 overflow-hidden hover:bg-white">
                            <h3
                                class="font-semibold text-gray-900 md:col-start-3 md:col-span-6 xl:col-start-3 xl:col-span-7 mb-1 ml-9 md:ml-0">
                                Just-In-Time: The Next Generation of Tailwind CSS</h3><time
                                datetime="2021-03-15T16:30:00.000Z"
                                class="md:col-start-1 md:col-span-2 row-start-1 md:row-end-3 flex items-center font-medium mb-1 md:mb-0"><svg
                                    viewBox="0 0 12 12" class="w-3 h-3 mr-6 overflow-visible text-gray-300">
                                    <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                    <path d="M 6 -6 V -30" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                    <path d="M 6 18 V 500" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                </svg>Mar 15, 2021</time>
                            <p class="md:col-start-3 md:col-span-6 xl:col-span-7 ml-9 md:ml-0">One of the hardest
                                constraints
                                we've had to deal with as we've improved Tailwind CSS over the years is the generated file
                                size
                                in development. With enough customizations to your config file, the generated CSS can reach
                                10mb
                                or more, and there's only so much CSS that build tools and even the browser itself will
                                comfortably tolerate.</p>
                        </a></article>
                </li>
                <li>
                    <article><a href="https://blog.tailwindcss.com/welcoming-james-mcdonald-to-tailwind-labs"
                            class="grid md:grid-cols-8 xl:grid-cols-9 items-start relative rounded-xl p-3 sm:p-5 xl:p-6 overflow-hidden hover:bg-white">
                            <h3
                                class="font-semibold text-gray-900 md:col-start-3 md:col-span-6 xl:col-start-3 xl:col-span-7 mb-1 ml-9 md:ml-0">
                                Welcoming James McDonald to Tailwind Labs</h3><time datetime="2021-03-08T19:00:00.0Z"
                                class="md:col-start-1 md:col-span-2 row-start-1 md:row-end-3 flex items-center font-medium mb-1 md:mb-0"><svg
                                    viewBox="0 0 12 12" class="w-3 h-3 mr-6 overflow-visible text-gray-300">
                                    <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                    <path d="M 6 -6 V -30" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                    <path d="M 6 18 V 500" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                </svg>Mar 8, 2021</time>
                            <p class="md:col-start-3 md:col-span-6 xl:col-span-7 ml-9 md:ml-0">Many years ago I got a
                                message
                                from Steve that said something like "Have I ever shared this guy's Dribbble profile with you
                                before? Been following him forever, some of my absolute favorite work I've ever found." That
                                person was James McDonald, and today we're totally over the moon to share that James is
                                joining
                                our team full-time.</p>
                        </a></article>
                </li>
                <li>
                    <article><a href="https://blog.tailwindcss.com/tailwindcss-from-zero-to-production"
                            class="grid md:grid-cols-8 xl:grid-cols-9 items-start relative rounded-xl p-3 sm:p-5 xl:p-6 overflow-hidden hover:bg-white">
                            <h3
                                class="font-semibold text-gray-900 md:col-start-3 md:col-span-6 xl:col-start-3 xl:col-span-7 mb-1 ml-9 md:ml-0">
                                "Tailwind CSS: From Zero to Production" on YouTube</h3><time
                                datetime="2021-02-16T16:05:00.000Z"
                                class="md:col-start-1 md:col-span-2 row-start-1 md:row-end-3 flex items-center font-medium mb-1 md:mb-0"><svg
                                    viewBox="0 0 12 12" class="w-3 h-3 mr-6 overflow-visible text-gray-300">
                                    <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                    <path d="M 6 -6 V -30" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                    <path d="M 6 18 V 500" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                </svg>Feb 16, 2021</time>
                            <p class="md:col-start-3 md:col-span-6 xl:col-span-7 ml-9 md:ml-0">Today we're excited to
                                release
                                Tailwind CSS: From Zero to Production, a new screencast series that teaches you everything
                                you
                                need to know to get up and running with Tailwind CSS v2.0 from scratch.</p>
                        </a></article>
                </li>
                <li>
                    <article><a href="https://blog.tailwindcss.com/welcoming-david-luhr-to-tailwind-labs"
                            class="grid md:grid-cols-8 xl:grid-cols-9 items-start relative rounded-xl p-3 sm:p-5 xl:p-6 overflow-hidden hover:bg-white">
                            <h3
                                class="font-semibold text-gray-900 md:col-start-3 md:col-span-6 xl:col-start-3 xl:col-span-7 mb-1 ml-9 md:ml-0">
                                Welcoming David Luhr to Tailwind Labs</h3><time datetime="2021-02-01T13:35:00.0Z"
                                class="md:col-start-1 md:col-span-2 row-start-1 md:row-end-3 flex items-center font-medium mb-1 md:mb-0"><svg
                                    viewBox="0 0 12 12" class="w-3 h-3 mr-6 overflow-visible text-gray-300">
                                    <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                    <path d="M 6 -6 V -30" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                    <path d="M 6 18 V 500" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                </svg>Feb 1, 2021</time>
                            <p class="md:col-start-3 md:col-span-6 xl:col-span-7 ml-9 md:ml-0">We started working with
                                David
                                Luhr last summer on a project-by-project basis to help us develop a Figma version of
                                Tailwind UI
                                (almost ready!), as well as to leverage his accessibility expertise when building Tailwind
                                UI
                                templates, ensuring we were following best practices and delivering markup that would work
                                for
                                everyone, no matter what tools they use to browse the web. Today we're excited to share that
                                David has joined the team full-time!</p>
                        </a></article>
                </li>
                <li>
                    <article><a href="https://blog.tailwindcss.com/multi-line-truncation-with-tailwindcss-line-clamp"
                            class="grid md:grid-cols-8 xl:grid-cols-9 items-start relative rounded-xl p-3 sm:p-5 xl:p-6 overflow-hidden hover:bg-white">
                            <h3
                                class="font-semibold text-gray-900 md:col-start-3 md:col-span-6 xl:col-start-3 xl:col-span-7 mb-1 ml-9 md:ml-0">
                                Multi-line truncation with @tailwindcss/line-clamp</h3><time datetime="2021-01-24T20:00:00Z"
                                class="md:col-start-1 md:col-span-2 row-start-1 md:row-end-3 flex items-center font-medium mb-1 md:mb-0"><svg
                                    viewBox="0 0 12 12" class="w-3 h-3 mr-6 overflow-visible text-gray-300">
                                    <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                    <path d="M 6 -6 V -30" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                    <path d="M 6 18 V 500" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                </svg>Jan 24, 2021</time>
                            <p class="md:col-start-3 md:col-span-6 xl:col-span-7 ml-9 md:ml-0">Imagine you're implementing
                                a
                                beautiful design you or someone on your team carefully crafted in Figma. You've nailed all
                                the
                                different layouts at each breakpoint, perfected the whitespace and typography, and the
                                photography you're using is really bringing the design to life.</p>
                        </a></article>
                </li>
                <li>
                    <article><a href="https://blog.tailwindcss.com/tailwindcss-v2"
                            class="grid md:grid-cols-8 xl:grid-cols-9 items-start relative rounded-xl p-3 sm:p-5 xl:p-6 overflow-hidden hover:bg-white">
                            <h3
                                class="font-semibold text-gray-900 md:col-start-3 md:col-span-6 xl:col-start-3 xl:col-span-7 mb-1 ml-9 md:ml-0">
                                Tailwind CSS v2.0</h3><time datetime="2020-11-18T17:45:00.000Z"
                                class="md:col-start-1 md:col-span-2 row-start-1 md:row-end-3 flex items-center font-medium mb-1 md:mb-0"><svg
                                    viewBox="0 0 12 12" class="w-3 h-3 mr-6 overflow-visible text-gray-300">
                                    <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                    <path d="M 6 -6 V -30" fill="none" stroke-width="2" stroke="currentColor"
                                        class="text-gray-200"></path>
                                </svg>Nov 18, 2020</time>
                            <p class="md:col-start-3 md:col-span-6 xl:col-span-7 ml-9 md:ml-0">Today we're finally
                                releasing
                                Tailwind CSS v2.0, including an all-new color palette, dark mode support, and tons more!</p>
                        </a></article>
                </li>
            </ul>
        </section>


        <section>
            <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 mt-16 mb-8">Get involved</h2>
            <ul class="grid sm:grid-cols-2 gap-6 xl:gap-8">
                <li><a href="https://github.com/tailwindlabs/tailwindcss/discussions"
                        class="flex items-start space-x-4"><svg fill="currentColor"
                            class="flex-none text-gray-900 w-12 h-12">
                            <rect width="48" height="48" rx="12"></rect>
                            <path
                                d="M23.997 12a12 12 0 00-3.792 23.388c.6.12.816-.264.816-.576l-.012-2.04c-3.336.72-4.044-1.608-4.044-1.608-.552-1.392-1.332-1.764-1.332-1.764-1.08-.744.084-.72.084-.72 1.2.084 1.836 1.236 1.836 1.236 1.08 1.824 2.808 1.296 3.492.996.12-.78.42-1.308.756-1.608-2.664-.3-5.46-1.332-5.46-5.928 0-1.32.468-2.388 1.236-3.228a4.32 4.32 0 01.12-3.168s1.008-.324 3.3 1.224a11.496 11.496 0 016 0c2.292-1.56 3.3-1.224 3.3-1.224.66 1.644.24 2.88.12 3.168.768.84 1.236 1.92 1.236 3.228 0 4.608-2.808 5.616-5.484 5.916.432.372.816 1.104.816 2.22l-.012 3.3c0 .312.216.696.828.576A12 12 0 0023.997 12z"
                                fill="currentColor" class="text-gray-50"></path>
                        </svg>
                        <div class="flex-auto">
                            <h3 class="font-bold text-gray-900">GitHub Discussions</h3>
                            <p>Connect with members of the Tailwind CSS community.</p>
                        </div>
                    </a></li>
                <li><a href="/discord" class="flex items-start space-x-4"><svg fill="currentColor"
                            class="flex-none text-indigo-400 w-12 h-12">
                            <rect width="48" height="48" rx="12"></rect>
                            <path
                                d="M21.637 23.57c-.745 0-1.332.653-1.332 1.45 0 .797.6 1.45 1.332 1.45.744 0 1.332-.653 1.332-1.45.013-.797-.588-1.45-1.332-1.45zm4.767 0c-.744 0-1.332.653-1.332 1.45 0 .797.6 1.45 1.332 1.45.745 0 1.332-.653 1.332-1.45 0-.797-.587-1.45-1.332-1.45z"
                                fill="currentColor" class="text-indigo-50"></path>
                            <path
                                d="M32.75 12.613H15.248a2.684 2.684 0 00-2.678 2.69v17.66a2.684 2.684 0 002.678 2.69h14.811l-.692-2.416 1.672 1.554 1.58 1.463 2.809 2.482V15.304a2.684 2.684 0 00-2.678-2.69zm-5.042 17.058s-.47-.561-.862-1.058c1.711-.483 2.364-1.554 2.364-1.554-.535.353-1.045.6-1.502.77a8.591 8.591 0 01-1.894.562 9.151 9.151 0 01-3.383-.013 10.964 10.964 0 01-1.92-.561 7.652 7.652 0 01-.953-.445c-.04-.026-.078-.039-.117-.065-.027-.013-.04-.026-.053-.039-.235-.13-.365-.222-.365-.222s.627 1.045 2.285 1.541c-.392.497-.875 1.084-.875 1.084-2.886-.091-3.983-1.985-3.983-1.985 0-4.206 1.88-7.615 1.88-7.615C20.211 18.661 22 18.7 22 18.7l.131.157c-2.35.679-3.435 1.71-3.435 1.71s.287-.156.77-.378c1.398-.614 2.508-.784 2.965-.823.079-.013.144-.026.223-.026a10.647 10.647 0 016.57 1.228s-1.033-.98-3.253-1.66l.183-.208s1.79-.04 3.67 1.371c0 0 1.881 3.41 1.881 7.615 0 0-1.11 1.894-3.997 1.985z"
                                fill="currentColor" class="text-indigo-50"></path>
                        </svg>
                        <div class="flex-auto">
                            <h3 class="font-bold text-gray-900">Discord</h3>
                            <p>Join our Discord group to chat with other Tailwind users.</p>
                        </div>
                    </a></li>
                <li><a href="https://twitter.com/tailwindcss" class="flex items-start space-x-4"><svg fill="currentColor"
                            class="flex-none text-light-blue-400 w-12 h-12">
                            <rect width="48" height="48" rx="12"></rect>
                            <path
                                d="M37.127 15.989h-.001a11.04 11.04 0 01-3.093.836 5.336 5.336 0 002.37-2.932 10.815 10.815 0 01-3.421 1.284 5.42 5.42 0 00-3.933-1.679c-2.976 0-5.385 2.373-5.385 5.3-.003.406.044.812.138 1.207a15.351 15.351 0 01-11.102-5.54 5.235 5.235 0 00-.733 2.663c0 1.837.959 3.461 2.406 4.413a5.338 5.338 0 01-2.449-.662v.066c0 2.57 1.86 4.708 4.32 5.195a5.55 5.55 0 01-1.418.186c-.34 0-.68-.033-1.013-.099.684 2.106 2.676 3.637 5.034 3.68a10.918 10.918 0 01-6.69 2.269 11.21 11.21 0 01-1.285-.077 15.237 15.237 0 008.242 2.394c9.918 0 15.337-8.077 15.337-15.083 0-.23-.006-.459-.017-.683a10.864 10.864 0 002.686-2.746l.007.008z"
                                fill="currentColor" class="text-light-blue-50"></path>
                        </svg>
                        <div class="flex-auto">
                            <h3 class="font-bold text-gray-900">Twitter</h3>
                            <p>Follow the Tailwind Twitter account for news and updates.</p>
                        </div>
                    </a></li>
                <li><a href="https://www.youtube.com/tailwindlabs" class="flex items-start space-x-4"><svg
                            fill="currentColor" class="flex-none text-red-500 w-12 h-12">
                            <rect width="48" height="48" rx="12"></rect>
                            <path
                                d="M36.83 18.556c0-2.285-1.681-4.124-3.758-4.124a184.713 184.713 0 00-8.615-.182h-.914c-2.925 0-5.799.05-8.612.183-2.072 0-3.753 1.848-3.753 4.133A75.6 75.6 0 0011 23.99a78.487 78.487 0 00.173 5.429c0 2.285 1.68 4.139 3.753 4.139 2.955.137 5.987.198 9.07.192 3.087.01 6.11-.054 9.069-.193 2.077 0 3.758-1.853 3.758-4.138.121-1.813.177-3.62.172-5.434a73.982 73.982 0 00-.165-5.428zM21.512 28.97v-9.979l7.363 4.987-7.363 4.992z"
                                fill="currentColor" class="text-red-50"></path>
                        </svg>
                        <div class="flex-auto">
                            <h3 class="font-bold text-gray-900">YouTube</h3>
                            <p>Watch screencasts and feature tutorials of Tailwind.</p>
                        </div>
                    </a></li>
            </ul>
        </section>


        <div class="grid sm:grid-cols-3 gap-8 sm:gap-6 xl:gap-8 pb-10 border-b border-gray-200">
            <section>
                <h2 class="text-xl text-gray-900 font-bold mb-4">JavaScript<span class="sr-only">: Headless
                        UI</span>
                </h2><a href="https://headlessui.dev/"
                    class="h-40 xl:h-48 rounded-3xl bg-gray-900 mb-6 flex items-center justify-center p-6">
                    <div class="w-60 max-w-full">
                        <div class="relative" style="padding-top: 25%;"><span class="sr-only">Headless
                                UI</span><svg xmlns="http://www.w3.org/2000/svg" width="240" height="60" fill="none"
                                viewBox="0 0 240 60" class="absolute inset-0 w-full h-full">
                                <path fill="#fff"
                                    d="M72.165 23.711c-2.245 0-4.03.821-5.12 2.529v-8.67h-3.568v22.99h3.568v-8.802c0-3.35 1.85-4.73 4.196-4.73 2.246 0 3.7 1.314 3.7 3.81v9.722h3.568V30.477c0-4.27-2.642-6.766-6.343-6.766zM84.333 33.86h13.15c.066-.46.132-.986.132-1.478 0-4.73-3.37-8.67-8.292-8.67-5.188 0-8.722 3.777-8.722 8.637 0 4.927 3.534 8.639 8.986 8.639 3.238 0 5.715-1.348 7.235-3.58l-2.94-1.709c-.793 1.15-2.28 2.037-4.262 2.037-2.643 0-4.724-1.314-5.287-3.875v-.001zm-.032-2.89c.495-2.463 2.312-4.04 4.988-4.04 2.148 0 4.23 1.215 4.725 4.04h-9.713zm28.615-6.832v2.331c-1.256-1.707-3.205-2.758-5.783-2.758-4.493 0-8.226 3.744-8.226 8.638 0 4.86 3.733 8.639 8.226 8.639 2.578 0 4.527-1.052 5.783-2.793v2.366h3.567V24.137h-3.567v.001zm-5.22 13.466c-2.974 0-5.221-2.2-5.221-5.255 0-3.054 2.247-5.255 5.221-5.255 2.973 0 5.22 2.2 5.22 5.255 0 3.054-2.247 5.256-5.22 5.256v-.001zM132.9 17.57v8.9c-1.256-1.708-3.205-2.759-5.782-2.759-4.493 0-8.226 3.744-8.226 8.638 0 4.86 3.733 8.639 8.226 8.639 2.577 0 4.526-1.052 5.782-2.793v2.366h3.568V17.569H132.9zm-5.22 20.035c-2.973 0-5.22-2.202-5.22-5.256 0-3.054 2.247-5.255 5.22-5.255s5.22 2.2 5.22 5.255c0 3.054-2.247 5.256-5.22 5.256zm12.121 2.955h3.568V16.584h-3.568V40.56zm9.693-6.7h13.15c.066-.46.132-.986.132-1.478 0-4.73-3.37-8.67-8.293-8.67-5.187 0-8.722 3.777-8.722 8.637 0 4.927 3.535 8.639 8.987 8.639 3.237 0 5.715-1.348 7.235-3.58l-2.94-1.709c-.794 1.15-2.28 2.037-4.263 2.037-2.642 0-4.724-1.314-5.286-3.875v-.001zm-.032-2.89c.495-2.463 2.312-4.04 4.988-4.04 2.147 0 4.229 1.215 4.725 4.04h-9.713zm18.187-2.299c0-1.182 1.123-1.741 2.412-1.741 1.355 0 2.511.591 3.105 1.872l3.007-1.675c-1.156-2.168-3.403-3.416-6.112-3.416-3.37 0-6.046 1.937-6.046 5.026 0 5.879 8.887 4.236 8.887 7.16 0 1.313-1.222 1.839-2.808 1.839-1.817 0-3.139-.887-3.668-2.365l-3.072 1.774c1.057 2.364 3.436 3.843 6.74 3.843 3.568 0 6.442-1.775 6.442-5.06 0-6.075-8.887-4.268-8.887-7.257zm13.403 0c0-1.182 1.123-1.741 2.411-1.741 1.355 0 2.511.591 3.106 1.872l3.006-1.675c-1.156-2.168-3.403-3.416-6.112-3.416-3.37 0-6.046 1.937-6.046 5.026 0 5.879 8.887 4.236 8.887 7.16 0 1.313-1.222 1.839-2.808 1.839-1.817 0-3.139-.887-3.667-2.365l-3.072 1.774c1.056 2.364 3.436 3.843 6.739 3.843 3.569 0 6.443-1.775 6.443-5.06 0-6.075-8.887-4.268-8.887-7.257zm27.213 8.1c2.476 0 4.309-1.47 4.309-3.882V25.36h-2.218v7.352c0 1.087-.58 1.902-2.091 1.902-1.511 0-2.09-.815-2.09-1.903v-7.35h-2.202v7.527c0 2.412 1.833 3.882 4.292 3.882zm6.629-11.41V36.55h2.219V25.36h-2.219z">
                                </path>
                                <path fill="#fff" fill-rule="evenodd"
                                    d="M216.232 19.996h-11.483c-2.537 0-4.593 2.045-4.593 4.566v11.416c0 2.521 2.056 4.566 4.593 4.566h11.483c2.537 0 4.593-2.044 4.593-4.566V24.562c0-2.521-2.056-4.566-4.593-4.566zm-11.483-2.283c-3.805 0-6.89 3.067-6.89 6.848v11.417c0 3.782 3.085 6.848 6.89 6.848h11.483c3.805 0 6.89-3.066 6.89-6.848V24.562c0-3.782-3.085-6.848-6.89-6.848h-11.483v-.001z"
                                    clip-rule="evenodd"></path>
                                <path fill="#fff" fill-rule="evenodd"
                                    d="M204.749 19.995h11.483c2.537 0 4.593 2.045 4.593 4.566v11.416c0 2.522-2.056 4.566-4.593 4.566h-11.483c-2.537 0-4.593-2.044-4.593-4.566V24.562c0-2.522 2.056-4.567 4.593-4.567zm-6.89 4.566c0-3.782 3.085-6.848 6.89-6.848h11.483c3.805 0 6.89 3.066 6.89 6.848v11.416c0 3.783-3.085 6.849-6.89 6.849h-11.483c-3.805 0-6.89-3.066-6.89-6.85V24.562z"
                                    clip-rule="evenodd"></path>
                                <path fill="url(#headless-ui_svg__paint0_linear)"
                                    d="M23.17 34.37l22.096-7.334c-.44-2.744-.754-4.579-1.12-5.978-.392-1.505-.704-1.908-.827-2.048a4.308 4.308 0 00-1.552-1.12c-.171-.073-.653-.243-2.214-.15-1.649.1-3.816.435-7.247.975-3.43.54-5.596.887-7.195 1.3-1.514.39-1.92.7-2.06.822-.487.423-.872.95-1.127 1.543-.073.17-.245.649-.15 2.201.1 1.64.437 3.794.98 7.204.152.955.288 1.812.416 2.585z">
                                </path>
                                <path fill="url(#headless-ui_svg__paint1_linear)" fill-rule="evenodd"
                                    d="M17.078 32.678c-1.05-6.597-1.577-9.895-.437-12.543a9.998 9.998 0 012.63-3.6c2.18-1.895 5.499-2.418 12.136-3.463s9.954-1.567 12.618-.435a10.054 10.054 0 013.62 2.614c1.906 2.169 2.432 5.469 3.483 12.066 1.051 6.598 1.578 9.896.438 12.545a10 10 0 01-2.63 3.599c-2.181 1.894-5.5 2.417-12.136 3.462-6.637 1.045-9.955 1.567-12.62.435a10.054 10.054 0 01-3.62-2.614c-1.904-2.17-2.43-5.47-3.482-12.067v.001zm11.707 11.715c1.777-.107 4.065-.462 7.454-.996 3.388-.534 5.674-.898 7.399-1.343 1.67-.43 2.44-.85 2.937-1.282a6.43 6.43 0 001.69-2.314c.26-.603.424-1.46.32-3.172-.108-1.768-.466-4.042-1.003-7.41-.536-3.37-.903-5.642-1.35-7.357-.433-1.66-.856-2.425-1.29-2.918a6.464 6.464 0 00-2.328-1.681c-.605-.258-1.468-.422-3.19-.318-1.778.107-4.066.463-7.455.997-3.389.533-5.675.897-7.4 1.341-1.67.431-2.438.851-2.936 1.283a6.43 6.43 0 00-1.69 2.314c-.26.603-.424 1.46-.32 3.172.107 1.768.466 4.042 1.003 7.411.536 3.369.903 5.642 1.35 7.355.433 1.661.857 2.426 1.29 2.92a6.463 6.463 0 002.327 1.68c.606.258 1.469.422 3.192.317v.001z"
                                    clip-rule="evenodd"></path>
                                <defs>
                                    <linearGradient id="headless-ui_svg__paint0_linear" x1="30.183" x2="35.863" y1="12.001"
                                        y2="47.711" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#66E3FF"></stop>
                                        <stop offset="1" stop-color="#7064F9"></stop>
                                    </linearGradient>
                                    <linearGradient id="headless-ui_svg__paint1_linear" x1="30.183" x2="35.864" y1="12"
                                        y2="47.711" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#66E3FF"></stop>
                                        <stop offset="1" stop-color="#7064F9"></stop>
                                    </linearGradient>
                                </defs>
                            </svg></div>
                    </div>
                </a>
                <p>Completely unstyled, fully accessible UI components, designed to integrate beautifully with Tailwind CSS.
                </p>
            </section>
            <section>
                <h2 class="text-xl text-gray-900 font-bold mb-4">Icons<span class="sr-only">: Heroicons</span></h2>
                <a href="https://heroicons.com/"
                    class="relative flex h-40 xl:h-48 rounded-3xl bg-gradient-to-br from-violet-600 to-purple-500 mb-6">
                    <div class="absolute inset-0 flex items-center justify-center p-6 bg-contain"
                        style="background-image: url(&quot;/_next/static/media/heroicons-bg.fdbaa28ae8446332a61619794c459a77.svg&quot;);">
                        <div class="w-60 max-w-full">
                            <div class="relative" style="padding-top: 25%;"><span
                                    class="sr-only">Heroicons</span><svg xmlns="http://www.w3.org/2000/svg"
                                    width="240" height="60" fill="none" viewBox="0 0 240 60"
                                    class="absolute inset-0 w-full h-full">
                                    <path fill="#fff"
                                        d="M88.503 24.216c-2.15 0-3.817.802-4.78 2.245V18.25h-4.137v22.452h4.138v-8.66c0-2.79 1.507-3.977 3.528-3.977 1.86 0 3.175 1.122 3.175 3.303v9.334h4.138v-9.847c0-4.266-2.662-6.64-6.062-6.64zm12.449 10.167h12.092c.097-.545.161-1.09.161-1.7 0-4.714-3.368-8.467-8.115-8.467-5.036 0-8.468 3.688-8.468 8.468 0 4.779 3.4 8.467 8.789 8.467 3.079 0 5.484-1.25 6.992-3.432l-3.336-1.924c-.706.93-1.988 1.603-3.592 1.603-2.181 0-3.945-.898-4.523-3.015zm-.064-3.207c.481-2.053 1.989-3.24 4.202-3.24 1.732 0 3.464.93 3.977 3.24h-8.179zm18.701-3.753v-2.758h-4.137v16.037h4.137v-7.666c0-3.367 2.727-4.33 4.876-4.073v-4.619c-2.021 0-4.042.898-4.876 3.08zm13.693 13.728c4.715 0 8.499-3.688 8.499-8.468 0-4.779-3.784-8.467-8.499-8.467-4.715 0-8.468 3.688-8.468 8.468 0 4.779 3.753 8.467 8.468 8.467zm0-4.041c-2.438 0-4.33-1.828-4.33-4.426s1.892-4.427 4.33-4.427c2.469 0 4.362 1.828 4.362 4.427 0 2.598-1.893 4.426-4.362 4.426zm12.821-14.37c1.412 0 2.566-1.154 2.566-2.533 0-1.38-1.154-2.566-2.566-2.566-1.379 0-2.534 1.186-2.534 2.566 0 1.379 1.155 2.534 2.534 2.534zm-2.052 17.962h4.137V24.665h-4.137v16.037zm14.916.449c3.144 0 5.87-1.668 7.249-4.17l-3.592-2.052c-.642 1.315-2.021 2.117-3.689 2.117-2.469 0-4.298-1.829-4.298-4.362 0-2.566 1.829-4.395 4.298-4.395 1.636 0 3.015.834 3.657 2.15l3.56-2.085c-1.315-2.47-4.041-4.138-7.185-4.138-4.875 0-8.467 3.688-8.467 8.468 0 4.779 3.592 8.467 8.467 8.467zm16.179 0c4.715 0 8.5-3.688 8.5-8.468 0-4.779-3.785-8.467-8.5-8.467s-8.467 3.688-8.467 8.468c0 4.779 3.752 8.467 8.467 8.467zm0-4.041c-2.437 0-4.33-1.828-4.33-4.426s1.893-4.427 4.33-4.427c2.47 0 4.362 1.828 4.362 4.427 0 2.598-1.892 4.426-4.362 4.426zm19.686-12.894c-2.149 0-3.817.802-4.779 2.245v-1.796h-4.138v16.037h4.138v-8.66c0-2.79 1.507-3.977 3.528-3.977 1.86 0 3.175 1.122 3.175 3.303v9.334h4.138v-9.847c0-4.266-2.662-6.64-6.062-6.64zm12.77 5.004c0-.866.834-1.316 1.861-1.316 1.186 0 2.084.61 2.566 1.636l3.528-1.924c-1.251-2.213-3.496-3.4-6.094-3.4-3.304 0-6.094 1.828-6.094 5.1 0 5.645 8.275 4.362 8.275 6.703 0 .93-.898 1.38-2.213 1.38-1.604 0-2.695-.77-3.144-2.085l-3.592 2.02c1.155 2.47 3.528 3.817 6.736 3.817 3.432 0 6.447-1.668 6.447-5.132 0-5.901-8.276-4.426-8.276-6.8z">
                                    </path>
                                    <path stroke="#AC94FA" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                        d="M43.328 14.608a26.329 26.329 0 0015.953 5.613c.247 1.331.376 2.705.376 4.111 0 10.272-6.905 18.937-16.329 21.597C33.904 43.269 27 34.604 27 24.332c0-1.406.13-2.78.376-4.112a26.328 26.328 0 0015.952-5.612z">
                                    </path>
                                </svg></div>
                        </div>
                    </div>
                </a>
                <p>A set of free MIT-licensed high-quality SVG icons for you to use in your web projects.</p>
            </section>
            <section>
                <h2 class="text-xl text-gray-900 font-bold mb-4">Patterns<span class="sr-only">:
                        Heropatterns</span>
                </h2><a href="https://www.heropatterns.com/"
                    class="relative flex h-40 xl:h-48 rounded-3xl bg-gradient-to-br from-cyan-600 to-teal-500 mb-6">
                    <div class="absolute inset-0 flex items-center justify-center p-6 bg-cover"
                        style="background-image: url(&quot;/_next/static/media/heropatterns-bg.c2cf738690295dca4780cfdcba97c95f.svg&quot;);">
                        <div class="w-60 max-w-full">
                            <div class="relative" style="padding-top: 25%;"><span
                                    class="sr-only">Heropatterns</span><svg xmlns="http://www.w3.org/2000/svg"
                                    width="240" height="60" fill="none" viewBox="0 0 240 60"
                                    class="absolute inset-0 w-full h-full">
                                    <path fill="#fff"
                                        d="M64.503 24.214c-2.15 0-3.817.802-4.78 2.245v-8.211h-4.137V40.7h4.138v-8.66c0-2.79 1.507-3.977 3.528-3.977 1.86 0 3.175 1.122 3.175 3.303V40.7h4.138v-9.847c0-4.266-2.662-6.64-6.062-6.64zm12.449 10.168h12.092a9.56 9.56 0 00.16-1.7c0-4.715-3.367-8.468-8.114-8.468-5.036 0-8.468 3.689-8.468 8.468s3.4 8.467 8.789 8.467c3.079 0 5.484-1.25 6.992-3.432l-3.336-1.924c-.705.93-1.988 1.604-3.592 1.604-2.181 0-3.945-.899-4.523-3.015zm-.064-3.208c.481-2.053 1.989-3.24 4.202-3.24 1.732 0 3.464.93 3.977 3.24h-8.179zm18.702-3.753v-2.758h-4.138V40.7h4.137v-7.666c0-3.367 2.727-4.33 4.876-4.073v-4.619c-2.021 0-4.042.898-4.876 3.08zm13.692 13.729c4.715 0 8.499-3.69 8.499-8.468 0-4.78-3.784-8.468-8.499-8.468-4.715 0-8.468 3.689-8.468 8.468s3.753 8.467 8.468 8.467zm0-4.042c-2.438 0-4.33-1.828-4.33-4.426 0-2.599 1.892-4.427 4.33-4.427 2.469 0 4.362 1.829 4.362 4.427s-1.893 4.426-4.362 4.426zm20.102-12.894c-2.341 0-4.041.866-5.196 2.341v-1.892h-4.137v22.452h4.137v-8.307c1.155 1.475 2.855 2.341 5.196 2.341 4.298 0 7.826-3.688 7.826-8.467 0-4.78-3.528-8.468-7.826-8.468zm-.77 12.99c-2.533 0-4.426-1.828-4.426-4.522 0-2.695 1.893-4.523 4.426-4.523 2.566 0 4.459 1.828 4.459 4.523 0 2.694-1.893 4.522-4.459 4.522zm23.061-12.541v1.892c-1.154-1.443-2.886-2.341-5.228-2.341-4.266 0-7.794 3.689-7.794 8.468s3.528 8.467 7.794 8.467c2.342 0 4.074-.898 5.228-2.341V40.7h4.138V24.663h-4.138zm-4.458 12.541c-2.534 0-4.426-1.828-4.426-4.522 0-2.695 1.892-4.523 4.426-4.523 2.566 0 4.458 1.828 4.458 4.523 0 2.694-1.892 4.522-4.458 4.522zm20.88-8.564v-3.977h-3.625v-4.49l-4.137 1.25v3.24h-2.791v3.977h2.791v6.672c0 4.33 1.956 6.03 7.762 5.388v-3.753c-2.374.129-3.625.097-3.625-1.635V28.64h3.625zm10.822 0v-3.977h-3.624v-4.49l-4.138 1.25v3.24h-2.79v3.977h2.79v6.672c0 4.33 1.957 6.03 7.762 5.388v-3.753c-2.373.129-3.624.097-3.624-1.635V28.64h3.624zm5.271 5.742h12.092a9.58 9.58 0 00.16-1.7c0-4.715-3.367-8.468-8.114-8.468-5.036 0-8.468 3.689-8.468 8.468s3.4 8.467 8.788 8.467c3.079 0 5.485-1.25 6.993-3.432l-3.336-1.924c-.706.93-1.989 1.604-3.593 1.604-2.181 0-3.945-.899-4.522-3.015zm-.064-3.208c.481-2.053 1.988-3.24 4.202-3.24 1.732 0 3.464.93 3.977 3.24h-8.179zm18.701-3.753v-2.758h-4.138V40.7h4.138v-7.666c0-3.367 2.726-4.33 4.875-4.073v-4.619c-2.02 0-4.041.898-4.875 3.08zm15.57-3.207c-2.149 0-3.816.802-4.779 2.245v-1.796h-4.137V40.7h4.137v-8.66c0-2.79 1.508-3.977 3.528-3.977 1.861 0 3.176 1.122 3.176 3.303V40.7h4.137v-9.847c0-4.266-2.662-6.64-6.062-6.64zm12.771 5.004c0-.866.834-1.316 1.86-1.316 1.187 0 2.085.61 2.566 1.636l3.528-1.924c-1.251-2.213-3.496-3.4-6.094-3.4-3.304 0-6.094 1.828-6.094 5.1 0 5.645 8.275 4.362 8.275 6.703 0 .93-.898 1.38-2.213 1.38-1.604 0-2.694-.77-3.143-2.085l-3.593 2.02c1.155 2.47 3.529 3.817 6.736 3.817 3.432 0 6.447-1.668 6.447-5.132 0-5.901-8.275-4.426-8.275-6.8z">
                                    </path>
                                    <path stroke="#AFECEF" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                        d="M19.328 14.608a26.329 26.329 0 0015.953 5.613c.247 1.331.376 2.705.376 4.111 0 10.272-6.905 18.937-16.329 21.597C9.904 43.269 3 34.604 3 24.332c0-1.406.13-2.78.376-4.112a26.328 26.328 0 0015.952-5.612z">
                                    </path>
                                </svg></div>
                        </div>
                    </div>
                </a>
                <p>A set of free MIT-licensed high-quality SVG patterns for you to use in your web projects.</p>
            </section>
        </div>
    </div>
@endsection
