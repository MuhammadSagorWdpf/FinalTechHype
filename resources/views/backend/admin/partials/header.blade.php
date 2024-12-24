<!-- search and top head -->
<div class=" container-fluid  d-flex align-items-stretch justify-content-between">
    <!--begin::Logo bar-->
    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
        <!--begin::Aside Toggle-->
        <div class="d-flex align-items-center d-lg-none">
            <div class="btn btn-icon btn-active-color-primary ms-n2 me-1 " id="kt_aside_toggle">
                <i class="ki-duotone ki-abstract-14 fs-1"><span class="path1"></span><span
                        class="path2"></span></i> </div>
        </div>
        <!--end::Aside Toggle-->

        <!--begin::Logo-->
        <a href="index-2.html" class="d-lg-none">
            <img alt="Logo" src="{{asset('admin/assets/media/logos/logo-compact.svg')}}" class="mh-40px" />
        </a>
        <!--end::Logo-->

        <!--begin::Aside toggler-->
        <div class="btn btn-icon w-auto ps-0 btn-active-color-primary d-none d-lg-inline-flex me-2 me-lg-5 "
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">

            <i class="ki-duotone ki-black-left-line fs-1 rotate-180"><span
                    class="path1"></span><span class="path2"></span></i> </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Logo bar-->

    <!--begin::Topbar-->
    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
        <!--begin::Search-->
        <div class="d-flex align-items-stretch me-1">

            <!--begin::Search-->
            <div id="kt_header_search"
                class="header-search d-flex align-items-center w-100 w-lg-300px"
                data-kt-search-keypress="true" data-kt-search-min-length="2"
                data-kt-search-enter="enter" data-kt-search-layout="menu"
                data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
                data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">

                <!--begin::Tablet and mobile search toggle-->
                <div data-kt-search-element="toggle"
                    class="search-toggle-mobile d-flex d-lg-none align-items-center">
                    <div class="d-flex ">
                        <i class="ki-duotone ki-magnifier fs-1 "><span class="path1"></span><span
                                class="path2"></span></i> </div>
                </div>
                <!--end::Tablet and mobile search toggle-->

                <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                <form data-kt-search-element="form"
                    class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0"
                    autocomplete="off">
                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                    <input type="hidden" />
                    <!--end::Hidden input-->

                    <!--begin::Icon-->
                    <i
                        class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"><span
                            class="path1"></span><span class="path2"></span></i>
                    <!--end::Icon-->

                    <!--begin::Input-->
                    <input type="text" class="search-input form-control form-control-solid  ps-13"
                        name="search" value="" placeholder="Search..."
                        data-kt-search-element="input" />
                    <!--end::Input-->

                    <!--begin::Spinner-->
                    <span
                        class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                        data-kt-search-element="spinner">
                        <span
                            class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                    </span>
                    <!--end::Spinner-->

                    <!--begin::Reset-->
                    <span
                        class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                        data-kt-search-element="clear">
                        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span
                                class="path1"></span><span class="path2"></span></i> </span>
                    <!--end::Reset-->
                </form>
                <!--end::Form-->
           
            </div>
            <!--end::Search-->
        </div>
        <!--end::Search-->

       <!--top header bar-->
        <div class="d-flex align-items-stretch flex-shrink-0">
            <!--begin::Activities-->
            <div class="d-flex align-items-center ms-1 ms-lg-2">
                <!--begin::Drawer toggle-->
                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                    id="kt_activities_toggle">
                    <i class="ki-duotone ki-chart-simple fs-1"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span
                            class="path4"></span></i> </div>
                <!--end::Drawer toggle-->
            </div>
            <!--end::Activities-->

            <!--begin::Quick links-->
            <div class="d-flex align-items-center ms-1 ms-lg-2">
                <!--begin::Menu wrapper-->
                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-element-plus fs-1"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span
                            class="path4"></span><span class="path5"></span></i> </div>

                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px"
                    data-kt-menu="true">
                    <!--begin::Heading-->
                    <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                        style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                        <!--begin::Title-->
                        <h3 class="text-white fw-semibold mb-3">
                            Quick Links
                        </h3>
                        <!--end::Title-->

                        <!--begin::Status-->
                        <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending
                            tasks</span>
                        <!--end::Status-->
                    </div>
                    <!--end::Heading-->

                    <!--begin:Nav-->
                    <div class="row g-0">
                        <!--begin:Item-->
                        <div class="col-6">
                            <a href="apps/projects/budget.html"
                                class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                <i class="ki-duotone ki-dollar fs-3x text-primary mb-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <span
                                    class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
                                <span class="fs-7 text-gray-400">eCommerce</span>
                            </a>
                        </div>
                        <!--end:Item-->

                        <!--begin:Item-->
                        <div class="col-6">
                            <a href="apps/projects/settings.html"
                                class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                <i class="ki-duotone ki-sms fs-3x text-primary mb-2"><span
                                        class="path1"></span><span class="path2"></span></i> <span
                                    class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
                                <span class="fs-7 text-gray-400">Console</span>
                            </a>
                        </div>
                        <!--end:Item-->

                        <!--begin:Item-->
                        <div class="col-6">
                            <a href="apps/projects/list.html"
                                class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                <i class="ki-duotone ki-abstract-41 fs-3x text-primary mb-2"><span
                                        class="path1"></span><span class="path2"></span></i> <span
                                    class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
                                <span class="fs-7 text-gray-400">Pending Tasks</span>
                            </a>
                        </div>
                        <!--end:Item-->

                        <!--begin:Item-->
                        <div class="col-6">
                            <a href="apps/projects/users.html"
                                class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                <i class="ki-duotone ki-briefcase fs-3x text-primary mb-2"><span
                                        class="path1"></span><span class="path2"></span></i> <span
                                    class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
                                <span class="fs-7 text-gray-400">Latest cases</span>
                            </a>
                        </div>
                        <!--end:Item-->
                    </div>
                    <!--end:Nav-->

                    <!--begin::View more-->
                    <div class="py-2 text-center border-top">
                        <a href="pages/user-profile/activity.html"
                            class="btn btn-color-gray-600 btn-active-color-primary">
                            View All
                            <i class="ki-duotone ki-arrow-right fs-5"><span
                                    class="path1"></span><span class="path2"></span></i> </a>
                    </div>
                    <!--end::View more-->
                </div>
                <!--end::Menu-->
                <!--end::Menu wrapper-->
            </div>
            <!--end::Quick links-->

          

          
            <div class="d-flex align-items-center ms-1 ms-lg-2">
                <!--begin::Menu wrapper-->
                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span
                            class="path4"></span></i> </div>

               <!-- header-->
                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                    data-kt-menu="true" id="kt_menu_notifications">
                    <!--begin::Heading-->
                    <div class="d-flex flex-column bgi-no-repeat rounded-top"
                        style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                        <!--begin::Title-->
                        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                            Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Tabs-->
                        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                    data-bs-toggle="tab"
                                    href="#kt_topbar_notifications_1">Alerts</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                    data-bs-toggle="tab"
                                    href="#kt_topbar_notifications_2">Updates</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                    data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                            </li>
                        </ul>
                        <!--end::Tabs-->
                    </div>
                    <!--end::Heading-->

                
                </div>
                <!--end::Menu-->
                <!--end::Menu wrapper-->
            </div>
            <!--end::Notifications-->

          <!-- headersectiobn-->
            <div class="d-flex align-items-center ms-1 ms-lg-2">

                <!--begin::Menu toggle-->
                <a href="#"
                    class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                    data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-night-day theme-light-show fs-1"><span
                            class="path1"></span><span class="path2"></span><span
                            class="path3"></span><span class="path4"></span><span
                            class="path5"></span><span class="path6"></span><span
                            class="path7"></span><span class="path8"></span><span
                            class="path9"></span><span class="path10"></span></i> <i
                        class="ki-duotone ki-moon theme-dark-show fs-1"><span
                            class="path1"></span><span class="path2"></span></i></a>
                <!--begin::Menu toggle-->

                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                            data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-night-day fs-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span
                                        class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span></i>
                            </span>
                            <span class="menu-title">
                                Light
                            </span>
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                            data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </span>
                            <span class="menu-title">
                                Dark
                            </span>
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                            data-kt-value="system">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-screen fs-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i> </span>
                            <span class="menu-title">
                                System
                            </span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->

            </div>
            <!--end::Theme mode-->

            <!--begin::User-->
            <div class="d-flex align-items-center ms-2 ms-lg-3" id="kt_header_user_menu_toggle">
                <!--begin::Menu wrapper-->
                <div class="cursor-pointer symbol symbol-35px symbol-lg-35px"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <img alt="Pic" src="{{asset('admin/assets/media/avatars/300-1.jpg')}}" />
                </div>

                <!--begin::User account menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Username-->
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5">
                                    Max Smith <span
                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                </div>

                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                    max@kt.com </a>
                            </div>
                            <!--end::Username-->
                        </div>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="account/overview.html" class="menu-link px-5">
                            My Profile
                        </a>
                    </div>
                 
                   
                    <!--begin::Menu item-->
                    <div class="menu-item px-5 my-1">
                        <a href="account/settings.html" class="menu-link px-5">
                            Account Settings
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="authentication/sign-in/basic.html" class="menu-link px-5">
                            Sign Out
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::User account menu-->
                <!--end::Menu wrapper-->
            </div>
            <!--end::User -->
        </div>
        <!--end::Toolbar wrapper-->
    </div>
    <!--end::Topbar-->
</div>
  <!-- search and top head end -->