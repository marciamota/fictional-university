import $ from 'jquery';

class MyNotes {
    events() {
        $(".delete-note").on("click", this.deleteNote);
        // var test = $(".delete-note");
        // console.log("ran this");
        // document.querySelector(".delete-note").on("click", this.deleteNote);
    }

    constructor() {
        this.events();        
    }

    

    //methods will go here
    deleteNote() {
        alert("you clicked delete");
    }
}

export default MyNotes