/**
 * Created by Administrator on 2017/4/5 0005.
 */
$(function(){
    $(".main_top li").on({"mouseenter":function(){
        $(this).children(".box").addClass("box_hover")
    },"mouseleave":function(){
        $(this).children(".box").removeClass("box_hover")
    }})
})