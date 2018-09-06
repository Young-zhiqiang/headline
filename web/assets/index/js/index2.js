



$(function () {
  $('.remoce-item').on('click','li',function () {
      let id = parseInt($(this).attr('data_defult'));
        $.ajax({
            url:'/index.php',
            data:{
                c:'category',
                m:'update',
                r:0,
                i:id
            },
            success:() => {

                    $(this).appendTo($('.add-item'));

            }
        })
  })
    $('.add-item').on('click','li',function () {
        let id = parseInt($(this).attr('data_defult'));
        $.ajax({
            url:'/index.php',
            data:{
                c:'category',
                m:'update',
                r:1,
                i:id
            },
            success:() => {
                $(this).appendTo($('.remoce-item'))
            }


        })
    })
})