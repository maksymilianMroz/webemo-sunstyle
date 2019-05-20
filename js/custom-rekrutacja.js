/**************************** GALLERY *******************************/

let mainPhoto = document.querySelector('.main-photo');

let galleryItem1 = document.querySelector('.gallery-photo1');
let galleryItem2 = document.querySelector('.gallery-photo2');
let galleryItem3 = document.querySelector('.gallery-photo3');

let gallerySwitchOne = () => {
    if (mainPhoto.src === galleryItem2.src || mainPhoto.src === galleryItem3.src) {
        mainPhoto.src = galleryItem1.src;
    } else {
        mainPhoto.src = galleryItem1.src;
    }
}
let gallerySwitchTwo = () => {
    if (mainPhoto.src === galleryItem1.src || mainPhoto.src === galleryItem3.src) {
        mainPhoto.src = galleryItem2.src;
    } else {
        mainPhoto.src = galleryItem1.src;
    }
}
let gallerySwitchThree = () => {
    if (mainPhoto.src === galleryItem2.src || mainPhoto.src === galleryItem1.src) {
        mainPhoto.src = galleryItem3.src;
    } else {
        mainPhoto.src = galleryItem1.src;
    }
}





/******************************* GET ITEMS TO SELL FROM JSON **********************************/

let productsList = document.querySelector('.product-list-container__list-line');

function getDataAssync() {
    let httpReq = new XMLHttpRequest();
    let template = '';

    httpReq.open('GET', 'https://raw.githubusercontent.com/maksymilianMroz/items-for-ajax/master/items.json');
    httpReq.addEventListener('readystatechange', function () {
        if (this.readyState == 4 && this.status == 200) {
            let content = this.responseText;
            content = JSON.parse(content);
            let klucze = Object.keys(content)
            console.log(content.ShopItems[1].gallery[2]);



            klucze.forEach(e => {
                item = content[e]
                item.forEach(element => {
                    template +=
                        `<div class="product-list-container__list-item product-list-container__list-item${element.id}">
                          <img src="${element.gallery}">
                          <h4>${element.name}</h4>
                          <div class="hidden">${element.price}</div>
                          <div class="hidden">${element.description}</div>
                      </div>`
                });


            });
            if (template != '') {
                productsList.innerHTML = template;
            }

            /******** CHANGE MAIN ITEM IN PORTFOLIO SECTION ***********/
            
            let nazwaItemu = document.querySelector('.product-description-title');
            let cenaItemu = document.querySelector('.product-description-price');
            let opisItemu = document.querySelector('.product-description-text');

            let item1 = document.querySelector('.product-list-container__list-item1');
            let item2 = document.querySelector('.product-list-container__list-item2');
            let item3 = document.querySelector('.product-list-container__list-item3');
            let item4 = document.querySelector('.product-list-container__list-item4');
            let item5 = document.querySelector('.product-list-container__list-item5');
            let item6 = document.querySelector('.product-list-container__list-item6');
            let item7 = document.querySelector('.product-list-container__list-item7');
            /*1*/
            let zmianaNa1 = () => {
                
                nazwaItemu.innerHTML = content.ShopItems[0].name;
                cenaItemu.innerHTML = content.ShopItems[0].price;
                opisItemu.innerHTML = content.ShopItems[0].description;

                mainPhoto.src = content.ShopItems[0].gallery[0];
                galleryItem1.src = content.ShopItems[0].gallery[0];
                galleryItem2.src = content.ShopItems[0].gallery[1];
                galleryItem3.src = content.ShopItems[0].gallery[2];

            }
            /*2*/
            let zmianaNa2 = () => {
                
                nazwaItemu.innerHTML = content.ShopItems[1].name;
                cenaItemu.innerHTML = content.ShopItems[1].price;
                opisItemu.innerHTML = content.ShopItems[1].description;

                mainPhoto.src = content.ShopItems[1].gallery[0];
                galleryItem1.src = content.ShopItems[1].gallery[0];
                galleryItem2.src = content.ShopItems[1].gallery[1];
                galleryItem3.src = content.ShopItems[1].gallery[2];

            }
            /*3*/
            let zmianaNa3 = () => {
                
                nazwaItemu.innerHTML = content.ShopItems[2].name;
                cenaItemu.innerHTML = content.ShopItems[2].price;
                opisItemu.innerHTML = content.ShopItems[2].description;

                mainPhoto.src = content.ShopItems[2].gallery[0];
                galleryItem1.src = content.ShopItems[2].gallery[0];
                galleryItem2.src = content.ShopItems[2].gallery[1];
                galleryItem3.src = content.ShopItems[2].gallery[2];

            }
            /*4*/
            let zmianaNa4 = () => {
                
                nazwaItemu.innerHTML = content.ShopItems[3].name;
                cenaItemu.innerHTML = content.ShopItems[3].price;
                opisItemu.innerHTML = content.ShopItems[3].description;

                mainPhoto.src = content.ShopItems[3].gallery[0];
                galleryItem1.src = content.ShopItems[3].gallery[0];
                galleryItem2.src = content.ShopItems[3].gallery[1];
                galleryItem3.src = content.ShopItems[3].gallery[2];

            }
            /*5*/
            let zmianaNa5 = () => {
                
                nazwaItemu.innerHTML = content.ShopItems[4].name;
                cenaItemu.innerHTML = content.ShopItems[4].price;
                opisItemu.innerHTML = content.ShopItems[4].description;

                mainPhoto.src = content.ShopItems[4].gallery[0];
                galleryItem1.src = content.ShopItems[4].gallery[0];
                galleryItem2.src = content.ShopItems[4].gallery[1];
                galleryItem3.src = content.ShopItems[4].gallery[2];

            }
            /*6*/
            let zmianaNa6 = () => {
                
                nazwaItemu.innerHTML = content.ShopItems[5].name;
                cenaItemu.innerHTML = content.ShopItems[5].price;
                opisItemu.innerHTML = content.ShopItems[5].description;

                mainPhoto.src = content.ShopItems[5].gallery[0];
                galleryItem1.src = content.ShopItems[5].gallery[0];
                galleryItem2.src = content.ShopItems[5].gallery[1];
                galleryItem3.src = content.ShopItems[5].gallery[2];

            }
            /*7*/
            let zmianaNa7 = () => {
                
                nazwaItemu.innerHTML = content.ShopItems[6].name;
                cenaItemu.innerHTML = content.ShopItems[6].price;
                opisItemu.innerHTML = content.ShopItems[6].description;

                mainPhoto.src = content.ShopItems[6].gallery[0];
                galleryItem1.src = content.ShopItems[6].gallery[0];
                galleryItem2.src = content.ShopItems[6].gallery[1];
                galleryItem3.src = content.ShopItems[6].gallery[2];

            }

            item1.addEventListener('click', zmianaNa1)
            item2.addEventListener('click', zmianaNa2)
            item3.addEventListener('click', zmianaNa3)
            item4.addEventListener('click', zmianaNa4)
            item5.addEventListener('click', zmianaNa5)
            item6.addEventListener('click', zmianaNa6)
            item7.addEventListener('click', zmianaNa7)
        }
    });
    httpReq.send();

}

getDataAssync();






