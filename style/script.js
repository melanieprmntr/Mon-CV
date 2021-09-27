// let age = prompt('Quel est votre age');

// if (age<18 ){
//     alert('Vous nêtes pas majeur')
// }

// class Carousel {
//     constructor(element, options = {}) {
//         this.element = element
//         this.options = Object.assign({}, {
//             slidesToScroll: 1,
//             slidesVisible: 1
//         }, options)
//         let children = [].slice.call(element.children)
//        this.root = this.createDivWithClass('carousel')
//         this.container = this.createDivWithClass('carousel__container')
//         root.appendChild(this.container)
//         this.element.appendChild(root)
//         this.items = children.map((child) => {
//             let item = this.createDivWithClass('carousel__item')
//             item.appendChild(child)
//             this.container.appendChild(item)
//             return item
//         });
//         this.setStyle()
//     }

//     setStyle() {
//         let ratio = this.items.length / this.options.slidesVisible;
//         this.container.style.width = (ratio * 100) + "%"
//         this.items.forEach(item => item.style.width = ((100 / this.options.slidesVisible) / ratio) + "%");
//     }

//     createDivWithClass(className) {
//         let div = document.createElement('div')
//         div.setAttribute('class', className)
//         return div
//     }

//     createNavigation(){
//         let nextButton = this.createDivWithClass('carousel__next')
//         let prevButton = this.createDivWithClass('carousel__prev')
//         this.root.appendChild(nextButton)
//         this.root.appendChild(prevButton)

//     }

//     next(){

//     }

//     prev(){

//     }
// }

// new Carousel(document.querySelector('#carousel'), {
//     slidesToScroll: 3,
//     slidesVisible: 3

// })