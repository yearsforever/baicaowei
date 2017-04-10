/**
 * Created by Administrator on 2017/4/5 0005.
 */
$(function(){
    /*取card的li添加点击事件*/
    $(".card").on(
        {
        "click":function(){
            var thiscard = this;
            var thistab = $(thiscard).nextAll("li").eq(4);
            $(".card").each(function(index,ele){
                if($(thiscard).hasClass("act")){
                    return;
                }else{
                    $(ele).removeClass("act");
                }
            })
            $(".tab").each(function(index,ele){
                    if($(thistab).css("display")=='list-item'){
                        return;
                    }else{
                        $(ele).slideUp();
                    }
            });
            $(thiscard).toggleClass("act");
            thistab.slideToggle();
        }
    })
})