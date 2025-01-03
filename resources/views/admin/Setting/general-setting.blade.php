@extends('layouts.app')

@section('content')
  <div class="border-2 border-gray-200 px-7 py-5 shadow-sm">

    <div class="flex items-center justify-between">
      <h2 class="pb-2 text-lg font-medium text-gray-800">{{ __('General Setting') }}</h2>
      <a href="{{ route('dashboard') }}" class="rounded-md bg-indigo-500 px-4 py-2 text-sm text-white">{{ __('Back') }}
        <i class="ri-arrow-left-fill"></i>
      </a>
    </div>
    <form action="#" method="POST" class="rounded-lg bg-white p-2 shadow-lg">
      <div class="mt-2">
        <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
          {{-- company name --}}
          <div class="mb-2">
            <label for="company-name" class="text-md block text-gray-700">{{ __('Company Name') }}<span
                class="text-red-500">*</span></label>
            <input type="text"id="company-name" name="company_name" placeholder="{{ __('Enter company name') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- footer text --}}
          <div class="mb-2">
            <label for="footer-text" class="text-md block text-gray-700">{{ __('Footer Text') }}<span
                class="text-red-500">*</span></label>
            <input type="text"id="footer-text" name="footer_text" placeholder="{{ __('Enter footer text') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- google analytics-measurement id --}}
          <div class="mb-2">
            <label for="google-analytics-measurement-id"
              class="text-md block text-gray-700">{{ __('Google Analytics - Measurement ID') }}<span
                class="text-red-500">*</span></label>
            <input type="text"id="google-analytics-measurement-id" name="google_analytics_measurement_id"
              placeholder="{{ __('Enter google analytic id') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- subscription plane --}}
          <div class="mb-2">
            <label for="subscription-alert"
              class="text-md block text-gray-700">{{ __('Show Subscription Plane Expire Alert') }}<span
                class="text-red-500">*</span></label>
            <select id="subscription-alert" name="subscription_alert"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="Dolor">3 Days</option>
              <option value="Dolor">7 Days</option>
              <option value="Euro">30 Days</option>
            </select>
          </div>
          {{-- currency code --}}
          <div class="mb-2">
            <label for="currency-code" class="text-md block text-gray-700">{{ __('Currency Code') }}<span
                class="text-red-500">*</span></label>
            <input type="text"id="currency-code" name="currency_code" placeholder="{{ __('Enter currency code ') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- RM --}}
          <div class="mb-2">
            <label for="rm" class="text-md block text-gray-700">{{ __('RM') }}<span
                class="text-red-500">*</span></label>
            <input type="text" id="rm" name="rm" placeholder="{{ __('Enter RM') }}"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- timezone --}}
          <div class="mb-2">
            <label for="timezone" class="text-md block text-gray-700">{{ __('Timezone') }}<span
                class="text-red-500">*</span></label>
            <select id="timezone" name="timezone"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="Dolor">Asia/singapore-gmt+08.00 - 20:31 pm
              <option>
              <option value="Dolor">Asia/singapore-gmt+08.00 - 20:31 pm
              <option>
              <option value="Dolor">Asia/singapore-gmt+08.00 - 20:31 pm
              <option>
              <option value="Dolor">Asia/singapore-gmt+08.00 - 20:31 pm
              <option>
              <option value="Dolor">Asia/singapore-gmt+08.00 - 20:31 pm
              <option>
              <option value="Dolor">Asia/singapore-gmt+08.00 - 20:31 pm
              <option>
              <option value="Dolor">Asia/singapore-gmt+08.00 - 20:31 pm
              <option>
            </select>
          </div>
          {{-- date format --}}
          <div class="mb-2">
            <label for="date-format" class="text-md block text-gray-700">{{ __('Date Format') }}<span
                class="text-red-500">*</span></label>
            <select id="date-format" name="date_format"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="MM/DD/YYYY">MM/DD/YYYY</option>
              </option>
              <option value="DD/MM/YYYY">DD/MM/YYYY</option>
              </option>
              <option value="YYYY/MM/DD">YYYY/MM/DD</option>
              </option>
              <option value="MM.DD.YYYY">MM.DD.YYYY</option>
              </option>
              <option value="DD.MM.YYYY">DD.MM.YYYY</option>
              </option>
              <option value="YYYY.MM.DD">YYYY.MM.DD</option>
              </option>
            </select>
          </div>
          {{-- time format --}}
          <div class="mb-2">
            <label for="time-format" class="text-md block text-gray-700">{{ __('Time Format') }}<span
                class="text-red-500">*</span></label>
            <select id="time-format" name="time_format"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="12">12 hours</option>
              <option value="24">24 hours</option>
            </select>
          </div>
          {{-- default language --}}
          <div class="mb-2">
            <label for="language" class="text-md block text-gray-700">{{ __('Default Language') }}<span
                class="text-red-500">*</span></label>
            <select id="language" name="default_language"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="en">English</option>
              <option value="bn">Bangla</option>
              <option value="sp">Spanish</option>
              <option value="hi">Hindi</option>
            </select>
          </div>
          {{-- Required email confirmation for new user --}}
          <div class="mb-2">
            <label for="email-confirmation"
              class="text-md block text-gray-700">{{ __('Required email confirmation for new user') }}<span
                class="text-red-500">*</span></label>
            <select id="email-confirmation" name="email_confirmation"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="Dolor">no
              <option>
              <option value="Dolor">yes
              <option>
            </select>
          </div>
          {{-- torn of new user registration --}}
          <div class="mb-2">
            <label for="user-registration"
              class="text-md block text-gray-700">{{ __('Turn off new user registration') }}<span
                class="text-red-500">*</span></label>
            <select id="user-registration" name="user_registration"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="Dolor">no
              <option>
              <option value="Dolor">yes
              <option>
            </select>
          </div>
        </div>
        <div class="grid grid-cols-1 gap-3">
          {{-- torn of custom domain system --}}
          <div class="mb-2">
            <label for="custom-domain"
              class="text-md block text-gray-700">{{ __('Turn off custom domain system') }}<span
                class="text-red-500">*</span></label>
            <select id="custom-domain" name="custom_domain"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="Dolor">no
              <option>
              <option value="Dolor">yes
              <option>
            </select>
          </div>
          {{-- theme color --}}
          <div class="mb-2">
            <label for="theme-color" class="text-md block text-gray-700">{{ __('Theme color') }}<span
                class="text-red-500">*</span></label>
            <input type="color" id="theme-color" name="theme_color"
              class="h-10 w-full rounded-lg border p-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
        </div>
        <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
          {{-- site-logo full --}}
          <div class="mb-2">
            <label for="site-logo-full" class="text-md block text-gray-700">{{ __('Site Logo Full') }} <span
                class="text-red-500">*</span></label>
            <input type="file"id="site-logo-full" name="site_logo_full"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
            <img src="https://placehold.co/100x100" alt="" class="mt-1 h-10 w-20 rounded object-cover">
          </div>
          {{-- site-logo half --}}
          <div class="mb-2">
            <label for="site-logo-half" class="text-md block text-gray-700">{{ __('Site Logo Half') }} <span
                class="text-red-500">*</span></label>
            <input type="file"id="site-logo-half" name="site_logo_half"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
            <img src="https://placehold.co/100x100" alt="" class="mt-1 h-10 w-20 rounded object-cover">
          </div>
          {{-- fav icon --}}
          <div class="mb-2">
            <label for="fav-icon" class="text-md block text-gray-700">{{ __('Fav Icon') }}<span
                class="text-red-500">*</span></label>
            <input type="file"id="fav-icon" name="fav-icon"
              class="w-full rounded-md border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- default  currency --}}
          {{-- <div class="mb-2">
            <label for="default-currency" class="block text-gray-700 text-md">{{ __('Default Currency') }}<span
                class="text-red-500">*</span></label>
            <select id="default-currency" name="default_currency"
              class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400">
              <option value="Dolor">Dolor</option>
              <option value="Dolor">Dolor</option>
              <option value="Euro">Euro</option>
            </select>
          </div> --}}
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
