function changeTo(myImg){
    var myNum = document.getElementById("num");
    myNum.src = myImg;
}

function sleep(ms){
    const wakeupTime = Date.now() + ms;
    while (Date.now() < wakeupTime){}
}

function Auto_change_img(){
    var myNum = document.getElementById("num");
    count = 0;
    str = "/img/0"+".jpg";
    while(i<100)
    {
        switch(count)
        {
            case 0:
                str = "/img/"+count+".jpg";
                myNum.src = str;
                count++;
                sleep(10);
                break;
            case 1:
                str = "/img/"+count+".jpg";
                myNum.src = str;
                count++;
                sleep(10);
                break;
            case 2:
                str = "/img/"+count+".jpg";
                myNum.src = str;
                count=0;
                sleep(10);
                break;
        }
    }
}