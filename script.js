$(document).ready(function () {
    $('#Mytable').DataTable({
        "pageLength": 5  // Set the number of items per page
    });
})

//   validation
function validation(ele) {
    let flag = true
    ele?.forEach(input => {
        let element = document.getElementById(input);
        let parent = element.parentElement;
        let error = parent.querySelector('.error')

        if (element.value === "") {
            error.innerText = `${element.id} required`
            flag = false
        }
    });
    return flag
}