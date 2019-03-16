function countHandshake(person){
    count = 0;
    for (a = person; a > 1; a--){
        person--;
        count += person;
    };
    console.log(count);
};

countHandshake(5);