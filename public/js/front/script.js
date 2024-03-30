// -------------------------НИЖНЕЕ МЕНЮ-------------------------
// ----------------------------начало---------------------------
//1-КНОПКА
document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.getElementById('navbar__dropbtn-1')
    const menu = document.getElementById('navbar__dropup-content-1')

    menuBtn.addEventListener('click', function (event) {
        menu.style.display = menu.style.display === 'grid' ? 'none' : 'grid'
        event.stopPropagation() // предотвращаем всплытие события
    })

    document.addEventListener('click', function (event) {
        if (!menu.contains(event.target) && event.target !== menuBtn) {
            menu.style.display = 'none'
        }
    })
})

//2-КНОПКА
document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.getElementById('navbar__dropbtn-2')
    const menu = document.getElementById('navbar__dropup-content-2')

    menuBtn.addEventListener('click', function (event) {
        menu.style.display = menu.style.display === 'grid' ? 'none' : 'grid'
        event.stopPropagation() // предотвращаем всплытие события
    })

    document.addEventListener('click', function (event) {
        if (!menu.contains(event.target) && event.target !== menuBtn) {
            menu.style.display = 'none'
        }
    })
})

//3-КНОПКА
document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.getElementById('navbar__dropbtn-3')
    const menu = document.getElementById('navbar__dropup-content-3')

    menuBtn.addEventListener('click', function (event) {
        menu.style.display = menu.style.display === 'grid' ? 'none' : 'grid'
        event.stopPropagation() // предотвращаем всплытие события
    })

    document.addEventListener('click', function (event) {
        if (!menu.contains(event.target) && event.target !== menuBtn) {
            menu.style.display = 'none'
        }
    })
})

//4-КНОПКА
document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.getElementById('navbar__dropbtn-4')
    const menu = document.getElementById('navbar__dropup-content-4')

    menuBtn.addEventListener('click', function (event) {
        menu.style.display = menu.style.display === 'grid' ? 'none' : 'grid'
        event.stopPropagation() // предотвращаем всплытие события
    })

    document.addEventListener('click', function (event) {
        if (!menu.contains(event.target) && event.target !== menuBtn) {
            menu.style.display = 'none'
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

// -------------------------ФИЛЬТР-------------------------
// -------------------------начало-------------------------
