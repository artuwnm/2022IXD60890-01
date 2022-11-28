
const showResults = d => {
	$(".productlist").html(
		d.error?d.error:
		d.result.length?listItemTemplate(d.result):
		'No Results');
}

query({type:'products_all'}).then(showResults);


$(() =>{

	$("#product-search").on("submit",function(e){
		e.preventDefault();
		let search = $(this).find("input").val();
		query({type:'product_search',search:search}).then(showResults);
	})
})