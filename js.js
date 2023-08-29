const form = document.querySelector("#formulario")

const getCheckedChildren = child => child.checked && child.tagName === 'INPUT'
const getArrayOf = (target, filterCallBack) => Array.from(target).filter(filterCallBack)
const alimentosFav = document.querySelector("#alimentosfav")
const alimentosNoFav = document.querySelector("#alimentosnofav")

form.addEventListener("submit", (e) => {
    e.preventDefault()

    const _alimentosFav = getArrayOf(
        form.querySelectorAll("[name='alfav']"),
        getCheckedChildren
    ).map(child => child.value)

    const _alimentosNoFav = getArrayOf(
        form.querySelectorAll('[name="alnofav"'),
        getCheckedChildren
    ).map(child => child.value)

    const alimentosFavToString = _alimentosFav.join(" ")
    const alimentosNoFavToString = _alimentosNoFav.join(" ")

    alimentosFav.value = alimentosFavToString
    alimentosNoFav.value = alimentosNoFavToString

    form.submit()
})
