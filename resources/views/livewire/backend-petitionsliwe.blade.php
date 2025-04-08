<div>
    @php
    //$petitions = DB::table('petitions')->paginate(2);
    @endphp
    <div class="container  mt-5">
        <div class="row">
        <div class="col-md-12">
        <div class="card w-120">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Zoznam petícií</h3>
                    </div>
                    <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Vyhľadaj..." wire:model.debounce.500ms="searchPet">
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table-bordered table-striped table-responsive w-100">
        <div class="table ">
            <thead>
                <tr>
                    <th scope="col">###</th>
                    <th scope="col">peticia_id</th>
                    <th scope="col">user_id</th>
                    <th scope="col">category_id</th>
                    <th scope="col">subdomain</th>
                    <th scope="col">predseda_name	</th>
                    <th scope="col">vybor_names</th>
                    <th scope="col">title</th>
                    <th scope="col">image</th>
                    <th scope="col">súčasný_image</th>
                    <th scope="col">details</th>
                    <th scope="col">embed_code</th>
                    {{-- <th scope="col">status_video</th> --}}
                    <th scope="col">status_peticia</th>
                    <th scope="col">create_date</th>
                    <th scope="col">akcia</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach ($petitions as $row )
                    <tr style="max-width: 100%;">
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->user_id }}</td>
                        <td>{{ $row->category_id }}</td>
                        <td>{{ $row->subdomain }}</td>
                        <td>{{ $row->predseda_name }}</td>
                        <td><textarea name="" id="" cols="10" rows="3">{{ $row->vybor_names }}</textarea></td>
                        <td><textarea name="" id="" cols="10" rows="3"> {{ $row->title }}</textarea></td>
                        <td><textarea name="" id="" cols="10" rows="3">{{ $row->image }}</textarea></td>
                        <td><img src="{{ URL::to($row->image) }}" style="width: 170px;" alt=""></td>
                        <td><textarea name="" id="" cols="30" rows="3"> {{ $row->details }} </textarea></td>
                        <td><textarea name="" id="" cols="30" rows="3"> {{ $row->embed_code }}</textarea></td>
                        {{-- <td>{{ $row->status_video }}</td> --}}
                        <td>{{ $row->status_peticia }}</td>
                        <td>{{ $row->create_date }}</td>
                        <td>
                            {{-- <a href="{{ route('adminedit.petition',$row->id) }}" class="btn btn-info pe-3">Uprav</a>
                            <a href="{{ route('admindelete.petition',$row->id) }}" onclick="return confirm('Ste si istý, že chcete ZMAZAŤ túto petíciu?')" class="btn btn-danger" type='submit'>Vymaž</a> --}}

                            <div class="btn-group">
                                <button class="btn btn-danger btn-sm">Vymaž</button>
                                <button class="btn btn-success btn-sm">Uprav</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </div>
    </table>
    {{ $petitions->links('pagination-linkslw') }}
    {{-- {{ $petitions->links('pagination-links') }} --}}
    {{-- {{ $petitions->links() }} --}}
    </div>
</div>
