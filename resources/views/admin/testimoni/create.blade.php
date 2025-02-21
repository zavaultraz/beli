<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Testimoni') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="py-3 w-full rounded-lg bg-red-500 text-white px-4 mb-3">
                            {{$error}}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('testimoni.store') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Occupation -->
                    <div class="mt-4">
                        <x-input-label for="occupation" :value="__('Occupation')" />
                        <x-text-input id="occupation" class="block mt-1 w-full" type="text" name="occupation" :value="old('occupation')" required autocomplete="occupation" />
                        <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
                    </div>

                    <!-- Content -->
                    <div class="mt-4">
                        <x-input-label for="content" :value="__('Testimonial Content')" />
                        <textarea id="content" name="content" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm" rows="4" required>{{ old('content') }}</textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    <!-- Rating -->
                    <div class="mt-4">
                        <x-input-label for="rating" :value="__('Rating (1-5)')" />
                        <x-text-input id="rating" class="block mt-1 w-full" type="number" name="rating" min="1" max="5" :value="old('rating')" required />
                        <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                    </div>

                    <!-- Avatar -->
                    <div class="mt-4">
                        <x-input-label for="avatar" :value="__('Avatar')" />
                        <x-text-input id="avatar" class="block mt-1 w-full" type="file" name="avatar" required />
                        <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Submit Testimonial
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
