// $(function () {
//     $(document).ajaxStart(function () {
//         $('.dynamic').show()
//     })
//     $(document).ajaxComplete(function () {
//         $('.dynamic').hide()
//     })
//
// // 添加事件
//    $('#add').on('click',function () {
//
//        $.ajax({
//            url:'admin.php?c=news&f=insert',
//            data:{
//                 t:'',
//                 d:'',
//                 n:''
//            },
//            success:function () {
//                location.reload()
//            }
//        })
//    })
// //删除事件
//     $('#tbody').on('click','.remove',function () {
//         let id = $(this).closest('tr').attr('data-id');
//         $.ajax({
//             url:'admin.php?c=news&f=delete',
//             data:{
//                 id:id
//             },
//             success:function () {
//                 location.reload()
//             }
//
//         })
//     })
// // 修改事件
//     $('#tbody').on('blur','.form-control',function () {
//         let type = $(this).closest('td').attr('data-type');
//         let val = $(this).val();
//         let id = $(this).closest('tr').attr('data-id');
//         $.ajax({
//             url:'admin.php?c=news&f=update',
//             data:{
//                 k:type,
//                 v:val,
//                 id:id
//             },
//             success:function () {
//                 // location.reload()
//             }
//
//         })
//     })
//
//
//
//
//
//
// })


$(function () {
    // 删除
    $('.contents').on('click','.removes',function () {
        let id = $(this).closest('tr').attr('data_id');
        $.ajax({
            url:'/admin.php',
            data:{
                p:'news',
                c:'news',
                f:'remove',
                i:id
            },
            success:() => {
                location.reload()
                // console.log($('.contents').children().eq(id))
                // $('.contents').children().eq(id).detach();
            }
        })

    })


    //增加
    $('#add').on('click',function () {
        $.ajax({
            url:'/admin.php',
            data:{
                p:'news',
                c:'news',
                f:'add',
                t:'',
                d:'',
                u:'',
                i:''
            },
            success:function () {
                // location.reload()
            }
        })
    })
})