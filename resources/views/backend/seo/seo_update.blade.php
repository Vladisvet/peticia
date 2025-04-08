@extends('admin.admin_master')
@section('admin')

        <!-- Toast Bootstrap 5 -->
          {{-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> --}}




<main>
<div class="content-wraper">
    <div class="container-fluid pt-2 px-5" ><br>
    <div class="">
        <h2 class=" mt-1">SEO nastavenie</h2>
    </div>
    <form method="POST" action="{{ route('seo.update', $seo->id) }}">

        @csrf
        <div class="mb-3 mt-3 col-10">
            <label for="exampleInputEmail1" class="form-label" id="toastCreateCategory">Meta Author</label>
            <input type="text" name="meta_author" class="form-control"  aria-describedby="emailHelp" value="{{ $seo->meta_author }}">
            @error('meta_author')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 mt-1 col-10">
            <label for="exampleInputEmail1" class="form-label" id="toastCreateCategory">Meta Title</label>
            <input type="text" name="meta_title" class="form-control"  aria-describedby="emailHelp" value="{{ $seo->meta_title }}">
            @error('meta_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 mt-2 col-10">
            <label for="exampleInputEmail1" class="form-label" id="toastCreateCategory">meta_keyword</label>
            <input type="text" name="meta_keyword" class="form-control"  aria-describedby="emailHelp" value="{{ $seo->meta_keyword }}">
            @error('meta_keyword')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 mt-2 col-10">
            <label for="exampleInputEmail1" class="form-label" id="toastCreateCategory">Meta Description</label>
            <textarea type="text" name="meta_description" class="form-control"  aria-describedby="emailHelp"> {{ $seo->meta_description }}</textarea>
            @error('meta_description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 mt-2 col-10">
            <label for="exampleInputEmail1" class="form-label" id="toastCreateCategory">Google Analytics</label>
            <textarea type="text" name="google_analytics" class="form-control"  aria-describedby="emailHelp"> {{ $seo->google_analytics }}</textarea>
            @error('google_analytics')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 mt-2 col-10">
            <label for="exampleInputEmail1" class="form-label" id="toastCreateCategory">Google Verification</label>
            <input type="text" name="google_verification" class="form-control"  aria-describedby="emailHelp" value="{{ $seo->google_verification }}">
            @error('google_verification')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 mt-2 col-10">
            <label for="exampleInputEmail1" class="form-label" id="toastCreateCategory">Alexa Analytics</label>
            <textarea type="text" name="alexa_analytics" class="form-control"  aria-describedby="emailHelp"> {{ $seo->alexa_analytics }}</textarea>
            @error('alexa_analytics')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 mt-2 col-10">
        <button type="submit" class="btn btn-primary mt-4" id="liveToastBtn">Uprav nastavenie</button>
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

  <div class="position-fixed top-0 start-1 p-5" style="z-index: 11">
    <div id="liveToast" data-bs-autohide="false" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000" >
      <div class="toast-header">
          <i class="bi bi-check-circle rounded me-2" style="font-size: 1.5rem; color: cornflowerblue;"></i>
        <strong class="me-auto">SEO upravené</strong>
        <small></small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body bg-light">
        <h6>Úspešne ste upravili SEO nastavenie!</h6>
      </div>
    </div>
  </div>


</main>
@endsection
