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
							<h4 class="card-title">İletişim</h4>
							<p class="card-title-desc">İletişim sayfasının bilgilerini buradan güncelleyebilirsiniz</p>
							<div class="row">
								<div class="col-lg-12 col-sm-12 mb-4">
									<form action="{{route('admin.site.update', $site->id)}}" method="post"enctype="multipart/form-data">
										@csrf

										<div class="form-group ">
											<label for="example-email-input1" class="col-form-label pt-0">Logo<span style="color: red;">*</span></label>
											<div class="col-lg-3">
												<input id="input-file-now" class="dropify" name="logo" type="file" id="example-email-input1" required="true" data-default-file="{{ $site->logo }}">
											</div>
										</div>


										<div class="form-group ">
											<label for="example-email-input1" class="col-form-label pt-0">Fav İcon<span style="color: red;">*</span></label>
											<div class="col-lg-3">
												<input id="input-file-now" class="dropify" name="fav_icon" type="file" id="example-email-input1" required="true" data-default-file="{{ $site->fav_icon }}">
											</div>
										</div>
										
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">title</label>
											<input class="form-control" name="title" type="text" id="example-email-input1" placeholder="Site Başlığı"  @if(isset($site->title)) value="{{$site->title}}" @endif>
										</div>

										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">decription</label>
											<input class="form-control" name="description" type="text" id="example-email-input1" placeholder="Site Açıklama" maxlength="155" @if(isset($site->description)) value="{{$site->description}}" @endif>
										</div>
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Keyword(her anahtar kelime arasına , koyun)</label>
											<input class="form-control" name="keyword" type="text" id="example-email-input1" placeholder="Anahtar Kelimeler"  @if(isset($site->keyword)) value="{{$site->keyword}}" @endif>
										</div>

										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">İnstagram</label>
											<input class="form-control" name="instagram" type="text" id="example-email-input1" placeholder="İnstagram"  @if(isset($site->instagram)) value="{{$site->instagram}}" @endif>
										</div>

										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">facebook</label>
											<input class="form-control" name="facebook" type="text" id="example-email-input1" placeholder="facebook"  @if(isset($site->facebook)) value="{{$site->facebook}}" @endif>
										</div>

										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">twitter</label>
											<input class="form-control" name="twitter" type="text" id="example-email-input1" placeholder="twitter"  @if(isset($site->twitter)) value="{{$site->twitter}}" @endif>
										</div>
										
										
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">tiktok</label>
											<input class="form-control" name="tiktok" type="text" id="example-email-input1" placeholder="tiktok"  @if(isset($site->tiktok)) value="{{$site->tiktok}}" @endif>
										</div>
										
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">linkedin</label>
											<input class="form-control" name="linkedin" type="text" id="example-email-input1" placeholder="linkedin"  @if(isset($site->linkedin)) value="{{$site->linkedin}}" @endif>
										</div>
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">pinterest</label>
											<input class="form-control" name="pinterest" type="text" id="example-email-input1" placeholder="pinterest"  @if(isset($site->pinterest)) value="{{$site->pinterest}}" @endif>
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