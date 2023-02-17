const btnCart = documento. querySelector('.container-icon')
const containerCartProducts = documento. querySelector('.container-cart-products')

btnCart. addEventListener('clic', () => {
    containerCartProducts. classList. toggle('carrito oculto')
})