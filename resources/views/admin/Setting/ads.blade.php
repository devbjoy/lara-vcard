@extends('layouts.app')

@section('content')
  <div class="border-2 border-gray-200 px-7 py-5 shadow-sm">
    <div class="flex items-center justify-between">
      <h2 class="pb-2 text-lg font-medium text-gray-800">{{ __('Ads') }}</h2>
      <a href="{{ route('dashboard') }}" class="rounded-md bg-indigo-500 px-4 py-2 text-sm text-white">{{ __('Back') }}
        <i class="ri-arrow-left-fill"></i>
      </a>
    </div>
    <form action="#" method="POST" class="rounded-lg bg-white p-2 shadow-lg">
      <div class="mt-2">
        <div class="grid grid-cols-1 gap-3">
          {{-- header code --}}
          <div class="mb-2">
            <label for="header-code" class="text-md block text-gray-700">{{ __('Header Code') }}<span
                class="text-red-500">*</span></label>
            <textarea id="header-code" name="header-code" rows="3" placeholder="Enter header code"
              class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
          </div>
          {{-- footer code --}}
          <div class="mb-2">
            <label for="footer-code" class="text-md block text-gray-700">{{ __('Footer Code') }}<span
                class="text-red-500">*</span></label>
            <textarea id="footer-code" name="footer_code" rows="3" placeholder="Enter footer code"
              class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
          </div>
          {{-- ad code --}}
          <div class="mb-2">
            <label for="ad" class="text-md block text-gray-700">{{ __('Ad Code') }}<span
                class="text-red-500">*</span></label>
            <textarea id="ad" name="ad" rows="3" placeholder="Enter ad code"
              class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
          </div>
          {{-- company name --}}
          <div class="mb-2">
            <label for="show-ads" class="text-md block text-gray-700">{{ __('Show Ads At') }}<span
                class="text-red-500">*</span></label>
            <select id="custom-domain" name="custom_domain"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="Dolor">default
              <option>
              <option value="Dolor">default
              <option>
              <option value="Dolor">default
              <option>
              <option value="Dolor">default
              <option>
              <option value="Dolor">default
              <option>
              <option value="Dolor">header
              <option>
            </select>
          </div>
        </div>

      </div>
      <div class="mt-2 text-left">
        <button type="submit"
          class="rounded-md border-2 border-indigo-500 px-6 py-2 text-[15px] uppercase text-gray-600 hover:bg-indigo-500 hover:text-white">
          Save Change
        </button>
      </div>
    </form>
  </div>
  </div>
@endsection
