@extends('backend.layouts.master')
@section('css')
<link href="/adassets/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="/adassets/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" /> 
@endsection
@section('js')
<script src="/adassets/assets/js/pages/form-advanced.init.js"></script>

<script src="/adassets/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="/adassets/assets/libs/dropify/js/dropify.min.js"></script>
<script src="/adassets/assets/js/pages/form-fileuploads.init.js"></script>
@endsection
@section('content')
@include('backend.layouts.partials.navbar')
<div class="main-content">

	<div class="page-content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-flex align-items-center justify-content-between">
						<h4 class="mb-0 font-size-18">Takım</h4>
					</div>
				</div>
			</div>
			<div class="row">
				@include('backend.layouts.partials.alert')
				@include('backend.layouts.partials.errors')
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<a href="{{ route('admin.team.index') }}"><span class="btn btn-purple btn btn-xl inputTwo" style="margin-bottom: 20px"><span class="dripicons-arrow-thin-left"> Önceki Sayfa</span></span></a>
							<h4 class="card-title">Kişi Oluştur</h4>
							<p class="card-title-desc">Kişi oluşturunuz.</p>

							<div class="row">

								<div class="col-lg-12 col-sm-12 mb-4">
									<form action="{{ route('admin.team.update', $team->id ) }}" method="post"  enctype="multipart/form-data">
										@csrf 
										<div class="form-group ">
											<label for="example-email-input1" class="col-form-label pt-0">Fotoğraf <span style="color: red;">*</span></label>
											<div class="col-lg-3">
												<input  id="input-file-now" required class="dropify" name="file" type="file" data-default-file="{{ $team->image }}">
											</div>
										</div>
										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Ad<span style="color: red;">*</span></label>
											<input class="form-control" name="name" type="text" id="example-email-input1" placeholder="Ad giriniz" required="true" value="{{ old('name', $team->name) }}">
										</div>
										<div class="form-group ">
											<label for="example-email-input1" class="col-form-label pt-0">Görevi <span style="color: red;">*</span></label>
											<input class="form-control" name="title" type="text" id="example-email-input1" placeholder="Görev giriniz" required="true" value="{{ old('title', $team->title) }}">
										</div>
										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Mesaj<span style="color: red;">*</span></label>
											<input class="form-control" name="description" type="text" id="example-email-input1" placeholder="mesaj giriniz" required="true" value="{{ old('description', $team->description) }}">
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
@endsection