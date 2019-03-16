function isiPasswordValid(data){
    a = 0;
    if (data.length == 8){
        if (data.match(/[a-z]/g) != null){
            a++;
        }
        if (data.match(/[0-9]/g) != null){
            a++;
        }
        if (data.match(/[A-Z]/g) != null ){
            a++;
        }
        if (data.match(/[&,_]/g) != null ){
            a++;
        }
        if ( a == 4){
            return true
        }else{
            return false;
        }
    }else{
        return "password kurang";
    }
}
console.log(isiPasswordValid("12D4a&_d"));