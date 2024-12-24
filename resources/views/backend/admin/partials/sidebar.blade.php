
 <div id="kt_aside" class="aside aside-default  aside-hoverable " data-kt-drawer="true"
 data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
 data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
 data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">


 <!-- craft logo -->
 <div class="aside-logo flex-column-auto px-10 pt-9 pb-5" id="kt_aside_logo">
     <!--begin::Logo-->
     <a href="{{route('dashboard')}}">
        
         <img alt="Logo" src="{{asset('admin/assets/media/logos/logo-default-dark.svg')}}"
             class="max-h-50px logo-default theme-dark-show" />
       
     </a>
     <!--end::Logo-->
 </div>
 <div class="aside-menu flex-column-fluid ps-3 pe-1">
     <!--begin::Aside Menu-->

     <!--begin::Menu-->
     <div class="menu menu-sub-indention menu-column menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-active-bg menu-state-primary menu-arrow-gray-500 fw-semibold fs-6 my-5 mt-lg-2 mb-lg-0"
         id="kt_aside_menu" data-kt-menu="true">

         <div class="hover-scroll-y mx-4" id="kt_aside_menu_wrapper" data-kt-scroll="true"
             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
             data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="20px"
             data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer">

             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                             class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span
                                 class="path4"></span></i></span><span
                         class="menu-title">Dashboards</span></span>
                 <!--end:Menu link-->
                
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item pt-5">
                 <!--begin:Menu content-->
                 FAQs-->
                 <!--end:Menu content-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu <link--><a href="{{route('faq')}}"></link--><span class="menu-link"><span class="menu-icon"><i
                             class="ki-duotone ki-gift fs-2"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span
                                 class="path4"></span></i></span><span
                         class="menu-title">FAQS</span></span></a>
                 <!--end:Menu link-->
                
             </div>
             
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                             class="ki-duotone ki-setting-2 fs-2"><span class="path1"></span><span
                                 class="path2"></span></i></span><span
                         class="menu-title">Layouts</span><span class="menu-arrow"></span></span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link"
                             href="layouts/extended-aside.html"><span class="menu-bullet"><span
                                     class="bullet bullet-dot"></span></span><span
                                 class="menu-title">Extended Aside</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link"
                             href="layouts/compact-aside.html"><span class="menu-bullet"><span
                                     class="bullet bullet-dot"></span></span><span
                                 class="menu-title">Compact Aside</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                    
                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
          
         </div>
     </div>
     <!--end::Menu-->
 </div>
 

 <!--begin::Footer-->
 <div class="aside-footer flex-column-auto pb-5 d-none" id="kt_aside_footer">
     <a href="index-2.html" class="btn btn-light-primary w-100">
         Button
     </a>
 </div>
 <!--end::Footer-->
</div>
<!--end::Aside-->