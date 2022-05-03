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
							<h4 class="card-title">Hakkımızda</h4>
							<p class="card-title-desc">Hakkımızda sayfasının bilgilerini buradan güncelleyebilirsiniz</p>
							<div class="row">
								<div class="col-lg-12 col-sm-12 mb-4">
									<form action="{{route('admin.about.update', $about->id)}}" method="post"enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Kapak Görseli <span style="color: red;">*</span></label>
											<div class="col-lg-12">
												<input id="input-file-now" class="dropify" name="cover_image" type="file" id="example-email-input1" data-default-file="{{ $about->cover_image }}">
											</div>
										</div>

										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Başlık</label>
											<input class="form-control" name="title" type="text" id="example-email-input1" placeholder="Başlık" @if(isset($about->title)) value="{{$about->title}}" @endif>
										</div>


										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Başlık Açıklama</label>
											<input class="form-control" name="title_description" type="text" id="example-email-input1" placeholder="Başlık açıklaması"  @if(isset($about->title_description)) value="{{$about->title_description}}" @endif>
										</div>
										<hr>
										<div class="col-12">
											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Madde Bir icon <span style="color: red;">*</span></label>
												<div class="col-lg-12">
													<input id="input-file-now" class="dropify" name="one_list" type="file" id="example-email-input1"  @if(isset($about->one_list)) data-default-file="{{ $about->one_list }}" @endif >
												</div>
											</div>

											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Madde Bir Başlık</label>
												<input class="form-control" name="one_list_title" type="text" id="example-email-input1" placeholder="Madde Bir Başlık"   @if(isset($about->one_list_title)) value="{{$about->one_list_title}}" @endif >
											</div>
											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Madde Bir Açıklama</label>
												<input class="form-control" name="one_list_description" type="text" id="example-email-input1" placeholder="Madde Bir Açıklama"   @if(isset($about->one_list_description)) value="{{$about->one_list_description}}" @endif >
											</div>
										</div>
										<hr>
										<div class="col-12">
											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Madde İki icon <span style="color: red;">*</span></label>
												<div class="col-lg-12">
													<input id="input-file-now" class="dropify" name="two_list" type="file" id="example-email-input1"  @if(isset($about->two_list)) data-default-file="{{ $about->two_list }}" @endif >
												</div>
											</div>

											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Madde İki Başlık</label>
												<input class="form-control" name="two_list_title" type="text" id="example-email-input1" placeholder="Madde İki Başlık"   @if(isset($about->two_list_title)) value="{{$about->two_list_title}}" @endif >
											</div>
											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Madde İki Açıklama</label>
												<input class="form-control" name="two_list_description" type="text" id="example-email-input1" placeholder="Madde İki Açıklama"   @if(isset($about->two_list_description)) value="{{$about->two_list_description}}" @endif >
											</div>
										</div>
										<hr>
										<div class="col-12">
											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Madde Üç icon <span style="color: red;">*</span></label>
												<div class="col-lg-12">
													<input id="input-file-now" class="dropify" name="three_list" type="file" id="example-email-input1"  @if(isset($about->three_list)) data-default-file="{{ $about->three_list }}" @endif >
												</div>
											</div>

											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Madde Üç Başlık</label>
												<input class="form-control" name="three_list_title" type="text" id="example-email-input1" placeholder="Madde Üç Başlık"   @if(isset($about->three_list_title)) value="{{$about->three_list_title}}" @endif >
											</div>
											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Madde Üç Açıklama</label>
												<input class="form-control" name="three_list_description" type="text" id="example-email-input1" placeholder="Madde Üç Açıklama"   @if(isset($about->three_list_description)) value="{{$about->three_list_description}}" @endif >
											</div>
										</div>
										<hr>
										<div class="col-12">
											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Görsel <span style="color: red;">*</span></label>
												<div class="col-lg-12">
													<input id="input-file-now" class="dropify" name="image" type="file" id="example-email-input1"  @if(isset($about->image)) data-default-file="{{ $about->image }}" @endif >
												</div>
											</div>

											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Açıklama</label>
												<textarea id="elm2" class="form-control" name="description"> @if(isset($about->description)) {{ $about->description }} @endif  </textarea>
											</div>
											<div class="form-group">
												<label for="example-email-input1" class="col-form-label pt-0">Başlık İki</label>
												<input class="form-control" name="title_two" type="text" id="example-email-input1" placeholder="Başlık İki"   @if(isset($about->title_two))  value="{{$about->title_two}}"  @endif >
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

@endsectionsosyal