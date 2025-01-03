<div class="sidebar-menu fixed left-0 top-0 z-50 h-full w-64 bg-gray-900 p-4 transition-transform">
  <a href="#" class="flex items-center border-b border-b-gray-800 pb-4">
    <img src="https://placehold.co/32x32" alt="" class="h-8 w-8 rounded object-cover">
    <span class="ml-3 text-lg font-bold text-white">V-Card</span>
  </a>
  <ul class="mt-4">
    <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }} group mb-1">
      <a href="{{ route('dashboard') }}"
        class="flex items-center rounded-md px-4 py-2 text-gray-300 hover:bg-gray-950 hover:text-gray-100 group-[.active]:bg-gray-800 group-[.selected]:bg-gray-950 group-[.active]:text-white group-[.selected]:text-gray-100">
        <i class="ri-dashboard-line mr-3 text-lg"></i>
        <span class="text-sm">Dashboard</span>
      </a>
    </li>
    <li class="{{ request()->routeIs('products.index') ? 'active' : '' }} group mb-1">
      <a href="{{ route('products.index') }}"
        class="flex items-center rounded-md px-4 py-2 text-gray-300 hover:bg-gray-950 hover:text-gray-100 group-[.active]:bg-gray-800 group-[.selected]:bg-gray-950 group-[.active]:text-white group-[.selected]:text-gray-100">
        <i class="ri-home-2-line mr-3 text-lg"></i>
        <span class="text-sm">Product</span>
      </a>
    </li>
    <li class="group mb-1">
      <a href="#"
        class="sidebar-dropdown-toggle flex items-center rounded-md px-4 py-2 text-gray-300 hover:bg-gray-950 hover:text-gray-100 group-[.active]:bg-gray-800 group-[.selected]:bg-gray-950 group-[.active]:text-white group-[.selected]:text-gray-100">
        <i class="ri-instance-line mr-3 text-lg"></i>
        <span class="text-sm">Orders</span>
        <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
      </a>
      <ul class="mt-2 hidden pl-7 group-[.selected]:block">
        <li class="mb-4">
          <a href="#"
            class="before:contents-[''] flex items-center text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100">Active
            order</a>
        </li>
        <li class="mb-4">
          <a href="#"
            class="before:contents-[''] flex items-center text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100">Completed
            order</a>
        </li>
        <li class="mb-4">
          <a href="#"
            class="before:contents-[''] flex items-center text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100">Canceled
            order</a>
        </li>
      </ul>
    </li>
    <li class="group mb-1">
      <a href="#"
        class="sidebar-dropdown-toggle flex items-center rounded-md px-4 py-2 text-gray-300 hover:bg-gray-950 hover:text-gray-100 group-[.active]:bg-gray-800 group-[.selected]:bg-gray-950 group-[.active]:text-white group-[.selected]:text-gray-100">
        <i class="ri-flashlight-line mr-3 text-lg"></i>
        <span class="text-sm">Services</span>
        <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
      </a>
      <ul class="mt-2 hidden pl-7 group-[.selected]:block">
        <li class="mb-4">
          <a href="#"
            class="before:contents-[''] flex items-center text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100">Manage
            services</a>
        </li>
      </ul>
    </li>
    <li class="group mb-1">
      <a href="#"
        class="sidebar-dropdown-toggle flex items-center rounded-md px-4 py-2 text-gray-300 hover:bg-gray-950 hover:text-gray-100 group-[.active]:bg-gray-800 group-[.selected]:bg-gray-950 group-[.active]:text-white group-[.selected]:text-gray-100">
        <i class="ri-settings-2-line mr-3 text-lg"></i>
        <span class="text-sm">Settings</span>
        <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
      </a>
      <ul class="mt-2 hidden pl-7 group-[.selected]:block">
        <li class="{{ request()->routeIs('setting.index') ? 'active' : '' }} group mb-1">
          <a href="{{ route('setting.index') }}"
            class="before:contents-[''] flex items-center px-3 py-2 text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100 group-[.active]:rounded-md group-[.active]:bg-gray-800">{{ __('General Setting') }}</a>
        </li>
        <li class="{{ request()->routeIs('setting.seo') ? 'active' : '' }} group mb-1">
          <a href="{{ route('setting.seo') }}"
            class="before:contents-[''] flex items-center px-3 py-2 text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100 group-[.active]:rounded-md group-[.active]:bg-gray-800">{{ __('Seo') }}</a>
        </li>
        <li class="{{ request()->routeIs('setting.ads') ? 'active' : '' }} group mb-1">
          <a href="{{ route('setting.ads') }}"
            class="before:contents-[''] flex items-center px-3 py-2 text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100 group-[.active]:rounded-md group-[.active]:bg-gray-800">{{ __('Ads') }}</a>
        </li>
        <li class="{{ request()->routeIs('setting.social.login') ? 'active' : '' }} group mb-1">
          <a href="{{ route('setting.social.login') }}"
            class="before:contents-[''] flex items-center px-3 py-2 text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100 group-[.active]:rounded-md group-[.active]:bg-gray-800">{{ __('Social Login') }}</a>
        </li>
        <li class="{{ request()->routeIs('setting.payment') ? 'active' : '' }} group mb-1">
          <a href="{{ route('setting.payment') }}"
            class="before:contents-[''] flex items-center px-3 py-2 text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100 group-[.active]:rounded-md group-[.active]:bg-gray-800">{{ __('Payment') }}</a>
        </li>
        <li class="{{ request()->routeIs('setting.google.recapture') ? 'active' : '' }} group mb-1">
          <a href="{{ route('setting.google.recapture') }}"
            class="before:contents-[''] flex items-center px-3 py-2 text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100 group-[.active]:rounded-md group-[.active]:bg-gray-800">{{ __('Google Recapture') }}</a>
        </li>
        <li class="{{ request()->routeIs('setting.email') ? 'active' : '' }} group mb-1">
          <a href="{{ route('setting.email') }}"
            class="before:contents-[''] flex items-center px-3 py-2 text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100 group-[.active]:rounded-md group-[.active]:bg-gray-800">{{ __('Email') }}</a>
        </li>
        <li class="{{ request()->routeIs('setting.email.template') ? 'active' : '' }} group mb-1">
          <a href="{{ route('setting.email.template') }}"
            class="before:contents-[''] flex items-center px-3 py-2 text-sm text-gray-300 before:mr-3 before:h-1 before:w-1 before:rounded-full before:bg-gray-300 hover:text-gray-100 group-[.active]:rounded-md group-[.active]:bg-gray-800">{{ __('Email Template') }}</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
<div class="sidebar-overlay fixed left-0 top-0 z-40 h-full w-full bg-black/50 md:hidden"></div>
