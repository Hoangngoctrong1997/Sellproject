<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
/*Custom fonts - Sniglet and FontAwesome*/
@import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap');
.cursive {
    font-family: 'Patrick Hand', cursive;
}

* {margin: 0; padding: 0;}
body {
    background: hsl(120, 40%, 60%);
    padding-top: 150px;
    font: normal 18px cursive; color: white; text-align: center;
}

/*general styles*/
h1 {font-weight: normal; font-size: 36px; margin-bottom: 75px;}
.fun-cube i {transform: scale(10); opacity: 0.1;}

#cuboid {
    width: 400px; margin: 0 auto;
    /*this also makes #cuboid a container for absolutely positioned descendants*/
    perspective: 1000px;
}
#cuboid form {
    /*counter translate*/
    transform: translateZ(-20px);
    /*propogate 3d space for children*/
    transform-style: preserve-3d;
    /*prevent height collapse as children are absolutely positioned*/
    height: 40px;
    /*for smooth animations*/
    transition: all 0.35s;
}

/*faces*/
.cuboid-text {
    /*each face will be 40px high*/
    line-height: 40px; height: 40px;
    background: hsl(120, 40%, 20%);
}
.loader {
    background: hsl(120, 40%, 30%);
    animation: phase 1s infinite;
}
/*Lets create a pulsating animation for the loader face*/
@keyframes phase {
    50% {background: hsl(120, 70%, 30%);}
}
#name_text {
    background: white; outline: none; border: 0 none;
    font: unset; text-align: left; color: hsl(120, 40%, 30%);
    display: block; width: 100%; padding: 0 10px;
    box-sizing: border-box;
}
#submit {display: none;}

.submit-icon, .reset-icon {
    position: absolute; top: 0; right: 0;
    color: rgba(0, 0, 0, 0.25);
    line-height: 40px; padding: 0 10px;
    /*smooth transitions when user activates input and types something*/
    transition: all 0.5s;
    /*to make the icons feel like buttons*/
    cursor: pointer;
}
/*.active = when the user is typing something*/
.submit-icon.active {color: hsl(120, 40%, 30%);}
.reset-icon {color: rgba(255, 255, 255, 0.25); font-size: 14px;}

#cuboid div {position: absolute; top: 0; left: 0; width: 100%;}
/*3D transforms. Each face will be rotated in multiples of -90deg and moved 20px(half of their 40px height) out*/
#cuboid div:nth-child(1) {transform: rotateX(0deg) translateZ(20px);}
#cuboid div:nth-child(2) {transform: rotateX(-90deg) translateZ(20px);}
#cuboid div:nth-child(3) {transform: rotateX(-180deg) translateZ(20px);}
#cuboid div:nth-child(4) {transform: rotateX(-270deg) translateZ(20px);}

/*the form will have 4 states/classes(default+3) for rotation*/
#cuboid form:hover,
#cuboid form.ready {transform: translateZ(-20px) rotateX(90deg);}
#cuboid form.loading {transform: translateZ(-20px) rotateX(180deg);}
#cuboid form.complete {transform: translateZ(-20px) rotateX(270deg);}
.success{
    width: fit-content;
    min-width: 110px;
    height: 40px;
    border-radius: 40px;
    border: none;
    background: #1F471f;
}
.inline{
    display: inline-block!important;
}
.dp_none{
    display: none;
}
.loan_bg{

    background: azure!important;
}
</style>
</head>
<body>
<div id="video" class="dp_none">
<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fgnort1997%2Fvideos%2F185201049326439%2F&show_text=0&width=267"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
</div>
<div class="fun-cube"><i class="fa fa-cube"></i></div>
<h1 id="alert_form">Xin chào bạn "gì" xinh đẹp <span style='font-size:30px;'>&#128536;</span></h1>
<div id="cuboid">
    <form>
        <!-- #1 hover button -->
        <div>
            <p id="text1" class="cuboid-text">Di con chuột vô đây đi má &#x1F602;</p>
        </div>
        <!-- #2 text input -->
        <div>
            <input type="text" id="name_text" class="cuboid-text" placeholder="Xong gõ vô đây cho xin cái tên đi &ensp; &#x1F60D; &#x1F60D;" autocomplete="off"/>
            <!-- hidden submit button -->
        </div>
    </form>
</div>
<div id="so1" style="padding-top: 20px;display: inline-block">
    <div class="success"><span style='font-size:20px;position: relative;top: 5px;'>&#128076;</span></div>
</div>

<div id="so2" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>được chớ</span></div>
</div>

<div id="so3" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>hông nha</span></div>
</div>

<div id="so4" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>chưa nhé</span></div>
</div>

<div id="so5" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>đúng rồi á</span></div>
</div>

<div id="so6" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>ừa</span></div>
</div>

<div id="so7" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>thôi đại đi</span></div>
</div>

<div id="so8" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>thì sao , kệ tui &#128548;</span></div>
</div>

<div id="so9" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>thì kệ &#128518;</span></div>
</div>

<div id="so10" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>tui khó cua lắm á &#128517;</span></div>
</div>
<div id="so11" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>có gì mà đòi cưa tui chứ &#x1F61D;</span></div>
</div>

<div id="so12" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>hông thèm nha</span></div>
</div>

<div id="so13" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>thử đi coi nào</span></div>
</div>

<div id="so14" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>được rồi , nhây vừa vừa &#128545;</span></div>
</div>
<div id="so15" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>đi nhậu </span></div>
</div>
<div id="so16" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>đi lượn lờ cũng được</span></div>
</div>
<div id="so17" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>đi ăn </span></div>
</div>
<div id="so18" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>đi xem phim </span></div>
</div>
<div id="so19" style="padding-top: 20px;display: none">
    <div class="success"><span style='font-size:18px;position: relative;top: 5px;'>biến , biến , biếnnnn </span></div>
</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
<script>
    var data = {name:"",interests:""};

$('#so1').click(function(){
   var name = $('#name_text').val();
   data.name = name;
    if (name ==="loan" || name === "Loan" || name === "Mai Thanh Loan"|| name === "mai thanh loan"|| name === "MAI THANH LOAN"|| name === "LOAN"){
       $("body").css({"background-image": "url(\"https://scontent.fhan5-5.fna.fbcdn.net/v/t1.0-9/25659645_2016871718553692_4648996418019014365_n.jpg?_nc_cat=101&_nc_sid=dd9801&_nc_ohc=FFnb-YUGxagAX8Pt0yw&_nc_ht=scontent.fhan5-5.fna&oh=e3db8d5b9d9d8a05572fc013f0f3f43a&oe=5F52790E\")",
                    "background-position":"center",
                    "background-repeat":"no-repeat",
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
</script>
</html>