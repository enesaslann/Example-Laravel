
<footer class="fixed-bottom alt-footer">
	<div class="container-fluid p-5">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 copy text-center"> </div>
			<div class="col-sm-3 text-right">
				<div class="social"><a class="trigger" href="#">Follow</a>
					<ul class="social-nav">
						@if(isset($site->instagram))
						<li> <a href="{{$site->instagram}}" target="_blank">Instagram</a></li>
						@endif
						@if(isset($site->facebook))
						<li> <a href="{{$site->facebook}}" target="_blank">Facebook</a></li>
						@endif
						@if(isset($site->linkedin))
						<li> <a href="{{$site->linkedin}}" target="_blank">Linkedin</a></li>
						@endif
						@if(isset($site->tiktok))
						<li> <a href="{{$site->tiktok}}" target="_blank">Tiktok</a></li>
						@endif
						@if(isset($site->twitter))
						<li> <a href="{{$site->twitter}}" target="_blank">Twitter</a></li>
						@endif
						@if(isset($site->pinterest))
						<li> <a href="{{$site->pinterest}}" target="_blank">Pinterest</a></li>
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="{{asset('assets/main.bundle.js')}}"></script>