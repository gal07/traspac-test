<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">contacts</i>
        </div>
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
        <div class="card-content">
            <h4 class="card-title">{{ __('Profile Information') }}</h4>
            <form method="post" action="{{ route('profile.update') }}">

                @csrf
                @method('patch')
                <br>
                <div class="form-group label-floating">
                    <x-input-label class="control-label" for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div class="form-group label-floating">
                    <x-input-label class="control-label" for="email" :value="__('Password')" />
                    <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <button type="submit" class="btn btn-fill btn-rose">{{ __('Save') }}</button>
                @if (session('status') === 'profile-updated')
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
