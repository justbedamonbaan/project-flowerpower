@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-info text-white">{{ __('Nieuwe User toevoegen') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('admin.users.store') }}" >
                            @csrf
                            @method('post')

                            <div class="col-md-6 mb-3">
                                <label for="name">Name</label>
                                <input type="text" name ="name" class="form-control"  required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email">Email</label>
                                <input type="text" name ="email" class="form-control"  required>
                            </div>

                        <div class="col-md-6 mb-3">
                            <label for="voorletters">voorletters</label>
                            <input type="text" name ="voorletters" class="form-control"  required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="tussenvoegsel">tussenvoegsel</label>
                            <input type="text" name ="tussenvoegsel" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="achternaam">achternaam</label>
                            <input type="text" name ="achternaam" class="form-control"  required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="adres">adres</label>
                            <input type="text" name ="adres" class="form-control"  required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="postcode">postcode</label>
                            <input type="text" name ="postcode" class="form-control"  required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="woonplaats">woonplaats</label>
                            <input type="text" name ="woonplaats" class="form-control"  required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="geboortedatum">geboortedatum</label>
                            <input type="date" name ="geboortedatum" class="form-control"  required>
                        </div>

                            <div class="col-md-6 mb-3">
                                <label for="password">Password</label>
                                <input type="password" name ="password" class="form-control"  required>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-outline-primary" type="submit">Toevoegen</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
