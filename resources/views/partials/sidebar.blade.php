<div id="sidebar"
    class="hidden flex-col fixed top-0 left-0 h-screen z-10 w-24 bg-slate-200 text-white shadow-lg overflow-y-scroll scrollbar-none md:flex md:relative md:w-64">
    {{-- Sidebar-Link --}}
    <div class="flex flex-col justify-between h-screen">
        <div>
            <img class="h-8 w-auto mt-4 mb-6 block mx-auto"
                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="logo">
            @foreach ($grant as $sidebarContent)
                <a href="/{{ Auth::user()->role->name }}/{{ $sidebarContent['slug'] }}"
                    class="relative flex sidebar-link {{ Request::is(Auth::user()->role->name . '/' . $sidebarContent['slug'] . '*') ? 'active' : '' }} {{ Auth::user()->role->name != $sidebarContent['role'] ? 'hidden' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 ml-3">{!! $sidebarContent['Icon'] !!}</svg>
                    <span class="hidden md:block ml-2 uppercase font-bold">{{ $sidebarContent['Name'] }}</span>
                </a>
            @endforeach
            <button type="button" id="close-sidebar"
                class="relative flex items-center h-12 w-12 my-2 mx-auto shadow-lg bg-red-500 text-white rounded-xl hover:bg-white hover:text-red-500 hover:rounded-md duration-300 ease-linear md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mx-auto">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <a href="/logout" class="flex py-4 justify-center w-full mx-auto text-center red-button">
            <x-heroicon-o-arrow-left-on-rectangle class="w-6 mr-1" /><span class="hidden md:block">Log out</span>
        </a>
    </div>
</div>
