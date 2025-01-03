@extends('layouts.app')

@section('content')
  <div class="border-2 border-gray-200 px-7 py-5 shadow-sm">
    <div class="flex items-center justify-between">
      <h2 class="pb-2 text-lg font-medium text-gray-800">{{ __('Seo') }}</h2>
      <a href="{{ route('dashboard') }}" class="rounded-md bg-indigo-500 px-4 py-2 text-sm text-white">{{ __('Back') }}
        <i class="ri-arrow-left-fill"></i>
      </a>
    </div>
    <form action="#" method="POST" class="rounded-lg bg-white p-2 shadow-lg">
      <div class="mt-2">

        <div class="grid grid-cols-1 gap-3">
          {{-- meta title --}}
          <div class="mb-2">
            <label for="meta-title" class="text-md block text-gray-700">{{ __('Meta Title') }}<span
                class="text-red-500">*</span></label>
            <input type="text" id="meta-title" placeholder="{{ __('Enter meta title') }}" name="meta_title"
              class="h-10 w-full rounded-md border p-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- meta description --}}
          <div class="mb-2">
            <label for="meta-description" class="text-md block text-gray-700">{{ __('Meta Description') }}<span
                class="text-red-500">*</span></label>
            <input type="text" id="meta-description" placeholder="{{ __('Enter meta description') }}"
              name="meta_description"
              class="h-10 w-full rounded-md border p-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
          </div>
          {{-- meta keyword --}}
          <div class="mb-2">
            <label for="meta-keyword" class="text-md block text-gray-700">{{ __('Meta Keyword') }}<span
                class="text-red-500">*</span></label>
            <input type="text" id="meta-keyword" name="meta_keyword" placeholder="{{ __('Enter meta description') }}"
              class="h-10 w-full rounded-md border p-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
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
