
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
           @if(session('success_msg'))
              <div class="alert alert-success mt-2 " role="alert" id="alert">           
                  <strong>Success! </strong>{{session('success_msg')}}
              </div> 
            @endif  
            @if(session('error_msg'))
                <div class="alert alert-danger mt-2 " role="alert" id="alert">           
                    <strong>Error! </strong>{{session('error_msg')}}
                </div> 
            @endif
              <div class="col-sm-12 ">
                <div class="card mt-4">
                  <div class="card-header">
                    <h5>Add Property:</h5>
                  </div>
                  <div class="card-body">
                    <form class="needs-validation" novalidate="" method="POST" action="{{url('/add_property')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="row g-3 mb-2">
                        <div><h6>Property Detail</h6></div>
                        <div class="col-md-4">
                          <label class="form-label" for="">Property Address</label>
                          <input class="form-control" id="" name="property_address" type="text" placeholder="Property Address" required="required">
                          
                        </div>
                        <div class="col-md-4">
                          <label class="form-label" for="">Number Of Marlas</label>
                          <input class="form-control" id="" name="number_of_marla" type="number" placeholder="Number Of Marla" required="required">
                          
                        </div>
                        <div class="col-md-4">
                          <label class="form-label" for="">Number Of Square Feet</label>
                          <select class="form-control js-example-basic-single col-sm-12" name="number_of_sq_feet" required="required">
                              <option value="">Select Square Feet</option>
                              <option value="225">225</option>
                              <option value="250">250</option>
                              <option value="272">272</option>
                            
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label class="form-label" for="">Property Type</label>
                          <select class="form-control js-example-basic-single col-sm-12" name="property_type" required="required">
                              <option value="">Select Property Type</option>
                              <option value="House">House</option>
                              <option value="Land">Land</option>
                            
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label class="form-label" for="">Purchased Price</label>
                          <input class="form-control" id="" name="purchase_price" type="number" placeholder="Purchased Price" required="required">
                        </div>
                        <div class="col-md-4">
                          <label class="form-label" for="">Purchased Date</label>
                          <input class="form-control" id="" name="purchase_date" type="date" placeholder="Purchased Date" required="required">
                        </div>
                        <div class="col-md-4">
                          <label class="form-label" for="">Primary Image</label>
                          <input class="form-control" id="" name="primary_image" type="file" accept="image/*" placeholder="Choose Image" required="required">
                        </div>
                        <hr>
                        <div class="col-md-12">
                          <div class="d-flex justify-content-between">
                            <h6>Investment Detail</h6>
                            <button class="btn btn-primary " type="button" onclick="add_doc_row()"><i class="fa fa-plus" style="color: white;"> Add More investor</i></button>
                          </div>
                           <div class="row">
                              <div class="col-md-4">
                                <label class="form-label" for="">Investor</label>
                                <select name="investor_id[]" class="form-control">
                                  <option value="">Choose Investor</option>
                                  @foreach($investors as $investor)
                                  <option value="{{$investor->id}}">{{$investor->name.' ['.$investor->cnic.']'}}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="col-md-4">
                              <label class="form-label" for="">Investment Amount</label>
                              <input class="form-control" name="investment_amount[]" type="number" placeholder="Investment Amount" >
                              </div>
                           </div>
                           <div id="doc_body"></div>
                        </div>
                        <div class="col-md-12 mt-4">
                          <center>
                            <input name="" class="btn btn-primary mt-4" type="submit" value="Add Gallery">
                          </center>
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
      <script>
        setTimeout(()=> {
            $('#alert').hide('slow')
        }, 3000)
    </script>
    <script>
			var count=2;
			function add_doc_row(){
			    
			    var additionalhtml='<div class="row mt-4" id="'+count+'">'+
			                            '<div class="col-md-4">'+
                                      '<label class="form-label" for="">Investor</label>'+
                                      '<select name="investor_id[]" class="form-control" required>'+
                                        '<option value="">Choose Investor</option>'+
                                        '@foreach($investors as $investor)'+
                                        '<option value="{{$investor->id}}">{{$investor->name." [".$investor->cnic."]"}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
			                            '</div>'+
			                            '<div class="col-md-4">'+
                                          '<label class="form-label" for="">Investment Amount</label>'+
			                                 '<input type="number" class="form-control" name="investment_amount[]" placeholder="Investment Amount" required >'+
			                            '</div>'+
			                            '<div class="col-md-4">'+
			                                 '<button type="button" class="btn btn-danger" onclick="remove_row('+count+')" style="margin-top:30px"><i class="fa fa-times" style="color: white;" aria-hidden="true"></i></button>'+
			                            '</div>'+
			                        '</div>';
                  
			        $("#doc_body").append(additionalhtml);
                 count+=1
			}
			
			function remove_row(id){
			    $('#'+id).remove();
			}
			
		</script>
        <!-- login js-->
    <!-- Plugin used-->
  </body>

</html>