@extends('admin.admin_master')
@section('admin')

<main>
<div class="content-wraper">
<div class="container-fluid pt-5 px-5" ><br>
    <a class="mt-0 mb-5 btn btn-outline-primary" style="float:right;" href="{{ url('/backend-petitions') }}">Späť na zoznam petícií</a>

        <div class=" mt-5">
            <h2 class="">Uprav petíciu</h2>
        </div>
@php
        $petitions = DB::table('petitions')
        ->where('id',$id)
        ->first();
//dd($petitions);
@endphp
<form action="{{ route('update.backend-petition', $petitions->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="table-responsive mt-5 w-100">
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th scope="col">category_id</th>
            <th scope="col">peticia_id</th>
            <th scope="col">user_id</th>
            <th scope="col">subdomain</th>
            <th scope="col">predseda_name	</th>
            <th scope="col">vybor_names</th>
            <th scope="col">title</th>
            <th scope="col">image</th>
            <th scope="col">details</th>
            <th scope="col">embed_code</th>
            {{-- <th scope="col">status_video</th> --}}
            <th scope="col">status_peticia</th>
            <th scope="col">create_date</th>
            <th scope="col">akcia</th>
        </tr>
        </thead>
        <tbody>
            <tr style="max-width: 50%;">
                <td><input type="text" name="category_id" value="{{ $petitions->category_id }}"></td>
                <td> {{ $petitions->id }}</td>
                <td>{{ $petitions->user_id }}</td>
                <td><textarea name="subdomain" id="subdomain" cols="10" rows="3">{{ $petitions->subdomain }}</textarea></td>
                <td><input type="text"  name="predseda_name"value="{{ $petitions->predseda_name }}"></td>
                <td><textarea name="vybor_names" id="vybor_names" cols="10" rows="3">{{ $petitions->vybor_names }}</textarea></td>
                <td><textarea name="title" id="title" cols="15" rows="10"> {{ $petitions->title }}</textarea></td>
                <td><input type="file" name="image" value="{{ $petitions->image }}"><br><br>Súčasný img:<br>{{ $petitions->image }}<br><br><img src="{{ URL::to($petitions->image) }}" style="width: 270px;" alt=""></td>
                <td><textarea name="details" id="details" cols="40" rows="30"> {{ $petitions->details }}</textarea></td>
                <td><textarea name="embed_code" id="embed_code" cols="20" rows="30"> {{ $petitions->embed_code }}</textarea></td>
                {{-- <td><input type="text" name="status_video" value=""><p>Vlož 1 pre aktiváciu, prázdne pole pre deaktiváciu</p></td> --}}
                <td><input type="text" name="status_peticia" value=""><p>Vlož 1 pre aktiváciu, prázdne pole pre deaktiváciu</p></td>
                <td><input type="text" name="create_date" value="{{ $petitions->create_date }}"></td>
                <td>

                <button type="submit" class="btn btn-info px-4">Ulož</button>

                </td>
                <input type="hidden" name="oldimage" value="{{ $petitions->image }}">
            </tr>
        </tbody>
    </table>
</div>
</form>
</main>
@endsection

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000">
      <div class="toast-header">
          <i class="bi bi-check-circle rounded me-2" style="font-size: 1.5rem; color: cornflowerblue;"></i>
        {{-- <img src="..." class="rounded me-2" alt="..."> --}}
        <strong class="me-auto">Kategória pridaná</strong>
        <small></small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body bg-light">
        <h6>Úspešne ste vytvorili novú kategóriu!</h6>
      </div>
    </div>
  </div>



