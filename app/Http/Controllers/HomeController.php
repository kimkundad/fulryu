<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use App\order;
use App\order_detail;
use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $obj4 = DB::table('categories')->select(
            'categories.*'
            )
            ->where('id', 4)
            ->first();

            $options = DB::table('products')
              ->where('pro_category', 4)
              ->limit(6)
              ->get();
            $obj4->options = $options;

      $obj5 = DB::table('categories')->select(
            'categories.*'
            )
            ->where('id', 5)
            ->first();

      $obj6 = DB::table('categories')->select(
            'categories.*'
            )
            ->where('id', 6)
            ->first();



      $obj1 = DB::table('categories')->select(
            'categories.*'
            )
            ->where('id', 1)
            ->first();


              $options = DB::table('products')
                ->where('pro_category', 1)
                ->limit(6)
                ->get();
              $obj1->options = $options;


            //  dd($obj1);

      $obj2 = DB::table('categories')->select(
            'categories.*'
            )
            ->where('id', 2)
            ->first();

            $options = DB::table('products')
              ->where('pro_category', 2)
              ->limit(6)
              ->get();
            $obj2->options = $options;

      $obj3 = DB::table('categories')->select(
            'categories.*'
            )
            ->where('id', 3)
            ->first();


            $options = DB::table('products')
              ->where('pro_category', 3)
              ->limit(6)
              ->get();
            $obj3->options = $options;


      $cat = DB::table('products')->select(
            'products.*',
            'products.id as id_p'
            )
            ->where('products.pro_status', 1)
            ->get();

      $data['cat1'] = $obj1;
      $data['cat2'] = $obj2;
      $data['cat3'] = $obj3;
      $data['cat4'] = $obj4;
      $data['cat5'] = $obj5;
      $data['cat6'] = $obj6;

      $data['objs'] = $cat;

        return view('welcome', $data);
    }

    public function del_cart($id){

      session()->forget(['cart.'.$id]);
      return redirect()->back()->with('success', 'เพิ่มสินค้าสำเร็จ');
    }


    public function clear_cart(){
      session()->forget(['cart']);
      return redirect()->back()->with('success', 'เพิ่มสินค้าสำเร็จ');
    }


    public function category($id){

      return view('category');
    }

    public function about(){

      return view('about');
    }

    public function contact(){

      return view('contact');
    }



    public function cart(){

      $set_num_date = count(Session::get('cart'));
      if($set_num_date == 0){
        return redirect('/');
      }else{
        Session::put('status_user', 1);
      }

      return view('cart');
    }

    public function checkout(){

      $set_cart = count(Session::get('cart'));
      if($set_cart == 0){
        return redirect('/');
      }else{


        $total = 0;
        $total_item = 0;
        $sum_weight = 0;
        $price_s = 0;

        foreach(Session::get('cart') as $u){

          $product = DB::table('products')->select(
            'products.*'
            )
            ->where('products.id', $u['data']['id'])
            ->first();


          $sum_weight += ($product->pro_weight * $u['data'][1]['sum_item']);

          $shipping_price = ($product->pro_weight * $u['data'][1]['sum_item']);

          if($shipping_price < 20){
                  $price_s = 20;
                }elseif($shipping_price > 20 && $shipping_price < 100){
                  $price_s = 25;
                }elseif($shipping_price > 100 && $shipping_price < 250){
                  $price_s = 30.00;
                }elseif($shipping_price > 250 && $shipping_price < 500){
                  $price_s = 40.00;
                }elseif($shipping_price > 500 && $shipping_price < 1000){
                  $price_s = 55.00;
                }elseif($shipping_price > 1000 && $shipping_price < 1500){
                  $price_s = 70.00;
                }elseif($shipping_price > 1500 && $shipping_price < 2000){
                  $price_s = 85.00;
                }elseif($shipping_price > 2000 && $shipping_price < 2500){
                  $price_s = 100.00;
                }elseif($shipping_price > 2500 && $shipping_price < 3000){
                  $price_s = 115.00;
                }elseif($shipping_price > 3000 && $shipping_price < 3500){
                  $price_s = 135.00;
                }elseif($shipping_price > 3500 && $shipping_price < 4000){
                  $price_s = 155;
                }elseif($shipping_price > 4000 && $shipping_price < 4500){
                  $price_s = 175;
                }elseif($shipping_price > 4500 && $shipping_price < 5000){
                  $price_s = 200;
                }elseif($shipping_price > 5000 && $shipping_price < 5500){
                  $price_s = 220;
                }elseif($shipping_price > 5500 && $shipping_price < 6000){
                  $price_s = 245;
                }elseif($shipping_price > 6000 && $shipping_price < 6500){
                  $price_s = 270;
                }elseif($shipping_price > 6500 && $shipping_price < 7000){
                  $price_s = 295;
                }elseif($shipping_price > 7000 && $shipping_price < 7500){
                  $price_s = 320;
                }elseif($shipping_price > 7500 && $shipping_price < 8000){
                  $price_s = 345;
                }elseif($shipping_price > 8000 && $shipping_price < 8500){
                  $price_s = 375;
                }elseif($shipping_price > 8500 && $shipping_price < 9000){
                  $price_s = 405;
                }elseif($shipping_price > 9000 && $shipping_price < 9500){
                  $price_s = 435;
                }elseif($shipping_price > 9500 && $shipping_price < 10000){
                  $price_s = 465;
                }else{

                }




          $total += $u['data'][2]['sum_price'];
        //  $total_sum = $u['data']['price']*$u['data'][1]['sum_item'];
          $total_item += $u['data'][1]['sum_item'];


        }
        $total_price = $total+$price_s;
        $data['sum_weight'] = $sum_weight;
        $data['price_s'] = $price_s;
        $data['total_price'] = $total_price;
        $data['total'] = $total;
        $data['num_order'] = $set_cart;


      }


      return view('checkout', $data);
    }

    public function add_shipping(Request $request){

      $this->validate($request, [
           'fname' => 'required',
           'lname' => 'required',
           'email' => 'required',
           'address' => 'required',
           'city' => 'required',
           'province' => 'required',
           'zip_code' => 'required',
           'country' => 'required',
           'phone' => 'required',
           'total_money' => 'required'
       ]);

       $user = DB::table('users')->select(
         'users.*'
         )
         ->where('users.id', Auth::user()->id)
         ->first();

         if($user->phone == null || $user->address == null){

           DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(
              [
                'address' => $request['address'],
                'phone' => $request['phone'],
                'country' => $request['country'],
                'zipcode' => $request['zip_code'],
                'province' => $request['province']
              ]
            );
         }

       $package = new order();
       $package->fname = $request['fname'];
       $package->user_id = Auth::user()->id;
       $package->lname = $request['lname'];
       $package->company = $request['company'];
       $package->email = $request['email'];
       $package->address = $request['address'];
       $package->city = $request['city'];
       $package->province = $request['province'];
       $package->zip_code = $request['zip_code'];
       $package->country = $request['country'];
       $package->phone = $request['phone'];
       $package->total_money = $request['total_money'];
       $package->order_weight = $request['sum_weight'];
       $package->shipping_price = $request['shipping_price'];
       $package->save();

       $the_id = $package->id;

       foreach(Session::get('cart') as $u){

         $product = DB::table('products')->select(
           'products.*'
           )
           ->where('products.id', $u['data']['id'])
           ->first();


         $obj = new order_detail();
         $obj->order_id = $the_id;
         $obj->product_id = $product->id;
         $obj->product_name = $product->pro_name;
         $obj->sum_item = $u['data'][1]['sum_item'];
         $obj->sum_money = $u['data'][2]['sum_price'];
         $obj->save();

       }






       $order_detail = DB::table('order_details')->select(
              'order_details.*'
              )
              ->where('order_id', $package->id)
              ->get();




       date_default_timezone_set("Asia/Bangkok");
       $data_date = date("Y-m-d H:i:s");


       // send email
            $data_toview = array();
          //  $data_toview['pathToImage'] = "assets/image/email-head.jpg";

          date_default_timezone_set("Asia/Bangkok");
          $data_toview['data_detail'] = $order_detail;
          $data_toview['data'] = $package;
          $data_toview['datatime'] = date("d-m-Y H:i:s");

            $email_sender   = 'fulryumail@gmail.com';
            $email_pass     = 'aeychingking';

        /*    $email_sender   = 'info@acmeinvestor.com';
            $email_pass     = 'Iaminfoacmeinvestor';  */
            $email_to       =  $request['email'];
            //echo $admins[$idx]['email'];
            // Backup your default mailer
            $backup = \Mail::getSwiftMailer();

            try{

                        //https://accounts.google.com/DisplayUnlockCaptcha
                        // Setup your gmail mailer
                        $transport = new \Swift_SmtpTransport('smtp.gmail.com', 465, 'SSL');
                        $transport->setUsername($email_sender);
                        $transport->setPassword($email_pass);

                        // Any other mailer configuration stuff needed...
                        $gmail = new Swift_Mailer($transport);

                        // Set the mailer as gmail
                        \Mail::setSwiftMailer($gmail);

                        $data['emailto'] = $email_sender;
                        $data['sender'] = $email_to;
                        //Sender dan Reply harus sama

                        Mail::send('mail.index', $data_toview, function($message) use ($data)
                        {
                            $message->from($data['sender'], 'fulryu e-commerce');
                            $message->to($data['sender'])
                            ->replyTo($data['sender'], 'fulryu e-commerce.')
                            ->subject('มีรายการใหม่จาก fulryu ');

                            //echo 'Confirmation email after registration is completed.';
                        });


                        Mail::send('mail.index', $data_toview, function($message) use ($data)
                        {
                            $message->from($data['sender'], 'fulryu e-commerce');
                            $message->to($data['emailto'])
                            ->replyTo($data['sender'], 'fulryu e-commerce.')
                            ->subject('คุณได้ทำรายการจาก fulryu');

                            //echo 'Confirmation email after registration is completed.';
                        });

            }catch(\Swift_TransportException $e){
                $response = $e->getMessage() ;
                echo $response;

            }


            // Restore your original mailer
            Mail::setSwiftMailer($backup);
            // send email







       $id = $the_id;

        return redirect(url('payment/'.$id));
    }


    public function payment($id){

      $obj = DB::table('orders')->select(
            'orders.*'
            )
            ->where('id', $id)
            ->first();

            $objs = DB::table('order_details')->select(
                  'order_details.*'
                  )
                  ->where('order_id', $id)
                  ->get();

                  foreach($objs as $u){

                    $options = DB::table('products')->select(
                          'products.*'
                          )
                          ->where('id', $u->product_id)
                          ->first();

                      $u->options = $options;
                  }


      $data['order_all'] = $objs;
      $data['order'] = $obj;
      $data['id_order'] = $id;
      session()->forget(['cart']);
      return view('payment', $data);
    }



    public function add_cart(Request $request){

      $this->validate($request, [
           'qty' => 'required',
           'pro_id' => 'required'
       ]);

       $id = $request['pro_id'];

      $obj = DB::table('products')->select(
            'products.*'
            )
            ->where('id', $id)
            ->first();

        $item = [
          'id' => $obj->id,
          'image' => $obj->pro_image,
          'code' => $obj->pro_code,
          'name' => $obj->pro_name,
          'price' => $obj->pro_price,
          ['status' => 0],
          ['sum_item' => $request['qty']],
          ['sum_price' => $obj->pro_price]
        ];

        Session::put('cart.'.$obj->id, ['data' => $item]);

       return view('cart');

    }

    public function update_cart(Request $request){

      $this->validate($request, [
           'qty' => 'required',
           'pro_id' => 'required'
       ]);
       $id = $request['pro_id'];
       $qty = $request['qty'];

       $obj = DB::table('products')->select(
             'products.*'
             )
             ->where('id', $id)
             ->first();

             $total_money_ses= $obj->pro_price * $qty;
          //   dd($total_money_ses)
       session()->put('cart.'.$id.'.data.2', ['sum_price' => $total_money_ses]);
       session()->put('cart.'.$id.'.data.1', ['sum_item' => $qty]);

      return view('cart');
    }

    public function product($id){

      $img_all = DB::table('galleries')->select(
          'galleries.*'
          )
          ->where('pro_id', $id)
          ->get();

          $data['img_all'] = $img_all;

      $related = DB::table('products')->select(
            'products.*',
            'products.id as id_p'
            )
            ->where('products.pro_status', 1)
            ->get();


      $data['related'] = $related;

      $cat = DB::table('products')->select(
            'products.*',
            'products.id as id_p',
            'products.created_at as create',
            'categories.*'
            )
            ->leftjoin('categories', 'categories.id',  'products.pro_category')
            ->where('products.id', $id)
            ->first();


      $data['objs'] = $cat;

      return view('product', $data);
    }
}
