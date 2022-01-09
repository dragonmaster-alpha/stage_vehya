<?php







use Illuminate\Support\Facades\Route;



use App\Http\Controllers\AdminController;



use App\Http\Controllers\VendorController;



use App\Http\Controllers\HomeController;











/*



|--------------------------------------------------------------------------



| Web Routes



|--------------------------------------------------------------------------



|



| Here is where you can register web routes for your application. These



| routes are loaded by the RouteServiceProvider within a group which



| contains the "web" middleware group. Now create something great!



|



*/





//admin

Route::get('admin/dashboard', [AdminController::class, 'index']);
Route::get('admin', [AdminController::class, 'index']);
Route::any('admin/login', [AdminController::class, 'login']);
Route::any('admin/forget-password', [AdminController::class, 'forgetPassword']);
Route::any('admin/recover-password/{token}', [AdminController::class, 'recover_password']);
Route::any('admin/logout', [AdminController::class, 'logout']);
Route::any('admin/user-profile', [AdminController::class, 'userProfile']);

//admin Cms Pages

Route::any('admin/about', [AdminController::class, 'about']);
Route::get('veh/about', [HomeController::class, 'about']);
Route::any('admin/career', [AdminController::class, 'career']);
Route::get('veh/career', [HomeController::class, 'career']);
Route::any('admin/blog', [AdminController::class, 'blog']);
Route::get('veh/blog', [HomeController::class, 'blog']);
Route::any('admin/return-refund', [AdminController::class, 'returnRefund']);
Route::get('user/return-refund', [HomeController::class, 'returnRefund']);
Route::any('admin/term-condition', [AdminController::class, 'termCondition']);
Route::get('user/term-condition', [HomeController::class, 'termCondition']);
Route::any('admin/privacy-policy', [AdminController::class, 'privacyPolicy']);
Route::get('user/privacy-policy', [HomeController::class, 'privacyPolicy']);





// Admin - Vendor Type

Route::any('admin/add-vendor-type', [AdminController::class, 'addVendorType']);

Route::get('admin/vendor-type-list', [AdminController::class, 'vendorTypeList']);

Route::get('admin/vendor-type-list/{id}', [AdminController::class, 'vendorTypeDelete']);

Route::get('admin/vendor-type-list-show/{id}', [AdminController::class, 'vendorTypeShow']);

Route::post('admin/vendor-type-list-update/{id}', [AdminController::class, 'vendorTypeUpdate']);



// Admin - Vendor 

Route::any('admin/add-vendor', [AdminController::class, 'addVendor']);

Route::get('admin/vendor-list', [AdminController::class, 'vendorList']);

Route::get('admin/vendor-list/{id}', [AdminController::class, 'vendorDelete']);

Route::get('admin/vendor-list-show/{id}', [AdminController::class, 'vendorShow']);

Route::post('admin/vendor-list-update/{id}', [AdminController::class, 'vendorUpdate']);

Route::any('admin/vendor-list-view/{id}', [AdminController::class, 'vendorView']);

Route::post('admin/vendor-active/{id}', [AdminController::class, 'vendorActive']);

Route::post('admin/vendor-disable/{id}', [AdminController::class, 'vendorDisable']);







// // Admin - Electrician

// Route::any('admin/add-electrician', [AdminController::class, 'addElectrician']);

// Route::get('admin/electrician-list', [AdminController::class, 'electricianList']);

// Route::get('admin/electrician-list/{id}', [AdminController::class, 'electricianDelete']);

// Route::get('admin/electrician-list-show/{id}', [AdminController::class, 'electricianShow']);

// Route::post('admin/electrician-list-update/{id}', [AdminController::class, 'electricianUpdate']);

// Admin - Products

Route::any('admin/add-product', [AdminController::class, 'addProduct']);

Route::get('admin/product-list', [AdminController::class, 'productList']);

Route::get('admin/product-list/{id}', [AdminController::class, 'productDelete']);

Route::get('admin/product-list-show/{id}', [AdminController::class, 'productShow']);

Route::post('admin/product-list-update/{id}', [AdminController::class, 'productUpdate']);

Route::any('admin/product-list-view/{id}', [AdminController::class, 'productView']);

// Admin - Industry

Route::any('admin/add-industry', [AdminController::class, 'addIndustry']);

Route::get('admin/industry-list', [AdminController::class, 'industryList']);

Route::get('admin/industry-list/{id}', [AdminController::class, 'industryDelete']);

Route::get('admin/industry-list-show/{id}', [AdminController::class, 'industryShow']);

Route::post('admin/industry-list-update/{id}', [AdminController::class, 'industryUpdate']);

// Admin - Testimonial

Route::any('admin/add-testimonial', [AdminController::class, 'addTestimonial']);

Route::get('admin/testimonial-list', [AdminController::class, 'testimonialList']);

Route::get('admin/testimonial-list/{id}', [AdminController::class, 'testimonialDelete']);

Route::get('admin/testimonial-list-show/{id}', [AdminController::class, 'testimonialShow']);

Route::post('admin/testimonial-list-update/{id}', [AdminController::class, 'testimonialUpdate']);




//Vendors Login

Route::get('vendors/dashboard', [VendorController::class, 'index']);

Route::get('vendors', [VendorController::class, 'index']);

Route::any('vendors/login', [VendorController::class, 'login']);

Route::any('vendors/forget-password', [VendorController::class, 'forgetPassword']);

Route::any('vendors/recover-password/{token}', [VendorController::class, 'recover_password']);

Route::any('vendor/electrician-recover-password/{token}', [VendorController::class, 'electricianRecoverPassword']);

