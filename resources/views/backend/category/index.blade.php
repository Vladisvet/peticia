@extends('admin.admin_master')
@section('admin')

<main>
<div class="content-wraper">
<div class="container-fluid pt-5 px-5" ><br>
    <a class="mt-0 mb-2 btn btn-outline-primary" style="float:right;" href="{{ url('/') }}">Späť na hlavnú stránku</a>

        <div class="">
            <h2 class=" mt-5">Kategórie</h2>
        </div>

        <div class="col-6">

        </div>

    <div class="">
        <a class="mt-1 mb-5 btn btn-primary" href="{{ route('add.category') }}">Pridaj Kategóriu</a>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID kategórie</th>
            <th scope="col">Kategórie</th>
            <th scope="col">Akcia</th>
        </tr>
        </thead>
        <tbody>
            {{-- @php($i=1) --}}
        @foreach ($category as $row)
            <tr>
                <th scope="row">{{ $category->firstItem()+$loop->index }}</th>
                <td>{{ $row->id }}</td>
                <td>{{ $row->category }}</td>
                <td>
                    <a href="{{ route('edit.category', $row->id) }}" class="btn btn-info">Uprav</a>
                    <a href="{{ route('delete.category', $row->id) }}" onclick="return confirm('Ste si istý, že chcete zmazať túto kategóriu?')" class="btn btn-danger">Vymaž</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $category->links('pagination-links') }}
    </div>
</div>
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

