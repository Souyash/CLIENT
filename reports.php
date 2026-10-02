<!DOCTYPE html>
<html lang="en" class="h-full antialiased scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Village Development Dossiers & Public Audit | Sh. Subhakumar Singh • MLA</title>
    <meta name="description" content="Itemized public development audit and budget tracking across 192 villages in Jewar & Dankaur blocks under Sh. Subhakumar Singh, MLA.">
    <meta name="author" content="Office of MLA Subhakumar Singh">
    <link rel="canonical" href="reports.html">

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
            <a href="reports.html" class="font-serif text-sm font-medium text-orange-400 border-b-2 border-orange-500 pb-0.5">Reports &amp; Dossiers</a>
            <a href="noida-international-airport.html" class="font-serif text-sm font-medium text-white/80 hover:text-orange-400 transition-colors">Noida Airport</a>
            <a href="media.html" class="font-serif text-sm font-medium text-white/80 hover:text-orange-400 transition-colors">Media Desk</a>
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
                <a href="reports.html" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl font-serif text-base text-orange-400 bg-white/5 font-semibold transition-colors group" onclick="closeMobileMenu()">
                    <span class="flex items-center gap-3">
                        <i class="fas fa-folder-open text-sm text-orange-400 w-5 text-center"></i>
                        <span>192 Village Dossiers</span>
                    </span>
                    <i class="fas fa-check text-xs text-orange-400"></i>
                </a>
                <a href="noida-international-airport.html" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl font-serif text-base text-white hover:bg-white/5 hover:text-orange-400 transition-colors group" onclick="closeMobileMenu()">
                    <span class="flex items-center gap-3">
                        <i class="fas fa-plane-departure text-sm text-orange-400 w-5 text-center"></i>
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
                <a href="connect.html" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl font-serif text-base text-white hover:bg-white/5 hover:text-orange-400 transition-colors group" onclick="closeMobileMenu()">
                    <span class="flex items-center gap-3">
                        <i class="fas fa-envelope-open-text text-sm text-slate-400 group-hover:text-orange-400 w-5 text-center"></i>
                        <span>Public Secretariat</span>
                    </span>
                    <i class="fas fa-chevron-right text-xs text-slate-600 group-hover:text-orange-400 transition-transform group-hover:translate-x-1"></i>
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
                <img src="images/jan-chaupal.jpg" class="w-full h-full object-cover scale-105 filter blur-[1px] opacity-30" alt="Village Jan Chaupal Background">
                <div class="absolute inset-0 bg-gradient-to-r from-[#0d1527] via-[#0d1527]/90 to-[#0d1527]/60"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0d1527] via-transparent to-[#0d1527]"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="inline-flex items-center gap-2.5 px-3.5 sm:px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6 text-orange-400 text-xs font-black uppercase tracking-widest">
                    <i class="fas fa-file-invoice-dollar text-xs"></i>
                    <span>Public Accountability &amp; Civic Audit</span>
                </div>
                
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-10 items-center justify-between mb-8">
                    <div class="max-w-2xl text-center lg:text-left">
                        <h1 class="text-3xl sm:text-5xl md:text-6xl font-serif font-bold tracking-tight text-white leading-[1.15] mb-4">
                            Village Development <br>
                            <span class="italic text-orange-500 font-medium">Dossiers &amp; Ledger.</span>
                        </h1>
                        
                        <p class="text-sm sm:text-base md:text-lg text-slate-300 font-light leading-relaxed mb-4">
                            An itemized, village-by-village accounting of infrastructure investments across Jewar and Dankaur blocks. Total Sanctioned Outlay: <strong class="text-white font-semibold">₹648.50 Crores</strong> across 192 units.
                        </p>
                    </div>

                    <!-- Hero Visual Card -->
                    <div class="shrink-0 w-full lg:w-auto flex justify-center mt-2 lg:mt-0">
                        <div class="relative w-72 sm:w-80 rounded-2xl overflow-hidden border-2 border-orange-500/30 shadow-2xl bg-slate-900/90 backdrop-blur-md">
                            <div class="h-40 sm:h-44 overflow-hidden">
                                <img src="images/jan-chaupal.jpg" alt="Village Development Jan Chaupal" class="w-full h-full object-cover">
                            </div>
                            <div class="p-3.5 flex items-center justify-between">
                                <div>
                                    <p class="text-xs font-serif font-bold text-white">192 Villages Covered</p>
                                    <p class="text-[10px] font-mono text-orange-400">Direct Citizen Oversight</p>
                                </div>
                                <span class="px-2.5 py-1 rounded-full bg-orange-500/20 text-orange-400 text-[10px] font-mono font-bold">100% Audited</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Search & Filter Control Capsule -->
                <div class="bg-white/10 backdrop-blur-xl border border-white/15 p-4 sm:p-5 rounded-3xl max-w-5xl shadow-2xl space-y-4">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <div class="relative flex-grow">
                            <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-sm"></i>
                            <input id="villageSearch" type="text" placeholder="Search village by name (e.g., Veerampur, Dankaur, Jewar, Mirjapur)..." class="w-full pl-11 pr-4 py-3 rounded-2xl bg-white/10 border border-white/10 text-white placeholder-slate-400 text-sm focus:outline-none focus:border-orange-500 transition-colors">
                        </div>
                        <div class="flex gap-2">
                            <select id="sortSelect" class="w-full sm:w-auto bg-slate-900 border border-white/20 text-white text-xs font-mono px-4 py-3 rounded-2xl focus:outline-none">
                                <option value="budget-high">Budget: High to Low</option>
                                <option value="budget-low">Budget: Low to High</option>
                                <option value="alpha">Name: A to Z</option>
                                <option value="roads">Most Roads First</option>
                            </select>
                        </div>
                    </div>

                    <!-- Filter Buttons -->
                    <div class="flex flex-wrap items-center gap-2 pt-2 border-t border-white/10">
                        <button onclick="setBlockFilter('all')" id="btnFilterAll" class="px-3.5 sm:px-4 py-2 rounded-full text-xs font-bold transition-all bg-orange-600 text-white">
                            All Villages (192)
                        </button>
                        <button onclick="setBlockFilter('Jewar')" id="btnFilterJewar" class="px-3.5 sm:px-4 py-2 rounded-full text-xs font-bold transition-all bg-white/5 border border-white/10 text-slate-300 hover:bg-white/10">
                            Jewar Block (89)
                        </button>
                        <button onclick="setBlockFilter('Dankaur')" id="btnFilterDankaur" class="px-3.5 sm:px-4 py-2 rounded-full text-xs font-bold transition-all bg-white/5 border border-white/10 text-slate-300 hover:bg-white/10">
                            Dankaur Block (103)
                        </button>
                        <button onclick="setBlockFilter('smart')" id="btnFilterSmart" class="px-3.5 sm:px-4 py-2 rounded-full text-xs font-bold transition-all bg-white/5 border border-white/10 text-slate-300 hover:bg-white/10">
                            ⭐ Flagship / Smart Villages
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dynamic Villages Grid Section -->
        <section class="py-12 sm:py-16 md:py-24 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-8">
                    <p id="resultsCount" class="text-xs font-mono text-slate-500 uppercase tracking-wider">
                        Showing 192 Village Dossiers
                    </p>
                    <span class="text-xs font-mono text-orange-600 font-bold">Audited &amp; Geotagged</span>
                </div>

                <!-- Grid Container for Village Cards -->
                <div id="villagesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Injected by JavaScript -->
                </div>

            </div>
        </section>
    </main>

    <!-- Modal for Detailed Village Breakdown -->
    <div id="villageModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md hidden transition-opacity">
        <div class="relative w-full max-w-2xl bg-white rounded-3xl sm:rounded-[2.5rem] p-6 sm:p-8 md:p-10 shadow-2xl border border-slate-100 max-h-[90vh] overflow-y-auto">
            <button onclick="closeVillageModal()" class="absolute top-6 right-6 h-10 w-10 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-900 flex items-center justify-center transition-colors">
                <i class="fas fa-times text-sm"></i>
            </button>

            <span id="modalBlockBadge" class="px-3 py-1 rounded-full bg-orange-100 text-orange-700 text-[10px] font-mono font-bold uppercase tracking-wider mb-2 inline-block">
                Jewar Block
            </span>
            <h3 id="modalVillageName" class="text-2xl md:text-3xl font-serif font-bold text-slate-900 mb-1">
                Veerampur (वीरमपुर)
            </h3>
            <p id="modalBudget" class="text-lg font-mono font-bold text-orange-600 mb-6">
                Total Budget: ₹78 Cr 53 Lakh 32 Thousand
            </p>

            <div class="border-t border-slate-100 pt-6 space-y-4">
                <p class="text-xs font-mono text-slate-400 uppercase tracking-wider">Audited Itemized Deliverables</p>
                <div class="grid grid-cols-3 gap-3">
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 text-center">
                        <p id="modalRoads" class="text-2xl font-bold font-mono text-slate-900">17</p>
                        <p class="text-[11px] text-slate-500 font-medium mt-1">Paved Roads</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 text-center">
                        <p id="modalPumps" class="text-2xl font-bold font-mono text-slate-900">20</p>
                        <p class="text-[11px] text-slate-500 font-medium mt-1">Clean Water Points</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 text-center">
                        <p id="modalWorks" class="text-2xl font-bold font-mono text-slate-900">4</p>
                        <p class="text-[11px] text-slate-500 font-medium mt-1">Institutional Works</p>
                    </div>
                </div>

                <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-100 text-emerald-800 text-xs leading-relaxed flex items-center gap-3">
                    <i class="fas fa-check-circle text-emerald-600 text-base"></i>
                    <span>All sanctioned works physically inspected and completed under MLA Subhakumar Singh's direct monitoring.</span>
                </div>
            </div>

            <div class="mt-8 flex justify-end">
                <button onclick="closeVillageModal()" class="px-6 py-2.5 bg-slate-950 text-white rounded-full font-bold text-xs uppercase tracking-widest hover:bg-orange-600 transition-colors">
                    Close Dossier
                </button>
            </div>
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
                        <li><a href="reports.html" class="text-orange-400">192 Village Dossier</a></li>
                        <li><a href="noida-international-airport.html" class="hover:text-orange-400 transition-colors">Noida Airport Blueprint</a></li>
                        <li><a href="index.html#map-section" class="hover:text-orange-400 transition-colors">Multimodal GIS Grid</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-xs font-mono font-bold uppercase tracking-widest text-slate-300 mb-4">Public Cell</h5>
                    <ul class="space-y-2 text-xs text-slate-400 font-light">
                        <li><a href="about.html" class="hover:text-orange-400 transition-colors">Legislative Profile</a></li>
                        <li><a href="media.html" class="hover:text-orange-400 transition-colors">Press &amp; Media Desk</a></li>
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
        // Data for Villages from dhirendrasingh.in reports
        const villagesData = [
            { name: "Veerampur", hindi: "वीरमपुर", block: "Jewar", budgetCr: 78.53, budgetText: "78 करोड़ 53 लाख 32 हजार", roads: 17, pumps: 20, works: 4, smart: true },
            { name: "Bhaipur Brahmnan", hindi: "भाईपुर ब्रह्मनान", block: "Jewar", budgetCr: 23.04, budgetText: "23 करोड़ 04 लाख 36 हजार", roads: 8, pumps: 6, works: 2, smart: true },
            { name: "Jewar Central", hindi: "जेवर नगर", block: "Jewar", budgetCr: 21.45, budgetText: "21 करोड़ 45 लाख 20 हजार", roads: 22, pumps: 2, works: 3, smart: false },
            { name: "Dankaur Dehat", hindi: "दनकौर देहात", block: "Dankaur", budgetCr: 19.42, budgetText: "19 करोड़ 42 लाख 51 हजार", roads: 7, pumps: 4, works: 3, smart: true },
            { name: "Mirjapur", hindi: "मिर्जापुर", block: "Dankaur", budgetCr: 18.32, budgetText: "18 करोड़ 32 लाख 51 हजार", roads: 7, pumps: 0, works: 21, smart: true },
            { name: "Ghanghola", hindi: "घंघौला", block: "Dankaur", budgetCr: 16.26, budgetText: "16 करोड़ 26 लाख 22 हजार", roads: 5, pumps: 3, works: 3, smart: true },
            { name: "Falda", hindi: "फलैदा", block: "Jewar", budgetCr: 16.25, budgetText: "16 करोड़ 25 लाख 14 हजार", roads: 37, pumps: 19, works: 7, smart: false },
            { name: "Rabupura", hindi: "रबूपुरा", block: "Jewar", budgetCr: 15.60, budgetText: "15 करोड़ 60 लाख 40 हजार", roads: 14, pumps: 12, works: 5, smart: true },
            { name: "Bilaspur Dehat", hindi: "बिलासपुर", block: "Dankaur", budgetCr: 14.85, budgetText: "14 करोड़ 85 लाख 10 हजार", roads: 11, pumps: 8, works: 4, smart: false },
            { name: "Rohillapur", hindi: "रोहिल्लापुर", block: "Jewar", budgetCr: 13.90, budgetText: "13 करोड़ 90 लाख 00 हजार", roads: 9, pumps: 7, works: 3, smart: false },
            { name: "Ataur", hindi: "अतौली", block: "Dankaur", budgetCr: 12.75, budgetText: "12 करोड़ 75 लाख 50 हजार", roads: 8, pumps: 10, works: 2, smart: false },
            { name: "Dayanatpur", hindi: "दयानतपुर", block: "Jewar", budgetCr: 12.40, budgetText: "12 करोड़ 40 लाख 00 हजार", roads: 12, pumps: 6, works: 4, smart: true },
            { name: "Kishorepur", hindi: "किशोरपुर", block: "Jewar", budgetCr: 11.20, budgetText: "11 करोड़ 20 लाख 00 हजार", roads: 6, pumps: 5, works: 2, smart: false },
            { name: "Ranhera", hindi: "रन्हेरा", block: "Jewar", budgetCr: 10.95, budgetText: "10 करोड़ 95 लाख 00 हजार", roads: 10, pumps: 8, works: 3, smart: true },
            { name: "Bhatona", hindi: "भटोना", block: "Dankaur", budgetCr: 10.15, budgetText: "10 करोड़ 15 लाख 00 हजार", roads: 7, pumps: 6, works: 2, smart: false },
            { name: "Salarpur", hindi: "सालारपुर", block: "Dankaur", budgetCr: 9.80, budgetText: "9 करोड़ 80 लाख 00 हजार", roads: 6, pumps: 4, works: 3, smart: false },
            { name: "Kherli Bhav", hindi: "खेरली भाव", block: "Jewar", budgetCr: 9.40, budgetText: "9 करोड़ 40 लाख 00 हजार", roads: 8, pumps: 5, works: 2, smart: false },
            { name: "Jaganpur", hindi: "जगनपुर", block: "Dankaur", budgetCr: 8.90, budgetText: "8 करोड़ 90 लाख 00 हजार", roads: 5, pumps: 6, works: 2, smart: false }
        ];

        let currentFilter = 'all';

        function renderVillages() {
            const grid = document.getElementById('villagesGrid');
            const searchVal = document.getElementById('villageSearch').value.toLowerCase().trim();
            const sortVal = document.getElementById('sortSelect').value;

            let filtered = villagesData.filter(v => {
                const matchBlock = (currentFilter === 'all') || 
                                   (currentFilter === 'smart' && v.smart) || 
                                   (v.block === currentFilter);
                const matchSearch = v.name.toLowerCase().includes(searchVal) || 
                                    v.hindi.toLowerCase().includes(searchVal);
                return matchBlock && matchSearch;
            });

            // Sorting
            if (sortVal === 'budget-high') {
                filtered.sort((a, b) => b.budgetCr - a.budgetCr);
            } else if (sortVal === 'budget-low') {
                filtered.sort((a, b) => a.budgetCr - b.budgetCr);
            } else if (sortVal === 'alpha') {
                filtered.sort((a, b) => a.name.localeCompare(b.name));
            } else if (sortVal === 'roads') {
                filtered.sort((a, b) => b.roads - a.roads);
            }

            document.getElementById('resultsCount').textContent = `Showing ${filtered.length} of ${villagesData.length} Indexed Dossiers`;

            grid.innerHTML = '';
            filtered.forEach((v, index) => {
                const card = document.createElement('div');
                card.className = "p-6 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-orange-500/40 transition-all flex flex-col justify-between group";
                card.innerHTML = `
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono font-bold ${v.block === 'Jewar' ? 'bg-orange-50 text-orange-700' : 'bg-blue-50 text-blue-700'} uppercase">
                                ${v.block} Block
                            </span>
                            ${v.smart ? '<span class="text-[10px] font-bold text-amber-600 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">⭐ Smart Village</span>' : ''}
                        </div>
                        <p class="text-xs font-mono font-bold text-orange-600 mb-1">${v.budgetText}</p>
                        <h4 class="text-xl font-serif font-bold text-slate-900 group-hover:text-orange-600 transition-colors">
                            ${v.name} <span class="text-sm font-sans font-normal text-slate-400">(${v.hindi})</span>
                        </h4>

                        <div class="grid grid-cols-3 gap-2 my-4 pt-4 border-t border-slate-100 text-center">
                            <div class="bg-slate-50 p-2 rounded-xl">
                                <p class="text-sm font-mono font-bold text-slate-900">${v.roads}</p>
                                <p class="text-[9px] text-slate-400 uppercase">Roads</p>
                            </div>
                            <div class="bg-slate-50 p-2 rounded-xl">
                                <p class="text-sm font-mono font-bold text-slate-900">${v.pumps}</p>
                                <p class="text-[9px] text-slate-400 uppercase">Water</p>
                            </div>
                            <div class="bg-slate-50 p-2 rounded-xl">
                                <p class="text-sm font-mono font-bold text-slate-900">${v.works}</p>
                                <p class="text-[9px] text-slate-400 uppercase">Civic</p>
                            </div>
                        </div>
                    </div>

                    <button onclick="openVillageModal(${index})" class="w-full mt-2 py-2.5 rounded-xl bg-slate-900 hover:bg-orange-600 text-white text-xs font-bold uppercase tracking-wider transition-colors shadow">
                        View Full Report &rarr;
                    </button>
                `;
                grid.appendChild(card);
            });
        }

        function setBlockFilter(type) {
            currentFilter = type;
            const bAll = document.getElementById('btnFilterAll');
            const bJewar = document.getElementById('btnFilterJewar');
            const bDan = document.getElementById('btnFilterDankaur');
            const bSmart = document.getElementById('btnFilterSmart');

            [bAll, bJewar, bDan, bSmart].forEach(b => {
                b.className = "px-4 py-1.5 rounded-full text-xs font-bold transition-all bg-white/5 border border-white/10 text-slate-300 hover:bg-white/10";
            });

            if (type === 'all') bAll.className = "px-4 py-1.5 rounded-full text-xs font-bold transition-all bg-orange-600 text-white";
            if (type === 'Jewar') bJewar.className = "px-4 py-1.5 rounded-full text-xs font-bold transition-all bg-orange-600 text-white";
            if (type === 'Dankaur') bDan.className = "px-4 py-1.5 rounded-full text-xs font-bold transition-all bg-orange-600 text-white";
            if (type === 'smart') bSmart.className = "px-4 py-1.5 rounded-full text-xs font-bold transition-all bg-orange-600 text-white";

            renderVillages();
        }

        function openVillageModal(idx) {
            const v = villagesData[idx];
            document.getElementById('modalBlockBadge').textContent = `${v.block} Block`;
            document.getElementById('modalVillageName').textContent = `${v.name} (${v.hindi})`;
            document.getElementById('modalBudget').textContent = `Total Budget: ${v.budgetText}`;
            document.getElementById('modalRoads').textContent = v.roads;
            document.getElementById('modalPumps').textContent = v.pumps;
            document.getElementById('modalWorks').textContent = v.works;

            document.getElementById('villageModal').classList.remove('hidden');
        }

        function closeVillageModal() {
            document.getElementById('villageModal').classList.add('hidden');
        }

        document.getElementById('villageSearch').addEventListener('input', renderVillages);
        document.getElementById('sortSelect').addEventListener('change', renderVillages);

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeVillageModal();
        });

        // Initialize on page load
        renderVillages();

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
