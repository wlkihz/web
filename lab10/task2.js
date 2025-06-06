function CountVowels(arr) {
    let i = 0;
    for (let j = 0; j < arr.length; j++) {
        if (
            arr[j] == "а" ||
            arr[j] == "е" ||
            arr[j] == "ё" ||
            arr[j] == "и" ||
            arr[j] == "о" ||
            arr[j] == "у" ||
            arr[j] == "ы" ||
            arr[j] == "э" ||
            arr[j] == "ю" ||
            arr[j] == "я" ||
            arr[j] == "a" ||
            arr[j] == "e" ||
            arr[j] == "i" ||
            arr[j] == "o" ||
            arr[j] == "u" ||
            arr[j] == "y"
        ) {
            i++;
        }
    }
    return i;
}

console.log(CountVowels("I Furina will use this trial to show the world the true meaning of justice"));