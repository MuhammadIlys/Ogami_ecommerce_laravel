<x-backend.header-component>
    <x-slot name="title">Add Product</x-slot>
</x-backend.header-component>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <x-backend.aside-component>
            </x-backend.aside-component>

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <x-backend.navbar>
                </x-backend.navbar>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content start -->


                  




                    <div class="row " style="padding:36px">

                        <div class="card mb-4 col-md-10 offset-1  pt-3">
                            @if (Session::has('message'))
                            <div class="text-light text-center p-3 bg-dark" style="border-radius: 5px">
                                {{ Session::get('message') }}</strong>
                            </div>
                        @endif
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Enter Product</h5>
                                {{-- <small class="text-muted float-end">Default label</small> --}}
                            </div>
                            <form action="{{ route('product.storeproduct') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body ">


                                    <div class="row g-3 d-flex flex-row justify-content-center">

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="productname">Product name</label>
                                            <input type="text" class="form-control" id="productname"
                                                name="productname" placeholder="Enter product name" />

                                            <span class="text-danger">
                                                @error('productname')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="productcategory">Product category</label>
                                            <input type="text" class="form-control" id="productcategory"
                                                name="productcategory" placeholder="Enter product category" />

                                            <span class="text-danger">
                                                @error('productcategory')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>




                                    <div class="row g-3 d-flex flex-row justify-content-center">

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="productbrand">Product Brand</label>
                                            <input type="text" class="form-control" id="productbrand"
                                                name="productbrand" placeholder="Enter product Brand" />

                                            <span class="text-danger">
                                                @error('productbrand')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="productimage">Product image</label>
                                            <input type="file" class="form-control" id="productimage"
                                                name="productimage[]" multiple />

                                            <span class="text-danger">
                                                @error('productimage')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                    </div>


                                    <div class=" row g-3 d-flex flex-row justify-content-center">

                                        <div class="mb-3  col-md-12">
                                            <label class="form-label" for="productdesc">Product description</label>
                                            <textarea rows="4" id="productdesc" name="productdesc" class="form-control"
                                                placeholder="Please enter your product description"></textarea>

                                            <span class="text-danger">
                                                @error('productdesc')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <button type="submit" class="btn btn-primary float-right">Send</button>

                                    </div>

                            </form>

                        </div>
                    </div>
                </div>


            </div>





        </div>
        <!-- / Content end -->
    </div>
    </div>
    </div>
    <!-- Footer -->
    <x-backend.footer-component>
    </x-backend.footer-component>
