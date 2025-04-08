{{-- @php

//dd($users);
@endphp --}}
<div>
        <div class="container mt-4">
            <div class="row">
                <div> <a class="mt-2 me-3 py-2 px-4 btn  btn-outline-primary" style="float:right;" href="{{ url('/') }}">Späť na hlavnú stránku</a></div><br>
            </div>
        </div>

    <div class="section mt-4">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Všetci Users</h3>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Vyhľadaj..." wire:model="searchTerm">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>id user</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th scope="col">akcia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        @if ($user->role == 0)
                                        <td>
                                            <a href="{{ route('admindelete.user',$user->id) }}" onclick="return confirm('Ste si istý, že chcete ZMAZAŤ tohto usera?')" class="btn btn-danger" type='submit'>Vymaž</a>
                                        </td>
                                        @else
                                        <td>
                                        <a href="{{ route('admindelete.user',$user->id) }}" onclick="return confirm('Ste si istý, že chcete ZMAZAŤ tohto usera?')" class="btn btn-danger disabled ">Vymaž</a>
                                        @endif
                                        </td>

                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links('pagination-linkslw') }}
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>


