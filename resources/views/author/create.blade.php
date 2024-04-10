
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Add New Author') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('authors.store') }}">
              @csrf
            <div class="form-group">
              <label for="first_name">{{ __('First Name') }}</label>
              <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autofocus>
              @error('first_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="last_name">{{ __('Last Name') }}</label>
              <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required>
              @error('last_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="birthday">{{ __('Birthday') }}</label>
              <input id="birthday" type="text" class="form-control @error('birthday') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required>
              @error('last_name')
                <span class="invalid-feedback" role="alert">
                  strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="biography">{{ __('Biography') }}</label>
              <input id="biography" type="text" class="form-control @error('biography') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required>
              @error('last_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="gender">{{ __('Gender') }}</label>
              <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required>
              @error('last_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="place_of_birth">{{ __('Place of birth') }}</label>
              <input id="place_of_birth" type="text" class="form-control @error('place_of_birth') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required>
              @error('last_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                {{ __('Add Author') }}
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
