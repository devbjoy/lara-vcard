@extends('layouts.app')

@section('content')
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
              <div class="ml-2 rounded bg-emerald-500/10 p-1 text-[12px] font-semibold leading-none text-emerald-500">
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
          <img src="https://placehold.co/32x32" alt="" class="-ml-3 block h-8 w-8 rounded-full object-cover">
          <img src="https://placehold.co/32x32" alt="" class="-ml-3 block h-8 w-8 rounded-full object-cover">
          <img src="https://placehold.co/32x32" alt="" class="-ml-3 block h-8 w-8 rounded-full object-cover">
          <img src="https://placehold.co/32x32" alt="" class="-ml-3 block h-8 w-8 rounded-full object-cover">
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
                <th class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                  Estimate</th>
                <th class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                <th class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                  Estimate</th>
                <th class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                <th class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                  Estimate</th>
                <th class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                <th class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
                  Price</th>
                <th class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                <th class="bg-gray-50 px-4 py-2 text-left text-[12px] font-medium uppercase tracking-wide text-gray-400">
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
                    <img src="https://placehold.co/32x32" alt="" class="block h-8 w-8 rounded object-cover">
                    <a href="#" class="ml-2 truncate text-sm font-medium text-gray-600 hover:text-blue-500">Create
                      landing
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
@endsection
