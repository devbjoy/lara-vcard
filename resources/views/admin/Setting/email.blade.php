@extends('layouts.app')

@section('content')
  <div class="border-2 border-gray-200 px-7 py-5 shadow-sm">

    <div class="flex items-center justify-between">
      <h2 class="pb-2 text-lg font-medium text-gray-800">{{ __('Email Setting') }}</h2>
      <a href="{{ route('dashboard') }}" class="rounded-md bg-indigo-500 px-4 py-2 text-sm text-white">{{ __('Back') }}
        <i class="ri-arrow-left-fill"></i>
      </a>
    </div>
    <form action="#" method="POST" class="rounded-lg bg-white p-2 shadow-lg">
      <div class="mt-2">
        <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
          {{-- library email --}}
          <div class="mb-2">
            <label for="library-email" class="text-md block text-gray-700">{{ __('Company Name') }}</label>
            <select id="library-email" name="library-email"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="">default</option>
              <option value="">default</option>
              <option value="">default</option>
              <option value="">default</option>
            </select>
          </div>
          {{-- from email --}}
          <div class="mb-2">
            <label for="from-email" class="text-md block text-gray-700">{{ __('From Email') }}</label>
            <input type="text"id="from-email" name="from-email" placeholder="{{ __('Enter support email') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- smtp host --}}
          <div class="mb-2">
            <label for="smtp-host" class="text-md block text-gray-700">{{ __('SMTP Host') }}</label>
            <input type="text"id="smtp-host" name="google_analytics_measurement_id"
              placeholder="{{ __('Enter your smtp host') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- smtp port --}}
          <div class="mb-2">
            <label for="smtp-port" class="text-md block text-gray-700">{{ __('SMTP Port') }}</label>
            <input type="text" id="smtp-port" name="smtp-port" placeholder="{{ __('Enter your smtp port') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
          </div>
          {{-- username or email --}}
          <div class="mb-2">
            <label for="username" class="text-md block text-gray-700">{{ __('Username or Email') }}</label>
            <input type="text"id="username" name="username" placeholder="{{ __('Enter your username or email') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- password --}}
          <div class="mb-2">
            <label for="password" class="text-md block text-gray-700">{{ __('Password') }}</label>
            <input type="text" id="password" name="password" placeholder="{{ __('Enter your password') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- encryption --}}
          <div class="mb-2">
            <label for="encryption" class="text-md block text-gray-700">{{ __('Encryption') }}</label>
            <select id="encryption" name="encryption"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="SSL">SSL</option>
              <option value="SHL">TLS</option>
            </select>
          </div>
          {{-- send test mail to --}}
          <div class="mb-2">
            <label for="send-mail" class="text-md block text-gray-700">{{ __('Send test mail to') }}</label>
            <input type="text" id="send-mail" name="send-mail" placeholder="{{ __('Enter send mail') }}"
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
