pecahan = [50000, 20000, 10000, 5000, 2000, 1000, 500];
function hitungKembalian(bayar, uang){
    kembalian = uang - bayar;
    for (i = 1; i <= pecahan.length ; i++){
        if ((Math.floor(kembalian/pecahan[i])) != 0 ){
            if (kembalian % pecahan[i] > 0){
                console.log(Math.floor(kembalian/pecahan[i])+" x "+pecahan[i]);
            }else{
                console.log(Math.floor(kembalian/pecahan[i])+" x "+pecahan[i]);
                break;
            }
        }
        kembalian-=(Math.floor(kembalian/pecahan[i]))*pecahan[i];
    }
}

hitungKembalian(15500, 50000)