Route::any('vendors/logout', [VendorController::class, 'logout']);

//Electrician Profile

Route::any('vendors/user-profile', [VendorController::class, 'userProfile']);


// Vendor - Vendor 

// Route::any('vendor/add-vendor', [VendorController::class, 'addVendor']);

// Route::get('vendor/vendor-list', [VendorController::class, 'vendorList']);

// Route::get('vendor/vendor-list/{id}', [VendorController::class, 'vendorDelete']);

Route::get('vendors/vendor-list-show/{id}', [VendorController::class, 'vendorShow']);

Route::post('vendors/vendor-list-update/{id}', [VendorController::class, 'vendorUpdate']);

// Route::any('vendor/vendor-list-view/{id}', [VendorController::class, 'vendorView']);

Route::post('vendors/inspection-status/{id}', [VendorController::class, 'inspectionStatus']);



// Vendor - Electrician

Route::any('vendors/add-electrician', [VendorController::class, 'addElectrician']);

Route::get('vendors/electrician-list', [VendorController::class, 'electricianList']);

Route::get('vendors/electrician-list/{id}', [VendorController::class, 'electricianDelete']);

Route::get('vendors/electrician-list-show/{id}', [VendorController::class, 'electricianShow']);

Route::post('vendors/electrician-list-update/{id}', [VendorController::class, 'electricianUpdate']);


// Admin - Customer

Route::any('admin/add-customer', [AdminController::class, 'addCustomer']);

Route::get('admin/customer-list/{status}', [AdminController::class, 'customerList']);

Route::get('admin/job-list-status/{id}', [AdminController::class, 'jobListStatus']);

// Route::get('admin/customer-list/{id}', [AdminController::class, 'customerDelete']);

Route::get('admin/survey/{id}', [AdminController::class, 'survey']);

Route::any('admin/survey-update/{id}', [AdminController::class, 'surveyUpdate']);

Route::get('admin/customer-list-show/{id}', [AdminController::class, 'customerShow']);

Route::post('admin/customer-list-update/{id}', [AdminController::class, 'customerUpdate']);

Route::any('admin/customer-list-view/{id}', [AdminController::class, 'customerView']);

Route::any('admin/assign-vendor', [AdminController::class, 'assignVendor']);



// Vendor - Job

Route::any('vendors/add-job', [VendorController::class, 'addJob']);

Route::get('vendors/job-list/{status}', [VendorController::class, 'jobList']);

Route::get('vendors/job-list-show/{id}', [VendorController::class, 'jobShow']);

Route::post('vendors/job-list-update/{id}', [VendorController::class, 'jobUpdate']);

Route::get('vendors/survey/{id}', [VendorController::class, 'survey']);

Route::any('vendors/survey-update/{id}', [VendorController::class, 'surveyUpdate']);



Route::any('vendors/job-list-view/{id}', [VendorController::class, 'jobView']);

Route::any('vendors/job-list-status/{status}/{id}', [VendorController::class, 'jobListStatus']);

Route::any('vendors/assign-electrician', [VendorController::class, 'assignElectrician']);





//Home  Veh


Route::any('veh/add-commercial/{step}', [HomeController::class, 'addCommercial']);

Route::any('veh/add-commercial/{step}/{id}', [HomeController::class, 'addCommercial']);

Route::any('veh/add-commercial/{step}/{id}', [HomeController::class, 'addCommercial']);

Route::any('veh/add-residential/{step}', [HomeController::class, 'addResidential']);

Route::any('veh/add-residential/{step}/{id}', [HomeController::class, 'addResidential']);

Route::any('veh/add-residential/{step}/{id}', [HomeController::class, 'addResidential']);

Route::any('veh/add-residential/{step}/{id}', [HomeController::class, 'addResidential']);


Route::get('veh/pricing', [HomeController::class, 'price']);

Route::get('veh/add-commercial', [HomeController::class, 'commercialProduct']);

Route::post('veh/add-commercial-price', [HomeController::class, 'addCommercialProductPrice']);

Route::post('veh/add-commercial-location', [HomeController::class, 'addCommercialLocation']);

Route::any('veh/contactus', [HomeController::class, 'contactUs']);

Route::post('veh/newsletter', [HomeController::class, 'newsLetter']);

Route::get('veh', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::any('/veh/get-quote', [HomeController::class, 'getQuote']);
Route::get('/veh/get-quote/thankyou', [HomeController::class, 'thankyou']);
Route::any('/veh/get-quote/commercial', [HomeController::class, 'commercial']);
Route::any('/veh/get-quote/residential', [HomeController::class, 'residential']);



Route::get('/veh/all_blogs', [HomeController::class, 'all_blogs']);
Route::get('/veh/about_us', [HomeController::class, 'about_us']);
Route::get('/veh/application_auto', [HomeController::class, 'application_auto']);
Route::get('/veh/application_municipal', [HomeController::class, 'application_municipal']);
Route::get('/veh/application_offices', [HomeController::class, 'application_offices']);
Route::get('/veh/application_residential', [HomeController::class, 'application_residential']);
Route::get('/veh/application_retail', [HomeController::class, 'application_retail']);
Route::get('/veh/tax_credits', [HomeController::class, 'tax_credits']);














































































Route::get('/city/{id}', [AdminController::class, 'city']);







Route::get('/send-mail/{to}/{maildata}', function ($to,$maildata) {



   



    $details = unserialize(urldecode($maildata));







    \Mail::to($to)->send(new \App\Mail\MyTestMail($details));



   



    dd(1);



});



