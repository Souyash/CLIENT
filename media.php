<!DOCTYPE html>
<html lang="en" class="h-full antialiased scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media, Press & Visual Documentation | Sh. Subhakumar Singh • MLA</title>
    <meta name="description" content="Official media center, press releases, video archives, and photo documentation of Sh. Subhakumar Singh, MLA Jewar.">
    <meta name="author" content="Office of MLA Subhakumar Singh">
    <link rel="canonical" href="media.html">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    colors: {
                        brand: {
                            orange: '#ea580c',
                            'orange-dark': '#c2410c',
                            'orange-light': '#fb923c',
                            navy: '#0d1527',
                            'navy-light': '#1e293b',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-nav {
            background: rgba(13, 21, 39, 0.92);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
    </style>
    <!-- Clean CSS for Google Translate -->
    <style>
        body { top: 0px !important; }
        .goog-te-banner-frame { display: none !important; }
        .goog-te-gadget { display: none !important; }
        .goog-te-gadget-icon { display: none !important; }
        .goog-logo-link { display: none !important; }
        .goog-te-gadget span { display: none !important; }
        #google_translate_element { display: none !important; }
        .skiptranslate > iframe { display: none !important; }
        #goog-gt-tt { display: none !important; }
        .goog-tooltip { display: none !important; }
        .goog-tooltip:hover { display: none !important; }
        .goog-text-highlight { background-color: transparent !important; box-shadow: none !important; }
    </style>
</head>
<body class="min-h-full flex flex-col font-sans bg-slate-50 text-slate-900 selection:bg-orange-600 selection:text-white">

    <!-- HEADER / NAVIGATION -->
    <header class="fixed top-0 left-0 right-0 z-[1000] flex items-center justify-between px-4 py-2.5 sm:px-6 sm:py-3.5 md:px-12 md:py-4 transition-all duration-300 glass-nav">
        <a class="flex items-center gap-2.5 sm:gap-3.5 group select-none outline-none" href="index.html">
            <div class="relative flex h-9 w-9 sm:h-11 sm:w-11 items-center justify-center rounded-full bg-white overflow-hidden shadow-md border-2 border-orange-600 transition-transform duration-300 group-hover:scale-105">
                <i class="fas fa-landmark text-orange-600 text-sm sm:text-lg"></i>
            </div>
            <div class="flex flex-col">
                <span class="font-serif text-base sm:text-lg md:text-xl font-bold tracking-tight text-white group-hover:text-orange-400 transition-colors">
                    Subhakumar Singh
                </span>
                <span class="text-[8px] sm:text-[10px] font-black tracking-[0.15em] sm:tracking-[0.2em] uppercase text-orange-400">
                    MLA • Jewar Constituency
                </span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden lg:flex items-center gap-7">
            <a href="index.html" class="font-serif text-sm font-medium text-white/80 hover:text-orange-400 transition-colors">Home</a>
            <a href="about.html" class="font-serif text-sm font-medium text-white/80 hover:text-orange-400 transition-colors">About MLA</a>
            <a href="development.html" class="font-serif text-sm font-medium text-white/80 hover:text-orange-400 transition-colors">Development</a>
            <a href="reports.html" class="font-serif text-sm font-medium text-white/80 hover:text-orange-400 transition-colors">Reports &amp; Dossiers</a>
            <a href="noida-international-airport.html" class="font-serif text-sm font-medium text-white/80 hover:text-orange-400 transition-colors">Noida Airport</a>
            <a href="media.html" class="font-serif text-sm font-medium text-orange-400 border-b-2 border-orange-500 pb-0.5">Media Desk</a>
            <a href="connect.html" class="font-serif text-sm font-medium text-white/80 hover:text-orange-400 transition-colors">Secretariat</a>
        </nav>

        <div class="flex items-center gap-2.5 sm:gap-4">
            <a href="connect.html" class="hidden sm:inline-flex items-center gap-2 bg-orange-600 hover:bg-orange-500 text-white text-xs font-bold uppercase tracking-wider px-5 py-2.5 rounded-full transition-all shadow-lg active:scale-95">
                <i class="fas fa-paper-plane text-xs"></i>
                <span>Public Cell</span>
            </a>
            <!-- Language Translator Toggle Button (English <-> Hindi) -->
            <button id="langToggleBtn" onclick="toggleLanguage()" class="flex items-center gap-1.5 sm:gap-2 px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-full bg-white/10 hover:bg-orange-600 border border-white/20 text-white text-[11px] sm:text-xs font-bold transition-all shadow-md active:scale-95 group" title="Change Language / भाषा बदलें">
                <i class="fas fa-language text-orange-400 group-hover:text-white text-sm sm:text-base"></i>
                <span id="currentLangLabel">हिंदी (Hindi)</span>
            </button>
            <button id="mobileMenuBtn" onclick="toggleMobileMenu()" class="p-1.5 sm:p-2 rounded-xl lg:hidden bg-white/10 text-white hover:bg-white/20 transition-colors cursor-pointer" aria-label="Toggle Navigation">
                <i class="fas fa-bars text-base sm:text-lg" id="menuIcon"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Drawer -->
    <div id="mobileMenu" class="fixed inset-x-0 top-[54px] sm:top-[66px] md:top-[74px] z-[999] bg-[#0d1527] border-b border-slate-800 p-6 flex flex-col gap-4 text-white lg:hidden hidden shadow-2xl transition-all">
        <!-- Language Switcher in Mobile Drawer -->
        <div class="py-2.5 px-2 border-b border-slate-800 flex items-center justify-between">
            <span class="text-xs text-slate-400 font-mono uppercase">Language / भाषा</span>
            <button onclick="toggleLanguage()" class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 text-white text-xs font-bold hover:bg-orange-600 border border-white/20">
                <i class="fas fa-language text-orange-400"></i>
                <span class="mobileLangLabel">हिंदी (Hindi)</span>
            </button>
        </div>

        <a href="index.html" class="font-serif text-lg py-2 border-b border-slate-800 hover:text-orange-400">Home</a>
        <a href="about.html" class="font-serif text-lg py-2 border-b border-slate-800 hover:text-orange-400">About MLA</a>
        <a href="development.html" class="font-serif text-lg py-2 border-b border-slate-800 hover:text-orange-400">Development</a>
        <a href="reports.html" class="font-serif text-lg py-2 border-b border-slate-800 hover:text-orange-400">Reports &amp; Dossiers</a>
        <a href="noida-international-airport.html" class="font-serif text-lg py-2 border-b border-slate-800 hover:text-orange-400">Noida Airport</a>
        <a href="media.html" class="font-serif text-lg py-2 border-b border-slate-800 text-orange-400">Media Desk</a>
        <a href="connect.html" class="font-serif text-lg py-2 hover:text-orange-400">Public Secretariat</a>
    </div>

    <main class="flex-grow pt-24">
        <!-- Hero Section -->
        <section class="relative bg-[#0d1527] text-white py-12 sm:py-16 md:py-24 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="images/press-conference.jpg" class="w-full h-full object-cover scale-105 filter blur-[1px] opacity-30" alt="Press Conference Background">
                <div class="absolute inset-0 bg-gradient-to-r from-[#0d1527] via-[#0d1527]/90 to-[#0d1527]/60"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0d1527] via-transparent to-[#0d1527]"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="inline-flex items-center gap-2.5 px-3.5 sm:px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6 text-orange-400 text-xs font-black uppercase tracking-widest">
                    <i class="fas fa-bullhorn text-xs"></i>
                    <span>Official Media Command • Press Bureau</span>
                </div>
                
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-10 items-center justify-between mb-8 sm:mb-10">
                    <div class="max-w-2xl text-center lg:text-left">
                        <h1 class="text-3xl sm:text-5xl md:text-6xl font-serif font-bold tracking-tight text-white leading-[1.15] mb-4">
                            Media, Press &amp; <br>
                            <span class="italic text-orange-500 font-medium">Public Documentation.</span>
                        </h1>
                        
                        <p class="text-sm sm:text-base md:text-lg text-slate-300 font-light leading-relaxed mb-6">
                            Real-time updates, official legislative statements, and visual ground documentation of Jewar's transformative growth under Sh. Subhakumar Singh, MLA.
                        </p>
                        <div class="flex flex-wrap justify-center lg:justify-start gap-2.5 sm:gap-3 items-center">
                            <span class="inline-flex items-center gap-2 px-3 sm:px-3.5 py-1.5 rounded-full bg-orange-600/20 border border-orange-500/30 text-orange-400 text-xs font-mono font-semibold">
                                <i class="fas fa-broadcast-tower"></i> Live Media Desk
                            </span>
                            <span class="inline-flex items-center gap-2 px-3 sm:px-3.5 py-1.5 rounded-full bg-white/10 border border-white/20 text-slate-300 text-xs font-mono font-semibold">
                                <i class="fas fa-camera"></i> High-Res Photo Desk
                            </span>
                        </div>
                    </div>

                    <!-- Prominent Press Hero Image Card -->
                    <div class="shrink-0 w-full lg:w-auto flex justify-center mt-4 lg:mt-0">
                        <div class="relative w-72 sm:w-80 md:w-96 rounded-3xl overflow-hidden border-4 border-orange-500/30 shadow-2xl shadow-black/80 group">
                            <div class="h-56 sm:h-60 md:h-64 overflow-hidden">
                                <img src="images/press-conference.jpg" alt="Press Conference by Sh. Subhakumar Singh" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            </div>
                            <div class="p-4 bg-slate-900/95 border-t border-white/10 backdrop-blur-md">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-serif text-sm font-bold text-white">Press Briefing &amp; Public Address</p>
                                        <p class="text-[11px] font-mono text-orange-400 mt-0.5">Vidhan Sabha Media Gallery</p>
                                    </div>
                                    <span class="px-2.5 py-1 rounded-full bg-rose-500/20 text-rose-400 text-[10px] font-mono font-bold uppercase animate-pulse">Official</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4 Performance Metric Chips -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 max-w-4xl pt-4 border-t border-white/15">
                    <div class="p-3.5 sm:p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="text-2xl sm:text-3xl font-serif font-bold text-orange-400">100+</p>
                        <p class="text-[10px] sm:text-[11px] font-mono text-slate-400 uppercase tracking-wider mt-1">Official Press Releases</p>
                    </div>
                    <div class="p-3.5 sm:p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="text-2xl sm:text-3xl font-serif font-bold text-white">50+</p>
                        <p class="text-[10px] sm:text-[11px] font-mono text-slate-400 uppercase tracking-wider mt-1">High-Res Ground Photos</p>
                    </div>
                    <div class="p-3.5 sm:p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="text-2xl sm:text-3xl font-serif font-bold text-orange-400">10+</p>
                        <p class="text-[10px] sm:text-[11px] font-mono text-slate-400 uppercase tracking-wider mt-1">Video Reports &amp; Speeches</p>
                    </div>
                    <div class="p-3.5 sm:p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="text-2xl sm:text-3xl font-serif font-bold text-white">2.5k</p>
                        <p class="text-[10px] sm:text-[11px] font-mono text-slate-400 uppercase tracking-wider mt-1">Citizen Interactions</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Media Filter Tabs & Content -->
        <section class="py-12 sm:py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Media Type Tabs -->
                <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-8 sm:mb-12">
                    <button onclick="setMediaTab('all')" id="tabAll" class="px-4 sm:px-6 py-2 sm:py-2.5 rounded-full text-xs font-bold transition-all bg-orange-600 text-white shadow-md">
                        All Updates
                    </button>
                    <button onclick="setMediaTab('press')" id="tabPress" class="px-4 sm:px-6 py-2 sm:py-2.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-600 hover:bg-slate-200">
                        Press Releases (100+)
                    </button>
                    <button onclick="setMediaTab('photos')" id="tabPhotos" class="px-4 sm:px-6 py-2 sm:py-2.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-600 hover:bg-slate-200">
                        Photo Gallery (50+)
                    </button>
                    <button onclick="setMediaTab('videos')" id="tabVideos" class="px-4 sm:px-6 py-2 sm:py-2.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-600 hover:bg-slate-200">
                        Video Archive (10+)
                    </button>
                </div>

                <!-- 1. Press Releases Grid -->
                <div id="pressSection" class="space-y-6">
                    <div class="flex items-center justify-between border-b border-slate-200 pb-4 mb-6">
                        <h3 class="text-2xl font-serif font-bold text-slate-900">Official Press Releases &amp; Briefings</h3>
                        <span class="text-xs font-mono text-orange-600 font-bold">Verified Legislative Desk</span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        
                        <div class="p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-orange-500/40 hover:shadow-lg transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between text-xs font-mono text-slate-400 mb-3">
                                    <span class="px-2.5 py-0.5 rounded-full bg-blue-50 text-blue-700 font-bold uppercase">Infrastructure</span>
                                    <span>May 10, 2026</span>
                                </div>
                                <h4 class="text-xl font-serif font-bold text-slate-900 mb-2">Jewar Airport Terminal 1 Structural Inspection</h4>
                                <p class="text-xs text-slate-500 font-light leading-relaxed mb-4">
                                    Sh. Subhakumar Singh inspected the final roof truss assembly and baggage handling grid alongside aviation concessionaires.
                                </p>
                            </div>
                            <a href="#" class="text-xs font-bold uppercase text-orange-600 hover:text-orange-700">Read Statement &rarr;</a>
                        </div>

                        <div class="p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-orange-500/40 hover:shadow-lg transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between text-xs font-mono text-slate-400 mb-3">
                                    <span class="px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold uppercase">Citizen Dialogue</span>
                                    <span>May 08, 2026</span>
                                </div>
                                <h4 class="text-xl font-serif font-bold text-slate-900 mb-2">Jan-Chaupal at Dayanatpur Village</h4>
                                <p class="text-xs text-slate-500 font-light leading-relaxed mb-4">
                                    Direct citizen consultation reviewing the newly sanctioned senior secondary STEM smart school and solar feeder line.
                                </p>
                            </div>
                            <a href="#" class="text-xs font-bold uppercase text-orange-600 hover:text-orange-700">Read Statement &rarr;</a>
                        </div>

                        <div class="p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-orange-500/40 hover:shadow-lg transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between text-xs font-mono text-slate-400 mb-3">
                                    <span class="px-2.5 py-0.5 rounded-full bg-purple-50 text-purple-700 font-bold uppercase">Public Policy</span>
                                    <span>May 05, 2026</span>
                                </div>
                                <h4 class="text-xl font-serif font-bold text-slate-900 mb-2">UP Lift &amp; Elevator Safety Act Implementation</h4>
                                <p class="text-xs text-slate-500 font-light leading-relaxed mb-4">
                                    Statewide notification of the landmark high-rise elevator safety legislation championed on the floor of the Assembly.
                                </p>
                            </div>
                            <a href="#" class="text-xs font-bold uppercase text-orange-600 hover:text-orange-700">Read Statement &rarr;</a>
                        </div>

                    </div>
                </div>

                <!-- 2. Photo Gallery Grid -->
                <div id="photosSection" class="mt-16 pt-12 border-t border-slate-200">
                    <div class="flex items-center justify-between border-b border-slate-200 pb-4 mb-8">
                        <h3 class="text-2xl font-serif font-bold text-slate-900">Ground Photo Documentation</h3>
                        <span class="text-xs font-mono text-orange-600 font-bold">50+ Verified Archives</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                        
                        <div class="relative aspect-square rounded-2xl overflow-hidden group cursor-pointer shadow" onclick="openLightbox('images/project-inspection.jpg', 'Airport Terminal Concourse Inspection by MLA')">
                            <img src="images/project-inspection.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Concourse Inspection">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-4 flex items-end">
                                <p class="text-xs text-white font-medium">Airport Concourse Inspection</p>
                            </div>
                        </div>

                        <div class="relative aspect-square rounded-2xl overflow-hidden group cursor-pointer shadow" onclick="openLightbox('images/jan-chaupal.jpg', 'Jan Chaupal Direct Farmer Dialogue with Sh. Subhakumar Singh')">
                            <img src="images/jan-chaupal.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Jan Chaupal Dialogue">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-4 flex items-end">
                                <p class="text-xs text-white font-medium">Jan Chaupal Farmer Dialogue</p>
                            </div>
                        </div>

                        <div class="relative aspect-square rounded-2xl overflow-hidden group cursor-pointer shadow" onclick="openLightbox('images/press-conference.jpg', 'Press Conference on High-Rise Safety & Industrial Corridors')">
                            <img src="images/press-conference.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Electronics Park Foundation">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-4 flex items-end">
                                <p class="text-xs text-white font-medium">YEIDA Electronics Park Foundation</p>
                            </div>
                        </div>

                        <div class="relative aspect-square rounded-2xl overflow-hidden group cursor-pointer shadow" onclick="openLightbox('images/mla-portrait.jpg', 'Official Portrait & Assembly Mandate of Sh. Subhakumar Singh')">
                            <img src="images/mla-portrait.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Hospital Review">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-4 flex items-end">
                                <p class="text-xs text-white font-medium">Kasna Hospital Wing Review</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- 3. Video Archive Grid -->
                <div id="videosSection" class="mt-16 pt-12 border-t border-slate-200">
                    <div class="flex items-center justify-between border-b border-slate-200 pb-4 mb-8">
                        <h3 class="text-2xl font-serif font-bold text-slate-900">Legislative &amp; Public Video Archive</h3>
                        <span class="text-xs font-mono text-orange-600 font-bold">10+ Speeches &amp; Documentaries</span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        
                        <div class="rounded-3xl overflow-hidden bg-slate-900 text-white shadow-xl">
                            <div class="relative aspect-video bg-slate-800 flex items-center justify-center group cursor-pointer">
                                <img src="images/project-inspection.jpg" class="w-full h-full object-cover opacity-60" alt="Documentary Thumbnail">
                                <div class="absolute w-16 h-16 rounded-full bg-orange-600 text-white flex items-center justify-center text-xl shadow-2xl group-hover:scale-110 transition-transform">
                                    <i class="fas fa-play ml-1"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <span class="text-[10px] font-mono text-orange-400 uppercase font-bold">Special Documentary</span>
                                <h4 class="text-xl font-serif font-bold mt-1">The Jewar Model: How Direct Dialogue Transformed India's Aviation Map</h4>
                                <p class="text-xs text-slate-400 font-light mt-2 leading-relaxed">
                                    An in-depth investigative recap of the 100% voluntary farmer acquisition and community consensus building.
                                </p>
                            </div>
                        </div>

                        <div class="rounded-3xl overflow-hidden bg-slate-900 text-white shadow-xl">
                            <div class="relative aspect-video bg-slate-800 flex items-center justify-center group cursor-pointer">
                                <img src="images/press-conference.jpg" class="w-full h-full object-cover opacity-60" alt="Assembly Speech Thumbnail">
                                <div class="absolute w-16 h-16 rounded-full bg-orange-600 text-white flex items-center justify-center text-xl shadow-2xl group-hover:scale-110 transition-transform">
                                    <i class="fas fa-play ml-1"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <span class="text-[10px] font-mono text-orange-400 uppercase font-bold">Vidhan Sabha Speech</span>
                                <h4 class="text-xl font-serif font-bold mt-1">Legislative Assembly Address on High-Rise Safety &amp; Agrarian Rights</h4>
                                <p class="text-xs text-slate-400 font-light mt-2 leading-relaxed">
                                    Floor address defending farmer compensation rights and presenting the UP Lift Safety Act draft.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </main>

    <!-- Lightbox Modal for Photo Gallery -->
    <div id="lightboxModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/90 backdrop-blur-md hidden transition-opacity" onclick="closeLightbox()">
        <div class="relative max-w-4xl max-h-[90vh] flex flex-col items-center" onclick="event.stopPropagation()">
            <button onclick="closeLightbox()" class="absolute -top-12 right-0 text-white text-2xl hover:text-orange-400">
                <i class="fas fa-times"></i>
            </button>
            <img id="lightboxImg" src="" class="max-w-full max-h-[80vh] rounded-2xl shadow-2xl object-contain" alt="Lightbox Preview">
            <p id="lightboxCaption" class="text-white text-sm font-medium mt-4 text-center"></p>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-[#0a0f1d] text-white pt-16 pb-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-slate-800">
                <div class="space-y-4">
                    <h4 class="font-serif text-xl font-bold text-white">Subhakumar Singh</h4>
                    <p class="text-xs text-slate-400 font-light leading-relaxed">
                        Member of Legislative Assembly (MLA) • Jewar. Committed to fearless transparency, rapid infrastructure, and public dignity.
                    </p>
                </div>
                <div>
                    <h5 class="text-xs font-mono font-bold uppercase tracking-widest text-slate-300 mb-4">Constituency</h5>
                    <ul class="space-y-2 text-xs text-slate-400 font-light">
                        <li><a href="development.html" class="hover:text-orange-400 transition-colors">Development Works</a></li>
                        <li><a href="reports.html" class="hover:text-orange-400 transition-colors">192 Village Dossier</a></li>
                        <li><a href="noida-international-airport.html" class="hover:text-orange-400 transition-colors">Noida Airport Blueprint</a></li>
                        <li><a href="index.html#map-section" class="hover:text-orange-400 transition-colors">Multimodal GIS Grid</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-xs font-mono font-bold uppercase tracking-widest text-slate-300 mb-4">Public Cell</h5>
                    <ul class="space-y-2 text-xs text-slate-400 font-light">
                        <li><a href="about.html" class="hover:text-orange-400 transition-colors">Legislative Profile</a></li>
                        <li><a href="media.html" class="text-orange-400">Press &amp; Media Desk</a></li>
                        <li><a href="connect.html" class="hover:text-orange-400 transition-colors">Jan Sunwai Grievances</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-xs font-mono font-bold uppercase tracking-widest text-slate-300 mb-4">Official Secretariat</h5>
                    <p class="text-xs text-slate-400 font-light leading-relaxed mb-2">
                        Main GT Road, Jewar Central, Gautam Buddha Nagar, UP 203135
                    </p>
                    <p class="text-xs text-orange-400 font-mono font-bold">Helpline: +91 120 289 4500</p>
                </div>
            </div>
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 font-light gap-4">
                <p>&copy; 2026 Office of Sh. Subhakumar Singh, MLA. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="privacy-policy.html" class="hover:text-slate-300 transition-colors">Privacy Policy</a>
                    <a href="terms.html" class="hover:text-slate-300 transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function setMediaTab(tab) {
            const tAll = document.getElementById('tabAll');
            const tPress = document.getElementById('tabPress');
            const tPhotos = document.getElementById('tabPhotos');
            const tVideos = document.getElementById('tabVideos');

            [tAll, tPress, tPhotos, tVideos].forEach(t => {
                t.className = "px-6 py-2.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-600 hover:bg-slate-200";
            });

            const secPress = document.getElementById('pressSection');
            const secPhotos = document.getElementById('photosSection');
            const secVideos = document.getElementById('videosSection');

            if (tab === 'all') {
                tAll.className = "px-6 py-2.5 rounded-full text-xs font-bold transition-all bg-orange-600 text-white shadow-md";
                secPress.style.display = 'block';
                secPhotos.style.display = 'block';
                secVideos.style.display = 'block';
            } else if (tab === 'press') {
                tPress.className = "px-6 py-2.5 rounded-full text-xs font-bold transition-all bg-orange-600 text-white shadow-md";
                secPress.style.display = 'block';
                secPhotos.style.display = 'none';
                secVideos.style.display = 'none';
            } else if (tab === 'photos') {
                tPhotos.className = "px-6 py-2.5 rounded-full text-xs font-bold transition-all bg-orange-600 text-white shadow-md";
                secPress.style.display = 'none';
                secPhotos.style.display = 'block';
                secVideos.style.display = 'none';
            } else if (tab === 'videos') {
                tVideos.className = "px-6 py-2.5 rounded-full text-xs font-bold transition-all bg-orange-600 text-white shadow-md";
                secPress.style.display = 'none';
                secPhotos.style.display = 'none';
                secVideos.style.display = 'block';
            }
        }

        function openLightbox(src, caption) {
            document.getElementById('lightboxImg').src = src;
            document.getElementById('lightboxCaption').textContent = caption;
            document.getElementById('lightboxModal').classList.remove('hidden');
        }

        function closeLightbox() {
            document.getElementById('lightboxModal').classList.add('hidden');
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeLightbox();
        });

        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('menuIcon');
            if (!mobileMenu) return;
            mobileMenu.classList.toggle('hidden');
            if (menuIcon) {
                if (mobileMenu.classList.contains('hidden')) {
                    menuIcon.classList.remove('fa-times');
                    menuIcon.classList.add('fa-bars');
                } else {
                    menuIcon.classList.remove('fa-bars');
                    menuIcon.classList.add('fa-times');
                }
            }
        }

        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('menuIcon');
            if (mobileMenu) mobileMenu.classList.add('hidden');
            if (menuIcon) {
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
            }
        }

        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', toggleMobileMenu);
        }
    </script>

    <!-- Google Translate Element & Controller -->
    <div id="google_translate_element" style="display:none;"></div>
    <script type="text/javascript" src="translator.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
