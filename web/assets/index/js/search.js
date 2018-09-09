$(function () {
    // 搜索
    $('#input').on('change',function () {
        let val = $('#input').val();
        $.ajax({
            url:'/index.php',
            data:{
                c:'search',
                m:'search_data',
                k:val
            },
            success:function (data) {
                data = JSON.parse(data);
                if(data.length){
                    $('#content').html('');
                    data.forEach(v => {
                        $('<li><a href='+ v.url +' style="color:#363636;">'+ v.title +'</a></li>').appendTo('#content');
                    })
                    $('.prompt').removeClass('active');

                }else{
                    $('#content').html('');
                    $('.prompt').addClass('active');

                }
            }
        })
    })


    // 加载
})
let pages = 1;
$(function () {
    $('.loading_more').on('click',function () {
        let val = $('#input').val();
        $.ajax({
            url:'/index.php',
            data:{
                c:'search',
                m:'search_data',
                k:val,
                p:pages+1
            },
            success:function (data) {
                pages = pages+1
                data = JSON.parse(data);
                if(data.length){
                    data.forEach(v => {
                        $('<li>'+v.title+'</li>').appendTo('#content')
                    })
                    // $('.loading_none').css('display','block');
                }else{
                    $('.loading_none').addClass('block');
                    $('.loading_more').addClass('none');

                }

            }
        })
    })
})