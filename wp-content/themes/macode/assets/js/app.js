// AOS

AOS.init({
    offset: 200,
    duration: 800,
    easing: "ease",
  });

// FAQS

const faqs = document.querySelectorAll('.faq')

faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle('open');

        const icon = faq.querySelector('.faq__icon i');
        if (icon.className === 'fa-solid fa-circle-plus') {
            icon.className = 'fa-solid fa-circle-minus open-faq';
        } else {
            icon.className = 'fa-solid fa-circle-plus';
        }
    })
})


// TYPING 1

var mess=new Array(
    "with coding",
    "with me",
    "with design");
   
   var size = 60;
   var txtcol = "#212529";
   var lastcol = "#474c50";
   var pause = 1500;
   var speed = 50;
   var i = i_str = 0;
   var msg = msgpre = msgafter = "";
   
   function get_text() {
    msgpre = mess[i].substring(0, i_str-1);
    msgafter = mess[i].substring(i_str-1, i_str);
    msg = "<span style='position: relative; color:" + txtcol + "'>" + msgpre + "<span style='color:" + lastcol + ";'>" + msgafter +
    "</span></span>";
   }
   
   function go() {
   if (i_str<=mess[i].length-1) {
    i_str++;
    get_text();
    if (document.all) typewriter.innerHTML = msg;
    else if (document.layers) {
     document.typewriter.document.write(msg);
     document.typewriter.document.close();
    }
    else document.getElementById("typewriter").innerHTML = msg;
    var timer = setTimeout("go()", speed);
   }
   else {
    clearTimeout(timer);
    var timer = setTimeout("changemess()", pause);
   }
   }
   
   function changemess() {
    i++;
    i_str = 0;
    if (i>mess.length-1) i = 0;
    go();
   }



// TYPING 2

var mess2=new Array(
    "this month",
    "this week",
    "this day",
    "this hour",
    "this moment",
    );
   
   var size2 = 55;
   var txtcol2 = "#000000";
   var lastcol2 = "#212529";
   var pause2 = 1500;
   var speed2 = 50;
   var i2 = i_str2 = 0;
   var msg2 = msgpre2 = msgafter2 = "";
   
   function get_text2() {
    msgpre2 = mess2[i2].substring(0, i_str2-1);
    msgafter2 = mess2[i2].substring(i_str2-1, i_str2);
    msg2 = "<span style='position: relative; color:" + txtcol2 + ";'>" + msgpre2 + "<span style='color:" + lastcol2 + ";'>" + msgafter2 +
    "</span></span>";
   }
   
   function go2() {
   if (i_str2<=mess2[i2].length-1) {
    i_str2++;
    get_text2();
    if (document.all) typewriter.innerHTML = msg2;
    else if (document.layers) {
     document.typewriter.document.write(msg2);
     document.typewriter.document.close();
    }
    else document.getElementById("typewriter2").innerHTML = msg2;
    var timer2 = setTimeout("go2()", speed2);
   }
   else {
    clearTimeout(timer2);
    var timer2 = setTimeout("changemess2()", pause2);
   }
   }
   
   function changemess2() {
    i2++;
    i_str2 = 0;
    if (i2>mess2.length-1) i2 = 0;
    go2();
   }

go()
go2()

