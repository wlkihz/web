const nums = { a: 1, b: 2, c: 3 };
let newobj = {};

function mapObject(obj, callback) {
    for (key in obj) { newobj[key] = callback(obj[key]); }
}

mapObject(nums, x => x * 2);
console.log(newobj);