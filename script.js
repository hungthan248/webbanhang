
// const btn_color = document.querySelectorAll(".item-variant");
// var productContent;
// var productImg ;
// var productPrice;
// var check;
// var ktra ;
// var giohang = new Array();

//       btn_color.forEach((currentItem) =>
//         currentItem.addEventListener("click", function (event) {
//         check = 0;
//         ktra = 0;
//           var btnItem = event.target;
//           var product = btnItem.parentElement;
//           productContent = product.querySelector("img").alt;
//           productImg = product.querySelector("img").src;
//           productPrice = product.querySelector("span").innerText;
          
//           btn_color.forEach( (currentItem) => {
            
//             currentItem.setAttribute("style", "border: 1px solid #dd5e89;");
//           }
//           )
//           currentItem.setAttribute("style", "border:2px solid red;");
          
//         })
        
//         );
        
//         const btn_cart = document.querySelector(".btn-cart");
//         btn_cart.addEventListener("click", () =>{
//          addcart( productContent, productImg,productPrice);
//         }
        
//         );

//       function addcart (productContent, productImg, productPrice){
      
//       var addtr = document.createElement("tr");
//       var cartItem = document.querySelectorAll("tbody tr");
//       for (var i = 0; i < cartItem.length; i++){
//         var productT = document.querySelectorAll(".content");
//         if (productT[i].innerHTML == productContent ){
//           alert("Sản phẩm đã có trong giỏ hàng");
//           check = 1;
//         }
//       }
//       if (check == 0 && ktra ==0) {
       
        
//         var trcontent = '<form action= "giohang.php" method = "post"> <tr><td style="display: flex;align-items: center; "><img style ="width: 70px;" src="'+ productImg+'" alt=""><p class = "content" style = "color : black;">'+productContent+'</p> </td><td><p> <span class = "price" style = "color:black;">'+productPrice+'</span></p></td> <td><input type="number" name= "soluong" value="1" min="1" style="width: 30px; outline: none; "></td><td class ="deleteCart" style="cursor: pointer;color: black;">Xóa</td></tr> <input type = "hidden" name = "anh" value = "'+ productImg +'" ></input> <input type = "hidden" name = "ten" value = "'+ productContent +'" ></input> <input type = "hidden" name = "gia" value = "'+productPrice+'" ></input> </form>';
//         addtr.innerHTML = trcontent;
//         var cartTable = document.querySelector("tbody");
//         cartTable.append(addtr);
//         var sp = new Array(productContent,productImg,productPrice);
//         giohang.push(sp);
//         sessionStorage.setItem("giohang",JSON.stringify(giohang));
//         deleteCart();
//         cartTatol();
//       }
  
//     }
    
     
//       function deleteCart(){
//         var cartItem = document.querySelectorAll("tbody tr");
//         var productDelete = document.querySelectorAll(".deleteCart");
//         for (let i = 0; i < cartItem.length; i++){
//           productDelete[i].addEventListener("click", function(event){
//           var cartDelete = event.target;
//           var cartItemRemove = cartDelete.parentElement;
//           cartItemRemove.remove();
//           console.log(i);
//           giohang.splice(i,1);
//           console.log(giohang);
          
//         }
//         )
//       }
//     }
//     function cartTatol(){
//       var cartItem = document.querySelectorAll("tbody tr");
//   var totalC = 0;
//   for (let i = 0; i < cartItem.length; i++){
//    var inputValue = cartItem[i].querySelector(" input").value;
   
//    var productPrice = cartItem[i].querySelector(".price").innerHTML;
//    totalA = inputValue*productPrice*1000;
   
//    totalC = totalC + totalA;
//    totalD = totalC.toLocaleString('de-DE');
//   }
//   var cartTotalA = document.querySelector(".priceTotal");
//   cartTotalA.innerHTML = totalD;
// }


// function addcartbackend() {
//   var gh = sessionStorage.getItem("giohang");
//   cart = JSON.parse(gh);
//   for (let i = 0; i < cart.length; i++){
//     var addtr = document.createElement("tr");
//     var trcontent = ' <tr><td style="display: flex;align-items: center; "><img style ="width: 70px;" src="'+ cart[i][1]+'" alt=""><p class = "content" style = "color : black;">'+cart[i][0]+'</p> </td><td><p> <span class = "price" style = "color:black;">'+cart[i][2]+'</span></p></td> <td><input type="number" value="1" min="1" style="width: 30px; outline: none; "></td><td class ="deleteCart" style="cursor: pointer;color: black;">Xóa</td></tr>' ;
//     addtr.innerHTML = trcontent;
//     var cartTable = document.querySelector("tbody");
//     cartTable.append(addtr);
//   }
// }
// deleteCart();
// addcartbackend();

// var cartItem = document.querySelectorAll("tbody tr");
//         var productDelete = document.querySelectorAll(".deleteCart");
        
//         for (let i = 0; i < cartItem.length; i++){
//           productDelete[i].addEventListener("click", function(event){
//           var cartDelete = event.target;
//           var cartItemRemove = cartDelete.parentElement;
//           cartItemRemove.remove();
//           console.log(i);
//           cart.splice(i,1);
//         }
//         )
//       }
//  var capnhap = document.querySelector(".update");
//  capnhap.addEventListener("click", function(e) {
//   var cartItem = document.querySelectorAll("tbody tr");
//   var productDelete = document.querySelectorAll(".deleteCart");
  


//  });
 


  
    