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
						<h4 class="mb-0 font-size-18">Blog</h4>
					</div>
				</div>
			</div>
			<div class="row">
				@include('backend.layouts.partials.alert')
				@include('backend.layouts.partials.errors')
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<a href="{{ route('admin.blog.index') }}"><span class="btn btn-purple btn btn-xl inputTwo" style="margin-bottom: 20px"><span class="dripicons-arrow-thin-left"> Önceki Sayfa</span></span></a>
							<h4 class="card-title">Blog Oluştur</h4>
							<p class="card-title-desc">Blogunuz oluşturunuz.</p>

							<div class="row">

								<div class="col-lg-12 col-sm-12 mb-4">
									<form action="{{ route('admin.blog.create' ) }}" method="post"  enctype="multipart/form-data">
										@csrf 

										<div class="form-group ">
											<label for="example-email-input1" class="col-form-label pt-0">Kapak Fotoğrafı <span style="color: red;">*</span></label>
											<div class="col-lg-3">
												<input id="input-file-now" class="dropify" name="cover_image" type="file" id="example-email-input1" required="true">
											</div>
										</div>
										<div class="form-group ">
											<label for="example-email-input1" class="col-form-label pt-0">Fotoğraf Bir <span style="color: red;">*</span></label>
											<div class="col-lg-3">
												<input id="input-file-now" class="dropify" name="image" type="file" id="example-email-input1" required="true">
											</div>
										</div>
										<div class="form-group ">
											<label for="example-email-input1" class="col-form-label pt-0">Fotoğraf İki <span style="color: red;">*</span></label>
											<div class="col-lg-3">
												<input id="input-file-now" class="dropify" name="image_two" type="file" id="example-email-input1" required="true">
											</div>
										</div>
										<div class="form-group ">
											<label for="example-email-input1" class="col-form-label pt-0">Başlık <span style="color: red;">*</span></label>
											<input class="form-control" name="title" type="text" id="example-email-input1" placeholder="Blog başlığını giriniz" required="true" value="{{ old('title') }}">
										</div>

										<div class="form-group ">
											<label for="example-email-input1" class="col-form-label pt-0">Başlık Alt satır</label>
											<input class="form-control" name="title_two" type="text" id="example-email-input1" placeholder="Blog alt başlığını giriniz" value="{{ old('title_two') }}">
										</div>

										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Kıasa Açıklama<span style="color: red;">*</span></label>
											<input class="form-control" name="brief_description" type="text" id="example-email-input1" placeholder="Blog kısa açıklama giriniz" maxlength="150" value="{{ old('brief_description') }}">
										</div>
										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Açıklama<span style="color: red;">*</span></label>
											<textarea id="elm1" name="description">{{ old('description') }}</textarea>
										</div>
										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Açıklama İki<span style="color: red;">*</span></label>
											<textarea id="elm2" name="description_two">{{ old('description_two') }}</textarea>
										</div>
										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Açıklama üç</label>
											<textarea id="elm3" name="description_three">{{ old('description_three') }}</textarea>
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