@extends("home")

@section("contenu")
    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-md-12">
                <div class="card"><br><br><br>
                    <div class="card-header"><center>{{ __("Enregistrement d'un utilisateur") }}</center></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('ensembles6.store') }}">
                                @csrf
                                <div class="text-center">
                                        @if($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{$message}}</p>
                                            </div>
                                        @endif
                                    </div>
                                <div class="row mb-3">
                                    <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>
                                    <div class="col-md-6">
                                        <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="name" autofocus>
                                        @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Téléphone 1') }}</label>
                                    <div class="col-md-6">
                                        <input id="tel1" type="text" class="form-control @error('tel1') is-invalid @enderror" name="tel1" value="{{ old('tel1') }}" required autocomplete="name" autofocus>
                                        @error('tel1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tel2" class="col-md-4 col-form-label text-md-end">{{ __('Téléphone2') }}</label>
                                    <div class="col-md-6">
                                        <input id="tel2" type="text" class="form-control @error('tel2') is-invalid @enderror" name="tel2" value="{{ old('tel2') }}" autocomplete="name" autofocus>
                                        @error('tel2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmer le mot de passe') }}</label>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
                                    <div class="col-md-6">
                                        <select name="role" class="form-select shadow-none @error('role') is-invalid @enderror" >
                                            <option value=""></option>
                                            <option value="user">Utilisateur</option>
                                            <option value="adminpers">Admin_Personnel</option>
                                            <option value="admin">Administrateur</option>
                                        </select>
                                        @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __("Enregistrer") }}
                                        </button>
                                <a href="{{route('ensembles6.index')}}" class="btn btn-danger">
                                    {{ __("Retour") }}
                                </a>
                            </div>
                        </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection