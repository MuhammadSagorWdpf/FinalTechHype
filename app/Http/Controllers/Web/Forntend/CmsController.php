<?php
//namespace App\Helper;
namespace App\Http\Controllers\Web\Forntend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;
use App\Http\Requests\CmsValidationRequest;
use DataTables;

class CmsController extends Controller
{
    //Hero banner

    public function index(Request $request)
    {
        if ($request->ajax()) {
            // Get the data from the Cms model
            $data = Cms::where('section', 'banner_section')->orderBy('created_at', 'desc')->get();

            // Return DataTables response
            return DataTables::of($data)
                ->addIndexColumn()

                // Action buttons column with custom buttons (Edit, Delete)
                ->addColumn('action', function ($row) {

                    
                    $deleteBtn = '<a href="#" data-id="' . $row->id . '" class="delete" style="margin-left:10px;">
                                        <i class="fa fa-trash" style="font-size:20px"></i>
                                     </a>';
                    $buttons = '<div class="m-5" style="margin-left:5px;">'  . $deleteBtn . '</div>';
                    return $buttons;
                })

                ->addColumn('image', function ($row) {

                    return $row->image ? '<img src="' . asset($row->image) . '" alt="Image" style="width: 50px; height: 50px; object-fit: cover;">' : 'No Image';
                })

                ->rawColumns(['action', 'image'])

                // Return the DataTables response
                ->make(true);
        }

        // Return the view with DataTable
        return view('backend.admin.layouts.cms.herobanner');
    }


    //hero banner store

    public function createBanner(CmsValidationRequest $request)
    {
        if ($request->ajax()) {
            // Check if the banner already exists
            $createbanner = Cms::where('section', 'banner_section')->first();

            $imagePath = null;
            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = Helper::uploadImage($image, 'event', $imageName);
            }

            if ($createbanner) {
                // Update existing banner
                $createbanner->title = $request->title;
                $createbanner->description = $request->description;
                $createbanner->button = $request->button;
                $createbanner->image = $imagePath ?? $createbanner->image;
                $createbanner->save();
                $message = 'Banner Updated Successfully!';
                $data = $createbanner;
            } else {
                // Create new banner
                $banner = new Cms();
                $banner->title = $request->title;
                $banner->section = 'banner_section';
                $banner->description = $request->description;
                $banner->button = $request->button;
                $banner->image = $imagePath ?? null;
                $banner->save();
                $message = 'Banner Created Successfully!';
                $data = $banner;
            }

            // Return the response with success message and the data
            return response()->json([
                'success' => true,
                'message' => $message,
                'data' => $data
            ]);
        }

        return view('backend.admin.layouts.cms.heerobanner');
    }


    //Home About Section
    public function homeAbout(Request $request)
    {

        if ($request->ajax()) {
            // Get the data from the Cms model
            $data = Cms::where('section', 'home_about')->orderBy('created_at', 'desc')->get();

            // Return DataTables response
            return DataTables::of($data)
                ->addIndexColumn()

                // Action buttons column with custom buttons (Edit, Delete)
                ->addColumn('action', function ($row) {

                    $deleteBtn = '<a href="#" data-id="' . $row->id . '" class="delete" style="margin-left:10px;">
                                    <i class="fa fa-trash" style="font-size:20px"></i>
                                 </a>';
                    $buttons = '<div class="m-5" style="margin-left:5px;">' . $deleteBtn . '</div>';
                    return $buttons;
                })

                ->addColumn('image', function ($row) {

                    return $row->image ? '<img src="' . asset($row->image) . '" alt="Image" style="width: 50px; height: 50px; object-fit: cover;">' : 'No Image';
                })

                ->rawColumns(['action', 'image'])

                // Return the DataTables response
                ->make(true);
        }

        // Return the view with DataTable

        return view('backend.admin.layouts.cms.home_about');
    }


    //homeabout create
    public function homeAboutStore(CmsValidationRequest $request)
    {

        // dd($request->all());

        if ($request->ajax()) {
            // Check if the section already exists
            $existingCms = Cms::where('section', 'home_about')->first();

            // Handle file upload for the image (if provided)
            $imagePath = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = Helper::uploadImage($image, 'event', $imageName);
            }

            // If the section exists, update the record
            if ($existingCms) {
                // Update the existing record
                $existingCms->title = $request->title;
                $existingCms->description = $request->description;
                $existingCms->button = $request->button;
                $existingCms->image = $imagePath ?? $existingCms->image;
                $existingCms->save();

                $message = 'Banner Updated Successfully';
                $data = $existingCms;
            } else {
                // If the section doesn't exist, create a new record
                $newCms = new Cms();
                $newCms->title = $request->title;
                $newCms->section = 'home_about';  
                $newCms->description = $request->description;
                $newCms->button = $request->button;
                $newCms->image = $imagePath;
                $newCms->save();

                $message = 'Banner Created Successfully';
                $data = $newCms;
            }

            // Return the response indicating success
            return response()->json([
                'success' => true,
                'message' => $message,
                'data' => $data
            ]);
        }

        // If not an AJAX request, you can redirect or return a view
        return view('backend.admin.layouts.cms.home_about');
    }

    /// HOME Delership section
    public function delership(Request $request)
    {

        if ($request->ajax()) {

            $data = Cms::where('section', 'delership_section')->orderBy('created_at', 'desc')->get();

            return DataTables::of($data)
                ->addIndexColumn()

                // Action buttons column with custom buttons (Edit, Delete)
                ->addColumn('action', function ($row) {

                    $deleteBtn = '<a href="#" data-id="' . $row->id . '" class="delete" style="margin-left:10px;">
                                    <i class="fa fa-trash" style="font-size:20px"></i>
                                 </a>';
                    $buttons = '<div class="m-5" style="margin-left:5px;">'  . $deleteBtn . '</div>';
                    return $buttons;
                })

                ->addColumn('image', function ($row) {

                    return $row->image
                        ? '<img src="' . asset('storage' . $row->image) . '" alt="Image" style="width: 50px; height: 50px; object-fit: cover;">'
                        : 'No Image';
                })

                ->rawColumns(['action', 'image'])


                ->make(true);
        }

        // Return the view with DataTable


        return view('backend.admin.layouts.cms.delership');
    }

    public function storeDelership(CmsValidationRequest $request)
    {
        // Check if this is an AJAX request
        if ($request->ajax()) {


            $imagePath = '';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = Helper::uploadImage($image, 'event', $imageName);
            }

            // Define the section name
            $section = 'delership_section';


            $existingDelership = Cms::where('section', $section)->first();

            if ($existingDelership) {

                $existingDelership->title = $request->title;
                $existingDelership->section = $section;
                $existingDelership->image = $imagePath ?: $existingDelership->image;
                $existingDelership->sub_title1 = $request->sub_title1;
                $existingDelership->description1 = $request->description1;
                $existingDelership->sub_title2 = $request->sub_title2;
                $existingDelership->description2 = $request->description2;
                $existingDelership->sub_title3 = $request->sub_title3;
                $existingDelership->description3 = $request->description3;
                $existingDelership->sub_title4 = $request->sub_title4;
                $existingDelership->description4 = $request->description4;
                $existingDelership->sub_title5 = $request->sub_title5;
                $existingDelership->description5 = $request->description5;
                $existingDelership->save();

                // Set message and data to return
                $message = 'Home Delership Updated Successfully!';
                $data = $existingDelership;
            } else {
                // Create a new record
                $delership = new Cms();
                $delership->title = $request->title;
                $delership->section = $section;
                $delership->image = $imagePath;
                $delership->sub_title1 = $request->sub_title1;
                $delership->description1 = $request->description1;
                $delership->sub_title2 = $request->sub_title2;
                $delership->description2 = $request->description2;
                $delership->sub_title3 = $request->sub_title3;
                $delership->description3 = $request->description3;
                $delership->sub_title4 = $request->sub_title4;
                $delership->description4 = $request->description4;
                $delership->sub_title5 = $request->sub_title5;
                $delership->description5 = $request->description5;
                $delership->save();

                // Set message and data to return
                $message = 'Home Delership Created Successfully!';
                $data = $delership;
            }

            // Return a JSON response with success status and the saved data
            return response()->json([
                'success' => true,
                'message' => $message,
                'data' => $data
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid Request'
        ]);
    }




    public function aboutUs(Request $request)
    {
        if ($request->ajax()) {
            // Get the data from the Cms model
            $data = Cms::where('section', 'about_us')->orderBy('created_at', 'desc')->get();

            // Return DataTables response
            return DataTables::of($data)
                ->addIndexColumn()

                // Action buttons column with custom buttons (Edit, Delete)
                ->addColumn('action', function ($row) {

                    $deleteBtn = '<a href="#" data-id="' . $row->id . '" class="delete" style="margin-left:10px;">
                                <i class="fa fa-trash" style="font-size:20px"></i>
                             </a>';
                    $buttons = '<div class="m-5" style="margin-left:5px;">' . $deleteBtn . '</div>';
                    return $buttons;
                })

                ->addColumn('image', function ($row) {

                    return $row->image ? '<img src="' . asset($row->image) . '" alt="Image" style="width: 50px; height: 50px; object-fit: cover;">' : 'No Image';
                })

                ->rawColumns(['action', 'image'])

                ->make(true);
        }

        return view('backend.admin.layouts.cms.aboutus');
    }

    public function storeAboutus(CmsValidationRequest $request)
    {
        if ($request->ajax()) {
            $imagePath = '';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = Helper::uploadImage($image, 'event', $imageName);
            }
            $aboutus = 'about_us';
            $existaboutus = Cms::where('section', $aboutus)->first();
            if ($existaboutus) {
                $existaboutus->description1 = $existaboutus->description1;
                $existaboutus->description2 = $existaboutus->description2;
                $existaboutus->description3 = $existaboutus->description3;
                $existaboutus->description4 = $existaboutus->description4;
                $existaboutus->image = $imagePath ?? $existaboutus->iamge;
                $existaboutus->save();

                $message = 'About Us Update Successfully!!';
                $data = $existaboutus;
            } else {
                // If no record exists, create a new one
                $aboutUs = new Cms();
                $aboutUs->title = $request->title; // Add title if required
                $aboutUs->section = $aboutus; // Set the section as 'about_us'
                $aboutUs->description1 = $request->description1;
                $aboutUs->description2 = $request->description2;
                $aboutUs->description3 = $request->description3;
                $aboutUs->description4 = $request->description4;
                $aboutUs->image = $imagePath; // Store the image
                $aboutUs->save();

                $message = 'About Us Created Successfully!';
                $data = $aboutUs;
            }
            return response()->json([
                'success' => true,
                'message' => $message,
                'data' => $data
            ]);
        }
    }


    //how to work

    public function howtowork(Request $request)
    {

        if ($request->ajax()) {
            // Get the data from the Cms model
            $data = Cms::where('section', 'howit_work')->orderBy('created_at', 'desc')->get();

            // Return DataTables response
            return DataTables::of($data)
                ->addIndexColumn()

                // Action buttons column with custom buttons (Edit, Delete)
                ->addColumn('action', function ($row) {

                    $deleteBtn = '<a href="#" data-id="' . $row->id . '" class="delete" style="margin-left:10px;">
                                <i class="fa fa-trash" style="font-size:20px"></i>
                             </a>';
                    $buttons = '<div class="m-5" style="margin-left:5px;">' . $deleteBtn . '</div>';
                    return $buttons;
                })

                ->addColumn('image', function ($row) {

                    return $row->image ? '<img src="' . asset($row->image) . '" alt="Image" style="width: 50px; height: 50px; object-fit: cover;">' : 'No Image';
                })

                ->rawColumns(['action', 'image'])

                ->make(true);
        }
        return view('backend.admin.layouts.cms.how_it_work');
    }


    public function storeHowitwork(CmsValidationRequest $request)
    {
        if ($request->ajax()) {
            $imagePath = '';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = Helper::uploadImage($image, 'event', $imageName);
            }
            $aboutus = 'howit_work';
            $existhowitwork = Cms::where('section', $aboutus)->first();
            if ($existhowitwork) {
                $existhowitwork->title = $existhowitwork->title;
                $existhowitwork->sub_title1 = $existhowitwork->sub_title1;
                $existhowitwork->description1 = $existhowitwork->description1;
                $existhowitwork->sub_title2 = $existhowitwork->sub_title2;
                $existhowitwork->description2 = $existhowitwork->description2;
                $existhowitwork->sub_title3 = $existhowitwork->sub_title3;
                $existhowitwork->description3 = $existhowitwork->description3;
                $existhowitwork->image = $imagePath ?? $existhowitwork->iamge;
                $existhowitwork->save();

                $message = 'Work Update Successfully!!';
                $data = $existhowitwork;
            } else {
                 // If no record exists, create a new record
            $howItWork = new Cms();
            $howItWork->title = $request->title;
            $howItWork->section = $aboutus;
            $howItWork->sub_title1 = $request->sub_title1;
            $howItWork->description1 = $request->description1;
            $howItWork->sub_title2 = $request->sub_title2;
            $howItWork->description2 = $request->description2;
            $howItWork->sub_title3 = $request->sub_title3;
            $howItWork->description3 = $request->description3;

            // Handle image field
            $howItWork->image = $imagePath;
            $howItWork->save();

            $message = 'How it works section created successfully!';
            $data = $howItWork;
                
            }
            return response()->json([
                'success' => true,
                'message' => $message,
                'data' => $data
            ]);
        }
    }
}
