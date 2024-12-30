@extends('backend.admin.app')
	@section('contents')


 <div class="col-xl-11 container">
    {{-- bannaer Section Start --}}
     <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
	         <div class="toolbar" id="kt_toolbar">
	            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                
	            <div class="card-body pt-5">
	                <!--begin::Form-->
	                <form id="kt_ecommerce_settings_general_form" class="form" method="POST"  enctype="multipart/form-data">
						
	                    <div class="fv-row mb-7">
                                <div class="d-flex justify-content-center align-items-center">
                                    <h1>Banner</h1>
                                </div>
								@csrf
								
								
	                        <label class="fs-6 fw-semibold form-label mt-3">
	                            <span class="required">Title</span>

	                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
	                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                        </label>
	                     
	                        <input type="text" class="form-control form-control-solid" name="title" id="title" value="{{ $cms->title ?? 'title' }}" />
	                        <!--end::Input-->
	                    </div>



						<div class="fv-row mb-7">
							
						<label class="fs-6 fw-semibold form-label mt-3">
							<span class="required">Banner Button</span>

							<span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
								<i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
						</label>
					 
						<input type="text" class="form-control form-control-solid" name="button" id="button" value="{{ $cms->button ?? 'button'  }}" />
						<!--end::Input-->
					</div>
	                
                        <div class="fv-row mb-7">
	                      
                          <label class="fs-6 fw-semibold form-label mt-3">
                              <span>Short Description</span>

                              <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                  <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                          </label>
						  {{-- @php
						  dd($cms->description);
					  @endphp --}}
                          <textarea class="form-control form-control-solid" name="description" id="description" value="">{{  $cms->description ?? 'description'  }}</textarea>

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
                            <input type="file" class="form-control dropify" accept="image/*" name="image" id="image"  data-default-file="{{ old('image', isset($cms) ? asset($cms->image) : 'No Image aVailable!!') }}">
                        </div>
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
	{{-- BANNER sECTION eND --}}


{{-- home about us Section start --}}


    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
	         <div class="toolbar" id="kt_toolbar">
	            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                
	            <div class="card-body pt-5">
	                <!--begin::Form-->
	                <form id="kt_ecommerce_settings_general_forms" class="form" method="POST"  enctype="multipart/form-data">

	                    <div class="fv-row mb-7">
                                <div class="d-flex justify-content-center align-items-center">
                                    <h1>About Us</h1>
                                </div>
								@csrf
	                        <label class="fs-6 fw-semibold form-label mt-3">
	                            <span class="required">Title</span>

	                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
	                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                        </label>
	                        <!--end::Label-->
						
	                        <!--begin::Input-->
	                        <input type="text" class="form-control form-control-solid" name="title" id="title" value="{{$home_abouts->title ?? 'title'}}" />
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
                   
                          <textarea class="form-control form-control-solid" name="description" id="description" value="" >{{$home_abouts->description ?? 'discription'}}</textarea>
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
                            <input type="file" class="form-control dropify" accept="image/*" name="image" id="image" data-default-file="{{ old('image', isset($home_abouts) ? asset($home_abouts->image) : 'No Image aVailable!!') }}">
                        </div>
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
{{-- home about us Section end --}}




{{-- Auto Delership Start --}}
    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
	         <div class="toolbar" id="kt_toolbar">
	            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                
	            <div class="card-body pt-5">
	                <!--begin::Form-->
	                <form id="kt_ecommerce_settings_general_form_deler" class="form"  method="POST"  enctype="multipart/form-data">
                             <div class="d-flex justify-content-center align-items-center">
                                    <h1>Why Choose Auto Delership</h1>
                                </div>
								@csrf
	                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Title1</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="text" class="form-control form-control-solid" name="sub_title1" id="sub_title1" value="{{$home_delership->title1 ?? 'title1'}}" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                            <div class="fv-row mb-7">
	                      
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span>Description1</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                </label>
                            
                                <textarea class="form-control form-control-solid" name="description1" id="description1">{{$home_delership->description1 ?? 'title1'}}</textarea>
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
	                                    <span class="required">Title2</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="text" class="form-control form-control-solid" name="sub_title2" id="sub_title2" value="{{$home_delership->title2 ?? 'title2'}}" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                            <div class="fv-row mb-7">
	                      
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span>Description2</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                </label>
                            
                                <textarea class="form-control form-control-solid" name="description2" id="description2">{{$home_delership->description2 ?? 'description2'}}</textarea>
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
	                                    <span class="required">Title3</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="text" class="form-control form-control-solid" name="sub_title3" id="sub_title3" value="{{$home_delership->title3 ?? 'title3'}}" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                                <div class="fv-row mb-7">
                            
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Description3</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                
                                    <textarea class="form-control form-control-solid" name="description3" id="description3">{{$home_delership->description3 ?? 'description3'}}</textarea>
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
	                                    <span class="required">Title4</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="text" class="form-control form-control-solid" name="sub_title4" id="sub_title4" value="{{$home_delership->title4 ?? 'title4'}}" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                                <div class="fv-row mb-7">
                            
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Description4</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                
                                    <textarea class="form-control form-control-solid" name="description4">{{$home_delership->description4 ?? 'description4'}}</textarea>
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
	                                    <span class="required">Title5</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="text" class="form-control form-control-solid" name="sub_title5" id="sub_title5" value="{{$home_delership->title5 ?? 'title5'}}" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                                <div class="fv-row mb-7">
                            
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Description5</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                
                                    <textarea class="form-control form-control-solid" name="description5" id="description5">{{$home_delership->description5 ?? 'No Description5 availaple'}}</textarea>
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
                            <input type="file" class="form-control dropify" accept="image/*" name="image" id="image" data-default-file="{{ old('image', isset($home_description) ? asset($home_description->image) : 'No Image aVailable!!') }}">
                        </div>
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

