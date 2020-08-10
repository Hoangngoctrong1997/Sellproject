var data = {name:"",interests:""};

$('#so1').click(function(){
   var name = $('#name_text').val();
   data.name = name;
    if (name ==="loan" || name === "Loan" || name === "Mai Thanh Loan"|| name === "mai thanh loan"|| name === "MAI THANH LOAN"|| name === "LOAN"){
       $("body").css({"background-image": "url(\"https://scontent.fhan5-5.fna.fbcdn.net/v/t1.0-9/25659645_2016871718553692_4648996418019014365_n.jpg?_nc_cat=101&_nc_sid=dd9801&_nc_ohc=FFnb-YUGxagAX8Pt0yw&_nc_ht=scontent.fhan5-5.fna&oh=e3db8d5b9d9d8a05572fc013f0f3f43a&oe=5F52790E\")",
                    "background-position":"center",
                    "background-repeat":"no-repeat",
                    "background-size":"100%",
       });
       $("#alert_form").html("Bạn " +name+" xinh đẹp bạn cho mình làm quen được hônggggggg<span style='font-size:30px;'>&#128536;</span>");
       $("#so1").toggle();
       $("#text1").toggle();
       $("#name_text").toggle();
       $("#so2").addClass("inline");
       $("#so3").addClass("inline");
   }
   else {
       $("#alert_form").html("Chúc bạn một ngày vui vẻ <span style='font-size:30px;'>&#128516;</span>");
       $("#text1").toggle();
       $("#so1").toggle();
       $("#name_text").toggle();
   }
});
$('#so2').click(function(){
    var name = data.name;
    $("#alert_form").html("Bạn " +name+" đáng yêu vậy chắc có người yêu rồi ha <span style='font-size:30px;'>&#128554;</span>");
    $("#so2").removeClass("inline");
    $("#so3").removeClass("inline");
    $("#so4").addClass("inline");
    $("#so5").addClass("inline");
});
$('#so3').click(function(){
    $("#alert_form").html("Quen thì quen mà hông quen thì quen  , thì thôi quen đại đi mà ....<span style='font-size:30px;'>&#128554;</span>");
    $("#so2").removeClass("inline");
    $("#so3").removeClass("inline");
    $("#so6").addClass("inline");
    $("#so7").addClass("inline");
});
$('#so4').click(function(){
    $("#alert_form").html("Xinh vậy chưa có người yêu , Bà còn đợi ai nữa <span style='font-size:30px;'>&#x1F644;</span> Hay bà thích con gái ta <span style='font-size:30px;'>&#128563;</span>");
    $("#so2").removeClass("inline");
    $("#so3").removeClass("inline");
    $("#so4").removeClass("inline");
    $("#so5").removeClass("inline");
    $("#so8").addClass("inline");

});
$('#so8').click(function(){
    var name = data.name;
    $("#alert_form").html(" Nhưng tui lỡ thích "+ name+ " rồi thì sao giờ <span style='font-size:30px;'>&#128534;</span>");
    $("#so8").removeClass("inline");
    $("#so9").addClass("inline");
    $("#so10").addClass("inline");

});
$('#so9').click(function(){
    var name = data.name;
    $("#alert_form").html("Tui thích "+ name+ " thật á <span style='font-size:30px;'>&#128532;</span> cho tui cơ hội đi mà...... ");
    $("#so9").removeClass("inline");
    $("#so10").removeClass("inline");
    $("#so11").addClass("inline");

});
$('#so11').click(function(){
    var name = data.name;
    $("#alert_form").html("Tui cũng ngoan nè , thích " +name+"thật lòng nữa chớ <span style='font-size:30px;'>&#128525;</span> , tui còn biết hát á, nghe thử hông ....");
    $("#so9").removeClass("inline");
    $("#so10").removeClass("inline");
    $("#so11").removeClass("inline");
    $("#so12").addClass("inline");
    $("#so13").addClass("inline");
});
$('#so11').click(function(){
    var name = data.name;
    $("#alert_form").html("Coi là đồng ý cho tui cua " +name+"<span style='font-size:30px;'>&#128525;</span> nha");
    $("#so9").removeClass("inline");
    $("#so10").removeClass("inline");
    $("#so11").removeClass("inline");
    $("#so12").addClass("inline");
    $("#so13").addClass("inline");
});
$('#so13').click(function(){
    var name = data.name;
    $("#alert_form").html("Coi là đồng ý cho tui cua " +name+"<span style='font-size:30px;'>&#128525;</span> nha");
    $("#so9").removeClass("inline");
    $("#so10").removeClass("inline");
    $("#so11").removeClass("inline");
    $("#so12").removeClass("inline");
    $("#so13").removeClass("inline");
    $("#video").removeClass("dp_none");

});
$("#so6,#so7").click(function(){
    var name = data.name;
    $("#alert_form").html("Nếu được , 'NẾU' thôi nha <span style='font-size:30px;'>&#128556;</span> thì tui rủ "+name+" đi chơi được hông ?????");
    $("#so14").addClass("inline");
    $("#so6").removeClass("inline");
    $("#so7").removeClass("inline");
});
$("#so14").click(function(){
    var name = data.name;
    $("#alert_form").html("Đi đâu thì "+name+" thấy zui ???");
    $("#so14").removeClass("inline");
    $("#so15,#so16,#so17,#so18").addClass("inline");
});
$("#so15,#so16,#so17,#so18").click(function(){
    var name = data.name;
    $("#alert_form").html("Thôi đùa vậy chớ , ngồi nghĩ mấy cái kịch bản này mệt quá <span style='font-size:30px;'>&#128557;</span> mà a thích "+name+" thật chớ , cho a 'CUA' em thử đê, lỡ đâu em cũng thích anh thì sao <span style='font-size:30px;'>&#128540;</span> <span style='font-size:30px;'>&#128540;</span> <span style='font-size:30px;'>&#128540;</span>");
    $("#so15,#so16,#so17,#so18").removeClass("inline");
});
$("#so5").click(function(){
    var name = data.name;
    $("#alert_form").html("Èo , mà người thế có người EO cũng đúng thôi <span style='font-size:30px;'>&#128542;</span> , nhưng mà kệ , tôi cứ cua đó , ai bắt bà gọi tui là BẤT CHẤP BOY  làm chi");
    $("#so4,#so5").removeClass("inline");
    $("#so19").addClass("inline");
});
$("#so19").click(function(){
    var name = data.name;
    $("#alert_form").html("Còn lâu mới biến nhé , bà có GẶM ĐẦU tui cũng hổng biến đấy , ờ ờ , tại tui thích bà thật mà , cho tui CUA đi mà <span style='font-size:30px;'>&#128549;</span> hứa ngoan ");

    $("#so4,#so5").removeClass("inline");
    $("#so19").removeClass("inline");
});
$("#so10").click(function(){
    var name = data.name;
    $("#alert_form").html("Mặc kệ , không cần biết khó gì hết , tui cứ CUA á , ai bắt để tui gặp "+name+" làm chi , không nói gì là đồng ý nha (tui có cho bà cái nút nào để bấm đâu mà chẳng hổng nói gì <span style='font-size:30px;'>&#128540;</span>)");

    $("#so9,#so10").removeClass("inline");
});
$("#so12").click(function(){
    var name = data.name;
    $("#alert_form").html("Hỏng thèm cứ bắt coi đấy <span style='font-size:30px;'>&#128517;</span> mà đừng share nha, tui ngại chết ");

    $("#so9,#so10").removeClass("inline");
    $("#video").removeClass("dp_none");
});