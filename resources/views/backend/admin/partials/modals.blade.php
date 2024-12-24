<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_new_target_form" class="form" action="{{ route('create.questions') }}" method="POST">
                    @csrf
                  
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Type</label>
    
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Question Type" name="target_assign" name="vehicle_issue" id="vehicle_issue">
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
                        </div>
                        <!--end::Col-->
    
                    </div>
                    <!--end::Input group-->
    
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">Question</label>
    
                        <textarea class="form-control form-control-solid" rows="3" name="question" id="question" placeholder="Type Target Questions....">
                        </textarea>
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
                <!--end:Form-->
            </div>
   
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
