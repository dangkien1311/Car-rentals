$(document).ready(function(){
    filterSearch();	
    $('.ProductDetail').click(function(){
        filterSearch();
    });
});
// let searchValue ='';
// $(document).ready(function() {
// 		$("#SearchBar").keyup(function(){
// 			 searchValue = $(this).val();
// 		});
// 	});
function filterSearch() {
	var price = getFilterData('Price')
	var brand = getFilterData('Brand');
	// var ram = getFilterData('ram');
	// var searchProduct =  searchValue;
	// var selector = $('.selector option:selected').val();
	var url_string = window.location.href;
	var url = new URL(url_string);
	var pu = url.searchParams.get("pu");	
	var action = 'fetch_data';

	console.log(price, brand,action,pu)
	$.ajax({
		url:"../controller/CarList.php",
		method:"POST",	
		data:{action : action,price: price, brand:brand , pu:pu},
		success:function(response){
			 $(".CarResult").html(response);
		}
	});
}
function getFilterData(className) {
	var filter = [];
	$('.'+className+':checked').each(function(){
		filter.push($(this).val());
	});
	return filter;
}
