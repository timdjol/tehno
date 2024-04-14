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
    const images = document.querySelectorAll('.catalog__image')

    icons.forEach(function (icon, index) {
        icon.addEventListener('click', function () {
            // Удаляем класс active у всех иконок
            icons.forEach(function (ic) {
                ic.classList.remove('catalog__active')
            })
            // Добавляем класс active к текущей иконке
            this.classList.add('catalog__active')

            // Показываем соответствующее изображение
            images.forEach(function (img) {
                img.classList.remove('catalog__active')
            })
            images[index].classList.add('catalog__active')
        })
    })
})

// модалка быстрого просмотра
document.addEventListener('DOMContentLoaded', function () {
    const openModalBtn = document.querySelector('.catalog__openModalBtn')
    const modal = document.querySelector('.catalog__modal')
    const closeModalBtn = modal.querySelector('.catalog__close')

    openModalBtn.addEventListener('click', function () {
        modal.style.display = 'block'
    })

    closeModalBtn.addEventListener('click', function () {
        modal.style.display = 'none'
    })

    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none'
        }
    })
})

// -------------------------КАТАЛОГ: фильтр-------------------------
document.addEventListener('DOMContentLoaded', function () {
    var dropdowns = document.querySelectorAll('.dropdown')
    dropdowns.forEach(function (dropdown) {
        var toggle = dropdown.querySelector('.dropdown-toggle')
        var menu = dropdown.querySelector('.dropdown-menu')
        toggle.addEventListener('click', function () {
            menu.style.display =
                menu.style.display === 'block' ? 'none' : 'block'
        })
    })
})

// -------------------------КАТАЛОГ: карточка товара-------------------------

// -------------------------КОРЗИНА: карточка товара-------------------------
const counterText = document.querySelector('.counter-wrap span')
const counterBtn = document.querySelectorAll('.counter-wrap button')
let counter = 1

counterBtn.forEach((el, index) => {
    el.addEventListener('click', () => {
        if (index === 0 && counter > 1) {
            counter--
        } else if (index === 1 && counter < 10000) {
            counter++
        }
        counterText.textContent = counter
        setDisabled(counter)
    })
})

function setDisabled(counter) {
    if (counter === 1) {
        counterBtn[0].disabled = true
    } else if (counter === 10000) {
        counterBtn[1].disabled = true
    } else {
        counterBtn[0].disabled = false
        counterBtn[1].disabled = false
    }
}
