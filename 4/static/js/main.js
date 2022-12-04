function playMusic() {
        var audioEle = document.getElementById("audio");
      if (audioEle.paused){
        audioEle.play();
      }else {
        audioEle.pause();
      }
    }
    
    $("#music").click(function(){
      play();
    });

    var player = document.getElementById("audio");
    play();
    function play(){
    swal("欢迎光临玲珑塔官网\n请问是否开启音乐呢？", {
            buttons: {
                cancel: "开启",
                allow: "关闭"
            }
        }).then(function(value) {
            if (value == "allow") {
                player.pause()
            } else {
                player.play();
            }
        });
    }

