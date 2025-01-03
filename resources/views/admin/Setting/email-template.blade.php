@extends('layouts.app')

@section('content')
  <div class="border-2 border-gray-200 px-7 py-5 shadow-sm">
    <div class="flex items-center justify-between">
      <h2 class="pb-2 text-lg font-medium text-gray-800">{{ __('Email Template') }}</h2>
      <a href="{{ route('dashboard') }}" class="rounded-md bg-indigo-500 px-4 py-2 text-sm text-white hover:bg-indigo-600">
        {{ __('Back') }}
        <i class="ri-arrow-left-fill"></i>
      </a>
    </div>
    <form action="#" method="POST" class="rounded-lg bg-white p-2 shadow-lg">
      <div class="mt-2">
        {{-- email template --}}
        <div class="mb-3">
          <div class="mt-2 grid grid-cols-1 gap-3 md:grid-cols-2">
            {{-- paypal client id --}}
            <div class="mb-2">
              <label for="email-template" class="text-md block text-gray-700">{{ __('Select Email Template') }}</label>
              <select id="paypal-client-id" name="paypal-client-id" rows="3" placeholder="Enter paypal client id"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                <option value="">default</option>
                <option value="">default</option>
                <option value="">default</option>
                <option value="">default</option>
                <option value="">default</option>
              </select>
            </div>
            <div class="mb-2">
              <label for="email-subject" class="text-md block text-gray-700">{{ __('Email Subject') }}</label>
              <input id="email-subject" name="email-subject" rows="3" placeholder="Enter paypal client secret"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
          </div>
        </div>
        {{-- Custom section --}}
        <div class="mb-3">
          <div class="mt-4 grid grid-cols-1 gap-3">
            <div class="mb-2">
              <label for="" class="text-md block text-gray-700">{{ __('Email Message') }}</label>
              <textarea id="customPayment" name="custom_note" rows="3" placeholder="Enter paystack client secret"
                class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
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
@endsection
