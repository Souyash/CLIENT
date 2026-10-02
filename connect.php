<!DOCTYPE html>
<html lang="en" class="h-full antialiased scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Secretariat & Jan Sunwai Cell | Sh. Subhakumar Singh • MLA</title>
    <meta name="description" content="Connect directly with the office of Sh. Subhakumar Singh, MLA Jewar. Submit citizen grievances, book appointments, or reach field secretariats.">
    <meta name="author" content="Office of MLA Subhakumar Singh">
    <link rel="canonical" href="connect.html">

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
            <a href="media.html" class="font-serif text-sm font-medium text-white/80 hover:text-orange-400 transition-colors">Media Desk</a>
            <a href="connect.html" class="font-serif text-sm font-medium text-orange-400 border-b-2 border-orange-500 pb-0.5">Secretariat</a>
        </nav>

        <div class="flex items-center gap-2.5 sm:gap-4">
            <a href="#grievance-form" class="hidden sm:inline-flex items-center gap-2 bg-orange-600 hover:bg-orange-500 text-white text-xs font-bold uppercase tracking-wider px-5 py-2.5 rounded-full transition-all shadow-lg active:scale-95">
                <i class="fas fa-paper-plane text-xs"></i>
                <span>Direct Transmit</span>
            </a>
            <!-- Language Translator Toggle Button (English <-> Hindi) -->
            <button id="langToggleBtn" onclick="toggleLanguage()" class="flex items-center gap-1.5 sm:gap-2 px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-full bg-white/10 hover:bg-orange-600 border border-white/20 text-white text-[11px] sm:text-xs font-bold transition-all shadow-md active:scale-95 group" title="Change Language / भाषा बदलें">
                <i class="fas fa-language text-orange-400 group-hover:text-white text-sm sm:text-base"></i>
                <span id="currentLangLabel">हिंदी (Hindi)</span>
            </button>
            <button id="mobileMenuBtn" onclick="toggleMobileMenu()" aria-expanded="false" aria-controls="mobileMenu" class="p-2 rounded-xl lg:hidden bg-white/10 text-white hover:bg-orange-600 border border-white/10 hover:border-orange-500 transition-all cursor-pointer shadow-md" aria-label="Toggle Navigation">
                <i class="fas fa-bars text-lg transition-transform duration-300" id="menuIcon"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Backdrop Overlay -->
    <div id="mobileMenuBackdrop" onclick="closeMobileMenu()" class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm z-[998] hidden opacity-0 transition-opacity duration-300 lg:hidden"></div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobileMenu" class="fixed inset-x-0 top-[54px] sm:top-[66px] md:top-[74px] z-[999] bg-[#0d1527]/98 backdrop-blur-2xl border-b border-slate-800 shadow-2xl transition-all duration-300 ease-in-out -translate-y-full opacity-0 pointer-events-none lg:hidden max-h-[calc(100vh-60px)] overflow-y-auto">
        <div class="p-5 sm:p-6 flex flex-col gap-3">
            <!-- Language Switcher in Mobile Drawer -->
            <div class="py-2.5 px-3.5 rounded-xl bg-white/5 border border-white/10 flex items-center justify-between">
                <span class="text-xs text-slate-300 font-mono uppercase tracking-wider flex items-center gap-2">
                    <i class="fas fa-globe text-orange-400"></i> Language / भाषा
                </span>
                <button onclick="toggleLanguage()" class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 text-white text-xs font-bold hover:bg-orange-600 border border-white/20 transition-colors">
                    <i class="fas fa-language text-orange-400"></i>
                    <span class="mobileLangLabel">हिंदी (Hindi)</span>
                </button>
            </div>

            <!-- Navigation Links -->
            <div class="flex flex-col gap-1 pt-1">
                <a href="index.html" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl font-serif text-base text-white hover:bg-white/5 hover:text-orange-400 transition-colors group" onclick="closeMobileMenu()">
                    <span class="flex items-center gap-3">
                        <i class="fas fa-home text-sm text-slate-400 group-hover:text-orange-400 w-5 text-center"></i>
                        <span>Home</span>
                    </span>
                    <i class="fas fa-chevron-right text-xs text-slate-600 group-hover:text-orange-400 transition-transform group-hover:translate-x-1"></i>
                </a>
                <a href="about.html" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl font-serif text-base text-white hover:bg-white/5 hover:text-orange-400 transition-colors group" onclick="closeMobileMenu()">
                    <span class="flex items-center gap-3">
                        <i class="fas fa-user-tie text-sm text-slate-400 group-hover:text-orange-400 w-5 text-center"></i>
                        <span>About MLA</span>
                    </span>
                    <i class="fas fa-chevron-right text-xs text-slate-600 group-hover:text-orange-400 transition-transform group-hover:translate-x-1"></i>
                </a>
                <a href="development.html" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl font-serif text-base text-white hover:bg-white/5 hover:text-orange-400 transition-colors group" onclick="closeMobileMenu()">
                    <span class="flex items-center gap-3">
                        <i class="fas fa-city text-sm text-slate-400 group-hover:text-orange-400 w-5 text-center"></i>
                        <span>Development Works</span>
                    </span>
                    <i class="fas fa-chevron-right text-xs text-slate-600 group-hover:text-orange-400 transition-transform group-hover:translate-x-1"></i>
                </a>
                <a href="reports.html" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl font-serif text-base text-white hover:bg-white/5 hover:text-orange-400 transition-colors group" onclick="closeMobileMenu()">
                    <span class="flex items-center gap-3">
                        <i class="fas fa-folder-open text-sm text-slate-400 group-hover:text-orange-400 w-5 text-center"></i>
                        <span>192 Village Dossiers</span>
                    </span>
                    <i class="fas fa-chevron-right text-xs text-slate-600 group-hover:text-orange-400 transition-transform group-hover:translate-x-1"></i>
                </a>
                <a href="noida-international-airport.html" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl font-serif text-base text-white hover:bg-white/5 hover:text-orange-400 transition-colors group" onclick="closeMobileMenu()">
                    <span class="flex items-center gap-3">
                        <i class="fas fa-plane-departure text-sm text-slate-400 group-hover:text-orange-400 w-5 text-center"></i>
                        <span>Noida Airport Hub</span>
                    </span>
                    <i class="fas fa-chevron-right text-xs text-slate-600 group-hover:text-orange-400 transition-transform group-hover:translate-x-1"></i>
                </a>
                <a href="media.html" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl font-serif text-base text-white hover:bg-white/5 hover:text-orange-400 transition-colors group" onclick="closeMobileMenu()">
                    <span class="flex items-center gap-3">
                        <i class="fas fa-newspaper text-sm text-slate-400 group-hover:text-orange-400 w-5 text-center"></i>
                        <span>Media &amp; Press Desk</span>
                    </span>
                    <i class="fas fa-chevron-right text-xs text-slate-600 group-hover:text-orange-400 transition-transform group-hover:translate-x-1"></i>
                </a>
                <a href="connect.html" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl font-serif text-base text-orange-400 bg-white/5 font-semibold transition-colors group" onclick="closeMobileMenu()">
                    <span class="flex items-center gap-3">
                        <i class="fas fa-envelope-open-text text-sm text-orange-400 w-5 text-center"></i>
                        <span>Public Secretariat</span>
                    </span>
                    <i class="fas fa-check text-xs text-orange-400"></i>
                </a>
            </div>

            <!-- Mobile Public Cell CTA -->
            <div class="pt-3 border-t border-slate-800 flex flex-col gap-3">
                <a href="connect.html" onclick="closeMobileMenu()" class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-orange-600 to-amber-600 hover:from-orange-500 hover:to-amber-500 text-white text-xs font-bold uppercase tracking-wider py-3 px-4 rounded-xl shadow-lg active:scale-[0.99] transition-all">
                    <i class="fas fa-paper-plane text-xs"></i>
                    <span>Citizen Helpdesk / Public Cell</span>
                </a>

                <!-- Social Links in Drawer -->
                <div class="flex items-center justify-around py-2 px-4 rounded-xl bg-white/[0.03] border border-white/5 text-slate-300">
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="p-2 hover:text-orange-400 transition-colors" aria-label="Facebook">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="p-2 hover:text-orange-400 transition-colors" aria-label="X Twitter">
                        <i class="fab fa-x-twitter text-sm"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="p-2 hover:text-orange-400 transition-colors" aria-label="Instagram">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="https://whatsapp.com" target="_blank" rel="noopener noreferrer" class="p-2 hover:text-orange-400 transition-colors" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <main class="flex-grow pt-24">
        <!-- Hero Section -->
        <section class="relative bg-[#0d1527] text-white py-12 sm:py-16 md:py-24 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="images/jan-chaupal.jpg" class="w-full h-full object-cover scale-105 filter blur-[1px] opacity-30" alt="Public Grievance Chaupal Background">
                <div class="absolute inset-0 bg-gradient-to-r from-[#0d1527] via-[#0d1527]/90 to-[#0d1527]/60"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0d1527] via-transparent to-[#0d1527]"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="inline-flex items-center gap-2.5 px-3.5 sm:px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6 text-orange-400 text-xs font-black uppercase tracking-widest">
                    <i class="fas fa-headset text-xs"></i>
                    <span>Public Secretariat • Jan Sunwai Cell</span>
                </div>
                
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-10 items-center justify-between mb-8 sm:mb-10">
                    <div class="max-w-2xl text-center lg:text-left">
                        <h1 class="text-3xl sm:text-5xl md:text-6xl font-serif font-bold tracking-tight text-white leading-[1.15] mb-4">
                            Public Secretariat. <br>
                            <span class="italic text-orange-500 font-medium">Always within Reach.</span>
                        </h1>
                        
                        <p class="text-sm sm:text-base md:text-lg text-slate-300 font-light leading-relaxed mb-6">
                            Transparent governance begins with direct accessibility. Submit your petitions, civic complaints, or development recommendations directly to the administrative cell.
                        </p>
                        <div class="flex flex-wrap justify-center lg:justify-start gap-2.5 sm:gap-3 items-center">
                            <span class="inline-flex items-center gap-2 px-3 sm:px-3.5 py-1.5 rounded-full bg-orange-600/20 border border-orange-500/30 text-orange-400 text-xs font-mono font-semibold">
                                <i class="fas fa-ticket-alt"></i> Auto Token Tracking
                            </span>
                            <span class="inline-flex items-center gap-2 px-3 sm:px-3.5 py-1.5 rounded-full bg-white/10 border border-white/20 text-slate-300 text-xs font-mono font-semibold">
                                <i class="fab fa-whatsapp"></i> Direct WhatsApp Desk
                            </span>
                        </div>
                    </div>

                    <!-- Prominent Jan Sunwai Hero Image Card -->
                    <div class="shrink-0 w-full lg:w-auto flex justify-center mt-4 lg:mt-0">
                        <div class="relative w-72 sm:w-80 md:w-96 rounded-3xl overflow-hidden border-4 border-orange-500/30 shadow-2xl shadow-black/80 group">
                            <div class="h-56 sm:h-60 md:h-64 overflow-hidden">
                                <img src="images/jan-chaupal.jpg" alt="Jan Sunwai Public Grievance Chaupal" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            </div>
                            <div class="p-4 bg-slate-900/95 border-t border-white/10 backdrop-blur-md">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-serif text-sm font-bold text-white">Daily Jan Sunwai Open Desk</p>
                                        <p class="text-[11px] font-mono text-orange-400 mt-0.5">Constituents with Sh. Subhakumar Singh</p>
                                    </div>
                                    <span class="px-2.5 py-1 rounded-full bg-emerald-500/20 text-emerald-400 text-[10px] font-mono font-bold uppercase">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Reach Counters -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 max-w-4xl pt-4 border-t border-white/15">
                    <div class="p-3.5 sm:p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="text-2xl sm:text-3xl font-serif font-bold text-orange-400">4 Hours</p>
                        <p class="text-[10px] sm:text-[11px] font-mono text-slate-400 uppercase tracking-wider mt-1">Average First Response</p>
                    </div>
                    <div class="p-3.5 sm:p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="text-2xl sm:text-3xl font-serif font-bold text-white">48 Hours</p>
                        <p class="text-[10px] sm:text-[11px] font-mono text-slate-400 uppercase tracking-wider mt-1">Civic Redress Mandate</p>
                    </div>
                    <div class="p-3.5 sm:p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="text-2xl sm:text-3xl font-serif font-bold text-orange-400">100%</p>
                        <p class="text-[10px] sm:text-[11px] font-mono text-slate-400 uppercase tracking-wider mt-1">Encrypted Submissions</p>
                    </div>
                    <div class="p-3.5 sm:p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="text-2xl sm:text-3xl font-serif font-bold text-white">Daily</p>
                        <p class="text-[10px] sm:text-[11px] font-mono text-slate-400 uppercase tracking-wider mt-1">Open Jan Chaupal</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Connect Grid: Form + Office Directory -->
        <section id="grievance-form" class="py-12 sm:py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                    
                    <!-- Left Column: Form -->
                    <div class="lg:col-span-7 bg-slate-50 border border-slate-200/80 rounded-3xl sm:rounded-[2.5rem] p-6 sm:p-8 md:p-12 shadow-sm">
                        
                        <div class="mb-8">
                            <span class="text-xs font-mono font-bold uppercase tracking-widest text-orange-600">Encrypted Administrative Link</span>
                            <h3 class="text-2xl md:text-3xl font-serif font-bold text-slate-900 mt-1">Citizen Redressal &amp; Appointment Desk</h3>
                            <p class="text-xs text-slate-500 mt-2">Every petition receives an automated digital tracking ID and direct administrative follow-up.</p>
                        </div>

                        <!-- Success Alert -->
                        <div id="formSuccessAlert" class="hidden mb-6 p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-check-circle text-emerald-600 text-xl"></i>
                                <div>
                                    <p class="font-bold">Petition Transmitted Successfully!</p>
                                    <p class="text-xs text-emerald-700 mt-0.5">Tracking Reference: <strong id="ticketId" class="font-mono text-slate-900">REP-000000</strong></p>
                                </div>
                            </div>
                        </div>

                        <form id="citizenForm" onsubmit="handleFormSubmit(event)" class="space-y-5">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-mono font-bold text-slate-700 uppercase mb-2">Full Name *</label>
                                    <input type="text" id="citizenName" required placeholder="Sh. Rahul Sharma" class="w-full px-4 py-3.5 rounded-2xl bg-white border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-orange-500">
                                </div>
                                <div>
                                    <label class="block text-xs font-mono font-bold text-slate-700 uppercase mb-2">Contact Number *</label>
                                    <input type="tel" id="citizenPhone" required placeholder="+91 98765 43210" class="w-full px-4 py-3.5 rounded-2xl bg-white border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-orange-500">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-mono font-bold text-slate-700 uppercase mb-2">Email Address</label>
                                    <input type="email" id="citizenEmail" placeholder="citizen@example.com" class="w-full px-4 py-3.5 rounded-2xl bg-white border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-orange-500">
                                </div>
                                <div>
                                    <label class="block text-xs font-mono font-bold text-slate-700 uppercase mb-2">Block / Village *</label>
                                    <input type="text" id="citizenVillage" required placeholder="Veerampur, Jewar Block" class="w-full px-4 py-3.5 rounded-2xl bg-white border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-orange-500">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-mono font-bold text-slate-700 uppercase mb-2">Service Type *</label>
                                <select id="citizenCategory" required class="w-full px-4 py-3.5 rounded-2xl bg-white border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-orange-500">
                                    <option value="Civic Grievance">Civic / Infrastructure Grievance (Roads, Water, Power)</option>
                                    <option value="General Query">General Administrative Query</option>
                                    <option value="Welfare Assistance">Citizen Social Welfare / Pension Support</option>
                                    <option value="Meeting Invitation">Meeting / Appointment Request with MLA</option>
                                    <option value="Public Feedback">Policy Suggestion or Development Feedback</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-mono font-bold text-slate-700 uppercase mb-2">Detailed Message *</label>
                                <textarea id="citizenMessage" rows="5" required placeholder="Please provide specific details of your grievance or suggestion..." class="w-full px-4 py-3.5 rounded-2xl bg-white border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-orange-500"></textarea>
                            </div>

                            <button type="submit" class="w-full py-4 bg-orange-600 hover:bg-orange-500 text-white rounded-2xl font-bold text-xs uppercase tracking-widest transition-all shadow-xl active:scale-95 flex items-center justify-center gap-2">
                                <i class="fas fa-paper-plane text-xs"></i>
                                <span>Transmit Message to Administrative Cell</span>
                            </button>
                        </form>

                    </div>

                    <!-- Right Column: Secretariat Directory -->
                    <div class="lg:col-span-5 space-y-6">
                        
                        <div class="p-6 sm:p-8 rounded-3xl sm:rounded-[2rem] bg-slate-900 text-white shadow-xl space-y-4">
                            <span class="px-3 py-1 rounded-full bg-orange-500/20 text-orange-400 font-mono text-[10px] font-bold uppercase tracking-wider">
                                Central Headquarters
                            </span>
                            <h4 class="text-2xl font-serif font-bold">Office of MLA Subhakumar Singh</h4>
                            <p class="text-xs text-slate-300 font-light leading-relaxed">
                                Main GT Road, Jewar Central, Gautam Buddha Nagar, Uttar Pradesh — PIN 203135
                            </p>
                            <div class="pt-4 border-t border-slate-800 space-y-2 text-xs font-mono">
                                <p class="text-slate-300"><strong class="text-orange-400">Timings:</strong> Mon–Sat, 9:30 AM – 6:00 PM</p>
                                <p class="text-slate-300"><strong class="text-orange-400">Official Helpline:</strong> +91 120 289 4500</p>
                                <p class="text-slate-300"><strong class="text-orange-400">Email:</strong> secretariat@subhakumarsingh.in</p>
                            </div>
                        </div>

                        <div class="p-8 rounded-[2rem] bg-slate-50 border border-slate-200/80 shadow-sm space-y-4">
                            <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 font-mono text-[10px] font-bold uppercase tracking-wider">
                                Dankaur Camp Office
                            </span>
                            <h4 class="text-2xl font-serif font-bold text-slate-900">Dankaur Citizen Grievance Cell</h4>
                            <p class="text-xs text-slate-600 font-light leading-relaxed">
                                Block Administrative Complex, Dankaur, Uttar Pradesh — PIN 203201
                            </p>
                            <div class="pt-4 border-t border-slate-200 space-y-2 text-xs font-mono">
                                <p class="text-slate-600"><strong class="text-slate-900">Timings:</strong> Daily 10:00 AM – 5:00 PM</p>
                                <p class="text-slate-600"><strong class="text-slate-900">Camp Phone:</strong> +91 120 289 4501</p>
                            </div>
                        </div>

                        <div class="p-8 rounded-[2rem] bg-emerald-50 border border-emerald-200/80 shadow-sm space-y-4">
                            <div class="flex items-center gap-3 text-emerald-800">
                                <i class="fab fa-whatsapp text-2xl text-emerald-600"></i>
                                <h4 class="text-lg font-serif font-bold">Direct WhatsApp Public Desk</h4>
                            </div>
                            <p class="text-xs text-emerald-700 font-light leading-relaxed">
                                Send photos and location pins of localized municipal or electricity issues directly to our digital field coordinators.
                            </p>
                            <a href="https://whatsapp.com" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold font-mono text-emerald-700 hover:text-emerald-900">
                                Chat on WhatsApp (+91 98765 43210) &rarr;
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </section>
    </main>

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
                        <li><a href="media.html" class="hover:text-orange-400 transition-colors">Press &amp; Media Desk</a></li>
                        <li><a href="connect.html" class="text-orange-400">Jan Sunwai Grievances</a></li>
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
        function handleFormSubmit(e) {
            e.preventDefault();
            const randomId = "REP-" + Math.floor(100000 + Math.random() * 900000);
            document.getElementById('ticketId').textContent = randomId;
            const alertBox = document.getElementById('formSuccessAlert');
            alertBox.classList.remove('hidden');
            document.getElementById('citizenForm').reset();
            alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            if (!mobileMenu) return;
            const isOpen = mobileMenu.classList.contains('translate-y-0');
            if (isOpen) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        }

        function openMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const backdrop = document.getElementById('mobileMenuBackdrop');
            const menuIcon = document.getElementById('menuIcon');
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            if (!mobileMenu) return;

            mobileMenu.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
            mobileMenu.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto');

            if (backdrop) {
                backdrop.classList.remove('hidden');
                requestAnimationFrame(() => {
                    backdrop.classList.remove('opacity-0');
                    backdrop.classList.add('opacity-100');
                });
            }
            if (menuIcon) {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-times');
            }
            if (mobileMenuBtn) {
                mobileMenuBtn.setAttribute('aria-expanded', 'true');
            }
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const backdrop = document.getElementById('mobileMenuBackdrop');
            const menuIcon = document.getElementById('menuIcon');
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            if (!mobileMenu) return;

            mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto');
            mobileMenu.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');

            if (backdrop) {
                backdrop.classList.remove('opacity-100');
                backdrop.classList.add('opacity-0');
                setTimeout(() => {
                    backdrop.classList.add('hidden');
                }, 300);
            }
            if (menuIcon) {
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
            }
            if (mobileMenuBtn) {
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
            }
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeMobileMenu();
        });

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
