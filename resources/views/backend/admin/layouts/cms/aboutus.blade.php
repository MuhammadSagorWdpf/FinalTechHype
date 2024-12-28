@extends('backend.admin.app')
@section('contents')
<div class="container">
    <div style="display: flex; justify-content:end;">
        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
            Add About Us
        </a>
    </div>

<!-- Modal for Edit -->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_new_target_form" class="form" method="POST"   enctype="multipart/form-data">
                    @csrf

                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Description1</label>
                            <input type="text" name="description1" id="description1" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Description2</label>
                            <input type="text" name="description2" id="description2" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    </div>



                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Description3</label>
                            <input type="text" name="discription3" id="discription3" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Description4</label>
                            <input type="text" name="description4" id="description5" required placeholder="Enter Your title" class="form-control form-control-solid">
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">Image</label>
                       <input type="file" name="image" required id="image" class="form-control form-control-solid">
                    </div>
               <div class="text-center">
                       
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">Submit</button>
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
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
                    <th class="min-w-150px px-0">Description1</th>
                    <th class="min-w-350px">Description2</th>
                    <th class="min-w-125px">Description3</th>
                    <th class="min-w-125px">Description4</th>
                    <th class="min-w-125px">Image</th>
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
                url: "{{route('aboutus') }}", // Ensure this route is correct
                type: 'GET'
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'description1', name: 'description1' },
                { data: 'description2', name: 'description2' },
                { data: 'description3', name: 'description3' },
                { data: 'description4', name: 'description4' },
                { data: 'image', name: 'image' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });




    
    $('#kt_modal_new_target_form').submit(function(e) {
    e.preventDefault();  // Prevent the default form submission

    var formData = new FormData(this);  // Collect all form data including files

    $.ajax({
        url: "{{ route('about-us') }}",  // Route to your controller method
        method: 'POST',
        data: formData,
        processData: false,  // Don't process the files
        contentType: false,  // Don't set content type
        success: function(response) {
            // Extract the updated data from the response
            const { data } = response;

            // Update the form fields with the returned data
            $('#title').val(data.title);
            $('#description').val(data.description);
            $('#button').val(data.button);

            // If the image was updated, show it as well
            if (data.image) {
                $('#imagePreview').attr('src', '{{ asset('storage') }}/' + data.image);
            }

            // Hide the modal
            $('#kt_modal_new_target').modal('hide');

            // Show success message
            if (response.success) {
                toastr.success(response.message, {
                    timeOut: 5000 // 5000 milliseconds = 5 seconds
                });

                // Optionally reload the DataTable to show the latest data
                if ($.fn.DataTable.isDataTable('.data-table')) {
                    $('.data-table').DataTable().ajax.reload();  // Reload the data in the table
                }
            }
        },
        error: function(response) {
            alert('Error: Something went wrong');
        }
    });
});

    
</script>
@endsection