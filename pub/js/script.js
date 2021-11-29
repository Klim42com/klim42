clickBoardInput.onclick = () => {
    navigator.clipboard.writeText(clickBoardInput.value)
    successMessage.classList.add('active')
    setTimeout(() => successMessage.classList.remove('active'), 2000)
}

clickBoardInput2.onclick = () => {
    navigator.clipboard.writeText(clickBoardInput2.value)
    successMessage.classList.add('active')
    setTimeout(() => successMessage.classList.remove('active'), 2000)
}