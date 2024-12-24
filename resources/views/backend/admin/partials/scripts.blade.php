{{-- <script>
    var hostUrl = "assets/index.html";
</script> --}}

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('admin/assets/plugins/custom/leaflet/leaflet.bundle.js')}}"></script>
<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('admin/assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/create-project/type.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/create-project/budget.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/create-project/settings.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/create-project/team.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/create-project/targets.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/create-project/files.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/create-project/complete.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/create-project/main.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/select-location.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/users-search.js')}}"></script>