
<!DOCTYPE html>
<html lang="en">
  
@include('includes/head')
  <body>
    <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>

    <div class="page-wrapper compact-wrapper" id="pageWrapper">
    @include('includes/topbar')
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
      @include('includes/sidebar')
        <div class="page-body">
          <div class="container-fluid">
           <div class="row">
              <div class="col-sm-12 ">
                <div class="card mt-4">
                  <div class="card-header">
                    <h5>Edit Vendor:</h5>
                    
                  </div>
                  <div class="card-body">
                    <form class="needs-validation" novalidate="" method="POST" action="{{url('/edit_vendor')}}">
                      @csrf
                      <input class="form-control" id="" name="id" value="{{$vendor->id}}" type="hidden" placeholder="Id" required="required">
                      <div class="row g-3 mb-2">
                        <div class="col-md-4">
                          <label class="form-label" for="">Vendor Name</label>
                          <input class="form-control" id="" name="vendor_name" value="{{$vendor->name}}" type="text" placeholder="Vendor Name" required="required">
                          
                        </div>
                        <div class="col-md-4">
                          <label class="form-label" for="">Service</label>
                          <select class="form-control js-example-basic-single col-sm-12" name="service_type" required="required">
                              <option value="">Select Service</option>
                              @foreach($services as $service)
                                @if($service->id==$vendor->vendor_type)
                                  <option value="{{$service->id}}" selected>{{$service->name}}</option>
                                @else
                                  <option value="{{$service->id}}">{{$service->name}}</option>
                                @endif
                              @endforeach
                            
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label class="form-label" for="">Email</label>
                          <input class="form-control" id="" name="email" value="{{$vendor->email}}" type="email" placeholder="Email">
                          
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="">Address</label>
                          <textarea rows="4" class="form-control" id="" name="address" type="text" placeholder="Address" >{{$vendor->address}}</textarea>
                        </div>
                        <div class="col-md-4">
                          <label class="form-label" for="">Phone</label>
                          <input class="form-control" id="" name="phone" type="text" value="{{$vendor->phone}}" placeholder="Phone" required="required">
                        </div>
                        
                        
                        <div class="col-md-12 mt-4">
                         <center><input name="submit" class="btn btn-primary mt-4" type="submit" value="Update Vendor"></center>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
            </div>
          </div>
          
 
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('includes.footer')
        
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('public/assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('public/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('public/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('public/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('public/assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('public/assets/js/scrollbar/custom.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('public/assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('public/assets/js/sidebar-menu.js')}}"></script>

    <script src="{{asset('public/assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('public/assets/js/dashboard/default.js')}}"></script>
 
    <script src="{{asset('public/assets/js/typeahead-search/handlebars.js')}}"></script>
    <script src="{{asset('public/assets/js/typeahead-search/typeahead-custom.js')}}"></script>
    <script src="{{asset('public/assets/js/form-validation-custom.js')}}"></script>
      <script src="https://use.fontawesome.com/43c99054a6.js"></script>
    
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    
    <script src="{{asset('public/assets/js/script.js')}}"></script>
      <script type="text/javascript">
        setTimeout(function() {
            $('#messages').fadeOut('fast');
        }, 5000);
      </script>
        <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>