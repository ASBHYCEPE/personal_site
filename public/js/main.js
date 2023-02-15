function executeGame(choice){

    choose(choice, "user");

    var comp_choose = Math.floor(Math.random()*3) + 1;

    choose(comp_choose, "computer");

    result(choice, comp_choose);


}

function choose(choice, player){
    if (choice == 1) {
        document.getElementById(player).src = "/img/game/rock.png";
    } else if (choice == 2) {
        document.getElementById(player).src = "/img/game/paper.png";
    }else{
        document.getElementById(player).src = "/img/game/scissor.png";
    }
}

function result(user_choose, comp_choose){
    if(user_choose == comp_choose){
        document.getElementById("display-result").innerHTML = "ITS A TIE!"
        document.getElementById("display-block-result").style.backgroundColor = "#FFC23C";
    }

    //Losing Conditions
    if(user_choose == 1 && comp_choose == 2){
        document.getElementById("display-result").innerHTML = "YOU LOOSE!"
        document.getElementById("display-block-result").style.backgroundColor = "#E64848";
    }else if(user_choose == 2 && comp_choose == 3){
        document.getElementById("display-result").innerHTML = "YOU LOOSE!"
        document.getElementById("display-block-result").style.backgroundColor = "#E64848";
    }else if(user_choose == 3 && comp_choose == 1){
        document.getElementById("display-result").innerHTML = "YOU LOOSE!"
        document.getElementById("display-block-result").style.backgroundColor = "#E64848";
    }
    
    //Winning conditions
    if(user_choose == 1 && comp_choose == 3){
        document.getElementById("display-result").innerHTML = "YOU WIN!"
        document.getElementById("display-block-result").style.backgroundColor = "#7DCE13";
    }else if(user_choose == 2 && comp_choose == 1){
        document.getElementById("display-result").innerHTML = "YOU WIN!"
        document.getElementById("display-block-result").style.backgroundColor = "#7DCE13";
    }else if(user_choose == 3 && comp_choose == 2){
        document.getElementById("display-result").innerHTML = "YOU WIN!"
        document.getElementById("display-block-result").style.backgroundColor = "#7DCE13";
    }

}
