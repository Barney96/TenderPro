@extends('layouts.app')

@section('content')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=5">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    

  </head>
  <body>
	<!-- header -->
	<header id="header" class="clearfix">
            <div style="clear:both;"></div>
            <!-- nav-right -->
        </div><!-- container -->
    </nav><!-- navbar -->
<div class="bottom-line"></div>
</style>
</header>	<!-- header -->

	<section class="job-bg page job-list-page">
		<div class="container">
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="/">Home -> </a></li>
					<li>Tenders List</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title"> Tenders List</h2>
			</div>

		<div class="row">
       		<div class="col-md-4" id="list_tender_codes">
				<input type="text" name="tender_code" placeholder ="Tender Code" value="" class="form-control typeahead" />
			</div>

			<div class="col-md-4" id="list_tender_title"> 
				<input type="text" name="tender_title" placeholder="Tender Title" value="" class="form-control tender_title" autocomplete="off" />

			</div>
			<div class="col-md-4">
				<select name="paper_id" class="form-control">
					<option value="">select paper</option>
						<option value="1" >Dinamina</option><option value="2" >Daily News</option><option value="3" >Lankadeepa</option><option value="4" >Silumina</option><option value="5" >Sunday Observer</option><option value="6" >Sunday Times</option><option value="7" >Online Submission</option>				
					</select>
			</div>
			<div class="col-md-4">
				<input type="date" name="tender_published_date" placeholder="Published Date" value="" class="has-datepicker form-control" id="tender_published_date" autocomplete="off"  />
			</div>
		</div>

		<!-- Filter with Categories -->
		<div class="filter-more" id="filter_more">Filter with categories</div>

		<div class="row" id="filter_by_category">
			<div class="col-md-12">
				<div class="section category-items job-category-items  text-center">
				<ul class="category-list">	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="5"  > Education							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="10"  > Packaging							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="24"  > Supplier Registration							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="25"  > Services							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="26"  > Expression of Interest (EOI)							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="27"  > Medical							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="28"  > Automobile and Transport							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="29"  > Engineering and Construction							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="30"  > IT and Electronics							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="31"  > Power and Energy							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="32"  > Aviation							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="34"  > Hardware, Machinery and Equipment							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="35"  > Agriculture and Food							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="36"  > Hotel and Hospitality							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="37"  > Printing, Packaging, Advertising & Stationeries							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="38"  > Miscellaneous							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="40"  > Furniture							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="41"  > Sales and Auctions							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="42"  > Lands and Properties							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="43"  > Apparels & Related Products							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="44"  > Timber & Related Services							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="45"  > Chemicals & Related Service							</label>
						</li>	
											<li class="category-item">
							<label class="radio-inline">
								<input type="checkbox" name="category_id[]" data-validation="checkbox_group" data-validation-qty="min1" value="509"  > Distributors / Partnerships							</label>
						</li>	
									</ul>
			</div>
			
		</div>
		</div>
		<!-- End Filter with Categories -->

		<div class="row">
			<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Filter</button>
		</div>
		</div>		         
</form>  
</div>   			

<!--Banner Form-->

		<!-- container -->
	</section>
	<!-- main -->

	<!-- footer -->

</div>
</section>
</body>

<script>

function bookmark_this_tender(string){
      
      var tender_id = string;

        $.ajax({
          type: "POST",
          //url: "",
          data: "tender_id="+tender_id,
              
          success: function(data) {
            $('.bookmark_msg_'+tender_id).html(data);
            //location.reload();
          }
        });
   
  }

  $( "#filter_more").click(function() {
      $("#filter_by_category").show("slow");
  });

 

  $(document).ready(function() {
	
      if( $('.has-datetimepicker').length ) 
      {
        $('.has-datetimepicker').datetimepicker({format: 'YYYY-MM-DD'});
      }
      
      if( $('.has-datepicker').length )
      {
        $('.has-datepicker').datetimepicker({format: 'YYYY-MM-DD'});
        } 
});


// typehear

  var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
      var matches, substringRegex;

      // an array that will be populated with substring matches
      matches = [];

      // regex used to determine if a string contains the substring `q`
      substrRegex = new RegExp(q, 'i');

      // iterate through the pool of strings and for any string that
      // contains the substring `q`, add it to the `matches` array
      $.each(strs, function(i, str) {
        if (substrRegex.test(str)) {
          matches.push(str);
        }
      });

      cb(matches);
    };
  };

 

 $('#list_tender_codes .typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
  },
  {
    name: 'tendercodes',
    source: substringMatcher(tendercodes)
  });
  
</script>	
</body>

</html>

@endsection