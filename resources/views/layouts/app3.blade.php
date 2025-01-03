<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- remix icon cnd --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <title>{{ config('app.name', 'V-Card') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}">
  </head>

  <body class="font-Montserrat">
    <!-- start: Sidebar -->
    <div class="sidebar-menu fixed left-0 top-0 z-50 h-full w-64 bg-gray-900 p-4 transition-transform">
      <a href="#" class="flex items-center border-b border-b-gray-800 pb-4">
        <img src="https://placehold.co/32x32" alt="" class="h-8 w-8 rounded object-cover">
        <span class="ml-3 text-lg font-bold text-white">V-Card</span>
      </a>
      <ul class="mt-4">
        <li class="active group mb-1">
          <a href="#"
            class="flex items-center rounded-md px-4 py-2 text-gray-300 hover:bg-gray-950 hover:text-gray-100 group-[.active]:bg-gray-800 group-[.selected]:bg-gray-950 group-[.active]:text-white group-[.selected]:text-gray-100">
            <i class="ri-home-2-line mr-3 text-lg"></i>
            <span class="text-sm">Dashboard</span>
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
            class="flex items-center rounded-md px-4 py-2 text-gray-300 hover:bg-gray-950 hover:text-gray-100 group-[.active]:bg-gray-800 group-[.selected]:bg-gray-950 group-[.active]:text-white group-[.selected]:text-gray-100">
            <i class="ri-settings-2-line mr-3 text-lg"></i>
            <span class="text-sm">Settings</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidebar-overlay fixed left-0 top-0 z-40 h-full w-full bg-black/50 md:hidden"></div>
    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main class="main min-h-screen w-full bg-gray-50 transition-all md:ml-64 md:w-[calc(100%-256px)]">
      <div class="sticky left-0 top-0 z-30 flex items-center bg-white px-6 py-2 shadow-md shadow-black/5">
        <button type="button" class="sidebar-toggle text-lg text-gray-600">
          <i class="ri-menu-line"></i>
        </button>
        <ul class="ml-4 flex items-center text-sm">
          <li class="mr-2">
            <a href="#" class="font-medium text-gray-400 hover:text-gray-600">Dashboard</a>
          </li>
          <li class="mr-2 font-medium text-gray-600">/</li>
          <li class="mr-2 font-medium text-gray-600">Analytics</li>
        </ul>
        <ul class="ml-auto flex items-center">
          <li class="dropdown mr-1">
            <button type="button"
              class="dropdown-toggle flex h-8 w-8 items-center justify-center rounded text-gray-400 hover:bg-gray-50 hover:text-gray-600">
              <i class="ri-search-line"></i>
            </button>
            <div
              class="dropdown-menu z-30 hidden w-full max-w-xs rounded-md border border-gray-100 bg-white shadow-md shadow-black/5">
              <form action="" class="border-b border-b-gray-100 p-4">
                <div class="relative w-full">
                  <input type="text"
                    class="w-full rounded-md border border-gray-100 bg-gray-50 py-2 pl-10 pr-4 text-sm outline-none focus:border-blue-500"
                    placeholder="Search...">
                  <i class="ri-search-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                </div>
              </form>
              <div class="mb-2 mt-3">
                <div class="mb-2 ml-4 text-[13px] font-medium text-gray-400">Recently</div>
                <ul class="max-h-64 overflow-y-auto">
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">Create
                          landing page</div>
                        <div class="text-[11px] text-gray-400">$345</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">Create
                          landing page</div>
                        <div class="text-[11px] text-gray-400">$345</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">Create
                          landing page</div>
                        <div class="text-[11px] text-gray-400">$345</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">Create
                          landing page</div>
                        <div class="text-[11px] text-gray-400">$345</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">Create
                          landing page</div>
                        <div class="text-[11px] text-gray-400">$345</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">Create
                          landing page</div>
                        <div class="text-[11px] text-gray-400">$345</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">Create
                          landing page</div>
                        <div class="text-[11px] text-gray-400">$345</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">Create
                          landing page</div>
                        <div class="text-[11px] text-gray-400">$345</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="dropdown">
            <button type="button"
              class="dropdown-toggle flex h-8 w-8 items-center justify-center rounded text-gray-400 hover:bg-gray-50 hover:text-gray-600">
              <i class="ri-notification-3-line"></i>
            </button>
            <div
              class="dropdown-menu z-30 hidden w-full max-w-xs rounded-md border border-gray-100 bg-white shadow-md shadow-black/5">
              <div class="notification-tab flex items-center border-b border-b-gray-100 px-4 pt-4">
                <button type="button" data-tab="notification" data-tab-page="notifications"
                  class="active mr-4 border-b-2 border-b-transparent pb-1 text-[13px] font-medium text-gray-400 hover:text-gray-600">Notifications</button>
                <button type="button" data-tab="notification" data-tab-page="messages"
                  class="mr-4 border-b-2 border-b-transparent pb-1 text-[13px] font-medium text-gray-400 hover:text-gray-600">Messages</button>
              </div>
              <div class="my-2">
                <ul class="max-h-64 overflow-y-auto" data-tab-for="notification" data-page="notifications">
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">New order
                        </div>
                        <div class="text-[11px] text-gray-400">from a user</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">New order
                        </div>
                        <div class="text-[11px] text-gray-400">from a user</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">New order
                        </div>
                        <div class="text-[11px] text-gray-400">from a user</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">New order
                        </div>
                        <div class="text-[11px] text-gray-400">from a user</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">New order
                        </div>
                        <div class="text-[11px] text-gray-400">from a user</div>
                      </div>
                    </a>
                  </li>
                </ul>
                <ul class="hidden max-h-64 overflow-y-auto" data-tab-for="notification" data-page="messages">
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">John Doe
                        </div>
                        <div class="text-[11px] text-gray-400">Hello there!</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">John Doe
                        </div>
                        <div class="text-[11px] text-gray-400">Hello there!</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">John Doe
                        </div>
                        <div class="text-[11px] text-gray-400">Hello there!</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">John Doe
                        </div>
                        <div class="text-[11px] text-gray-400">Hello there!</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-50">
                      <img src="https://placehold.co/32x32" alt=""
                        class="block h-8 w-8 rounded object-cover align-middle">
                      <div class="ml-2">
                        <div class="truncate text-[13px] font-medium text-gray-600 group-hover:text-blue-500">John Doe
                        </div>
                        <div class="text-[11px] text-gray-400">Hello there!</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="dropdown ml-3">
            <button type="button" class="dropdown-toggle flex items-center">
              <img src="https://placehold.co/32x32" alt=""
                class="block h-8 w-8 rounded object-cover align-middle">
            </button>
            <ul
              class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
              <li>
                <a href="#"
                  class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="p-6">
        <div class="mb-6 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
          <div class="rounded-md border border-gray-100 bg-white p-6 shadow-md shadow-black/5">
            <div class="mb-6 flex justify-between">
              <div>
                <div class="mb-1 text-2xl font-semibold">10</div>
                <div class="text-sm font-medium text-gray-400">Active orders</div>
              </div>
              <div class="dropdown">
                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                    class="ri-more-fill"></i></button>
                <ul
                  class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="flex items-center">
              <div class="h-4 w-full rounded-full bg-gray-100">
                <div class="h-full rounded-full bg-blue-500 p-1" style="width: 60%;">
                  <div class="ml-auto h-2 w-2 rounded-full bg-white"></div>
                </div>
              </div>
              <span class="ml-4 text-sm font-medium text-gray-600">60%</span>
            </div>
          </div>
          <div class="rounded-md border border-gray-100 bg-white p-6 shadow-md shadow-black/5">
            <div class="mb-4 flex justify-between">
              <div>
                <div class="mb-1 flex items-center">
                  <div class="text-2xl font-semibold">324</div>
                  <div
                    class="ml-2 rounded bg-emerald-500/10 p-1 text-[12px] font-semibold leading-none text-emerald-500">
                    +30%</div>
                </div>
                <div class="text-sm font-medium text-gray-400">Visitors</div>
              </div>
              <div class="dropdown">
                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                    class="ri-more-fill"></i></button>
                <ul
                  class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="flex items-center">
              <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded-full object-cover">
              <img src="https://placehold.co/32x32" alt=""
                class="-ml-3 block h-8 w-8 rounded-full object-cover">
              <img src="https://placehold.co/32x32" alt=""
                class="-ml-3 block h-8 w-8 rounded-full object-cover">
              <img src="https://placehold.co/32x32" alt=""
                class="-ml-3 block h-8 w-8 rounded-full object-cover">
              <img src="https://placehold.co/32x32" alt=""
                class="-ml-3 block h-8 w-8 rounded-full object-cover">
            </div>
          </div>
          <div class="rounded-md border border-gray-100 bg-white p-6 shadow-md shadow-black/5">
            <div class="mb-6 flex justify-between">
              <div>
                <div class="mb-1 text-2xl font-semibold"><span
                    class="align-top text-base font-normal text-gray-400">&dollar;</span>2,345</div>
                <div class="text-sm font-medium text-gray-400">Active orders</div>
              </div>
              <div class="dropdown">
                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                    class="ri-more-fill"></i></button>
                <ul
                  class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
            <a href="#" class="text-sm font-medium text-blue-500 hover:text-blue-600">View details</a>
          </div>
        </div>
        <div class="mb-6 grid grid-cols-1 gap-6 lg:grid-cols-2">
          <div class="rounded-md border border-gray-100 bg-white p-6 shadow-md shadow-black/5">
            <div class="mb-4 flex items-start justify-between">
              <div class="font-medium">Manage orders</div>
              <div class="dropdown">
                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                    class="ri-more-fill"></i></button>
                <ul
                  class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="order-tab mb-4 flex items-center">
              <button type="button" data-tab="order" data-tab-page="active"
                class="active rounded-bl-md rounded-tl-md bg-gray-50 px-4 py-2 text-sm font-medium text-gray-400 hover:text-gray-600">Active</button>
              <button type="button" data-tab="order" data-tab-page="completed"
                class="bg-gray-50 px-4 py-2 text-sm font-medium text-gray-400 hover:text-gray-600">Completed</button>
              <button type="button" data-tab="order" data-tab-page="canceled"
                class="rounded-br-md rounded-tr-md bg-gray-50 px-4 py-2 text-sm font-medium text-gray-400 hover:text-gray-600">Canceled</button>
            </div>
            <div class="overflow-x-auto">
              <table class="w-full min-w-[540px]" data-tab-for="order" data-page="active">
                <thead>
                  <tr>
                    <th
                      class="rounded-bl-md rounded-tl-md bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Service</th>
                    <th
                      class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Estimate</th>
                    <th
                      class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Budget</th>
                    <th
                      class="rounded-br-md rounded-tr-md bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">In
                        progress</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">In
                        progress</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">In
                        progress</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">In
                        progress</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">In
                        progress</span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="hidden w-full min-w-[540px]" data-tab-for="order" data-page="completed">
                <thead>
                  <tr>
                    <th
                      class="rounded-bl-md rounded-tl-md bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Service</th>
                    <th
                      class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Estimate</th>
                    <th
                      class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Budget</th>
                    <th
                      class="rounded-br-md rounded-tr-md bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">Completed</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">Completed</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">Completed</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">Completed</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">Completed</span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="hidden w-full min-w-[540px]" data-tab-for="order" data-page="canceled">
                <thead>
                  <tr>
                    <th
                      class="rounded-bl-md rounded-tl-md bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Service</th>
                    <th
                      class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Estimate</th>
                    <th
                      class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Budget</th>
                    <th
                      class="rounded-br-md rounded-tr-md bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-rose-500/10 p-1 text-[12px] font-medium leading-none text-rose-500">Canceled</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-rose-500/10 p-1 text-[12px] font-medium leading-none text-rose-500">Canceled</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-rose-500/10 p-1 text-[12px] font-medium leading-none text-rose-500">Canceled</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-rose-500/10 p-1 text-[12px] font-medium leading-none text-rose-500">Canceled</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-rose-500/10 p-1 text-[12px] font-medium leading-none text-rose-500">Canceled</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="rounded-md border border-gray-100 bg-white p-6 shadow-md shadow-black/5">
            <div class="mb-4 flex items-start justify-between">
              <div class="font-medium">Manage Services</div>
              <div class="dropdown">
                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                    class="ri-more-fill"></i></button>
                <ul
                  class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
            <form action="" class="mb-4 flex items-center">
              <div class="relative mr-2 w-full">
                <input type="text"
                  class="w-full rounded-md border border-gray-100 bg-gray-50 py-2 pl-10 pr-4 text-sm outline-none focus:border-blue-500"
                  placeholder="Search...">
                <i class="ri-search-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
              </div>
              <select
                class="appearance-none rounded-md border border-gray-100 bg-gray-50 bg-select-arrow bg-[length:16px_16px] bg-[right_16px_center] bg-no-repeat py-2 pl-4 pr-10 text-sm outline-none focus:border-blue-500">
                <option value="">All</option>
              </select>
            </form>
            <div class="overflow-x-auto">
              <table class="w-full min-w-[540px]">
                <thead>
                  <tr>
                    <th
                      class="rounded-bl-md rounded-tl-md bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Service</th>
                    <th
                      class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Price</th>
                    <th
                      class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Clicks</th>
                    <th
                      class="rounded-br-md rounded-tr-md bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">1K</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="dropdown">
                        <button type="button"
                          class="dropdown-toggle flex h-6 w-6 items-center justify-center rounded bg-gray-50 text-sm text-gray-400 hover:text-gray-600"><i
                            class="ri-more-2-fill"></i></button>
                        <ul
                          class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                          </li>
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                          </li>
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">1K</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="dropdown">
                        <button type="button"
                          class="dropdown-toggle flex h-6 w-6 items-center justify-center rounded bg-gray-50 text-sm text-gray-400 hover:text-gray-600"><i
                            class="ri-more-2-fill"></i></button>
                        <ul
                          class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                          </li>
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                          </li>
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">1K</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="dropdown">
                        <button type="button"
                          class="dropdown-toggle flex h-6 w-6 items-center justify-center rounded bg-gray-50 text-sm text-gray-400 hover:text-gray-600"><i
                            class="ri-more-2-fill"></i></button>
                        <ul
                          class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                          </li>
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                          </li>
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">1K</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="dropdown">
                        <button type="button"
                          class="dropdown-toggle flex h-6 w-6 items-center justify-center rounded bg-gray-50 text-sm text-gray-400 hover:text-gray-600"><i
                            class="ri-more-2-fill"></i></button>
                        <ul
                          class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                          </li>
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                          </li>
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-gray-400">1K</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="dropdown">
                        <button type="button"
                          class="dropdown-toggle flex h-6 w-6 items-center justify-center rounded bg-gray-50 text-sm text-gray-400 hover:text-gray-600"><i
                            class="ri-more-2-fill"></i></button>
                        <ul
                          class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                          </li>
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                          </li>
                          <li>
                            <a href="#"
                              class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="mb-6 grid grid-cols-1 gap-6 lg:grid-cols-3">
          <div class="rounded-md border border-gray-100 bg-white p-6 shadow-md shadow-black/5 lg:col-span-2">
            <div class="mb-4 flex items-start justify-between">
              <div class="font-medium">Order Statistics</div>
              <div class="dropdown">
                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                    class="ri-more-fill"></i></button>
                <ul
                  class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
              <div class="rounded-md border border-dashed border-gray-200 p-4">
                <div class="mb-0.5 flex items-center">
                  <div class="text-xl font-semibold">10</div>
                  <span
                    class="ml-1 rounded bg-blue-500/10 p-1 text-[12px] font-semibold leading-none text-blue-500">$80</span>
                </div>
                <span class="text-sm text-gray-400">Active</span>
              </div>
              <div class="rounded-md border border-dashed border-gray-200 p-4">
                <div class="mb-0.5 flex items-center">
                  <div class="text-xl font-semibold">50</div>
                  <span
                    class="ml-1 rounded bg-emerald-500/10 p-1 text-[12px] font-semibold leading-none text-emerald-500">+$469</span>
                </div>
                <span class="text-sm text-gray-400">Completed</span>
              </div>
              <div class="rounded-md border border-dashed border-gray-200 p-4">
                <div class="mb-0.5 flex items-center">
                  <div class="text-xl font-semibold">4</div>
                  <span
                    class="ml-1 rounded bg-rose-500/10 p-1 text-[12px] font-semibold leading-none text-rose-500">-$130</span>
                </div>
                <span class="text-sm text-gray-400">Canceled</span>
              </div>
            </div>
            <div>
              <canvas id="order-chart"></canvas>
            </div>
          </div>
          <div class="rounded-md border border-gray-100 bg-white p-6 shadow-md shadow-black/5">
            <div class="mb-4 flex items-start justify-between">
              <div class="font-medium">Earnings</div>
              <div class="dropdown">
                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                    class="ri-more-fill"></i></button>
                <ul
                  class="dropdown-menu z-30 hidden w-full max-w-[140px] rounded-md border border-gray-100 bg-white py-1.5 shadow-md shadow-black/5">
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Profile</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Settings</a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center px-4 py-1.5 text-[13px] text-gray-600 hover:bg-gray-50 hover:text-blue-500">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="overflow-x-auto">
              <table class="w-full min-w-[460px]">
                <thead>
                  <tr>
                    <th
                      class="rounded-bl-md rounded-tl-md bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Service</th>
                    <th
                      class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Earning</th>
                    <th
                      class="rounded-br-md rounded-tr-md bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                      Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-emerald-500">+$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">Pending</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-rose-500">-$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-rose-500/10 p-1 text-[12px] font-medium leading-none text-rose-500">Withdrawn</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-emerald-500">+$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">Pending</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-rose-500">-$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-rose-500/10 p-1 text-[12px] font-medium leading-none text-rose-500">Withdrawn</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-emerald-500">+$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">Pending</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-rose-500">-$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-rose-500/10 p-1 text-[12px] font-medium leading-none text-rose-500">Withdrawn</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-emerald-500">+$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">Pending</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-rose-500">-$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-rose-500/10 p-1 text-[12px] font-medium leading-none text-rose-500">Withdrawn</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-emerald-500">+$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-emerald-500/10 p-1 text-[12px] font-medium leading-none text-emerald-500">Pending</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt=""
                          class="block h-8 w-8 rounded object-cover">
                        <a href="#"
                          class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create landing
                          page</a>
                      </div>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span class="text-[13px] font-medium text-rose-500">-$235</span>
                    </td>
                    <td class="border-b border-b-gray-50 px-4 py-2">
                      <span
                        class="inline-block rounded bg-rose-500/10 p-1 text-[12px] font-medium leading-none text-rose-500">Withdrawn</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- end: Main -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>
  </body>

</html>
