<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $product = array();
        $product = Product::all()->toArray();
        $productimg = ProductImg::all()->toArray();

        return view('frontend.layout.index')->with(compact('product', 'productimg'));
    }

    public function showForm(Request $request)
    {

        // $product = Product::all();
        return view("backend.layout.productfrom");
    }

    public function addimg(Request $request)
    {

        $id = $request->all()['ei'];

        if (empty($id)) {
            $allimgname = [];
            $tmpFolder = time() . "_tmpFolder";

            $path = public_path('imgsFolder/' . $tmpFolder);

            for ($i = 0; $i < count($request->file('file')); $i++) {
                $imgname = $request->file('file')[$i]->getClientOriginalName();

                $request->file('file')[$i]->move($path, $imgname);
                array_push($allimgname, $imgname);
            }

            $dataArr = [$allimgname, $tmpFolder];
            return $dataArr;
        } else {
            $allimgname = [];


            $path = public_path('imgsFolder/' . $id);


            for ($i = 0; $i < count($request->file('file')); $i++) {
                $imgname = $request->file('file')[$i]->getClientOriginalName();

                $request->file('file')[$i]->move($path, $imgname);
                array_push($allimgname, $imgname);
            }

            return $allimgname;
        }
    }

    public function addProduct(Request $request)
    {
        $all = $request->all();


        if (empty($all['hid'])) {

            $allimg = explode(",", $all['allimg']);
            $responce['status'] = 0;
            if (Product::create([
                'product_name' => $all['productName'],
                'description' => $all['description'],
                'product_brief' => $all['product_brief'],
                'price' => $all['price'],
                'discount_price' => $all['discount_price'],
                'category' => $all['catagory'],
                'quantity' => $all['quantity'],
            ])) {
                $responce['status'] = 1;
                $responce['message'] = "Data Inserted Succesfully ";

                $id = DB::getPdo()->lastInsertId();

                $path = public_path("imgsFolder/") . $all['folder'];
                $newpath = public_path("imgsFolder/") . $id;

                if (file_exists($path)) {

                    if (rename($path, $newpath)) {
                    } else {
                    }
                } else {
                }

                if ($id == " ") {
                } else {
                    for ($i = 0; $i < count($allimg); $i++) {
                        ProductImg::create([
                            'main_id' => $id,
                            'image' => $allimg[$i]
                        ]);
                    }
                }
            } else {
                $responce['status'] = 0;
                $responce['message'] = "Finding Some Error ";
            }
            return $responce;
        } else {

            $post = Product::find($all['hid']);

            $path = public_path("imgsFolder/") . $all['hid'];

            if (file_exists($path)) {
            } else {
            }

            ProductImg::where('main_id', $all['hid'])->delete();

            $allimg = explode(",", $all['allimg']);



            $post->update([
                'product_name' => $all['productName'],
                'description' => $all['description'],
                'product_brief' => $all['product_brief'],
                'price' => $all['price'],
                'discount_price' => $all['discount_price'],
                'category' => $all['catagory'],
                'quantity' => $all['quantity'],
            ]);

            if (empty($allimg[0])) {
                // echo '<pre>';
                // print_r("i am empty");
                // die;
            } else {
                for ($i = 0; $i < count($allimg); $i++) {
                    ProductImg::create([
                        'main_id' => $all['hid'],
                        'image' => $allimg[$i]
                    ]);
                }
            }
        }

        return "Done";
    }


    public function productList()
    {

        $alldata = Product::all();

        $no = 0;
        $data = [];
        foreach ($alldata as $value) {
            $temp['id'] = ++$no;
            $temp['product_name'] = $value->product_name;
            $temp['description'] = $value->description;
            $temp['product_brief'] = $value->product_brief;
            $temp['price'] = $value->price;
            $temp['discount_price'] = $value->discount_price;
            $temp['category'] = $value->category;
            $temp['quantity'] = $value->quantity;
            $temp['action'] = '<div class="dropdown dropup d-flex justify-content-center">
            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
          </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3" style="">
            <button class="dropdown-item edit"data-id="' . $value->id . '" id="edit"><i class="bx bx-edit-alt me-1"></i> Edit</button>
            <button class="dropdown-item delete"  data-id="' . $value->id . '" id="del"><i class="bx bx-trash me-1"></i> Delete</button>
            </div>
          </div>';
            array_push($data, $temp);
        }
        return response()->json(['data' => $data]);
    }

    public function deleteProduct(Request $request)
    {
        $post = $request->all();

        $data = Product::find($post['id']);
        ProductImg::where('main_id', $post['id'])->delete();

        $path = public_path("imgsFolder/") . $post['id'];


        if (File::exists($path)) {
            File::deleteDirectory($path);
        }
        $data->delete();

        $responce['status'] = 0;
        if ($data) {
            $responce['status'] = 1;
            if ($responce['status'] = 1) {
                $responce['mesege'] = "Data Deleted ";
            } else {
                $responce['mesege'] = "Data not Deleted";
            }
        } else {
        }
        return $responce;
    }


    public function editProduct(Request $request)
    {
        $post =   $request->post();



        $responce['status'] = 0;
        if ($post['id'] > 0) {
            $data = Product::find($post['id']);

            $imgdata =  ProductImg::where('main_id', $post['id'])->get();
            $imgname = [];
            $html = '';

            for ($i = 0; $i < count($imgdata); $i++) {
                array_push($imgname, $imgdata[$i]->image);
                $html .= "<div class='imglist'><img src='" . asset("imgsFolder/" . $post['id'] . "/" . $imgdata[$i]->image) . "' alt='your img' height='150px' width='auto' class='editimg'> <button type='button' class='btn btn-danger imgdel' id='imgdel' data-id='" .  $post['id'] . "/" . $imgdata[$i]->image . "'>Delete</button></div>";
            }

            if (!empty($data)) {
                $responce['data'] = [$data];
                $responce['imgdata'] = [$imgdata];
                $responce['img'] = [$html];
            } else {
                $responce['messege'] = "data not found";
                $responce['status'] = 1;
            }
        } else {
            $responce['messege'] = "somthing gone wrong";
        }
        return $responce;
    }


    public function imgdel(Request $request)
    {
        $imgdata =  $request->all()['imgdata'];
        $imgname = explode("/", $imgdata);

        $path = public_path("imgsFolder/" . $imgdata);

        if (File::exists($path)) {
            echo "done";
            unlink($path);
            ProductImg::where('image', $imgname[1])->delete();
        } else {
            echo "not done";
        }
    }
}
