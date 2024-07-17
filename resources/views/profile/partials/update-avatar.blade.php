<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('avatar.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div>
            <x-input-label for="des" :value="__('deskripsi')" />
            <textarea id="des" name="des" type="text"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                autocomplete="des"></textarea>
            <x-input-error :messages="$errors->updatePassword->get('des')" class="mt-2" />
        </div>
        <br>
        <div>
            <x-input-label for="fb" :value="__('Facebook')" />
            <x-text-input id="fb" name="fb" type="text"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                autocomplete="fb" />
            <x-input-error :messages="$errors->updatePassword->get('fb')" class="mt-2" />
        </div>
        <br>
        <div>
            <x-input-label for="x" :value="__('Twitter')" />
            <x-text-input id="x" name="x" type="text"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                autocomplete="x" />
            <x-input-error :messages="$errors->updatePassword->get('x')" class="mt-2" />
        </div>
        <br>
        <div>
            <x-input-label for="ig" :value="__('Instagram')" />
            <x-text-input id="ig" name="ig" type="text"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                autocomplete="ig" />
            <x-input-error :messages="$errors->updatePassword->get('ig')" class="mt-2" />
        </div>
        <br>

        <div>
            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input id="avatar" name="avatar" type="file"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                autocomplete="avatar" />
            <x-input-error :messages="$errors->updatePassword->get('avatar')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'Profile Update')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
