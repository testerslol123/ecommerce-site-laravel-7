$('.quickview').on('click', function(ev) {
	ev.preventDefault();
	var product_id = $(this).data('id');
	var thisModal = $('#myModal');

	$('#myModal').modal('hide');

	$.ajax({
		url: '/detail-product',
		type: 'POST',
		data: {
			_token: $('meta[name=csrf-token]').attr('content'),
			id: product_id,
		}
	}).done(function(data) {
		console.log(data);
		if (data.status == 'success') {
			$('#myModal').modal('show')

			var product = data.data;
			var imageURLs = (product.image_url).split(',');
			console.log(imageURLs)
			var deskripsi = product.deskripsi;
			var id = product.id;
			var start_price = product.start_price;
			var final_price = product.final_price;
			var variant_warna = product.variant_warna;
			var variant_size = product.variant_size;
			var name = product.name;

			var imageSlider = ``;
			imageURLs.forEach((value, index) => {
				imageSlider += `
				<div class="item"> 
	            	<img src="${value}" alt=""> 
	    		</div>
	    		`
			});

			var sync1 = thisModal.find('.sync1');
			var sync2 = thisModal.find('.sync2');
			sync1.data('owlCarousel').destroy();
			sync1.empty();
			sync2.data('owlCarousel').destroy();
			sync2.empty();

			sync1.html(imageSlider);
			sync2.html(imageSlider);

		    sync1.owlCarousel({
		        singleItem: true,
		        slideSpeed: 1000,
		        navigation: true,
		        pagination: false,
		        afterAction: syncPosition,
		        responsiveRefreshRate: 200,
		        navigationText: [
		            "<i class='fa fa-chevron-left'></i>",
		            "<i class='fa fa-chevron-right'></i>"
		        ]
		    });

		    sync2.owlCarousel({
		        singleItem: true,
		        slideSpeed: 1000,
		        navigation: true,
		        pagination: false,
		        afterAction: syncPosition,
		        responsiveRefreshRate: 200,
		        navigationText: [
		            "<i class='fa fa-chevron-left'></i>",
		            "<i class='fa fa-chevron-right'></i>"
		        ]
		    });


		    var warnas = product.variant_warna.split(',');
		    var htmlVariantWarna = `<p>Color<span>*</span></p><select name="pilihan_warna">`;
		    warnas.forEach((value, index) => {
		    	htmlVariantWarna += `
		    		<option value="${value}">${value}</option>
		    	`;
		    });
		    htmlVariantWarna += `</select>`;

		    thisModal.find('.ps-color').html(htmlVariantWarna);

		    var sizes = product.variant_size.split(',');
		    var htmlVariantSize = `<p>Size<span>*</span></p>
                <select name="sizes">
			`;
		    sizes.forEach((value, index) => {
		    	htmlVariantSize += `
		    		<option value="${value.toLowerCase()}">${value}</option>
		    	`;
		    });
		    htmlVariantSize += `</select>`;

		    thisModal.find('.select-sizes').html(htmlVariantSize);

		    var psHeaderContent = `
                <h3>${product.name}</h3>
                <div class="ratings-wrap">
                    <div class="ratings">
                        <span class="act fa fa-star"></span>
                        <span class="act fa fa-star"></span>
                        <span class="act fa fa-star"></span>
                        <span class="act fa fa-star"></span>
                        <span class="act fa fa-star"></span>
                    </div>
                </div>
                <div class="ps-price"><span>Rp. ${product.start_price}</span> Rp. ${product.final_price}</div>
			`;

			thisModal.find('.ps-header').html(psHeaderContent)
			thisModal.find('input[name=product_id]').val(product.id);

		} else {

		}




	}).fail(function(err) {
		console.log(err)
	});
});


    function syncPosition(el) {
        var current = this.currentItem;
        $(".sync2")
                .find(".owl-item")
                .removeClass("synced")
                .eq(current)
                .addClass("synced")
        if ($(".sync2").data("owlCarousel") !== undefined) {
            center(current)
        }
    }

    $(".sync2").on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo", number);
    });

    function center(number) {
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for (var i in sync2visible) {
            if (num === sync2visible[i]) {
                var found = true;
            }
        }

        if (found === false) {
            if (num > sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", num - sync2visible.length + 2)
            } else {
                if (num - 1 === -1) {
                    num = 0;
                }
                sync2.trigger("owl.goTo", num);
            }
        } else if (num === sync2visible[sync2visible.length - 1]) {
            sync2.trigger("owl.goTo", sync2visible[1])
        } else if (num === sync2visible[0]) {
            sync2.trigger("owl.goTo", num - 1)
        }

    }
