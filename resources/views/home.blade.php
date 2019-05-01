@extends('layouts.app')

@section('content')
<!-- slider -->
<!--<div class="slider">
    <div>
      <img class="img12" src="https://tenders.lk/site/images/bg/slider1.png">
    </div>
    <div>
     <img class="img12" src="https://tenders.lk/site/images/bg/slider2.png">
    </div>
    <div>
      <img class="img12" src="https://tenders.lk/site/images/bg/slider3.png">
    </div>   
 </div>-->
<!-- end slider -->

    <div class="section cta cta-two text-center">
        <div class="row">
            <div class="col-sm-4">
                <div class="single-cta">
                    <img src="" alt="Icon">
                </div>
        </div>
<!-- single-cta -->
    <div class="col-sm-4">
        <div class="single-cta">
        <!-- cta-icon -->
            <img src="" alt="Icon">
        </div>
    </div><!-- single-cta -->
    <div class="col-sm-4">
        <div class="single-cta">
             <img src="" alt="Icon">  
                </div>
            </div><!-- single-cta -->
        </div><!-- row -->
    </div><!-- cta -->          
    </div><!-- conainer -->
</div><!-- page -->





@endsection

@section('sidebar')
	@parent
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection