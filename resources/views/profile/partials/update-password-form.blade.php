<div class="col-md-12">
    <div class="card">

        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">contacts</i>
        </div>
      
        <div class="card-content">
            <h4 class="card-title">{{ __('Update Password') }}</h4>
            <form method="post" action="{{ route('password.update') }}">

                @csrf
                @method('put')

                <div class="form-group label-floating">
                    <x-input-label class="control-label" for="update_password_current_password" :value="__('Current Password')" />
                    <x-text-input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="text-danger" />
                </div>

                <div class="form-group label-floating">
                    <x-input-label class="control-label" for="update_password_password" :value="__('New Password')" />
                    <x-text-input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="text-danger" />
                </div>

                <div class="form-group label-floating">
                    <x-input-label class="control-label" for="update_password_password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="text-danger" />
                </div>

                <button type="submit" class="btn btn-fill btn-rose">{{ __('Save') }}</button>
                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-success"
                    >{{ __('Saved.') }}</p>
                @endif

            </form>
        </div>
    </div>
</div>

