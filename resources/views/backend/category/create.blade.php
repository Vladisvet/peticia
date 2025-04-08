@extends('admin.admin_master')
@section('admin')

        <!-- Toast Bootstrap 5 -->
          {{-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> --}}

<div class="position-fixed top-0 start-1 p-5" style="z-index: 11">
  <div id="liveToast" data-bs-autohide="false" class="toast" role="alert" aria-live="assertive" aria-atomic="true"  >
    <div class="toast-header">
        <i class="bi bi-check-circle rounded me-2" style="font-size: 1.5rem; color: cornflowerblue;"></i>
      <strong class="me-auto">Kategória pridaná</strong>
      <small></small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body bg-light">
      <h6>Úspešne ste vytvorili novú kategóriu!</h6>
    </div>
  </div>
</div>


<main>
<div class="content-wraper">
    <div class="container-fluid pt-5 px-5" ><br>
<div class="">
    <h2 class=" mt-5">Pridaj Kategóriu</h2>
</div>
    <form method="POST" action="{{ route('store.category') }}">
        @csrf
        <div class="mb-3 mt-5 col-6">
        <label for="exampleInputEmail1" class="form-label" id="toastCreateCategory">Nová kategória</label>
        <input type="text" name="category" class="form-control"  aria-describedby="emailHelp">

        <button type="submit" class="btn btn-primary mt-4" id="liveToastBtn">Pridaj</button>
        </div>
        @error('category')
        <span class="text-danger">{{ $message }}</span>
        @enderror



    <div class="container mt-5">
    </div>





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