{{-- Auto Delership End --}}
    


{{-- how it works Start --}}
    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
	         <div class="toolbar" id="kt_toolbar">
	            <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
                
	            <div class="card-body pt-5">
	                <!--begin::Form-->
	                <form id="kt_ecommerce_settings_general_form_works" class="form" method="POST" enctype="multipart/form-data">
                    <div class="fv-row mb-7">
                                <div class="d-flex justify-content-center align-items-center">
                                    <h1> How It Works</h1>
                                </div>
								@csrf
	                        <label class="fs-6 fw-semibold form-label mt-3">
	                            <span class="required">Title</span>

	                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
	                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                        </label>
	                        <!--end::Label-->

	                        <!--begin::Input-->
	                        <input type="text" class="form-control form-control-solid" name="title" id="title" value="{{$home_works->title ?? 'title'}}" />
	                        <!--end::Input-->
	                    </div>
	                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Title1</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="text" class="form-control form-control-solid" name="sub_title1" id="sub_title1" value="{{$home_works->title1 ?? 'title1'}}" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                            <div class="fv-row mb-7">
	                      
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span>Description1</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                </label>
                            
                                <textarea class="form-control form-control-solid" name="description1" id="description1">{{$home_works->description1 ?? 'description1'}}</textarea>
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
	                                    <span class="required">Title2</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="text" class="form-control form-control-solid" name="sub_title2" id="sub_title2" value="{{$home_works->title2 ?? 'title2'}}" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                            <div class="fv-row mb-7">
	                      
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span>Description2</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                </label>
                            
                                <textarea class="form-control form-control-solid" name="description2" id="description2">{{$home_works->description2 ?? 'description2'}}</textarea>
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
	                                    <span class="required">Title3</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="text" class="form-control form-control-solid" name="sub_title3"  id="sub_title3" value="{{$home_works->title3 ?? 'title3'}}" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                                <div class="fv-row mb-7">
                            
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Description3</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                
                                    <textarea class="form-control form-control-solid" name="description3" id="description3">{{$home_works->description3 ?? 'description3'}}</textarea>
                                    <!--end::Input-->
                                </div>
	                     
	                         </div>
	         
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
{{-- how it works End --}}






 </div>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <script>
	
	$('.dropify').dropify();
	$(function(){
		$(document).on("click",".saveimage",function(e){
			let myimage=document.getElementById('kt_ecommerce_settings_general_form');
			let formImage= new FormData(myimage);
			uploadImage(myimage);
			console.log(myimage);
			
		});
	});


//Banner section

	$('#kt_ecommerce_settings_general_form').submit(function(e) {
    e.preventDefault();  // Prevent the default form submission

    var formData = new FormData(this);  // Collect all form data including files

    $.ajax({
        url: "{{ route('banner.create') }}",  // Route to your controller method
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
           

            // If the image was updated, show it as well
            if (data.image) {
                $('#imagePreview').attr('src', '{{ asset('storage') }}/' + data.image);
            }

            $('#kt_ecommerce_settings_general_form')[0].reset();

            // Show success message
            if (response.success) {
                toastr.success(response.message, {
                    timeOut: 5000 // 5000 milliseconds = 5 seconds
                });

                
            }
        },
        error: function(response) {
            alert('Error: Something went wrong');
        }
    });
});



//home About

$('#kt_ecommerce_settings_general_forms').submit(function(e) {
    e.preventDefault();  // Prevent the default form submission

    var formData = new FormData(this);  // Collect all form data including files

    $.ajax({
        url: "{{ route('home.store') }}",  // Route to your controller method
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
           

            // Show success message
            if (response.success) {
                toastr.success(response.message, {
                    timeOut: 5000 // 5000 milliseconds = 5 seconds
                });
				$('#kt_ecommerce_settings_general_forms')[0].reset();
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




///Delership

$('#kt_ecommerce_settings_general_form_deler').submit(function(e) {
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

            

                // Show success message using toastr
                toastr.success(response.message, {
                    timeOut: 5000 // Show for 5 seconds
                });

				$('#kt_ecommerce_settings_general_form_deler')[0].reset();
            }
        },
		error: function(response) {
            alert('Error: Something went wrong');
        }
    });
});




//How it works


$('#kt_ecommerce_settings_general_form_works').submit(function(e) {
    e.preventDefault();  // Prevent the default form submission

    var formData = new FormData(this);  // Collect all form data including files

    $.ajax({
        url: "{{ route('create.howitwork') }}",  // Route to your controller method
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