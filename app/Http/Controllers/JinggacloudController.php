<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Mail\NewOrder;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JinggacloudController extends Controller
{
    public function index()
    {
      $products = DB::table('products')
                      ->select(
                        'title',
                        'description',
                        'price',
                        'priceup',
                        'fitur',
                        'unit',
                        'slug',
                        'url',
                        'id'
                      )
                      ->where('status', 1)
                      ->orderBy('id', 'ASC')
                      ->get();

      return view('welcome', compact('products'));
    }

    public function readmore(Request $request){
    	$id = $request->input('id');
    	$product = Product::WHERE('slug',$id)->first();
    	if($product->priceup > 0){
    		$price = 'Mulai dari Rp '.number_format($product->price,0,',','.');
    	}else{
    		$price = 'Rp '.number_format($product->price,0,',','.');
    	}
    	echo'<div class="modal-dialog modal-lg">
                                <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <h4 class="modal-title">'.$product->title.'</h4>
                                        </div>
                                        <div class="modal-body">'.$product->fitur.'<p class="text-center alert alert-info"><strong>Only '.$price.' / '.$product->unit.'</strong></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                            <a href="'.$product->url.'" target="_blank" class="btn btn-info"><i class="fa fa-search"></i> Demo</a>
                                            <button type="button" class="btn btn-primary order" data-id="'.$product->slug.'"><i class="fa fa-shopping-cart"></i> Order Now</button>
                                        </div>
                                    </div>
                                </div>';
    }
    public function formmail(){
    	echo'<div class="modal-dialog">
                                <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Send Us Mail</h4>
                                        </div>
                                        <div class="modal-body">
                                        	<form class="form-horizontal">
											    <div class="form-group"><label class="col-sm-2 control-label">Name</label>
											        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Name" name="name"></div>
											    </div>
											    <div class="hr-line-dashed"></div>
											    <div class="form-group"><label class="col-sm-2 control-label">Subject</label>
											        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Subject" name="subject"></div>
											    </div>
											    <div class="hr-line-dashed"></div>
											    <div class="form-group"><label class="col-sm-2 control-label">Mail</label>
											        <div class="col-sm-10"><input type="email" class="form-control" placeholder="Mail" name="mail"></div>
											    </div>
											    <div class="hr-line-dashed"></div>
											    <div class="form-group"><label class="col-sm-2 control-label">Message</label>
											        <div class="col-sm-10"><textarea class="form-control" rows="5" placeholder="Message" name="message"></textarea></div>
											    </div>
											</form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                            <button type="button" class="btn btn-primary send"><i class="fa fa-paper-plane"></i> Send</button>
                                        </div>
                                    </div>
                                </div>';
    }
    public function sendmail(Request $request){
    	$request->validate([
		    'name' => 'required|min:3|max:50',
		    'subject' => 'required|min:3|max:50',
		    'mail' => 'required',
		    'message' => 'required|min:10',
		]);
        $data = new Inbox;
        $data->name = $request->input('name');
        $data->subject = $request->input('subject');
        $data->email = $request->input('mail');
        $data->message = $request->input('message');
        $data->date = date('Y-m-d');
        $data->save();
        Mail::to($data->email)->send(new ContactUs($data));
    }
    public function ordernow(Request $request){
    	$id = $request->input('id');
    	$product = Product::WHERE('slug','=',$id)->first();
    	if($product->priceup > 0){
    		$price = 'Mulai dari Rp '.number_format($product->price,0,',','.');
    	}else{
    		$price = 'Rp '.number_format($product->price,0,',','.');
    	}
    	echo'<div class="modal-dialog">
                                <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Complete The Following Data</h4>
                                        </div>
                                        <div class="modal-body">
                                        	<form class="form-horizontal">
											    <div class="form-group"><label class="col-sm-2 control-label">Product Name</label>
											        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Product Name" value="'.$product->title.' / '.$price.'" readonly disabled></div>
											    </div>
											    <div class="form-group"><label class="col-sm-2 control-label">Name</label>
											        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Name" name="name"></div>
											    </div>
											    <div class="hr-line-dashed"></div>
											    <div class="form-group"><label class="col-sm-2 control-label">Phone</label>
											        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Phone" name="phone"></div>
											    </div>
											    <div class="hr-line-dashed"></div>
											    <div class="form-group"><label class="col-sm-2 control-label">Mail</label>
											        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Mail" name="mail"></div>
											    </div>
											    <div class="hr-line-dashed"></div>
											    <div class="form-group"><label class="col-sm-2 control-label">Address</label>
											        <div class="col-sm-10"><textarea class="form-control" rows="5" placeholder="Address" name="address"></textarea></div>
											    </div>
											</form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white orderclose" data-dismiss="modal"><i class="fa fa-backward"></i> Back</button>
                                            <button type="button" class="btn btn-primary order" data-id="'.$id.'"><i class="fa fa-paper-plane"></i> Send</button>
                                        </div>
                                    </div>
                                </div>';
    }
    public function order(Request $request){
    	$id = $request->input('id');
    	$request->validate([
		    'name' => 'required|min:3|max:50',
		    'phone' => 'required|min:7',
		    'mail' => 'required',
		    'address' => 'required|min:10',
  		]);
  		$product = Product::WHERE('slug','=',$id)->first();
    	$order = new Order;
    	$order->product_id = $product->id;
    	$order->name = $request->input('name');
    	$order->phone = $request->input('phone');
    	$order->email = $request->input('mail');
    	$order->address = $request->input('address');
    	$order->date = date('Y-m-d');
      $order->save();
      Mail::to($order->email)->send(new NewOrder($order));
    }
}
