<section>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-lg-4">
                <h1 class="h3 mb-1">Update Password</h1>
                <p class="text-muted">Ensure your account is using a long, random password to stay secure.</p>
            </div>
            <div class="col-lg-8 col-xl-5">
                <div class="mb-4">
                    <x-input-label for="update_password_current_password" :value="__('Current Password')" />
                    <x-text-input id="update_password_current_password" name="current_password" type="password"
                        class="form-control" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="update_password_password" :value="__('New Password')" />
                    <x-text-input id="update_password_password" name="password" type="password" class="form-control"
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>

                <div class="mb">
                    <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="update_password_password_confirmation" name="password_confirmation"
                        type="password" class="form-control" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-8 col-xl-5 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Update Password</button>
            </div>
        </div>
    </form>
</section>
