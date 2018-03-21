$('.animation1').hide();
$('.animation2').hide();
$('.animation3').hide();
$('.animation4').hide();
$('.animation5').hide();

function demorand100() {
    var a=0;
    a=Math.random();
    document.form1.de100.value=Math.ceil(100*a);
}

function demorand20() {
    var a=0;
    a=Math.random();
    document.form1.de20.value=Math.ceil(20*a);
}

function demorand12() {
    var a=0;
    a=Math.random();
    document.form1.de12.value=Math.ceil(12*a);
}

function demorand6() {
    var a=0;
    a=Math.random();
    document.form1.de6.value=Math.ceil(6*a);
}

function demorandchoice() {
    var a=0;
    var b= $('.choicede').val();
    a=Math.random(b);
    document.form1.dechoice.value=Math.ceil(b*a);
}
/*-----------------------------------------*/

function rolldice1() {
    demorandchoice();
    $('.animation1').show();
    $('.animation1').delay(3000).fadeOut(400)
}
function rolldice2() {
    demorand100();
    $('.animation2').show();
    $('.animation2').delay(3000).fadeOut(400)
}
function rolldice3() {
    demorand20();
    $('.animation3').show();
    $('.animation3').delay(3000).fadeOut(400)
}
function rolldice4() {
    demorand12();
    $('.animation4').show();
    $('.animation4').delay(3000).fadeOut(400)
}
function rolldice5() {
    demorand6();
    $('.animation5').show();
    $('.animation5').delay(3000).fadeOut(400)
}

