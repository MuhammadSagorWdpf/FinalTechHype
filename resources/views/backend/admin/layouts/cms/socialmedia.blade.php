@extends('backend.admin.app')
	@section('contents')
    <div class="col-xl-11 container">


    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
	         <div class="toolbar" id="kt_toolbar">
	            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                
	            <div class="card-body pt-5">
	                <!--begin::Form-->
	              
                    <form id="kt_ecommerce_settings_general_form_works" class="form" method="POST" enctype="multipart/form-data">
                        
                    <div class="fv-row mb-7">
                    <div class="d-flex justify-content-left">
                           <h1>Mail Settings</h1>
                          
                       </div>
                       <div class="d-flex justify-content-left">
                           <p>Setup your system Mail, <span>please <small class="text-danger">provide your
                        </div>
								@csrf
	                     
                     <div class="d-flex justify-content-right">
	                       

	                        <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary saveimage">
	                            <span class="indicator-label align-item">
	                                Save
	                            </span>
	                            <span class="indicator-progress">
	                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
	                            </span>
	                        </button>
	               
	                    </div>

	                        
	    
	                 <div class="separator mb-6"></div>
	                    
	                    <div class="d-flex justify-content-end">
	                        <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">
	                            Cancel
	                        </button>

	                        <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary saveimage">
	                            <span class="indicator-label">
	                                Save
	                            </span>
	                            <span class="indicator-progress">
	                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
	                            </span>
	                        </button>
	               
	                    </div>
	            
	                </form>
	       
	             </div>

	           </div>
	        </div>
        </div>

    </div>
    </div>
    @endsection