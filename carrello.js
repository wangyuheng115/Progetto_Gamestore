
if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready(){
    updateCartTotal();
var removeCartItemButtons = document.getElementsByClassName('btn-outline-danger');
console.log(removeCartItemButtons)
for(var i = 0; i <removeCartItemButtons.length; i++){
    var button = removeCartItemButtons[i];
    button.addEventListener('click', removeCartItem)
    }
    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for(var i = 0; i <quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }
    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }
    
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
    addItemToCart(title, price, imageSrc)
    updateCartTotal()
}
function addItemToCart(title, price, imageSrc) {
    var cartitem = document.createElement('div')
    cartitem.classList.add('cart-item','row','p-3','mb-3')
    cartitem.style = ` 
    background-color: #202020;
  `;
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    
    }
    var cartRowContents = `
    
    <div class="col-sm-3">
        <div class="mask w-100" id="mask">
            <img class="w-100 cart-item-image" src="${imageSrc}" class="w-100" id="img_giochi_popolari">
        </div>
    </div>

    <div class="col-sm-9">
        <div class="row mt-3">
            <div class="col-sm-12 d-flex justify-content-between">
                <span class="badge bg-secondary">GIOCO DI BASE</span>
                <span class="cart-price">${price}</span>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-sm-12">
                <span class="cart-item-title">${title}</span>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-sm-12">
                '<?php echo $dettagligioco['autorimborsabile'] ?>'<a href="#" data-bs-toggle="tooltip" data-bs-html="true" class="inf_rimborso" title="<span class='text-secondary small text-wrap'><?php echo $dettagligioco['refund']; ?></span>"><i class="bi bi-patch-question"></i></a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-12 d-flex justify-content-between">
                <div class="piattform align-self-center">
                    <i class="bi bi-windows "></i>
                </div>

                <div class="oper">
                    <a href="#" class="btn btn-outline-success active btn-sm" role="button" data-bs-toggle="button" aria-pressed="true" ng-click="statselect()"><span class="stat_select">Selezionato</span></a>
                </div>
            </div>
        </div>
        <br>
        <button type="button" class="btn btn-outline-danger btn-sm offset-md-10" id="btn">Rimuovi</button>
    </div>
</div>`
    cartitem.innerHTML = cartRowContents
    cartItems.append(cartitem)
    cartitem.getElementsByClassName('btn-outline-danger')[0].addEventListener('click', removeCartItem)
}

function removeCartItem(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
}
function updateCartTotal(){
    var CartItemContainer= document.getElementsByClassName('cart-items')[0];
    var rows = CartItemContainer.getElementsByClassName('cart-item');
    var total = 0;
    var i;
    for(i = 0; i < rows.length; i++){
    var row= rows[i];
    var priceElement = row.getElementsByClassName('cart-price')[0];
    var price = parseFloat(priceElement.innerText.replace('€',' '));
    total = total + price;
    console.log(total);
    console.log(i);
    }
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName('cart-total-price')[0].innerText = '€' + total;
}
function conta(){
    var total = document.querySelectorAll('li');
    alert(total);
}