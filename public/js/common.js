$(document).ready(function () {
    $(document).on("click", '.pro-info', function () {
        let id = $(this).attr('aria-describedby');
        console.log(id)
        let index = '#' + id;
        $(index).show();
    });
    $(document).on("click", function (event) {
        // If the target is not the container or a child of the container, then process
        // the click event for outside of the container.
        if ($(event.target).closest("#el-popover-5306").length === 0) {
            if(!$(event.target).hasClass('btn-user')){
                $('#el-popover-5306').hide();
            }
            else{
                $('#el-popover-5306').show();
            }
        }
        if($(event.target).closest('.pro-info').length === 0){
            $('.actionDrop').hide();
        }
    });

});

function saveForm(index, url, reload=false) {
    let id = '#' + index;
    if($(id).valid()){
        var paramObj = new FormData($(id)[0]);
        $.ajax({
            url: url,
            type: 'post',
            data: paramObj,
            contentType: false,
            processData: false,
            success: function(response){
                console.log(response);
                if(response.status){
                    if($('[name=preview]').val() == '1'){
                        window.open(preview_url, '_blank');
                    }
                    else{
                        $.growl.notice({
                            title: "成功",
                            message: "保存しました"
                        });

                        if(reload){
                            window.location.reload();
                        }
                    }

                }
                else{
                    $.growl.error({
                        title: "失敗",
                        message: "保存失敗しました"
                    });
                }


            },
        });
    }
}
