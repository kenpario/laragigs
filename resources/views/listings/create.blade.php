@extends('layout')
@section('content')
    <div class="mx-4">
        <div class="dark:bg-gray-800 bg-gray-200 p-10 rounded max-w-lg mx-auto mt-24 rounded-lg shadow-lg">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1 dark:text-white">
                    Create a Gig
                </h2>
                <p class="mb-4 dark:text-white">Post a gig to find a developer</p>
            </header>

            <form method="POST" action="/listings">
                @csrf
                <div class="mb-6">
                    <label for="company" class="inline-block text-lg mb-2 dark:text-white">Company Name</label>

                    @error('company')
                        <p class="text-red-500 text-xs m-1">{{ $message }}</p>
                    @enderror

                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                        value="{{ old('company') }}" />
                </div>

                <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2 dark:text-white">Job Title</label>

                    @error('title')
                        <p class="text-red-500 text-xs m-1">{{ $message }}</p>
                    @enderror

                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                        value="{{ old('title') }}" placeholder="Example: Senior Laravel Developer" />
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block text-lg mb-2 dark:text-white">Job Location</label>

                    @error('location')
                        <p class="text-red-500 text-xs m-1">{{ $message }}</p>
                    @enderror

                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                        value="{{ old('location') }}" placeholder="Example: Remote, Boston MA, etc" />
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2 dark:text-white">Contact Email</label>

                    @error('email')
                        <p class="text-red-500 text-xs m-1">{{ $message }}</p>
                    @enderror

                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                        value="{{ old('email') }}" placeholder="Example: yourname@example.com"/>
                </div>

                <div class="mb-6">
                    <label for="website" class="inline-block text-lg mb-2 dark:text-white">
                        Website/Application URL
                    </label>

                    @error('website')
                        <p class="text-red-500 text-xs m-1">{{ $message }}</p>
                    @enderror
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                        value="{{ old('website') }}" placeholder="Example: yourcompany.com"/>
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2 dark:text-white">
                        Tags (Comma Separated)
                    </label>

                    @error('tags')
                        <p class="text-red-500 text-xs m-1">{{ $message }}</p>
                    @enderror
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                        value="{{ old('tags') }}" placeholder="Example: Laravel, Backend, Postgres, etc" />

                </div>

                {{-- <div class="mb-6">
                    <label for="logo" class="inline-block text-lg mb-2 dark:text-white">
                        Company Logo
                    </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                </div> --}}

                <div class="mb-6">
                    <label for="description" class="inline-block text-lg mb-2 dark:text-white">
                        Job Description
                    </label>
                    @error('description')
                        <p class="text-red-500 text-xs m-1">{{ $message }}</p>
                    @enderror
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                        placeholder="Include tasks, requirements, salary, etc"> {{ old('description') }}</textarea>
                </div>

                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black dark:text-white">
                        Create Gig
                    </button>

                    <a href="/" class="dark:text-white text-black ml-4"> Back </a>
                </div>
            </form>
        </div>
    </div>
@endsection