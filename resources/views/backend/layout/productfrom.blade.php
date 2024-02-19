<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.2/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.4/sweetalert2.min.css" integrity="sha512-OWGg8FcHstyYFwtjfkiCoYHW2hG3PDWwdtczPAPUcETobBJOVCouKig8rqED0NMLcT9GtE4jw6IT1CSrwY87uw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>


    <style>
        .showimg {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
            margin: 50px auto;
            background-color: white;
            border-radius: 5px;
            padding: 5px;
            border: 2px solid  black;
        }

        .editimg {
            height: 200px;
            width: auto;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px black;
            transition: all 0.3s;
        }

        .editimg:hover {
            scale: 1.05;
            box-shadow: 0 0 10px black;

        }

        .imglist {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 10px;
        }
    </style>

</head>

<body>

    <!-- Button trigger modal -->
    <div class="container d-flex  pb-3 mt-5">
        <button type="button" class="btn btn-primary" id="modalbtn">
            Add Product
        </button>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="AdduserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" id="form">
                        <div class="mb-3">
                            <input type="hidden" name="allimg" id="allimg" value="">
                            <input type="hidden" name="hid" id="hid" value=" ">
                            <input type="hidden" name="folder" id="folder" value=" ">
                            <input type="hidden" name="ei" id="ei" value=" ">

                            @csrf
                            <label for="productName" class="p-1">Product Name</label>

                            <input type="text" class="form-control" id="productName" placeholder="Product Name" name="productName">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="p-1">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Description" name="description">
                        </div>

                        <div class="mb-3">
                            <label for="product_brief" class="p-1">Product Brief Description</label>
                            <textarea class="form-control" rows="4" cols="50" id="product_brief" placeholder="Description of the product..." name="product_brief"></textarea>

                        </div>

                        <div class="mb-3">
                            <label class="sr-only p-1" for="price">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="number" class="form-control" id="price" placeholder="Price" name="price">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="sr-only p-1" for="discount_price">Discount Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="number" class="form-control" id="discount_price" placeholder="Discount Price" name="discount_price">
                            </div>
                        </div>

                        <div id="dropzoneDragArea" class="dropzone rounded">
                            <div class="dz-message">
                                <span>Drop files here or click to upload.</span>
                            </div>
                            <div class="dropzone-previews"></div>
                        </div>

                        <div class="showimg" id="showimg"></div>


                        <div class="mb-3">
                            <label class="sr-only p-1" for="catagory">Catagory</label>

                            <select class="form-select" id="catagory" name="catagory">
                                <option value="dhg" disabled selected>Select Catagory</option>
                                <option value="search-alias=alexa-skills">Alexa Skills</option>
                                <option value="search-alias=amazon-devices">Amazon Devices</option>
                                <option value="search-alias=fashion">Amazon Fashion</option>
                                <option value="search-alias=nowstore">Amazon Fresh</option>
                                <option value="search-alias=amazon-pharmacy">Amazon Pharmacy</option>
                                <option value="search-alias=appliances">Appliances</option>
                                <option value="search-alias=mobile-apps">Apps &amp; Games</option>
                                <option value="search-alias=audible">Audible Audiobooks</option>
                                <option value="search-alias=baby">Baby</option>
                                <option value="search-alias=beauty">Beauty</option>
                                <option value="search-alias=stripbooks">Books</option>
                                <option value="search-alias=automotive">Car &amp; Motorbike</option>
                                <option value="search-alias=apparel">Clothing &amp; Accessories</option>
                                <option value="search-alias=collectibles">Collectibles</option>
                                <option value="search-alias=computers">Computers &amp; Accessories</option>
                                <option value="search-alias=todays-deals">Deals</option>
                                <option value="search-alias=electronics">Electronics</option>
                                <option value="search-alias=furniture">Furniture</option>
                                <option value="search-alias=lawngarden">Garden &amp; Outdoors</option>
                                <option value="search-alias=gift-cards">Gift Cards</option>
                                <option value="search-alias=grocery">Grocery &amp; Gourmet Foods</option>
                                <option value="search-alias=hpc">Health &amp; Personal Care</option>
                                <option value="search-alias=kitchen">Home &amp; Kitchen</option>
                                <option value="search-alias=industrial">Industrial &amp; Scientific</option>
                                <option value="search-alias=jewelry">Jewellery</option>
                                <option value="search-alias=digital-text">Kindle Store</option>
                                <option value="search-alias=luggage">Luggage &amp; Bags</option>
                                <option value="search-alias=luxury-beauty">Luxury Beauty</option>
                                <option value="search-alias=dvd">Movies &amp; TV Shows</option>
                                <option value="search-alias=popular">Music</option>
                                <option value="search-alias=mi">Musical Instruments</option>
                                <option value="search-alias=office-products">Office Products</option>
                                <option value="search-alias=pets">Pet Supplies</option>
                                <option value="search-alias=instant-video">Prime Video</option>
                                <option value="search-alias=shoes">Shoes &amp; Handbags</option>
                                <option value="search-alias=software">Software</option>
                                <option value="search-alias=sporting">Sports, Fitness &amp; Outdoors</option>
                                <option value="search-alias=specialty-aps-sns">Subscribe &amp; Save</option>
                                <option value="search-alias=home-improvement">Tools &amp; Home Improvement</option>
                                <option value="search-alias=toys">Toys &amp; Games</option>
                                <option value="search-alias=under-ten-dollars">Under ₹500</option>
                                <option value="search-alias=videogames">Video Games</option>
                                <option value="search-alias=watches">Watches</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="p-1">Quantity</label>
                            <input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <div class="container mt-2 bg-light border rounded p-4">


        <table class="table table-hover " id="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Product Brief Dec.</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount Price</th>
                    <th scope="col">Catagory</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>


    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.4/sweetalert2.min.js" integrity="sha512-AXRSg1bk/WYB9XiMgxJJS+jsAuMyS46bL0NZUo0tc2luqTAtDC3zI7UumzsQvFR07j+h2hG37FD9s8RcHTBApA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        Dropzone.autoDiscover = false;
        var uploadedFiles = [];
        $(document).ready(function() {


            var myModalEl = document.getElementById('AdduserModal')
myModalEl.addEventListener('hidden.bs.modal', function (event) {
    $("#form")[0].reset();
            $("#hid").val(" ");
            $("#allimg").val("");
            $("#ei").val(" ");
            $("#folder").val(" ");
            $("#showimg").html(" ");
            $("#showimg").hide();
})

            $("#form")[0].reset();
            $("#hid").val(" ");
            // $("#allimg").val("");
            $("#ei").val(" ");
            $("#folder").val(" ");
            $("#showimg").html(" ");
            $("#showimg").hide();

            $("#modalbtn").on("click", function() {
                $('#AdduserModal').modal('show');

            })

            var uploadedFiles = [];
            var headers = {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            };

            $(function() {
                var headers = $('meta[name="csrf-token"]').attr('content');

                var myDropzone = new Dropzone("div#dropzoneDragArea", {
                    paramName: "file",
                    url: "{{route('addimg')}}",
                    acceptedFiles: ".jpeg,.jpg,.png,.gif",
                    maxFileSize: 10,
                    addRemoveLinks: true,
                    uploadMultiple: true,
                    parallelUploads: 10,
                    maxFiles: 10,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    init: function() {
                        this.on("addedfile", function(file) {
                            uploadedFiles.push(file);
                            // console.log('uploadedFiles', uploadedFiles);
                            return file.name;
                        });
                        this.on("removedfile", function(file) {

                        });

                        this.on('sending', function(file, xhr, formData) {
                            // console.log('formData: from dropzone', formData);

                            var ei = $("#ei").val();
                            formData.append('ei', ei);
                        });

                        this.on("successmultiple", function(file, responseText) {
                            $("#folder").val(responseText[1]);

                            // console.log('responseText:', responseText)
                            var imgvallength = $("#allimg").val().length;
                            // alert(responseText)
                            var imgval =  $("#allimg").val();
                            if (imgvallength <2) {
                                $("#allimg").val(responseText[0]);
                            } else {
                                $("#allimg").val(responseText + "," + imgval);
                            }

                            // alert($("#allimg").val())
                        });
                    }
                });
            });

            $("#form").submit(function(e) {
                e.preventDefault();
                var formData = new FormData($("#form")[0]);

                $.ajax({
                    type: "POST",
                    url: "/addProduct",
                    headers: headers,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#table').DataTable().ajax.reload();
                        Swal.fire({
                            title: "Done",
                            text: response.message,
                            icon: "success"
                        });
                        $(".dz-preview").hide();
                        $(".dz-message").show();
                        $("#dropzoneDragArea").on("click", function() {
                            $(".dz-message").hide();
                        })
                        $("#form")[0].reset();
                        $("#hid").val(" ");
                        $("#allimg").val("");
                        $("#ei").val(" ");
                        $("#folder").val(" ");
                        $("#showimg").html(" ");
                        $("#showimg").hide();
                        $('#AdduserModal').modal('hide');


                    },
                    error: function(error) {}
                });
            });



            let list = $('#table').dataTable({
                searching: true,
                paging: true,
                pageLength: 10,

                "ajax": {
                    url: "/productList",
                    type: 'GET',
                    headers: headers,
                    dataType: 'json',
                },
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'product_name'
                    },

                    {
                        data: 'description',
                        orderable: false

                    },
                    {
                        data: 'product_brief',
                        orderable: false

                    },
                    {
                        data: 'price',

                    },
                    {
                        data: 'discount_price',

                    },
                    {
                        data: 'category',

                    },
                    {
                        data: 'quantity',

                    },
                    {
                        data: 'action',
                        orderable: false
                    }
                ],
            });




            $(document).on("click", ".delete", function() {
                var dataid = $(this).data("id");
                $.ajax({
                    url: "/deleteProduct",
                    method: "POST",
                    cache: false,
                    headers: headers,
                    data: {
                        id: dataid,
                    },
                    success: function(responce) {
                        $('#table').DataTable().ajax.reload();
                    }
                })
            });



            $(document).on("click", ".edit", function() {

                var dataid = $(this).data("id");
                // alert(dataid);
                $.ajax({
                    url: "/editProduct",
                    method: "POST",
                    cache: false,
                    headers: headers,
                    data: {
                        id: dataid
                    },
                    success: function(responce) {
                        // console.log('responce:', responce)
                        $('#AdduserModal').modal('show');

                        var imgdata = responce['imgdata'][0];
                        // console.log('imgdata:', imgdata)

                        var imgnameArr = [];

                        for (let i = 0; i < imgdata.length; i++) {
                            imgnameArr.push(imgdata[i].image)
                        }
                        // console.log("responce['data'][0]" , responce['data'][0]);
                        $("#allimg").val(imgnameArr);
                        $("#productName").val(responce['data'][0].product_name);
                        $("#description").val(responce['data'][0].description);
                        $("#product_brief").val(responce['data'][0].product_brief);
                        $("#price").val(responce['data'][0].price);
                        $("#discount_price").val(responce['data'][0].discount_price);
                        $("#catagory").val(responce['data'][0].category);
                        $("#quantity").val(responce['data'][0].quantity);
                        $("#hid").val(dataid);
                        $("#ei").val(dataid);



                        $("#showimg").show();
                        if (responce['img'][0] == "") {
                            $("#showimg").html("No Image are in our Data");
                        } else {
                            $("#showimg").html(responce['img']);
                        }
                    }
                })
            });




            $(document).on("click", ".imgdel", function() {
                var imgdata = $(this).data("id");

                var imgname = imgdata.substring(imgdata.lastIndexOf('/') + 1);

                $(this).parent(".imglist").hide();
                var allimgval = $("#allimg").val();
                var stringArray = allimgval.split(',');
                var indexToRemove = stringArray.indexOf(imgname);
                if (indexToRemove !== -1) {
                    stringArray.splice(indexToRemove, 1);
                }
                var modifiedString = stringArray.join(',');
                $("#allimg").val(modifiedString);

                $.ajax({
                    url: "/imgdel",
                    method: "POST",
                    cache: false,
                    headers: headers,
                    data: {
                        imgdata: imgdata
                    },
                })
            })

















        })
    </script>
</body>

</html>