@extends('layouts.app')

@section('content')
  <div class="border-2 border-gray-200 px-7 py-5 shadow-sm">

    <div class="flex items-center justify-between">
      <h2 class="pb-2 text-lg font-medium text-gray-800">{{ __('Social Login') }}</h2>
      <a href="{{ route('dashboard') }}" class="rounded-md bg-indigo-500 px-4 py-2 text-sm text-white">{{ __('Back') }}
        <i class="ri-arrow-left-fill"></i>
      </a>
    </div>
    <form action="#" method="POST" class="rounded-lg bg-white p-2 shadow-lg">
      <div class="mt-2">
        <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
          {{-- google client id --}}
          <div class="mb-2">
            <label for="google-client-id" class="text-md block text-gray-700">{{ __('Google Client Id') }}<span
                class="text-red-500">*</span></label>
            <input type="text"id="google-client-id" name="google_client_id"
              placeholder="{{ __('Enter google client id') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- google client secret --}}
          <div class="mb-2">
            <label for="google-client-id" class="text-md block text-gray-700">{{ __('Google Client Secret') }}<span
                class="text-red-500">*</span></label>
            <input type="text"id="google-client-id" name="google_client_id"
              placeholder="{{ __('Enter google client secret') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- microsoft client id --}}
          <div class="mb-2">
            <label for="microsoft-client-id" class="text-md block text-gray-700">{{ __('Microsoft Client Id') }}<span
                class="text-red-500">*</span></label>
            <input type="text"id="microsoft-client-id" name="microsoft_client_id"
              placeholder="{{ __('Enter microsoft client id') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- microsoft client secret --}}
          <div class="mb-2">
            <label for="microsoft-client-secret"
              class="text-md block text-gray-700">{{ __('Microsoft Client Secret') }}<span
                class="text-red-500">*</span></label>
            <input type="text"id="microsoft-client-id" name="microsoft_client_id"
              placeholder="{{ __('Enter microsoft client secret') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
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
