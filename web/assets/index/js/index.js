// 刷新
(function () {
    let header = document.querySelector('#header');
    let buttonl = document.querySelector('.header-icon-l');
    let appear = document.querySelector('.curtain');
    let point = document.querySelector('.header-icon-point');
    let close = document.querySelector('.curtain-close');
    header.addEventListener('click',e => {
        if(e.target.classList.contains('header-title-icon')){
            e.target.classList.add('rotate');
            setTimeout(function () {
                e.target.classList.remove('rotate');
            },800)
        }
        if(e.target.classList.contains('header-icon-mail')||e.target.classList.contains('header-icon-point')){
            appear.classList.add('appear');
            point.style.display = 'none';
        }
    })
    close.onclick = () => {
        appear.classList.remove('appear');
    }
})()

// jquery
$(function () {
    $('.species-childs').on('click','li',function () {
        let cid = $(this).attr('data-cid');
        $.ajax({
            url:'/index.php',
            data:{
                m:'index',
                cid:cid
            },success:function (data) {
                $('#content').html(data)
            }
        })
    })
})




// 内容模板
let content = document.querySelector('#content');
let item = document.querySelectorAll('#content .content-item');
let html = '';
// for(let i = 0;i<item.length;i++){
//     if(item[i].classList.contains('normal')){
//         html = `
//              <h1>习近平谈如何打赢脱贫攻坚战</h1>
//         <div class="content-item-word">
//             <span class="level-one">置顶</span>
//             <span class="level-two">党建网微平台</span>
//             <span class="level-three">评论 73</span>
//             <span class="level-four">7分钟前</span>
//         </div>
//         `
//         item[i].innerHTML = html;
//     }else if(item[i].classList.contains('img-right')){
//         html = `
//                 <div class="content-item-left">
//                     <h3>习近平时间｜习近平寄语青年：为构建</h3>
//                     <div class="content-item-word content-left-word">
//                        <span class="level-one">置顶</span>
//                        <span class="level-two">党建网微平台</span>
//                        <span class="level-three">评论 73</span>
//                        <span class="level-four">7分钟前</span>
//                      </div>
//                 </div>
//                 <div class="content-item-right"></div>
//
//         `
//         item[i].innerHTML = html;
//     }else if(item[i].classList.contains('big-pic')) {
//         html = `
//              <div class="content-img">
//                     <img src="http://s2.pstatp.com/site/promotion/landing_page/img/游戏3_ee3a1e02c0cefc4a15a4c5e7ed21e28f.jpg"
//                  alt="">
//                </div>
//                 <div class="content-item-word">
//                 <span class="level-one">App</span>
//                 <span class="level-two">今日头条</span>
//
//                  </div>
//
//         `
//         item[i].innerHTML = html;
//     }else if(item[i].classList.contains('bottom-img')){
//         html=`
//                 <h3 class="bottom-img-title">三伏天里何处才是最清凉的所在？母亲的回答催人泪下</h3>
//                 <ul class="bottom-item-img">
//                     <li>
//                         <img src="https://p3.pstatp.com/list/pgc-image/1534207201330566ad54227" alt="">
//                     </li>
//                     <li>
//                         <img src="https://p3.pstatp.com/list/pgc-image/1534207201496cf7512bef2" alt="">
//                     </li>
//                     <li>
//                         <img src="https://p3.pstatp.com/list/pgc-image/1534207201715aff6b35f4b" alt="">
//                     </li>
//                 </ul>
//         `
//         item[i].innerHTML = html;
//     } else{
//         html=`
//             <h1>习近平时间｜习近平寄语青年：为构建人类命运共同体添砖献瓦</h1>
//             <div class="content-item-word">
//                 <span class="level-one">置顶</span>
//                 <span class="level-two">党建网微平台</span>
//                 <span class="level-three">评论 73</span>
//                 <span class="level-four">7分钟前</span>
//             </div>
//
//         `
//         item[i].innerHTML = html;
//     }
//
// }














