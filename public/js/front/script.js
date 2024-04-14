// -------------------------НИЖНЕЕ МЕНЮ-------------------------
// ----------------------------начало---------------------------
//1-кнопка
document.addEventListener('DOMContentLoaded', function () {
    const menuBtn1 = document.getElementById('navbar__dropbtn-1')
    const menu1 = document.getElementById('navbar__dropup-content-1')

    menuBtn1.addEventListener('click', function (event) {
        menu1.style.display = menu1.style.display === 'grid' ? 'none' : 'grid'
    })

    document.addEventListener('click', function (event) {
        if (!menu1.contains(event.target) && event.target !== menuBtn1) {
            menu1.style.display = 'none'
        }
    })
})

//2-кнопка
document.addEventListener('DOMContentLoaded', function () {
    const menuBtn2 = document.getElementById('navbar__dropbtn-2')
    const menu2 = document.getElementById('navbar__dropup-content-2')

    menuBtn2.addEventListener('click', function (event) {
        menu2.style.display = menu2.style.display === 'grid' ? 'none' : 'grid'
    })

    document.addEventListener('click', function (event) {
        if (!menu2.contains(event.target) && event.target !== menuBtn2) {
            menu2.style.display = 'none'
        }
    })
})

//3-кнопка
document.addEventListener('DOMContentLoaded', function () {
    const menuBtn3 = document.getElementById('navbar__dropbtn-3')
    const menu3 = document.getElementById('navbar__dropup-content-3')

    menuBtn3.addEventListener('click', function (event) {
        menu3.style.display = menu3.style.display === 'grid' ? 'none' : 'grid'
    })

    document.addEventListener('click', function (event) {
        if (!menu3.contains(event.target) && event.target !== menuBtn3) {
            menu3.style.display = 'none'
        }
    })
})

//4-кнопка
document.addEventListener('DOMContentLoaded', function () {
    const menuBtn4 = document.getElementById('navbar__dropbtn-4')
    const menu4 = document.getElementById('navbar__dropup-content-4')

    menuBtn4.addEventListener('click', function (event) {
        menu4.style.display = menu4.style.display === 'grid' ? 'none' : 'grid'
    })

    document.addEventListener('click', function (event) {
        if (!menu4.contains(event.target) && event.target !== menuBtn4) {
            menu4.style.display = 'none'
        }
    })
})
// ----------------------------конец----------------------------
// -------------------------НИЖНЕЕ МЕНЮ-------------------------

// -------------------------FAQ-------------------------
document.querySelectorAll('.accordion-header').forEach((button) => {
    button.addEventListener('click', () => {
        const accordionContent = button.nextElementSibling

        button.classList.toggle('active')

        if (button.classList.contains('active')) {
            accordionContent.style.maxHeight =
                accordionContent.scrollHeight + 'px'
        } else {
            accordionContent.style.maxHeight = 0
        }
        document
            .querySelectorAll('.accordion-header')
            .forEach((otherButton) => {
                if (otherButton !== button) {
                    otherButton.classList.remove('active')
                    otherButton.nextElementSibling.style.maxHeight = 0
                }
            })
    })
})

// -------------------------Мобильное меню-------------------------

document.getElementById('menu-toggle').addEventListener('click', function () {
    document.getElementById('menu').classList.add('active')
})

document.getElementById('close-btn').addEventListener('click', function () {
    document.getElementById('menu').classList.remove('active')
})

document.querySelectorAll('.submenu').forEach(function (item) {
    item.addEventListener('click', function () {
        this.classList.toggle('active')
    })
})

// цвет
document.addEventListener('DOMContentLoaded', function () {
    const icons = document.querySelectorAll('.catalog__icon')


    icons.forEach(function (icon, index) {
        icon.addEventListener('click', function () {
            const active_id = this.dataset.id;
            const active_id_color = this.dataset.color;
            const images = document.querySelectorAll(`.catalog__image.intro[data-id="${active_id}"]`);
            const buttons = document.querySelectorAll(`.catalog__icon.btn[data-id="${active_id}"]`);
            // Удаляем класс active у всех иконок
            buttons.forEach(function (ic) {
                ic.classList.remove('catalog__active'
                )
            })
            // Добавляем класс active к текущей иконке
            this.classList.add('catalog__active')

            // Показываем соответствующее изображение
            images.forEach(function (img) {
                img.classList.remove('catalog__active')
            })
            document.querySelector(`.catalog__image.intro[data-id="${active_id}"][data-color="${active_id_color}"]`).classList.add('catalog__active');
        })
    })
})

// модалка быстрого просмотра
document.addEventListener('DOMContentLoaded', function () {
    const modalButtons = document.querySelectorAll('.catalog__openModalBtn');
    const modals = document.querySelectorAll('.catalog__modal');

    modalButtons.forEach((button, index) => {
        button.addEventListener('click', function () {
            modals[index].style.display = 'block';
        });
    });

    modals.forEach((modal) => {
        const closeModalBtn = modal.querySelector('.catalog__close');
        closeModalBtn.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        modal.addEventListener('click', function (event) {
            if (event.target === modal && !event.target.classList.contains('catalog__modal__content')) {
                modal.style.display = 'none';
            }
        });
    });
});

// -------------------------КАТАЛОГ: фильтр-------------------------
document.addEventListener('DOMContentLoaded', function () {
    var dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(function (dropdown) {
        var toggle = dropdown.querySelector('.dropdown-toggle')
        var menu = dropdown.querySelector('.dropdown-menu')

        toggle.addEventListener('click', function () {
            toggle.querySelector('.dropdown-icon').classList.toggle('active');
            menu.style.display =
                menu.style.display === 'block' ? 'none' : 'block'
        })
    })

    //filter toggle
    let filter = document.querySelector('.mob_filter_title')
    let filter_wrap = document.querySelector('.filter-wrap')
        filter.addEventListener('click', function () {
            filter_wrap.classList.toggle('active');
        })

})

// -------------------------КАТАЛОГ: карточка товара-------------------------

// -------------------------КОРЗИНА: карточка товара-------------------------
// const counterText = document.querySelector('.counter-wrap span')
// const counterBtn = document.querySelectorAll('.counter-wrap button')
// let counter = 1
//
// counterBtn.forEach((el, index) => {
//     el.addEventListener('click', () => {
//         if (index === 0 && counter > 1) {
//             counter--
//         } else if (index === 1 && counter < 10000) {
//             counter++
//         }
//         counterText.textContent = counter
//         setDisabled(counter)
//     })
// })
//
// function setDisabled(counter) {
//     if (counter === 1) {
//         counterBtn[0].disabled = true
//     } else if (counter === 10000) {
//         counterBtn[1].disabled = true
//     } else {
//         counterBtn[0].disabled = false
//         counterBtn[1].disabled = false
//     }
// }
