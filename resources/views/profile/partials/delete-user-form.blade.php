<section class="space-y-6">
    <div class="text-sm text-red-600 mb-4">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
    </div>

    <button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-red-600 text-white px-6 py-3 rounded-xl font-semibold shadow-lg shadow-red-600/20 hover:bg-red-700 transition-all active:scale-95 flex items-center gap-2 cursor-pointer w-full sm:w-auto justify-center"
    >
        {{ __('Delete Account') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-xl font-bold text-slate-900 mb-2">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="text-sm text-slate-500 mb-6">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <label for="password" class="sr-only">{{ __('Password') }}</label>

                <input
                    id="password"
                    name="password"
                    type="password"
                    class="input-field"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <button type="button" x-on:click="$dispatch('close')" class="px-4 py-2 bg-white border border-slate-300 rounded-lg text-slate-700 hover:bg-slate-50 font-medium transition-colors">
                    {{ __('Cancel') }}
                </button>

                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-medium shadow-md shadow-red-600/20 transition-colors">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
