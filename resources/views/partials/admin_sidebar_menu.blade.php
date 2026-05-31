<nav class="flex-1 space-y-7">
    <div>
        <span class="px-3 text-xs font-semibold text-slate-500 uppercase tracking-widest">Management</span>
        <ul class="mt-3 space-y-1">
            <li>
                <a href="{{ route('admin.admissions.index') }}" 
                   class="group flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all {{ request()->routeIs('admin.admissions.*') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/10' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <span class="text-lg">🎓</span>
                    <span>Admissions</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.homepage.index') }}" 
                   class="group flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all {{ request()->routeIs('admin.homepage.*') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/10' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <span class="text-lg">🏠</span>
                    <span>Homepage Sections</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pages.index') }}" 
                   class="group flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all {{ request()->routeIs('admin.pages.*') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/10' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                    <span class="text-lg">📚</span>
                    <span>Custom Pages</span>
                </a>
            </li>
        </ul>
    </div>

    <div>
        <span class="px-3 text-xs font-semibold text-slate-500 uppercase tracking-widest">Shortcuts</span>
        <ul class="mt-3 space-y-1">
            <li>
                <a href="{{ url('/') }}" target="_blank" 
                   class="group flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-slate-400 hover:bg-slate-800 hover:text-white transition">
                    <span class="text-lg">🌐</span>
                    <span>View Live Website</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Sidebar Footer Account / Logout -->
<div class="mt-auto pt-6 border-t border-slate-800">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" 
                class="flex w-full items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-slate-400 hover:bg-red-950 hover:text-red-250 transition-all border border-transparent hover:border-red-900">
            <span class="text-lg">🚪</span>
            <span>Sign Out</span>
        </button>
    </form>
</div>
