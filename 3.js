function drawImage(data){
    var awal = 1;
    var akhir = data;
    var mid = Math.ceil(akhir/2);
    str = "";
    for ( x = 1; x <= data; x++){
        str = "";
        for ( a = 1 ; a <= data; a++){
            if (x == mid){
                str += "*"+" ";
            }else if(x == awal || x == akhir){
                if( a == awal || a == mid || a == akhir){
                    str += "*"+" ";
                }else{
                    str += "="+" ";
                }
            }else{
                if (a == mid){
                    str += "*"+" ";
                }else{
                    str += "="+" ";
                }
            }
            
        }
        console.log(str)
    }
}

drawImage(7);

