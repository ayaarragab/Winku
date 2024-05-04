// Add event listener to all elements with the class 'fa-ellipsis-vertical'
$('.fa-ellipsis-vertical').click(function() {
    // Get the corresponding options-list relative to the clicked element
    var optionsList = $(this).closest('.user-post').find('.options-list');

    // If the options-list is already visible, hide it
    if (optionsList.is(':visible')) {
        optionsList.hide();
    } else {
        // Otherwise, hide all options-lists and show the related one
        $('.options-list').hide();
        optionsList.show();
    }
});

async function increaseReacts(questionId) {
    const apiUrl = `http://localhost/software-engineering-project-updated/codebase/Controllers/api/questionReacts/questionReacts.php?id=${parseInt(questionId)}`;
    const response = await fetch(apiUrl);
    const jsonData = await response.json();
    console.log(jsonData);
    // const content = document.querySelector('.products .carousel-inner');
    // let htmlcontent = ``;
}
async function decreaseReacts(questionId) {
    const apiUrl = `http://localhost/software-engineering-project-updated/codebase/Controllers/api/questionReacts/questionReacts.php?id=${parseInt(questionId)}`;
    const response = await fetch(apiUrl);
    const jsonData = await response.json();
    console.log(jsonData);
    // const content = document.querySelector('.products .carousel-inner');
    // let htmlcontent = ``;
}

async function ViewNumAnswers(questionId) {
    const apiUrl = `http://localhost/software-engineering-project-updated/codebase/Controllers/api/questionReacts/questionReacts.php?id=${parseInt(questionId)}`;
    const response = await fetch(apiUrl);
    const jsonData = await response.json();
    console.log(jsonData);
    // const content = document.querySelector('.products .carousel-inner');
    // let htmlcontent = ``;
}
// const questions = document.getElementsByClassName('to-select-in-js');
// for (let index = 0; index < questions.length; index++) {
//     const question = questions[index];
//     question.addEventListener('click', function(){
//         console.log(question);
//         console.log('debugggg');
//         const questionId = this.dataset.id;
//         console.log(questionId);
//         increaseOrDecreaseReacts(questionId);
//     });
// }
