@extends('backend.admin.app')
@section('contents')
<div class="container">
    <div style="display: flex; justify-content:end;">
        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
            Add Home Delership
        </a>
    </div>

<!-- Modal for Edit -->
<div class="modal fade " id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_new_target_form" class="form" method="POST" action="{{route('delership.store')}}"  enctype="multipart/form-data">
                    @csrf
             
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Title</label>
                            <input type="text" name="title" id="title" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Image</label>
                            <input type="file" name="image" id="image" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    </div>
                    

                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">First Title</label>
                            <input type="text" name="sub_title1" id="sub_title1" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Firs Description</label>
                            <input type="text" name="description1" id="description1" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    </div>
            
                
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Second Title</label>
                            <input type="text" name="sub_title2" id="sub_title2" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Second Description</label>
                            <input type="text" name="description2" id="description2" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    </div>


                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Third Title</label>
                            <input type="text" name="sub_title3" id="sub_title3" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Third Description</label>
                            <input type="text" name="description3" id="description3" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    </div>


                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Fourth Title</label>
                            <input type="text" name="sub_title4" id="sub_title4" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Fourth Description</label>
                            <input type="text" name="description4" id="description4" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    </div>



                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Fifth Title</label>
                            <input type="text" name="sub_title5" id="sub_title5" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Fifth Description</label>
                            <input type="text" name="description5" id="description5" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">Add Delership</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<div id="kt_referrals_1" class="card-body p-0 tab-pane fade show active" role="tabpanel">
    <div class="table-responsive">
        <!--begin::Table-->
        <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9 data-table">
            <!--begin::Thead-->
            <thead class="border-gray-200 fs-5 fw-semibold bg-lighten m-3">
                <tr>
                    <th class="min-w-175px ps-9">Id</th>
                    <th class="min-w-150px px-0">Title</th>
                   
                    <th class="min-w-125px">Image</th>
                    <th class="min-w-125px">First Title</th>
                    <th class="min-w-125px">First Description</th>
                    <th class="min-w-125px">Second Title</th>
                    <th class="min-w-125px">Second Description</th>
                    <th class="min-w-125px">Third Title</th>
                    <th class="min-w-125px">Third Description</th>
                    <th class="min-w-125px">Fourth Title</th>
                    <th class="min-w-125px">Fourth Description</th>
                    <th class="min-w-125px">Fifth Title</th>
                    <th class="min-w-125px">Fifth Description</th>
                    <th class="min-w-125px text-center">Action</th>
                </tr>
            </thead>
            <!--end::Thead-->

            <!--begin::Tbody-->
            <tbody class="fs-6 fw-semibold text-gray-600">
                                     
                 
            </tbody>
            <!--end::Tbody-->                                       
        </table>
        <!--end::Table-->
    </div>
</div>
</div>
</div>
<script>
    $(document).ready(function () {
           var table = $('.data-table').DataTable({
               processing: true,
               serverSide: true,
               ajax: {
                   url: "{{route('home.delership') }}", // Ensure this route is correct
                   type: 'GET'
               },
               columns: [
                   { data: 'id', name: 'id' },
                   { data: 'title', name: 'title' },
                 
                   { data: 'image', name: 'image' },
                   { data: 'sub_title1', name: 'sub_title1' },
                   { data: 'description1', name: 'description1' },
                   { data: 'sub_title2', name: 'sub_title2' },
                   { data: 'description2', name: 'description2' },
                   { data: 'sub_title3', name: 'sub_title3' },
                   { data: 'description3', name: 'description3' },
                   { data: 'sub_title4', name: 'sub_title4' },
                   { data: 'description4', name: 'description4' },
                   { data: 'sub_title5', name: 'sub_title5' },
                   { data: 'description5', name: 'description5' },
                   
                   { data: 'action', name: 'action', orderable: false, searchable: false }
               ]
           });
       });
   
       

       $('#kt_modal_new_target_form').submit(function(e) {
    e.preventDefault(); 

    var formData = new FormData(this); 

    $.ajax({
        url: "{{ route('delership.store') }}", 
        method: 'POST',
        data: formData,
        processData: false,  
        contentType: false, 
        success: function(response) {
            if (response.success) {
                const { data } = response;

                // Update the form fields with the returned data
                $('#title').val(data.title);
                $('#sub_title1').val(data.sub_title1);
                $('#description1').val(data.description1);
                $('#sub_title2').val(data.sub_title2);
                $('#description2').val(data.description2);
                $('#sub_title3').val(data.sub_title3);
                $('#description3').val(data.description3);
                $('#sub_title4').val(data.sub_title4);
                $('#description4').val(data.description4);
                $('#sub_title5').val(data.sub_title5);
                $('#description5').val(data.description5);

                // Show the updated image if available
                if (data.image) {
                    $('#imagePreview').attr('src', '{{ asset('storage') }}/' + data.image);
                }

                // Hide the modal
                $('#kt_modal_new_target').modal('hide');

                // Show success message using toastr
                toastr.success(response.message, {
                    timeOut: 5000 // Show for 5 seconds
                });

                // Optionally reload the data or refresh the page to reflect changes
                if ($.fn.DataTable.isDataTable('.data-table')) {
                    $('.data-table').DataTable().ajax.reload();  // Reload the table with updated data
                }
            }
        },
        error: function(response) {
            // Handle the error
            alert('Error: Something went wrong');
        }
    });
});

   </script>
    
@endsection