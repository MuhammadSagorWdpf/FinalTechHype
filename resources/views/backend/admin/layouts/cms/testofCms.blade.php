	@extends('backend.admin.app')
	@section('contents')


 <div class="col-xl-11 container">
    
     <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
	         <div class="toolbar" id="kt_toolbar">
	            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                
	            <div class="card-body pt-5">
	                <!--begin::Form-->
	                <form id="kt_ecommerce_settings_general_form" class="form" action="#">

	                    <div class="fv-row mb-7">
                                <div class="d-flex justify-content-center align-items-center">
                                    <h1>Banner</h1>
                                </div>

	                        <label class="fs-6 fw-semibold form-label mt-3">
	                            <span class="required">Title</span>

	                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
	                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                        </label>
	                        <!--end::Label-->

	                        <!--begin::Input-->
	                        <input type="text" class="form-control form-control-solid" name="name" value="" />
	                        <!--end::Input-->
	                    </div>
	                    <!--end::Input group-->

	                    <!--begin::Input group-->
                        <div class="fv-row mb-7">
	                      
                          <label class="fs-6 fw-semibold form-label mt-3">
                              <span>Short Description</span>

                              <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                  <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                          </label>
                      
                          <textarea class="form-control form-control-solid" name="notes"></textarea>
                          <!--end::Input-->
                      </div>


                      <div class="fv-row mb-7">
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span>Image</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Click to upload an image">
                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                        </label>

                        <!-- Image upload input -->
                        <div class="border p-4 text-center rounded-3" style="cursor: pointer;">
                            <p id="drop-text" class="mb-0 text-muted">Click to select an image</p>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                    </div>



	                 
	                    
	                 
	                    <div class="separator mb-6"></div>
	                    
	                    <div class="d-flex justify-content-end">
	                        <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">
	                            Cancel
	                        </button>

	                        <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
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





    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
	         <div class="toolbar" id="kt_toolbar">
	            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                
	            <div class="card-body pt-5">
	                <!--begin::Form-->
	                <form id="kt_ecommerce_settings_general_form" class="form" action="#">

	                    <div class="fv-row mb-7">
                                <div class="d-flex justify-content-center align-items-center">
                                    <h1>About Us</h1>
                                </div>

	                        <label class="fs-6 fw-semibold form-label mt-3">
	                            <span class="required">Title</span>

	                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
	                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                        </label>
	                        <!--end::Label-->

	                        <!--begin::Input-->
	                        <input type="text" class="form-control form-control-solid" name="name" value="" />
	                        <!--end::Input-->
	                    </div>
	                    <!--end::Input group-->

	                    <!--begin::Input group-->
                        <div class="fv-row mb-7">
	                      
                          <label class="fs-6 fw-semibold form-label mt-3">
                              <span>Short Description</span>

                              <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                  <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                          </label>
                      
                          <textarea class="form-control form-control-solid" name="notes"></textarea>
                          <!--end::Input-->
                      </div>

                      
                      <div class="fv-row mb-7">
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span>Image</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Click to upload an image">
                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                        </label>

                        <!-- Image upload input -->
                        <div class="border p-4 text-center rounded-3" style="cursor: pointer;">
                            <p id="drop-text" class="mb-0 text-muted">Click to select an image</p>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                    </div>



	                 
	                    
	                 
	                    <div class="separator mb-6"></div>
	                    
	                    <div class="d-flex justify-content-end">
	                        <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">
	                            Cancel
	                        </button>

	                        <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
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




    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
	         <div class="toolbar" id="kt_toolbar">
	            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                
	            <div class="card-body pt-5">
	                <!--begin::Form-->
	                <form id="kt_ecommerce_settings_general_form" class="form" action="#">
                             <div class="d-flex justify-content-center align-items-center">
                                    <h1>Why Choose Auto Delership</h1>
                                </div>
	                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Title</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="email" class="form-control form-control-solid" name="email" value="" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                            <div class="fv-row mb-7">
	                      
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span>Notes</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                </label>
                            
                                <textarea class="form-control form-control-solid" name="notes"></textarea>
                                <!--end::Input-->
                            </div>
	                     
	                     </div>
	         
	                    </div>
	          
	                  
	                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Title</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="email" class="form-control form-control-solid" name="email" value="" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                            <div class="fv-row mb-7">
	                      
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span>Notes</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                </label>
                            
                                <textarea class="form-control form-control-solid" name="notes"></textarea>
                                <!--end::Input-->
                            </div>
	                     
	                     </div>
	         
	                    </div>
	                 
                        
                        
	                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Title</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="email" class="form-control form-control-solid" name="email" value="" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                                <div class="fv-row mb-7">
                            
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Notes</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                
                                    <textarea class="form-control form-control-solid" name="notes"></textarea>
                                    <!--end::Input-->
                                </div>
	                     
	                         </div>
	         
	                    </div>

                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Title</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="email" class="form-control form-control-solid" name="email" value="" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                                <div class="fv-row mb-7">
                            
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Notes</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                
                                    <textarea class="form-control form-control-solid" name="notes"></textarea>
                                    <!--end::Input-->
                                </div>
	                     
	                         </div>
	         
	                    </div>

                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Title</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="email" class="form-control form-control-solid" name="email" value="" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                                <div class="fv-row mb-7">
                            
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Notes</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                
                                    <textarea class="form-control form-control-solid" name="notes"></textarea>
                                    <!--end::Input-->
                                </div>
	                     
	                         </div>
	         
	                    </div>


                        <div class="fv-row mb-7">
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span>Image</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Click to upload an image">
                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                        </label>

                        <!-- Image upload input -->
                        <div class="border p-4 text-center rounded-3" style="cursor: pointer;">
                            <p id="drop-text" class="mb-0 text-muted">Click to select an image</p>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                    </div>
	                 <div class="separator mb-6"></div>
	                    
	                    <div class="d-flex justify-content-end">
	                        <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">
	                            Cancel
	                        </button>

	                        <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
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


    
    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
	         <div class="toolbar" id="kt_toolbar">
	            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                
	            <div class="card-body pt-5">
	                <!--begin::Form-->
	                <form id="kt_ecommerce_settings_general_form" class="form" action="#">
                    <div class="fv-row mb-7">
                                <div class="d-flex justify-content-center align-items-center">
                                    <h1> How It Works</h1>
                                </div>

	                        <label class="fs-6 fw-semibold form-label mt-3">
	                            <span class="required">Title</span>

	                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
	                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                        </label>
	                        <!--end::Label-->

	                        <!--begin::Input-->
	                        <input type="text" class="form-control form-control-solid" name="name" value="" />
	                        <!--end::Input-->
	                    </div>
	                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Title</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="email" class="form-control form-control-solid" name="email" value="" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                            <div class="fv-row mb-7">
	                      
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span>Notes</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                </label>
                            
                                <textarea class="form-control form-control-solid" name="notes"></textarea>
                                <!--end::Input-->
                            </div>
	                     
	                     </div>
	         
	                    </div>
	          
	                  
	                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Title</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="email" class="form-control form-control-solid" name="email" value="" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                            <div class="fv-row mb-7">
	                      
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span>Notes</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                </label>
                            
                                <textarea class="form-control form-control-solid" name="notes"></textarea>
                                <!--end::Input-->
                            </div>
	                     
	                     </div>
	         
	                    </div>
	                 
                        
                        
	                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Title</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="email" class="form-control form-control-solid" name="email" value="" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                                <div class="fv-row mb-7">
                            
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Notes</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                
                                    <textarea class="form-control form-control-solid" name="notes"></textarea>
                                    <!--end::Input-->
                                </div>
	                     
	                         </div>
	         
	                    </div>

                      
	                 <div class="separator mb-6"></div>
	                    
	                    <div class="d-flex justify-content-end">
	                        <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">
	                            Cancel
	                        </button>

	                        <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
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


    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
	         <div class="toolbar" id="kt_toolbar">
	            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                
	            <div class="card-body pt-5">
	                <!--begin::Form-->
	                <form id="kt_ecommerce_settings_general_form" class="form" action="#">

	                    <div class="fv-row mb-7">
                                <div class="d-flex justify-content-center align-items-center">
                                    <h1>Banner</h1>
                                </div>

	                        <label class="fs-6 fw-semibold form-label mt-3">
	                            <span class="required">Name</span>

	                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
	                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                        </label>
	                        <!--end::Label-->

	                        <!--begin::Input-->
	                        <input type="text" class="form-control form-control-solid" name="name" value="" />
	                        <!--end::Input-->
	                    </div>
	                    <!--end::Input group-->

	                    <!--begin::Input group-->
	                    <div class="fv-row mb-7">
	                        <!--begin::Label-->
	                        <label class="fs-6 fw-semibold form-label mt-3">
	                            <span>Company Name</span>

	                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's company name (optional).">
	                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                        </label>
	                        <!--end::Label-->

	                        <!--begin::Input-->
	                        <input type="text" class="form-control form-control-solid" name="company_name" value="" />
	                        <!--end::Input-->
	                    </div>
	                    <!--end::Input group-->

	                    <!--begin::Row-->
	                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
	                                <!--begin::Label-->
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Email</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="email" class="form-control form-control-solid" name="email" value="" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
	                            <div class="fv-row mb-7">
	     
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span>Phone</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's phone number (optional).">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>

	                                <input type="text" class="form-control form-control-solid" name="phone" value="" />
	                       
	                            </div>
	                     
	                        </div>
	         
	                    </div>
	          
	                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	      
	                        <div class="col">
	 
	                            <div class="fv-row mb-7">
	                     
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span>City</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's city of residence (optional).">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	                           
	                                <input type="text" class="form-control form-control-solid" name="city" value="" />
	                   
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div class="fv-row mb-7">
	                      
	                        <label class="fs-6 fw-semibold form-label mt-3">
	                            <span>Notes</span>

	                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
	                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                        </label>
	                    
	                        <textarea class="form-control form-control-solid" name="notes"></textarea>
	                        <!--end::Input-->
	                    </div>
	                 
	                    <div class="separator mb-6"></div>
	                    
	                    <div class="d-flex justify-content-end">
	                        <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">
	                            Cancel
	                        </button>

	                        <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
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