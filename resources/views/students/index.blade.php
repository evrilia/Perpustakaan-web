@extends('layouts.main')

@section('mainContainer')
@if (session()->has('successEdit'))
<div class="bg-gray-400 " id="hilangkan">
  <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between flex-wrap">
      <div class="w-0 flex-1 flex items-center">
        <span class="flex p-2 rounded-lg bg-blue-800">
          <!-- Heroicon name: outline/speakerphone -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
          </svg>
        </span>
        <p class="ml-3 font-medium text-white truncate">
          <span class="md:hidden"> {{ session('successEdit') }} </span>
          <span class="hidden md:inline"> {{ session('successEdit') }} </span>
        </p>
      </div>
      <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3" >
        <button id="btn-notif" type="button" class="-mr-1 flex p-2 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2 " >
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>
@endif
@if (session()->has('successDelete'))
<div class="bg-gray-400 " id="hilangkan">
  <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between flex-wrap">
      <div class="w-0 flex-1 flex items-center">
        <span class="flex p-2 rounded-lg bg-blue-800">
          <!-- Heroicon name: outline/speakerphone -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
          </svg>
        </span>
        <p class="ml-3 font-medium text-white truncate">
          <span class="md:hidden"> {{ session('successDelete') }} </span>
          <span class="hidden md:inline"> {{ session('successDelete') }} </span>
        </p>
      </div>
      <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3" >
        <button id="btn-notif" type="button" class="-mr-1 flex p-2 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2 " >
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>
@endif
@if (session()->has('success'))
<div class="bg-indigo-600 " id="hilangkan">
  <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between flex-wrap">
      <div class="w-0 flex-1 flex items-center">
        <span class="flex p-2 rounded-lg bg-indigo-800">
          <!-- Heroicon name: outline/speakerphone -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
          </svg>
        </span>
        <p class="ml-3 font-medium text-white truncate">
          <span class="md:hidden"> {{ session('success') }} </span>
          <span class="hidden md:inline"> {{ session('success') }} </span>
        </p>
      </div>
      <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3" >
        <button id="btn-notif" type="button" class="-mr-1 flex p-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2 " >
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>
@endif
<main class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 text-center uppercase">Student data list</h1>
    </div>
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <div class="ml-4 divide-y divide-gray-200">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Student information</h3>
                <p class="mt-1 text-sm text-gray-600">Contains student information</p>
              </div>
              
              <div class="ml-4 px-4 py-3 bg-gray-50 text-center sm:px-6">
                <a href="/students/create" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 no-underline">Input Students</a>
              </div>
            </div>
          </div>
          <div class="overflow-auto rounded-lg shadow hidden lg:block w-full mt-5 md:mt-0 md:col-span-2">
            <table class="table-auto w-full ">
              <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                  <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">#</th>
                  
                  <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Student's name</th>
                  <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">NIS</th>
                  <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Action</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                @foreach ($students as $student)    
                  <tr>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                        {{ $loop->iteration }}
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                        {{ $student->name }}
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                        {{ $student->nis }}
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                      <a href="{{ url('/students/' . $student->id . '/edit') }}" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-200 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 no-underline">Edit</a>
                      <form action="/students/destroy" method="post" class="inline">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="id" value="{{ $student->id }}">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-200 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 no-underline" id="deletePost" onclick="return confirm('Are you sure you want to delete this?');">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="grid grid-cols-1 xl:grid-col-2 gap-4 lg:hidden">
            @foreach ($students as $student)
            <div class="bg-white space-y-3 p-4 rounded-lg shadow">
              <div class="flex flex-col items-center space-x-2 text-sm">
                <div class="text-blue-500 font-bold">{{ $loop->iteration }}</div>
                <div>{{ $student->name }}</div>
                <div>{{ $student->nis }}</div>
              </div>
              <div class="flex justify-center">
                <div>
                  <a href="{{ url('/students/' . $student->id . '/edit') }}" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-400 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 no-underline">Edit</a>
                  <form action="/students/destroy" method="post" class="inline">
                    @method('delete')
                    @csrf
                    <input type="hidden" name="id" value="{{ $student->id }}">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 no-underline" id="deletePost" onclick="return confirm('Are you sure you want to delete this?');">Delete</button>
                  </form>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>
  </main>
@endsection