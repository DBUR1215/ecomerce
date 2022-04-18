<?php

namespace App\Http\Controllers;

use app\Http\Request;

class product extends Controller
{
    public function register()
    {
        return veiw(product.register);

    }
    public function store(request $request){
        $product =new product();
        $product->name=$request->name;
       $product->unit=$request->unit;
       $product->price=$request->price;
       $product->quantity=$request->quantity;
       $is_seccessed=$product::save();
       if($is_successed)
       echo "recored saved successfully";
       else
       echo"some thing went wrong try again";

    }//
}
