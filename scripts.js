function verify(){
    let paragraphs = document.getElementsByTagName("input")
    let pass1=paragraphs[0].value
    let pass2=paragraphs[1].value

    if(pass1.length<8){
        alert("Your password 1 is not long enough!")
    }
    if(pass2.length<8){
        alert("Your password 2 is not long enough!")
    }
    else if(pass1!=pass2){
        alert("Your passwords do not match!")
    }
    else{
        alert("Your passwords are verified!")
    }
}
