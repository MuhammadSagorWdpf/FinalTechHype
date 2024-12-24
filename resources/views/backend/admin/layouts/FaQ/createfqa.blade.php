@extends('backend.admin.app')

@section('contents')
{{-- <style>
/* Styling for the card */
.custom-card {
    width: 100%;
    /* Limit the maximum width of the card */
    margin: 20px auto; /* Center the card horizontally */
    padding: 20px; /* Padding inside the card */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    background-color: #474747; /* White background */
}

/* Card Body Styling */

.custom-card .card-body {
    padding: 20px;
}

/* Styling the input field */
.custom-card .form-control {
    border: 1px solid #ccc; /* Light gray border */
    border-radius: 5px; /* Rounded corners for the input */
    padding: 10px; /* Padding inside the input */
    font-size: 16px; /* Font size */
}


/* Label Styling */
.custom-card label {
    font-weight: bold; /* Make the label bold */
    margin-bottom: 5px; /* Space below the label */
    display: block; /* Ensure label is on its own line */
    font-size: 14px; /* Label font size */
    color: #333; /* Dark gray color for the label */
}
</style>
<div class="container">
<div class="card m-2" style="width: 100%;">
    <div class="container mt-5">
        <h2>Create FAQ</h2>
        
        <!-- Success message if exists -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form to create FAQ -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('create/questions') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="vehicle_issue">Type</label>
                        <select name="vehicle_issue" id="vehicle_issue" class="form-select" required>
                            <option value="" selected disabled>Select Question Type</option>
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


                        @error('vehicle_issue')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="question">Question</label>
                        <input type="text" name="question" id="question" class="form-control" placeholder="Enter Your Question....." value="{{ old('question') }}" required>


                        @error('question')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

        
    </div>
</div> --}}

<form id="kt_modal_new_target_form" class="form" action="#">
    <!--begin::Heading-->
    <div class="mb-13 text-center">
        <!--begin::Title-->
        <h1 class="mb-3">Set First Target</h1>
        <!--end::Title-->

        <!--begin::Description-->
        <div class="text-muted fw-semibold fs-5">
            If you need more info, please check <a href="#" class="fw-bold link-primary">Project Guidelines</a>.
        </div>
        <!--end::Description-->
    </div>
    <!--end::Heading-->

    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span class="required">Target Title</span>

            
    <span class="ms-1"  data-bs-toggle="tooltip" title="Specify a target name for future usage and reference" >
   <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>                        </label>
        <!--end::Label-->

        <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title"/>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="row g-9 mb-8">
        <!--begin::Col-->
        <div class="col-md-6 fv-row">
            <label class="required fs-6 fw-semibold mb-2">Assign</label>

            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
                <option value="">Select user...</option>
                <option value="1">Karina Clark</option>
                <option value="2">Robert Doe</option>
                <option value="3">Niel Owen</option>
                <option value="4">Olivia Wild</option>
                <option value="5">Sean Bean</option>
            </select>
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-md-6 fv-row">
            <label class="required fs-6 fw-semibold mb-2">Due Date</label>

            <!--begin::Input-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>                                <!--end::Icon-->

                <!--begin::Datepicker-->
                <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date"/>
                <!--end::Datepicker-->
            </div>
            <!--end::Input-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8">
        <label class="fs-6 fw-semibold mb-2">Target Details</label>

        <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details">
        </textarea>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span class="required">Tags</span>

            
         <span class="ms-1"  data-bs-toggle="tooltip" title="Specify a target priorty" >
        class="path2"></span><span class="path3"></span></i></span>                        </label>
        <!--end::Label-->

        <input class="form-control form-control-solid" value="Important, Urgent" name="tags"/>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="d-flex flex-stack mb-8">
        <!--begin::Label-->
        <div class="me-5">
            <label class="fs-6 fw-semibold">Adding Users by Team Members</label>

            <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
        </div>
        <!--end::Label-->

        <!--begin::Switch-->
        <label class="form-check form-switch form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
            <span class="form-check-label fw-semibold text-muted">
                Allowed
            </span>
        </label>
        <!--end::Switch-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-15 fv-row">
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack">
            <!--begin::Label-->
            <div class="fw-semibold me-5">
                <label class="fs-6">Notifications</label>

                <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
            </div>
            <!--end::Label-->

            <!--begin::Checkboxes-->
            <div class="d-flex align-items-center">
                <!--begin::Checkbox-->
                <label class="form-check form-check-custom form-check-solid me-10">
                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked"/>

                    <span class="form-check-label fw-semibold">
                        Email
                    </span>
                </label>
                <!--end::Checkbox-->

                <!--begin::Checkbox-->
                <label class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone"/>

                    <span class="form-check-label fw-semibold">
                        Phone
                    </span>
                </label>
                <!--end::Checkbox-->
            </div>
            <!--end::Checkboxes-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <div class="text-center">
        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
            Cancel
        </button>

        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
            <span class="indicator-label">
                Submit
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
    <!--end::Actions-->
</form>


        
@endsection