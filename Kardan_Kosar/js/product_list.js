const showResults = d => {
	$(".productlist").html(
		d.error?d.error:
		d.result.length?listItemTemplate(d.result):
		'No Results');
}


query({type:'products_all'}).then(showResults);

$(()=>{
	$("#product-search").on("submit", function(e){
		e.preventDefault();
		let search = $(this).find("input").val();
		// console.log(search);
		query({type: 'product_search', search:search}).then(showResults);
	});

	$("[data-filter]").on("click", function(e){
		let column = $(this).data("filter");
		let value = $(this).data("value");
		query(
			value == "" ? {type:'products_all'}:
			{type:'product_filter', column:column, value:value}
			).then(showResults);
	})


	$('.js-sort').on("change", function (e){
		(
			this.value == 1 ? query ({type: 'product_sort', column:'date_created', dir:'DESC'}) :
			this.value == 2 ? query ({type: 'product_sort', column:'date_created', dir:'ASC'}) :
			this.value == 3 ? query ({type: 'product_sort', column:'price', dir:'DESC'}) :
			this.value == 4 ? query ({type: 'product_sort', column:'price', dir:'ASC'}) :
			query ({type:'products_all'})
		).then(showResults);
	})
})