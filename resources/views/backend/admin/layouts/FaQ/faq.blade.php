@extends('backend.admin.app')

@section('contents')
<div class="container mt-6">
    <div style="display: flex; justify-content:end;">
        <a href="{{ route('faq.create') }}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
            Add FQA
        </a>
    </div>
</div>

<div class="card m-5">
    <!--begin::Card header-->
    <div class="card-header">
        <div class="card-title">
            <h3>License Usage</h3>
        </div>
    </div>

    <!--begin::Card body-->
    <div class="card-body p-5 col-md-9">
        <div class="table-responsive">
            <table class="table align-middle table-row-bordered table-row-solid gy-4 data-table" id="kt_security_license_usage_table">
                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                    <tr>
                        <th class="w-150px ps-9">ID</th>
                        <th class="px-0 min-w-250px">Type</th>
                        <th class="min-w-150px">Question</th>
                        <th class="min-w-150px">Status</th>
                        <th class="min-w-50px">Action</th>
                    </tr>
                </thead>
                <tbody class="fw-6 fw-semibold text-gray-600">
                    <!-- Data rows will be filled here dynamically -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for Edit -->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_new_target_form" class="form" method="POST" action="{{ route('update.faq', ':id') }}">
                    @csrf
                    @method('PUT')
                
                    <div class="row g-9 mb-8">
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Type</label>
                            <select class="form-select form-select-solid" name="vehicle_issue" id="vehicle_issue">
                                <option value="">Select Question Type</option>
                                <option value="Engine Issue">Engine Issue</option>
                                <option value="Transmission Problem">Transmission Problem</option>
                                <option value="Brakes & Suspension">Brakes & Suspension</option>
                                <option value="Electrical & Battery">Electrical & Battery</option>
                                <option value="Fuel & Exhaust System">Fuel & Exhaust System</option>
                                <option value="Lights & Tires">Lights & Tires</option>
                                <option value="Other Issues">Other Issues</option>
                                <option value="Additional Information">Additional Information</option>
                                <option value="Vehicle History">Vehicle History</option>
                            </select>
                        </div>
                    </div>
                    

                    <div class="row g-9 mb-8">
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Type</label>
                            <select class="form-select form-select-solid" name="status" id="status">
                                <option value="">Select status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                               
                            </select>
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">Question</label>
                        <textarea class="form-control form-control-solid" rows="3" name="question" id="question" placeholder="Type Target Questions...."></textarea>
                    </div>
                
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('question') }}", // Ensure this route is correct
                type: 'GET'
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'vehicle_issue', name: 'vehicle_issue' },
                { data: 'question', name: 'question' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });

    // Edit modal data
    function edit(id) {
        // Ensure the ID is valid
        if (!id) {
            console.log("No ID found for this edit button.");
            return;
        }

        let url = '{{ route('edit.faq', ':id') }}'.replace(':id', id);

        $.ajax({
            url: url,
            type: 'GET',
            success: function (response) {
                if (response.success) {
                    const { data } = response;
                    console.log(response);

                    // Populate form fields with fetched data
                    $('#vehicle_issue').val(data.vehicle_issue);
                    $('#question').val(data.question);
                    $('#status').val(data.status);
                    $('#kt_modal_new_target_form').attr('action', '{{ route('update.faq', ':id') }}'.replace(':id', data.id));
                    $('#kt_modal_new_target').modal('show'); // Show modal
                } else {
                    toastr.error(response.message || "Failed to fetch data.");
                }
            },
            error: function () {
                toastr.error("Failed to fetch data.");
            }
        });
    }

    //update
    $('#kt_modal_new_target_form').on('submit', function(e) {
        e.preventDefault(); 

        var formAction = $(this).attr('action'); 
        var formData = $(this).serialize(); 

        $.ajax({
            url: formAction,  
            type: 'PUT',      
            data: formData,  
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    toastr.success(response.message);
                    $('.data-table').DataTable().ajax.reload();  
                    $('#kt_modal_new_target').modal('hide');
                } else {
                    toastr.error(response.message || "Failed to update question.");
                }
            },
            error: function(xhr, status, error) {
                toastr.error("There was an error updating the question.");
            }
        });
    });

    // For delete functionality
    $(document).on('click', '.delete', function () {
        let questionId = $(this).data('id');
        let token = $('meta[name="csrf-token"]').attr('content');

        if (!questionId) {
            alert("Error: No question ID found.");
            return;
        }

        // Confirm before deletion
        if (confirm('Are you sure you want to delete this question?')) {
            $.ajax({
                url: "/deletequestion/" + questionId,
                type: "DELETE",
                data: {
                    "_token": token,
                },
                success: function (response) {
                    if (response.success) {
                        alert("Question deleted successfully!");
                        $('.data-table').DataTable().ajax.reload();  // Reload data table after deletion
                    } else {
                        alert("Error deleting question.");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Error deleting question:", error);
                    alert("There was an error deleting the question.");
                }
            });
        }
    });
</script>

@include('backend.admin.partials.modals')
@endsection
