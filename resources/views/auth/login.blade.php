@extends('layouts.master')
@section('title', 'Connexion')

@section('content')
    <div class="container-fluid connection animated fadeIn">
        <div class="row-fluid">
            <div class="col-xs-offset-4 col-xs-4">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Connexion</h4>
                    </div>
                    @if (Session::get('error') == \App\Constants::MSG_ERROR_CODE)

                        @if (Session::get('messages'))
                            <div class="alert alert-danger" role="alert">
                        @foreach (Session::get('messages') as $message)
                            {{ $message }}</br>
                        @endforeach
                            </div>
                            @endif

                    @endif
                    <form method="post" action="{{ route('auth::login') }}">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="sr-only" for="Identifiant">Identifiant</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="email" class="form-control" id="Identifiant" name="email" placeholder="Identifiant">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="mdp">Mot de Passe</label>

                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Mot de Passe">
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="checkbox">
                                    <input type="checkbox" id="rememberMe" class="checkbox-primary text-center" name="rememberMe">
                                    <label for="checkbox1">
                                        Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="modal-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">S'authentifier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection