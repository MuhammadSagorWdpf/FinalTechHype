
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
                        <div class="d-flex justify-content-left">
                            <h1>System Settings</h1>
                           
                        </div>
                        <div class="d-flex justify-content-left">
                            <p>Setup your system, <span>please <small class="text-danger">provide your valid data.</small></span></p>
                        </div>
	                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
	                        <!--begin::Col-->
	                        <div class="col">
	                            <!--begin::Input group-->
	                            <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">System Email:</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="text" class="form-control form-control-solid" name="sub_title2" id="sub_title2" placeholder="Email" value="" />
	                  
	                            </div>
	   

	                        </div>

	                        <div class="col">
	        
                                <div class="fv-row mb-7">
                                
	                                <label class="fs-6 fw-semibold form-label mt-3">
	                                    <span class="required">Copy Rights Text:</span>

	                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
	                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
	                                </label>
	     
	                                <input type="text" class="form-control form-control-solid" name="sub_title2" id="sub_title2" placeholder="Copyrights" value="" />
	                  
	                            </div>
	                     
	                     </div>
	         
	                    </div>
                        <!--end::Input-->
                    </div>
                    

<div class="fv-row mb-7">
 
    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
        <!--begin::Col-->
        <div class="col">
            <!--begin::Input group-->
            <div class="fv-row mb-7">
            
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">System Email:</span>

                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                </label>

                <input type="file" id="favicon-upload" class="form-control dropify" accept="image/*">
  
            </div>


        </div>

        <div class="col">

            <div class="fv-row mb-7">
            
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">Copy Rights Text:</span>

                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                </label>

                <input type="file" id="favicon-upload" class="form-control dropify" accept="image/*">
  
            </div>
     
     </div>

    </div>
    <!--end::Input-->
</div>

<div class="fv-row mb-7">
	                      
    <label class="fs-6 fw-semibold form-label mt-3">
        <span>About System:</span>

        <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
    </label>
    
    <textarea class="form-control form-control-solid" name="description" id="editor" value="">{{  $cms->description ?? 'description'  }}</textarea>

    <!--end::Input-->
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdn.ckeditor.com/ckeditor5/38.0.0/classic/ckeditor.js"></script>
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




    ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
</script>
@endsection
