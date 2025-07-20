<?php
use App\Models\Work;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Controllers\Admin\WorkController;

Route::get('/', function () {
    $works = Work::latest()->get(); 
    return view('frontend.index', compact('works'));
})->name('hompagemamumi');


Route::get('/go/{hash}', function ($hash) {
    try {
        $routeName = Crypt::decryptString($hash);
        return redirect()->route($routeName);
    } catch (\Exception $e) {
        abort(403, 'ลิงก์นี้ไม่ถูกต้องหรือหมดอายุแล้ว');
    }
})->name('goto.secret');

Route::get('/admin/login', function () {
    return view('frontend.admin.login');
})->name('admin.login');

Route::post('/admin/login', function (Request $request) {
    $admin = Admin::where('email', $request->email)->first();

    if ($admin && Hash::check($request->password, $admin->password)) {
        Auth::guard('admin')->login($admin);
       return redirect()->route('admin.dashboard')->with('success', 'เข้าสู่ระบบสำเร็จ');

    }

    return back()->withErrors(['email' => 'อีเมลหรือรหัสผ่านไม่ถูกต้อง']);
})->name('admin.login.post');

Route::post('/admin/logout', function (Request $request) {
    Auth::guard('admin')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('admin.login');
})->name('admin.logout');


Route::get('/admin/dashboard', [WorkController::class, 'index'])
    ->middleware('auth:admin')
    ->name('admin.dashboard');

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('works', WorkController::class);
});

Route::put('/admin/works/{id}', [WorkController::class, 'update'])->name('admin.works.update');
Route::get('/works', [WorkController::class, 'showWorks'])->name('frontend.works');


Route::delete('/admin/works/{id}/image/{image}', [WorkController::class, 'deleteImage']);
Route::delete('/admin/works/{id}/image/all', [WorkController::class, 'deleteAllImages']);
Route::post('/admin/works/{id}/image/batch-delete', [WorkController::class, 'batchDeleteImages']);

Route::delete('/admin/works/{id}/image/{image}', [WorkController::class, 'destroyImage'])->name('admin.works.image.destroy');
