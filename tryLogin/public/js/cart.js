console.log("running");


let carts = document.querySelectorAll('.add-cart');
let product = [
                {
                  name:"Foto produk P1",
                  tag:"Paket 1",
                  price:100000,
                  incart:0
                },
                {
                  name:"foto produk P2",
                  tag:"Paket 2",
                  price:250000,
                  incart:0
                }
              ];

for (let i = 0; i < carts.length; i++) {
  carts[i].addEventListener('click',()=>{
    // console.log("ADDED TO CART");
    cartNumbers(product[i]);
    totalCost(product[i]);
  })
}

function onLoadCart(){
  let productNum = localStorage.getItem('cartNumbers');

  if (productNum){
    document.querySelector('.cart span').textContent = productNum;
  }
}


function cartNumbers(product){
  let productNum = localStorage.getItem('cartNumbers');

  productNum = parseInt(productNum);

  if(productNum){
    localStorage.setItem('cartNumbers', productNum+1);
    document.querySelector('.cart span').textContent = productNum+1;
  }else{
    localStorage.setItem('cartNumbers', 1);
    document.querySelector('.cart span').textContent = 1;
  }

  setItem(product);
}

function setItem(product){
  let cartItems = localStorage.getItem('productinCart');
  cartItems = JSON.parse(cartItems);
  console.log(product);

  if(cartItems != null){
    if (cartItems[product.tag] == undefined) {
      cartItems ={
        ...cartItems,
        [product.tag]: product
      }
    }
    cartItems[product.tag].incart += 1;
  }else{
    product.incart = 1;
    cartItems = {
      [product.tag]: product
    }
  }
  localStorage.setItem("productinCart", JSON.stringify(cartItems));
}

function totalCost(product) {
  // console.log("Price is: ", product.price);
  let cartCost = localStorage.getItem("totalCost");

  console.log("Cart cost is", cartCost);
  console.log(typeof cartCost);

  if(cartCost != null){
    cartCost = parseInt(cartCost);
    localStorage.setItem("totalCost",cartCost+product.price);
  }else{
   localStorage.setItem("totalCost", product.price);
  }


}

onLoadCart();
console.log("end");
