/**
 * Created by Administrator on 2017/4/5 0005.
 */
$(function(){
    /*取card的li添加点击事件*/
    $(".card").on(
        {
        "click":function(){
            // $(".card").each(function(index,ele){
            //     if($(ele).hasClass("act")){
            //         $(ele).removeClass("act")
            //     }
            // })
            // $(".tab").each(function(index,ele){
            //     if($(ele).css("display")=='list-item'){
            //         $(ele).slideUp();
            //     }
            // });
            $(this).toggleClass("act");
            var thistab = $(this).nextAll("li").eq(4);
            thistab.slideToggle();
        }
    })
})