
@extends('backend.admin.app')
@section('contents')
<div class="container mt-6">
<div style="display: flex;justify-content:end;">
<a href="#" class="btn btn-primary "  data-bs-toggle="modal" data-bs-target="#kt_modal_new_target" >
    Add FQA  </a>
</div>

</div>

@include('backend.admin.partials.modals')
@endsection