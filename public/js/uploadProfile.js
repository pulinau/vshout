$(document).ready(function () {
    let profile = $('#profilePic')
    let showProfile = $("#showProfile");

    profile.on('change', function () {
    let file = this.files[0]
    let reader = new FileReader()

    reader.readAsDataURL(file)

    reader.onload = e => {
        let src = e.target.result
        showProfile.attr('src', src) 


    }

    $.post('/profile/upload', file)
    .done(function (res) {
        alert(res)
    })

    })

})