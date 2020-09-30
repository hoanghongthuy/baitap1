<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    $dataBanChay = DB::table('sach')->where(['banchay'=>1])->offset(0)->limit(4)->get();
    $dataKhuyenMai = DB::table('sach')->where('khuyenmai','>',0)->orderby('khuyenmai','desc')->offset(0)->limit(10)->get();
    $title = 'Homepage';
    return view('user.home',['banchay'=>$dataBanChay,'khuyenmai'=>$dataKhuyenMai,'title'=>$title]);
});

Route::group(['prefix'=>'product'],function(){
    Route::get('/',function(){
        $data = DB::table('sach')->get();
        return view('product',['data'=>$data]);
    })->where('id','[a-z]+');

    Route::get('detail/{id}',function($id){
        $data = DB::table('sach')->where(['masach'=>$id])->first();
        $title = "Product detail";
        return view('product_detail',['data'=>$data,'title'=>$title]);
    })->where('id','[a-zA-Z0-9]+');
});

Route::group(['prefix'=>'cart'],function(){
    Route::get('/',function(){
        return view('cart');
    })->name('cart');

    Route::get('add/{id}',function($id){
        $data = DB::table('sach')->select('masach','tensach','gia','hinh')->where(['masach'=>$id])->first();
        if ($data){
            $sp = ['id'=>$data->masach,
                    'name'=>$data->tensach,
                    'qty'=>1,
                    'price'=>$data->gia,
                    'options'=>['hinh'=>$data->hinh]
            ];
            Cart::add($sp);
        }
        return redirect('cart');
    })->where('id','[a-z0-9]+');

    Route::get('delete/{id}',function($id){
        Cart::remove($id);
        return redirect('cart');
    });

    Route::get('deleteAll', function(){
        Cart::destroy();
        return redirect('cart');
    });
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/',function(){
        return view('admin.index');
    });
    Route::group(['prefix'=>'category'],function(){
        Route::get('/',function(){
            return view('admin.category');
        })->name('admin.category');
        Route::get('add',function(){
            return redirect()->route('admin.category');
        });
        Route::get('save',function(){
            return redirect()->route('admin.category');
        });
        Route::get('edit/{id}',function($id){
            return "sua cat id = ".$id;
        });
        Route::get('update/{id}',function($id){
            return redirect()->route('admin.category',$id);
        });
        Route::get('delete/{id}',function($id){
            return redirect()->route('admin.category',$id);
        });
    });
});

Route::get('hello-send-mail',function(){
    $data = [];
    $to_email = 'nduykhanh109@gmail.com';
    Mail::send('emails.activation', $data, function($message) use ($to_email) {
        $message->to($to_email)->subject("hello send mail");
    });
});