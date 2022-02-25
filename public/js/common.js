$(document).ready(function () {
    $('.pro-info').click(function () {
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

})
