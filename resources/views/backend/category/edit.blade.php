@extends('admin.admin_master')
@section('admin')

        {{-- <!-- Toast -->
          <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <img src="..." class="rounded me-2" alt="...">
              <strong class="me-auto">Bootstrap</strong>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
              Hello, world! This is a toast message.
            </div>
          </div> --}}
<main>
<div class="content-wraper">
    <div class="container-fluid pt-5 px-5" ><br>
<div class="">
    <h2 class=" mt-5">Edituj Kategóriu</h2>
</div>
    <form method="POST" action="{{ route('update.category', $category->id) }}">
        @csrf
        <div class="mb-3 mt-5 col-6">
        {{-- <label for="exampleInputEmail11" class="form-label" id="">Uprav ID kategórie</label>
        <input type="text" name="id" class="form-control"  aria-describedby=""> --}}
        <label for="exampleInputEmail1" class="form-label" id="toastCreateCategory">Uprav zvolenú kategóriu</label>
        <input type="text" name="category" value="{{ $category->category }}" class="form-control"  aria-describedby="emailHelp">
        @error('category')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <button type="submit" class="btn btn-primary mt-4" id="toastbtn">Ulož úpravu</button>
        </div>




        <div class="container mt-5">





    </form>
  </div>
  </div>

  {{-- <script>
    document.getElementById("toastbtn").onclick = function() {
      var toastElList = [].slice.call(document.querySelectorAll('.toast'))
      var toastList = toastElList.map(function(toastEl) {
      // Creates an array of toasts (it only initializes them)
        return new bootstrap.Toast(toastEl) // No need for options; use the default options
      });
     toastList.forEach(toast => toast.show()); // This show them

      console.log(toastList); // Testing to see if it works
    };

  </script> --}}

</main>
@endsection
