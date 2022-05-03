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
						<h4 class="mb-0 font-size-18">Proje</h4>
					</div>
				</div>
			</div>
			<div class="row">
				@include('backend.layouts.partials.alert')
				@include('backend.layouts.partials.errors')
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<a href="{{ route('admin.proje.index') }}"><span class="btn btn-purple btn btn-xl inputTwo" style="margin-bottom: 20px"><span class="dripicons-arrow-thin-left"> Önceki Sayfa</span></span></a>
							<h4 class="card-title">Proje Oluştur</h4>
							<p class="card-title-desc">Proje</p>

							<div class="row">

								<div class="col-lg-12 col-sm-12 mb-4">
									<form action="{{ route('admin.proje.update', $proje->id) }}" method="post"  enctype="multipart/form-data">
										@csrf 
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Kapak Görseli </label>
											<div class="col-lg-12">
												<input id="input-file-now" class="dropify" name="cover_image" type="file" id="example-email-input1" data-default-file="{{ $proje->cover_image }}">
											</div>
										</div>
										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Açıklama </label>
											<input class="form-control" name="title_description" type="text" id="example-email-input1" placeholder="Açıklama"  value="{{ old('title_description',$proje->title_description) }}">
										</div>
										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Proje Kategorisi </label>
											<input class="form-control" name="category" type="text" id="example-email-input1" placeholder="Proje"  value="{{ old('category',$proje->category) }}">
										</div>

										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Kısa Tanıtım</label>
											<input class="form-control" name="brief" type="text" id="example-email-input1" placeholder="Proje"  value="{{ old('brief',$proje->brief) }}">
										</div>
										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Başlık Bir </label>
											<input class="form-control" name="one_title" type="text" id="example-email-input1" placeholder="Başlık"   value="{{ old('one_title',$proje->one_title) }}">
										</div>
										<div class="form-group ">
											<label for="example-email-input1" class="col-form-label pt-0">Açıklama</label>
											<textarea id="elm1" name="one_description">{{ old('one_description',$proje->one_description) }}</textarea>
										</div>

										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Başlık İki </label>
											<input class="form-control" name="two_title" type="text" id="example-email-input1" placeholder="Başlık"  value="{{ old('two_title',$proje->two_title) }}">
										</div> 
										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Açıklama İki </label>
											<textarea id="elm2" name="two_description">{{ old('two_description',$proje->two_description) }}</textarea>
										</div>	
										<div class="form-group" id="example-email-input1">
											<label for="example-email-input1" class="col-form-label pt-0">Açıklama Üç </label>
											<textarea id="elm3" name="three_description">{{ old('three_description',$proje->three_description) }}</textarea>
										</div>	

										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Fotograf</label>
											<div class="col-lg-12">
												<input id="input-file-now" class="dropify" name="image" type="file" id="example-email-input1" data-default-file="{{ $proje->image }}">
											</div>
										</div>
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Fotograf 2</label>
											<div class="col-lg-12">
												<input id="input-file-now" class="dropify" name="image_two" type="file" id="example-email-input1" data-default-file="{{ $proje->image_two }}" >
											</div>
										</div>
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Fotograf 3</label>
											<div class="col-lg-12">
												<input id="input-file-now" class="dropify" name="image_three" type="file" id="example-email-input1"  data-default-file="{{ $proje->image_three }}">
											</div>
										</div>
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Fotograf 4</label>
											<div class="col-lg-12">
												<input id="input-file-now" class="dropify" name="image_four" type="file" id="example-email-input1"  data-default-file="{{ $proje->image_four }}">
											</div>
										</div>

										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Fotograf 5</label>
											<div class="col-lg-12">
												<input id="input-file-now" class="dropify" name="image_five" type="file" id="example-email-input1"  data-default-file="{{ $proje->image_five }}">
											</div>
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