<header data-v-24d58c84="" class="site-header isEn isLogin">
    <div data-v-24d58c84=""
         class="wt-grid wt-body-max-width wt-pr-xs-1 wt-pl-xs-1 wt-pr-md-2 wt-pl-md-2 wt-pr-lg-3 wt-pl-lg-3">
        <div data-v-24d58c84=""
             class="wt-grid__item-xs-12 wt-pr-xs-1 wt-pl-xs-1 wt-pr-md-2 wt-pl-md-2 wt-pr-lg-3 wt-pl-lg-3">
            <div data-v-24d58c84="" class="flex wt-align-items-center"><span data-v-24d58c84=""
                                                                             class="btn md:hidden px-3"><i
                        data-v-24d58c84="" class="el-icon-s-unfold"></i></span>
                <a data-v-24d58c84="" href="{{route('dashboard')}}" class="hidden md:block router-link-active">
                    <img data-v-24d58c84="" src="" alt="" class="pipi-logo h-9 wt-mr-md-3"></a><!---->
                <div data-v-24d58c84="" class="menus hidden md:block">
                </div>
                <div data-v-0e997083="" data-v-24d58c84="" class="user-box" userinfo="[object Object]">
                    <span data-v-0e997083="">
                        <div role="tooltip" id="el-popover-5306" aria-hidden="true" class="el-popover el-popper userDrop" tabindex="0"
                             style="width: 230px; display: none;"><!---->
                            <ul data-v-0e997083="" class="userCenterDrop">
                                <li data-v-0e997083="">
                                    <p data-v-0e997083="" class="account item-inline">
                                        <span data-v-0e997083="" class="email"> {{Auth::user()->email}} </span>
                                    </p>
                                </li>
                                <li data-v-0e997083="">
                                    <div data-v-0e997083="" class="item-inline">
                                        <div data-v-0e997083="" class="right">
                                            <a data-v-0e997083="" href="{{route('user')}}" class="btn-link el-link el-link--default"> アカウント設定 </a>
                                        </div>
                                    </div>
                                </li>
                                <li data-v-0e997083="">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a data-v-0e997083="" class="btn-logout" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            ログアウト
                                        </a>
                                    </form>

                                </li>
                            </ul>
                        </div>
                        <span class="el-popover__reference-wrapper">
                            <div data-v-0e997083="" class="btn-user wt-pl-xs-1 wt-pl-lg-3 wt-pl-xl-3 el-popover__reference"
                                 aria-describedby="el-popover-5306" tabindex="0">
                                {{ Auth::user()->name }}
                                <i data-v-0e997083="" class="icon-arrow"></i>
                            </div>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>


<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
