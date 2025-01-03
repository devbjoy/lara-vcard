@extends('layouts.app')

@section('content')
  <div class="border-2 border-gray-200 px-7 py-5 shadow-sm">
    <div class="flex items-center justify-between">
      <h2 class="pb-2 text-lg font-medium text-gray-800">{{ __('Payment') }}</h2>
      <a href="{{ route('dashboard') }}" class="rounded-md bg-indigo-500 px-4 py-2 text-sm text-white hover:bg-indigo-600">
        {{ __('Back') }}
        <i class="ri-arrow-left-fill"></i>
      </a>
    </div>
    <form action="#" method="POST" class="rounded-lg bg-white p-2 shadow-lg">
      <div class="mt-2">
        {{-- paypal section --}}
        <div class="mb-3">
          <h3 class="text-md font-medium text-gray-800"">Paypal</h3>
          <div class="mt-2 grid grid-cols-1 gap-3 md:grid-cols-2">
            {{-- paypal client id --}}
            <div class="mb-2">
              <label for="paypal-client-id" class="text-md block text-gray-700">{{ __('Paypal Client Id') }}</label>
              <input id="paypal-client-id" name="paypal-client-id" rows="3" placeholder="Enter paypal client id"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
            <div class="mb-2">
              <label for="paypal-client-secret" class="text-md block text-gray-700">{{ __('Paypal Secret') }}</label>
              <input id="paypal-client-secret" name="paypal-client-secret" rows="3"
                placeholder="Enter paypal client secret"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
          </div>
        </div>
        {{-- strip section --}}
        <div class="mb-3">
          <h3 class="text-md font-medium text-gray-800"">Stripe</h3>
          <div class="mt-2 grid grid-cols-1 gap-3 md:grid-cols-2">
            {{-- strip client id --}}
            <div class="mb-2">
              <label for="strip-client-id" class="text-md block text-gray-700">{{ __('Publishable Key') }}</label>
              <input id="strip-client-id" name="strip-client-id" rows="3" placeholder="Enter strip client id"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
            <div class="mb-2">
              <label for="strip-client-secret" class="text-md block text-gray-700">{{ __('Secret Key') }}</label>
              <input id="strip-client-secret" name="strip-client-secret" rows="3"
                placeholder="Enter strip client secret"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
          </div>
        </div>
        {{-- Razorpay section --}}
        <div class="mb-3">
          <h3 class="text-md font-medium text-gray-800"">Razorpay</h3>
          <div class="mt-2 grid grid-cols-1 gap-3 md:grid-cols-2">
            {{-- Razorpay client id --}}
            <div class="mb-2">
              <label for="razorpay-client-id" class="text-md block text-gray-700">{{ __('Key Id') }}</label>
              <input id="razorpay-client-id" name="razorpay-key-id" rows="3" placeholder="Enter razorpay client id"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
            <div class="mb-2">
              <label for="razorpay-client-secret" class="text-md block text-gray-700">{{ __('Key Secret') }}</label>
              <input id="razorpay-client-secret" name="razorpay-client-secret" rows="3"
                placeholder="Enter razorpay client secret"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
          </div>
        </div>
        {{-- Paystack section --}}
        <div class="mb-3">
          <h3 class="text-md font-medium text-gray-800"">Paystack</h3>
          <div class="mt-2 grid grid-cols-1 gap-3 md:grid-cols-2">
            {{-- Paystack client id --}}
            <div class="mb-2">
              <label for="paystack-client-id" class="text-md block text-gray-700">{{ __('Paystack Public key') }}</label>
              <input id="paystack-client-id" name="paystack-client-id" rows="3"
                placeholder="Enter paystack client id"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
            <div class="mb-2">
              <label for="paystack-client-secret"
                class="text-md block text-gray-700">{{ __('Paystack Secret Key') }}</label>
              <input id="paystack-client-secret" name="paystack-client-secret" rows="3"
                placeholder="Enter paystack client secret"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            </div>
          </div>
        </div>
        {{-- Custom section --}}
        <div class="mb-3">
          <h3 class="text-md font-medium text-gray-800"">Bank Transfer / Custom Payment</h3>
          <div class="mt-4 grid grid-cols-1 gap-3">
            {{-- custom checkbox --}}
            <div class="mb-2 flex items-center gap-2">
              <input type="checkbox" id="paystack-custom-id" name="paystack-client-id"
                class="resize-none rounded-md border-2 border-indigo-500" />
              <label for="paystack-custom-id"
                class="text-md text-gray-700">{{ __('Active Bank Transfer / Custom Payment') }}</label>
            </div>
            <div class="mb-2">
              <label for=""
                class="text-md block text-gray-700">{{ __('Add details for bank transfer or custom payment') }}</label>
              <textarea id="customPayment" name="custom_note" rows="3" placeholder="Enter paystack client secret"
                class="w-full resize-none rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
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
