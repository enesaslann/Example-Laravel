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
									<form action="{{route('admin.contact.update', $contact->id)}}" method="post"enctype="multipart/form-data">
										@csrf

										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Açıklama</label>
											<input class="form-control" name="description" type="text" id="example-email-input1" placeholder="Açıklama" @if(isset($contact->description)) value="{{$contact->description}}" @endif>
										</div>


										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Form Başlık</label>
											<input class="form-control" name="contact_title" type="text" id="example-email-input1" placeholder="Form Başlık"  @if(isset($contact->contact_title)) value="{{$contact->contact_title}}" @endif>
										</div>
										
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Form Alt Başlık</label>
											<input class="form-control" name="contact_sub_title" type="text" id="example-email-input1" placeholder="Form Alt Başlık"  @if(isset($contact->contact_sub_title)) value="{{$contact->contact_sub_title}}" @endif>
										</div>

										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Adres</label>
											<input class="form-control" name="adress" type="text" id="example-email-input1" placeholder="Adres"  @if(isset($contact->adress)) value="{{$contact->adress}}" @endif>
										</div>
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Mail</label>
											<input class="form-control" name="mail" type="email" id="example-email-input1" placeholder="Mail"  @if(isset($contact->mail)) value="{{$contact->mail}}" @endif>
										</div>
										<div class="form-group">
											<label for="example-email-input1" class="col-form-label pt-0">Telefon</label>
											<input class="form-control" name="tel" type="text" id="example-email-input1" placeholder="Telefon"  @if(isset($contact->tel)) value="{{$contact->tel}}" @endif>
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