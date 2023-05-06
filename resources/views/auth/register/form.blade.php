<form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nama Lengkap</label>
        <input
          type="text"
          class="form-control"
          id="name"
          name="name"
          placeholder="Masukan Nama Kamu"
          autofocus
          required autocomplete="name" 
        />
        <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email or Username</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Masukan Email Kamu" required autocomplete="email" autofocus />
        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
      </div>
      <div class="mb-3 form-password-toggle">
        <label class="form-label" for="password">Password</label>
        <div class="input-group input-group-merge">
          <input
            type="password"
            id="password"
            class="form-control"
            name="password"
            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            aria-describedby="password"
            required autocomplete="new-password" 
          />
          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
          <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

        </div>
      </div>

      <div class="mb-3 form-password-toggle">
        <label class="form-label" for="password_confirmation">Konfirmasi Password</label>
        <div class="input-group input-group-merge">
          <input
            type="password"
            id="password_confirmation"
            class="form-control"
            name="password_confirmation"
            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            aria-describedby="password_confirmation"
            required autocomplete="new-password" 
          />
          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
      </div>


      <div class="mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
          <label class="form-check-label" for="terms-conditions">
            I agree to
            <a href="javascript:void(0);">privacy policy & terms</a>
          </label>
        </div>
      </div>
      <button class="btn btn-primary d-grid w-100">Mendaftar</button>
    </form>


</form>
