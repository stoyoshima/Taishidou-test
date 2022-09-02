const img_src = ["/images/top01.jpg", "/images/top02.jpg", "/images/top03.jpg"];
    let num = -1;
 
    function slide_time() {
    if (num === 2) {
        num = 0;
    } else {
        num++;
    }
    document.getElementById("slide_img").src = img_src[num];
    }
 
    setInterval(slide_time, 3000);