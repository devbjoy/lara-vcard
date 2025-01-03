@extends('layouts.app')

@section('content')
  <div class="border-2 border-gray-200 px-7 py-5 shadow-sm">
    <div class="flex items-center justify-between">
      <h2 class="pb-2 text-lg font-medium text-gray-800">{{ __('Google Recapture') }}</h2>
      <a href="{{ route('dashboard') }}" class="rounded-md bg-indigo-500 px-4 py-2 text-sm text-white hover:bg-indigo-600">
        {{ __('Back') }}
        <i class="ri-arrow-left-fill"></i>
      </a>
    </div>
    <form action="#" method="POST" class="rounded-lg bg-white p-2 shadow-lg">
      <div class="mt-2">
        {{-- paypal section --}}
        <div class="mb-3">
          <h3 class="text-md font-medium text-gray-800"">Google reCapture V3</h3>
          <div class="mt-2 grid grid-cols-1 gap-3 md:grid-cols-2">
            {{-- paypal client id --}}
            <div class="mb-2">
              <label for="site-key" class="text-md block text-gray-700">{{ __('Site Key') }}</label>
              <input id="site-key" name="site-key" rows="3" placeholder="Enter google recapture site key"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
            <div class="mb-2">
              <label for="secret-key" class="text-md block text-gray-700">{{ __('Secret key') }}</label>
              <input id="secret-key" name="secret-key" rows="3" placeholder="Enter google recapture secret key"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
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
