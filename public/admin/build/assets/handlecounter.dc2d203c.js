$(function(){$(".counter-plus").on("click",function(){var t=$(this).closest("div").find(".qty"),n=parseInt(t.val());isNaN(n)||t.val(n+1)}),$(".counter-minus").on("click",function(){var t=$(this).closest("div").find(".qty"),n=parseInt(t.val());!isNaN(n)&&n>0&&t.val(n-1)})});