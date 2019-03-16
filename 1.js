function cetakBiodata(){
    jsondata = {
        name : "Muhamad Islahuddin",
        address : "Pekalongan",
        hobbies : ["musik", "desain"],
        is_married : false,
        school : {
            highSchool : "SMK KDW",
            university : "ITB masih angan"
        },
        skills : [
            {
                language : "javascript",
                level : "beginner"
            },  
            {
                language : "php",
                level : "beginner"
            }
        ]
    }
    value = JSON.stringify(jsondata);
    return value;
}

console.log(cetakBiodata())