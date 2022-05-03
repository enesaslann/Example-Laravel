@extends('backend.layouts.master')
@section('js')
<script src="/adassets/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="/adassets/assets/libs/dropify/js/dropify.min.js"></script>
<script src="/adassets/assets/js/pages/form-fileuploads.init.js"></script>
<script src="/adassets/assets/js/pages/form-advanced.init.js"></script>
@endsection
@section('css')
<link href="/adassets/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="/adassets/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@include('backend.layouts.partials.navbar')
<div class="main-content">

	<div class="page-content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-flex align-items-center justify-content-between">
						<h4 class="mb-0 font-size-18">Site Ayarları</h4>
					</div>
				</div>
			</div>

			<div class="row">
				@include('backend.layouts.partials.alert')
				@include('backend.layouts.partials.errors')
				<div class="col-12">
					<div class="card">
						<div class="card-body">  
							<h4 class="card-title">Portfolio</h4>
							<p class="card-title-desc">Portfolio sayfasının bilgilerini buradan güncelleyebilirsiniz</p>
							<div class="row">
								<div class="col-lg-12 col-sm-12 mb-4">
									<form action="{{route('admin.portfolio.update', $portfolio->id)}}" method="post"enctype="multipart/form-data">
										@csrf

										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Başlık</label>
											<input class="form-control" name="title" type="text" id="example-email-input1" placeholder="Başlık" @if(isset($portfolio->title)) value="{{$portfolio->title}}" @endif>
										</div>


										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Başlık Açıklama</label>
											<input class="form-control" name="name" type="text" id="example-email-input1" placeholder="Başlık açıklaması"  @if(isset($portfolio->name)) value="{{$portfolio->name}}" @endif>
										</div>  
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Açıklama</label>
											<textarea id="elm2" class="form-control" name="description"> @if(isset($portfolio->description)) {{ $portfolio->description }} @endif  </textarea>
										</div>  
										<button type="submit" class="btn btn-primary w-lg">Gönder</button>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>


		</div> <!-- container-fluid -->
	</div>
	<!-- End Page-content -->

</div>
<!-- end main content-->

</div>

@endsectionsosyal