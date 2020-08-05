console.log("running");

let carts = document.querySelectorAll('.add-cart');
// let product = [
//   {
//       name:
//   }
// ]

for (let i = 0; i < carts.length; i++) {
  carts[i].addEventListener('click',()=>{
    // console.log("ADDED TO CART");
    cartNumbers();
  })
}

function onLoadCart(){
  let productNum = localStorage.getItem('cartNumbers');

  if (productNum){
    document.querySelector('.cart span').textContent = productNum;
  }
}


function cartNumbers(){
  let productNum = localStorage.getItem('cartNumbers');
  productNum = parseInt(productNum);

  if(productNum){
    localStorage.setItem('cartNumbers', productNum+1);
    document.querySelector('.cart span').textContent = productNum+1;
  }else{
    localStorage.setItem('cartNumbers', 1);
    document.querySelector('.cart span').textContent = 1;
  }
}

onLoadCart();
console.log("end");
