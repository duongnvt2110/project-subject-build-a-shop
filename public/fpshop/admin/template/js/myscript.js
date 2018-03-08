//show hình khi chọn
    function viewAvatar(event) {
        var file=event.files[0];
        var reader= new FileReader();
        reader.onload= function (event) {

            $(".show-img").attr("src",event.target.result)
        };
        reader.readAsDataURL(file);
    }
    //script of assignment