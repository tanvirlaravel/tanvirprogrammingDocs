function Person(name){
    this.name = name;
    this.introduceYourSelf= function(){
        console.log(`Hi I'm ${this.name}`)
    }
}

const sava = new Person('Tanvir')