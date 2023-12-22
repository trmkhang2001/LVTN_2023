@include('clients.header')

<div id="cart-page">
	<div class="container container-xl">
		
		<div class="row">
			<div class="col-12 text-center">
				<div style="margin-top: 70px;">
					<img class="img-fluid" src="//theme.hstatic.net/200000397235/1000894095/14/empty-cart.png?v=241">
				</div>
				<p style="margin-top: 15px;">
					<a href="/">Tiếp tục mua hàng &rarr;</a>
				</p>
			</div>
		</div>
		
	</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-confirm-remove">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-confirm-remove-title">
					Bạn thật sự muốn xoá?
				</div>
				<div class="modal-confirm-remove-buttons">
					<button class="btn btn-primary">Có</button>
					<button class="btn btn-outline-secondary" data-dismiss="modal">Không</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(function(){
		$('.cart-page-checkout').on('click', function(e){
			
		})
	})

</script>

@include('clients.footer')