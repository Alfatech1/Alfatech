<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AlfaTech Solutions</title>
        <meta name="description" content="Premium web applications, robust APIs, and elegant interfaces from AlfaTech Solutions.">

        @if (file_exists(public_path('build/manifest.json')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @elseif (file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="min-h-screen bg-[#0B0F19] text-slate-100 antialiased selection:bg-cyan-500/30">
        <div class="mx-auto flex min-h-screen max-w-7xl flex-col px-4 py-4 sm:px-6 lg:px-8">
            <header class="sticky top-4 z-20 mb-8 rounded-full border border-white/10 bg-slate-900/70 px-4 py-3 shadow-[0_0_40px_rgba(6,182,212,0.12)] backdrop-blur-md sm:px-6">
                <div class="flex items-center justify-between gap-4">
                    <a href="#top" class="flex items-center gap-3 text-sm font-semibold tracking-[0.2em] text-slate-100 uppercase">
                        <span class="flex h-9 w-9 items-center justify-center rounded-full border border-cyan-400/40 bg-cyan-400/10 text-cyan-300 shadow-[0_0_20px_rgba(6,182,212,0.25)]">
                            A
                        </span>
                        <span class="bg-gradient-to-r from-cyan-300 via-cyan-200 to-emerald-300 bg-clip-text text-transparent">
                            AlfaTech Solutions
                        </span>
                    </a>

                    <nav class="hidden items-center gap-6 text-sm text-slate-300 md:flex">
                        <a href="#capabilities" class="transition hover:text-cyan-300">Capabilities</a>
                        <a href="#portfolio" class="transition hover:text-cyan-300">Portfolio</a>
                        <a href="#contact" class="transition hover:text-cyan-300">Contact</a>
                        <a href="#contact" class="rounded-full border border-cyan-400/40 bg-cyan-500/10 px-4 py-2 font-medium text-cyan-200 transition hover:border-cyan-300 hover:bg-cyan-500/20">
                            Start a Project
                        </a>
                    </nav>
                </div>
            </header>

            <main id="top" class="flex-1 space-y-8">
                <section class="grid items-center gap-8 rounded-[2rem] border border-white/10 bg-[radial-gradient(circle_at_top_left,_rgba(6,182,212,0.2),_transparent_45%),linear-gradient(135deg,_rgba(30,41,59,0.95),_rgba(15,23,42,0.95))] p-6 shadow-[0_0_80px_rgba(6,182,212,0.08)] sm:p-8 lg:grid-cols-[1.15fr_0.85fr] lg:p-12">
                    <div class="max-w-2xl">
                        <div class="mb-4 inline-flex items-center rounded-full border border-cyan-400/25 bg-cyan-400/10 px-3 py-1 text-sm text-cyan-200">
                            Premium digital product engineering
                        </div>
                        <h1 class="text-4xl font-semibold leading-tight text-white sm:text-5xl lg:text-6xl">
                            Architecting
                            <span class="bg-gradient-to-r from-cyan-300 via-sky-200 to-emerald-300 bg-clip-text text-transparent">
                                Next-Gen Web Applications
                            </span>
                        </h1>
                        <p class="mt-5 max-w-xl text-lg leading-8 text-slate-300 sm:text-xl">
                            We build robust Laravel backends and refined interfaces that scale with your ambition, from secure APIs to fast, polished experiences.
                        </p>
                        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                            <a href="#portfolio" class="rounded-full bg-gradient-to-r from-cyan-500 to-emerald-500 px-6 py-3 text-center font-semibold text-slate-950 shadow-[0_0_30px_rgba(16,185,129,0.25)] transition hover:scale-[1.01]">
                                View Our Work
                            </a>
                            <a href="#contact" class="rounded-full border border-white/15 bg-white/5 px-6 py-3 text-center font-semibold text-slate-100 transition hover:border-cyan-400/40 hover:bg-cyan-500/10">
                                Schedule a Discovery Call
                            </a>
                        </div>
                    </div>

                    <div class="rounded-[1.5rem] border border-cyan-400/20 bg-slate-950/80 p-4 shadow-[0_0_60px_rgba(6,182,212,0.16)]">
                        <div class="mb-3 flex items-center justify-between rounded-xl border border-white/10 bg-slate-900/80 px-3 py-2">
                            <div class="flex items-center gap-2">
                                <span class="h-2.5 w-2.5 rounded-full bg-rose-400"></span>
                                <span class="h-2.5 w-2.5 rounded-full bg-amber-400"></span>
                                <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                            </div>
                            <span class="font-mono text-xs uppercase tracking-[0.25em] text-slate-400">stack.json</span>
                        </div>
                        <div class="rounded-xl border border-white/10 bg-[#070b14] p-4 font-mono text-sm leading-7 text-slate-200">
                            <div class="text-cyan-300">{</div>
                            <div class="pl-4"><span class="text-emerald-300">"backend"</span>: <span class="text-slate-300">"PHP / Laravel"</span>,</div>
                            <div class="pl-4"><span class="text-emerald-300">"database"</span>: <span class="text-slate-300">"MySQL"</span>,</div>
                            <div class="pl-4"><span class="text-emerald-300">"frontend"</span>: <span class="text-slate-300">"Tailwind CSS"</span>,</div>
                            <div class="pl-4"><span class="text-emerald-300">"build"</span>: <span class="text-slate-300">"Vite"</span></div>
                            <div class="text-cyan-300">}</div>
                        </div>
                        <div class="mt-4 rounded-xl border border-emerald-400/15 bg-emerald-400/10 p-3 text-sm text-emerald-200">
                            <div class="font-semibold">Operational clarity</div>
                            <p class="mt-1 text-emerald-100/80">Secure workflows, clean deployment paths, and measured infrastructure decisions.</p>
                        </div>
                    </div>
                </section>

                <section id="capabilities" class="rounded-[2rem] border border-white/10 bg-slate-900/70 p-6 shadow-[0_0_60px_rgba(2,6,23,0.45)] sm:p-8 lg:p-10">
                    <div class="mb-8 max-w-2xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-cyan-300">Capabilities</p>
                        <h2 class="mt-2 text-3xl font-semibold text-white sm:text-4xl">Technology choices that balance resilience and elegance.</h2>
                    </div>
                    <div class="grid gap-6 md:grid-cols-3">
                        <article class="rounded-2xl border border-cyan-400/20 bg-slate-950/70 p-6 shadow-[0_0_25px_rgba(6,182,212,0.08)]">
                            <div class="mb-4 inline-flex rounded-full border border-cyan-400/20 bg-cyan-400/10 px-3 py-1 text-sm font-medium text-cyan-300">01</div>
                            <h3 class="text-xl font-semibold text-white">Robust Backend Architecture</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-400">Laravel-powered applications with secure RESTful APIs, modular services, and long-term maintainability.</p>
                        </article>
                        <article class="rounded-2xl border border-emerald-400/20 bg-slate-950/70 p-6 shadow-[0_0_25px_rgba(16,185,129,0.08)]">
                            <div class="mb-4 inline-flex rounded-full border border-emerald-400/20 bg-emerald-400/10 px-3 py-1 text-sm font-medium text-emerald-300">02</div>
                            <h3 class="text-xl font-semibold text-white">Lightning-Fast Frontends</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-400">Tailwind CSS and Vite enable crisp visuals, rapid iteration, and optimized asset delivery.</p>
                        </article>
                        <article class="rounded-2xl border border-white/10 bg-slate-950/70 p-6">
                            <div class="mb-4 inline-flex rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm font-medium text-slate-300">03</div>
                            <h3 class="text-xl font-semibold text-white">Data Integrity & Cloud Operations</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-400">MySQL-backed transaction safety, performance-minded schema design, and dependable deployment workflows.</p>
                        </article>
                    </div>
                </section>

                <section id="portfolio" class="rounded-[2rem] border border-white/10 bg-slate-900/70 p-6 shadow-[0_0_60px_rgba(2,6,23,0.4)] sm:p-8 lg:p-10">
                    <div class="mb-8 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                        <div class="max-w-2xl">
                            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-cyan-300">Selected Work</p>
                            <h2 class="mt-2 text-3xl font-semibold text-white sm:text-4xl">Projects designed for growth and operational confidence.</h2>
                        </div>
                        <a href="#contact" class="text-sm font-medium text-cyan-300 transition hover:text-cyan-200">Discuss a similar build</a>
                    </div>

                    <div class="grid gap-6 lg:grid-cols-3">
                        @isset($projects)
                            @forelse($projects as $project)
                                <article class="group rounded-2xl border border-white/10 bg-slate-950/70 p-6 transition hover:-translate-y-1 hover:border-cyan-400/30">
                                    <div class="mb-4 inline-flex rounded-full border border-cyan-400/20 bg-cyan-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-cyan-300">
                                        {{ $project->category }}
                                    </div>
                                    <h3 class="text-xl font-semibold text-white">{{ $project->title }}</h3>
                                    <p class="mt-3 text-sm leading-7 text-slate-400">{{ $project->description }}</p>
                                    <div class="mt-5 flex flex-wrap gap-2">
                                        @php
                                            $tags = is_array($project->tags ?? []) ? $project->tags : [];
                                        @endphp
                                        <?php foreach ($tags as $tag): ?>
                                            <span class="rounded-full border border-emerald-400/20 bg-emerald-400/10 px-2.5 py-1 text-xs font-medium text-emerald-200">
                                                {{ $tag }}
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                </article>
                            @empty
                                <article class="rounded-2xl border border-dashed border-cyan-400/25 bg-cyan-400/5 p-6">
                                    <div class="mb-4 inline-flex rounded-full border border-cyan-400/20 bg-cyan-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-cyan-300">
                                        Placeholder
                                    </div>
                                    <h3 class="text-xl font-semibold text-white">Launch-ready case study</h3>
                                    <p class="mt-3 text-sm leading-7 text-slate-400">This is a polished placeholder card that will be replaced once your project collection is populated.</p>
                                </article>
                                <article class="rounded-2xl border border-dashed border-emerald-400/25 bg-emerald-400/5 p-6">
                                    <div class="mb-4 inline-flex rounded-full border border-emerald-400/20 bg-emerald-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-emerald-300">
                                        Placeholder
                                    </div>
                                    <h3 class="text-xl font-semibold text-white">Secure operations blueprint</h3>
                                    <p class="mt-3 text-sm leading-7 text-slate-400">Bring in your real client work here to showcase architecture, delivery quality, and measurable outcomes.</p>
                                </article>
                                <article class="rounded-2xl border border-dashed border-white/15 bg-white/5 p-6">
                                    <div class="mb-4 inline-flex rounded-full border border-white/10 bg-white/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-slate-300">
                                        Placeholder
                                    </div>
                                    <h3 class="text-xl font-semibold text-white">Modern experience system</h3>
                                    <p class="mt-3 text-sm leading-7 text-slate-400">Animate your best builds with concrete impact, architecture notes, and polished visual storytelling.</p>
                                </article>
                            @endforelse
                        @endisset
                    </div>
                </section>

                <section class="rounded-[2rem] border border-white/10 bg-slate-900/70 p-6 shadow-[0_0_60px_rgba(2,6,23,0.35)] sm:p-8 lg:p-10">
                    <div class="mb-8 max-w-2xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-cyan-300">Workflow</p>
                        <h2 class="mt-2 text-3xl font-semibold text-white sm:text-4xl">A structured delivery pipeline from concept to deployment.</h2>
                    </div>
                    <div class="grid gap-4 lg:grid-cols-4">
                        <div class="rounded-2xl border border-cyan-400/15 bg-cyan-400/10 p-5">
                            <div class="mb-3 text-sm font-semibold uppercase tracking-[0.24em] text-cyan-300">01</div>
                            <h3 class="text-lg font-semibold text-white">Secure Client Request</h3>
                            <p class="mt-2 text-sm leading-7 text-slate-400">We align on goals, constraints, and success metrics from the first conversation.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-slate-950/70 p-5">
                            <div class="mb-3 text-sm font-semibold uppercase tracking-[0.24em] text-slate-300">02</div>
                            <h3 class="text-lg font-semibold text-white">Controller Logic</h3>
                            <p class="mt-2 text-sm leading-7 text-slate-400">Architecture is distilled into secure application flows and maintainable services.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-slate-950/70 p-5">
                            <div class="mb-3 text-sm font-semibold uppercase tracking-[0.24em] text-slate-300">03</div>
                            <h3 class="text-lg font-semibold text-white">Transaction Validation</h3>
                            <p class="mt-2 text-sm leading-7 text-slate-400">Inputs are verified, data integrity is enforced, and edge cases are managed early.</p>
                        </div>
                        <div class="rounded-2xl border border-emerald-400/15 bg-emerald-400/10 p-5">
                            <div class="mb-3 text-sm font-semibold uppercase tracking-[0.24em] text-emerald-300">04</div>
                            <h3 class="text-lg font-semibold text-white">Dispatched Background Job</h3>
                            <p class="mt-2 text-sm leading-7 text-slate-400">Long-running tasks move safely into the background for reliability and speed.</p>
                        </div>
                    </div>
                </section>

                <section id="contact" class="rounded-[2rem] border border-white/10 bg-slate-900/70 p-6 shadow-[0_0_60px_rgba(2,6,23,0.35)] sm:p-8 lg:p-10">
                    <div class="grid gap-8 lg:grid-cols-[0.9fr_1.1fr]">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-cyan-300">Contact</p>
                            <h2 class="mt-2 text-3xl font-semibold text-white sm:text-4xl">Let’s shape a stable, impressive digital product together.</h2>
                            <p class="mt-4 max-w-xl text-lg leading-8 text-slate-400">Share your goals and we’ll map out the right architecture, interface, and delivery plan.</p>
                        </div>
                        <form class="space-y-4 rounded-2xl border border-white/10 bg-slate-950/70 p-5 sm:p-6">
                            <div class="grid gap-4 sm:grid-cols-2">
                                <div>
                                    <label for="name" class="mb-2 block text-sm font-medium text-slate-300">Name</label>
                                    <input id="name" type="text" class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 text-sm text-white outline-none transition focus:border-cyan-400/50 focus:ring-2 focus:ring-cyan-500/20" placeholder="Alex Morgan">
                                </div>
                                <div>
                                    <label for="email" class="mb-2 block text-sm font-medium text-slate-300">Email</label>
                                    <input id="email" type="email" class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 text-sm text-white outline-none transition focus:border-cyan-400/50 focus:ring-2 focus:ring-cyan-500/20" placeholder="alex@company.com">
                                </div>
                            </div>
                            <div>
                                <label for="project_type" class="mb-2 block text-sm font-medium text-slate-300">Project Type</label>
                                <select id="project_type" class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 text-sm text-white outline-none transition focus:border-cyan-400/50 focus:ring-2 focus:ring-cyan-500/20">
                                    <option>Custom Web Platform</option>
                                    <option>API & Backend Services</option>
                                    <option>Admin Dashboard</option>
                                    <option>Performance Refresh</option>
                                </select>
                            </div>
                            <div>
                                <label for="message" class="mb-2 block text-sm font-medium text-slate-300">Message</label>
                                <textarea id="message" rows="5" class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 text-sm text-white outline-none transition focus:border-cyan-400/50 focus:ring-2 focus:ring-cyan-500/20" placeholder="Tell us about the product, timeline, and technical goals."></textarea>
                            </div>
                            <button type="submit" class="rounded-full bg-gradient-to-r from-cyan-500 to-emerald-500 px-6 py-3 text-sm font-semibold text-slate-950 shadow-[0_0_30px_rgba(6,182,212,0.2)] transition hover:scale-[1.01]">
                                Send Inquiry
                            </button>
                        </form>
                    </div>
                </section>
            </main>

            <footer class="mt-8 flex flex-col gap-3 border-t border-white/10 py-6 text-sm text-slate-400 sm:flex-row sm:items-center sm:justify-between">
                <p>© 2026 AlfaTech Solutions. Crafted for modern product teams.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#top" class="transition hover:text-cyan-300">Back to top</a>
                    <a href="#capabilities" class="transition hover:text-cyan-300">Capabilities</a>
                    <a href="#contact" class="transition hover:text-cyan-300">Contact</a>
                </div>
            </footer>
        </div>
    </body>
</html>
