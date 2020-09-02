
$(document).ready(function(){
			getData();
			
		
		$('.addtocartBtn').click(function(){
				// alert('ok');
				var id = $(this).data('id');
				var name =$(this).data('name');
				var price = $(this).data('price');
				var photo = $(this).data('photo');
				var discount = $(this).data('discount');
				var item = {id:id,name:name,price:price,photo:photo,discount:discount,qty:1};
				
				
				// localStorage.setItem('item', JSON.stringify(item));
				// console.log(item);
				var oldG = localStorage.getItem('G');
				if(oldG == null){
				var G=new Array();
					}else{
						var G = JSON.parse(oldG);
					}
						var exist;
						$.each(G,function(i,v){
							if (id == v.id){
								v.qty++;
								exist = true;
							}
						})
						if(!exist){
							G.push(item);
						}

						
						localStorage.setItem('G', JSON.stringify(G));
				//alert(name);
						getData();

						
				
				
			});
		$.ajaxSetup({
    			headers: {
       						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   						 }
					});
		function getData(){
				var myG = localStorage.getItem('G');
				var data= $("#shoppingcart_table");
				var result = "";
				var total=0;

				if(myG!= null){
					G = JSON.parse(myG);
					
					$.each(G,function (i,v){
						 
						subtotal=v.price*v.qty;
						total+=subtotal;
						result +=`
									<tr>
										<td>${v.id}</td>
										<td>${v.name}</td>
										<td>$ ${v.price}</td>
										<td><img src="${v.photo} " width="100"></td>
										<td>$ ${v.discount}</td>
							
										<td><input type="number" value="${v.qty}"class="changeqty" data-id="${i}"></td>
										<td>${subtotal}</td>
										<td><button class="removebtn" data-id="${i}">Close</button></td>
									</tr><hr>`;
					})
					result+=`<tr>
									<td colspan="6">Total:</td>
									<td colspan="2">${total}</td>
								</tr>`;
				}else{
					result += 'Cart is Empty';
				}
				data.html(result);
			}
			$('#shoppingcart_table').on('click','.removebtn',function(){
				let index=$(this).data('id');
				var myG=localStorage.getItem('G');
				G=JSON.parse(myG);
				G.splice(index,1);
				localStorage.setItem('G',JSON.stringify(G));
				getData();
			})
			$('#shoppingcart_table').on('change','.changeqty',function(){
				let qty=$(this).val();
				let index=$(this).data('id');

				var myG=localStorage.getItem('G');
				G = JSON.parse(myG);
				if(qty==0){
					G.splice(index,1);
				}
				$.each(G,function(i,v){
					if(i == index){
						v.qty=qty;
					}
				})
				localStorage.setItem('G', JSON.stringify(G));
				getData();
			})
			// start buy now
			$('.buy_now').on('click',function(){
				var notes = $('.notes').val();
				// console.log(notes);
				var shopString = localStorage.getItem("G");
				// alert(shopString);

				if(shopString) {
					$.post('/orders',{shop_data:shopString,notes:notes},function(response){
						if (response) {
							alert(response);
							localStorage.clear();
							getData();
							location.href="/";
						}
					})
				}
			})
			// end buy now

	});
	
 
