@extends('layout.base')
@section("custom_css")
    <link href="/backend/assets/build/css/intlTelInput.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('backend/assets/css/store_list.css')}}">
@stop
    @section('content')
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row page-title">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb" class="float-right mt-1">
                            <a href="/backend/stores" class="btn btn-primary">Go Back</a>
                        </nav>
                        <h4 class="mt-2">Edit My Store</h4>
                    </div>
                </div>

                <div class="row">
                    {{-- <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mt-3">
                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-lg rounded-circle" />
                                        <h5 class="mt-2 mb-0">Medbuzz Pharmacy</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-0">Owner: Auwal Molanre</h6>
                                </div>
                                <div class="mt-5 pt-2 border-top">
                                    <h4 class="mb-3 font-size-15">Store Address</h4>
                                    <p class="text-muted mb-4">175 Boring Lane, San Francisco, California, United States - 94108.</p>
                                </div>
                            </div>
                        </div>
                    </div>
     --}}
                     <div class="col-lg-10">
                         <div class="card">
                            <div class="card-body">
                               {{--<div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-activity" role="tabpanel"
                                     aria-labelledby="pills-activity-tab">
                                    <h5 class="mt-3 font-size-24 mb-4">Store Information</h5>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0 text-muted">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Store Name</th>
                                                           <td> 
                                                             <input type="text" name="store_name" class="col-9" placeholder="Store Name">
                                                           </td> 
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Total Number of Customers</th>
                                                            <td>90</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sector</th>
                                                            <td>Pharmaceuticals</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Phone</th>
                                                            <td>(123) 123 1234</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Store Reference Code</th>
                                                            <td>ST145M455</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>--}}
                                    <form>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="store name">Store Name</label>
                                            <input type="text" class="form-control"  placeholder="Name">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4">Owner</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="John Doe">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmailAddress"> Email Address</label>
                                            <input type="text" class="form-control" placeholder="you@example.com">
                                        </div>
                                        <div class="form-group">
                                          <label for="inputAddress">Address</label>
                                          <input type="text" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputPhoneNumber">Phone Number</label>
                                            <input type="text" class="form-control">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputState">Sector</label>
                                            <select id="inputState" class="form-control">
                                              <option selected>Choose...</option>
                                              <option>Retail</option>
                                              <option>Pharmaceuticals</option>
                                              <option>Technology</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-md-2">
                                            <label for="inputZip">Store Ref. No.</label>
                                            <input type="text" class="form-control" id="inputZip">
                                          </div>
                                        </div>
                                        <a href="#" class=" btn btn-success">Update Store</a>
                                      </form>
                                </div>
                             </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
   @endsection

@section("javascript")
   <script src="/backend/assets/build/js/intlTelInput.js"></script>
   <script>
   var input = document.querySelector("#phone");
   window.intlTelInput(input, {
       // any initialisation options go here
   });
   </script>    
@stop